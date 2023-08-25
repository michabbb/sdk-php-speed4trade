<?php

namespace macropage\SDKs\speed4trade;

use Phpro\SoapClient\Caller\Caller;
use macropage\SDKs\speed4trade\Type;
use Phpro\SoapClient\Type\ResultInterface;
use Phpro\SoapClient\Exception\SoapException;
use Phpro\SoapClient\Type\RequestInterface;

class Speed4TradeClient
{
    /**
     * @var Caller
     */
    private $caller;

    public function __construct(\Phpro\SoapClient\Caller\Caller $caller)
    {
        $this->caller = $caller;
    }

    /**
     * @param RequestInterface|Type\FetchAttributeSets $parameters
     * @return ResultInterface|Type\FetchAttributeSetsResponse
     * @throws SoapException
     */
    public function fetchAttributeSets(\macropage\SDKs\speed4trade\Type\FetchAttributeSets $parameters) : \macropage\SDKs\speed4trade\Type\FetchAttributeSetsResponse
    {
        return ($this->caller)('fetchAttributeSets', $parameters);
    }

    /**
     * @param RequestInterface|Type\UpdateCategories $parameters
     * @return ResultInterface|Type\UpdateCategoriesResponse
     * @throws SoapException
     */
    public function updateCategories(\macropage\SDKs\speed4trade\Type\UpdateCategories $parameters) : \macropage\SDKs\speed4trade\Type\UpdateCategoriesResponse
    {
        return ($this->caller)('updateCategories', $parameters);
    }

    /**
     * @param RequestInterface|Type\EchoType $parameters
     * @return ResultInterface|Type\EchoResponse
     * @throws SoapException
     */
    public function echoCall(\macropage\SDKs\speed4trade\Type\EchoType $parameters) : \macropage\SDKs\speed4trade\Type\EchoResponse
    {
        return ($this->caller)('echo', $parameters);
    }

    /**
     * @param RequestInterface|Type\FetchImageModuleTypes $parameters
     * @return ResultInterface|Type\FetchImageModuleTypesResponse
     * @throws SoapException
     */
    public function fetchImageModuleTypes(\macropage\SDKs\speed4trade\Type\FetchImageModuleTypes $parameters) : \macropage\SDKs\speed4trade\Type\FetchImageModuleTypesResponse
    {
        return ($this->caller)('fetchImageModuleTypes', $parameters);
    }

    /**
     * @param RequestInterface|Type\PrepareOffers $parameters
     * @return ResultInterface|Type\PrepareOffersResponse
     * @throws SoapException
     */
    public function prepareOffers(\macropage\SDKs\speed4trade\Type\PrepareOffers $parameters) : \macropage\SDKs\speed4trade\Type\PrepareOffersResponse
    {
        return ($this->caller)('prepareOffers', $parameters);
    }

    /**
     * @param RequestInterface|Type\FetchEpaBoms $parameters
     * @return ResultInterface|Type\FetchEpaBomsResponse
     * @throws SoapException
     */
    public function fetchEpaBoms(\macropage\SDKs\speed4trade\Type\FetchEpaBoms $parameters) : \macropage\SDKs\speed4trade\Type\FetchEpaBomsResponse
    {
        return ($this->caller)('fetchEpaBoms', $parameters);
    }

    /**
     * @param RequestInterface|Type\FetchAccountCategories $parameters
     * @return ResultInterface|Type\FetchAccountCategoriesResponse
     * @throws SoapException
     */
    public function fetchAccountCategories(\macropage\SDKs\speed4trade\Type\FetchAccountCategories $parameters) : \macropage\SDKs\speed4trade\Type\FetchAccountCategoriesResponse
    {
        return ($this->caller)('fetchAccountCategories', $parameters);
    }

    /**
     * @param RequestInterface|Type\FetchOrderTags $parameters
     * @return ResultInterface|Type\FetchOrderTagsResponse
     * @throws SoapException
     */
    public function fetchOrderTags(\macropage\SDKs\speed4trade\Type\FetchOrderTags $parameters) : \macropage\SDKs\speed4trade\Type\FetchOrderTagsResponse
    {
        return ($this->caller)('fetchOrderTags', $parameters);
    }

    /**
     * @param RequestInterface|Type\EndOffers $parameters
     * @return ResultInterface|Type\EndOffersResponse
     * @throws SoapException
     */
    public function endOffers(\macropage\SDKs\speed4trade\Type\EndOffers $parameters) : \macropage\SDKs\speed4trade\Type\EndOffersResponse
    {
        return ($this->caller)('endOffers', $parameters);
    }

    /**
     * @param RequestInterface|Type\FetchUploadMessages $parameters
     * @return ResultInterface|Type\FetchUploadMessagesResponse
     * @throws SoapException
     */
    public function fetchUploadMessages(\macropage\SDKs\speed4trade\Type\FetchUploadMessages $parameters) : \macropage\SDKs\speed4trade\Type\FetchUploadMessagesResponse
    {
        return ($this->caller)('fetchUploadMessages', $parameters);
    }

    /**
     * @param RequestInterface|Type\FetchItems $parameters
     * @return ResultInterface|Type\FetchItemsResponse
     * @throws SoapException
     */
    public function fetchItems(\macropage\SDKs\speed4trade\Type\FetchItems $parameters) : \macropage\SDKs\speed4trade\Type\FetchItemsResponse
    {
        return ($this->caller)('fetchItems', $parameters);
    }

