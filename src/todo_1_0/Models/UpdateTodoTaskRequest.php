<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dingtalk\Vtodo_1_0\Models;

use AlibabaCloud\SDK\Dingtalk\Vtodo_1_0\Models\UpdateTodoTaskRequest\contentFieldList;
use AlibabaCloud\Tea\Model;

class UpdateTodoTaskRequest extends Model
{
    /**
     * @description 待办标题
     *
     * @var string
     */
    public $subject;

    /**
     * @description 待办描述备注
     *
     * @var string
     */
    public $description;

    /**
     * @description 截止时间
     *
     * @var int
     */
    public $dueTime;

    /**
     * @description 完成状态
     *
     * @var bool
     */
    public $done;

    /**
     * @description 执行者列表，需传用户的unionId
     *
     * @var string[]
     */
    public $executorIds;

    /**
     * @description 参与者列表，需传用户的unionId
     *
     * @var string[]
     */
    public $participantIds;

    /**
     * @description 待办卡片类型id
     *
     * @var string
     */
    public $cardTypeId;

    /**
     * @description 内容区表单字段配置
     *
     * @var contentFieldList[]
     */
    public $contentFieldList;

    /**
     * @description 优先级, 较低:10, 普通:20, 紧急:30, 非常紧急:40
     *
     * @var int
     */
    public $priority;

    /**
     * @description 业务来源展示名称
     *
     * @var string
     */
    public $sourceTitle;

    /**
     * @description 当前操作者id，需传用户的unionId
     *
     * @var string
     */
    public $operatorId;
    protected $_name = [
        'subject'          => 'subject',
        'description'      => 'description',
        'dueTime'          => 'dueTime',
        'done'             => 'done',
        'executorIds'      => 'executorIds',
        'participantIds'   => 'participantIds',
        'cardTypeId'       => 'cardTypeId',
        'contentFieldList' => 'contentFieldList',
        'priority'         => 'priority',
        'sourceTitle'      => 'sourceTitle',
        'operatorId'       => 'operatorId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->subject) {
            $res['subject'] = $this->subject;
        }
        if (null !== $this->description) {
            $res['description'] = $this->description;
        }
        if (null !== $this->dueTime) {
            $res['dueTime'] = $this->dueTime;
        }
        if (null !== $this->done) {
            $res['done'] = $this->done;
        }
        if (null !== $this->executorIds) {
            $res['executorIds'] = $this->executorIds;
        }
        if (null !== $this->participantIds) {
            $res['participantIds'] = $this->participantIds;
        }
        if (null !== $this->cardTypeId) {
            $res['cardTypeId'] = $this->cardTypeId;
        }
        if (null !== $this->contentFieldList) {
            $res['contentFieldList'] = [];
            if (null !== $this->contentFieldList && \is_array($this->contentFieldList)) {
                $n = 0;
                foreach ($this->contentFieldList as $item) {
                    $res['contentFieldList'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->priority) {
            $res['priority'] = $this->priority;
        }
        if (null !== $this->sourceTitle) {
            $res['sourceTitle'] = $this->sourceTitle;
        }
        if (null !== $this->operatorId) {
            $res['operatorId'] = $this->operatorId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return UpdateTodoTaskRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['subject'])) {
            $model->subject = $map['subject'];
        }
        if (isset($map['description'])) {
            $model->description = $map['description'];
        }
        if (isset($map['dueTime'])) {
            $model->dueTime = $map['dueTime'];
        }
        if (isset($map['done'])) {
            $model->done = $map['done'];
        }
        if (isset($map['executorIds'])) {
            if (!empty($map['executorIds'])) {
                $model->executorIds = $map['executorIds'];
            }
        }
        if (isset($map['participantIds'])) {
            if (!empty($map['participantIds'])) {
                $model->participantIds = $map['participantIds'];
            }
        }
        if (isset($map['cardTypeId'])) {
            $model->cardTypeId = $map['cardTypeId'];
        }
        if (isset($map['contentFieldList'])) {
            if (!empty($map['contentFieldList'])) {
                $model->contentFieldList = [];
                $n                       = 0;
                foreach ($map['contentFieldList'] as $item) {
                    $model->contentFieldList[$n++] = null !== $item ? contentFieldList::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['priority'])) {
            $model->priority = $map['priority'];
        }
        if (isset($map['sourceTitle'])) {
            $model->sourceTitle = $map['sourceTitle'];
        }
        if (isset($map['operatorId'])) {
            $model->operatorId = $map['operatorId'];
        }

        return $model;
    }
}
