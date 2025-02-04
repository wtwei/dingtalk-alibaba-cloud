<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dingtalk\Vbizfinance_1_0\Models;

use AlibabaCloud\SDK\Dingtalk\Vbizfinance_1_0\Models\BatchAddInvoiceRequest\generalInvoiceVOList;
use AlibabaCloud\Tea\Model;

class BatchAddInvoiceRequest extends Model
{
    /**
     * @description 发票模型
     *
     * @var generalInvoiceVOList[]
     */
    public $generalInvoiceVOList;
    protected $_name = [
        'generalInvoiceVOList' => 'generalInvoiceVOList',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->generalInvoiceVOList) {
            $res['generalInvoiceVOList'] = [];
            if (null !== $this->generalInvoiceVOList && \is_array($this->generalInvoiceVOList)) {
                $n = 0;
                foreach ($this->generalInvoiceVOList as $item) {
                    $res['generalInvoiceVOList'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return BatchAddInvoiceRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['generalInvoiceVOList'])) {
            if (!empty($map['generalInvoiceVOList'])) {
                $model->generalInvoiceVOList = [];
                $n                           = 0;
                foreach ($map['generalInvoiceVOList'] as $item) {
                    $model->generalInvoiceVOList[$n++] = null !== $item ? generalInvoiceVOList::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