    /**
     * @param RequestInterface|Type\FetchTextModuleTypes $parameters
     * @return ResultInterface|Type\FetchTextModuleTypesResponse
     * @throws SoapException
     */
    public function fetchTextModuleTypes(\macropage\SDKs\speed4trade\Type\FetchTextModuleTypes $parameters) : \macropage\SDKs\speed4trade\Type\FetchTextModuleTypesResponse
    {
        return ($this->caller)('fetchTextModuleTypes', $parameters);
    }

    /**
     * @param RequestInterface|Type\SyncPlatformCustomers $parameters
     * @return ResultInterface|Type\SyncPlatformCustomersResponse
     * @throws SoapException
     */
    public function syncPlatformCustomers(\macropage\SDKs\speed4trade\Type\SyncPlatformCustomers $parameters) : \macropage\SDKs\speed4trade\Type\SyncPlatformCustomersResponse
    {
        return ($this->caller)('syncPlatformCustomers', $parameters);
    }

    /**
     * @param RequestInterface|Type\DoShippingSoftwareExport $parameters
     * @return ResultInterface|Type\DoShippingSoftwareExportResponse
     * @throws SoapException
     */
    public function doShippingSoftwareExport(\macropage\SDKs\speed4trade\Type\DoShippingSoftwareExport $parameters) : \macropage\SDKs\speed4trade\Type\DoShippingSoftwareExportResponse
    {
        return ($this->caller)('doShippingSoftwareExport', $parameters);
    }

    /**
     * @param RequestInterface|Type\FetchStockCount $parameters
     * @return ResultInterface|Type\FetchStockCountResponse
     * @throws SoapException
     */
    public function fetchStockCount(\macropage\SDKs\speed4trade\Type\FetchStockCount $parameters) : \macropage\SDKs\speed4trade\Type\FetchStockCountResponse
    {
        return ($this->caller)('fetchStockCount', $parameters);
    }

    /**
     * @param RequestInterface|Type\FetchFeeds $parameters
     * @return ResultInterface|Type\FetchFeedsResponse
     * @throws SoapException
     */
    public function fetchFeeds(\macropage\SDKs\speed4trade\Type\FetchFeeds $parameters) : \macropage\SDKs\speed4trade\Type\FetchFeedsResponse
    {
        return ($this->caller)('fetchFeeds', $parameters);
    }

    /**
     * @param RequestInterface|Type\RelistOffers $parameters
     * @return ResultInterface|Type\RelistOffersResponse
     * @throws SoapException
     */
    public function relistOffers(\macropage\SDKs\speed4trade\Type\RelistOffers $parameters) : \macropage\SDKs\speed4trade\Type\RelistOffersResponse
    {
        return ($this->caller)('relistOffers', $parameters);
    }

    /**
     * @param RequestInterface|Type\SyncPlatformCoupons $parameters
     * @return ResultInterface|Type\SyncPlatformCouponsResponse
     * @throws SoapException
     */
    public function syncPlatformCoupons(\macropage\SDKs\speed4trade\Type\SyncPlatformCoupons $parameters) : \macropage\SDKs\speed4trade\Type\SyncPlatformCouponsResponse
    {
        return ($this->caller)('syncPlatformCoupons', $parameters);
    }

    /**
     * @param RequestInterface|Type\DeleteOffers $parameters
     * @return ResultInterface|Type\DeleteOffersResponse
     * @throws SoapException
     */
    public function deleteOffers(\macropage\SDKs\speed4trade\Type\DeleteOffers $parameters) : \macropage\SDKs\speed4trade\Type\DeleteOffersResponse
    {
        return ($this->caller)('deleteOffers', $parameters);
    }

    /**
     * @param RequestInterface|Type\DeleteItems $parameters
     * @return ResultInterface|Type\DeleteItemsResponse
     * @throws SoapException
     */
    public function deleteItems(\macropage\SDKs\speed4trade\Type\DeleteItems $parameters) : \macropage\SDKs\speed4trade\Type\DeleteItemsResponse
    {
        return ($this->caller)('deleteItems', $parameters);
    }

    /**
     * @param RequestInterface|Type\UploadOffers $parameters
     * @return ResultInterface|Type\UploadOffersResponse
     * @throws SoapException
     */
    public function uploadOffers(\macropage\SDKs\speed4trade\Type\UploadOffers $parameters) : \macropage\SDKs\speed4trade\Type\UploadOffersResponse
    {
        return ($this->caller)('uploadOffers', $parameters);
    }

    /**
     * @param RequestInterface|Type\FetchSubChannels $parameters
     * @return ResultInterface|Type\FetchSubChannelsResponse
     * @throws SoapException
     */
    public function fetchSubChannels(\macropage\SDKs\speed4trade\Type\FetchSubChannels $parameters) : \macropage\SDKs\speed4trade\Type\FetchSubChannelsResponse
    {
        return ($this->caller)('fetchSubChannels', $parameters);
    }

    /**
     * @param RequestInterface|Type\FetchShippingGroups $parameters
     * @return ResultInterface|Type\FetchShippingGroupsResponse
     * @throws SoapException
     */
    public function fetchShippingGroups(\macropage\SDKs\speed4trade\Type\FetchShippingGroups $parameters) : \macropage\SDKs\speed4trade\Type\FetchShippingGroupsResponse
    {
        return ($this->caller)('fetchShippingGroups', $parameters);
    }

    /**
     * @param RequestInterface|Type\OpenOrderOnClient $parameters
     * @return ResultInterface|Type\OpenOrderOnClientResponse
     * @throws SoapException
     */
    public function openOrderOnClient(\macropage\SDKs\speed4trade\Type\OpenOrderOnClient $parameters) : \macropage\SDKs\speed4trade\Type\OpenOrderOnClientResponse
    {
        return ($this->caller)('openOrderOnClient', $parameters);
    }

