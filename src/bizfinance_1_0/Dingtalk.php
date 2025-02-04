<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dingtalk\Vbizfinance_1_0;

use AlibabaCloud\OpenApiUtil\OpenApiUtilClient;
use AlibabaCloud\SDK\Dingtalk\Vbizfinance_1_0\Models\BatchAddInvoiceHeaders;
use AlibabaCloud\SDK\Dingtalk\Vbizfinance_1_0\Models\BatchAddInvoiceRequest;
use AlibabaCloud\SDK\Dingtalk\Vbizfinance_1_0\Models\BatchAddInvoiceResponse;
use AlibabaCloud\SDK\Dingtalk\Vbizfinance_1_0\Models\CreateCustomerHeaders;
use AlibabaCloud\SDK\Dingtalk\Vbizfinance_1_0\Models\CreateCustomerRequest;
use AlibabaCloud\SDK\Dingtalk\Vbizfinance_1_0\Models\CreateCustomerResponse;
use AlibabaCloud\SDK\Dingtalk\Vbizfinance_1_0\Models\CreateReceiptHeaders;
use AlibabaCloud\SDK\Dingtalk\Vbizfinance_1_0\Models\CreateReceiptRequest;
use AlibabaCloud\SDK\Dingtalk\Vbizfinance_1_0\Models\CreateReceiptResponse;
use AlibabaCloud\SDK\Dingtalk\Vbizfinance_1_0\Models\DeleteReceiptHeaders;
use AlibabaCloud\SDK\Dingtalk\Vbizfinance_1_0\Models\DeleteReceiptRequest;
use AlibabaCloud\SDK\Dingtalk\Vbizfinance_1_0\Models\DeleteReceiptResponse;
use AlibabaCloud\SDK\Dingtalk\Vbizfinance_1_0\Models\GetBookkeepingUserListHeaders;
use AlibabaCloud\SDK\Dingtalk\Vbizfinance_1_0\Models\GetBookkeepingUserListResponse;
use AlibabaCloud\SDK\Dingtalk\Vbizfinance_1_0\Models\GetCategoryHeaders;
use AlibabaCloud\SDK\Dingtalk\Vbizfinance_1_0\Models\GetCategoryRequest;
use AlibabaCloud\SDK\Dingtalk\Vbizfinance_1_0\Models\GetCategoryResponse;
use AlibabaCloud\SDK\Dingtalk\Vbizfinance_1_0\Models\GetCustomerHeaders;
use AlibabaCloud\SDK\Dingtalk\Vbizfinance_1_0\Models\GetCustomerRequest;
use AlibabaCloud\SDK\Dingtalk\Vbizfinance_1_0\Models\GetCustomerResponse;
use AlibabaCloud\SDK\Dingtalk\Vbizfinance_1_0\Models\GetFinanceAccountHeaders;
use AlibabaCloud\SDK\Dingtalk\Vbizfinance_1_0\Models\GetFinanceAccountRequest;
use AlibabaCloud\SDK\Dingtalk\Vbizfinance_1_0\Models\GetFinanceAccountResponse;
use AlibabaCloud\SDK\Dingtalk\Vbizfinance_1_0\Models\GetInvoiceByPageHeaders;
use AlibabaCloud\SDK\Dingtalk\Vbizfinance_1_0\Models\GetInvoiceByPageRequest;
use AlibabaCloud\SDK\Dingtalk\Vbizfinance_1_0\Models\GetInvoiceByPageResponse;
use AlibabaCloud\SDK\Dingtalk\Vbizfinance_1_0\Models\GetIsNewVersionHeaders;
use AlibabaCloud\SDK\Dingtalk\Vbizfinance_1_0\Models\GetIsNewVersionResponse;
use AlibabaCloud\SDK\Dingtalk\Vbizfinance_1_0\Models\GetProjectHeaders;
use AlibabaCloud\SDK\Dingtalk\Vbizfinance_1_0\Models\GetProjectRequest;
use AlibabaCloud\SDK\Dingtalk\Vbizfinance_1_0\Models\GetProjectResponse;
use AlibabaCloud\SDK\Dingtalk\Vbizfinance_1_0\Models\GetReceiptHeaders;
use AlibabaCloud\SDK\Dingtalk\Vbizfinance_1_0\Models\GetReceiptRequest;
use AlibabaCloud\SDK\Dingtalk\Vbizfinance_1_0\Models\GetReceiptResponse;
use AlibabaCloud\SDK\Dingtalk\Vbizfinance_1_0\Models\GetSupplierHeaders;
use AlibabaCloud\SDK\Dingtalk\Vbizfinance_1_0\Models\GetSupplierRequest;
use AlibabaCloud\SDK\Dingtalk\Vbizfinance_1_0\Models\GetSupplierResponse;
use AlibabaCloud\SDK\Dingtalk\Vbizfinance_1_0\Models\QueryCategoryByPageHeaders;
use AlibabaCloud\SDK\Dingtalk\Vbizfinance_1_0\Models\QueryCategoryByPageRequest;
use AlibabaCloud\SDK\Dingtalk\Vbizfinance_1_0\Models\QueryCategoryByPageResponse;
use AlibabaCloud\SDK\Dingtalk\Vbizfinance_1_0\Models\QueryCustomerByPageHeaders;
use AlibabaCloud\SDK\Dingtalk\Vbizfinance_1_0\Models\QueryCustomerByPageRequest;
use AlibabaCloud\SDK\Dingtalk\Vbizfinance_1_0\Models\QueryCustomerByPageResponse;
use AlibabaCloud\SDK\Dingtalk\Vbizfinance_1_0\Models\QueryCustomerInfoHeaders;
use AlibabaCloud\SDK\Dingtalk\Vbizfinance_1_0\Models\QueryCustomerInfoRequest;
use AlibabaCloud\SDK\Dingtalk\Vbizfinance_1_0\Models\QueryCustomerInfoResponse;
use AlibabaCloud\SDK\Dingtalk\Vbizfinance_1_0\Models\QueryEnterpriseAccountByPageHeaders;
use AlibabaCloud\SDK\Dingtalk\Vbizfinance_1_0\Models\QueryEnterpriseAccountByPageRequest;
use AlibabaCloud\SDK\Dingtalk\Vbizfinance_1_0\Models\QueryEnterpriseAccountByPageResponse;
use AlibabaCloud\SDK\Dingtalk\Vbizfinance_1_0\Models\QueryInvoiceRelationCountHeaders;
use AlibabaCloud\SDK\Dingtalk\Vbizfinance_1_0\Models\QueryInvoiceRelationCountResponse;
use AlibabaCloud\SDK\Dingtalk\Vbizfinance_1_0\Models\QueryPermissionByUserIdHeaders;
use AlibabaCloud\SDK\Dingtalk\Vbizfinance_1_0\Models\QueryPermissionByUserIdRequest;
use AlibabaCloud\SDK\Dingtalk\Vbizfinance_1_0\Models\QueryPermissionByUserIdResponse;
use AlibabaCloud\SDK\Dingtalk\Vbizfinance_1_0\Models\QueryPermissionRoleMemberHeaders;
use AlibabaCloud\SDK\Dingtalk\Vbizfinance_1_0\Models\QueryPermissionRoleMemberRequest;
use AlibabaCloud\SDK\Dingtalk\Vbizfinance_1_0\Models\QueryPermissionRoleMemberResponse;
use AlibabaCloud\SDK\Dingtalk\Vbizfinance_1_0\Models\QueryProjectByPageHeaders;
use AlibabaCloud\SDK\Dingtalk\Vbizfinance_1_0\Models\QueryProjectByPageRequest;
use AlibabaCloud\SDK\Dingtalk\Vbizfinance_1_0\Models\QueryProjectByPageResponse;
use AlibabaCloud\SDK\Dingtalk\Vbizfinance_1_0\Models\QueryReceiptForInvoiceHeaders;
use AlibabaCloud\SDK\Dingtalk\Vbizfinance_1_0\Models\QueryReceiptForInvoiceRequest;
use AlibabaCloud\SDK\Dingtalk\Vbizfinance_1_0\Models\QueryReceiptForInvoiceResponse;
use AlibabaCloud\SDK\Dingtalk\Vbizfinance_1_0\Models\QueryReceiptsByPageHeaders;
use AlibabaCloud\SDK\Dingtalk\Vbizfinance_1_0\Models\QueryReceiptsByPageRequest;
use AlibabaCloud\SDK\Dingtalk\Vbizfinance_1_0\Models\QueryReceiptsByPageResponse;
use AlibabaCloud\SDK\Dingtalk\Vbizfinance_1_0\Models\QuerySupplierByPageHeaders;
use AlibabaCloud\SDK\Dingtalk\Vbizfinance_1_0\Models\QuerySupplierByPageRequest;
use AlibabaCloud\SDK\Dingtalk\Vbizfinance_1_0\Models\QuerySupplierByPageResponse;
use AlibabaCloud\SDK\Dingtalk\Vbizfinance_1_0\Models\UpdateInvoiceAbandonStatusHeaders;
use AlibabaCloud\SDK\Dingtalk\Vbizfinance_1_0\Models\UpdateInvoiceAbandonStatusRequest;
use AlibabaCloud\SDK\Dingtalk\Vbizfinance_1_0\Models\UpdateInvoiceAbandonStatusResponse;
use AlibabaCloud\SDK\Dingtalk\Vbizfinance_1_0\Models\UpdateInvoiceAndReceiptRelatedHeaders;
use AlibabaCloud\SDK\Dingtalk\Vbizfinance_1_0\Models\UpdateInvoiceAndReceiptRelatedRequest;
use AlibabaCloud\SDK\Dingtalk\Vbizfinance_1_0\Models\UpdateInvoiceAndReceiptRelatedResponse;
use AlibabaCloud\SDK\Dingtalk\Vbizfinance_1_0\Models\UpdateInvoiceIgnoreStatusHeaders;
use AlibabaCloud\SDK\Dingtalk\Vbizfinance_1_0\Models\UpdateInvoiceIgnoreStatusRequest;
use AlibabaCloud\SDK\Dingtalk\Vbizfinance_1_0\Models\UpdateInvoiceIgnoreStatusResponse;
use AlibabaCloud\SDK\Dingtalk\Vbizfinance_1_0\Models\UpdateInvoiceVerifyStatusHeaders;
use AlibabaCloud\SDK\Dingtalk\Vbizfinance_1_0\Models\UpdateInvoiceVerifyStatusRequest;
use AlibabaCloud\SDK\Dingtalk\Vbizfinance_1_0\Models\UpdateInvoiceVerifyStatusResponse;
use AlibabaCloud\SDK\Dingtalk\Vbizfinance_1_0\Models\UpdateReceiptHeaders;
use AlibabaCloud\SDK\Dingtalk\Vbizfinance_1_0\Models\UpdateReceiptRequest;
use AlibabaCloud\SDK\Dingtalk\Vbizfinance_1_0\Models\UpdateReceiptResponse;
use AlibabaCloud\Tea\Utils\Utils;
use AlibabaCloud\Tea\Utils\Utils\RuntimeOptions;
use Darabonba\OpenApi\Models\OpenApiRequest;
use Darabonba\OpenApi\OpenApiClient;

