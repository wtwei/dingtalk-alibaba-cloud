<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dingtalk\Vcrm_1_0\Models\BatchUpdateContactsResponseBody;

use AlibabaCloud\Tea\Model;

class results extends Model
{
    /**
     * @description 如果保存失败，则表示失败的错误码。
     *
     * @var string
     */
    public $errorCode;

    /**
     * @description 如果保存失败，则表示失败的错误原因。
     *
     * @var string
     */
    public $errorMsg;

    /**
     * @description 保存成功的关系id。
     *
     * @var string
     */
    public $relationId;

    /**
     * @description 数据是否保存成功。
     *
     * @var bool
     */
    public $success;
    protected $_name = [
        'errorCode'  => 'errorCode',
        'errorMsg'   => 'errorMsg',
        'relationId' => 'relationId',
        'success'    => 'success',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->errorCode) {
            $res['errorCode'] = $this->errorCode;
        }
        if (null !== $this->errorMsg) {
            $res['errorMsg'] = $this->errorMsg;
        }
        if (null !== $this->relationId) {
            $res['relationId'] = $this->relationId;
        }
        if (null !== $this->success) {
            $res['success'] = $this->success;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return results
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['errorCode'])) {
            $model->errorCode = $map['errorCode'];
        }
        if (isset($map['errorMsg'])) {
            $model->errorMsg = $map['errorMsg'];
        }
        if (isset($map['relationId'])) {
            $model->relationId = $map['relationId'];
        }
        if (isset($map['success'])) {
            $model->success = $map['success'];
        }

        return $model;
    }
}