    /**
     * @param RequestInterface|Type\AdjustOrders $parameters
     * @return ResultInterface|Type\AdjustOrdersResponse
     * @throws SoapException
     */
    public function adjustOrders(\macropage\SDKs\speed4trade\Type\AdjustOrders $parameters) : \macropage\SDKs\speed4trade\Type\AdjustOrdersResponse
    {
        return ($this->caller)('adjustOrders', $parameters);
    }

    /**
     * @param RequestInterface|Type\FetchMessages $parameters
     * @return ResultInterface|Type\FetchMessagesResponse
     * @throws SoapException
     */
    public function fetchMessages(\macropage\SDKs\speed4trade\Type\FetchMessages $parameters) : \macropage\SDKs\speed4trade\Type\FetchMessagesResponse
    {
        return ($this->caller)('fetchMessages', $parameters);
    }

    /**
     * @param RequestInterface|Type\FetchStockReservations $parameters
     * @return ResultInterface|Type\FetchStockReservationsResponse
     * @throws SoapException
     */
    public function fetchStockReservations(\macropage\SDKs\speed4trade\Type\FetchStockReservations $parameters) : \macropage\SDKs\speed4trade\Type\FetchStockReservationsResponse
    {
        return ($this->caller)('fetchStockReservations', $parameters);
    }

    /**
     * @param RequestInterface|Type\UpdatePayments $parameters
     * @return ResultInterface|Type\UpdatePaymentsResponse
     * @throws SoapException
     */
    public function updatePayments(\macropage\SDKs\speed4trade\Type\UpdatePayments $parameters) : \macropage\SDKs\speed4trade\Type\UpdatePaymentsResponse
    {
        return ($this->caller)('updatePayments', $parameters);
    }

    /**
     * @param RequestInterface|Type\FetchPricelist $parameters
     * @return ResultInterface|Type\FetchPricelistResponse
     * @throws SoapException
     */
    public function fetchPricelist(\macropage\SDKs\speed4trade\Type\FetchPricelist $parameters) : \macropage\SDKs\speed4trade\Type\FetchPricelistResponse
    {
        return ($this->caller)('fetchPricelist', $parameters);
    }

    /**
     * @param RequestInterface|Type\SendMessages $parameters
     * @return ResultInterface|Type\SendMessagesResponse
     * @throws SoapException
     */
    public function sendMessages(\macropage\SDKs\speed4trade\Type\SendMessages $parameters) : \macropage\SDKs\speed4trade\Type\SendMessagesResponse
    {
        return ($this->caller)('sendMessages', $parameters);
    }

    /**
     * @param RequestInterface|Type\UpdateMedia $parameters
     * @return ResultInterface|Type\UpdateMediaResponse
     * @throws SoapException
     */
    public function updateMedia(\macropage\SDKs\speed4trade\Type\UpdateMedia $parameters) : \macropage\SDKs\speed4trade\Type\UpdateMediaResponse
    {
        return ($this->caller)('updateMedia', $parameters);
    }

    /**
     * @param RequestInterface|Type\FetchAttributes $parameters
     * @return ResultInterface|Type\FetchAttributesResponse
     * @throws SoapException
     */
    public function fetchAttributes(\macropage\SDKs\speed4trade\Type\FetchAttributes $parameters) : \macropage\SDKs\speed4trade\Type\FetchAttributesResponse
    {
        return ($this->caller)('fetchAttributes', $parameters);
    }

    /**
     * @param RequestInterface|Type\FetchAccounts $parameters
     * @return ResultInterface|Type\FetchAccountsResponse
     * @throws SoapException
     */
    public function fetchAccounts(\macropage\SDKs\speed4trade\Type\FetchAccounts $parameters) : \macropage\SDKs\speed4trade\Type\FetchAccountsResponse
    {
        return ($this->caller)('fetchAccounts', $parameters);
    }

    /**
     * @param RequestInterface|Type\FetchMediaModuleType $parameters
     * @return ResultInterface|Type\FetchMediaModuleTypeResponse
     * @throws SoapException
     */
    public function fetchMediaModuleType(\macropage\SDKs\speed4trade\Type\FetchMediaModuleType $parameters) : \macropage\SDKs\speed4trade\Type\FetchMediaModuleTypeResponse
    {
        return ($this->caller)('fetchMediaModuleType', $parameters);
    }

    /**
     * @param RequestInterface|Type\TransferMoney $parameters
     * @return ResultInterface|Type\TransferMoneyResponse
     * @throws SoapException
     */
    public function transferMoney(\macropage\SDKs\speed4trade\Type\TransferMoney $parameters) : \macropage\SDKs\speed4trade\Type\TransferMoneyResponse
    {
        return ($this->caller)('transferMoney', $parameters);
    }

    /**
     * @param RequestInterface|Type\UpdateOrderDocuments $parameters
     * @return ResultInterface|Type\UpdateOrderDocumentsResponse
     * @throws SoapException
     */
    public function updateOrderDocuments(\macropage\SDKs\speed4trade\Type\UpdateOrderDocuments $parameters) : \macropage\SDKs\speed4trade\Type\UpdateOrderDocumentsResponse
    {
        return ($this->caller)('updateOrderDocuments', $parameters);
    }

    /**
     * @param RequestInterface|Type\CancelOrders $parameters
     * @return ResultInterface|Type\CancelOrdersResponse
     * @throws SoapException
     */
    public function cancelOrders(\macropage\SDKs\speed4trade\Type\CancelOrders $parameters) : \macropage\SDKs\speed4trade\Type\CancelOrdersResponse
    {
        return ($this->caller)('cancelOrders', $parameters);
    }

