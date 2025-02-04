<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dingtalk\Vcontact_1_0\Models\ListContactRestrictSettingResponseBody;

use AlibabaCloud\Tea\Model;

class list_ extends Model
{
    /**
     * @description 是否生效
     *
     * @var bool
     */
    public $active;

    /**
     * @description 规则描述
     *
     * @var string
     */
    public $description;

    /**
     * @description 白名单用户deptId列表
     *
     * @var int[]
     */
    public $excludeDeptIds;

    /**
     * @description 白名单用户tagId列表
     *
     * @var int[]
     */
    public $excludeTagIds;

    /**
     * @description 白名单用户userId列表
     *
     * @var string[]
     */
    public $excludeUserIds;

    /**
     * @description 设置id
     *
     * @var int
     */
    public $id;

    /**
     * @description 规则名称
     *
     * @var string
     */
    public $name;

    /**
     * @description 主体用户deptId列表
     *
     * @var int[]
     */
    public $subjectDeptIds;

    /**
     * @description 主体用户tagId列表
     *
     * @var int[]
     */
    public $subjectTagIds;

    /**
     * @description 主体用户userId列表
     *
     * @var string[]
     */
    public $subjectUserIds;

    /**
     * @description 限制类型
     *
     * @var string
     */
    public $type;
    protected $_name = [
        'active'         => 'active',
        'description'    => 'description',
        'excludeDeptIds' => 'excludeDeptIds',
        'excludeTagIds'  => 'excludeTagIds',
        'excludeUserIds' => 'excludeUserIds',
        'id'             => 'id',
        'name'           => 'name',
        'subjectDeptIds' => 'subjectDeptIds',
        'subjectTagIds'  => 'subjectTagIds',
        'subjectUserIds' => 'subjectUserIds',
        'type'           => 'type',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->active) {
            $res['active'] = $this->active;
        }
        if (null !== $this->description) {
            $res['description'] = $this->description;
        }
        if (null !== $this->excludeDeptIds) {
            $res['excludeDeptIds'] = $this->excludeDeptIds;
        }
        if (null !== $this->excludeTagIds) {
            $res['excludeTagIds'] = $this->excludeTagIds;
        }
        if (null !== $this->excludeUserIds) {
            $res['excludeUserIds'] = $this->excludeUserIds;
        }
        if (null !== $this->id) {
            $res['id'] = $this->id;
        }
        if (null !== $this->name) {
            $res['name'] = $this->name;
        }
        if (null !== $this->subjectDeptIds) {
            $res['subjectDeptIds'] = $this->subjectDeptIds;
        }
        if (null !== $this->subjectTagIds) {
            $res['subjectTagIds'] = $this->subjectTagIds;
        }
        if (null !== $this->subjectUserIds) {
            $res['subjectUserIds'] = $this->subjectUserIds;
        }
        if (null !== $this->type) {
            $res['type'] = $this->type;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return list_
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['active'])) {
            $model->active = $map['active'];
        }
        if (isset($map['description'])) {
            $model->description = $map['description'];
        }
        if (isset($map['excludeDeptIds'])) {
            if (!empty($map['excludeDeptIds'])) {
                $model->excludeDeptIds = $map['excludeDeptIds'];
            }
        }
        if (isset($map['excludeTagIds'])) {
            if (!empty($map['excludeTagIds'])) {
                $model->excludeTagIds = $map['excludeTagIds'];
            }
        }
        if (isset($map['excludeUserIds'])) {
            if (!empty($map['excludeUserIds'])) {
                $model->excludeUserIds = $map['excludeUserIds'];
            }
        }
        if (isset($map['id'])) {
            $model->id = $map['id'];
        }
        if (isset($map['name'])) {
            $model->name = $map['name'];
        }
        if (isset($map['subjectDeptIds'])) {
            if (!empty($map['subjectDeptIds'])) {
                $model->subjectDeptIds = $map['subjectDeptIds'];
            }
        }
        if (isset($map['subjectTagIds'])) {
            if (!empty($map['subjectTagIds'])) {
                $model->subjectTagIds = $map['subjectTagIds'];
            }
        }
        if (isset($map['subjectUserIds'])) {
            if (!empty($map['subjectUserIds'])) {
                $model->subjectUserIds = $map['subjectUserIds'];
            }
        }
        if (isset($map['type'])) {
            $model->type = $map['type'];
        }

        return $model;
    }
}
