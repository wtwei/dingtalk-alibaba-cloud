<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dingtalk\Vdrive_1_0\Models;

use AlibabaCloud\Tea\Model;

class ListFilesRequest extends Model
{
    /**
     * @description 用户id
     *
     * @var string
     */
    public $unionId;

    /**
     * @description 父目录id
     *
     * @var string
     */
    public $parentId;

    /**
     * @description 分页查询锚点
     *
     * @var string
     */
    public $nextToken;

    /**
     * @description 分页长度
     *
     * @var int
     */
    public $maxResults;

    /**
     * @description 排序类型
     *
     * @var string
     */
    public $orderType;
    protected $_name = [
        'unionId'    => 'unionId',
        'parentId'   => 'parentId',
        'nextToken'  => 'nextToken',
        'maxResults' => 'maxResults',
        'orderType'  => 'orderType',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->unionId) {
            $res['unionId'] = $this->unionId;
        }
        if (null !== $this->parentId) {
            $res['parentId'] = $this->parentId;
        }
        if (null !== $this->nextToken) {
            $res['nextToken'] = $this->nextToken;
        }
        if (null !== $this->maxResults) {
            $res['maxResults'] = $this->maxResults;
        }
        if (null !== $this->orderType) {
            $res['orderType'] = $this->orderType;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListFilesRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['unionId'])) {
            $model->unionId = $map['unionId'];
        }
        if (isset($map['parentId'])) {
            $model->parentId = $map['parentId'];
        }
        if (isset($map['nextToken'])) {
            $model->nextToken = $map['nextToken'];
        }
        if (isset($map['maxResults'])) {
            $model->maxResults = $map['maxResults'];
        }
        if (isset($map['orderType'])) {
            $model->orderType = $map['orderType'];
        }

        return $model;
    }
}