    /**
     * @param RequestInterface|Type\FetchPayments $parameters
     * @return ResultInterface|Type\FetchPaymentsResponse
     * @throws SoapException
     */
    public function fetchPayments(\macropage\SDKs\speed4trade\Type\FetchPayments $parameters) : \macropage\SDKs\speed4trade\Type\FetchPaymentsResponse
    {
        return ($this->caller)('fetchPayments', $parameters);
    }

    /**
     * @param RequestInterface|Type\UpdateCustomers $parameters
     * @return ResultInterface|Type\UpdateCustomersResponse
     * @throws SoapException
     */
    public function updateCustomers(\macropage\SDKs\speed4trade\Type\UpdateCustomers $parameters) : \macropage\SDKs\speed4trade\Type\UpdateCustomersResponse
    {
        return ($this->caller)('updateCustomers', $parameters);
    }

    /**
     * @param RequestInterface|Type\FetchSuppliers $parameters
     * @return ResultInterface|Type\FetchSuppliersResponse
     * @throws SoapException
     */
    public function fetchSuppliers(\macropage\SDKs\speed4trade\Type\FetchSuppliers $parameters) : \macropage\SDKs\speed4trade\Type\FetchSuppliersResponse
    {
        return ($this->caller)('fetchSuppliers', $parameters);
    }

    /**
     * @param RequestInterface|Type\UpdateMessages $parameters
     * @return ResultInterface|Type\UpdateMessagesResponse
     * @throws SoapException
     */
    public function updateMessages(\macropage\SDKs\speed4trade\Type\UpdateMessages $parameters) : \macropage\SDKs\speed4trade\Type\UpdateMessagesResponse
    {
        return ($this->caller)('updateMessages', $parameters);
    }

    /**
     * @param RequestInterface|Type\FetchShippingLabels $parameters
     * @return ResultInterface|Type\FetchShippingLabelsResponse
     * @throws SoapException
     */
    public function fetchShippingLabels(\macropage\SDKs\speed4trade\Type\FetchShippingLabels $parameters) : \macropage\SDKs\speed4trade\Type\FetchShippingLabelsResponse
    {
        return ($this->caller)('fetchShippingLabels', $parameters);
    }

    /**
     * @param RequestInterface|Type\UpdateVariantAttributes $parameters
     * @return ResultInterface|Type\UpdateVariantAttributesResponse
     * @throws SoapException
     */
    public function updateVariantAttributes(\macropage\SDKs\speed4trade\Type\UpdateVariantAttributes $parameters) : \macropage\SDKs\speed4trade\Type\UpdateVariantAttributesResponse
    {
        return ($this->caller)('updateVariantAttributes', $parameters);
    }

    /**
     * @param RequestInterface|Type\UpdateOrderStatus $parameters
     * @return ResultInterface|Type\UpdateOrderStatusResponse
     * @throws SoapException
     */
    public function updateOrderStatus(\macropage\SDKs\speed4trade\Type\UpdateOrderStatus $parameters) : \macropage\SDKs\speed4trade\Type\UpdateOrderStatusResponse
    {
        return ($this->caller)('updateOrderStatus', $parameters);
    }

    /**
     * @param RequestInterface|Type\UpdateVariantAttributeValues $parameters
     * @return ResultInterface|Type\UpdateVariantAttributeValuesResponse
     * @throws SoapException
     */
    public function updateVariantAttributeValues(\macropage\SDKs\speed4trade\Type\UpdateVariantAttributeValues $parameters) : \macropage\SDKs\speed4trade\Type\UpdateVariantAttributeValuesResponse
    {
        return ($this->caller)('updateVariantAttributeValues', $parameters);
    }

    /**
     * @param RequestInterface|Type\FetchMedia $parameters
     * @return ResultInterface|Type\FetchMediaResponse
     * @throws SoapException
     */
    public function fetchMedia(\macropage\SDKs\speed4trade\Type\FetchMedia $parameters) : \macropage\SDKs\speed4trade\Type\FetchMediaResponse
    {
        return ($this->caller)('fetchMedia', $parameters);
    }

    /**
     * @param RequestInterface|Type\OpenItemOnClient $parameters
     * @return ResultInterface|Type\OpenItemOnClientResponse
     * @throws SoapException
     */
    public function openItemOnClient(\macropage\SDKs\speed4trade\Type\OpenItemOnClient $parameters) : \macropage\SDKs\speed4trade\Type\OpenItemOnClientResponse
    {
        return ($this->caller)('openItemOnClient', $parameters);
    }

    /**
     * @param RequestInterface|Type\FetchCategories $parameters
     * @return ResultInterface|Type\FetchCategoriesResponse
     * @throws SoapException
     */
    public function fetchCategories(\macropage\SDKs\speed4trade\Type\FetchCategories $parameters) : \macropage\SDKs\speed4trade\Type\FetchCategoriesResponse
    {
        return ($this->caller)('fetchCategories', $parameters);
    }

    /**
     * @param RequestInterface|Type\FetchPaymentInstructions $parameters
     * @return ResultInterface|Type\FetchPaymentInstructionsResponse
     * @throws SoapException
     */
    public function fetchPaymentInstructions(\macropage\SDKs\speed4trade\Type\FetchPaymentInstructions $parameters) : \macropage\SDKs\speed4trade\Type\FetchPaymentInstructionsResponse
    {
        return ($this->caller)('fetchPaymentInstructions', $parameters);
    }

