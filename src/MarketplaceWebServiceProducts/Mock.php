<?php

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
 *  @see MarketplaceWebServiceProducts_Interface
 */
namespace Webcom\MarketPlaceWebServiceProducts;
use Webcom\MarketPlaceWebServiceProduct\Model as AmazonModel;

class Mock implements AmazonInterface
{
    // Public API ------------------------------------------------------------//
    /**
     * Get Competitive Pricing For ASIN
     * Gets competitive pricing and related information for a product identified by
     * the MarketplaceId and ASIN.
     *
     * @param mixed $request array of parameters for AmazonModel\GetCompetitivePricingForASIN request or AmazonModel\GetCompetitivePricingForASIN object itself
     * @see AmazonModel\GetCompetitivePricingForASIN
     * @return AmazonModel\GetCompetitivePricingForASINResponse
     *
     * @throws AmazonException
     */
    public function getCompetitivePricingForASIN($request)
    {
        
        return AmazonModel\GetCompetitivePricingForASINResponse::fromXML($this->_invoke('GetCompetitivePricingForASIN'));
    }

    /**
     * Get Competitive Pricing For SKU
     * Gets competitive pricing and related information for a product identified by
     * the SellerId and SKU.
     *
     * @param mixed $request array of parameters for AmazonModel\GetCompetitivePricingForSKU request or AmazonModel\GetCompetitivePricingForSKU object itself
     * @see AmazonModel\GetCompetitivePricingForSKU
     * @return AmazonModel\GetCompetitivePricingForSKUResponse
     *
     * @throws AmazonException
     */
    public function getCompetitivePricingForSKU($request)
    {
        
        return AmazonModel\GetCompetitivePricingForSKUResponse::fromXML($this->_invoke('GetCompetitivePricingForSKU'));
    }

    /**
     * Get Lowest Offer Listings For ASIN
     * Gets some of the lowest prices based on the product identified by the given
     * MarketplaceId and ASIN.
     *
     * @param mixed $request array of parameters for AmazonModel\GetLowestOfferListingsForASIN request or AmazonModel\GetLowestOfferListingsForASIN object itself
     * @see AmazonModel\GetLowestOfferListingsForASIN
     * @return AmazonModel\GetLowestOfferListingsForASINResponse
     *
     * @throws AmazonException
     */
    public function getLowestOfferListingsForASIN($request)
    {
        
        return AmazonModel\GetLowestOfferListingsForASINResponse::fromXML($this->_invoke('GetLowestOfferListingsForASIN'));
    }

    /**
     * Get Lowest Offer Listings For SKU
     * Gets some of the lowest prices based on the product identified by the given
     * SellerId and SKU.
     *
     * @param mixed $request array of parameters for AmazonModel\GetLowestOfferListingsForSKU request or AmazonModel\GetLowestOfferListingsForSKU object itself
     * @see AmazonModel\GetLowestOfferListingsForSKU
     * @return AmazonModel\GetLowestOfferListingsForSKUResponse
     *
     * @throws AmazonException
     */
    public function getLowestOfferListingsForSKU($request)
    {
        
        return AmazonModel\GetLowestOfferListingsForSKUResponse::fromXML($this->_invoke('GetLowestOfferListingsForSKU'));
    }

    /**
     * Get Lowest Priced Offers For ASIN
     * Retrieves the lowest priced offers based on the product identified by the given
     *     ASIN.
     *
     * @param mixed $request array of parameters for AmazonModel\GetLowestPricedOffersForASIN request or AmazonModel\GetLowestPricedOffersForASIN object itself
     * @see AmazonModel\GetLowestPricedOffersForASIN
     * @return AmazonModel\GetLowestPricedOffersForASINResponse
     *
     * @throws AmazonException
     */
    public function getLowestPricedOffersForASIN($request)
    {
        
        return AmazonModel\GetLowestPricedOffersForASINResponse::fromXML($this->_invoke('GetLowestPricedOffersForASIN'));
    }

    /**
     * Get Lowest Priced Offers For SKU
     * Retrieves the lowest priced offers based on the product identified by the given
     *     SellerId and SKU.
     *
     * @param mixed $request array of parameters for AmazonModel\GetLowestPricedOffersForSKU request or AmazonModel\GetLowestPricedOffersForSKU object itself
     * @see AmazonModel\GetLowestPricedOffersForSKU
     * @return AmazonModel\GetLowestPricedOffersForSKUResponse
     *
     * @throws AmazonException
     */
    public function getLowestPricedOffersForSKU($request)
    {
        
        return AmazonModel\GetLowestPricedOffersForSKUResponse::fromXML($this->_invoke('GetLowestPricedOffersForSKU'));
    }

    /**
     * Get Matching Product
     * GetMatchingProduct will return the details (attributes) for the
     * given ASIN.
     *
     * @param mixed $request array of parameters for AmazonModel\GetMatchingProduct request or AmazonModel\GetMatchingProduct object itself
     * @see AmazonModel\GetMatchingProduct
     * @return AmazonModel\GetMatchingProductResponse
     *
     * @throws AmazonException
     */
    public function getMatchingProduct($request)
    {
        
        return AmazonModel\GetMatchingProductResponse::fromXML($this->_invoke('GetMatchingProduct'));
    }

