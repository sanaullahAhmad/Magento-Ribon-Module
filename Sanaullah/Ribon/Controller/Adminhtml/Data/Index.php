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

use Sanaullah\Ribon\Controller\Adminhtml\Data;

class Index extends Data
{
    /**
     * @return \Magento\Framework\View\Result\Page
     */
    public function execute()
    {
        return $this->resultPageFactory->create();
    }
}