    /**
     * @param RequestInterface|Type\UpdateManufacturers $parameters
     * @return ResultInterface|Type\UpdateManufacturersResponse
     * @throws SoapException
     */
    public function updateManufacturers(\macropage\SDKs\speed4trade\Type\UpdateManufacturers $parameters) : \macropage\SDKs\speed4trade\Type\UpdateManufacturersResponse
    {
        return ($this->caller)('updateManufacturers', $parameters);
    }

    /**
     * @param RequestInterface|Type\UpdateTemplates $parameters
     * @return ResultInterface|Type\UpdateTemplatesResponse
     * @throws SoapException
     */
    public function updateTemplates(\macropage\SDKs\speed4trade\Type\UpdateTemplates $parameters) : \macropage\SDKs\speed4trade\Type\UpdateTemplatesResponse
    {
        return ($this->caller)('updateTemplates', $parameters);
    }

    /**
     * @param RequestInterface|Type\CreateShippingLabels $parameters
     * @return ResultInterface|Type\CreateShippingLabelsResponse
     * @throws SoapException
     */
    public function createShippingLabels(\macropage\SDKs\speed4trade\Type\CreateShippingLabels $parameters) : \macropage\SDKs\speed4trade\Type\CreateShippingLabelsResponse
    {
        return ($this->caller)('createShippingLabels', $parameters);
    }

    /**
     * @param RequestInterface|Type\FetchDispatchTypes $parameters
     * @return ResultInterface|Type\FetchDispatchTypesResponse
     * @throws SoapException
     */
    public function fetchDispatchTypes(\macropage\SDKs\speed4trade\Type\FetchDispatchTypes $parameters) : \macropage\SDKs\speed4trade\Type\FetchDispatchTypesResponse
    {
        return ($this->caller)('fetchDispatchTypes', $parameters);
    }

    /**
     * @param RequestInterface|Type\UpdateItemAccountCategoryMapping $parameters
     * @return ResultInterface|Type\UpdateItemAccountCategoryMappingResponse
     * @throws SoapException
     */
    public function updateItemAccountCategoryMapping(\macropage\SDKs\speed4trade\Type\UpdateItemAccountCategoryMapping $parameters) : \macropage\SDKs\speed4trade\Type\UpdateItemAccountCategoryMappingResponse
    {
        return ($this->caller)('updateItemAccountCategoryMapping', $parameters);
    }

    /**
     * @param RequestInterface|Type\UpdateDeliveryChargeCategories $parameters
     * @return ResultInterface|Type\UpdateDeliveryChargeCategoriesResponse
     * @throws SoapException
     */
    public function updateDeliveryChargeCategories(\macropage\SDKs\speed4trade\Type\UpdateDeliveryChargeCategories $parameters) : \macropage\SDKs\speed4trade\Type\UpdateDeliveryChargeCategoriesResponse
    {
        return ($this->caller)('updateDeliveryChargeCategories', $parameters);
    }

    /**
     * @param RequestInterface|Type\UpdateOffers $parameters
     * @return ResultInterface|Type\UpdateOffersResponse
     * @throws SoapException
     */
    public function updateOffers(\macropage\SDKs\speed4trade\Type\UpdateOffers $parameters) : \macropage\SDKs\speed4trade\Type\UpdateOffersResponse
    {
        return ($this->caller)('updateOffers', $parameters);
    }

    /**
     * @param RequestInterface|Type\UpdateEpaAssemblies $parameters
     * @return ResultInterface|Type\UpdateEpaAssembliesResponse
     * @throws SoapException
     */
    public function updateEpaAssemblies(\macropage\SDKs\speed4trade\Type\UpdateEpaAssemblies $parameters) : \macropage\SDKs\speed4trade\Type\UpdateEpaAssembliesResponse
    {
        return ($this->caller)('updateEpaAssemblies', $parameters);
    }

    /**
     * @param RequestInterface|Type\UpdateDeliveryTimes $parameters
     * @return ResultInterface|Type\UpdateDeliveryTimesResponse
     * @throws SoapException
     */
    public function updateDeliveryTimes(\macropage\SDKs\speed4trade\Type\UpdateDeliveryTimes $parameters) : \macropage\SDKs\speed4trade\Type\UpdateDeliveryTimesResponse
    {
        return ($this->caller)('updateDeliveryTimes', $parameters);
    }

    /**
     * @param RequestInterface|Type\FetchVariantAttributes $parameters
     * @return ResultInterface|Type\FetchVariantAttributesResponse
     * @throws SoapException
     */
    public function fetchVariantAttributes(\macropage\SDKs\speed4trade\Type\FetchVariantAttributes $parameters) : \macropage\SDKs\speed4trade\Type\FetchVariantAttributesResponse
    {
        return ($this->caller)('fetchVariantAttributes', $parameters);
    }

    /**
     * @param RequestInterface|Type\UpdateImageModuleTypes $parameters
     * @return ResultInterface|Type\UpdateImageModuleTypesResponse
     * @throws SoapException
     */
    public function updateImageModuleTypes(\macropage\SDKs\speed4trade\Type\UpdateImageModuleTypes $parameters) : \macropage\SDKs\speed4trade\Type\UpdateImageModuleTypesResponse
    {
        return ($this->caller)('updateImageModuleTypes', $parameters);
    }

    /**
     * @param RequestInterface|Type\UpdateCustomerGroups $parameters
     * @return ResultInterface|Type\UpdateCustomerGroupsResponse
     * @throws SoapException
     */
    public function updateCustomerGroups(\macropage\SDKs\speed4trade\Type\UpdateCustomerGroups $parameters) : \macropage\SDKs\speed4trade\Type\UpdateCustomerGroupsResponse
    {
        return ($this->caller)('updateCustomerGroups', $parameters);
    }

