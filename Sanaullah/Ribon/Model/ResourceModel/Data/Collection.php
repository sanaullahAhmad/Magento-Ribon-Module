<?php
/*
 * Sanaullah_Ribon

 * @category   Sanaullah
 * @package    Sanaullah_Ribon
 * @copyright  Copyright (c) 2019 Scott Parsons
 * @license    https://github.com/ScottParsons/module-sampleuicomponent/blob/master/LICENSE.md
 * @version    1.1.2
 */
namespace Sanaullah\Ribon\Model\ResourceModel\Data;

use Magento\Framework\Model\ResourceModel\Db\Collection\AbstractCollection;

class Collection extends AbstractCollection
{
    /**
     * @var string
     * @codingStandardsIgnoreStart
     */
    protected $_idFieldName = 'ribon_id';

    /**
     * Collection initialisation
     */
    protected function _construct()
    {
        // @codingStandardsIgnoreEnd
        $this->_init('Sanaullah\Ribon\Model\Data', 'Sanaullah\Ribon\Model\ResourceModel\Data');
    }
}