class Dingtalk extends OpenApiClient
{
    public function __construct($config)
    {
        parent::__construct($config);
        $this->_endpointRule = '';
        if (Utils::empty_($this->_endpoint)) {
            $this->_endpoint = 'api.dingtalk.com';
        }
    }

    /**
     * @param BatchAddInvoiceRequest $request
     *
     * @return BatchAddInvoiceResponse
     */
    public function batchAddInvoice($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = new BatchAddInvoiceHeaders([]);

        return $this->batchAddInvoiceWithOptions($request, $headers, $runtime);
    }

    /**
     * @param BatchAddInvoiceRequest $request
     * @param BatchAddInvoiceHeaders $headers
     * @param RuntimeOptions         $runtime
     *
     * @return BatchAddInvoiceResponse
     */
    public function batchAddInvoiceWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->generalInvoiceVOList)) {
            @$body['generalInvoiceVOList'] = $request->generalInvoiceVOList;
        }
        $realHeaders = [];
        if (!Utils::isUnset($headers->commonHeaders)) {
            $realHeaders = $headers->commonHeaders;
        }
        if (!Utils::isUnset($headers->xAcsDingtalkAccessToken)) {
            @$realHeaders['x-acs-dingtalk-access-token'] = Utils::toJSONString($headers->xAcsDingtalkAccessToken);
        }
        $req = new OpenApiRequest([
            'headers' => $realHeaders,
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);

        return BatchAddInvoiceResponse::fromMap($this->doROARequest('BatchAddInvoice', 'bizfinance_1.0', 'HTTP', 'POST', 'AK', '/v1.0/bizfinance/invoices/batch', 'json', $req, $runtime));
    }

    /**
     * @param CreateCustomerRequest $request
     *
     * @return CreateCustomerResponse
     */
    public function createCustomer($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = new CreateCustomerHeaders([]);

        return $this->createCustomerWithOptions($request, $headers, $runtime);
    }

    /**
     * @param CreateCustomerRequest $request
     * @param CreateCustomerHeaders $headers
     * @param RuntimeOptions        $runtime
     *
     * @return CreateCustomerResponse
     */
    public function createCustomerWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->creator)) {
            @$body['creator'] = $request->creator;
        }
        if (!Utils::isUnset($request->description)) {
            @$body['description'] = $request->description;
        }
        if (!Utils::isUnset($request->name)) {
            @$body['name'] = $request->name;
        }
        if (!Utils::isUnset($request->purchaserAccount)) {
            @$body['purchaserAccount'] = $request->purchaserAccount;
        }
        if (!Utils::isUnset($request->purchaserAddress)) {
            @$body['purchaserAddress'] = $request->purchaserAddress;
        }
        if (!Utils::isUnset($request->purchaserBankName)) {
            @$body['purchaserBankName'] = $request->purchaserBankName;
        }
        if (!Utils::isUnset($request->purchaserName)) {
            @$body['purchaserName'] = $request->purchaserName;
        }
        if (!Utils::isUnset($request->purchaserTaxNo)) {
            @$body['purchaserTaxNo'] = $request->purchaserTaxNo;
        }
        if (!Utils::isUnset($request->purchaserTel)) {
            @$body['purchaserTel'] = $request->purchaserTel;
        }
        $realHeaders = [];
        if (!Utils::isUnset($headers->commonHeaders)) {
            $realHeaders = $headers->commonHeaders;
        }
        if (!Utils::isUnset($headers->xAcsDingtalkAccessToken)) {
            @$realHeaders['x-acs-dingtalk-access-token'] = Utils::toJSONString($headers->xAcsDingtalkAccessToken);
        }
        $req = new OpenApiRequest([
            'headers' => $realHeaders,
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);

        return CreateCustomerResponse::fromMap($this->doROARequest('CreateCustomer', 'bizfinance_1.0', 'HTTP', 'POST', 'AK', '/v1.0/bizfinance/auxiliaries/customers', 'json', $req, $runtime));
    }

    /**
     * @param CreateReceiptRequest $request
     *
     * @return CreateReceiptResponse
     */
    public function createReceipt($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = new CreateReceiptHeaders([]);

        return $this->createReceiptWithOptions($request, $headers, $runtime);
    }

    /**
     * @param CreateReceiptRequest $request
     * @param CreateReceiptHeaders $headers
     * @param RuntimeOptions       $runtime
     *
     * @return CreateReceiptResponse
     */
    public function createReceiptWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->receipts)) {
            @$body['receipts'] = $request->receipts;
        }
        $realHeaders = [];
        if (!Utils::isUnset($headers->commonHeaders)) {
            $realHeaders = $headers->commonHeaders;
        }
        if (!Utils::isUnset($headers->xAcsDingtalkAccessToken)) {
            @$realHeaders['x-acs-dingtalk-access-token'] = Utils::toJSONString($headers->xAcsDingtalkAccessToken);
        }
        $req = new OpenApiRequest([
            'headers' => $realHeaders,
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);

        return CreateReceiptResponse::fromMap($this->doROARequest('CreateReceipt', 'bizfinance_1.0', 'HTTP', 'POST', 'AK', '/v1.0/bizfinance/receipts', 'json', $req, $runtime));
    }

    /**
     * @param DeleteReceiptRequest $request
     *
     * @return DeleteReceiptResponse
     */
    public function deleteReceipt($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = new DeleteReceiptHeaders([]);

        return $this->deleteReceiptWithOptions($request, $headers, $runtime);
    }

    /**
     * @param DeleteReceiptRequest $request
     * @param DeleteReceiptHeaders $headers
     * @param RuntimeOptions       $runtime
     *
     * @return DeleteReceiptResponse
     */
    public function deleteReceiptWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->receipts)) {
            @$body['receipts'] = $request->receipts;
        }
        $realHeaders = [];
        if (!Utils::isUnset($headers->commonHeaders)) {
            $realHeaders = $headers->commonHeaders;
        }
        if (!Utils::isUnset($headers->xAcsDingtalkAccessToken)) {
            @$realHeaders['x-acs-dingtalk-access-token'] = Utils::toJSONString($headers->xAcsDingtalkAccessToken);
        }
        $req = new OpenApiRequest([
            'headers' => $realHeaders,
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);

        return DeleteReceiptResponse::fromMap($this->doROARequest('DeleteReceipt', 'bizfinance_1.0', 'HTTP', 'POST', 'AK', '/v1.0/bizfinance/receipts/remove', 'json', $req, $runtime));
    }

    /**
     * @return GetBookkeepingUserListResponse
     */
    public function getBookkeepingUserList()
    {
        $runtime = new RuntimeOptions([]);
        $headers = new GetBookkeepingUserListHeaders([]);

        return $this->getBookkeepingUserListWithOptions($headers, $runtime);
    }

    /**
     * @param GetBookkeepingUserListHeaders $headers
     * @param RuntimeOptions                $runtime
     *
     * @return GetBookkeepingUserListResponse
     */
    public function getBookkeepingUserListWithOptions($headers, $runtime)
    {
        $realHeaders = [];
        if (!Utils::isUnset($headers->commonHeaders)) {
            $realHeaders = $headers->commonHeaders;
        }
        if (!Utils::isUnset($headers->xAcsDingtalkAccessToken)) {
            @$realHeaders['x-acs-dingtalk-access-token'] = Utils::toJSONString($headers->xAcsDingtalkAccessToken);
        }
        $req = new OpenApiRequest([
            'headers' => $realHeaders,
        ]);

        return GetBookkeepingUserListResponse::fromMap($this->doROARequest('GetBookkeepingUserList', 'bizfinance_1.0', 'HTTP', 'GET', 'AK', '/v1.0/bizfinance/bookkeeping/users', 'json', $req, $runtime));
    }

    /**
     * @param GetCategoryRequest $request
     *
     * @return GetCategoryResponse
     */
    public function getCategory($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = new GetCategoryHeaders([]);

        return $this->getCategoryWithOptions($request, $headers, $runtime);
    }

    /**
     * @param GetCategoryRequest $request
     * @param GetCategoryHeaders $headers
     * @param RuntimeOptions     $runtime
     *
     * @return GetCategoryResponse
     */
    public function getCategoryWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->code)) {
            @$query['code'] = $request->code;
        }
        $realHeaders = [];
        if (!Utils::isUnset($headers->commonHeaders)) {
            $realHeaders = $headers->commonHeaders;
        }
        if (!Utils::isUnset($headers->xAcsDingtalkAccessToken)) {
            @$realHeaders['x-acs-dingtalk-access-token'] = Utils::toJSONString($headers->xAcsDingtalkAccessToken);
        }
        $req = new OpenApiRequest([
            'headers' => $realHeaders,
            'query'   => OpenApiUtilClient::query($query),
        ]);

        return GetCategoryResponse::fromMap($this->doROARequest('GetCategory', 'bizfinance_1.0', 'HTTP', 'GET', 'AK', '/v1.0/bizfinance/categories/get', 'json', $req, $runtime));
    }

    /**
     * @param GetCustomerRequest $request
     *
     * @return GetCustomerResponse
     */
    public function getCustomer($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = new GetCustomerHeaders([]);

        return $this->getCustomerWithOptions($request, $headers, $runtime);
    }

    /**
     * @param GetCustomerRequest $request
     * @param GetCustomerHeaders $headers
     * @param RuntimeOptions     $runtime
     *
     * @return GetCustomerResponse
     */
    public function getCustomerWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->code)) {
            @$query['code'] = $request->code;
        }
        $realHeaders = [];
        if (!Utils::isUnset($headers->commonHeaders)) {
            $realHeaders = $headers->commonHeaders;
        }
        if (!Utils::isUnset($headers->xAcsDingtalkAccessToken)) {
            @$realHeaders['x-acs-dingtalk-access-token'] = Utils::toJSONString($headers->xAcsDingtalkAccessToken);
        }
        $req = new OpenApiRequest([
            'headers' => $realHeaders,
            'query'   => OpenApiUtilClient::query($query),
        ]);

        return GetCustomerResponse::fromMap($this->doROARequest('GetCustomer', 'bizfinance_1.0', 'HTTP', 'GET', 'AK', '/v1.0/bizfinance/customers/details', 'json', $req, $runtime));
    }

    /**
     * @param GetFinanceAccountRequest $request
     *
     * @return GetFinanceAccountResponse
     */
    public function getFinanceAccount($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = new GetFinanceAccountHeaders([]);

        return $this->getFinanceAccountWithOptions($request, $headers, $runtime);
    }

    /**
     * @param GetFinanceAccountRequest $request
     * @param GetFinanceAccountHeaders $headers
     * @param RuntimeOptions           $runtime
     *
     * @return GetFinanceAccountResponse
     */
    public function getFinanceAccountWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->accountCode)) {
            @$query['accountCode'] = $request->accountCode;
        }
        $realHeaders = [];
        if (!Utils::isUnset($headers->commonHeaders)) {
            $realHeaders = $headers->commonHeaders;
        }
        if (!Utils::isUnset($headers->xAcsDingtalkAccessToken)) {
            @$realHeaders['x-acs-dingtalk-access-token'] = Utils::toJSONString($headers->xAcsDingtalkAccessToken);
        }
        $req = new OpenApiRequest([
            'headers' => $realHeaders,
            'query'   => OpenApiUtilClient::query($query),
        ]);

        return GetFinanceAccountResponse::fromMap($this->doROARequest('GetFinanceAccount', 'bizfinance_1.0', 'HTTP', 'GET', 'AK', '/v1.0/bizfinance/financeAccounts/get', 'json', $req, $runtime));
    }

    /**
     * @param GetInvoiceByPageRequest $request
     *
     * @return GetInvoiceByPageResponse
     */
    public function getInvoiceByPage($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = new GetInvoiceByPageHeaders([]);

        return $this->getInvoiceByPageWithOptions($request, $headers, $runtime);
    }

    /**
     * @param GetInvoiceByPageRequest $request
     * @param GetInvoiceByPageHeaders $headers
     * @param RuntimeOptions          $runtime
     *
     * @return GetInvoiceByPageResponse
     */
    public function getInvoiceByPageWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->endTime)) {
            @$query['endTime'] = $request->endTime;
        }
        if (!Utils::isUnset($request->financeType)) {
            @$query['financeType'] = $request->financeType;
        }
        if (!Utils::isUnset($request->pageNumber)) {
            @$query['pageNumber'] = $request->pageNumber;
        }
        if (!Utils::isUnset($request->pageSize)) {
            @$query['pageSize'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->startTime)) {
            @$query['startTime'] = $request->startTime;
        }
        if (!Utils::isUnset($request->taxNo)) {
            @$query['taxNo'] = $request->taxNo;
        }
        if (!Utils::isUnset($request->verifyStatus)) {
            @$query['verifyStatus'] = $request->verifyStatus;
        }
        $realHeaders = [];
        if (!Utils::isUnset($headers->commonHeaders)) {
            $realHeaders = $headers->commonHeaders;
        }
        if (!Utils::isUnset($headers->xAcsDingtalkAccessToken)) {
            @$realHeaders['x-acs-dingtalk-access-token'] = Utils::toJSONString($headers->xAcsDingtalkAccessToken);
        }
        $req = new OpenApiRequest([
            'headers' => $realHeaders,
            'query'   => OpenApiUtilClient::query($query),
        ]);

        return GetInvoiceByPageResponse::fromMap($this->doROARequest('GetInvoiceByPage', 'bizfinance_1.0', 'HTTP', 'GET', 'AK', '/v1.0/bizfinance/invoices', 'json', $req, $runtime));
    }

    /**
     * @return GetIsNewVersionResponse
     */
    public function getIsNewVersion()
    {
        $runtime = new RuntimeOptions([]);
        $headers = new GetIsNewVersionHeaders([]);

        return $this->getIsNewVersionWithOptions($headers, $runtime);
    }

    /**
     * @param GetIsNewVersionHeaders $headers
     * @param RuntimeOptions         $runtime
     *
     * @return GetIsNewVersionResponse
     */
    public function getIsNewVersionWithOptions($headers, $runtime)
    {
        $realHeaders = [];
        if (!Utils::isUnset($headers->commonHeaders)) {
            $realHeaders = $headers->commonHeaders;
        }
        if (!Utils::isUnset($headers->xAcsDingtalkAccessToken)) {
            @$realHeaders['x-acs-dingtalk-access-token'] = Utils::toJSONString($headers->xAcsDingtalkAccessToken);
        }
        $req = new OpenApiRequest([
            'headers' => $realHeaders,
        ]);

        return GetIsNewVersionResponse::fromMap($this->doROARequest('GetIsNewVersion', 'bizfinance_1.0', 'HTTP', 'GET', 'AK', '/v1.0/bizfinance/accounts/uses', 'json', $req, $runtime));
    }

    /**
     * @param GetProjectRequest $request
     *
     * @return GetProjectResponse
     */
    public function getProject($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = new GetProjectHeaders([]);

        return $this->getProjectWithOptions($request, $headers, $runtime);
    }

    /**
     * @param GetProjectRequest $request
     * @param GetProjectHeaders $headers
     * @param RuntimeOptions    $runtime
     *
     * @return GetProjectResponse
     */
    public function getProjectWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->code)) {
            @$query['code'] = $request->code;
        }
        $realHeaders = [];
        if (!Utils::isUnset($headers->commonHeaders)) {
            $realHeaders = $headers->commonHeaders;
        }
        if (!Utils::isUnset($headers->xAcsDingtalkAccessToken)) {
            @$realHeaders['x-acs-dingtalk-access-token'] = Utils::toJSONString($headers->xAcsDingtalkAccessToken);
        }
        $req = new OpenApiRequest([
            'headers' => $realHeaders,
            'query'   => OpenApiUtilClient::query($query),
        ]);

        return GetProjectResponse::fromMap($this->doROARequest('GetProject', 'bizfinance_1.0', 'HTTP', 'GET', 'AK', '/v1.0/bizfinance/projects/get', 'json', $req, $runtime));
    }

    /**
     * @param GetReceiptRequest $request
     *
     * @return GetReceiptResponse
     */
    public function getReceipt($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = new GetReceiptHeaders([]);

        return $this->getReceiptWithOptions($request, $headers, $runtime);
    }

    /**
     * @param GetReceiptRequest $request
     * @param GetReceiptHeaders $headers
     * @param RuntimeOptions    $runtime
     *
     * @return GetReceiptResponse
     */
    public function getReceiptWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->code)) {
            @$query['code'] = $request->code;
        }
        if (!Utils::isUnset($request->modelId)) {
            @$query['modelId'] = $request->modelId;
        }
        $realHeaders = [];
        if (!Utils::isUnset($headers->commonHeaders)) {
            $realHeaders = $headers->commonHeaders;
        }
        if (!Utils::isUnset($headers->xAcsDingtalkAccessToken)) {
            @$realHeaders['x-acs-dingtalk-access-token'] = Utils::toJSONString($headers->xAcsDingtalkAccessToken);
        }
        $req = new OpenApiRequest([
            'headers' => $realHeaders,
            'query'   => OpenApiUtilClient::query($query),
        ]);

        return GetReceiptResponse::fromMap($this->doROARequest('GetReceipt', 'bizfinance_1.0', 'HTTP', 'GET', 'AK', '/v1.0/bizfinance/receipts/details', 'json', $req, $runtime));
    }

    /**
     * @param GetSupplierRequest $request
     *
     * @return GetSupplierResponse
     */
    public function getSupplier($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = new GetSupplierHeaders([]);

        return $this->getSupplierWithOptions($request, $headers, $runtime);
    }

    /**
     * @param GetSupplierRequest $request
     * @param GetSupplierHeaders $headers
     * @param RuntimeOptions     $runtime
     *
     * @return GetSupplierResponse
     */
    public function getSupplierWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->code)) {
            @$query['code'] = $request->code;
        }
        $realHeaders = [];
        if (!Utils::isUnset($headers->commonHeaders)) {
            $realHeaders = $headers->commonHeaders;
        }
        if (!Utils::isUnset($headers->xAcsDingtalkAccessToken)) {
            @$realHeaders['x-acs-dingtalk-access-token'] = Utils::toJSONString($headers->xAcsDingtalkAccessToken);
        }
        $req = new OpenApiRequest([
            'headers' => $realHeaders,
            'query'   => OpenApiUtilClient::query($query),
        ]);

        return GetSupplierResponse::fromMap($this->doROARequest('GetSupplier', 'bizfinance_1.0', 'HTTP', 'GET', 'AK', '/v1.0/bizfinance/suppliers/details', 'json', $req, $runtime));
    }

    /**
     * @param QueryCategoryByPageRequest $request
     *
     * @return QueryCategoryByPageResponse
     */
    public function queryCategoryByPage($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = new QueryCategoryByPageHeaders([]);

        return $this->queryCategoryByPageWithOptions($request, $headers, $runtime);
    }

    /**
     * @param QueryCategoryByPageRequest $request
     * @param QueryCategoryByPageHeaders $headers
     * @param RuntimeOptions             $runtime
     *
     * @return QueryCategoryByPageResponse
     */
    public function queryCategoryByPageWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->pageNumber)) {
            @$query['pageNumber'] = $request->pageNumber;
        }
        if (!Utils::isUnset($request->pageSize)) {
            @$query['pageSize'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->type)) {
            @$query['type'] = $request->type;
        }
        $realHeaders = [];
        if (!Utils::isUnset($headers->commonHeaders)) {
            $realHeaders = $headers->commonHeaders;
        }
        if (!Utils::isUnset($headers->xAcsDingtalkAccessToken)) {
            @$realHeaders['x-acs-dingtalk-access-token'] = Utils::toJSONString($headers->xAcsDingtalkAccessToken);
        }
        $req = new OpenApiRequest([
            'headers' => $realHeaders,
            'query'   => OpenApiUtilClient::query($query),
        ]);

        return QueryCategoryByPageResponse::fromMap($this->doROARequest('QueryCategoryByPage', 'bizfinance_1.0', 'HTTP', 'GET', 'AK', '/v1.0/bizfinance/categories/list', 'json', $req, $runtime));
    }

    /**
     * @param QueryCustomerByPageRequest $request
     *
     * @return QueryCustomerByPageResponse
     */
    public function queryCustomerByPage($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = new QueryCustomerByPageHeaders([]);

        return $this->queryCustomerByPageWithOptions($request, $headers, $runtime);
    }

    /**
     * @param QueryCustomerByPageRequest $request
     * @param QueryCustomerByPageHeaders $headers
     * @param RuntimeOptions             $runtime
     *
     * @return QueryCustomerByPageResponse
     */
    public function queryCustomerByPageWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->pageNumber)) {
            @$query['pageNumber'] = $request->pageNumber;
        }
        if (!Utils::isUnset($request->pageSize)) {
            @$query['pageSize'] = $request->pageSize;
        }
        $realHeaders = [];
        if (!Utils::isUnset($headers->commonHeaders)) {
            $realHeaders = $headers->commonHeaders;
        }
        if (!Utils::isUnset($headers->xAcsDingtalkAccessToken)) {
            @$realHeaders['x-acs-dingtalk-access-token'] = Utils::toJSONString($headers->xAcsDingtalkAccessToken);
        }
        $req = new OpenApiRequest([
            'headers' => $realHeaders,
            'query'   => OpenApiUtilClient::query($query),
        ]);

        return QueryCustomerByPageResponse::fromMap($this->doROARequest('QueryCustomerByPage', 'bizfinance_1.0', 'HTTP', 'GET', 'AK', '/v1.0/bizfinance/customers', 'json', $req, $runtime));
    }

    /**
     * @param QueryCustomerInfoRequest $request
     *
     * @return QueryCustomerInfoResponse
     */
    public function queryCustomerInfo($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = new QueryCustomerInfoHeaders([]);

        return $this->queryCustomerInfoWithOptions($request, $headers, $runtime);
    }

    /**
     * @param QueryCustomerInfoRequest $request
     * @param QueryCustomerInfoHeaders $headers
     * @param RuntimeOptions           $runtime
     *
     * @return QueryCustomerInfoResponse
     */
    public function queryCustomerInfoWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->name)) {
            @$query['name'] = $request->name;
        }
        if (!Utils::isUnset($request->pageNumber)) {
            @$query['pageNumber'] = $request->pageNumber;
        }
        if (!Utils::isUnset($request->pageSize)) {
            @$query['pageSize'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->purchaserTaxNo)) {
            @$query['purchaserTaxNo'] = $request->purchaserTaxNo;
        }
        if (!Utils::isUnset($request->purchaserTel)) {
            @$query['purchaserTel'] = $request->purchaserTel;
        }
        $realHeaders = [];
        if (!Utils::isUnset($headers->commonHeaders)) {
            $realHeaders = $headers->commonHeaders;
        }
        if (!Utils::isUnset($headers->xAcsDingtalkAccessToken)) {
            @$realHeaders['x-acs-dingtalk-access-token'] = Utils::toJSONString($headers->xAcsDingtalkAccessToken);
        }
        $req = new OpenApiRequest([
            'headers' => $realHeaders,
            'query'   => OpenApiUtilClient::query($query),
        ]);

        return QueryCustomerInfoResponse::fromMap($this->doROARequest('QueryCustomerInfo', 'bizfinance_1.0', 'HTTP', 'GET', 'AK', '/v1.0/bizfinance/auxiliaries/customers', 'json', $req, $runtime));
    }

    /**
     * @param QueryEnterpriseAccountByPageRequest $request
     *
     * @return QueryEnterpriseAccountByPageResponse
     */
    public function queryEnterpriseAccountByPage($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = new QueryEnterpriseAccountByPageHeaders([]);

        return $this->queryEnterpriseAccountByPageWithOptions($request, $headers, $runtime);
    }

    /**
     * @param QueryEnterpriseAccountByPageRequest $request
     * @param QueryEnterpriseAccountByPageHeaders $headers
     * @param RuntimeOptions                      $runtime
     *
     * @return QueryEnterpriseAccountByPageResponse
     */
    public function queryEnterpriseAccountByPageWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->pageNumber)) {
            @$query['pageNumber'] = $request->pageNumber;
        }
        if (!Utils::isUnset($request->pageSize)) {
            @$query['pageSize'] = $request->pageSize;
        }
        $realHeaders = [];
        if (!Utils::isUnset($headers->commonHeaders)) {
            $realHeaders = $headers->commonHeaders;
        }
        if (!Utils::isUnset($headers->xAcsDingtalkAccessToken)) {
            @$realHeaders['x-acs-dingtalk-access-token'] = Utils::toJSONString($headers->xAcsDingtalkAccessToken);
        }
        $req = new OpenApiRequest([
            'headers' => $realHeaders,
            'query'   => OpenApiUtilClient::query($query),
        ]);

        return QueryEnterpriseAccountByPageResponse::fromMap($this->doROARequest('QueryEnterpriseAccountByPage', 'bizfinance_1.0', 'HTTP', 'GET', 'AK', '/v1.0/bizfinance/financeAccounts/list', 'json', $req, $runtime));
    }

    /**
     * @return QueryInvoiceRelationCountResponse
     */
    public function queryInvoiceRelationCount()
    {
        $runtime = new RuntimeOptions([]);
        $headers = new QueryInvoiceRelationCountHeaders([]);

        return $this->queryInvoiceRelationCountWithOptions($headers, $runtime);
    }

    /**
     * @param QueryInvoiceRelationCountHeaders $headers
     * @param RuntimeOptions                   $runtime
     *
     * @return QueryInvoiceRelationCountResponse
     */
    public function queryInvoiceRelationCountWithOptions($headers, $runtime)
    {
        $realHeaders = [];
        if (!Utils::isUnset($headers->commonHeaders)) {
            $realHeaders = $headers->commonHeaders;
        }
        if (!Utils::isUnset($headers->xAcsDingtalkAccessToken)) {
            @$realHeaders['x-acs-dingtalk-access-token'] = Utils::toJSONString($headers->xAcsDingtalkAccessToken);
        }
        $req = new OpenApiRequest([
            'headers' => $realHeaders,
        ]);

        return QueryInvoiceRelationCountResponse::fromMap($this->doROARequest('QueryInvoiceRelationCount', 'bizfinance_1.0', 'HTTP', 'GET', 'AK', '/v1.0/bizfinance/invoices/relationReceipts/counts', 'json', $req, $runtime));
    }

    /**
     * @param QueryPermissionByUserIdRequest $request
     *
     * @return QueryPermissionByUserIdResponse
     */
    public function queryPermissionByUserId($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = new QueryPermissionByUserIdHeaders([]);

        return $this->queryPermissionByUserIdWithOptions($request, $headers, $runtime);
    }

    /**
     * @param QueryPermissionByUserIdRequest $request
     * @param QueryPermissionByUserIdHeaders $headers
     * @param RuntimeOptions                 $runtime
     *
     * @return QueryPermissionByUserIdResponse
     */
    public function queryPermissionByUserIdWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->userId)) {
            @$query['userId'] = $request->userId;
        }
        $realHeaders = [];
        if (!Utils::isUnset($headers->commonHeaders)) {
            $realHeaders = $headers->commonHeaders;
        }
        if (!Utils::isUnset($headers->xAcsDingtalkAccessToken)) {
            @$realHeaders['x-acs-dingtalk-access-token'] = Utils::toJSONString($headers->xAcsDingtalkAccessToken);
        }
        $req = new OpenApiRequest([
            'headers' => $realHeaders,
            'query'   => OpenApiUtilClient::query($query),
        ]);

        return QueryPermissionByUserIdResponse::fromMap($this->doROARequest('QueryPermissionByUserId', 'bizfinance_1.0', 'HTTP', 'GET', 'AK', '/v1.0/bizfinance/permissions', 'json', $req, $runtime));
    }

    /**
     * @param QueryPermissionRoleMemberRequest $request
     *
     * @return QueryPermissionRoleMemberResponse
     */
    public function queryPermissionRoleMember($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = new QueryPermissionRoleMemberHeaders([]);

        return $this->queryPermissionRoleMemberWithOptions($request, $headers, $runtime);
    }

    /**
     * @param QueryPermissionRoleMemberRequest $request
     * @param QueryPermissionRoleMemberHeaders $headers
     * @param RuntimeOptions                   $runtime
     *
     * @return QueryPermissionRoleMemberResponse
     */
    public function queryPermissionRoleMemberWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->roleCodeList)) {
            @$body['roleCodeList'] = $request->roleCodeList;
        }
        $realHeaders = [];
        if (!Utils::isUnset($headers->commonHeaders)) {
            $realHeaders = $headers->commonHeaders;
        }
        if (!Utils::isUnset($headers->xAcsDingtalkAccessToken)) {
            @$realHeaders['x-acs-dingtalk-access-token'] = Utils::toJSONString($headers->xAcsDingtalkAccessToken);
        }
        $req = new OpenApiRequest([
            'headers' => $realHeaders,
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);

        return QueryPermissionRoleMemberResponse::fromMap($this->doROARequest('QueryPermissionRoleMember', 'bizfinance_1.0', 'HTTP', 'POST', 'AK', '/v1.0/bizfinance/roles/members/query', 'json', $req, $runtime));
    }

    /**
     * @param QueryProjectByPageRequest $request
     *
     * @return QueryProjectByPageResponse
     */
    public function queryProjectByPage($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = new QueryProjectByPageHeaders([]);

        return $this->queryProjectByPageWithOptions($request, $headers, $runtime);
    }

    /**
     * @param QueryProjectByPageRequest $request
     * @param QueryProjectByPageHeaders $headers
     * @param RuntimeOptions            $runtime
     *
     * @return QueryProjectByPageResponse
     */
    public function queryProjectByPageWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->pageNumber)) {
            @$query['pageNumber'] = $request->pageNumber;
        }
        if (!Utils::isUnset($request->pageSize)) {
            @$query['pageSize'] = $request->pageSize;
        }
        $realHeaders = [];
        if (!Utils::isUnset($headers->commonHeaders)) {
            $realHeaders = $headers->commonHeaders;
        }
        if (!Utils::isUnset($headers->xAcsDingtalkAccessToken)) {
            @$realHeaders['x-acs-dingtalk-access-token'] = Utils::toJSONString($headers->xAcsDingtalkAccessToken);
        }
        $req = new OpenApiRequest([
            'headers' => $realHeaders,
            'query'   => OpenApiUtilClient::query($query),
        ]);

        return QueryProjectByPageResponse::fromMap($this->doROARequest('QueryProjectByPage', 'bizfinance_1.0', 'HTTP', 'GET', 'AK', '/v1.0/bizfinance/projects/list', 'json', $req, $runtime));
    }

    /**
     * @param QueryReceiptForInvoiceRequest $request
     *
     * @return QueryReceiptForInvoiceResponse
     */
    public function queryReceiptForInvoice($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = new QueryReceiptForInvoiceHeaders([]);

        return $this->queryReceiptForInvoiceWithOptions($request, $headers, $runtime);
    }

    /**
     * @param QueryReceiptForInvoiceRequest $request
     * @param QueryReceiptForInvoiceHeaders $headers
     * @param RuntimeOptions                $runtime
     *
     * @return QueryReceiptForInvoiceResponse
     */
    public function queryReceiptForInvoiceWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->endTime)) {
            @$body['endTime'] = $request->endTime;
        }
        if (!Utils::isUnset($request->invoiceFilter)) {
            @$body['invoiceFilter'] = $request->invoiceFilter;
        }
        if (!Utils::isUnset($request->pageNumber)) {
            @$body['pageNumber'] = $request->pageNumber;
        }
        if (!Utils::isUnset($request->pageSize)) {
            @$body['pageSize'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->receiptStatus)) {
            @$body['receiptStatus'] = $request->receiptStatus;
        }
        if (!Utils::isUnset($request->startTime)) {
            @$body['startTime'] = $request->startTime;
        }
        if (!Utils::isUnset($request->title)) {
            @$body['title'] = $request->title;
        }
        $realHeaders = [];
        if (!Utils::isUnset($headers->commonHeaders)) {
            $realHeaders = $headers->commonHeaders;
        }
        if (!Utils::isUnset($headers->xAcsDingtalkAccessToken)) {
            @$realHeaders['x-acs-dingtalk-access-token'] = Utils::toJSONString($headers->xAcsDingtalkAccessToken);
        }
        $req = new OpenApiRequest([
            'headers' => $realHeaders,
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);

        return QueryReceiptForInvoiceResponse::fromMap($this->doROARequest('QueryReceiptForInvoice', 'bizfinance_1.0', 'HTTP', 'POST', 'AK', '/v1.0/bizfinance/invoices/receipts/query', 'json', $req, $runtime));
    }

    /**
     * @param QueryReceiptsByPageRequest $request
     *
     * @return QueryReceiptsByPageResponse
     */
    public function queryReceiptsByPage($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = new QueryReceiptsByPageHeaders([]);

        return $this->queryReceiptsByPageWithOptions($request, $headers, $runtime);
    }

    /**
     * @param QueryReceiptsByPageRequest $request
     * @param QueryReceiptsByPageHeaders $headers
     * @param RuntimeOptions             $runtime
     *
     * @return QueryReceiptsByPageResponse
     */
    public function queryReceiptsByPageWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->endTime)) {
            @$query['endTime'] = $request->endTime;
        }
        if (!Utils::isUnset($request->modelId)) {
            @$query['modelId'] = $request->modelId;
        }
        if (!Utils::isUnset($request->pageNumber)) {
            @$query['pageNumber'] = $request->pageNumber;
        }
        if (!Utils::isUnset($request->pageSize)) {
            @$query['pageSize'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->startTime)) {
            @$query['startTime'] = $request->startTime;
        }
        if (!Utils::isUnset($request->timeFilterField)) {
            @$query['timeFilterField'] = $request->timeFilterField;
        }
        $realHeaders = [];
        if (!Utils::isUnset($headers->commonHeaders)) {
            $realHeaders = $headers->commonHeaders;
        }
        if (!Utils::isUnset($headers->xAcsDingtalkAccessToken)) {
            @$realHeaders['x-acs-dingtalk-access-token'] = Utils::toJSONString($headers->xAcsDingtalkAccessToken);
        }
        $req = new OpenApiRequest([
            'headers' => $realHeaders,
            'query'   => OpenApiUtilClient::query($query),
        ]);

        return QueryReceiptsByPageResponse::fromMap($this->doROARequest('QueryReceiptsByPage', 'bizfinance_1.0', 'HTTP', 'GET', 'AK', '/v1.0/bizfinance/receipts', 'json', $req, $runtime));
    }

    /**
     * @param QuerySupplierByPageRequest $request
     *
     * @return QuerySupplierByPageResponse
     */
    public function querySupplierByPage($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = new QuerySupplierByPageHeaders([]);

        return $this->querySupplierByPageWithOptions($request, $headers, $runtime);
    }

    /**
     * @param QuerySupplierByPageRequest $request
     * @param QuerySupplierByPageHeaders $headers
     * @param RuntimeOptions             $runtime
     *
     * @return QuerySupplierByPageResponse
     */
    public function querySupplierByPageWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->pageNumber)) {
            @$query['pageNumber'] = $request->pageNumber;
        }
        if (!Utils::isUnset($request->pageSize)) {
            @$query['pageSize'] = $request->pageSize;
        }
        $realHeaders = [];
        if (!Utils::isUnset($headers->commonHeaders)) {
            $realHeaders = $headers->commonHeaders;
        }
        if (!Utils::isUnset($headers->xAcsDingtalkAccessToken)) {
            @$realHeaders['x-acs-dingtalk-access-token'] = Utils::toJSONString($headers->xAcsDingtalkAccessToken);
        }
        $req = new OpenApiRequest([
            'headers' => $realHeaders,
            'query'   => OpenApiUtilClient::query($query),
        ]);

        return QuerySupplierByPageResponse::fromMap($this->doROARequest('QuerySupplierByPage', 'bizfinance_1.0', 'HTTP', 'GET', 'AK', '/v1.0/bizfinance/suppliers', 'json', $req, $runtime));
    }

    /**
     * @param UpdateInvoiceAbandonStatusRequest $request
     *
     * @return UpdateInvoiceAbandonStatusResponse
     */
    public function updateInvoiceAbandonStatus($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = new UpdateInvoiceAbandonStatusHeaders([]);

        return $this->updateInvoiceAbandonStatusWithOptions($request, $headers, $runtime);
    }

    /**
     * @param UpdateInvoiceAbandonStatusRequest $request
     * @param UpdateInvoiceAbandonStatusHeaders $headers
     * @param RuntimeOptions                    $runtime
     *
     * @return UpdateInvoiceAbandonStatusResponse
     */
    public function updateInvoiceAbandonStatusWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->blueGeneralInvoiceVO)) {
            @$body['blueGeneralInvoiceVO'] = $request->blueGeneralInvoiceVO;
        }
        if (!Utils::isUnset($request->invoiceCode)) {
            @$body['invoiceCode'] = $request->invoiceCode;
        }
        if (!Utils::isUnset($request->invoiceNo)) {
            @$body['invoiceNo'] = $request->invoiceNo;
        }
        if (!Utils::isUnset($request->redGeneralInvoiceVO)) {
            @$body['redGeneralInvoiceVO'] = $request->redGeneralInvoiceVO;
        }
        if (!Utils::isUnset($request->status)) {
            @$body['status'] = $request->status;
        }
        $realHeaders = [];
        if (!Utils::isUnset($headers->commonHeaders)) {
            $realHeaders = $headers->commonHeaders;
        }
        if (!Utils::isUnset($headers->xAcsDingtalkAccessToken)) {
            @$realHeaders['x-acs-dingtalk-access-token'] = Utils::toJSONString($headers->xAcsDingtalkAccessToken);
        }
        $req = new OpenApiRequest([
            'headers' => $realHeaders,
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);

        return UpdateInvoiceAbandonStatusResponse::fromMap($this->doROARequest('UpdateInvoiceAbandonStatus', 'bizfinance_1.0', 'HTTP', 'PUT', 'AK', '/v1.0/bizfinance/invoices/abandonStatus', 'json', $req, $runtime));
    }

    /**
     * @param UpdateInvoiceAndReceiptRelatedRequest $request
     *
     * @return UpdateInvoiceAndReceiptRelatedResponse
     */
    public function updateInvoiceAndReceiptRelated($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = new UpdateInvoiceAndReceiptRelatedHeaders([]);

        return $this->updateInvoiceAndReceiptRelatedWithOptions($request, $headers, $runtime);
    }

    /**
     * @param UpdateInvoiceAndReceiptRelatedRequest $request
     * @param UpdateInvoiceAndReceiptRelatedHeaders $headers
     * @param RuntimeOptions                        $runtime
     *
     * @return UpdateInvoiceAndReceiptRelatedResponse
     */
    public function updateInvoiceAndReceiptRelatedWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->generalInvoiceVO)) {
            @$body['generalInvoiceVO'] = $request->generalInvoiceVO;
        }
        if (!Utils::isUnset($request->invoiceCode)) {
            @$body['invoiceCode'] = $request->invoiceCode;
        }
        if (!Utils::isUnset($request->invoiceNo)) {
            @$body['invoiceNo'] = $request->invoiceNo;
        }
        if (!Utils::isUnset($request->receiptCode)) {
            @$body['receiptCode'] = $request->receiptCode;
        }
        $realHeaders = [];
        if (!Utils::isUnset($headers->commonHeaders)) {
            $realHeaders = $headers->commonHeaders;
        }
        if (!Utils::isUnset($headers->xAcsDingtalkAccessToken)) {
            @$realHeaders['x-acs-dingtalk-access-token'] = Utils::toJSONString($headers->xAcsDingtalkAccessToken);
        }
        $req = new OpenApiRequest([
            'headers' => $realHeaders,
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);

        return UpdateInvoiceAndReceiptRelatedResponse::fromMap($this->doROARequest('UpdateInvoiceAndReceiptRelated', 'bizfinance_1.0', 'HTTP', 'PUT', 'AK', '/v1.0/bizfinance/invoices/approvalReceipts', 'json', $req, $runtime));
    }

    /**
     * @param UpdateInvoiceIgnoreStatusRequest $request
     *
     * @return UpdateInvoiceIgnoreStatusResponse
     */
    public function updateInvoiceIgnoreStatus($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = new UpdateInvoiceIgnoreStatusHeaders([]);

        return $this->updateInvoiceIgnoreStatusWithOptions($request, $headers, $runtime);
    }

    /**
     * @param UpdateInvoiceIgnoreStatusRequest $request
     * @param UpdateInvoiceIgnoreStatusHeaders $headers
     * @param RuntimeOptions                   $runtime
     *
     * @return UpdateInvoiceIgnoreStatusResponse
     */
    public function updateInvoiceIgnoreStatusWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->generalInvoiceVO)) {
            @$body['generalInvoiceVO'] = $request->generalInvoiceVO;
        }
        if (!Utils::isUnset($request->invoiceCode)) {
            @$body['invoiceCode'] = $request->invoiceCode;
        }
        if (!Utils::isUnset($request->invoiceNo)) {
            @$body['invoiceNo'] = $request->invoiceNo;
        }
        if (!Utils::isUnset($request->status)) {
            @$body['status'] = $request->status;
        }
        $realHeaders = [];
        if (!Utils::isUnset($headers->commonHeaders)) {
            $realHeaders = $headers->commonHeaders;
        }
        if (!Utils::isUnset($headers->xAcsDingtalkAccessToken)) {
            @$realHeaders['x-acs-dingtalk-access-token'] = Utils::toJSONString($headers->xAcsDingtalkAccessToken);
        }
        $req = new OpenApiRequest([
            'headers' => $realHeaders,
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);

        return UpdateInvoiceIgnoreStatusResponse::fromMap($this->doROARequest('UpdateInvoiceIgnoreStatus', 'bizfinance_1.0', 'HTTP', 'PUT', 'AK', '/v1.0/bizfinance/invoices/ignoreStatus', 'json', $req, $runtime));
    }

    /**
     * @param UpdateInvoiceVerifyStatusRequest $request
     *
     * @return UpdateInvoiceVerifyStatusResponse
     */
    public function updateInvoiceVerifyStatus($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = new UpdateInvoiceVerifyStatusHeaders([]);

        return $this->updateInvoiceVerifyStatusWithOptions($request, $headers, $runtime);
    }

    /**
     * @param UpdateInvoiceVerifyStatusRequest $request
     * @param UpdateInvoiceVerifyStatusHeaders $headers
     * @param RuntimeOptions                   $runtime
     *
     * @return UpdateInvoiceVerifyStatusResponse
     */
    public function updateInvoiceVerifyStatusWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->invoiceKeyVOList)) {
            @$body['invoiceKeyVOList'] = $request->invoiceKeyVOList;
        }
        if (!Utils::isUnset($request->verifyStatus)) {
            @$body['verifyStatus'] = $request->verifyStatus;
        }
        $realHeaders = [];
        if (!Utils::isUnset($headers->commonHeaders)) {
            $realHeaders = $headers->commonHeaders;
        }
        if (!Utils::isUnset($headers->xAcsDingtalkAccessToken)) {
            @$realHeaders['x-acs-dingtalk-access-token'] = Utils::toJSONString($headers->xAcsDingtalkAccessToken);
        }
        $req = new OpenApiRequest([
            'headers' => $realHeaders,
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);

        return UpdateInvoiceVerifyStatusResponse::fromMap($this->doROARequest('UpdateInvoiceVerifyStatus', 'bizfinance_1.0', 'HTTP', 'PUT', 'AK', '/v1.0/bizfinance/invoices/verifyStatus', 'json', $req, $runtime));
    }

    /**
     * @param UpdateReceiptRequest $request
     *
     * @return UpdateReceiptResponse
     */
    public function updateReceipt($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = new UpdateReceiptHeaders([]);

        return $this->updateReceiptWithOptions($request, $headers, $runtime);
    }

    /**
     * @param UpdateReceiptRequest $request
     * @param UpdateReceiptHeaders $headers
     * @param RuntimeOptions       $runtime
     *
     * @return UpdateReceiptResponse
     */
    public function updateReceiptWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->receipts)) {
            @$body['receipts'] = $request->receipts;
        }
        $realHeaders = [];
        if (!Utils::isUnset($headers->commonHeaders)) {
            $realHeaders = $headers->commonHeaders;
        }
        if (!Utils::isUnset($headers->xAcsDingtalkAccessToken)) {
            @$realHeaders['x-acs-dingtalk-access-token'] = Utils::toJSONString($headers->xAcsDingtalkAccessToken);
        }
        $req = new OpenApiRequest([
            'headers' => $realHeaders,
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);

        return UpdateReceiptResponse::fromMap($this->doROARequest('UpdateReceipt', 'bizfinance_1.0', 'HTTP', 'PUT', 'AK', '/v1.0/bizfinance/receipts', 'json', $req, $runtime));
    }
}
