<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dingtalk\Vdrive_1_0\Models;

use AlibabaCloud\Tea\Model;

class AddFileRequest extends Model
{
    /**
     * @description 父目录id
     *
     * @var string
     */
    public $parentId;

    /**
     * @description 文件类型
     *
     * @var string
     */
    public $fileType;

    /**
     * @description 文件名
     *
     * @var string
     */
    public $fileName;

    /**
     * @description mediaId
     *
     * @var string
     */
    public $mediaId;

    /**
     * @description 文件名冲突策略
     *
     * @var string
     */
    public $addConflictPolicy;
    protected $_name = [
        'parentId'          => 'parentId',
        'fileType'          => 'fileType',
        'fileName'          => 'fileName',
        'mediaId'           => 'mediaId',
        'addConflictPolicy' => 'addConflictPolicy',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->parentId) {
            $res['parentId'] = $this->parentId;
        }
        if (null !== $this->fileType) {
            $res['fileType'] = $this->fileType;
        }
        if (null !== $this->fileName) {
            $res['fileName'] = $this->fileName;
        }
        if (null !== $this->mediaId) {
            $res['mediaId'] = $this->mediaId;
        }
        if (null !== $this->addConflictPolicy) {
            $res['addConflictPolicy'] = $this->addConflictPolicy;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return AddFileRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['parentId'])) {
            $model->parentId = $map['parentId'];
        }
        if (isset($map['fileType'])) {
            $model->fileType = $map['fileType'];
        }
        if (isset($map['fileName'])) {
            $model->fileName = $map['fileName'];
        }
        if (isset($map['mediaId'])) {
            $model->mediaId = $map['mediaId'];
        }
        if (isset($map['addConflictPolicy'])) {
            $model->addConflictPolicy = $map['addConflictPolicy'];
        }

        return $model;
    }
}
