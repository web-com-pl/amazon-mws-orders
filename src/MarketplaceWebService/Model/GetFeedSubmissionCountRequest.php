<?php
/** 
 *  PHP Version 5
 *
 *  @category    Amazon
 *  @package     MarketplaceWebService
 *  @copyright   Copyright 2009 Amazon Technologies, Inc.
 *  @link        http://aws.amazon.com
 *  @license     http://aws.amazon.com/apache2.0  Apache License, Version 2.0
 *  @version     2009-01-01
 */
/******************************************************************************* 

 *  Marketplace Web Service PHP5 Library
 *  Generated: Thu May 07 13:07:36 PDT 2009
 * 
 */

/**
 *  @see AmazonModelAbstract
 */
namespace Webcom\MarketPlaceWebService\Model;
use Webcom\MarketPlaceWebService\AmazonModelAbstract;  

    

/**
 * GetFeedSubmissionCountRequest
 * 
 * Properties:
 * <ul>
 * 
 * <li>Marketplace: string</li>
 * <li>SellerId: string</li>
 * <li>FeedTypeList: TypeList</li>
 * <li>FeedProcessingStatusList: StatusList</li>
 * <li>SubmittedFromDate: string</li>
 * <li>SubmittedToDate: string</li>
 *
 * </ul>
 */ 
class GetFeedSubmissionCountRequest extends AmazonModelAbstract
{


    /**
     * Construct new GetFeedSubmissionCountRequest
     * 
     * @param mixed $data DOMElement or Associative Array to construct from. 
     * 
     * Valid properties:
     * <ul>
     * 
     * <li>Marketplace: string</li>
     * <li>SellerId: string</li>
     * <li>FeedTypeList: TypeList</li>
     * <li>FeedProcessingStatusList: StatusList</li>
     * <li>SubmittedFromDate: string</li>
     * <li>SubmittedToDate: string</li>
     *
     * </ul>
     */
    public function __construct($data = null)
    {
        $this->fields = array (
        'Marketplace' => array('FieldValue' => null, 'FieldType' => 'string'),
        'SellerId' => array('FieldValue' => null, 'FieldType' => 'string'),
        'MWSAuthToken' => array('FieldValue' => null, 'FieldType' => 'string'),
        'FeedTypeList' => array('FieldValue' => null, 'FieldType' => 'Model\TypeList'),
        'FeedProcessingStatusList' => array('FieldValue' => null, 'FieldType' => 'Model\StatusList'),
        'SubmittedFromDate' => array('FieldValue' => null, 'FieldType' => 'DateTime'),
        'SubmittedToDate' => array('FieldValue' => null, 'FieldType' => 'DateTime'),
        );
        parent::__construct($data);
    }

        /**
     * Gets the value of the Marketplace property.
     * 
     * @return string Marketplace
     */
    public function getMarketplace() 
    {
        return $this->fields['Marketplace']['FieldValue'];
    }

    /**
     * Sets the value of the Marketplace property.
     * 
     * @param string Marketplace
     * @return this instance
     */
    public function setMarketplace($value) 
    {
        $this->fields['Marketplace']['FieldValue'] = $value;
        return $this;
    }

    /**
     * Sets the value of the Marketplace and returns this instance
     * 
     * @param string $value Marketplace
     * @return GetFeedSubmissionCountRequest instance
     */
    public function withMarketplace($value)
    {
        $this->setMarketplace($value);
        return $this;
    }


    /**
     * Checks if Marketplace is set
     * 
     * @return bool true if Marketplace  is set
     */
    public function isSetMarketplace()
    {
        return !is_null($this->fields['Marketplace']['FieldValue']);
    }

    /**
     * Gets the value of the SellerId property.
     * 
     * @return string SellerId
     */
    public function getSellerId()
    {
        return $this->fields['SellerId']['FieldValue'];
    }

    /**
     * Sets the value of the SellerId property.
     * 
     * @param string SellerId
     * @return this instance
     */
    public function setSellerId($value)
    {
        $this->fields['SellerId']['FieldValue'] = $value;
        return $this;
    }

    /**
     * Sets the value of the SellerId and returns this instance
     * 
     * @param string $value SellerId
     * @return GetFeedSubmissionCountRequest instance
     */
    public function withSellerId($value)
    {
        $this->setSellerId($value);
        return $this;
    }


    /**
     * Checks if SellerId is set
     * 
     * @return bool true if SellerId  is set
     */
    public function isSetSellerId()
    {
        return !is_null($this->fields['SellerId']['FieldValue']);
    }

    /**
     * Gets the value of the MWSAuthToken property.
     *
     * @return string MWSAuthToken
     */
    public function getMWSAuthToken()
    {
        return $this->fields['MWSAuthToken']['FieldValue'];
    }

    /**
     * Sets the value of the MWSAuthToken property.
     *
     * @param string MWSAuthToken
     * @return this instance
     */
    public function setMWSAuthToken($value)
    {
        $this->fields['MWSAuthToken']['FieldValue'] = $value;
        return $this;
    }

