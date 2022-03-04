<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dingtalk\Vedu_1_0\Models;

use AlibabaCloud\SDK\Dingtalk\Vedu_1_0\Models\CreateOrderRequest\detailList;
use AlibabaCloud\Tea\Model;

class CreateOrderRequest extends Model
{
    /**
     * @description 设备号
     *
     * @var string
     */
    public $sn;

    /**
     * @description 员工id
     *
     * @var string
     */
    public $userId;

    /**
     * @description 刷脸token
     *
     * @var string
     */
    public $ftoken;

    /**
     * @description 交易加签
     *
     * @var string
     */
    public $terminalParams;

    /**
     * @description 应付价格，单位分
     *
     * @var int
     */
    public $totalAmount;

    /**
     * @description 实付金额，单位分（优惠计算后）
     *
     * @var int
     */
    public $actualAmount;

    /**
     * @description 订单明细信息
     *
     * @var detailList[]
     */
    public $detailList;

    /**
     * @description utc时间戳
     *
     * @var int
     */
    public $timestamp;

    /**
     * @description 签名
     *
     * @var string
     */
    public $signature;

    /**
     * @var int
     */
    public $dingIsvOrgId;

    /**
     * @var int
     */
    public $dingOrgId;

    /**
     * @var int
     */
    public $dingOauthAppId;

    /**
     * @var string
     */
    public $dingSuiteKey;

    /**
     * @var int
     */
    public $dingTokenGrantType;

    /**
     * @description 人脸id
     *
     * @var string
     */
    public $faceId;

    /**
     * @description 版本号
     *
     * @var string
     */
    public $version;
    protected $_name = [
        'sn'                 => 'sn',
        'userId'             => 'userId',
        'ftoken'             => 'ftoken',
        'terminalParams'     => 'terminalParams',
        'totalAmount'        => 'totalAmount',
        'actualAmount'       => 'actualAmount',
        'detailList'         => 'detailList',
        'timestamp'          => 'timestamp',
        'signature'          => 'signature',
        'dingIsvOrgId'       => 'dingIsvOrgId',
        'dingOrgId'          => 'dingOrgId',
        'dingOauthAppId'     => 'dingOauthAppId',
        'dingSuiteKey'       => 'dingSuiteKey',
        'dingTokenGrantType' => 'dingTokenGrantType',
        'faceId'             => 'faceId',
        'version'            => 'version',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->sn) {
            $res['sn'] = $this->sn;
        }
        if (null !== $this->userId) {
            $res['userId'] = $this->userId;
        }
        if (null !== $this->ftoken) {
            $res['ftoken'] = $this->ftoken;
        }
        if (null !== $this->terminalParams) {
            $res['terminalParams'] = $this->terminalParams;
        }
        if (null !== $this->totalAmount) {
            $res['totalAmount'] = $this->totalAmount;
        }
        if (null !== $this->actualAmount) {
            $res['actualAmount'] = $this->actualAmount;
        }
        if (null !== $this->detailList) {
            $res['detailList'] = [];
            if (null !== $this->detailList && \is_array($this->detailList)) {
                $n = 0;
                foreach ($this->detailList as $item) {
                    $res['detailList'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->timestamp) {
            $res['timestamp'] = $this->timestamp;
        }
        if (null !== $this->signature) {
            $res['signature'] = $this->signature;
        }
        if (null !== $this->dingIsvOrgId) {
            $res['dingIsvOrgId'] = $this->dingIsvOrgId;
        }
        if (null !== $this->dingOrgId) {
            $res['dingOrgId'] = $this->dingOrgId;
        }
        if (null !== $this->dingOauthAppId) {
            $res['dingOauthAppId'] = $this->dingOauthAppId;
        }
        if (null !== $this->dingSuiteKey) {
            $res['dingSuiteKey'] = $this->dingSuiteKey;
        }
        if (null !== $this->dingTokenGrantType) {
            $res['dingTokenGrantType'] = $this->dingTokenGrantType;
        }
        if (null !== $this->faceId) {
            $res['faceId'] = $this->faceId;
        }
        if (null !== $this->version) {
            $res['version'] = $this->version;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateOrderRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['sn'])) {
            $model->sn = $map['sn'];
        }
        if (isset($map['userId'])) {
            $model->userId = $map['userId'];
        }
        if (isset($map['ftoken'])) {
            $model->ftoken = $map['ftoken'];
        }
        if (isset($map['terminalParams'])) {
            $model->terminalParams = $map['terminalParams'];
        }
        if (isset($map['totalAmount'])) {
            $model->totalAmount = $map['totalAmount'];
        }
        if (isset($map['actualAmount'])) {
            $model->actualAmount = $map['actualAmount'];
        }
        if (isset($map['detailList'])) {
            if (!empty($map['detailList'])) {
                $model->detailList = [];
                $n                 = 0;
                foreach ($map['detailList'] as $item) {
                    $model->detailList[$n++] = null !== $item ? detailList::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['timestamp'])) {
            $model->timestamp = $map['timestamp'];
        }
        if (isset($map['signature'])) {
            $model->signature = $map['signature'];
        }
        if (isset($map['dingIsvOrgId'])) {
            $model->dingIsvOrgId = $map['dingIsvOrgId'];
        }
        if (isset($map['dingOrgId'])) {
            $model->dingOrgId = $map['dingOrgId'];
        }
        if (isset($map['dingOauthAppId'])) {
            $model->dingOauthAppId = $map['dingOauthAppId'];
        }
        if (isset($map['dingSuiteKey'])) {
            $model->dingSuiteKey = $map['dingSuiteKey'];
        }
        if (isset($map['dingTokenGrantType'])) {
            $model->dingTokenGrantType = $map['dingTokenGrantType'];
        }
        if (isset($map['faceId'])) {
            $model->faceId = $map['faceId'];
        }
        if (isset($map['version'])) {
            $model->version = $map['version'];
        }

        return $model;
    }
}
