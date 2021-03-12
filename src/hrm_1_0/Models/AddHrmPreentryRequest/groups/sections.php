<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dingtalk\Vhrm_1_0\Models\AddHrmPreentryRequest\groups;

use AlibabaCloud\SDK\Dingtalk\Vhrm_1_0\Models\AddHrmPreentryRequest\groups\sections\empFieldVOList;
use AlibabaCloud\Tea\Model;

class sections extends Model
{
    /**
     * @var int
     */
    public $oldIndex;

    /**
     * @var empFieldVOList[]
     */
    public $empFieldVOList;
    protected $_name = [
        'oldIndex'       => 'oldIndex',
        'empFieldVOList' => 'empFieldVOList',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->oldIndex) {
            $res['oldIndex'] = $this->oldIndex;
        }
        if (null !== $this->empFieldVOList) {
            $res['empFieldVOList'] = [];
            if (null !== $this->empFieldVOList && \is_array($this->empFieldVOList)) {
                $n = 0;
                foreach ($this->empFieldVOList as $item) {
                    $res['empFieldVOList'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return sections
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['oldIndex'])) {
            $model->oldIndex = $map['oldIndex'];
        }
        if (isset($map['empFieldVOList'])) {
            if (!empty($map['empFieldVOList'])) {
                $model->empFieldVOList = [];
                $n                     = 0;
                foreach ($map['empFieldVOList'] as $item) {
                    $model->empFieldVOList[$n++] = null !== $item ? empFieldVOList::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
