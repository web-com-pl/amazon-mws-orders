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

namespace Webcom\MarketPlaceWebServiceProducts;
use Webcom\MarketPlaceWebServiceProduct\Model as AmazonModel;

interface AmazonInterface
{
    /**
     * Get Competitive Pricing For ASIN
     * Gets competitive pricing and related information for a product identified by
     * the MarketplaceId and ASIN.
     *
     * @param mixed $request array of parameters for AmazonModel\GetCompetitivePricingForASIN request or AmazonModel\GetCompetitivePricingForASIN object itself
     * @see AmazonModel\GetCompetitivePricingForASINRequest
     * @return AmazonModel\GetCompetitivePricingForASINResponse
     *
     * @throws AmazonException
     */
    public function getCompetitivePricingForASIN($request);
    /**
     * Get Competitive Pricing For SKU
     * Gets competitive pricing and related information for a product identified by
     * the SellerId and SKU.
     *
     * @param mixed $request array of parameters for AmazonModel\GetCompetitivePricingForSKU request or AmazonModel\GetCompetitivePricingForSKU object itself
     * @see AmazonModel\GetCompetitivePricingForSKURequest
     * @return AmazonModel\GetCompetitivePricingForSKUResponse
     *
     * @throws AmazonException
     */
    public function getCompetitivePricingForSKU($request);
    /**
     * Get Lowest Offer Listings For ASIN
     * Gets some of the lowest prices based on the product identified by the given
     * MarketplaceId and ASIN.
     *
     * @param mixed $request array of parameters for AmazonModel\GetLowestOfferListingsForASIN request or AmazonModel\GetLowestOfferListingsForASIN object itself
     * @see AmazonModel\GetLowestOfferListingsForASINRequest
     * @return AmazonModel\GetLowestOfferListingsForASINResponse
     *
     * @throws AmazonException
     */
    public function getLowestOfferListingsForASIN($request);
    /**
     * Get Lowest Offer Listings For SKU
     * Gets some of the lowest prices based on the product identified by the given
     * SellerId and SKU.
     *
     * @param mixed $request array of parameters for AmazonModel\GetLowestOfferListingsForSKU request or AmazonModel\GetLowestOfferListingsForSKU object itself
     * @see AmazonModel\GetLowestOfferListingsForSKURequest
     * @return AmazonModel\GetLowestOfferListingsForSKUResponse
     *
     * @throws AmazonException
     */
    public function getLowestOfferListingsForSKU($request);
    /**
     * Get Lowest Priced Offers For ASIN
     * Retrieves the lowest priced offers based on the product identified by the given
     *     ASIN.
     *
     * @param mixed $request array of parameters for AmazonModel\GetLowestPricedOffersForASIN request or AmazonModel\GetLowestPricedOffersForASIN object itself
     * @see AmazonModel\GetLowestPricedOffersForASINRequest
     * @return AmazonModel\GetLowestPricedOffersForASINResponse
     *
     * @throws AmazonException
     */
    public function getLowestPricedOffersForASIN($request);
    /**
     * Get Lowest Priced Offers For SKU
     * Retrieves the lowest priced offers based on the product identified by the given
     *     SellerId and SKU.
     *
     * @param mixed $request array of parameters for AmazonModel\GetLowestPricedOffersForSKU request or AmazonModel\GetLowestPricedOffersForSKU object itself
     * @see AmazonModel\GetLowestPricedOffersForSKURequest
     * @return AmazonModel\GetLowestPricedOffersForSKUResponse
     *
     * @throws AmazonException
     */
    public function getLowestPricedOffersForSKU($request);
    /**
     * Get Matching Product
     * GetMatchingProduct will return the details (attributes) for the
     * given ASIN.
     *
     * @param mixed $request array of parameters for AmazonModel\GetMatchingProduct request or AmazonModel\GetMatchingProduct object itself
     * @see AmazonModel\GetMatchingProductRequest
     * @return AmazonModel\GetMatchingProductResponse
     *
     * @throws AmazonException
     */
    public function getMatchingProduct($request);
    /**
     * Get Matching Product For Id
     * GetMatchingProduct will return the details (attributes) for the
     * given Identifier list. Identifer type can be one of [SKU|ASIN|UPC|EAN|ISBN|GTIN|JAN]
     *
     * @param mixed $request array of parameters for AmazonModel\GetMatchingProductForId request or AmazonModel\GetMatchingProductForId object itself
     * @see AmazonModel\GetMatchingProductForIdRequest
     * @return AmazonModel\GetMatchingProductForIdResponse
     *
     * @throws AmazonException
     */
    public function getMatchingProductForId($request);
    /**
     * Get My Fees Estimate
     * Retrieves the fees estimate for the
     *         products identified by the given
     *         ASIN/SKU list.
     *
     * @param mixed $request array of parameters for AmazonModel\GetMyFeesEstimate request or AmazonModel\GetMyFeesEstimate object itself
     * @see AmazonModel\GetMyFeesEstimateRequest
     * @return AmazonModel\GetMyFeesEstimateResponse
     *
     * @throws AmazonException
     */
    public function getMyFeesEstimate($request);
    /**
     * Get My Price For ASIN
     * <!-- Wrong doc in current code -->
     *
     * @param mixed $request array of parameters for AmazonModel\GetMyPriceForASIN request or AmazonModel\GetMyPriceForASIN object itself
     * @see AmazonModel\GetMyPriceForASINRequest
     * @return AmazonModel\GetMyPriceForASINResponse
     *
     * @throws AmazonException
     */
    public function getMyPriceForASIN($request);
    /**
     * Get My Price For SKU
     * <!-- Wrong doc in current code -->
     *
     * @param mixed $request array of parameters for AmazonModel\GetMyPriceForSKU request or AmazonModel\GetMyPriceForSKU object itself
     * @see AmazonModel\GetMyPriceForSKURequest
     * @return AmazonModel\GetMyPriceForSKUResponse
     *
     * @throws AmazonException
     */
    public function getMyPriceForSKU($request);
    /**
     * Get Product Categories For ASIN
     * Gets categories information for a product identified by
     * the MarketplaceId and ASIN.
     *
     * @param mixed $request array of parameters for AmazonModel\GetProductCategoriesForASIN request or AmazonModel\GetProductCategoriesForASIN object itself
     * @see AmazonModel\GetProductCategoriesForASINRequest
     * @return AmazonModel\GetProductCategoriesForASINResponse
     *
     * @throws AmazonException
     */
    public function getProductCategoriesForASIN($request);
    /**
     * Get Product Categories For SKU
     * Gets categories information for a product identified by
     * the SellerId and SKU.
     *
     * @param mixed $request array of parameters for AmazonModel\GetProductCategoriesForSKU request or AmazonModel\GetProductCategoriesForSKU object itself
     * @see AmazonModel\GetProductCategoriesForSKURequest
     * @return AmazonModel\GetProductCategoriesForSKUResponse
     *
     * @throws AmazonException
     */
    public function getProductCategoriesForSKU($request);
    /**
     * Get Service Status
     * Returns the service status of a particular MWS API section. The operation
     * takes no input.
     * All API sections within the API are required to implement this operation.
     *
     * @param mixed $request array of parameters for AmazonModel\GetServiceStatus request or AmazonModel\GetServiceStatus object itself
     * @see AmazonModel\GetServiceStatusRequest
     * @return AmazonModel\GetServiceStatusResponse
     *
     * @throws AmazonException
     */
    public function getServiceStatus($request);
    /**
     * List Matching Products
     * ListMatchingProducts can be used to
     * find products that match the given criteria.
     *
     * @param mixed $request array of parameters for AmazonModel\ListMatchingProducts request or AmazonModel\ListMatchingProducts object itself
     * @see AmazonModel\ListMatchingProductsRequest
     * @return AmazonModel\ListMatchingProductsResponse
     *
     * @throws AmazonException
     */
    public function listMatchingProducts($request);
}
