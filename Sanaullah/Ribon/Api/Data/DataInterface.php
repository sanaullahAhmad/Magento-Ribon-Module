<?php
/*
 * Sanaullah_Ribon

 * @category   Sanaullah
 * @package    Sanaullah_Ribon
 * @copyright  Copyright (c) 2019 Scott Parsons
 * @license    https://github.com/ScottParsons/module-sampleuicomponent/blob/master/LICENSE.md
 * @version    1.1.2
 */
namespace Sanaullah\Ribon\Api\Data;

interface DataInterface
{
    /**
     * Constants for keys of data array. Identical to the name of the getter in snake case
     */
    const RIBON_ID           = 'ribon_id';
    const TITLE              = 'title';
    const DESCRIPTION        = 'description';
    const LINK               = 'link';
    const BAND_COLOR         = 'band_color';
    const START_TIME         = 'start_time';
    const END_TIME           = 'end_time';
    const VISIBLE_PAGES      = 'visible_pages';
    const CREATED_AT         = 'created_at';
    const UPDATED_AT         = 'updated_at';


    /**
     * Get ID
     *
     * @return int|null
     */
    public function getId();

    /**
     * Set ID
     *
     * @param $id
     * @return DataInterface
     */
    public function setId($id);

    /**
     * Get Title
     *
     * @return string
     */
    public function getTitle();

    /**
     * Set Title
     *
     * @param $title
     * @return mixed
     */
    public function setTitle($title);

    /**
     * Get Description
     *
     * @return mixed
     */
    public function getDescription();

    /**
     * Set Description
     *
     * @param $description
     * @return mixed
     */
    public function setDescription($description);

    /**
     * Get ink
     *
     * @return bool|int
     */
    public function getLink();

    /**
     * Set ink
     *
     * @param $link
     * @return DataInterface
     */
    public function setLink($link);
    
    /**
     * Get band color
     *
     * @return mixed
     */
    public function getBandColor();

    /**
     * Set band color
     *
     * @param $band color
     * @return DataInterface
     */
    public function setBandColor($bandColor);
    
    /**
     * Get start time
     *
     * @return string
     */
    public function getStartTime();

    /**
     * Set start time
     *
     * @param $startTime
     * @return DataInterface
     */
    public function setStartTime($startTime);
    
    /**
     * Get end time
     *
     * @return string
     */
    public function getEndTime();

    /**
     * Set end time
     *
     * @param $endTime
     * @return DataInterface
     */
    public function setEndTime($endTime);
    
    /**
     * Get visible pages
     *
     * @return mixed
     */
    public function getVisiblePages();

    /**
     * Set visible pages
     *
     * @param $visiblePages
     * @return DataInterface
     */
    public function setVisiblePages($visiblePages);

    /**
     * Get created at
     *
     * @return string
     */
    public function getCreatedAt();

    /**
     * set created at
     *
     * @param $createdAt
     * @return DataInterface
     */
    public function setCreatedAt($createdAt);

    /**
     * Get updated at
     *
     * @return string
     */
    public function getUpdatedAt();

    /**
     * set updated at
     *
     * @param $updatedAt
     * @return DataInterface
     */
    public function setUpdatedAt($updatedAt);
}
