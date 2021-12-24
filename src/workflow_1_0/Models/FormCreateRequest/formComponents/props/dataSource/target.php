<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dingtalk\Vworkflow_1_0\Models\FormCreateRequest\formComponents\props\dataSource;

use AlibabaCloud\Tea\Model;

class target extends Model
{
    /**
     * @description 应用appUuid
     *
     * @var string
     */
    public $appUuid;

    /**
     * @description 表单类型，0流程表单
     *
     * @var int
     */
    public $appType;

    /**
     * @description 关联表单业务标识
     *
     * @var string
     */
    public $bizType;

    /**
     * @description 关联表单的formCode
     *
     * @var string
     */
    public $formCode;
    protected $_name = [
        'appUuid'  => 'appUuid',
        'appType'  => 'appType',
        'bizType'  => 'bizType',
        'formCode' => 'formCode',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->appUuid) {
            $res['appUuid'] = $this->appUuid;
        }
        if (null !== $this->appType) {
            $res['appType'] = $this->appType;
        }
        if (null !== $this->bizType) {
            $res['bizType'] = $this->bizType;
        }
        if (null !== $this->formCode) {
            $res['formCode'] = $this->formCode;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return target
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['appUuid'])) {
            $model->appUuid = $map['appUuid'];
        }
        if (isset($map['appType'])) {
            $model->appType = $map['appType'];
        }
        if (isset($map['bizType'])) {
            $model->bizType = $map['bizType'];
        }
        if (isset($map['formCode'])) {
            $model->formCode = $map['formCode'];
        }

        return $model;
    }
}
