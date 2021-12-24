<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dingtalk\Vcrm_1_0\Models;

use AlibabaCloud\Tea\Model;

class QueryCrmGroupChatsRequest extends Model
{
    /**
     * @description 关系类型
     *
     * @var string
     */
    public $relationType;

    /**
     * @description 第一页不传，下一页传入上一页返回的nextToken
     *
     * @var string
     */
    public $nextToken;

    /**
     * @description 每页返回的结果集个数
     *
     * @var int
     */
    public $maxResults;

    /**
     * @description 查询DSL
     *
     * @var string
     */
    public $queryDsl;
    protected $_name = [
        'relationType' => 'relationType',
        'nextToken'    => 'nextToken',
        'maxResults'   => 'maxResults',
        'queryDsl'     => 'queryDsl',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->relationType) {
            $res['relationType'] = $this->relationType;
        }
        if (null !== $this->nextToken) {
            $res['nextToken'] = $this->nextToken;
        }
        if (null !== $this->maxResults) {
            $res['maxResults'] = $this->maxResults;
        }
        if (null !== $this->queryDsl) {
            $res['queryDsl'] = $this->queryDsl;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return QueryCrmGroupChatsRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['relationType'])) {
            $model->relationType = $map['relationType'];
        }
        if (isset($map['nextToken'])) {
            $model->nextToken = $map['nextToken'];
        }
        if (isset($map['maxResults'])) {
            $model->maxResults = $map['maxResults'];
        }
        if (isset($map['queryDsl'])) {
            $model->queryDsl = $map['queryDsl'];
        }

        return $model;
    }
}