    /**
     * Sets the value of the MWSAuthToken and returns this instance
     *
     * @param string $value MWSAuthToken
     * @return GetFeedSubmissionCountRequest instance
     */
    public function withMWSAuthToken($value)
    {
        $this->setMWSAuthToken($value);
        return $this;
    }


    /**
     * Checks if MWSAuthToken is set
     *
     * @return bool true if MWSAuthToken  is set
     */
    public function isSetMWSAuthToken()
    {
        return !is_null($this->fields['MWSAuthToken']['FieldValue']);
    }

    /**
     * Gets the value of the FeedTypeList.
     * 
     * @return TypeList FeedTypeList
     */
    public function getFeedTypeList() 
    {
        return $this->fields['FeedTypeList']['FieldValue'];
    }

    /**
     * Sets the value of the FeedTypeList.
     * 
     * @param TypeList FeedTypeList
     * @return void
     */
    public function setFeedTypeList($value) 
    {
        $this->fields['FeedTypeList']['FieldValue'] = $value;
        return;
    }

    /**
     * Sets the value of the FeedTypeList  and returns this instance
     * 
     * @param TypeList $value FeedTypeList
     * @return GetFeedSubmissionCountRequest instance
     */
    public function withFeedTypeList($value)
    {
        $this->setFeedTypeList($value);
        return $this;
    }


    /**
     * Checks if FeedTypeList  is set
     * 
     * @return bool true if FeedTypeList property is set
     */
    public function isSetFeedTypeList()
    {
        return !is_null($this->fields['FeedTypeList']['FieldValue']);

    }

    /**
     * Gets the value of the FeedProcessingStatusList.
     * 
     * @return StatusList FeedProcessingStatusList
     */
    public function getFeedProcessingStatusList() 
    {
        return $this->fields['FeedProcessingStatusList']['FieldValue'];
    }

    /**
     * Sets the value of the FeedProcessingStatusList.
     * 
     * @param StatusList FeedProcessingStatusList
     * @return void
     */
    public function setFeedProcessingStatusList($value) 
    {
        $this->fields['FeedProcessingStatusList']['FieldValue'] = $value;
        return;
    }

    /**
     * Sets the value of the FeedProcessingStatusList  and returns this instance
     * 
     * @param StatusList $value FeedProcessingStatusList
     * @return GetFeedSubmissionCountRequest instance
     */
    public function withFeedProcessingStatusList($value)
    {
        $this->setFeedProcessingStatusList($value);
        return $this;
    }


    /**
     * Checks if FeedProcessingStatusList  is set
     * 
     * @return bool true if FeedProcessingStatusList property is set
     */
    public function isSetFeedProcessingStatusList()
    {
        return !is_null($this->fields['FeedProcessingStatusList']['FieldValue']);

    }

    /**
     * Gets the value of the SubmittedFromDate property.
     * 
     * @return string SubmittedFromDate
     */
    public function getSubmittedFromDate() 
    {
        return $this->fields['SubmittedFromDate']['FieldValue'];
    }

    /**
     * Sets the value of the SubmittedFromDate property.
     * 
     * @param string SubmittedFromDate
     * @return this instance
     */
    public function setSubmittedFromDate($value) 
    {
        $this->fields['SubmittedFromDate']['FieldValue'] = $value;
        return $this;
    }

    /**
     * Sets the value of the SubmittedFromDate and returns this instance
     * 
     * @param string $value SubmittedFromDate
     * @return GetFeedSubmissionCountRequest instance
     */
    public function withSubmittedFromDate($value)
    {
        $this->setSubmittedFromDate($value);
        return $this;
    }


    /**
     * Checks if SubmittedFromDate is set
     * 
     * @return bool true if SubmittedFromDate  is set
     */
    public function isSetSubmittedFromDate()
    {
        return !is_null($this->fields['SubmittedFromDate']['FieldValue']);
    }

    /**
     * Gets the value of the SubmittedToDate property.
     * 
     * @return string SubmittedToDate
     */
    public function getSubmittedToDate() 
    {
        return $this->fields['SubmittedToDate']['FieldValue'];
    }

    /**
     * Sets the value of the SubmittedToDate property.
     * 
     * @param string SubmittedToDate
     * @return this instance
     */
    public function setSubmittedToDate($value) 
    {
        $this->fields['SubmittedToDate']['FieldValue'] = $value;
        return $this;
    }

    /**
     * Sets the value of the SubmittedToDate and returns this instance
     * 
     * @param string $value SubmittedToDate
     * @return GetFeedSubmissionCountRequest instance
     */
    public function withSubmittedToDate($value)
    {
        $this->setSubmittedToDate($value);
        return $this;
    }


    /**
     * Checks if SubmittedToDate is set
     * 
     * @return bool true if SubmittedToDate  is set
     */
    public function isSetSubmittedToDate()
    {
        return !is_null($this->fields['SubmittedToDate']['FieldValue']);
    }




}
