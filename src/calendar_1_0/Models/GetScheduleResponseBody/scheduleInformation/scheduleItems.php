<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dingtalk\Vcalendar_1_0\Models\GetScheduleResponseBody\scheduleInformation;

use AlibabaCloud\SDK\Dingtalk\Vcalendar_1_0\Models\GetScheduleResponseBody\scheduleInformation\scheduleItems\end;
use AlibabaCloud\SDK\Dingtalk\Vcalendar_1_0\Models\GetScheduleResponseBody\scheduleInformation\scheduleItems\start;
use AlibabaCloud\Tea\Model;

class scheduleItems extends Model
{
    /**
     * @description 状态: - BUSY：繁忙, - TENTATIVE：暂定繁忙
     *
     * @var string
     */
    public $status;

    /**
     * @description 开始时间，表示一个日期，或者一个带时区的时间戳
     *
     * @var start
     */
    public $start;

    /**
     * @description 结束时间，表示一个日期，或者一个带时区的时间戳
     *
     * @var end
     */
    public $end;
    protected $_name = [
        'status' => 'status',
        'start'  => 'start',
        'end'    => 'end',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->status) {
            $res['status'] = $this->status;
        }
        if (null !== $this->start) {
            $res['start'] = null !== $this->start ? $this->start->toMap() : null;
        }
        if (null !== $this->end) {
            $res['end'] = null !== $this->end ? $this->end->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return scheduleItems
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['status'])) {
            $model->status = $map['status'];
        }
        if (isset($map['start'])) {
            $model->start = start::fromMap($map['start']);
        }
        if (isset($map['end'])) {
            $model->end = end::fromMap($map['end']);
        }

        return $model;
    }
}
