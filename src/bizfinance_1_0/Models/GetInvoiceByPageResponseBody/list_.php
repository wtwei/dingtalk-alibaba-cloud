<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dingtalk\Vbizfinance_1_0\Models\GetInvoiceByPageResponseBody;

use AlibabaCloud\SDK\Dingtalk\Vbizfinance_1_0\Models\GetInvoiceByPageResponseBody\list_\generalInvoiceDetailVOList;
use AlibabaCloud\SDK\Dingtalk\Vbizfinance_1_0\Models\GetInvoiceByPageResponseBody\list_\secondHandCarInvoiceDetail;
use AlibabaCloud\SDK\Dingtalk\Vbizfinance_1_0\Models\GetInvoiceByPageResponseBody\list_\usedVehicleSaleDetailVO;
use AlibabaCloud\SDK\Dingtalk\Vbizfinance_1_0\Models\GetInvoiceByPageResponseBody\list_\vehicleSaleDetailVO;
use AlibabaCloud\Tea\Model;

class list_ extends Model
{
    /**
     * @description 账期时间
     *
     * @var string
     */
    public $accountPeriod;

    /**
     * @description 不含税金额
     *
     * @var string
     */
    public $amount;

    /**
     * @description 含税金额
     *
     * @var string
     */
    public $amountWithTax;

    /**
     * @description 校验码
     *
     * @var string
     */
    public $checkCode;

    /**
     * @description 查验时间
     *
     * @var string
     */
    public $checkTime;

    /**
     * @description 开票日期
     *
     * @var string
     */
    public $drewDate;

    /**
     * @description 电票版式文件下载地址
     *
     * @var string
     */
    public $electronicUrl;

    /**
     * @description 财务类型，INPUT-VAT(进项),OUTPUT_VAT(销项)
     *
     * @var string
     */
    public $financeType;

    /**
     * @description 资金类型 ，RED（红票），（BLUE）蓝票
     *
     * @var string
     */
    public $fundType;

    /**
     * @description 常规发票明细
     *
     * @var generalInvoiceDetailVOList[]
     */
    public $generalInvoiceDetailVOList;

    /**
     * @description 发票代码
     *
     * @var string
     */
    public $invoiceCode;

    /**
     * @description 发票号码
     *
     * @var string
     */
    public $invoiceNo;

    /**
     * @description 发票类型
     *
     * @var string
     */
    public $invoiceType;

    /**
     * @description 机器码
     *
     * @var string
     */
    public $machineCode;

    /**
     * @description 成品油标识
     *
     * @var string
     */
    public $oilFlag;

    /**
     * @description 收款人
     *
     * @var string
     */
    public $payee;

    /**
     * @description 审批单实例
     *
     * @var string
     */
    public $processInstCode;

    /**
     * @description 审批单类型
     *
     * @var string
     */
    public $processInstType;

    /**
     * @description 购方地址
     *
     * @var string
     */
    public $purchaserAddress;

    /**
     * @description 购方银行
     *
     * @var string
     */
    public $purchaserBankNameAccount;

    /**
     * @description 购方名称
     *
     * @var string
     */
    public $purchaserName;

    /**
     * @description 购方税号
     *
     * @var string
     */
    public $purchaserTaxNo;

    /**
     * @description 购方电话
     *
     * @var string
     */
    public $purchaserTel;

    /**
     * @description 备注
     *
     * @var string
     */
    public $remark;

    /**
     * @var secondHandCarInvoiceDetail[]
     */
    public $secondHandCarInvoiceDetail;

    /**
     * @description 销方地址
     *
     * @var string
     */
    public $sellerAddress;

    /**
     * @description 销方银行
     *
     * @var string
     */
    public $sellerBankNameAccount;

    /**
     * @description 销方名称
     *
     * @var string
     */
    public $sellerName;

    /**
     * @description 销方税号
     *
     * @var string
     */
    public $sellerTaxNo;

    /**
     * @description 销方电话
     *
     * @var string
     */
    public $sellerTel;

    /**
     * @description 发票状态
     *
     * @var string
     */
    public $status;