    /**
     * @param RequestInterface|Type\UpdateEpaBoms $parameters
     * @return ResultInterface|Type\UpdateEpaBomsResponse
     * @throws SoapException
     */
    public function updateEpaBoms(\macropage\SDKs\speed4trade\Type\UpdateEpaBoms $parameters) : \macropage\SDKs\speed4trade\Type\UpdateEpaBomsResponse
    {
        return ($this->caller)('updateEpaBoms', $parameters);
    }

    /**
     * @param RequestInterface|Type\FetchOffers $parameters
     * @return ResultInterface|Type\FetchOffersResponse
     * @throws SoapException
     */
    public function fetchOffers(\macropage\SDKs\speed4trade\Type\FetchOffers $parameters) : \macropage\SDKs\speed4trade\Type\FetchOffersResponse
    {
        return ($this->caller)('fetchOffers', $parameters);
    }

    /**
     * @param RequestInterface|Type\ConfirmShippingLabels $parameters
     * @return ResultInterface|Type\ConfirmShippingLabelsResponse
     * @throws SoapException
     */
    public function confirmShippingLabels(\macropage\SDKs\speed4trade\Type\ConfirmShippingLabels $parameters) : \macropage\SDKs\speed4trade\Type\ConfirmShippingLabelsResponse
    {
        return ($this->caller)('confirmShippingLabels', $parameters);
    }

    /**
     * @param RequestInterface|Type\FetchOrderDocuments $parameters
     * @return ResultInterface|Type\FetchOrderDocumentsResponse
     * @throws SoapException
     */
    public function fetchOrderDocuments(\macropage\SDKs\speed4trade\Type\FetchOrderDocuments $parameters) : \macropage\SDKs\speed4trade\Type\FetchOrderDocumentsResponse
    {
        return ($this->caller)('fetchOrderDocuments', $parameters);
    }

    /**
     * @param RequestInterface|Type\UpdateAttributes $parameters
     * @return ResultInterface|Type\UpdateAttributesResponse
     * @throws SoapException
     */
    public function updateAttributes(\macropage\SDKs\speed4trade\Type\UpdateAttributes $parameters) : \macropage\SDKs\speed4trade\Type\UpdateAttributesResponse
    {
        return ($this->caller)('updateAttributes', $parameters);
    }

    /**
     * @param RequestInterface|Type\UpdatePricelist $parameters
     * @return ResultInterface|Type\UpdatePricelistResponse
     * @throws SoapException
     */
    public function updatePricelist(\macropage\SDKs\speed4trade\Type\UpdatePricelist $parameters) : \macropage\SDKs\speed4trade\Type\UpdatePricelistResponse
    {
        return ($this->caller)('updatePricelist', $parameters);
    }

    /**
     * @param RequestInterface|Type\CreateDisputes $parameters
     * @return ResultInterface|Type\CreateDisputesResponse
     * @throws SoapException
     */
    public function createDisputes(\macropage\SDKs\speed4trade\Type\CreateDisputes $parameters) : \macropage\SDKs\speed4trade\Type\CreateDisputesResponse
    {
        return ($this->caller)('createDisputes', $parameters);
    }

    /**
     * @param RequestInterface|Type\FetchDeliveryChargeCategories $parameters
     * @return ResultInterface|Type\FetchDeliveryChargeCategoriesResponse
     * @throws SoapException
     */
    public function fetchDeliveryChargeCategories(\macropage\SDKs\speed4trade\Type\FetchDeliveryChargeCategories $parameters) : \macropage\SDKs\speed4trade\Type\FetchDeliveryChargeCategoriesResponse
    {
        return ($this->caller)('fetchDeliveryChargeCategories', $parameters);
    }

    /**
     * @param RequestInterface|Type\UpdateAttributeSets $parameters
     * @return ResultInterface|Type\UpdateAttributeSetsResponse
     * @throws SoapException
     */
    public function updateAttributeSets(\macropage\SDKs\speed4trade\Type\UpdateAttributeSets $parameters) : \macropage\SDKs\speed4trade\Type\UpdateAttributeSetsResponse
    {
        return ($this->caller)('updateAttributeSets', $parameters);
    }

    /**
     * @param RequestInterface|Type\FetchFeedbackSummaries $parameters
     * @return ResultInterface|Type\FetchFeedbackSummariesResponse
     * @throws SoapException
     */
    public function fetchFeedbackSummaries(\macropage\SDKs\speed4trade\Type\FetchFeedbackSummaries $parameters) : \macropage\SDKs\speed4trade\Type\FetchFeedbackSummariesResponse
    {
        return ($this->caller)('fetchFeedbackSummaries', $parameters);
    }

    /**
     * @param RequestInterface|Type\FetchOrders $parameters
     * @return ResultInterface|Type\FetchOrdersResponse
     * @throws SoapException
     */
    public function fetchOrders(\macropage\SDKs\speed4trade\Type\FetchOrders $parameters) : \macropage\SDKs\speed4trade\Type\FetchOrdersResponse
    {
        return ($this->caller)('fetchOrders', $parameters);
    }

    /**
     * @param RequestInterface|Type\UpdatePrices $parameters
     * @return ResultInterface|Type\UpdatePricesResponse
     * @throws SoapException
     */
    public function updatePrices(\macropage\SDKs\speed4trade\Type\UpdatePrices $parameters) : \macropage\SDKs\speed4trade\Type\UpdatePricesResponse
    {
        return ($this->caller)('updatePrices', $parameters);
    }

