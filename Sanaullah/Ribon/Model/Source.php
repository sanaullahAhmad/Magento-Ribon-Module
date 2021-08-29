<?php
namespace Sanaullah\Ribon\Model;

use Magento\Framework\Data\OptionSourceInterface;

/**
* Class Status
*/
class Source implements OptionSourceInterface
{
    /**
     * Get options
     *
     * @return array
     */
    public function toOptionArray()
    {
        $segments=array();
        
        $segments[]=array('label' => 'all', 'value' => 'all');
        $segments[]=array('label' => 'home', 'value' => 'home');
        
        return $segments;
    }
}