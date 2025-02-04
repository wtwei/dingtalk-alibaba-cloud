<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dingtalk\Vim_1_0\Models;

use AlibabaCloud\Tea\Model;

class CreateGroupConversationRequest extends Model
{
    /**
     * @description C端客户成员列表
     *
     * @var string[]
     */
    public $appUserIds;

    /**
     * @description 群头像
     *
     * @var string
     */
    public $groupAvatar;

    /**
     * @description 群名称
     *
     * @var string
     */
    public $groupName;

    /**
     * @description 群主钉钉Id
     *
     * @var string
     */
    public $groupOwnerId;

    /**
     * @description 群模板
     *
     * @var string
     */
    public $groupTemplateId;

    /**
     * @description 操作者的钉钉Id
     *
     * @var string
     */
    public $operatorId;

    /**
     * @description B端客服成员列表
     *
     * @var string[]
     */
    public $userIds;
    protected $_name = [
        'appUserIds'      => 'appUserIds',
        'groupAvatar'     => 'groupAvatar',
        'groupName'       => 'groupName',
        'groupOwnerId'    => 'groupOwnerId',
        'groupTemplateId' => 'groupTemplateId',
        'operatorId'      => 'operatorId',
        'userIds'         => 'userIds',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->appUserIds) {
            $res['appUserIds'] = $this->appUserIds;
        }
        if (null !== $this->groupAvatar) {
            $res['groupAvatar'] = $this->groupAvatar;
        }
        if (null !== $this->groupName) {
            $res['groupName'] = $this->groupName;
        }
        if (null !== $this->groupOwnerId) {
            $res['groupOwnerId'] = $this->groupOwnerId;
        }
        if (null !== $this->groupTemplateId) {
            $res['groupTemplateId'] = $this->groupTemplateId;
        }
        if (null !== $this->operatorId) {
            $res['operatorId'] = $this->operatorId;
        }
        if (null !== $this->userIds) {
            $res['userIds'] = $this->userIds;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateGroupConversationRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['appUserIds'])) {
            if (!empty($map['appUserIds'])) {
                $model->appUserIds = $map['appUserIds'];
            }
        }
        if (isset($map['groupAvatar'])) {
            $model->groupAvatar = $map['groupAvatar'];
        }
        if (isset($map['groupName'])) {
            $model->groupName = $map['groupName'];
        }
        if (isset($map['groupOwnerId'])) {
            $model->groupOwnerId = $map['groupOwnerId'];
        }
        if (isset($map['groupTemplateId'])) {
            $model->groupTemplateId = $map['groupTemplateId'];
        }
        if (isset($map['operatorId'])) {
            $model->operatorId = $map['operatorId'];
        }
        if (isset($map['userIds'])) {
            if (!empty($map['userIds'])) {
                $model->userIds = $map['userIds'];
            }
        }

        return $model;
    }
}
