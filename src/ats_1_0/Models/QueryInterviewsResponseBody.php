<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dingtalk\Vats_1_0\Models;

use AlibabaCloud\SDK\Dingtalk\Vats_1_0\Models\QueryInterviewsResponseBody\list_;
use AlibabaCloud\Tea\Model;

class QueryInterviewsResponseBody extends Model
{
    /**
     * @description 是否有更多数据
     *
     * @var bool
     */
    public $hasMore;

    /**
     * @description 数据列表
     *
     * @var list_[]
     */
    public $list;

    /**
     * @description 下次查询的分页游标
     *
     * @var string
     */
    public $nextToken;

    /**
     * @description 总数量
     *
     * @var int
     */
    public $totalCount;
    protected $_name = [
        'hasMore'    => 'hasMore',
        'list'       => 'list',
        'nextToken'  => 'nextToken',
        'totalCount' => 'totalCount',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->hasMore) {
            $res['hasMore'] = $this->hasMore;
        }
        if (null !== $this->list) {
            $res['list'] = [];
            if (null !== $this->list && \is_array($this->list)) {
                $n = 0;
                foreach ($this->list as $item) {
                    $res['list'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->nextToken) {
            $res['nextToken'] = $this->nextToken;
        }
        if (null !== $this->totalCount) {
            $res['totalCount'] = $this->totalCount;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return QueryInterviewsResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['hasMore'])) {
            $model->hasMore = $map['hasMore'];
        }
        if (isset($map['list'])) {
            if (!empty($map['list'])) {
                $model->list = [];
                $n           = 0;
                foreach ($map['list'] as $item) {
                    $model->list[$n++] = null !== $item ? list_::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['nextToken'])) {
            $model->nextToken = $map['nextToken'];
        }
        if (isset($map['totalCount'])) {
            $model->totalCount = $map['totalCount'];
        }

        return $model;
    }
}