    /**
     * Get Matching Product For Id
     * GetMatchingProduct will return the details (attributes) for the
     * given Identifier list. Identifer type can be one of [SKU|ASIN|UPC|EAN|ISBN|GTIN|JAN]
     *
     * @param mixed $request array of parameters for AmazonModel\GetMatchingProductForId request or AmazonModel\GetMatchingProductForId object itself
     * @see AmazonModel\GetMatchingProductForId
     * @return AmazonModel\GetMatchingProductForIdResponse
     *
     * @throws AmazonException
     */
    public function getMatchingProductForId($request)
    {
        
        return AmazonModel\GetMatchingProductForIdResponse::fromXML($this->_invoke('GetMatchingProductForId'));
    }

    /**
     * Get My Fees Estimate
     * Retrieves the fees estimate for the
     *         products identified by the given
     *         ASIN/SKU list.
     *
     * @param mixed $request array of parameters for AmazonModel\GetMyFeesEstimate request or AmazonModel\GetMyFeesEstimate object itself
     * @see AmazonModel\GetMyFeesEstimate
     * @return AmazonModel\GetMyFeesEstimateResponse
     *
     * @throws AmazonException
     */
    public function getMyFeesEstimate($request)
    {
        
        return AmazonModel\GetMyFeesEstimateResponse::fromXML($this->_invoke('GetMyFeesEstimate'));
    }

    /**
     * Get My Price For ASIN
     * <!-- Wrong doc in current code -->
     *
     * @param mixed $request array of parameters for AmazonModel\GetMyPriceForASIN request or AmazonModel\GetMyPriceForASIN object itself
     * @see AmazonModel\GetMyPriceForASIN
     * @return AmazonModel\GetMyPriceForASINResponse
     *
     * @throws AmazonException
     */
    public function getMyPriceForASIN($request)
    {
        
        return AmazonModel\GetMyPriceForASINResponse::fromXML($this->_invoke('GetMyPriceForASIN'));
    }

    /**
     * Get My Price For SKU
     * <!-- Wrong doc in current code -->
     *
     * @param mixed $request array of parameters for AmazonModel\GetMyPriceForSKU request or AmazonModel\GetMyPriceForSKU object itself
     * @see AmazonModel\GetMyPriceForSKU
     * @return AmazonModel\GetMyPriceForSKUResponse
     *
     * @throws AmazonException
     */
    public function getMyPriceForSKU($request)
    {
        
        return AmazonModel\GetMyPriceForSKUResponse::fromXML($this->_invoke('GetMyPriceForSKU'));
    }

    /**
     * Get Product Categories For ASIN
     * Gets categories information for a product identified by
     * the MarketplaceId and ASIN.
     *
     * @param mixed $request array of parameters for AmazonModel\GetProductCategoriesForASIN request or AmazonModel\GetProductCategoriesForASIN object itself
     * @see AmazonModel\GetProductCategoriesForASIN
     * @return AmazonModel\GetProductCategoriesForASINResponse
     *
     * @throws AmazonException
     */
    public function getProductCategoriesForASIN($request)
    {
        
        return AmazonModel\GetProductCategoriesForASINResponse::fromXML($this->_invoke('GetProductCategoriesForASIN'));
    }

    /**
     * Get Product Categories For SKU
     * Gets categories information for a product identified by
     * the SellerId and SKU.
     *
     * @param mixed $request array of parameters for AmazonModel\GetProductCategoriesForSKU request or AmazonModel\GetProductCategoriesForSKU object itself
     * @see AmazonModel\GetProductCategoriesForSKU
     * @return AmazonModel\GetProductCategoriesForSKUResponse
     *
     * @throws AmazonException
     */
    public function getProductCategoriesForSKU($request)
    {
        
        return AmazonModel\GetProductCategoriesForSKUResponse::fromXML($this->_invoke('GetProductCategoriesForSKU'));
    }

    /**
     * Get Service Status
     * Returns the service status of a particular MWS API section. The operation
     * takes no input.
     * All API sections within the API are required to implement this operation.
     *
     * @param mixed $request array of parameters for AmazonModel\GetServiceStatus request or AmazonModel\GetServiceStatus object itself
     * @see AmazonModel\GetServiceStatus
     * @return AmazonModel\GetServiceStatusResponse
     *
     * @throws AmazonException
     */
    public function getServiceStatus($request)
    {
        
        return AmazonModel\GetServiceStatusResponse::fromXML($this->_invoke('GetServiceStatus'));
    }

    /**
     * List Matching Products
     * ListMatchingProducts can be used to
     * find products that match the given criteria.
     *
     * @param mixed $request array of parameters for AmazonModel\ListMatchingProducts request or AmazonModel\ListMatchingProducts object itself
     * @see AmazonModel\ListMatchingProducts
     * @return AmazonModel\ListMatchingProductsResponse
     *
     * @throws AmazonException
     */
    public function listMatchingProducts($request)
    {
        
        return AmazonModel\ListMatchingProductsResponse::fromXML($this->_invoke('ListMatchingProducts'));
    }

    // Private API ------------------------------------------------------------//

    private function _invoke($actionName)
    {
        return $xml = file_get_contents(dirname(__FILE__) . '/Mock/' . $actionName . 'Response.xml', /** search include path */ TRUE);
    }

}