    /**
     * @description 代开发票标识 1-自开，2-代开
     *
     * @var string
     */
    public $supplySign;

    /**
     * @description 税额
     *
     * @var string
     */
    public $taxAmount;

    /**
     * @var usedVehicleSaleDetailVO
     */
    public $usedVehicleSaleDetailVO;

    /**
     * @var vehicleSaleDetailVO
     */
    public $vehicleSaleDetailVO;

    /**
     * @description 发票查验状态
     *
     * @var string
     */
    public $verifyStatus;

    /**
     * @description 凭证code
     *
     * @var string
     */
    public $voucherCode;

    /**
     * @description 生成凭证状态
     *
     * @var string
     */
    public $voucherStatus;
    protected $_name = [
        'accountPeriod'              => 'accountPeriod',
        'amount'                     => 'amount',
        'amountWithTax'              => 'amountWithTax',
        'checkCode'                  => 'checkCode',
        'checkTime'                  => 'checkTime',
        'drewDate'                   => 'drewDate',
        'electronicUrl'              => 'electronicUrl',
        'financeType'                => 'financeType',
        'fundType'                   => 'fundType',
        'generalInvoiceDetailVOList' => 'generalInvoiceDetailVOList',
        'invoiceCode'                => 'invoiceCode',
        'invoiceNo'                  => 'invoiceNo',
        'invoiceType'                => 'invoiceType',
        'machineCode'                => 'machineCode',
        'oilFlag'                    => 'oilFlag',
        'payee'                      => 'payee',
        'processInstCode'            => 'processInstCode',
        'processInstType'            => 'processInstType',
        'purchaserAddress'           => 'purchaserAddress',
        'purchaserBankNameAccount'   => 'purchaserBankNameAccount',
        'purchaserName'              => 'purchaserName',
        'purchaserTaxNo'             => 'purchaserTaxNo',
        'purchaserTel'               => 'purchaserTel',
        'remark'                     => 'remark',
        'secondHandCarInvoiceDetail' => 'secondHandCarInvoiceDetail',
        'sellerAddress'              => 'sellerAddress',
        'sellerBankNameAccount'      => 'sellerBankNameAccount',
        'sellerName'                 => 'sellerName',
        'sellerTaxNo'                => 'sellerTaxNo',
        'sellerTel'                  => 'sellerTel',
        'status'                     => 'status',
        'supplySign'                 => 'supplySign',
        'taxAmount'                  => 'taxAmount',
        'usedVehicleSaleDetailVO'    => 'usedVehicleSaleDetailVO',
        'vehicleSaleDetailVO'        => 'vehicleSaleDetailVO',
        'verifyStatus'               => 'verifyStatus',
        'voucherCode'                => 'voucherCode',
        'voucherStatus'              => 'voucherStatus',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->accountPeriod) {
            $res['accountPeriod'] = $this->accountPeriod;
        }
        if (null !== $this->amount) {
            $res['amount'] = $this->amount;
        }
        if (null !== $this->amountWithTax) {
            $res['amountWithTax'] = $this->amountWithTax;
        }
        if (null !== $this->checkCode) {
            $res['checkCode'] = $this->checkCode;
        }
        if (null !== $this->checkTime) {
            $res['checkTime'] = $this->checkTime;
        }
        if (null !== $this->drewDate) {
            $res['drewDate'] = $this->drewDate;
        }
        if (null !== $this->electronicUrl) {
            $res['electronicUrl'] = $this->electronicUrl;
        }
        if (null !== $this->financeType) {
            $res['financeType'] = $this->financeType;
        }
        if (null !== $this->fundType) {
            $res['fundType'] = $this->fundType;
        }
        if (null !== $this->generalInvoiceDetailVOList) {
            $res['generalInvoiceDetailVOList'] = [];
            if (null !== $this->generalInvoiceDetailVOList && \is_array($this->generalInvoiceDetailVOList)) {
                $n = 0;
                foreach ($this->generalInvoiceDetailVOList as $item) {
                    $res['generalInvoiceDetailVOList'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->invoiceCode) {
            $res['invoiceCode'] = $this->invoiceCode;
        }
        if (null !== $this->invoiceNo) {
            $res['invoiceNo'] = $this->invoiceNo;
        }
        if (null !== $this->invoiceType) {
            $res['invoiceType'] = $this->invoiceType;
        }
        if (null !== $this->machineCode) {
            $res['machineCode'] = $this->machineCode;
        }
        if (null !== $this->oilFlag) {
            $res['oilFlag'] = $this->oilFlag;
        }
        if (null !== $this->payee) {
            $res['payee'] = $this->payee;
        }
        if (null !== $this->processInstCode) {
            $res['processInstCode'] = $this->processInstCode;
        }
        if (null !== $this->processInstType) {
            $res['processInstType'] = $this->processInstType;
        }
        if (null !== $this->purchaserAddress) {
            $res['purchaserAddress'] = $this->purchaserAddress;
        }
        if (null !== $this->purchaserBankNameAccount) {
            $res['purchaserBankNameAccount'] = $this->purchaserBankNameAccount;
        }
        if (null !== $this->purchaserName) {
            $res['purchaserName'] = $this->purchaserName;
        }
        if (null !== $this->purchaserTaxNo) {
            $res['purchaserTaxNo'] = $this->purchaserTaxNo;
        }
        if (null !== $this->purchaserTel) {
            $res['purchaserTel'] = $this->purchaserTel;
        }
        if (null !== $this->remark) {
            $res['remark'] = $this->remark;
        }
        if (null !== $this->secondHandCarInvoiceDetail) {
            $res['secondHandCarInvoiceDetail'] = [];
            if (null !== $this->secondHandCarInvoiceDetail && \is_array($this->secondHandCarInvoiceDetail)) {
                $n = 0;
                foreach ($this->secondHandCarInvoiceDetail as $item) {
                    $res['secondHandCarInvoiceDetail'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->sellerAddress) {
            $res['sellerAddress'] = $this->sellerAddress;
        }
        if (null !== $this->sellerBankNameAccount) {
            $res['sellerBankNameAccount'] = $this->sellerBankNameAccount;
        }
        if (null !== $this->sellerName) {
            $res['sellerName'] = $this->sellerName;
        }
        if (null !== $this->sellerTaxNo) {
            $res['sellerTaxNo'] = $this->sellerTaxNo;
        }
        if (null !== $this->sellerTel) {
            $res['sellerTel'] = $this->sellerTel;
        }
        if (null !== $this->status) {
            $res['status'] = $this->status;
        }
        if (null !== $this->supplySign) {
            $res['supplySign'] = $this->supplySign;
        }
        if (null !== $this->taxAmount) {
            $res['taxAmount'] = $this->taxAmount;
        }
        if (null !== $this->usedVehicleSaleDetailVO) {
            $res['usedVehicleSaleDetailVO'] = null !== $this->usedVehicleSaleDetailVO ? $this->usedVehicleSaleDetailVO->toMap() : null;
        }
        if (null !== $this->vehicleSaleDetailVO) {
            $res['vehicleSaleDetailVO'] = null !== $this->vehicleSaleDetailVO ? $this->vehicleSaleDetailVO->toMap() : null;
        }
        if (null !== $this->verifyStatus) {
            $res['verifyStatus'] = $this->verifyStatus;
        }
        if (null !== $this->voucherCode) {
            $res['voucherCode'] = $this->voucherCode;
        }
        if (null !== $this->voucherStatus) {
            $res['voucherStatus'] = $this->voucherStatus;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return list_
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['accountPeriod'])) {
            $model->accountPeriod = $map['accountPeriod'];
        }
        if (isset($map['amount'])) {
            $model->amount = $map['amount'];
        }
        if (isset($map['amountWithTax'])) {
            $model->amountWithTax = $map['amountWithTax'];
        }
        if (isset($map['checkCode'])) {
            $model->checkCode = $map['checkCode'];
        }
        if (isset($map['checkTime'])) {
            $model->checkTime = $map['checkTime'];
        }
        if (isset($map['drewDate'])) {
            $model->drewDate = $map['drewDate'];
        }
        if (isset($map['electronicUrl'])) {
            $model->electronicUrl = $map['electronicUrl'];
        }
        if (isset($map['financeType'])) {
            $model->financeType = $map['financeType'];
        }
        if (isset($map['fundType'])) {
            $model->fundType = $map['fundType'];
        }
        if (isset($map['generalInvoiceDetailVOList'])) {
            if (!empty($map['generalInvoiceDetailVOList'])) {
                $model->generalInvoiceDetailVOList = [];
                $n                                 = 0;
                foreach ($map['generalInvoiceDetailVOList'] as $item) {
                    $model->generalInvoiceDetailVOList[$n++] = null !== $item ? generalInvoiceDetailVOList::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['invoiceCode'])) {
            $model->invoiceCode = $map['invoiceCode'];
        }
        if (isset($map['invoiceNo'])) {
            $model->invoiceNo = $map['invoiceNo'];
        }
        if (isset($map['invoiceType'])) {
            $model->invoiceType = $map['invoiceType'];
        }
        if (isset($map['machineCode'])) {
            $model->machineCode = $map['machineCode'];
        }
        if (isset($map['oilFlag'])) {
            $model->oilFlag = $map['oilFlag'];
        }
        if (isset($map['payee'])) {
            $model->payee = $map['payee'];
        }
        if (isset($map['processInstCode'])) {
            $model->processInstCode = $map['processInstCode'];
        }
        if (isset($map['processInstType'])) {
            $model->processInstType = $map['processInstType'];
        }
        if (isset($map['purchaserAddress'])) {
            $model->purchaserAddress = $map['purchaserAddress'];
        }
        if (isset($map['purchaserBankNameAccount'])) {
            $model->purchaserBankNameAccount = $map['purchaserBankNameAccount'];
        }
        if (isset($map['purchaserName'])) {
            $model->purchaserName = $map['purchaserName'];
        }
        if (isset($map['purchaserTaxNo'])) {
            $model->purchaserTaxNo = $map['purchaserTaxNo'];
        }
        if (isset($map['purchaserTel'])) {
            $model->purchaserTel = $map['purchaserTel'];
        }
        if (isset($map['remark'])) {
            $model->remark = $map['remark'];
        }
        if (isset($map['secondHandCarInvoiceDetail'])) {
            if (!empty($map['secondHandCarInvoiceDetail'])) {
                $model->secondHandCarInvoiceDetail = [];
                $n                                 = 0;
                foreach ($map['secondHandCarInvoiceDetail'] as $item) {
                    $model->secondHandCarInvoiceDetail[$n++] = null !== $item ? secondHandCarInvoiceDetail::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['sellerAddress'])) {
            $model->sellerAddress = $map['sellerAddress'];
        }
        if (isset($map['sellerBankNameAccount'])) {
            $model->sellerBankNameAccount = $map['sellerBankNameAccount'];
        }
        if (isset($map['sellerName'])) {
            $model->sellerName = $map['sellerName'];
        }
        if (isset($map['sellerTaxNo'])) {
            $model->sellerTaxNo = $map['sellerTaxNo'];
        }
        if (isset($map['sellerTel'])) {
            $model->sellerTel = $map['sellerTel'];
        }
        if (isset($map['status'])) {
            $model->status = $map['status'];
        }
        if (isset($map['supplySign'])) {
            $model->supplySign = $map['supplySign'];
        }
        if (isset($map['taxAmount'])) {
            $model->taxAmount = $map['taxAmount'];
        }
        if (isset($map['usedVehicleSaleDetailVO'])) {
            $model->usedVehicleSaleDetailVO = usedVehicleSaleDetailVO::fromMap($map['usedVehicleSaleDetailVO']);
        }
        if (isset($map['vehicleSaleDetailVO'])) {
            $model->vehicleSaleDetailVO = vehicleSaleDetailVO::fromMap($map['vehicleSaleDetailVO']);
        }
        if (isset($map['verifyStatus'])) {
            $model->verifyStatus = $map['verifyStatus'];
        }
        if (isset($map['voucherCode'])) {
            $model->voucherCode = $map['voucherCode'];
        }
        if (isset($map['voucherStatus'])) {
            $model->voucherStatus = $map['voucherStatus'];
        }

        return $model;
    }
}
