<?php

namespace Webcom\MarketPlaceWebServiceProducts\Model;

use Webcom\MarketPlaceWebServiceProducts\AmazonModelAbstract;

/* * *****************************************************************************


 * Copyright 2009-2016 Amazon Services. All Rights Reserved.
 * Licensed under the Apache License, Version 2.0 (the "License");
 *
 * You may not use this file except in compliance with the License.
 * You may obtain a copy of the License at: http://aws.amazon.com/apache2.0
 * This file is distributed on an "AS IS" BASIS, WITHOUT WARRANTIES OR
 * CONDITIONS OF ANY KIND, either express or implied. See the License for the
 * specific language governing permissions and limitations under the License.
 * ******************************************************************************
 * PHP Version 5
 * @category Amazon
 * @package  Marketplace Web Service Products
 * @version  2011-10-01
 * Library Version: 2016-06-01
 * Generated: Fri Sep 16 11:49:32 PDT 2016
 */

/**
 *  @see MarketplaceWebServiceProducts_Model
 */

/**
 * GetMyFeesEstimateResponse
 *
 * Properties:
 * <ul>
 *
 * <li>GetMyFeesEstimateResult: GetMyFeesEstimateResult</li>
 * <li>ResponseMetadata: ResponseMetadata</li>
 * <li>ResponseHeaderMetadata: ResponseHeaderMetadata</li>
 *
 * </ul>
 */
class GetMyFeesEstimateResponse extends AmazonModelAbstract
{

    public function __construct($data = null)
    {
        $this->_fields = array(
            'GetMyFeesEstimateResult' => array('FieldValue' => null, 'FieldType' => 'Model\GetMyFeesEstimateResult'),
            'ResponseMetadata'        => array('FieldValue' => null, 'FieldType' => 'Model\ResponseMetadata'),
            'ResponseHeaderMetadata'  => array('FieldValue' => null, 'FieldType' => 'Model\ResponseHeaderMetadata'),
        );
        parent::__construct($data);
    }

    /**
     * Get the value of the GetMyFeesEstimateResult property.
     *
     * @return GetMyFeesEstimateResult GetMyFeesEstimateResult.
     */
    public function getGetMyFeesEstimateResult()
    {
        return $this->_fields['GetMyFeesEstimateResult']['FieldValue'];
    }

    /**
     * Set the value of the GetMyFeesEstimateResult property.
     *
     * @param GetMyFeesEstimateResult getMyFeesEstimateResult
     * @return this instance
     */
    public function setGetMyFeesEstimateResult($value)
    {
        $this->_fields['GetMyFeesEstimateResult']['FieldValue'] = $value;
        return $this;
    }

    /**
     * Check to see if GetMyFeesEstimateResult is set.
     *
     * @return true if GetMyFeesEstimateResult is set.
     */
    public function isSetGetMyFeesEstimateResult()
    {
        return !is_null($this->_fields['GetMyFeesEstimateResult']['FieldValue']);
    }

    /**
     * Set the value of GetMyFeesEstimateResult, return this.
     *
     * @param getMyFeesEstimateResult
     *             The new value to set.
     *
     * @return This instance.
     */
    public function withGetMyFeesEstimateResult($value)
    {
        $this->setGetMyFeesEstimateResult($value);
        return $this;
    }

    /**
     * Get the value of the ResponseMetadata property.
     *
     * @return ResponseMetadata ResponseMetadata.
     */
    public function getResponseMetadata()
    {
        return $this->_fields['ResponseMetadata']['FieldValue'];
    }

    /**
     * Set the value of the ResponseMetadata property.
     *
     * @param ResponseMetadata responseMetadata
     * @return this instance
     */
    public function setResponseMetadata($value)
    {
        $this->_fields['ResponseMetadata']['FieldValue'] = $value;
        return $this;
    }

    /**
     * Check to see if ResponseMetadata is set.
     *
     * @return true if ResponseMetadata is set.
     */
    public function isSetResponseMetadata()
    {
        return !is_null($this->_fields['ResponseMetadata']['FieldValue']);
    }

    /**
     * Set the value of ResponseMetadata, return this.
     *
     * @param responseMetadata
     *             The new value to set.
     *
     * @return This instance.
     */
    public function withResponseMetadata($value)
    {
        $this->setResponseMetadata($value);
        return $this;
    }

    /**
     * Get the value of the ResponseHeaderMetadata property.
     *
     * @return ResponseHeaderMetadata ResponseHeaderMetadata.
     */
    public function getResponseHeaderMetadata()
    {
        return $this->_fields['ResponseHeaderMetadata']['FieldValue'];
    }

    /**
     * Set the value of the ResponseHeaderMetadata property.
     *
     * @param ResponseHeaderMetadata responseHeaderMetadata
     * @return this instance
     */
    public function setResponseHeaderMetadata($value)
    {
        $this->_fields['ResponseHeaderMetadata']['FieldValue'] = $value;
        return $this;
    }

    /**
     * Check to see if ResponseHeaderMetadata is set.
     *
     * @return true if ResponseHeaderMetadata is set.
     */
    public function isSetResponseHeaderMetadata()
    {
        return !is_null($this->_fields['ResponseHeaderMetadata']['FieldValue']);
    }

    /**
     * Set the value of ResponseHeaderMetadata, return this.
     *
     * @param responseHeaderMetadata
     *             The new value to set.
     *
     * @return This instance.
     */
    public function withResponseHeaderMetadata($value)
    {
        $this->setResponseHeaderMetadata($value);
        return $this;
    }

    /**
     * Construct GetMyFeesEstimateResponse from XML string
     *
     * @param $xml
     *        XML string to construct from
     *
     * @return GetMyFeesEstimateResponse
     */
    public static function fromXML($xml)
    {
        $dom = new \DOMDocument();
        $dom->loadXML($xml);
        $xpath = new \DOMXPath($dom);
        $response = $xpath->query("//*[local-name()='GetMyFeesEstimateResponse']");
        if ($response->length == 1) {
            return new GetMyFeesEstimateResponse(($response->item(0)));
        } else {
            throw new \Exception("Unable to construct GetMyFeesEstimateResponse from provided XML.
                                  Make sure that GetMyFeesEstimateResponse is a root element");
        }
    }

    /**
     * XML Representation for this object
     *
     * @return string XML for this object
     */
    public function toXML()
    {
        $xml = "";
        $xml .= "<GetMyFeesEstimateResponse xmlns=\"http://mws.amazonservices.com/schema/Products/2011-10-01\">";
        $xml .= $this->_toXMLFragment();
        $xml .= "</GetMyFeesEstimateResponse>";
        return $xml;
    }

}
