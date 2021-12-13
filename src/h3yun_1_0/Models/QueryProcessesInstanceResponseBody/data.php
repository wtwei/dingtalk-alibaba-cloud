<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dingtalk\Vh3yun_1_0\Models\QueryProcessesInstanceResponseBody;

use AlibabaCloud\SDK\Dingtalk\Vh3yun_1_0\Models\QueryProcessesInstanceResponseBody\data\originator;
use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @description 流程实例ID
     *
     * @var string
     */
    public $processInstanceId;

    /**
     * @description 钉钉流程Id
     *
     * @var string
     */
    public $dingTalkProcessId;

    /**
     * @description 流程名称
     *
     * @var string
     */
    public $processDisplayName;

    /**
     * @description 工作流模板的版本
     *
     * @var int
     */
    public $processVersion;

    /**
     * @description 流程所属的表单编码
     *
     * @var string
     */
    public $schemaCode;

    /**
     * @description 流程关联的业务对象id
     *
     * @var string
     */
    public $bizObjectId;

    /**
     * @description 流程所属的应用编码
     *
     * @var string
     */
    public $appCode;

    /**
     * @description 状态。Initiated=初始化完成，Starting=正在启动，Running=正在运行，Finishing=正在结束，Finished=已完成，Canceled=已取
     *
     * @var string
     */
    public $state;

    /**
     * @description 流程发起人信息
     *
     * @var originator
     */
    public $originator;

    /**
     * @description 创建时间
     *
     * @var string
     */
    public $createdTimeGMT;

    /**
     * @description 开始时间
     *
     * @var string
     */
    public $startTimeGMT;

    /**
     * @description 完成时间
     *
     * @var string
     */
    public $finishTimeGMT;
    protected $_name = [
        'processInstanceId'  => 'processInstanceId',
        'dingTalkProcessId'  => 'dingTalkProcessId',
        'processDisplayName' => 'processDisplayName',
        'processVersion'     => 'processVersion',
        'schemaCode'         => 'schemaCode',
        'bizObjectId'        => 'bizObjectId',
        'appCode'            => 'appCode',
        'state'              => 'state',
        'originator'         => 'originator',
        'createdTimeGMT'     => 'createdTimeGMT',
        'startTimeGMT'       => 'startTimeGMT',
        'finishTimeGMT'      => 'finishTimeGMT',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->processInstanceId) {
            $res['processInstanceId'] = $this->processInstanceId;
        }
        if (null !== $this->dingTalkProcessId) {
            $res['dingTalkProcessId'] = $this->dingTalkProcessId;
        }
        if (null !== $this->processDisplayName) {
            $res['processDisplayName'] = $this->processDisplayName;
        }
        if (null !== $this->processVersion) {
            $res['processVersion'] = $this->processVersion;
        }
        if (null !== $this->schemaCode) {
            $res['schemaCode'] = $this->schemaCode;
        }
        if (null !== $this->bizObjectId) {
            $res['bizObjectId'] = $this->bizObjectId;
        }
        if (null !== $this->appCode) {
            $res['appCode'] = $this->appCode;
        }
        if (null !== $this->state) {
            $res['state'] = $this->state;
        }
        if (null !== $this->originator) {
            $res['originator'] = null !== $this->originator ? $this->originator->toMap() : null;
        }
        if (null !== $this->createdTimeGMT) {
            $res['createdTimeGMT'] = $this->createdTimeGMT;
        }
        if (null !== $this->startTimeGMT) {
            $res['startTimeGMT'] = $this->startTimeGMT;
        }
        if (null !== $this->finishTimeGMT) {
            $res['finishTimeGMT'] = $this->finishTimeGMT;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return data
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['processInstanceId'])) {
            $model->processInstanceId = $map['processInstanceId'];
        }
        if (isset($map['dingTalkProcessId'])) {
            $model->dingTalkProcessId = $map['dingTalkProcessId'];
        }
        if (isset($map['processDisplayName'])) {
            $model->processDisplayName = $map['processDisplayName'];
        }
        if (isset($map['processVersion'])) {
            $model->processVersion = $map['processVersion'];
        }
        if (isset($map['schemaCode'])) {
            $model->schemaCode = $map['schemaCode'];
        }
        if (isset($map['bizObjectId'])) {
            $model->bizObjectId = $map['bizObjectId'];
        }
        if (isset($map['appCode'])) {
            $model->appCode = $map['appCode'];
        }
        if (isset($map['state'])) {
            $model->state = $map['state'];
        }
        if (isset($map['originator'])) {
            $model->originator = originator::fromMap($map['originator']);
        }
        if (isset($map['createdTimeGMT'])) {
            $model->createdTimeGMT = $map['createdTimeGMT'];
        }
        if (isset($map['startTimeGMT'])) {
            $model->startTimeGMT = $map['startTimeGMT'];
        }
        if (isset($map['finishTimeGMT'])) {
            $model->finishTimeGMT = $map['finishTimeGMT'];
        }

        return $model;
    }
}
