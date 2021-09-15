<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dingtalk\Vresident_1_0\Models;

use AlibabaCloud\SDK\Dingtalk\Vresident_1_0\Models\AddResidentUsersRequest\extField;
use AlibabaCloud\Tea\Model;

class AddResidentUsersRequest extends Model
{
    /**
     * @description 家庭住址
     *
     * @var string
     */
    public $address;

    /**
     * @description 是否是租客
     *
     * @var bool
     */
    public $isLeaseholder;

    /**
     * @description 居民名字
     *
     * @var string
     */
    public $name;

    /**
     * @description 手机号码
     *
     * @var string
     */
    public $mobile;

    /**
     * @description 户/租户部门id
     *
     * @var int
     */
    public $departmentId;

    /**
     * @description 扩展字段（包括身份证/性别/民族）
     *
     * @var extField[]
     */
    public $extField;

    /**
     * @description 与户主的关系
     *
     * @var string
     */
    public $relateType;
    protected $_name = [
        'address'       => 'address',
        'isLeaseholder' => 'isLeaseholder',
        'name'          => 'name',
        'mobile'        => 'mobile',
        'departmentId'  => 'departmentId',
        'extField'      => 'extField',
        'relateType'    => 'relateType',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->address) {
            $res['address'] = $this->address;
        }
        if (null !== $this->isLeaseholder) {
            $res['isLeaseholder'] = $this->isLeaseholder;
        }
        if (null !== $this->name) {
            $res['name'] = $this->name;
        }
        if (null !== $this->mobile) {
            $res['mobile'] = $this->mobile;
        }
        if (null !== $this->departmentId) {
            $res['departmentId'] = $this->departmentId;
        }
        if (null !== $this->extField) {
            $res['extField'] = [];
            if (null !== $this->extField && \is_array($this->extField)) {
                $n = 0;
                foreach ($this->extField as $item) {
                    $res['extField'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->relateType) {
            $res['relateType'] = $this->relateType;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return AddResidentUsersRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['address'])) {
            $model->address = $map['address'];
        }
        if (isset($map['isLeaseholder'])) {
            $model->isLeaseholder = $map['isLeaseholder'];
        }
        if (isset($map['name'])) {
            $model->name = $map['name'];
        }
        if (isset($map['mobile'])) {
            $model->mobile = $map['mobile'];
        }
        if (isset($map['departmentId'])) {
            $model->departmentId = $map['departmentId'];
        }
        if (isset($map['extField'])) {
            if (!empty($map['extField'])) {
                $model->extField = [];
                $n               = 0;
                foreach ($map['extField'] as $item) {
                    $model->extField[$n++] = null !== $item ? extField::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['relateType'])) {
            $model->relateType = $map['relateType'];
        }

        return $model;
    }
}
