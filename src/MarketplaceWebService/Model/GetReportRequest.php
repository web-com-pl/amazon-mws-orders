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
 * GetReportRequest
 *
 * Properties:
 * <ul>
 *
 * <li>Marketplace: string</li>
 * <li>Merchant: string</li>
 * <li>ReportId: string</li>
 *
 * </ul>
 */
class GetReportRequest extends AmazonModelAbstract
{


    /**
     * Construct new GetReportRequest
     *
     * @param mixed $data DOMElement or Associative Array to construct from.
     *
     * Valid properties:
     * <ul>
     *
     * <li>Marketplace: string</li>
     * <li>Merchant: string</li>
     * <li>ReportId: string</li>
     *
     * </ul>
     */
    public function __construct($data = null)
    {
        $this->fields = array (
        'Marketplace' => array('FieldValue' => null, 'FieldType' => 'string'),
        'SellerId' => array('FieldValue' => null, 'FieldType' => 'string'),
        'MWSAuthToken' => array('FieldValue' => null, 'FieldType' => 'string'),
        'ReportId' => array('FieldValue' => null, 'FieldType' => 'string'),
        'Report' => array('FieldValue' => null, 'FieldType' => 'string'),
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
     * @return GetReportRequest instance
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
     * Get the value of the SellerId property.
     *
     * @return String SellerId.
     */
    public function getSellerId()
    {
        return $this->fields['SellerId']['FieldValue'];
    }

    /**
     * Set the value of the SellerId property.
     *
     * @param string sellerId
     * @return this instance
     */
    public function setSellerId($value)
    {
        $this->fields['SellerId']['FieldValue'] = $value;
        return $this;
    }

    /**
     * Check to see if SellerId is set.
     *
     * @return boolean TRUE if SellerId is set.
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
     * @return GetReportRequest instance
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
     * Gets the value of the ReportId property.
     *
     * @return string ReportId
     */
    public function getReportId()
    {
        return $this->fields['ReportId']['FieldValue'];
    }

    /**
     * Sets the value of the ReportId property.
     *
     * @param string ReportId
     * @return this instance
     */
    public function setReportId($value)
    {
        $this->fields['ReportId']['FieldValue'] = $value;
        return $this;
    }

    /**
     * Sets the value of the ReportId and returns this instance
     *
     * @param string $value ReportId
     * @return GetReportRequest instance
     */
    public function withReportId($value)
    {
        $this->setReportId($value);
        return $this;
    }


    /**
     * Checks if ReportId is set
     *
     * @return bool true if ReportId  is set
     */
    public function isSetReportId()
    {
        return !is_null($this->fields['ReportId']['FieldValue']);
    }

/* -0------------------------------------------------- */

    /**
     * Gets the value of the Report property.
     *
     * @return string Report
     */
    public function getReport()
    {
        return $this->fields['Report']['FieldValue'];
    }

    /**
     * Sets the value of the Report property.
     *
     * @param string Report
     * @return this instance
     */
    public function setReport($value)
    {
        $this->fields['Report']['FieldValue'] = $value;
        return $this;
    }

    /**
     * Sets the value of the Report and returns this instance
     *
     * @param string $value Report
     * @return GetReportRequest instance
     */
    public function withReport($value)
    {
        $this->setReport($value);
        return $this;
    }


    /**
     * Checks if Report is set
     *
     * @return bool true if Report  is set
     */
    public function isSetReport()
    {
        return !is_null($this->fields['Report']['FieldValue']);
    }



}
