<?php
/*
 * Sanaullah_Ribon

 * @category   Sanaullah
 * @package    Sanaullah_Ribon
 * @copyright  Copyright (c) 2019 Scott Parsons
 * @license    https://github.com/ScottParsons/module-sampleuicomponent/blob/master/LICENSE.md
 * @version    1.1.2
 */
namespace Sanaullah\Ribon\Controller\Adminhtml\Data;

use Magento\Framework\Registry;
use Magento\Framework\View\Result\PageFactory;
use Magento\Backend\Model\View\Result\ForwardFactory;
use Magento\Backend\App\Action\Context;
use Magento\Framework\Message\Manager;
use Magento\Framework\Api\DataObjectHelper;
use Sanaullah\Ribon\Api\DataRepositoryInterface;
use Sanaullah\Ribon\Api\Data\DataInterface;
use Sanaullah\Ribon\Api\Data\DataInterfaceFactory;
use Sanaullah\Ribon\Controller\Adminhtml\Data;

class Save extends Data
{
    /**
     * @var Manager
     */
    protected $messageManager;

    /**
     * @var DataRepositoryInterface
     */
    protected $dataRepository;

    /**
     * @var DataInterfaceFactory
     */
    protected $dataFactory;

    /**
     * @var DataObjectHelper
     */
    protected $dataObjectHelper;

    public function __construct(
        Registry $registry,
        DataRepositoryInterface $dataRepository,
        PageFactory $resultPageFactory,
        ForwardFactory $resultForwardFactory,
        Manager $messageManager,
        DataInterfaceFactory $dataFactory,
        DataObjectHelper $dataObjectHelper,
        Context $context
    ) {
        $this->messageManager   = $messageManager;
        $this->dataFactory      = $dataFactory;
        $this->dataRepository   = $dataRepository;
        $this->dataObjectHelper  = $dataObjectHelper;
        parent::__construct($registry, $dataRepository, $resultPageFactory, $resultForwardFactory, $context);
    }

    /**
     * Save action
     *
     * @return \Magento\Framework\Controller\ResultInterface
     */
    public function execute()
    {
        $data = $this->getRequest()->getPostValue();
        //$data['start_time'] = date('Y-m-d h:i:s', strtotime($data['start_time']));
        //$data['end_time'] = date('Y-m-d h:i:s', strtotime($data['end_time']));


        


        $resultRedirect = $this->resultRedirectFactory->create();
        if ($data) {
            $id = $this->getRequest()->getParam('ribon_id');
            if ($id) {
                $model = $this->dataRepository->getById($id);
            } else {
                unset($data['ribon_id']);
                $model = $this->dataFactory->create();
            }

            

            try {
                //
                $booked=0;
                $objectManager = \Magento\Framework\App\ObjectManager::getInstance();
                $resource = $objectManager->get('Magento\Framework\App\ResourceConnection');
                $connection = $resource->getConnection();
                $tableName = $resource->getTableName('sanaullah_ribon_data');
                $sql = "Select * FROM " . $tableName;
                $result = $connection->fetchAll($sql);
                foreach($result ?? [] as $ribon){
                    if ($data) {
                        $id = $this->getRequest()->getParam('ribon_id');
                        if($id != $ribon['ribon_id']){
                            $dataStartTime = str_replace('-', '', $data['start_time']);
                            $dataEndTime = str_replace('-', '', $data['start_time']);
                            $ribonStartTime = str_replace('-', '', $ribon['start_time']);
                            $ribonEndTime = str_replace('-', '', $ribon['end_time']);
                            if (($dataStartTime >= $ribonStartTime) && ($dataStartTime <= $ribonEndTime)){
                                $booked =1;
                                $this->messageManager->addErrorMessage("Ribon is already set for Date between ".date('d M, Y',strtotime($ribon['start_time']))." and ".date('d M, Y',strtotime($ribon['end_time'])));
                            }elseif (($dataEndTime <= $ribonStartTime) && ($dataEndTime >= $ribonEndTime)){
                                $booked=1; 
                                $this->messageManager->addErrorMessage("Ribon is already set for Date between ".date('d M, Y',strtotime($ribon['start_time']))." and ".date('d M, Y',strtotime($ribon['end_time'])));
                            }
                        }
                    }
                }
                //
                if($booked){
                    $this->_getSession()->setFormData($data);
                    return $resultRedirect->setPath('*/*/edit', ['ribon_id' => $this->getRequest()->getParam('ribon_id')]);
                }else{
                    $this->dataObjectHelper->populateWithArray($model, $data, DataInterface::class);

                    $this->dataRepository->save($model);
                    $this->messageManager->addSuccessMessage(__('You saved this data.'));
                    $this->_getSession()->setFormData(false);
                    if ($this->getRequest()->getParam('back')) {
                        return $resultRedirect->setPath('*/*/edit', ['ribon_id' => $model->getId(), '_current' => true]);
                    }
                    return $resultRedirect->setPath('*/*/');
                }
            } catch (\Magento\Framework\Exception\LocalizedException $e) {
                $this->messageManager->addErrorMessage($e->getMessage());
            } catch (\RuntimeException $e) {
                $this->messageManager->addErrorMessage($e->getMessage());
            } catch (\Exception $e) {
                $this->messageManager->addException($e, __('Something went wrong while saving the data.'));
            }

            $this->_getSession()->setFormData($data);
            return $resultRedirect->setPath('*/*/edit', ['ribon_id' => $this->getRequest()->getParam('ribon_id')]);
        }
        return $resultRedirect->setPath('*/*/');
    }
}