    /**
     * @param RequestInterface|Type\CreateCreditEntry $parameters
     * @return ResultInterface|Type\CreateCreditEntryResponse
     * @throws SoapException
     */
    public function createCreditEntry(\macropage\SDKs\speed4trade\Type\CreateCreditEntry $parameters) : \macropage\SDKs\speed4trade\Type\CreateCreditEntryResponse
    {
        return ($this->caller)('createCreditEntry', $parameters);
    }

    /**
     * @param RequestInterface|Type\FetchShippingCarriers $parameters
     * @return ResultInterface|Type\FetchShippingCarriersResponse
     * @throws SoapException
     */
    public function fetchShippingCarriers(\macropage\SDKs\speed4trade\Type\FetchShippingCarriers $parameters) : \macropage\SDKs\speed4trade\Type\FetchShippingCarriersResponse
    {
        return ($this->caller)('fetchShippingCarriers', $parameters);
    }

    /**
     * @param RequestInterface|Type\FetchFeedback $parameters
     * @return ResultInterface|Type\FetchFeedbackResponse
     * @throws SoapException
     */
    public function fetchFeedback(\macropage\SDKs\speed4trade\Type\FetchFeedback $parameters) : \macropage\SDKs\speed4trade\Type\FetchFeedbackResponse
    {
        return ($this->caller)('fetchFeedback', $parameters);
    }

    /**
     * @param RequestInterface|Type\SyncPlatformOrders $parameters
     * @return ResultInterface|Type\SyncPlatformOrdersResponse
     * @throws SoapException
     */
    public function syncPlatformOrders(\macropage\SDKs\speed4trade\Type\SyncPlatformOrders $parameters) : \macropage\SDKs\speed4trade\Type\SyncPlatformOrdersResponse
    {
        return ($this->caller)('syncPlatformOrders', $parameters);
    }

    /**
     * @param RequestInterface|Type\FetchWarehouses $parameters
     * @return ResultInterface|Type\FetchWarehousesResponse
     * @throws SoapException
     */
    public function fetchWarehouses(\macropage\SDKs\speed4trade\Type\FetchWarehouses $parameters) : \macropage\SDKs\speed4trade\Type\FetchWarehousesResponse
    {
        return ($this->caller)('fetchWarehouses', $parameters);
    }

    /**
     * @param RequestInterface|Type\FetchBranches $parameters
     * @return ResultInterface|Type\FetchBranchesResponse
     * @throws SoapException
     */
    public function fetchBranches(\macropage\SDKs\speed4trade\Type\FetchBranches $parameters) : \macropage\SDKs\speed4trade\Type\FetchBranchesResponse
    {
        return ($this->caller)('fetchBranches', $parameters);
    }

    /**
     * @param RequestInterface|Type\FetchManufacturers $parameters
     * @return ResultInterface|Type\FetchManufacturersResponse
     * @throws SoapException
     */
    public function fetchManufacturers(\macropage\SDKs\speed4trade\Type\FetchManufacturers $parameters) : \macropage\SDKs\speed4trade\Type\FetchManufacturersResponse
    {
        return ($this->caller)('fetchManufacturers', $parameters);
    }

    /**
     * @param RequestInterface|Type\UpdateStockCount $parameters
     * @return ResultInterface|Type\UpdateStockCountResponse
     * @throws SoapException
     */
    public function updateStockCount(\macropage\SDKs\speed4trade\Type\UpdateStockCount $parameters) : \macropage\SDKs\speed4trade\Type\UpdateStockCountResponse
    {
        return ($this->caller)('updateStockCount', $parameters);
    }

    /**
     * @param RequestInterface|Type\FetchCustomerGroups $parameters
     * @return ResultInterface|Type\FetchCustomerGroupsResponse
     * @throws SoapException
     */
    public function fetchCustomerGroups(\macropage\SDKs\speed4trade\Type\FetchCustomerGroups $parameters) : \macropage\SDKs\speed4trade\Type\FetchCustomerGroupsResponse
    {
        return ($this->caller)('fetchCustomerGroups', $parameters);
    }

    /**
     * @param RequestInterface|Type\UpdateAccountCategories $parameters
     * @return ResultInterface|Type\UpdateAccountCategoriesResponse
     * @throws SoapException
     */
    public function updateAccountCategories(\macropage\SDKs\speed4trade\Type\UpdateAccountCategories $parameters) : \macropage\SDKs\speed4trade\Type\UpdateAccountCategoriesResponse
    {
        return ($this->caller)('updateAccountCategories', $parameters);
    }

    /**
     * @param RequestInterface|Type\UpdateBranches $parameters
     * @return ResultInterface|Type\UpdateBranchesResponse
     * @throws SoapException
     */
    public function updateBranches(\macropage\SDKs\speed4trade\Type\UpdateBranches $parameters) : \macropage\SDKs\speed4trade\Type\UpdateBranchesResponse
    {
        return ($this->caller)('updateBranches', $parameters);
    }

    /**
     * @param RequestInterface|Type\UpdateTextModuleTypes $parameters
     * @return ResultInterface|Type\UpdateTextModuleTypesResponse
     * @throws SoapException
     */
    public function updateTextModuleTypes(\macropage\SDKs\speed4trade\Type\UpdateTextModuleTypes $parameters) : \macropage\SDKs\speed4trade\Type\UpdateTextModuleTypesResponse
    {
        return ($this->caller)('updateTextModuleTypes', $parameters);
    }

    /**
     * @param RequestInterface|Type\FetchMandators $parameters
     * @return ResultInterface|Type\FetchMandatorsResponse
     * @throws SoapException
     */
    public function fetchMandators(\macropage\SDKs\speed4trade\Type\FetchMandators $parameters) : \macropage\SDKs\speed4trade\Type\FetchMandatorsResponse
    {
        return ($this->caller)('fetchMandators', $parameters);
    }

