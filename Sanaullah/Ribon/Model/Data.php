<?php
/*
 * Sanaullah_Ribon

 * @category   Sanaullah
 * @package    Sanaullah_Ribon
 * @copyright  Copyright (c) 2019 Scott Parsons
 * @license    https://github.com/ScottParsons/module-sampleuicomponent/blob/master/LICENSE.md
 * @version    1.1.2
 */
namespace Sanaullah\Ribon\Model;

use Magento\Framework\Model\AbstractModel;
use Sanaullah\Ribon\Api\Data\DataInterface;

class Data extends AbstractModel implements DataInterface
{
    /**
     * Cache tag
     */
    const CACHE_TAG = 'sanaullah_ribon_data';

    /**
     * Initialise resource model
     * @codingStandardsIgnoreStart
     */
    protected function _construct()
    {
        // @codingStandardsIgnoreEnd
        $this->_init('Sanaullah\Ribon\Model\ResourceModel\Data');
    }

    /**
     * Get cache identities
     *
     * @return array
     */
    public function getIdentities()
    {
        return [self::CACHE_TAG . '_' . $this->getId()];
    }

    /**
     * Get title
     *
     * @return string
     */
    public function getTitle()
    {
        return $this->getData(DataInterface::TITLE);
    }

    /**
     * Set title
     *
     * @param $title
     * @return $this
     */
    public function setTitle($title)
    {
        return $this->setData(DataInterface::TITLE, $title);
    }

    /**
     * Get data description
     *
     * @return string
     */
    public function getDescription()
    {
        return $this->getData(DataInterface::TITLE);
    }

    /**
     * Set data description
     *
     * @param $description
     * @return $this
     */
    public function setDescription($description)
    {
        return $this->setData(DataInterface::DESCRIPTION, $description);
    }

    /**
     * Get ink
     *
     * @return string
     */
    public function getLink()
    {
        return $this->getData(DataInterface::LINK);
    }

    /**
     * Set ink
     *
     * @param $link
     * @return $this
     */
    public function setLink($link)
    {
        return $this->setData(DataInterface::LINK, $link);
    }


    /**
     * Get band color
     *
     * @return string
     */
    public function getBandColor()
    {
        return $this->getData(DataInterface::BAND_COLOR);
    }
    /**
     * Set band color
     *
     * @param $bandColor
     * @return $this
     */
    public function setBandColor($bandColor)
    {
        return $this->setData(DataInterface::BAND_COLOR, $bandColor);
    }

    /**
     * Get start time
     *
     * @return string
     */
    public function getStartTime()
    {
        return $this->getData(DataInterface::START_TIME);
    }
    /**
     * Set start time
     *
     * @param $startTime
     * @return $this
     */
    public function setStartTime($startTime)
    {
        return $this->setData(DataInterface::START_TIME, $startTime);
    }


     /**
     * Get start time
     *
     * @return string
     */
    public function getEndTime()
    {
        return $this->getData(DataInterface::END_TIME);
    }
    /**
     * Set end time
     *
     * @param $endTime
     * @return $this
     */
    public function setEndTime($endTime)
    {
        return $this->setData(DataInterface::END_TIME, $endTime);
    }

     /**
     * Get visible pages
     *
     * @return string
     */
    public function getVisiblePages()
    {
        return $this->getData(DataInterface::VISIBLE_PAGES);
    }
    /**
     * Set visible pages
     *
     * @param $visiblePages
     * @return $this
     */
    public function setVisiblePages($visiblePages)
    {
        return $this->setData(DataInterface::VISIBLE_PAGES, $visiblePages);
    }

    /**
     * Get created at
     *
     * @return string
     */
    public function getCreatedAt()
    {
        return $this->getData(DataInterface::CREATED_AT);
    }

    /**
     * Set created at
     *
     * @param $createdAt
     * @return $this
     */
    public function setCreatedAt($createdAt)
    {
        return $this->setData(DataInterface::CREATED_AT, $createdAt);
    }

    /**
     * Get updated at
     *
     * @return string
     */
    public function getUpdatedAt()
    {
        return $this->getData(DataInterface::UPDATED_AT);
    }

    /**
     * Set updated at
     *
     * @param $updatedAt
     * @return $this
     */
    public function setUpdatedAt($updatedAt)
    {
        return $this->setData(DataInterface::UPDATED_AT, $updatedAt);
    }
}
