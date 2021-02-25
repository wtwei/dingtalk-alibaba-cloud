<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dingtalk\Vim_1_0\Models;

use AlibabaCloud\SDK\Dingtalk\Vim_1_0\Models\SendInteractiveCardRequest\cardData;
use AlibabaCloud\Tea\Model;

class SendInteractiveCardRequest extends Model
{
    /**
     * @var int
     */
    public $dingIsvOrgId;

    /**
     * @description 卡片模板ID
     *
     * @var string
     */
    public $cardTemplateId;

    /**
     * @description 接收卡片的群的openConversationId
     *
     * @var string
     */
    public $openConversationId;

    /**
     * @description 接收人userId列表
     *
     * @var string[]
     */
    public $receiverUserIdList;

    /**
     * @var int
     */
    public $dingTokenGrantType;

    /**
     * @description 唯一标示卡片的外部编码
     *
     * @var string
     */
    public $outTrackId;

    /**
     * @var string
     */
    public $dingSuiteKey;

    /**
     * @description 用于发送卡片的机器人编码，与场景群模板中的机器人编码保持一致
     *
     * @var string
     */
    public $robotCode;

    /**
     * @var int
     */
    public $dingOrgId;

    /**
     * @description 发送的会话类型：单聊-0, 群聊-1（单聊时：openConversationId不用填写；receiverUserIdList填写有且一个员工号）
     *
     * @var int
     */
    public $conversationType;

    /**
     * @description 可控制卡片回调时的路由Key，用于指定特定的callbackUrl【可空：不填写默认用企业的回调地址】
     *
     * @var string
     */
    public $callbackRouteKey;

    /**
     * @var cardData
     */
    public $cardData;

    /**
     * @description 指定用户可见的按钮列表（key：用户userId；value：用户数据）
     *
     * @var PrivateDataValue[]
     */
    public $privateData;
    protected $_name = [
        'dingIsvOrgId'       => 'dingIsvOrgId',
        'cardTemplateId'     => 'cardTemplateId',
        'openConversationId' => 'openConversationId',
        'receiverUserIdList' => 'receiverUserIdList',
        'dingTokenGrantType' => 'dingTokenGrantType',
        'outTrackId'         => 'outTrackId',
        'dingSuiteKey'       => 'dingSuiteKey',
        'robotCode'          => 'robotCode',
        'dingOrgId'          => 'dingOrgId',
        'conversationType'   => 'conversationType',
        'callbackRouteKey'   => 'callbackRouteKey',
        'cardData'           => 'cardData',
        'privateData'        => 'privateData',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->dingIsvOrgId) {
            $res['dingIsvOrgId'] = $this->dingIsvOrgId;
        }
        if (null !== $this->cardTemplateId) {
            $res['cardTemplateId'] = $this->cardTemplateId;
        }
        if (null !== $this->openConversationId) {
            $res['openConversationId'] = $this->openConversationId;
        }
        if (null !== $this->receiverUserIdList) {
            $res['receiverUserIdList'] = $this->receiverUserIdList;
        }
        if (null !== $this->dingTokenGrantType) {
            $res['dingTokenGrantType'] = $this->dingTokenGrantType;
        }
        if (null !== $this->outTrackId) {
            $res['outTrackId'] = $this->outTrackId;
        }
        if (null !== $this->dingSuiteKey) {
            $res['dingSuiteKey'] = $this->dingSuiteKey;
        }
        if (null !== $this->robotCode) {
            $res['robotCode'] = $this->robotCode;
        }
        if (null !== $this->dingOrgId) {
            $res['dingOrgId'] = $this->dingOrgId;
        }
        if (null !== $this->conversationType) {
            $res['conversationType'] = $this->conversationType;
        }
        if (null !== $this->callbackRouteKey) {
            $res['callbackRouteKey'] = $this->callbackRouteKey;
        }
        if (null !== $this->cardData) {
            $res['cardData'] = null !== $this->cardData ? $this->cardData->toMap() : null;
        }
        if (null !== $this->privateData) {
            $res['privateData'] = [];
            if (null !== $this->privateData && \is_array($this->privateData)) {
                foreach ($this->privateData as $key => $val) {
                    $res['privateData'][$key] = null !== $val ? $val->toMap() : $val;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return SendInteractiveCardRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['dingIsvOrgId'])) {
            $model->dingIsvOrgId = $map['dingIsvOrgId'];
        }
        if (isset($map['cardTemplateId'])) {
            $model->cardTemplateId = $map['cardTemplateId'];
        }
        if (isset($map['openConversationId'])) {
            $model->openConversationId = $map['openConversationId'];
        }
        if (isset($map['receiverUserIdList'])) {
            if (!empty($map['receiverUserIdList'])) {
                $model->receiverUserIdList = $map['receiverUserIdList'];
            }
        }
        if (isset($map['dingTokenGrantType'])) {
            $model->dingTokenGrantType = $map['dingTokenGrantType'];
        }
        if (isset($map['outTrackId'])) {
            $model->outTrackId = $map['outTrackId'];
        }
        if (isset($map['dingSuiteKey'])) {
            $model->dingSuiteKey = $map['dingSuiteKey'];
        }
        if (isset($map['robotCode'])) {
            $model->robotCode = $map['robotCode'];
        }
        if (isset($map['dingOrgId'])) {
            $model->dingOrgId = $map['dingOrgId'];
        }
        if (isset($map['conversationType'])) {
            $model->conversationType = $map['conversationType'];
        }
        if (isset($map['callbackRouteKey'])) {
            $model->callbackRouteKey = $map['callbackRouteKey'];
        }
        if (isset($map['cardData'])) {
            $model->cardData = cardData::fromMap($map['cardData']);
        }
        if (isset($map['privateData'])) {
            $model->privateData = $map['privateData'];
        }

        return $model;
    }
}
