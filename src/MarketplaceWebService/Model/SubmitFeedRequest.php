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
 * SubmitFeedRequest
 *
 * Properties:
 * <ul>
 *
 * <li>Marketplace: string</li>
 * <li>SellerId: string</li>
 * <li>MarketplaceIdList: IdList</li>
 * <li>FeedContent: string</li>
 * <li>FeedType: string</li>
 * <li>PurgeAndReplace: bool</li>
 *
 * </ul>
 */
class SubmitFeedRequest extends AmazonModelAbstract
{


    /**
     * Construct new SubmitFeedRequest
     *
     * @param mixed $data DOMElement or Associative Array to construct from.
     *
     * Valid properties:
     * <ul>
     *
     * <li>Marketplace: string</li>
     * <li>SellerId: string</li>
     * <li>MarketplaceIdList: IdList</li>
     * <li>FeedContent: string</li>
     * <li>FeedType: string</li>
     * <li>PurgeAndReplace: bool</li>
     *
     * </ul>
     */

    private static $DEFAULT_CONTENT_TYPE;

    public function __construct($data = null)
    {
    	self::$DEFAULT_CONTENT_TYPE = new ContentType(
    		array('ContentType' => 'application/octet-stream'));

        // Here we're setting the content-type field directly to the object, but beware the actual
        // method of construction from associative arrays from the client interface would do something like:
        // $parameters = array ('ContentType' => array('ContentType' => 'application/octet-stream'));

        $this->fields = array (
        'Marketplace' => array('FieldValue' => null, 'FieldType' => 'string'),
        'SellerId' => array('FieldValue' => null, 'FieldType' => 'string'),
        'MWSAuthToken' => array('FieldValue' => null, 'FieldType' => 'string'),
        'MarketplaceIdList' => array('FieldValue' => null, 'FieldType' => 'Model\IdList'),
        'FeedContent' => array ('FieldValue' => null, 'FieldType' => 'string'),
        'FeedOptions' => array ('FieldValue' => null, 'FieldType' => 'string'),
        'FeedType' => array('FieldValue' => null, 'FieldType' => 'string'),
        'PurgeAndReplace' => array('FieldValue' => null, 'FieldType' => 'bool'),
        'ContentMd5' => array ('FieldValue' => null, 'FieldType' => 'string'),
 	    'ContentType' => array ('FieldValue' => self::$DEFAULT_CONTENT_TYPE, 'FieldType' => 'Model\ContentType')
        );

        parent::__construct($data);

        if (!is_null($this->fields['ContentType']['FieldValue'])) {
        	$this->verifySupportedContentType($this->fields['ContentType']['FieldValue']);
        }

    }

    private function verifySupportedContentType($supplied) {
    if (!($supplied == self::$DEFAULT_CONTENT_TYPE)) {
    		throw new MarketplaceWebService_Exception(array('Message' =>
    			"Unsupported ContentType " .  $supplied->getContentType() .
    			" ContentType must be " . self::$DEFAULT_CONTENT_TYPE->getContentType()));
    	}
    }

    /**
     * Gets the value of the content type
     *
     * @return ContentType instance
     */

    public function getContentType()
    {
        return $this->fields['ContentType']['FieldValue'];
    }

    public function setContentType($value) {
    	$this->verifySupportedContentType($value);
    	$this->fields['ContentType']['FieldValue'] = $value;
        return $this;
    }