    /**
     * @param RequestInterface|Type\UpdateCoupons $parameters
     * @return ResultInterface|Type\UpdateCouponsResponse
     * @throws SoapException
     */
    public function updateCoupons(\macropage\SDKs\speed4trade\Type\UpdateCoupons $parameters) : \macropage\SDKs\speed4trade\Type\UpdateCouponsResponse
    {
        return ($this->caller)('updateCoupons', $parameters);
    }

    /**
     * @param RequestInterface|Type\UpdateItems $parameters
     * @return ResultInterface|Type\UpdateItemsResponse
     * @throws SoapException
     */
    public function updateItems(\macropage\SDKs\speed4trade\Type\UpdateItems $parameters) : \macropage\SDKs\speed4trade\Type\UpdateItemsResponse
    {
        return ($this->caller)('updateItems', $parameters);
    }

    /**
     * @param RequestInterface|Type\FetchCustomers $parameters
     * @return ResultInterface|Type\FetchCustomersResponse
     * @throws SoapException
     */
    public function fetchCustomers(\macropage\SDKs\speed4trade\Type\FetchCustomers $parameters) : \macropage\SDKs\speed4trade\Type\FetchCustomersResponse
    {
        return ($this->caller)('fetchCustomers', $parameters);
    }

    /**
     * @param RequestInterface|Type\UpdateOrders $parameters
     * @return ResultInterface|Type\UpdateOrdersResponse
     * @throws SoapException
     */
    public function updateOrders(\macropage\SDKs\speed4trade\Type\UpdateOrders $parameters) : \macropage\SDKs\speed4trade\Type\UpdateOrdersResponse
    {
        return ($this->caller)('updateOrders', $parameters);
    }

    /**
     * @param RequestInterface|Type\CreateOrderDocuments $parameters
     * @return ResultInterface|Type\CreateOrderDocumentsResponse
     * @throws SoapException
     */
    public function createOrderDocuments(\macropage\SDKs\speed4trade\Type\CreateOrderDocuments $parameters) : \macropage\SDKs\speed4trade\Type\CreateOrderDocumentsResponse
    {
        return ($this->caller)('createOrderDocuments', $parameters);
    }

    /**
     * @param RequestInterface|Type\FetchDisputes $parameters
     * @return ResultInterface|Type\FetchDisputesResponse
     * @throws SoapException
     */
    public function fetchDisputes(\macropage\SDKs\speed4trade\Type\FetchDisputes $parameters) : \macropage\SDKs\speed4trade\Type\FetchDisputesResponse
    {
        return ($this->caller)('fetchDisputes', $parameters);
    }

    /**
     * @param RequestInterface|Type\FetchTemplates $parameters
     * @return ResultInterface|Type\FetchTemplatesResponse
     * @throws SoapException
     */
    public function fetchTemplates(\macropage\SDKs\speed4trade\Type\FetchTemplates $parameters) : \macropage\SDKs\speed4trade\Type\FetchTemplatesResponse
    {
        return ($this->caller)('fetchTemplates', $parameters);
    }

    /**
     * @param RequestInterface|Type\SyncPlatformItems $parameters
     * @return ResultInterface|Type\SyncPlatformItemsResponse
     * @throws SoapException
     */
    public function syncPlatformItems(\macropage\SDKs\speed4trade\Type\SyncPlatformItems $parameters) : \macropage\SDKs\speed4trade\Type\SyncPlatformItemsResponse
    {
        return ($this->caller)('syncPlatformItems', $parameters);
    }

    /**
     * @param RequestInterface|Type\FetchEpaAssemblies $parameters
     * @return ResultInterface|Type\FetchEpaAssembliesResponse
     * @throws SoapException
     */
    public function fetchEpaAssemblies(\macropage\SDKs\speed4trade\Type\FetchEpaAssemblies $parameters) : \macropage\SDKs\speed4trade\Type\FetchEpaAssembliesResponse
    {
        return ($this->caller)('fetchEpaAssemblies', $parameters);
    }

    /**
     * @param RequestInterface|Type\FetchDeliveryTimes $parameters
     * @return ResultInterface|Type\FetchDeliveryTimesResponse
     * @throws SoapException
     */
    public function fetchDeliveryTimes(\macropage\SDKs\speed4trade\Type\FetchDeliveryTimes $parameters) : \macropage\SDKs\speed4trade\Type\FetchDeliveryTimesResponse
    {
        return ($this->caller)('fetchDeliveryTimes', $parameters);
    }

    /**
     * @param RequestInterface|Type\FetchPlatformCategoryAttributes $parameters
     * @return ResultInterface|Type\FetchPlatformCategoryAttributesResponse
     * @throws SoapException
     */
    public function fetchPlatformCategoryAttributes(\macropage\SDKs\speed4trade\Type\FetchPlatformCategoryAttributes $parameters) : \macropage\SDKs\speed4trade\Type\FetchPlatformCategoryAttributesResponse
    {
        return ($this->caller)('fetchPlatformCategoryAttributes', $parameters);
    }

    /**
     * @param RequestInterface|Type\FetchPaymentMethods $parameters
     * @return ResultInterface|Type\FetchPaymentMethodsResponse
     * @throws SoapException
     */
    public function fetchPaymentMethods(\macropage\SDKs\speed4trade\Type\FetchPaymentMethods $parameters) : \macropage\SDKs\speed4trade\Type\FetchPaymentMethodsResponse
    {
        return ($this->caller)('fetchPaymentMethods', $parameters);
    }
}

