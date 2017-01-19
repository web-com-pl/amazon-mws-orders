<?php
/*******************************************************************************
 * Copyright 2009-2015 Amazon Services. All Rights Reserved.
 * Licensed under the Apache License, Version 2.0 (the "License");
 *
 * You may not use this file except in compliance with the License.
 * You may obtain a copy of the License at: http://aws.amazon.com/apache2.0
 * This file is distributed on an "AS IS" BASIS, WITHOUT WARRANTIES OR
 * CONDITIONS OF ANY KIND, either express or implied. See the License for the
 * specific language governing permissions and limitations under the License.
 *******************************************************************************
 * PHP Version 5
 * @category Amazon
 * @package  Marketplace Web Service Orders
 * @version  2013-09-01
 * Library Version: 2015-09-24
 * Generated: Fri Sep 25 20:06:28 GMT 2015
 */

/**
 *  @see AmazonModelAbstract
 */

namespace Webcom\MarketPlaceWebServiceOrders\Model;
use Webcom\MarketPlaceWebServiceOrders\AmazonModelAbstract;


/**
 * ListOrdersByNextTokenResponse
 *
 * Properties:
 * <ul>
 *
 * <li>ListOrdersByNextTokenResult: ListOrdersByNextTokenResult</li>
 * <li>ResponseMetadata: ResponseMetadata</li>
 * <li>ResponseHeaderMetadata: ResponseHeaderMetadata</li>
 *
 * </ul>
 */

 class ListOrdersByNextTokenResponse extends AmazonModelAbstract {

    public function __construct($data = null)
    {
    $this->_fields = array (
    'ListOrdersByNextTokenResult' => array('FieldValue' => null, 'FieldType' => 'Model\ListOrdersByNextTokenResult'),
    'ResponseMetadata' => array('FieldValue' => null, 'FieldType' => 'Model\ResponseMetadata'),
    'ResponseHeaderMetadata' => array('FieldValue' => null, 'FieldType' => 'Model\ResponseHeaderMetadata'),
    );
    parent::__construct($data);
    }

    /**
     * Get the value of the ListOrdersByNextTokenResult property.
     *
     * @return ListOrdersByNextTokenResult ListOrdersByNextTokenResult.
     */
    public function getListOrdersByNextTokenResult()
    {
        return $this->_fields['ListOrdersByNextTokenResult']['FieldValue'];
    }

    /**
     * Set the value of the ListOrdersByNextTokenResult property.
     *
     * @param ListOrdersByNextTokenResult listOrdersByNextTokenResult
     * @return this instance
     */
    public function setListOrdersByNextTokenResult($value)
    {
        $this->_fields['ListOrdersByNextTokenResult']['FieldValue'] = $value;
        return $this;
    }

    /**
     * Check to see if ListOrdersByNextTokenResult is set.
     *
     * @return boolean TRUE if ListOrdersByNextTokenResult is set.
     */
    public function isSetListOrdersByNextTokenResult()
    {
                return !is_null($this->_fields['ListOrdersByNextTokenResult']['FieldValue']);
            }

    /**
     * Set the value of ListOrdersByNextTokenResult, return this.
     *
     * @param listOrdersByNextTokenResult
     *             The new value to set.
     *
     * @return This instance.
     */
    public function withListOrdersByNextTokenResult($value)
    {
        $this->setListOrdersByNextTokenResult($value);
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
     * @return boolean TRUE if ResponseMetadata is set.
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
     * @return boolean TRUE if ResponseHeaderMetadata is set.
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
     * Construct ListOrdersByNextTokenResponse from XML string
     *
     * @param $xml
     *        XML string to construct from
     *
     * @return ListOrdersByNextTokenResponse
     */
    public static function fromXML($xml)
    {
        $dom = new \DOMDocument();
        $dom->loadXML($xml);
        $xpath = new \DOMXPath($dom);
        $response = $xpath->query("//*[local-name()='ListOrdersByNextTokenResponse']");
        if ($response->length == 1) {
            return new ListOrdersByNextTokenResponse(($response->item(0)));
        } else {
            throw new \Exception ("Unable to construct ListOrdersByNextTokenResponse from provided XML.
                                  Make sure that ListOrdersByNextTokenResponse is a root element");
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
        $xml .= "<ListOrdersByNextTokenResponse xmlns=\"https://mws.amazonservices.com/Orders/2013-09-01\">";
        $xml .= $this->_toXMLFragment();
        $xml .= "</ListOrdersByNextTokenResponse>";
        return $xml;
    }

}