    public function isSetContentType() {
    	return !is_null($this->fields['ContentType']['FieldValue']);
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
     * @return SubmitFeedRequest instance
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
     * @return SubmitFeedRequest instance
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
     * Gets the value of the MarketplaceIdList.
     *
     * @return IdList MarketplaceIdList
     */
    public function getMarketplaceIdList()
    {
        return $this->fields['MarketplaceIdList']['FieldValue'];
    }

    /**
     * Sets the value of the MarketplaceIdList.
     *
     * @param IdList MarketplaceIdList
     * @return void
     */
    public function setMarketplaceIdList($value)
    {
	$marketplaceIdList = new IdList();
	$marketplaceIdList->setId($value['Id']);
        $this->fields['MarketplaceIdList']['FieldValue'] = $marketplaceIdList;
        return;
    }

    /**
     * Sets the value of the MarketplaceIdList  and returns this instance
     *
     * @param IdList $value MarketplaceIdList
     * @return SubmitFeedRequest instance
     */
    public function withMarketplaceIdList($value)
    {
        $this->setMarketplaceIdList($value);
        return $this;
    }


    /**
     * Checks if MarketplaceIdList  is set
     *
     * @return bool true if MarketplaceIdList property is set
     */
    public function isSetMarketplaceIdList()
    {
        return !is_null($this->fields['MarketplaceIdList']['FieldValue']);

    }

    /**
     * Gets the value of the FeedContent property.
     *
     * @return string FeedContent
     */
    public function getFeedContent()
    {
        return $this->fields['FeedContent']['FieldValue'];
    }

    /**
     * Sets the value of the FeedContent property.
     *
     * @param string FeedContent
     * @return this instance
     */
    public function setFeedContent($value)
    {
        $this->fields['FeedContent']['FieldValue'] = $value;
        return $this;
    }

    /**
     * Sets the value of the FeedContent and returns this instance
     *
     * @param string $value FeedContent
     * @return SubmitFeedRequest instance
     */
    public function withFeedContent($value)
    {
        $this->setFeedContent($value);
        return $this;
    }


    /**
     * Checks if FeedContent is set
     *
     * @return bool true if FeedContent  is set
     */
    public function isSetFeedContent()
    {
        return !is_null($this->fields['FeedContent']['FieldValue']);
    }

    /**
     * Gets the value of the FeedOptions property.
     *
     * @return string FeedOptions
     */
    public function getFeedOptions()
    {
        return $this->fields['FeedOptions']['FieldValue'];
    }

    /**
     * Sets the value of the FeedOptions property.
     *
     * @param string FeedOptions
     * @return this instance
     */
    public function setFeedOptions($value)
    {
        $this->fields['FeedOptions']['FieldValue'] = $value;
        return $this;
    }

    /**
     * Sets the value of the FeedOptions and returns this instance
     *
     * @param string $value FeedOptions
     * @return SubmitFeedRequest instance
     */
    public function withFeedOptions($value)
    {
        $this->setFeedOptions($value);
        return $this;
    }


    /**
     * Checks if FeedOptions is set
     *
     * @return bool true if FeedOptions  is set
     */
    public function isSetFeedOptions()
    {
        return !is_null($this->fields['FeedOptions']['FieldValue']);
    }

    /**
     * Gets the value of the FeedType property.
     *
     * @return string FeedType
     */
    public function getFeedType()
    {
        return $this->fields['FeedType']['FieldValue'];
    }

    /**
     * Sets the value of the FeedType property.
     *
     * @param string FeedType
     * @return this instance
     */
    public function setFeedType($value)
    {
        $this->fields['FeedType']['FieldValue'] = $value;
        return $this;
    }

    /**
     * Sets the value of the FeedType and returns this instance
     *
     * @param string $value FeedType
     * @return SubmitFeedRequest instance
     */
    public function withFeedType($value)
    {
        $this->setFeedType($value);
        return $this;
    }


    /**
     * Checks if FeedType is set
     *
     * @return bool true if FeedType  is set
     */
    public function isSetFeedType()
    {
        return !is_null($this->fields['FeedType']['FieldValue']);
    }

    /**
     * Gets the value of the PurgeAndReplace property.
     *
     * @return bool PurgeAndReplace
     */
    public function getPurgeAndReplace()
    {
        return $this->fields['PurgeAndReplace']['FieldValue'];
    }

    /**
     * Sets the value of the PurgeAndReplace property.
     *
     * @param bool PurgeAndReplace
     * @return this instance
     */
    public function setPurgeAndReplace($value)
    {
        $this->fields['PurgeAndReplace']['FieldValue'] = $value;
        return $this;
    }

    /**
     * Sets the value of the PurgeAndReplace and returns this instance
     *
     * @param bool $value PurgeAndReplace
     * @return SubmitFeedRequest instance
     */
    public function withPurgeAndReplace($value)
    {
        $this->setPurgeAndReplace($value);
        return $this;
    }


    /**
     * Checks if PurgeAndReplace is set
     *
     * @return bool true if PurgeAndReplace  is set
     */
    public function isSetPurgeAndReplace()
    {
        return !is_null($this->fields['PurgeAndReplace']['FieldValue']);
    }

    /**
     * Gets the value of the ContentMd5 property.
     *
     * @return bool ContentMd5
     */
    public function getContentMd5()
    {
        return $this->fields['ContentMd5']['FieldValue'];
    }

    /**
     * Sets the value of the ContentMd5 property.
     *
     * @param bool ContentMd5
     * @return this instance
     */
    public function setContentMd5($value)
    {
        $this->fields['ContentMd5']['FieldValue'] = $value;
        return $this;
    }

    /**
     * Sets the value of the ContentMd5 and returns this instance
     *
     * @param bool $value ContentMd5
     * @return SubmitFeedRequest instance
     */
    public function withContentMd5($value)
    {
        $this->setContentMd5($value);
        return $this;
    }


    /**
     * Checks if ContentMd5 is set
     *
     * @return bool true if ContentMd5  is set
     */
    public function isSetContentMd5()
    {
        return !is_null($this->fields['ContentMd5']['FieldValue']);
    }

}
