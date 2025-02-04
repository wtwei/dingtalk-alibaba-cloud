<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dingtalk\Vdatacenter_1_0;

use AlibabaCloud\OpenApiUtil\OpenApiUtilClient;
use AlibabaCloud\SDK\Dingtalk\Vdatacenter_1_0\Models\QueryActiveUserStatisticalDataHeaders;
use AlibabaCloud\SDK\Dingtalk\Vdatacenter_1_0\Models\QueryActiveUserStatisticalDataRequest;
use AlibabaCloud\SDK\Dingtalk\Vdatacenter_1_0\Models\QueryActiveUserStatisticalDataResponse;
use AlibabaCloud\SDK\Dingtalk\Vdatacenter_1_0\Models\QueryApprovalStatisticalDataHeaders;
use AlibabaCloud\SDK\Dingtalk\Vdatacenter_1_0\Models\QueryApprovalStatisticalDataRequest;
use AlibabaCloud\SDK\Dingtalk\Vdatacenter_1_0\Models\QueryApprovalStatisticalDataResponse;
use AlibabaCloud\SDK\Dingtalk\Vdatacenter_1_0\Models\QueryAttendanceStatisticalDataHeaders;
use AlibabaCloud\SDK\Dingtalk\Vdatacenter_1_0\Models\QueryAttendanceStatisticalDataRequest;
use AlibabaCloud\SDK\Dingtalk\Vdatacenter_1_0\Models\QueryAttendanceStatisticalDataResponse;
use AlibabaCloud\SDK\Dingtalk\Vdatacenter_1_0\Models\QueryBlackboardStatisticalDataHeaders;
use AlibabaCloud\SDK\Dingtalk\Vdatacenter_1_0\Models\QueryBlackboardStatisticalDataRequest;
use AlibabaCloud\SDK\Dingtalk\Vdatacenter_1_0\Models\QueryBlackboardStatisticalDataResponse;
use AlibabaCloud\SDK\Dingtalk\Vdatacenter_1_0\Models\QueryCalendarStatisticalDataHeaders;
use AlibabaCloud\SDK\Dingtalk\Vdatacenter_1_0\Models\QueryCalendarStatisticalDataRequest;
use AlibabaCloud\SDK\Dingtalk\Vdatacenter_1_0\Models\QueryCalendarStatisticalDataResponse;
use AlibabaCloud\SDK\Dingtalk\Vdatacenter_1_0\Models\QueryCheckinStatisticalDataHeaders;
use AlibabaCloud\SDK\Dingtalk\Vdatacenter_1_0\Models\QueryCheckinStatisticalDataRequest;
use AlibabaCloud\SDK\Dingtalk\Vdatacenter_1_0\Models\QueryCheckinStatisticalDataResponse;
use AlibabaCloud\SDK\Dingtalk\Vdatacenter_1_0\Models\QueryCircleStatisticalDataHeaders;
use AlibabaCloud\SDK\Dingtalk\Vdatacenter_1_0\Models\QueryCircleStatisticalDataRequest;
use AlibabaCloud\SDK\Dingtalk\Vdatacenter_1_0\Models\QueryCircleStatisticalDataResponse;
use AlibabaCloud\SDK\Dingtalk\Vdatacenter_1_0\Models\QueryCompanyBasicInfoHeaders;
use AlibabaCloud\SDK\Dingtalk\Vdatacenter_1_0\Models\QueryCompanyBasicInfoRequest;
use AlibabaCloud\SDK\Dingtalk\Vdatacenter_1_0\Models\QueryCompanyBasicInfoResponse;
use AlibabaCloud\SDK\Dingtalk\Vdatacenter_1_0\Models\QueryDigitalDistrictOrgInfoHeaders;
use AlibabaCloud\SDK\Dingtalk\Vdatacenter_1_0\Models\QueryDigitalDistrictOrgInfoRequest;
use AlibabaCloud\SDK\Dingtalk\Vdatacenter_1_0\Models\QueryDigitalDistrictOrgInfoResponse;
use AlibabaCloud\SDK\Dingtalk\Vdatacenter_1_0\Models\QueryDingReciveStatisticalDataHeaders;
use AlibabaCloud\SDK\Dingtalk\Vdatacenter_1_0\Models\QueryDingReciveStatisticalDataRequest;
use AlibabaCloud\SDK\Dingtalk\Vdatacenter_1_0\Models\QueryDingReciveStatisticalDataResponse;
use AlibabaCloud\SDK\Dingtalk\Vdatacenter_1_0\Models\QueryDingSendStatisticalDataHeaders;
use AlibabaCloud\SDK\Dingtalk\Vdatacenter_1_0\Models\QueryDingSendStatisticalDataRequest;
use AlibabaCloud\SDK\Dingtalk\Vdatacenter_1_0\Models\QueryDingSendStatisticalDataResponse;
use AlibabaCloud\SDK\Dingtalk\Vdatacenter_1_0\Models\QueryDocumentStatisticalDataHeaders;
use AlibabaCloud\SDK\Dingtalk\Vdatacenter_1_0\Models\QueryDocumentStatisticalDataRequest;
use AlibabaCloud\SDK\Dingtalk\Vdatacenter_1_0\Models\QueryDocumentStatisticalDataResponse;
use AlibabaCloud\SDK\Dingtalk\Vdatacenter_1_0\Models\QueryDriveStatisticalDataHeaders;
use AlibabaCloud\SDK\Dingtalk\Vdatacenter_1_0\Models\QueryDriveStatisticalDataRequest;
use AlibabaCloud\SDK\Dingtalk\Vdatacenter_1_0\Models\QueryDriveStatisticalDataResponse;
use AlibabaCloud\SDK\Dingtalk\Vdatacenter_1_0\Models\QueryEmployeeTypeStatisticalDataHeaders;
use AlibabaCloud\SDK\Dingtalk\Vdatacenter_1_0\Models\QueryEmployeeTypeStatisticalDataRequest;
use AlibabaCloud\SDK\Dingtalk\Vdatacenter_1_0\Models\QueryEmployeeTypeStatisticalDataResponse;
use AlibabaCloud\SDK\Dingtalk\Vdatacenter_1_0\Models\QueryGroupLiveStatisticalDataHeaders;
use AlibabaCloud\SDK\Dingtalk\Vdatacenter_1_0\Models\QueryGroupLiveStatisticalDataRequest;
use AlibabaCloud\SDK\Dingtalk\Vdatacenter_1_0\Models\QueryGroupLiveStatisticalDataResponse;
use AlibabaCloud\SDK\Dingtalk\Vdatacenter_1_0\Models\QueryGroupMessageStatisticalDataHeaders;
use AlibabaCloud\SDK\Dingtalk\Vdatacenter_1_0\Models\QueryGroupMessageStatisticalDataRequest;
use AlibabaCloud\SDK\Dingtalk\Vdatacenter_1_0\Models\QueryGroupMessageStatisticalDataResponse;
use AlibabaCloud\SDK\Dingtalk\Vdatacenter_1_0\Models\QueryHealthStatisticalDataHeaders;
use AlibabaCloud\SDK\Dingtalk\Vdatacenter_1_0\Models\QueryHealthStatisticalDataRequest;
use AlibabaCloud\SDK\Dingtalk\Vdatacenter_1_0\Models\QueryHealthStatisticalDataResponse;
use AlibabaCloud\SDK\Dingtalk\Vdatacenter_1_0\Models\QueryMailStatisticalDataHeaders;
use AlibabaCloud\SDK\Dingtalk\Vdatacenter_1_0\Models\QueryMailStatisticalDataRequest;
use AlibabaCloud\SDK\Dingtalk\Vdatacenter_1_0\Models\QueryMailStatisticalDataResponse;
use AlibabaCloud\SDK\Dingtalk\Vdatacenter_1_0\Models\QueryOnlineUserStatisticalDataHeaders;
use AlibabaCloud\SDK\Dingtalk\Vdatacenter_1_0\Models\QueryOnlineUserStatisticalDataRequest;
use AlibabaCloud\SDK\Dingtalk\Vdatacenter_1_0\Models\QueryOnlineUserStatisticalDataResponse;
use AlibabaCloud\SDK\Dingtalk\Vdatacenter_1_0\Models\QueryRedEnvelopeReciveStatisticalDataHeaders;
use AlibabaCloud\SDK\Dingtalk\Vdatacenter_1_0\Models\QueryRedEnvelopeReciveStatisticalDataRequest;
use AlibabaCloud\SDK\Dingtalk\Vdatacenter_1_0\Models\QueryRedEnvelopeReciveStatisticalDataResponse;
use AlibabaCloud\SDK\Dingtalk\Vdatacenter_1_0\Models\QueryRedEnvelopeSendStatisticalDataHeaders;
use AlibabaCloud\SDK\Dingtalk\Vdatacenter_1_0\Models\QueryRedEnvelopeSendStatisticalDataRequest;
use AlibabaCloud\SDK\Dingtalk\Vdatacenter_1_0\Models\QueryRedEnvelopeSendStatisticalDataResponse;
use AlibabaCloud\SDK\Dingtalk\Vdatacenter_1_0\Models\QueryReportStatisticalDataHeaders;
use AlibabaCloud\SDK\Dingtalk\Vdatacenter_1_0\Models\QueryReportStatisticalDataRequest;
use AlibabaCloud\SDK\Dingtalk\Vdatacenter_1_0\Models\QueryReportStatisticalDataResponse;
use AlibabaCloud\SDK\Dingtalk\Vdatacenter_1_0\Models\QuerySingleMessageStatisticalDataHeaders;
use AlibabaCloud\SDK\Dingtalk\Vdatacenter_1_0\Models\QuerySingleMessageStatisticalDataRequest;
use AlibabaCloud\SDK\Dingtalk\Vdatacenter_1_0\Models\QuerySingleMessageStatisticalDataResponse;
use AlibabaCloud\SDK\Dingtalk\Vdatacenter_1_0\Models\QueryTelMeetingStatisticalDataHeaders;
use AlibabaCloud\SDK\Dingtalk\Vdatacenter_1_0\Models\QueryTelMeetingStatisticalDataRequest;
use AlibabaCloud\SDK\Dingtalk\Vdatacenter_1_0\Models\QueryTelMeetingStatisticalDataResponse;
use AlibabaCloud\SDK\Dingtalk\Vdatacenter_1_0\Models\QueryTodoStatisticalDataHeaders;
use AlibabaCloud\SDK\Dingtalk\Vdatacenter_1_0\Models\QueryTodoStatisticalDataRequest;
use AlibabaCloud\SDK\Dingtalk\Vdatacenter_1_0\Models\QueryTodoStatisticalDataResponse;
use AlibabaCloud\SDK\Dingtalk\Vdatacenter_1_0\Models\QueryVedioMeetingStatisticalDataHeaders;
use AlibabaCloud\SDK\Dingtalk\Vdatacenter_1_0\Models\QueryVedioMeetingStatisticalDataRequest;
use AlibabaCloud\SDK\Dingtalk\Vdatacenter_1_0\Models\QueryVedioMeetingStatisticalDataResponse;
use AlibabaCloud\SDK\Dingtalk\Vdatacenter_1_0\Models\QueryYydActiveDayStatisticalDataHeaders;
use AlibabaCloud\SDK\Dingtalk\Vdatacenter_1_0\Models\QueryYydActiveDayStatisticalDataRequest;
use AlibabaCloud\SDK\Dingtalk\Vdatacenter_1_0\Models\QueryYydActiveDayStatisticalDataResponse;
use AlibabaCloud\SDK\Dingtalk\Vdatacenter_1_0\Models\QueryYydActiveMonthStatisticalDataHeaders;
use AlibabaCloud\SDK\Dingtalk\Vdatacenter_1_0\Models\QueryYydActiveMonthStatisticalDataRequest;
use AlibabaCloud\SDK\Dingtalk\Vdatacenter_1_0\Models\QueryYydActiveMonthStatisticalDataResponse;
use AlibabaCloud\SDK\Dingtalk\Vdatacenter_1_0\Models\QueryYydActiveWeekStatisticalDataHeaders;
use AlibabaCloud\SDK\Dingtalk\Vdatacenter_1_0\Models\QueryYydActiveWeekStatisticalDataRequest;
use AlibabaCloud\SDK\Dingtalk\Vdatacenter_1_0\Models\QueryYydActiveWeekStatisticalDataResponse;
use AlibabaCloud\SDK\Dingtalk\Vdatacenter_1_0\Models\QueryYydAppDayStatisticalDataHeaders;
use AlibabaCloud\SDK\Dingtalk\Vdatacenter_1_0\Models\QueryYydAppDayStatisticalDataRequest;
use AlibabaCloud\SDK\Dingtalk\Vdatacenter_1_0\Models\QueryYydAppDayStatisticalDataResponse;
use AlibabaCloud\SDK\Dingtalk\Vdatacenter_1_0\Models\QueryYydAppMonthStatisticalDataHeaders;
use AlibabaCloud\SDK\Dingtalk\Vdatacenter_1_0\Models\QueryYydAppMonthStatisticalDataRequest;
use AlibabaCloud\SDK\Dingtalk\Vdatacenter_1_0\Models\QueryYydAppMonthStatisticalDataResponse;
use AlibabaCloud\SDK\Dingtalk\Vdatacenter_1_0\Models\QueryYydAppStdStatisticalDataHeaders;
use AlibabaCloud\SDK\Dingtalk\Vdatacenter_1_0\Models\QueryYydAppStdStatisticalDataRequest;
use AlibabaCloud\SDK\Dingtalk\Vdatacenter_1_0\Models\QueryYydAppStdStatisticalDataResponse;
use AlibabaCloud\SDK\Dingtalk\Vdatacenter_1_0\Models\QueryYydAppWeekStatisticalDataHeaders;
use AlibabaCloud\SDK\Dingtalk\Vdatacenter_1_0\Models\QueryYydAppWeekStatisticalDataRequest;
use AlibabaCloud\SDK\Dingtalk\Vdatacenter_1_0\Models\QueryYydAppWeekStatisticalDataResponse;
use AlibabaCloud\SDK\Dingtalk\Vdatacenter_1_0\Models\QueryYydCalendarDayStatisticalDataHeaders;
use AlibabaCloud\SDK\Dingtalk\Vdatacenter_1_0\Models\QueryYydCalendarDayStatisticalDataRequest;
use AlibabaCloud\SDK\Dingtalk\Vdatacenter_1_0\Models\QueryYydCalendarDayStatisticalDataResponse;
use AlibabaCloud\SDK\Dingtalk\Vdatacenter_1_0\Models\QueryYydCalendarMonthStatisticalDataHeaders;
use AlibabaCloud\SDK\Dingtalk\Vdatacenter_1_0\Models\QueryYydCalendarMonthStatisticalDataRequest;
use AlibabaCloud\SDK\Dingtalk\Vdatacenter_1_0\Models\QueryYydCalendarMonthStatisticalDataResponse;
use AlibabaCloud\SDK\Dingtalk\Vdatacenter_1_0\Models\QueryYydCalendarWeekStatisticalDataHeaders;
use AlibabaCloud\SDK\Dingtalk\Vdatacenter_1_0\Models\QueryYydCalendarWeekStatisticalDataRequest;
use AlibabaCloud\SDK\Dingtalk\Vdatacenter_1_0\Models\QueryYydCalendarWeekStatisticalDataResponse;
use AlibabaCloud\SDK\Dingtalk\Vdatacenter_1_0\Models\QueryYydDingMsgDayStatisticalDataHeaders;
use AlibabaCloud\SDK\Dingtalk\Vdatacenter_1_0\Models\QueryYydDingMsgDayStatisticalDataRequest;
use AlibabaCloud\SDK\Dingtalk\Vdatacenter_1_0\Models\QueryYydDingMsgDayStatisticalDataResponse;
use AlibabaCloud\SDK\Dingtalk\Vdatacenter_1_0\Models\QueryYydDingMsgMonthStatisticalDataHeaders;
use AlibabaCloud\SDK\Dingtalk\Vdatacenter_1_0\Models\QueryYydDingMsgMonthStatisticalDataRequest;
use AlibabaCloud\SDK\Dingtalk\Vdatacenter_1_0\Models\QueryYydDingMsgMonthStatisticalDataResponse;
use AlibabaCloud\SDK\Dingtalk\Vdatacenter_1_0\Models\QueryYydDingMsgWeekStatisticalDataHeaders;
use AlibabaCloud\SDK\Dingtalk\Vdatacenter_1_0\Models\QueryYydDingMsgWeekStatisticalDataRequest;
use AlibabaCloud\SDK\Dingtalk\Vdatacenter_1_0\Models\QueryYydDingMsgWeekStatisticalDataResponse;
use AlibabaCloud\SDK\Dingtalk\Vdatacenter_1_0\Models\QueryYydGroupMsgDayStatisticalDataHeaders;
use AlibabaCloud\SDK\Dingtalk\Vdatacenter_1_0\Models\QueryYydGroupMsgDayStatisticalDataRequest;
use AlibabaCloud\SDK\Dingtalk\Vdatacenter_1_0\Models\QueryYydGroupMsgDayStatisticalDataResponse;
use AlibabaCloud\SDK\Dingtalk\Vdatacenter_1_0\Models\QueryYydGroupMsgMonthStatisticalDataHeaders;
use AlibabaCloud\SDK\Dingtalk\Vdatacenter_1_0\Models\QueryYydGroupMsgMonthStatisticalDataRequest;
use AlibabaCloud\SDK\Dingtalk\Vdatacenter_1_0\Models\QueryYydGroupMsgMonthStatisticalDataResponse;
use AlibabaCloud\SDK\Dingtalk\Vdatacenter_1_0\Models\QueryYydGroupMsgWeekStatisticalDataHeaders;
use AlibabaCloud\SDK\Dingtalk\Vdatacenter_1_0\Models\QueryYydGroupMsgWeekStatisticalDataRequest;
use AlibabaCloud\SDK\Dingtalk\Vdatacenter_1_0\Models\QueryYydGroupMsgWeekStatisticalDataResponse;
use AlibabaCloud\SDK\Dingtalk\Vdatacenter_1_0\Models\QueryYydLogDayStatisticalDataHeaders;
use AlibabaCloud\SDK\Dingtalk\Vdatacenter_1_0\Models\QueryYydLogDayStatisticalDataRequest;
use AlibabaCloud\SDK\Dingtalk\Vdatacenter_1_0\Models\QueryYydLogDayStatisticalDataResponse;
use AlibabaCloud\SDK\Dingtalk\Vdatacenter_1_0\Models\QueryYydLogMonthStatisticalDataHeaders;
use AlibabaCloud\SDK\Dingtalk\Vdatacenter_1_0\Models\QueryYydLogMonthStatisticalDataRequest;
use AlibabaCloud\SDK\Dingtalk\Vdatacenter_1_0\Models\QueryYydLogMonthStatisticalDataResponse;
use AlibabaCloud\SDK\Dingtalk\Vdatacenter_1_0\Models\QueryYydLogWeekStatisticalDataHeaders;
use AlibabaCloud\SDK\Dingtalk\Vdatacenter_1_0\Models\QueryYydLogWeekStatisticalDataRequest;
use AlibabaCloud\SDK\Dingtalk\Vdatacenter_1_0\Models\QueryYydLogWeekStatisticalDataResponse;
use AlibabaCloud\SDK\Dingtalk\Vdatacenter_1_0\Models\QueryYydMeetingDayStatisticalDataHeaders;
use AlibabaCloud\SDK\Dingtalk\Vdatacenter_1_0\Models\QueryYydMeetingDayStatisticalDataRequest;
use AlibabaCloud\SDK\Dingtalk\Vdatacenter_1_0\Models\QueryYydMeetingDayStatisticalDataResponse;
use AlibabaCloud\SDK\Dingtalk\Vdatacenter_1_0\Models\QueryYydMeetingMonthStatisticalDataHeaders;
use AlibabaCloud\SDK\Dingtalk\Vdatacenter_1_0\Models\QueryYydMeetingMonthStatisticalDataRequest;
use AlibabaCloud\SDK\Dingtalk\Vdatacenter_1_0\Models\QueryYydMeetingMonthStatisticalDataResponse;
use AlibabaCloud\SDK\Dingtalk\Vdatacenter_1_0\Models\QueryYydMeetingWeekStatisticalDataHeaders;
use AlibabaCloud\SDK\Dingtalk\Vdatacenter_1_0\Models\QueryYydMeetingWeekStatisticalDataRequest;
use AlibabaCloud\SDK\Dingtalk\Vdatacenter_1_0\Models\QueryYydMeetingWeekStatisticalDataResponse;
use AlibabaCloud\SDK\Dingtalk\Vdatacenter_1_0\Models\QueryYydNoticeDayStatisticalDataHeaders;
use AlibabaCloud\SDK\Dingtalk\Vdatacenter_1_0\Models\QueryYydNoticeDayStatisticalDataRequest;
use AlibabaCloud\SDK\Dingtalk\Vdatacenter_1_0\Models\QueryYydNoticeDayStatisticalDataResponse;
use AlibabaCloud\SDK\Dingtalk\Vdatacenter_1_0\Models\QueryYydNoticeMonthStatisticalDataHeaders;
use AlibabaCloud\SDK\Dingtalk\Vdatacenter_1_0\Models\QueryYydNoticeMonthStatisticalDataRequest;
use AlibabaCloud\SDK\Dingtalk\Vdatacenter_1_0\Models\QueryYydNoticeMonthStatisticalDataResponse;
use AlibabaCloud\SDK\Dingtalk\Vdatacenter_1_0\Models\QueryYydNoticeWeekStatisticalDataHeaders;
use AlibabaCloud\SDK\Dingtalk\Vdatacenter_1_0\Models\QueryYydNoticeWeekStatisticalDataRequest;
use AlibabaCloud\SDK\Dingtalk\Vdatacenter_1_0\Models\QueryYydNoticeWeekStatisticalDataResponse;
use AlibabaCloud\SDK\Dingtalk\Vdatacenter_1_0\Models\QueryYydSingleMsgDayStatisticalDataHeaders;
use AlibabaCloud\SDK\Dingtalk\Vdatacenter_1_0\Models\QueryYydSingleMsgDayStatisticalDataRequest;
use AlibabaCloud\SDK\Dingtalk\Vdatacenter_1_0\Models\QueryYydSingleMsgDayStatisticalDataResponse;
use AlibabaCloud\SDK\Dingtalk\Vdatacenter_1_0\Models\QueryYydSingleMsgMonthStatisticalDataHeaders;
use AlibabaCloud\SDK\Dingtalk\Vdatacenter_1_0\Models\QueryYydSingleMsgMonthStatisticalDataRequest;
use AlibabaCloud\SDK\Dingtalk\Vdatacenter_1_0\Models\QueryYydSingleMsgMonthStatisticalDataResponse;
use AlibabaCloud\SDK\Dingtalk\Vdatacenter_1_0\Models\QueryYydSingleMsgWeekStatisticalDataHeaders;
use AlibabaCloud\SDK\Dingtalk\Vdatacenter_1_0\Models\QueryYydSingleMsgWeekStatisticalDataRequest;
use AlibabaCloud\SDK\Dingtalk\Vdatacenter_1_0\Models\QueryYydSingleMsgWeekStatisticalDataResponse;
use AlibabaCloud\SDK\Dingtalk\Vdatacenter_1_0\Models\QueryYydToatlMsgDayStatisticalDataHeaders;
use AlibabaCloud\SDK\Dingtalk\Vdatacenter_1_0\Models\QueryYydToatlMsgDayStatisticalDataRequest;
use AlibabaCloud\SDK\Dingtalk\Vdatacenter_1_0\Models\QueryYydToatlMsgDayStatisticalDataResponse;
use AlibabaCloud\SDK\Dingtalk\Vdatacenter_1_0\Models\QueryYydToatlMsgMonthStatisticalDataHeaders;
use AlibabaCloud\SDK\Dingtalk\Vdatacenter_1_0\Models\QueryYydToatlMsgMonthStatisticalDataRequest;
use AlibabaCloud\SDK\Dingtalk\Vdatacenter_1_0\Models\QueryYydToatlMsgMonthStatisticalDataResponse;
use AlibabaCloud\SDK\Dingtalk\Vdatacenter_1_0\Models\QueryYydToatlMsgWeekStatisticalDataHeaders;
use AlibabaCloud\SDK\Dingtalk\Vdatacenter_1_0\Models\QueryYydToatlMsgWeekStatisticalDataRequest;
use AlibabaCloud\SDK\Dingtalk\Vdatacenter_1_0\Models\QueryYydToatlMsgWeekStatisticalDataResponse;
use AlibabaCloud\SDK\Dingtalk\Vdatacenter_1_0\Models\QueryYydTodoDayStatisticalDataHeaders;
use AlibabaCloud\SDK\Dingtalk\Vdatacenter_1_0\Models\QueryYydTodoDayStatisticalDataRequest;
use AlibabaCloud\SDK\Dingtalk\Vdatacenter_1_0\Models\QueryYydTodoDayStatisticalDataResponse;
use AlibabaCloud\SDK\Dingtalk\Vdatacenter_1_0\Models\QueryYydTodoMonthStatisticalDataHeaders;
use AlibabaCloud\SDK\Dingtalk\Vdatacenter_1_0\Models\QueryYydTodoMonthStatisticalDataRequest;
use AlibabaCloud\SDK\Dingtalk\Vdatacenter_1_0\Models\QueryYydTodoMonthStatisticalDataResponse;
use AlibabaCloud\SDK\Dingtalk\Vdatacenter_1_0\Models\QueryYydTodoWeekStatisticalDataHeaders;
use AlibabaCloud\SDK\Dingtalk\Vdatacenter_1_0\Models\QueryYydTodoWeekStatisticalDataRequest;
use AlibabaCloud\SDK\Dingtalk\Vdatacenter_1_0\Models\QueryYydTodoWeekStatisticalDataResponse;
use AlibabaCloud\SDK\Dingtalk\Vdatacenter_1_0\Models\QueryYydTotalDayStatisticalDataHeaders;
use AlibabaCloud\SDK\Dingtalk\Vdatacenter_1_0\Models\QueryYydTotalDayStatisticalDataRequest;
use AlibabaCloud\SDK\Dingtalk\Vdatacenter_1_0\Models\QueryYydTotalDayStatisticalDataResponse;
use AlibabaCloud\SDK\Dingtalk\Vdatacenter_1_0\Models\QueryYydTotalMonthStatisticalDataHeaders;
use AlibabaCloud\SDK\Dingtalk\Vdatacenter_1_0\Models\QueryYydTotalMonthStatisticalDataRequest;
use AlibabaCloud\SDK\Dingtalk\Vdatacenter_1_0\Models\QueryYydTotalMonthStatisticalDataResponse;
use AlibabaCloud\SDK\Dingtalk\Vdatacenter_1_0\Models\QueryYydTotalStdStatisticalDataHeaders;
use AlibabaCloud\SDK\Dingtalk\Vdatacenter_1_0\Models\QueryYydTotalStdStatisticalDataRequest;
use AlibabaCloud\SDK\Dingtalk\Vdatacenter_1_0\Models\QueryYydTotalStdStatisticalDataResponse;
use AlibabaCloud\SDK\Dingtalk\Vdatacenter_1_0\Models\QueryYydTotalWeekStatisticalDataHeaders;
use AlibabaCloud\SDK\Dingtalk\Vdatacenter_1_0\Models\QueryYydTotalWeekStatisticalDataRequest;
use AlibabaCloud\SDK\Dingtalk\Vdatacenter_1_0\Models\QueryYydTotalWeekStatisticalDataResponse;
use AlibabaCloud\Tea\Utils\Utils;
use AlibabaCloud\Tea\Utils\Utils\RuntimeOptions;
use Darabonba\OpenApi\Models\OpenApiRequest;
use Darabonba\OpenApi\OpenApiClient;

class Dingtalk extends OpenApiClient
{
    public function __construct($config)
    {
        parent::__construct($config);
        $this->_endpointRule = '';
        if (Utils::empty_($this->_endpoint)) {
            $this->_endpoint = 'api.dingtalk.com';
        }
    }

    /**
     * @param QueryActiveUserStatisticalDataRequest $request
     *
     * @return QueryActiveUserStatisticalDataResponse
     */
    public function queryActiveUserStatisticalData($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = new QueryActiveUserStatisticalDataHeaders([]);

        return $this->queryActiveUserStatisticalDataWithOptions($request, $headers, $runtime);
    }

    /**
     * @param QueryActiveUserStatisticalDataRequest $request
     * @param QueryActiveUserStatisticalDataHeaders $headers
     * @param RuntimeOptions                        $runtime
     *
     * @return QueryActiveUserStatisticalDataResponse
     */
    public function queryActiveUserStatisticalDataWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->statDate)) {
            @$query['statDate'] = $request->statDate;
        }
        $realHeaders = [];
        if (!Utils::isUnset($headers->commonHeaders)) {
            $realHeaders = $headers->commonHeaders;
        }
        if (!Utils::isUnset($headers->xAcsDingtalkAccessToken)) {
            @$realHeaders['x-acs-dingtalk-access-token'] = Utils::toJSONString($headers->xAcsDingtalkAccessToken);
        }
        $req = new OpenApiRequest([
            'headers' => $realHeaders,
            'query'   => OpenApiUtilClient::query($query),
        ]);

        return QueryActiveUserStatisticalDataResponse::fromMap($this->doROARequest('QueryActiveUserStatisticalData', 'datacenter_1.0', 'HTTP', 'GET', 'AK', '/v1.0/datacenter/activeUserData', 'json', $req, $runtime));
    }

    /**
     * @param QueryApprovalStatisticalDataRequest $request
     *
     * @return QueryApprovalStatisticalDataResponse
     */
    public function queryApprovalStatisticalData($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = new QueryApprovalStatisticalDataHeaders([]);

        return $this->queryApprovalStatisticalDataWithOptions($request, $headers, $runtime);
    }

    /**
     * @param QueryApprovalStatisticalDataRequest $request
     * @param QueryApprovalStatisticalDataHeaders $headers
     * @param RuntimeOptions                      $runtime
     *
     * @return QueryApprovalStatisticalDataResponse
     */
    public function queryApprovalStatisticalDataWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->statDate)) {
            @$query['statDate'] = $request->statDate;
        }
        $realHeaders = [];
        if (!Utils::isUnset($headers->commonHeaders)) {
            $realHeaders = $headers->commonHeaders;
        }
        if (!Utils::isUnset($headers->xAcsDingtalkAccessToken)) {
            @$realHeaders['x-acs-dingtalk-access-token'] = Utils::toJSONString($headers->xAcsDingtalkAccessToken);
        }
        $req = new OpenApiRequest([
            'headers' => $realHeaders,
            'query'   => OpenApiUtilClient::query($query),
        ]);

        return QueryApprovalStatisticalDataResponse::fromMap($this->doROARequest('QueryApprovalStatisticalData', 'datacenter_1.0', 'HTTP', 'GET', 'AK', '/v1.0/datacenter/approvalData', 'json', $req, $runtime));
    }

    /**
     * @param QueryAttendanceStatisticalDataRequest $request
     *
     * @return QueryAttendanceStatisticalDataResponse
     */
    public function queryAttendanceStatisticalData($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = new QueryAttendanceStatisticalDataHeaders([]);

        return $this->queryAttendanceStatisticalDataWithOptions($request, $headers, $runtime);
    }

    /**
     * @param QueryAttendanceStatisticalDataRequest $request
     * @param QueryAttendanceStatisticalDataHeaders $headers
     * @param RuntimeOptions                        $runtime
     *
     * @return QueryAttendanceStatisticalDataResponse
     */
    public function queryAttendanceStatisticalDataWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->statDate)) {
            @$query['statDate'] = $request->statDate;
        }
        $realHeaders = [];
        if (!Utils::isUnset($headers->commonHeaders)) {
            $realHeaders = $headers->commonHeaders;
        }
        if (!Utils::isUnset($headers->xAcsDingtalkAccessToken)) {
            @$realHeaders['x-acs-dingtalk-access-token'] = Utils::toJSONString($headers->xAcsDingtalkAccessToken);
        }
        $req = new OpenApiRequest([
            'headers' => $realHeaders,
            'query'   => OpenApiUtilClient::query($query),
        ]);

        return QueryAttendanceStatisticalDataResponse::fromMap($this->doROARequest('QueryAttendanceStatisticalData', 'datacenter_1.0', 'HTTP', 'GET', 'AK', '/v1.0/datacenter/attendanceData', 'json', $req, $runtime));
    }

    /**
     * @param QueryBlackboardStatisticalDataRequest $request
     *
     * @return QueryBlackboardStatisticalDataResponse
     */
    public function queryBlackboardStatisticalData($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = new QueryBlackboardStatisticalDataHeaders([]);

        return $this->queryBlackboardStatisticalDataWithOptions($request, $headers, $runtime);
    }

    /**
     * @param QueryBlackboardStatisticalDataRequest $request
     * @param QueryBlackboardStatisticalDataHeaders $headers
     * @param RuntimeOptions                        $runtime
     *
     * @return QueryBlackboardStatisticalDataResponse
     */
    public function queryBlackboardStatisticalDataWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->statDate)) {
            @$query['statDate'] = $request->statDate;
        }
        $realHeaders = [];
        if (!Utils::isUnset($headers->commonHeaders)) {
            $realHeaders = $headers->commonHeaders;
        }
        if (!Utils::isUnset($headers->xAcsDingtalkAccessToken)) {
            @$realHeaders['x-acs-dingtalk-access-token'] = Utils::toJSONString($headers->xAcsDingtalkAccessToken);
        }
        $req = new OpenApiRequest([
            'headers' => $realHeaders,
            'query'   => OpenApiUtilClient::query($query),
        ]);

        return QueryBlackboardStatisticalDataResponse::fromMap($this->doROARequest('QueryBlackboardStatisticalData', 'datacenter_1.0', 'HTTP', 'GET', 'AK', '/v1.0/datacenter/blackboardData', 'json', $req, $runtime));
    }

    /**
     * @param QueryCalendarStatisticalDataRequest $request
     *
     * @return QueryCalendarStatisticalDataResponse
     */
    public function queryCalendarStatisticalData($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = new QueryCalendarStatisticalDataHeaders([]);

        return $this->queryCalendarStatisticalDataWithOptions($request, $headers, $runtime);
    }

    /**
     * @param QueryCalendarStatisticalDataRequest $request
     * @param QueryCalendarStatisticalDataHeaders $headers
     * @param RuntimeOptions                      $runtime
     *
     * @return QueryCalendarStatisticalDataResponse
     */
    public function queryCalendarStatisticalDataWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->statDate)) {
            @$query['statDate'] = $request->statDate;
        }
        $realHeaders = [];
        if (!Utils::isUnset($headers->commonHeaders)) {
            $realHeaders = $headers->commonHeaders;
        }
        if (!Utils::isUnset($headers->xAcsDingtalkAccessToken)) {
            @$realHeaders['x-acs-dingtalk-access-token'] = Utils::toJSONString($headers->xAcsDingtalkAccessToken);
        }
        $req = new OpenApiRequest([
            'headers' => $realHeaders,
            'query'   => OpenApiUtilClient::query($query),
        ]);

        return QueryCalendarStatisticalDataResponse::fromMap($this->doROARequest('QueryCalendarStatisticalData', 'datacenter_1.0', 'HTTP', 'GET', 'AK', '/v1.0/datacenter/calendarData', 'json', $req, $runtime));
    }

    /**
     * @param QueryCheckinStatisticalDataRequest $request
     *
     * @return QueryCheckinStatisticalDataResponse
     */
    public function queryCheckinStatisticalData($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = new QueryCheckinStatisticalDataHeaders([]);

        return $this->queryCheckinStatisticalDataWithOptions($request, $headers, $runtime);
    }

    /**
     * @param QueryCheckinStatisticalDataRequest $request
     * @param QueryCheckinStatisticalDataHeaders $headers
     * @param RuntimeOptions                     $runtime
     *
     * @return QueryCheckinStatisticalDataResponse
     */
    public function queryCheckinStatisticalDataWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->statDate)) {
            @$query['statDate'] = $request->statDate;
        }
        $realHeaders = [];
        if (!Utils::isUnset($headers->commonHeaders)) {
            $realHeaders = $headers->commonHeaders;
        }
        if (!Utils::isUnset($headers->xAcsDingtalkAccessToken)) {
            @$realHeaders['x-acs-dingtalk-access-token'] = Utils::toJSONString($headers->xAcsDingtalkAccessToken);
        }
        $req = new OpenApiRequest([
            'headers' => $realHeaders,
            'query'   => OpenApiUtilClient::query($query),
        ]);

        return QueryCheckinStatisticalDataResponse::fromMap($this->doROARequest('QueryCheckinStatisticalData', 'datacenter_1.0', 'HTTP', 'GET', 'AK', '/v1.0/datacenter/checkinData', 'json', $req, $runtime));
    }

    /**
     * @param QueryCircleStatisticalDataRequest $request
     *
     * @return QueryCircleStatisticalDataResponse
     */
    public function queryCircleStatisticalData($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = new QueryCircleStatisticalDataHeaders([]);

        return $this->queryCircleStatisticalDataWithOptions($request, $headers, $runtime);
    }

    /**
     * @param QueryCircleStatisticalDataRequest $request
     * @param QueryCircleStatisticalDataHeaders $headers
     * @param RuntimeOptions                    $runtime
     *
     * @return QueryCircleStatisticalDataResponse
     */
    public function queryCircleStatisticalDataWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->statDate)) {
            @$query['statDate'] = $request->statDate;
        }
        $realHeaders = [];
        if (!Utils::isUnset($headers->commonHeaders)) {
            $realHeaders = $headers->commonHeaders;
        }
        if (!Utils::isUnset($headers->xAcsDingtalkAccessToken)) {
            @$realHeaders['x-acs-dingtalk-access-token'] = Utils::toJSONString($headers->xAcsDingtalkAccessToken);
        }
        $req = new OpenApiRequest([
            'headers' => $realHeaders,
            'query'   => OpenApiUtilClient::query($query),
        ]);

        return QueryCircleStatisticalDataResponse::fromMap($this->doROARequest('QueryCircleStatisticalData', 'datacenter_1.0', 'HTTP', 'GET', 'AK', '/v1.0/datacenter/circleData', 'json', $req, $runtime));
    }

    /**
     * @param QueryCompanyBasicInfoRequest $request
     *
     * @return QueryCompanyBasicInfoResponse
     */
    public function queryCompanyBasicInfo($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = new QueryCompanyBasicInfoHeaders([]);

        return $this->queryCompanyBasicInfoWithOptions($request, $headers, $runtime);
    }

    /**
     * @param QueryCompanyBasicInfoRequest $request
     * @param QueryCompanyBasicInfoHeaders $headers
     * @param RuntimeOptions               $runtime
     *
     * @return QueryCompanyBasicInfoResponse
     */
    public function queryCompanyBasicInfoWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->keyword)) {
            @$query['keyword'] = $request->keyword;
        }
        if (!Utils::isUnset($request->pageNumber)) {
            @$query['pageNumber'] = $request->pageNumber;
        }
        if (!Utils::isUnset($request->pageSize)) {
            @$query['pageSize'] = $request->pageSize;
        }
        $realHeaders = [];
        if (!Utils::isUnset($headers->commonHeaders)) {
            $realHeaders = $headers->commonHeaders;
        }
        if (!Utils::isUnset($headers->xAcsDingtalkAccessToken)) {
            @$realHeaders['x-acs-dingtalk-access-token'] = Utils::toJSONString($headers->xAcsDingtalkAccessToken);
        }
        $req = new OpenApiRequest([
            'headers' => $realHeaders,
            'query'   => OpenApiUtilClient::query($query),
        ]);

        return QueryCompanyBasicInfoResponse::fromMap($this->doROARequest('QueryCompanyBasicInfo', 'datacenter_1.0', 'HTTP', 'GET', 'AK', '/v1.0/datacenter/companies/basicInfo', 'json', $req, $runtime));
    }

    /**
     * @param QueryDigitalDistrictOrgInfoRequest $request
     *
     * @return QueryDigitalDistrictOrgInfoResponse
     */
    public function queryDigitalDistrictOrgInfo($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = new QueryDigitalDistrictOrgInfoHeaders([]);

        return $this->queryDigitalDistrictOrgInfoWithOptions($request, $headers, $runtime);
    }

    /**
     * @param QueryDigitalDistrictOrgInfoRequest $request
     * @param QueryDigitalDistrictOrgInfoHeaders $headers
     * @param RuntimeOptions                     $runtime
     *
     * @return QueryDigitalDistrictOrgInfoResponse
     */
    public function queryDigitalDistrictOrgInfoWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->corpIds)) {
            @$body['corpIds'] = $request->corpIds;
        }
        if (!Utils::isUnset($request->statDates)) {
            @$body['statDates'] = $request->statDates;
        }
        $realHeaders = [];
        if (!Utils::isUnset($headers->commonHeaders)) {
            $realHeaders = $headers->commonHeaders;
        }
        if (!Utils::isUnset($headers->xAcsDingtalkAccessToken)) {
            @$realHeaders['x-acs-dingtalk-access-token'] = Utils::toJSONString($headers->xAcsDingtalkAccessToken);
        }
        $req = new OpenApiRequest([
            'headers' => $realHeaders,
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);

        return QueryDigitalDistrictOrgInfoResponse::fromMap($this->doROARequest('QueryDigitalDistrictOrgInfo', 'datacenter_1.0', 'HTTP', 'POST', 'AK', '/v1.0/datacenter/digitalCounty/orgInfos/query', 'json', $req, $runtime));
    }

    /**
     * @param QueryDingReciveStatisticalDataRequest $request
     *
     * @return QueryDingReciveStatisticalDataResponse
     */
    public function queryDingReciveStatisticalData($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = new QueryDingReciveStatisticalDataHeaders([]);

        return $this->queryDingReciveStatisticalDataWithOptions($request, $headers, $runtime);
    }

    /**
     * @param QueryDingReciveStatisticalDataRequest $request
     * @param QueryDingReciveStatisticalDataHeaders $headers
     * @param RuntimeOptions                        $runtime
     *
     * @return QueryDingReciveStatisticalDataResponse
     */
    public function queryDingReciveStatisticalDataWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->statDate)) {
            @$query['statDate'] = $request->statDate;
        }
        $realHeaders = [];
        if (!Utils::isUnset($headers->commonHeaders)) {
            $realHeaders = $headers->commonHeaders;
        }
        if (!Utils::isUnset($headers->xAcsDingtalkAccessToken)) {
            @$realHeaders['x-acs-dingtalk-access-token'] = Utils::toJSONString($headers->xAcsDingtalkAccessToken);
        }
        $req = new OpenApiRequest([
            'headers' => $realHeaders,
            'query'   => OpenApiUtilClient::query($query),
        ]);

        return QueryDingReciveStatisticalDataResponse::fromMap($this->doROARequest('QueryDingReciveStatisticalData', 'datacenter_1.0', 'HTTP', 'GET', 'AK', '/v1.0/datacenter/dingReciveData', 'json', $req, $runtime));
    }

    /**
     * @param QueryDingSendStatisticalDataRequest $request
     *
     * @return QueryDingSendStatisticalDataResponse
     */
    public function queryDingSendStatisticalData($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = new QueryDingSendStatisticalDataHeaders([]);

        return $this->queryDingSendStatisticalDataWithOptions($request, $headers, $runtime);
    }

    /**
     * @param QueryDingSendStatisticalDataRequest $request
     * @param QueryDingSendStatisticalDataHeaders $headers
     * @param RuntimeOptions                      $runtime
     *
     * @return QueryDingSendStatisticalDataResponse
     */
    public function queryDingSendStatisticalDataWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->statDate)) {
            @$query['statDate'] = $request->statDate;
        }
        $realHeaders = [];
        if (!Utils::isUnset($headers->commonHeaders)) {
            $realHeaders = $headers->commonHeaders;
        }
        if (!Utils::isUnset($headers->xAcsDingtalkAccessToken)) {
            @$realHeaders['x-acs-dingtalk-access-token'] = Utils::toJSONString($headers->xAcsDingtalkAccessToken);
        }
        $req = new OpenApiRequest([
            'headers' => $realHeaders,
            'query'   => OpenApiUtilClient::query($query),
        ]);

        return QueryDingSendStatisticalDataResponse::fromMap($this->doROARequest('QueryDingSendStatisticalData', 'datacenter_1.0', 'HTTP', 'GET', 'AK', '/v1.0/datacenter/dingSendData', 'json', $req, $runtime));
    }

    /**
     * @param QueryDocumentStatisticalDataRequest $request
     *
     * @return QueryDocumentStatisticalDataResponse
     */
    public function queryDocumentStatisticalData($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = new QueryDocumentStatisticalDataHeaders([]);

        return $this->queryDocumentStatisticalDataWithOptions($request, $headers, $runtime);
    }

    /**
     * @param QueryDocumentStatisticalDataRequest $request
     * @param QueryDocumentStatisticalDataHeaders $headers
     * @param RuntimeOptions                      $runtime
     *
     * @return QueryDocumentStatisticalDataResponse
     */
    public function queryDocumentStatisticalDataWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->statDate)) {
            @$query['statDate'] = $request->statDate;
        }
        $realHeaders = [];
        if (!Utils::isUnset($headers->commonHeaders)) {
            $realHeaders = $headers->commonHeaders;
        }
        if (!Utils::isUnset($headers->xAcsDingtalkAccessToken)) {
            @$realHeaders['x-acs-dingtalk-access-token'] = Utils::toJSONString($headers->xAcsDingtalkAccessToken);
        }
        $req = new OpenApiRequest([
            'headers' => $realHeaders,
            'query'   => OpenApiUtilClient::query($query),
        ]);

        return QueryDocumentStatisticalDataResponse::fromMap($this->doROARequest('QueryDocumentStatisticalData', 'datacenter_1.0', 'HTTP', 'GET', 'AK', '/v1.0/datacenter/documentData', 'json', $req, $runtime));
    }

    /**
     * @param QueryDriveStatisticalDataRequest $request
     *
     * @return QueryDriveStatisticalDataResponse
     */
    public function queryDriveStatisticalData($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = new QueryDriveStatisticalDataHeaders([]);

        return $this->queryDriveStatisticalDataWithOptions($request, $headers, $runtime);
    }

    /**
     * @param QueryDriveStatisticalDataRequest $request
     * @param QueryDriveStatisticalDataHeaders $headers
     * @param RuntimeOptions                   $runtime
     *
     * @return QueryDriveStatisticalDataResponse
     */
    public function queryDriveStatisticalDataWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->statDate)) {
            @$query['statDate'] = $request->statDate;
        }
        $realHeaders = [];
        if (!Utils::isUnset($headers->commonHeaders)) {
            $realHeaders = $headers->commonHeaders;
        }
        if (!Utils::isUnset($headers->xAcsDingtalkAccessToken)) {
            @$realHeaders['x-acs-dingtalk-access-token'] = Utils::toJSONString($headers->xAcsDingtalkAccessToken);
        }
        $req = new OpenApiRequest([
            'headers' => $realHeaders,
            'query'   => OpenApiUtilClient::query($query),
        ]);

        return QueryDriveStatisticalDataResponse::fromMap($this->doROARequest('QueryDriveStatisticalData', 'datacenter_1.0', 'HTTP', 'GET', 'AK', '/v1.0/datacenter/driveData', 'json', $req, $runtime));
    }

    /**
     * @param QueryEmployeeTypeStatisticalDataRequest $request
     *
     * @return QueryEmployeeTypeStatisticalDataResponse
     */
    public function queryEmployeeTypeStatisticalData($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = new QueryEmployeeTypeStatisticalDataHeaders([]);

        return $this->queryEmployeeTypeStatisticalDataWithOptions($request, $headers, $runtime);
    }

    /**
     * @param QueryEmployeeTypeStatisticalDataRequest $request
     * @param QueryEmployeeTypeStatisticalDataHeaders $headers
     * @param RuntimeOptions                          $runtime
     *
     * @return QueryEmployeeTypeStatisticalDataResponse
     */
    public function queryEmployeeTypeStatisticalDataWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->statDate)) {
            @$query['statDate'] = $request->statDate;
        }
        $realHeaders = [];
        if (!Utils::isUnset($headers->commonHeaders)) {
            $realHeaders = $headers->commonHeaders;
        }
        if (!Utils::isUnset($headers->xAcsDingtalkAccessToken)) {
            @$realHeaders['x-acs-dingtalk-access-token'] = Utils::toJSONString($headers->xAcsDingtalkAccessToken);
        }
        $req = new OpenApiRequest([
            'headers' => $realHeaders,
            'query'   => OpenApiUtilClient::query($query),
        ]);

        return QueryEmployeeTypeStatisticalDataResponse::fromMap($this->doROARequest('QueryEmployeeTypeStatisticalData', 'datacenter_1.0', 'HTTP', 'GET', 'AK', '/v1.0/datacenter/employeeTypeData', 'json', $req, $runtime));
    }

    /**
     * @param QueryGroupLiveStatisticalDataRequest $request
     *
     * @return QueryGroupLiveStatisticalDataResponse
     */
    public function queryGroupLiveStatisticalData($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = new QueryGroupLiveStatisticalDataHeaders([]);

        return $this->queryGroupLiveStatisticalDataWithOptions($request, $headers, $runtime);
    }

    /**
     * @param QueryGroupLiveStatisticalDataRequest $request
     * @param QueryGroupLiveStatisticalDataHeaders $headers
     * @param RuntimeOptions                       $runtime
     *
     * @return QueryGroupLiveStatisticalDataResponse
     */
    public function queryGroupLiveStatisticalDataWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->statDate)) {
            @$query['statDate'] = $request->statDate;
        }
        $realHeaders = [];
        if (!Utils::isUnset($headers->commonHeaders)) {
            $realHeaders = $headers->commonHeaders;
        }
        if (!Utils::isUnset($headers->xAcsDingtalkAccessToken)) {
            @$realHeaders['x-acs-dingtalk-access-token'] = Utils::toJSONString($headers->xAcsDingtalkAccessToken);
        }
        $req = new OpenApiRequest([
            'headers' => $realHeaders,
            'query'   => OpenApiUtilClient::query($query),
        ]);

        return QueryGroupLiveStatisticalDataResponse::fromMap($this->doROARequest('QueryGroupLiveStatisticalData', 'datacenter_1.0', 'HTTP', 'GET', 'AK', '/v1.0/datacenter/groupLiveData', 'json', $req, $runtime));
    }

    /**
     * @param QueryGroupMessageStatisticalDataRequest $request
     *
     * @return QueryGroupMessageStatisticalDataResponse
     */
    public function queryGroupMessageStatisticalData($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = new QueryGroupMessageStatisticalDataHeaders([]);

        return $this->queryGroupMessageStatisticalDataWithOptions($request, $headers, $runtime);
    }

    /**
     * @param QueryGroupMessageStatisticalDataRequest $request
     * @param QueryGroupMessageStatisticalDataHeaders $headers
     * @param RuntimeOptions                          $runtime
     *
     * @return QueryGroupMessageStatisticalDataResponse
     */
    public function queryGroupMessageStatisticalDataWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->statDate)) {
            @$query['statDate'] = $request->statDate;
        }
        $realHeaders = [];
        if (!Utils::isUnset($headers->commonHeaders)) {
            $realHeaders = $headers->commonHeaders;
        }
        if (!Utils::isUnset($headers->xAcsDingtalkAccessToken)) {
            @$realHeaders['x-acs-dingtalk-access-token'] = Utils::toJSONString($headers->xAcsDingtalkAccessToken);
        }
        $req = new OpenApiRequest([
            'headers' => $realHeaders,
            'query'   => OpenApiUtilClient::query($query),
        ]);

        return QueryGroupMessageStatisticalDataResponse::fromMap($this->doROARequest('QueryGroupMessageStatisticalData', 'datacenter_1.0', 'HTTP', 'GET', 'AK', '/v1.0/datacenter/groupMessageData', 'json', $req, $runtime));
    }

    /**
     * @param QueryHealthStatisticalDataRequest $request
     *
     * @return QueryHealthStatisticalDataResponse
     */
    public function queryHealthStatisticalData($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = new QueryHealthStatisticalDataHeaders([]);

        return $this->queryHealthStatisticalDataWithOptions($request, $headers, $runtime);
    }

    /**
     * @param QueryHealthStatisticalDataRequest $request
     * @param QueryHealthStatisticalDataHeaders $headers
     * @param RuntimeOptions                    $runtime
     *
     * @return QueryHealthStatisticalDataResponse
     */
    public function queryHealthStatisticalDataWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->statDate)) {
            @$query['statDate'] = $request->statDate;
        }
        $realHeaders = [];
        if (!Utils::isUnset($headers->commonHeaders)) {
            $realHeaders = $headers->commonHeaders;
        }
        if (!Utils::isUnset($headers->xAcsDingtalkAccessToken)) {
            @$realHeaders['x-acs-dingtalk-access-token'] = Utils::toJSONString($headers->xAcsDingtalkAccessToken);
        }
        $req = new OpenApiRequest([
            'headers' => $realHeaders,
            'query'   => OpenApiUtilClient::query($query),
        ]);

        return QueryHealthStatisticalDataResponse::fromMap($this->doROARequest('QueryHealthStatisticalData', 'datacenter_1.0', 'HTTP', 'GET', 'AK', '/v1.0/datacenter/healtheUserData', 'json', $req, $runtime));
    }

    /**
     * @param QueryMailStatisticalDataRequest $request
     *
     * @return QueryMailStatisticalDataResponse
     */
    public function queryMailStatisticalData($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = new QueryMailStatisticalDataHeaders([]);

        return $this->queryMailStatisticalDataWithOptions($request, $headers, $runtime);
    }

    /**
     * @param QueryMailStatisticalDataRequest $request
     * @param QueryMailStatisticalDataHeaders $headers
     * @param RuntimeOptions                  $runtime
     *
     * @return QueryMailStatisticalDataResponse
     */
    public function queryMailStatisticalDataWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->statDate)) {
            @$query['statDate'] = $request->statDate;
        }
        $realHeaders = [];
        if (!Utils::isUnset($headers->commonHeaders)) {
            $realHeaders = $headers->commonHeaders;
        }
        if (!Utils::isUnset($headers->xAcsDingtalkAccessToken)) {
            @$realHeaders['x-acs-dingtalk-access-token'] = Utils::toJSONString($headers->xAcsDingtalkAccessToken);
        }
        $req = new OpenApiRequest([
            'headers' => $realHeaders,
            'query'   => OpenApiUtilClient::query($query),
        ]);

        return QueryMailStatisticalDataResponse::fromMap($this->doROARequest('QueryMailStatisticalData', 'datacenter_1.0', 'HTTP', 'GET', 'AK', '/v1.0/datacenter/mailData', 'json', $req, $runtime));
    }

    /**
     * @param QueryOnlineUserStatisticalDataRequest $request
     *
     * @return QueryOnlineUserStatisticalDataResponse
     */
    public function queryOnlineUserStatisticalData($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = new QueryOnlineUserStatisticalDataHeaders([]);

        return $this->queryOnlineUserStatisticalDataWithOptions($request, $headers, $runtime);
    }

    /**
     * @param QueryOnlineUserStatisticalDataRequest $request
     * @param QueryOnlineUserStatisticalDataHeaders $headers
     * @param RuntimeOptions                        $runtime
     *
     * @return QueryOnlineUserStatisticalDataResponse
     */
    public function queryOnlineUserStatisticalDataWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->statDate)) {
            @$query['statDate'] = $request->statDate;
        }
        $realHeaders = [];
        if (!Utils::isUnset($headers->commonHeaders)) {
            $realHeaders = $headers->commonHeaders;
        }
        if (!Utils::isUnset($headers->xAcsDingtalkAccessToken)) {
            @$realHeaders['x-acs-dingtalk-access-token'] = Utils::toJSONString($headers->xAcsDingtalkAccessToken);
        }
        $req = new OpenApiRequest([
            'headers' => $realHeaders,
            'query'   => OpenApiUtilClient::query($query),
        ]);

        return QueryOnlineUserStatisticalDataResponse::fromMap($this->doROARequest('QueryOnlineUserStatisticalData', 'datacenter_1.0', 'HTTP', 'GET', 'AK', '/v1.0/datacenter/onlineUserData', 'json', $req, $runtime));
    }

    /**
     * @param QueryRedEnvelopeReciveStatisticalDataRequest $request
     *
     * @return QueryRedEnvelopeReciveStatisticalDataResponse
     */
    public function queryRedEnvelopeReciveStatisticalData($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = new QueryRedEnvelopeReciveStatisticalDataHeaders([]);

        return $this->queryRedEnvelopeReciveStatisticalDataWithOptions($request, $headers, $runtime);
    }

    /**
     * @param QueryRedEnvelopeReciveStatisticalDataRequest $request
     * @param QueryRedEnvelopeReciveStatisticalDataHeaders $headers
     * @param RuntimeOptions                               $runtime
     *
     * @return QueryRedEnvelopeReciveStatisticalDataResponse
     */
    public function queryRedEnvelopeReciveStatisticalDataWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->statDate)) {
            @$query['statDate'] = $request->statDate;
        }
        $realHeaders = [];
        if (!Utils::isUnset($headers->commonHeaders)) {
            $realHeaders = $headers->commonHeaders;
        }
        if (!Utils::isUnset($headers->xAcsDingtalkAccessToken)) {
            @$realHeaders['x-acs-dingtalk-access-token'] = Utils::toJSONString($headers->xAcsDingtalkAccessToken);
        }
        $req = new OpenApiRequest([
            'headers' => $realHeaders,
            'query'   => OpenApiUtilClient::query($query),
        ]);

        return QueryRedEnvelopeReciveStatisticalDataResponse::fromMap($this->doROARequest('QueryRedEnvelopeReciveStatisticalData', 'datacenter_1.0', 'HTTP', 'GET', 'AK', '/v1.0/datacenter/redEnvelopeReciveData', 'json', $req, $runtime));
    }

    /**
     * @param QueryRedEnvelopeSendStatisticalDataRequest $request
     *
     * @return QueryRedEnvelopeSendStatisticalDataResponse
     */
    public function queryRedEnvelopeSendStatisticalData($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = new QueryRedEnvelopeSendStatisticalDataHeaders([]);

        return $this->queryRedEnvelopeSendStatisticalDataWithOptions($request, $headers, $runtime);
    }

    /**
     * @param QueryRedEnvelopeSendStatisticalDataRequest $request
     * @param QueryRedEnvelopeSendStatisticalDataHeaders $headers
     * @param RuntimeOptions                             $runtime
     *
     * @return QueryRedEnvelopeSendStatisticalDataResponse
     */
    public function queryRedEnvelopeSendStatisticalDataWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->statDate)) {
            @$query['statDate'] = $request->statDate;
        }
        $realHeaders = [];
        if (!Utils::isUnset($headers->commonHeaders)) {
            $realHeaders = $headers->commonHeaders;
        }
        if (!Utils::isUnset($headers->xAcsDingtalkAccessToken)) {
            @$realHeaders['x-acs-dingtalk-access-token'] = Utils::toJSONString($headers->xAcsDingtalkAccessToken);
        }
        $req = new OpenApiRequest([
            'headers' => $realHeaders,
            'query'   => OpenApiUtilClient::query($query),
        ]);

        return QueryRedEnvelopeSendStatisticalDataResponse::fromMap($this->doROARequest('QueryRedEnvelopeSendStatisticalData', 'datacenter_1.0', 'HTTP', 'GET', 'AK', '/v1.0/datacenter/redEnvelopeSendData', 'json', $req, $runtime));
    }

    /**
     * @param QueryReportStatisticalDataRequest $request
     *
     * @return QueryReportStatisticalDataResponse
     */
    public function queryReportStatisticalData($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = new QueryReportStatisticalDataHeaders([]);

        return $this->queryReportStatisticalDataWithOptions($request, $headers, $runtime);
    }

    /**
     * @param QueryReportStatisticalDataRequest $request
     * @param QueryReportStatisticalDataHeaders $headers
     * @param RuntimeOptions                    $runtime
     *
     * @return QueryReportStatisticalDataResponse
     */
    public function queryReportStatisticalDataWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->statDate)) {
            @$query['statDate'] = $request->statDate;
        }
        $realHeaders = [];
        if (!Utils::isUnset($headers->commonHeaders)) {
            $realHeaders = $headers->commonHeaders;
        }
        if (!Utils::isUnset($headers->xAcsDingtalkAccessToken)) {
            @$realHeaders['x-acs-dingtalk-access-token'] = Utils::toJSONString($headers->xAcsDingtalkAccessToken);
        }
        $req = new OpenApiRequest([
            'headers' => $realHeaders,
            'query'   => OpenApiUtilClient::query($query),
        ]);

        return QueryReportStatisticalDataResponse::fromMap($this->doROARequest('QueryReportStatisticalData', 'datacenter_1.0', 'HTTP', 'GET', 'AK', '/v1.0/datacenter/reportData', 'json', $req, $runtime));
    }

    /**
     * @param QuerySingleMessageStatisticalDataRequest $request
     *
     * @return QuerySingleMessageStatisticalDataResponse
     */
    public function querySingleMessageStatisticalData($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = new QuerySingleMessageStatisticalDataHeaders([]);

        return $this->querySingleMessageStatisticalDataWithOptions($request, $headers, $runtime);
    }

    /**
     * @param QuerySingleMessageStatisticalDataRequest $request
     * @param QuerySingleMessageStatisticalDataHeaders $headers
     * @param RuntimeOptions                           $runtime
     *
     * @return QuerySingleMessageStatisticalDataResponse
     */
    public function querySingleMessageStatisticalDataWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->statDate)) {
            @$query['statDate'] = $request->statDate;
        }
        $realHeaders = [];
        if (!Utils::isUnset($headers->commonHeaders)) {
            $realHeaders = $headers->commonHeaders;
        }
        if (!Utils::isUnset($headers->xAcsDingtalkAccessToken)) {
            @$realHeaders['x-acs-dingtalk-access-token'] = Utils::toJSONString($headers->xAcsDingtalkAccessToken);
        }
        $req = new OpenApiRequest([
            'headers' => $realHeaders,
            'query'   => OpenApiUtilClient::query($query),
        ]);

        return QuerySingleMessageStatisticalDataResponse::fromMap($this->doROARequest('QuerySingleMessageStatisticalData', 'datacenter_1.0', 'HTTP', 'GET', 'AK', '/v1.0/datacenter/singleMessagerData', 'json', $req, $runtime));
    }

    /**
     * @param QueryTelMeetingStatisticalDataRequest $request
     *
     * @return QueryTelMeetingStatisticalDataResponse
     */
    public function queryTelMeetingStatisticalData($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = new QueryTelMeetingStatisticalDataHeaders([]);

        return $this->queryTelMeetingStatisticalDataWithOptions($request, $headers, $runtime);
    }

    /**
     * @param QueryTelMeetingStatisticalDataRequest $request
     * @param QueryTelMeetingStatisticalDataHeaders $headers
     * @param RuntimeOptions                        $runtime
     *
     * @return QueryTelMeetingStatisticalDataResponse
     */
    public function queryTelMeetingStatisticalDataWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->statDate)) {
            @$query['statDate'] = $request->statDate;
        }
        $realHeaders = [];
        if (!Utils::isUnset($headers->commonHeaders)) {
            $realHeaders = $headers->commonHeaders;
        }
        if (!Utils::isUnset($headers->xAcsDingtalkAccessToken)) {
            @$realHeaders['x-acs-dingtalk-access-token'] = Utils::toJSONString($headers->xAcsDingtalkAccessToken);
        }
        $req = new OpenApiRequest([
            'headers' => $realHeaders,
            'query'   => OpenApiUtilClient::query($query),
        ]);

        return QueryTelMeetingStatisticalDataResponse::fromMap($this->doROARequest('QueryTelMeetingStatisticalData', 'datacenter_1.0', 'HTTP', 'GET', 'AK', '/v1.0/datacenter/telMeetingData', 'json', $req, $runtime));
    }

    /**
     * @param QueryTodoStatisticalDataRequest $request
     *
     * @return QueryTodoStatisticalDataResponse
     */
    public function queryTodoStatisticalData($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = new QueryTodoStatisticalDataHeaders([]);

        return $this->queryTodoStatisticalDataWithOptions($request, $headers, $runtime);
    }

    /**
     * @param QueryTodoStatisticalDataRequest $request
     * @param QueryTodoStatisticalDataHeaders $headers
     * @param RuntimeOptions                  $runtime
     *
     * @return QueryTodoStatisticalDataResponse
     */
    public function queryTodoStatisticalDataWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->statDate)) {
            @$query['statDate'] = $request->statDate;
        }
        $realHeaders = [];
        if (!Utils::isUnset($headers->commonHeaders)) {
            $realHeaders = $headers->commonHeaders;
        }
        if (!Utils::isUnset($headers->xAcsDingtalkAccessToken)) {
            @$realHeaders['x-acs-dingtalk-access-token'] = Utils::toJSONString($headers->xAcsDingtalkAccessToken);
        }
        $req = new OpenApiRequest([
            'headers' => $realHeaders,
            'query'   => OpenApiUtilClient::query($query),
        ]);

        return QueryTodoStatisticalDataResponse::fromMap($this->doROARequest('QueryTodoStatisticalData', 'datacenter_1.0', 'HTTP', 'GET', 'AK', '/v1.0/datacenter/todoUserData', 'json', $req, $runtime));
    }

    /**
     * @param QueryVedioMeetingStatisticalDataRequest $request
     *
     * @return QueryVedioMeetingStatisticalDataResponse
     */
    public function queryVedioMeetingStatisticalData($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = new QueryVedioMeetingStatisticalDataHeaders([]);

        return $this->queryVedioMeetingStatisticalDataWithOptions($request, $headers, $runtime);
    }

    /**
     * @param QueryVedioMeetingStatisticalDataRequest $request
     * @param QueryVedioMeetingStatisticalDataHeaders $headers
     * @param RuntimeOptions                          $runtime
     *
     * @return QueryVedioMeetingStatisticalDataResponse
     */
    public function queryVedioMeetingStatisticalDataWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->statDate)) {
            @$query['statDate'] = $request->statDate;
        }
        $realHeaders = [];
        if (!Utils::isUnset($headers->commonHeaders)) {
            $realHeaders = $headers->commonHeaders;
        }
        if (!Utils::isUnset($headers->xAcsDingtalkAccessToken)) {
            @$realHeaders['x-acs-dingtalk-access-token'] = Utils::toJSONString($headers->xAcsDingtalkAccessToken);
        }
        $req = new OpenApiRequest([
            'headers' => $realHeaders,
            'query'   => OpenApiUtilClient::query($query),
        ]);

        return QueryVedioMeetingStatisticalDataResponse::fromMap($this->doROARequest('QueryVedioMeetingStatisticalData', 'datacenter_1.0', 'HTTP', 'GET', 'AK', '/v1.0/datacenter/vedioMeetingData', 'json', $req, $runtime));
    }

    /**
     * @param QueryYydActiveDayStatisticalDataRequest $request
     *
     * @return QueryYydActiveDayStatisticalDataResponse
     */
    public function queryYydActiveDayStatisticalData($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = new QueryYydActiveDayStatisticalDataHeaders([]);

        return $this->queryYydActiveDayStatisticalDataWithOptions($request, $headers, $runtime);
    }

    /**
     * @param QueryYydActiveDayStatisticalDataRequest $request
     * @param QueryYydActiveDayStatisticalDataHeaders $headers
     * @param RuntimeOptions                          $runtime
     *
     * @return QueryYydActiveDayStatisticalDataResponse
     */
    public function queryYydActiveDayStatisticalDataWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->statDate)) {
            @$query['statDate'] = $request->statDate;
        }
        $realHeaders = [];
        if (!Utils::isUnset($headers->commonHeaders)) {
            $realHeaders = $headers->commonHeaders;
        }
        if (!Utils::isUnset($headers->xAcsDingtalkAccessToken)) {
            @$realHeaders['x-acs-dingtalk-access-token'] = Utils::toJSONString($headers->xAcsDingtalkAccessToken);
        }
        $req = new OpenApiRequest([
            'headers' => $realHeaders,
            'query'   => OpenApiUtilClient::query($query),
        ]);

        return QueryYydActiveDayStatisticalDataResponse::fromMap($this->doROARequest('QueryYydActiveDayStatisticalData', 'datacenter_1.0', 'HTTP', 'GET', 'AK', '/v1.0/datacenter/yydActiveDayDatas', 'json', $req, $runtime));
    }

    /**
     * @param QueryYydActiveMonthStatisticalDataRequest $request
     *
     * @return QueryYydActiveMonthStatisticalDataResponse
     */
    public function queryYydActiveMonthStatisticalData($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = new QueryYydActiveMonthStatisticalDataHeaders([]);

        return $this->queryYydActiveMonthStatisticalDataWithOptions($request, $headers, $runtime);
    }

    /**
     * @param QueryYydActiveMonthStatisticalDataRequest $request
     * @param QueryYydActiveMonthStatisticalDataHeaders $headers
     * @param RuntimeOptions                            $runtime
     *
     * @return QueryYydActiveMonthStatisticalDataResponse
     */
    public function queryYydActiveMonthStatisticalDataWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->statDate)) {
            @$query['statDate'] = $request->statDate;
        }
        $realHeaders = [];
        if (!Utils::isUnset($headers->commonHeaders)) {
            $realHeaders = $headers->commonHeaders;
        }
        if (!Utils::isUnset($headers->xAcsDingtalkAccessToken)) {
            @$realHeaders['x-acs-dingtalk-access-token'] = Utils::toJSONString($headers->xAcsDingtalkAccessToken);
        }
        $req = new OpenApiRequest([
            'headers' => $realHeaders,
            'query'   => OpenApiUtilClient::query($query),
        ]);

        return QueryYydActiveMonthStatisticalDataResponse::fromMap($this->doROARequest('QueryYydActiveMonthStatisticalData', 'datacenter_1.0', 'HTTP', 'GET', 'AK', '/v1.0/datacenter/yydActiveMonthDatas', 'json', $req, $runtime));
    }

    /**
     * @param QueryYydActiveWeekStatisticalDataRequest $request
     *
     * @return QueryYydActiveWeekStatisticalDataResponse
     */
    public function queryYydActiveWeekStatisticalData($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = new QueryYydActiveWeekStatisticalDataHeaders([]);

        return $this->queryYydActiveWeekStatisticalDataWithOptions($request, $headers, $runtime);
    }

    /**
     * @param QueryYydActiveWeekStatisticalDataRequest $request
     * @param QueryYydActiveWeekStatisticalDataHeaders $headers
     * @param RuntimeOptions                           $runtime
     *
     * @return QueryYydActiveWeekStatisticalDataResponse
     */
    public function queryYydActiveWeekStatisticalDataWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->statDate)) {
            @$query['statDate'] = $request->statDate;
        }
        $realHeaders = [];
        if (!Utils::isUnset($headers->commonHeaders)) {
            $realHeaders = $headers->commonHeaders;
        }
        if (!Utils::isUnset($headers->xAcsDingtalkAccessToken)) {
            @$realHeaders['x-acs-dingtalk-access-token'] = Utils::toJSONString($headers->xAcsDingtalkAccessToken);
        }
        $req = new OpenApiRequest([
            'headers' => $realHeaders,
            'query'   => OpenApiUtilClient::query($query),
        ]);

        return QueryYydActiveWeekStatisticalDataResponse::fromMap($this->doROARequest('QueryYydActiveWeekStatisticalData', 'datacenter_1.0', 'HTTP', 'GET', 'AK', '/v1.0/datacenter/yydActiveWeekDatas', 'json', $req, $runtime));
    }

    /**
     * @param QueryYydAppDayStatisticalDataRequest $request
     *
     * @return QueryYydAppDayStatisticalDataResponse
     */
    public function queryYydAppDayStatisticalData($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = new QueryYydAppDayStatisticalDataHeaders([]);

        return $this->queryYydAppDayStatisticalDataWithOptions($request, $headers, $runtime);
    }

    /**
     * @param QueryYydAppDayStatisticalDataRequest $request
     * @param QueryYydAppDayStatisticalDataHeaders $headers
     * @param RuntimeOptions                       $runtime
     *
     * @return QueryYydAppDayStatisticalDataResponse
     */
    public function queryYydAppDayStatisticalDataWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->statDate)) {
            @$query['statDate'] = $request->statDate;
        }
        $realHeaders = [];
        if (!Utils::isUnset($headers->commonHeaders)) {
            $realHeaders = $headers->commonHeaders;
        }
        if (!Utils::isUnset($headers->xAcsDingtalkAccessToken)) {
            @$realHeaders['x-acs-dingtalk-access-token'] = Utils::toJSONString($headers->xAcsDingtalkAccessToken);
        }
        $req = new OpenApiRequest([
            'headers' => $realHeaders,
            'query'   => OpenApiUtilClient::query($query),
        ]);

        return QueryYydAppDayStatisticalDataResponse::fromMap($this->doROARequest('QueryYydAppDayStatisticalData', 'datacenter_1.0', 'HTTP', 'GET', 'AK', '/v1.0/datacenter/yydAppDayDatas', 'json', $req, $runtime));
    }

    /**
     * @param QueryYydAppMonthStatisticalDataRequest $request
     *
     * @return QueryYydAppMonthStatisticalDataResponse
     */
    public function queryYydAppMonthStatisticalData($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = new QueryYydAppMonthStatisticalDataHeaders([]);

        return $this->queryYydAppMonthStatisticalDataWithOptions($request, $headers, $runtime);
    }

    /**
     * @param QueryYydAppMonthStatisticalDataRequest $request
     * @param QueryYydAppMonthStatisticalDataHeaders $headers
     * @param RuntimeOptions                         $runtime
     *
     * @return QueryYydAppMonthStatisticalDataResponse
     */
    public function queryYydAppMonthStatisticalDataWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->statDate)) {
            @$query['statDate'] = $request->statDate;
        }
        $realHeaders = [];
        if (!Utils::isUnset($headers->commonHeaders)) {
            $realHeaders = $headers->commonHeaders;
        }
        if (!Utils::isUnset($headers->xAcsDingtalkAccessToken)) {
            @$realHeaders['x-acs-dingtalk-access-token'] = Utils::toJSONString($headers->xAcsDingtalkAccessToken);
        }
        $req = new OpenApiRequest([
            'headers' => $realHeaders,
            'query'   => OpenApiUtilClient::query($query),
        ]);

        return QueryYydAppMonthStatisticalDataResponse::fromMap($this->doROARequest('QueryYydAppMonthStatisticalData', 'datacenter_1.0', 'HTTP', 'GET', 'AK', '/v1.0/datacenter/yydAppMonthDatas', 'json', $req, $runtime));
    }

    /**
     * @param QueryYydAppStdStatisticalDataRequest $request
     *
     * @return QueryYydAppStdStatisticalDataResponse
     */
    public function queryYydAppStdStatisticalData($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = new QueryYydAppStdStatisticalDataHeaders([]);

        return $this->queryYydAppStdStatisticalDataWithOptions($request, $headers, $runtime);
    }

    /**
     * @param QueryYydAppStdStatisticalDataRequest $request
     * @param QueryYydAppStdStatisticalDataHeaders $headers
     * @param RuntimeOptions                       $runtime
     *
     * @return QueryYydAppStdStatisticalDataResponse
     */
    public function queryYydAppStdStatisticalDataWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->statDate)) {
            @$query['statDate'] = $request->statDate;
        }
        $realHeaders = [];
        if (!Utils::isUnset($headers->commonHeaders)) {
            $realHeaders = $headers->commonHeaders;
        }
        if (!Utils::isUnset($headers->xAcsDingtalkAccessToken)) {
            @$realHeaders['x-acs-dingtalk-access-token'] = Utils::toJSONString($headers->xAcsDingtalkAccessToken);
        }
        $req = new OpenApiRequest([
            'headers' => $realHeaders,
            'query'   => OpenApiUtilClient::query($query),
        ]);

        return QueryYydAppStdStatisticalDataResponse::fromMap($this->doROARequest('QueryYydAppStdStatisticalData', 'datacenter_1.0', 'HTTP', 'GET', 'AK', '/v1.0/datacenter/yydAppStdDatas', 'json', $req, $runtime));
    }

    /**
     * @param QueryYydAppWeekStatisticalDataRequest $request
     *
     * @return QueryYydAppWeekStatisticalDataResponse
     */
    public function queryYydAppWeekStatisticalData($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = new QueryYydAppWeekStatisticalDataHeaders([]);

        return $this->queryYydAppWeekStatisticalDataWithOptions($request, $headers, $runtime);
    }

    /**
     * @param QueryYydAppWeekStatisticalDataRequest $request
     * @param QueryYydAppWeekStatisticalDataHeaders $headers
     * @param RuntimeOptions                        $runtime
     *
     * @return QueryYydAppWeekStatisticalDataResponse
     */
    public function queryYydAppWeekStatisticalDataWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->statDate)) {
            @$query['statDate'] = $request->statDate;
        }
        $realHeaders = [];
        if (!Utils::isUnset($headers->commonHeaders)) {
            $realHeaders = $headers->commonHeaders;
        }
        if (!Utils::isUnset($headers->xAcsDingtalkAccessToken)) {
            @$realHeaders['x-acs-dingtalk-access-token'] = Utils::toJSONString($headers->xAcsDingtalkAccessToken);
        }
        $req = new OpenApiRequest([
            'headers' => $realHeaders,
            'query'   => OpenApiUtilClient::query($query),
        ]);

        return QueryYydAppWeekStatisticalDataResponse::fromMap($this->doROARequest('QueryYydAppWeekStatisticalData', 'datacenter_1.0', 'HTTP', 'GET', 'AK', '/v1.0/datacenter/yydAppWeekDatas', 'json', $req, $runtime));
    }

    /**
     * @param QueryYydCalendarDayStatisticalDataRequest $request
     *
     * @return QueryYydCalendarDayStatisticalDataResponse
     */
    public function queryYydCalendarDayStatisticalData($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = new QueryYydCalendarDayStatisticalDataHeaders([]);

        return $this->queryYydCalendarDayStatisticalDataWithOptions($request, $headers, $runtime);
    }

    /**
     * @param QueryYydCalendarDayStatisticalDataRequest $request
     * @param QueryYydCalendarDayStatisticalDataHeaders $headers
     * @param RuntimeOptions                            $runtime
     *
     * @return QueryYydCalendarDayStatisticalDataResponse
     */
    public function queryYydCalendarDayStatisticalDataWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->statDate)) {
            @$query['statDate'] = $request->statDate;
        }
        $realHeaders = [];
        if (!Utils::isUnset($headers->commonHeaders)) {
            $realHeaders = $headers->commonHeaders;
        }
        if (!Utils::isUnset($headers->xAcsDingtalkAccessToken)) {
            @$realHeaders['x-acs-dingtalk-access-token'] = Utils::toJSONString($headers->xAcsDingtalkAccessToken);
        }
        $req = new OpenApiRequest([
            'headers' => $realHeaders,
            'query'   => OpenApiUtilClient::query($query),
        ]);

        return QueryYydCalendarDayStatisticalDataResponse::fromMap($this->doROARequest('QueryYydCalendarDayStatisticalData', 'datacenter_1.0', 'HTTP', 'GET', 'AK', '/v1.0/datacenter/yydCalendarDayDatas', 'json', $req, $runtime));
    }

    /**
     * @param QueryYydCalendarMonthStatisticalDataRequest $request
     *
     * @return QueryYydCalendarMonthStatisticalDataResponse
     */
    public function queryYydCalendarMonthStatisticalData($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = new QueryYydCalendarMonthStatisticalDataHeaders([]);

        return $this->queryYydCalendarMonthStatisticalDataWithOptions($request, $headers, $runtime);
    }

    /**
     * @param QueryYydCalendarMonthStatisticalDataRequest $request
     * @param QueryYydCalendarMonthStatisticalDataHeaders $headers
     * @param RuntimeOptions                              $runtime
     *
     * @return QueryYydCalendarMonthStatisticalDataResponse
     */
    public function queryYydCalendarMonthStatisticalDataWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->statDate)) {
            @$query['statDate'] = $request->statDate;
        }
        $realHeaders = [];
        if (!Utils::isUnset($headers->commonHeaders)) {
            $realHeaders = $headers->commonHeaders;
        }
        if (!Utils::isUnset($headers->xAcsDingtalkAccessToken)) {
            @$realHeaders['x-acs-dingtalk-access-token'] = Utils::toJSONString($headers->xAcsDingtalkAccessToken);
        }
        $req = new OpenApiRequest([
            'headers' => $realHeaders,
            'query'   => OpenApiUtilClient::query($query),
        ]);

        return QueryYydCalendarMonthStatisticalDataResponse::fromMap($this->doROARequest('QueryYydCalendarMonthStatisticalData', 'datacenter_1.0', 'HTTP', 'GET', 'AK', '/v1.0/datacenter/yydCalendarMonthDatas', 'json', $req, $runtime));
    }

    /**
     * @param QueryYydCalendarWeekStatisticalDataRequest $request
     *
     * @return QueryYydCalendarWeekStatisticalDataResponse
     */
    public function queryYydCalendarWeekStatisticalData($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = new QueryYydCalendarWeekStatisticalDataHeaders([]);

        return $this->queryYydCalendarWeekStatisticalDataWithOptions($request, $headers, $runtime);
    }

    /**
     * @param QueryYydCalendarWeekStatisticalDataRequest $request
     * @param QueryYydCalendarWeekStatisticalDataHeaders $headers
     * @param RuntimeOptions                             $runtime
     *
     * @return QueryYydCalendarWeekStatisticalDataResponse
     */
    public function queryYydCalendarWeekStatisticalDataWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->statDate)) {
            @$query['statDate'] = $request->statDate;
        }
        $realHeaders = [];
        if (!Utils::isUnset($headers->commonHeaders)) {
            $realHeaders = $headers->commonHeaders;
        }
        if (!Utils::isUnset($headers->xAcsDingtalkAccessToken)) {
            @$realHeaders['x-acs-dingtalk-access-token'] = Utils::toJSONString($headers->xAcsDingtalkAccessToken);
        }
        $req = new OpenApiRequest([
            'headers' => $realHeaders,
            'query'   => OpenApiUtilClient::query($query),
        ]);

        return QueryYydCalendarWeekStatisticalDataResponse::fromMap($this->doROARequest('QueryYydCalendarWeekStatisticalData', 'datacenter_1.0', 'HTTP', 'GET', 'AK', '/v1.0/datacenter/yydCalendarWeekDatas', 'json', $req, $runtime));
    }

    /**
     * @param QueryYydDingMsgDayStatisticalDataRequest $request
     *
     * @return QueryYydDingMsgDayStatisticalDataResponse
     */
    public function queryYydDingMsgDayStatisticalData($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = new QueryYydDingMsgDayStatisticalDataHeaders([]);

        return $this->queryYydDingMsgDayStatisticalDataWithOptions($request, $headers, $runtime);
    }

    /**
     * @param QueryYydDingMsgDayStatisticalDataRequest $request
     * @param QueryYydDingMsgDayStatisticalDataHeaders $headers
     * @param RuntimeOptions                           $runtime
     *
     * @return QueryYydDingMsgDayStatisticalDataResponse
     */
    public function queryYydDingMsgDayStatisticalDataWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->statDate)) {
            @$query['statDate'] = $request->statDate;
        }
        $realHeaders = [];
        if (!Utils::isUnset($headers->commonHeaders)) {
            $realHeaders = $headers->commonHeaders;
        }
        if (!Utils::isUnset($headers->xAcsDingtalkAccessToken)) {
            @$realHeaders['x-acs-dingtalk-access-token'] = Utils::toJSONString($headers->xAcsDingtalkAccessToken);
        }
        $req = new OpenApiRequest([
            'headers' => $realHeaders,
            'query'   => OpenApiUtilClient::query($query),
        ]);

        return QueryYydDingMsgDayStatisticalDataResponse::fromMap($this->doROARequest('QueryYydDingMsgDayStatisticalData', 'datacenter_1.0', 'HTTP', 'GET', 'AK', '/v1.0/datacenter/yydDingMsgDayDatas', 'json', $req, $runtime));
    }

    /**
     * @param QueryYydDingMsgMonthStatisticalDataRequest $request
     *
     * @return QueryYydDingMsgMonthStatisticalDataResponse
     */
    public function queryYydDingMsgMonthStatisticalData($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = new QueryYydDingMsgMonthStatisticalDataHeaders([]);

        return $this->queryYydDingMsgMonthStatisticalDataWithOptions($request, $headers, $runtime);
    }

    /**
     * @param QueryYydDingMsgMonthStatisticalDataRequest $request
     * @param QueryYydDingMsgMonthStatisticalDataHeaders $headers
     * @param RuntimeOptions                             $runtime
     *
     * @return QueryYydDingMsgMonthStatisticalDataResponse
     */
    public function queryYydDingMsgMonthStatisticalDataWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->statDate)) {
            @$query['statDate'] = $request->statDate;
        }
        $realHeaders = [];
        if (!Utils::isUnset($headers->commonHeaders)) {
            $realHeaders = $headers->commonHeaders;
        }
        if (!Utils::isUnset($headers->xAcsDingtalkAccessToken)) {
            @$realHeaders['x-acs-dingtalk-access-token'] = Utils::toJSONString($headers->xAcsDingtalkAccessToken);
        }
        $req = new OpenApiRequest([
            'headers' => $realHeaders,
            'query'   => OpenApiUtilClient::query($query),
        ]);

        return QueryYydDingMsgMonthStatisticalDataResponse::fromMap($this->doROARequest('QueryYydDingMsgMonthStatisticalData', 'datacenter_1.0', 'HTTP', 'GET', 'AK', '/v1.0/datacenter/yydDingMsgMonthDatas', 'json', $req, $runtime));
    }

    /**
     * @param QueryYydDingMsgWeekStatisticalDataRequest $request
     *
     * @return QueryYydDingMsgWeekStatisticalDataResponse
     */
    public function queryYydDingMsgWeekStatisticalData($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = new QueryYydDingMsgWeekStatisticalDataHeaders([]);

        return $this->queryYydDingMsgWeekStatisticalDataWithOptions($request, $headers, $runtime);
    }

    /**
     * @param QueryYydDingMsgWeekStatisticalDataRequest $request
     * @param QueryYydDingMsgWeekStatisticalDataHeaders $headers
     * @param RuntimeOptions                            $runtime
     *
     * @return QueryYydDingMsgWeekStatisticalDataResponse
     */
    public function queryYydDingMsgWeekStatisticalDataWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->statDate)) {
            @$query['statDate'] = $request->statDate;
        }
        $realHeaders = [];
        if (!Utils::isUnset($headers->commonHeaders)) {
            $realHeaders = $headers->commonHeaders;
        }
        if (!Utils::isUnset($headers->xAcsDingtalkAccessToken)) {
            @$realHeaders['x-acs-dingtalk-access-token'] = Utils::toJSONString($headers->xAcsDingtalkAccessToken);
        }
        $req = new OpenApiRequest([
            'headers' => $realHeaders,
            'query'   => OpenApiUtilClient::query($query),
        ]);

        return QueryYydDingMsgWeekStatisticalDataResponse::fromMap($this->doROARequest('QueryYydDingMsgWeekStatisticalData', 'datacenter_1.0', 'HTTP', 'GET', 'AK', '/v1.0/datacenter/yydDingMsgWeekDatas', 'json', $req, $runtime));
    }

    /**
     * @param QueryYydGroupMsgDayStatisticalDataRequest $request
     *
     * @return QueryYydGroupMsgDayStatisticalDataResponse
     */
    public function queryYydGroupMsgDayStatisticalData($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = new QueryYydGroupMsgDayStatisticalDataHeaders([]);

        return $this->queryYydGroupMsgDayStatisticalDataWithOptions($request, $headers, $runtime);
    }

    /**
     * @param QueryYydGroupMsgDayStatisticalDataRequest $request
     * @param QueryYydGroupMsgDayStatisticalDataHeaders $headers
     * @param RuntimeOptions                            $runtime
     *
     * @return QueryYydGroupMsgDayStatisticalDataResponse
     */
    public function queryYydGroupMsgDayStatisticalDataWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->statDate)) {
            @$query['statDate'] = $request->statDate;
        }
        $realHeaders = [];
        if (!Utils::isUnset($headers->commonHeaders)) {
            $realHeaders = $headers->commonHeaders;
        }
        if (!Utils::isUnset($headers->xAcsDingtalkAccessToken)) {
            @$realHeaders['x-acs-dingtalk-access-token'] = Utils::toJSONString($headers->xAcsDingtalkAccessToken);
        }
        $req = new OpenApiRequest([
            'headers' => $realHeaders,
            'query'   => OpenApiUtilClient::query($query),
        ]);

        return QueryYydGroupMsgDayStatisticalDataResponse::fromMap($this->doROARequest('QueryYydGroupMsgDayStatisticalData', 'datacenter_1.0', 'HTTP', 'GET', 'AK', '/v1.0/datacenter/yydGroupMsgDayDatas', 'json', $req, $runtime));
    }

    /**
     * @param QueryYydGroupMsgMonthStatisticalDataRequest $request
     *
     * @return QueryYydGroupMsgMonthStatisticalDataResponse
     */
    public function queryYydGroupMsgMonthStatisticalData($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = new QueryYydGroupMsgMonthStatisticalDataHeaders([]);

        return $this->queryYydGroupMsgMonthStatisticalDataWithOptions($request, $headers, $runtime);
    }

    /**
     * @param QueryYydGroupMsgMonthStatisticalDataRequest $request
     * @param QueryYydGroupMsgMonthStatisticalDataHeaders $headers
     * @param RuntimeOptions                              $runtime
     *
     * @return QueryYydGroupMsgMonthStatisticalDataResponse
     */
    public function queryYydGroupMsgMonthStatisticalDataWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->statDate)) {
            @$query['statDate'] = $request->statDate;
        }
        $realHeaders = [];
        if (!Utils::isUnset($headers->commonHeaders)) {
            $realHeaders = $headers->commonHeaders;
        }
        if (!Utils::isUnset($headers->xAcsDingtalkAccessToken)) {
            @$realHeaders['x-acs-dingtalk-access-token'] = Utils::toJSONString($headers->xAcsDingtalkAccessToken);
        }
        $req = new OpenApiRequest([
            'headers' => $realHeaders,
            'query'   => OpenApiUtilClient::query($query),
        ]);

        return QueryYydGroupMsgMonthStatisticalDataResponse::fromMap($this->doROARequest('QueryYydGroupMsgMonthStatisticalData', 'datacenter_1.0', 'HTTP', 'GET', 'AK', '/v1.0/datacenter/yydGroupMsgMonthDatas', 'json', $req, $runtime));
    }

    /**
     * @param QueryYydGroupMsgWeekStatisticalDataRequest $request
     *
     * @return QueryYydGroupMsgWeekStatisticalDataResponse
     */
    public function queryYydGroupMsgWeekStatisticalData($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = new QueryYydGroupMsgWeekStatisticalDataHeaders([]);

        return $this->queryYydGroupMsgWeekStatisticalDataWithOptions($request, $headers, $runtime);
    }

    /**
     * @param QueryYydGroupMsgWeekStatisticalDataRequest $request
     * @param QueryYydGroupMsgWeekStatisticalDataHeaders $headers
     * @param RuntimeOptions                             $runtime
     *
     * @return QueryYydGroupMsgWeekStatisticalDataResponse
     */
    public function queryYydGroupMsgWeekStatisticalDataWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->statDate)) {
            @$query['statDate'] = $request->statDate;
        }
        $realHeaders = [];
        if (!Utils::isUnset($headers->commonHeaders)) {
            $realHeaders = $headers->commonHeaders;
        }
        if (!Utils::isUnset($headers->xAcsDingtalkAccessToken)) {
            @$realHeaders['x-acs-dingtalk-access-token'] = Utils::toJSONString($headers->xAcsDingtalkAccessToken);
        }
        $req = new OpenApiRequest([
            'headers' => $realHeaders,
            'query'   => OpenApiUtilClient::query($query),
        ]);

        return QueryYydGroupMsgWeekStatisticalDataResponse::fromMap($this->doROARequest('QueryYydGroupMsgWeekStatisticalData', 'datacenter_1.0', 'HTTP', 'GET', 'AK', '/v1.0/datacenter/yydGroupMsgWeekDatas', 'json', $req, $runtime));
    }

    /**
     * @param QueryYydLogDayStatisticalDataRequest $request
     *
     * @return QueryYydLogDayStatisticalDataResponse
     */
    public function queryYydLogDayStatisticalData($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = new QueryYydLogDayStatisticalDataHeaders([]);

        return $this->queryYydLogDayStatisticalDataWithOptions($request, $headers, $runtime);
    }

    /**
     * @param QueryYydLogDayStatisticalDataRequest $request
     * @param QueryYydLogDayStatisticalDataHeaders $headers
     * @param RuntimeOptions                       $runtime
     *
     * @return QueryYydLogDayStatisticalDataResponse
     */
    public function queryYydLogDayStatisticalDataWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->statDate)) {
            @$query['statDate'] = $request->statDate;
        }
        $realHeaders = [];
        if (!Utils::isUnset($headers->commonHeaders)) {
            $realHeaders = $headers->commonHeaders;
        }
        if (!Utils::isUnset($headers->xAcsDingtalkAccessToken)) {
            @$realHeaders['x-acs-dingtalk-access-token'] = Utils::toJSONString($headers->xAcsDingtalkAccessToken);
        }
        $req = new OpenApiRequest([
            'headers' => $realHeaders,
            'query'   => OpenApiUtilClient::query($query),
        ]);

        return QueryYydLogDayStatisticalDataResponse::fromMap($this->doROARequest('QueryYydLogDayStatisticalData', 'datacenter_1.0', 'HTTP', 'GET', 'AK', '/v1.0/datacenter/yydLogDayDatas', 'json', $req, $runtime));
    }

    /**
     * @param QueryYydLogMonthStatisticalDataRequest $request
     *
     * @return QueryYydLogMonthStatisticalDataResponse
     */
    public function queryYydLogMonthStatisticalData($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = new QueryYydLogMonthStatisticalDataHeaders([]);

        return $this->queryYydLogMonthStatisticalDataWithOptions($request, $headers, $runtime);
    }

    /**
     * @param QueryYydLogMonthStatisticalDataRequest $request
     * @param QueryYydLogMonthStatisticalDataHeaders $headers
     * @param RuntimeOptions                         $runtime
     *
     * @return QueryYydLogMonthStatisticalDataResponse
     */
    public function queryYydLogMonthStatisticalDataWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->statDate)) {
            @$query['statDate'] = $request->statDate;
        }
        $realHeaders = [];
        if (!Utils::isUnset($headers->commonHeaders)) {
            $realHeaders = $headers->commonHeaders;
        }
        if (!Utils::isUnset($headers->xAcsDingtalkAccessToken)) {
            @$realHeaders['x-acs-dingtalk-access-token'] = Utils::toJSONString($headers->xAcsDingtalkAccessToken);
        }
        $req = new OpenApiRequest([
            'headers' => $realHeaders,
            'query'   => OpenApiUtilClient::query($query),
        ]);

        return QueryYydLogMonthStatisticalDataResponse::fromMap($this->doROARequest('QueryYydLogMonthStatisticalData', 'datacenter_1.0', 'HTTP', 'GET', 'AK', '/v1.0/datacenter/yydLogMonthDatas', 'json', $req, $runtime));
    }

    /**
     * @param QueryYydLogWeekStatisticalDataRequest $request
     *
     * @return QueryYydLogWeekStatisticalDataResponse
     */
    public function queryYydLogWeekStatisticalData($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = new QueryYydLogWeekStatisticalDataHeaders([]);

        return $this->queryYydLogWeekStatisticalDataWithOptions($request, $headers, $runtime);
    }

    /**
     * @param QueryYydLogWeekStatisticalDataRequest $request
     * @param QueryYydLogWeekStatisticalDataHeaders $headers
     * @param RuntimeOptions                        $runtime
     *
     * @return QueryYydLogWeekStatisticalDataResponse
     */
    public function queryYydLogWeekStatisticalDataWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->statDate)) {
            @$query['statDate'] = $request->statDate;
        }
        $realHeaders = [];
        if (!Utils::isUnset($headers->commonHeaders)) {
            $realHeaders = $headers->commonHeaders;
        }
        if (!Utils::isUnset($headers->xAcsDingtalkAccessToken)) {
            @$realHeaders['x-acs-dingtalk-access-token'] = Utils::toJSONString($headers->xAcsDingtalkAccessToken);
        }
        $req = new OpenApiRequest([
            'headers' => $realHeaders,
            'query'   => OpenApiUtilClient::query($query),
        ]);

        return QueryYydLogWeekStatisticalDataResponse::fromMap($this->doROARequest('QueryYydLogWeekStatisticalData', 'datacenter_1.0', 'HTTP', 'GET', 'AK', '/v1.0/datacenter/yydLogWeekDatas', 'json', $req, $runtime));
    }

    /**
     * @param QueryYydMeetingDayStatisticalDataRequest $request
     *
     * @return QueryYydMeetingDayStatisticalDataResponse
     */
    public function queryYydMeetingDayStatisticalData($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = new QueryYydMeetingDayStatisticalDataHeaders([]);

        return $this->queryYydMeetingDayStatisticalDataWithOptions($request, $headers, $runtime);
    }

    /**
     * @param QueryYydMeetingDayStatisticalDataRequest $request
     * @param QueryYydMeetingDayStatisticalDataHeaders $headers
     * @param RuntimeOptions                           $runtime
     *
     * @return QueryYydMeetingDayStatisticalDataResponse
     */
    public function queryYydMeetingDayStatisticalDataWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->statDate)) {
            @$query['statDate'] = $request->statDate;
        }
        $realHeaders = [];
        if (!Utils::isUnset($headers->commonHeaders)) {
            $realHeaders = $headers->commonHeaders;
        }
        if (!Utils::isUnset($headers->xAcsDingtalkAccessToken)) {
            @$realHeaders['x-acs-dingtalk-access-token'] = Utils::toJSONString($headers->xAcsDingtalkAccessToken);
        }
        $req = new OpenApiRequest([
            'headers' => $realHeaders,
            'query'   => OpenApiUtilClient::query($query),
        ]);

        return QueryYydMeetingDayStatisticalDataResponse::fromMap($this->doROARequest('QueryYydMeetingDayStatisticalData', 'datacenter_1.0', 'HTTP', 'GET', 'AK', '/v1.0/datacenter/yydMeetingDayDatas', 'json', $req, $runtime));
    }

    /**
     * @param QueryYydMeetingMonthStatisticalDataRequest $request
     *
     * @return QueryYydMeetingMonthStatisticalDataResponse
     */
    public function queryYydMeetingMonthStatisticalData($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = new QueryYydMeetingMonthStatisticalDataHeaders([]);

        return $this->queryYydMeetingMonthStatisticalDataWithOptions($request, $headers, $runtime);
    }

    /**
     * @param QueryYydMeetingMonthStatisticalDataRequest $request
     * @param QueryYydMeetingMonthStatisticalDataHeaders $headers
     * @param RuntimeOptions                             $runtime
     *
     * @return QueryYydMeetingMonthStatisticalDataResponse
     */
    public function queryYydMeetingMonthStatisticalDataWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->statDate)) {
            @$query['statDate'] = $request->statDate;
        }
        $realHeaders = [];
        if (!Utils::isUnset($headers->commonHeaders)) {
            $realHeaders = $headers->commonHeaders;
        }
        if (!Utils::isUnset($headers->xAcsDingtalkAccessToken)) {
            @$realHeaders['x-acs-dingtalk-access-token'] = Utils::toJSONString($headers->xAcsDingtalkAccessToken);
        }
        $req = new OpenApiRequest([
            'headers' => $realHeaders,
            'query'   => OpenApiUtilClient::query($query),
        ]);

        return QueryYydMeetingMonthStatisticalDataResponse::fromMap($this->doROARequest('QueryYydMeetingMonthStatisticalData', 'datacenter_1.0', 'HTTP', 'GET', 'AK', '/v1.0/datacenter/yydMeetingMonthDatas', 'json', $req, $runtime));
    }

    /**
     * @param QueryYydMeetingWeekStatisticalDataRequest $request
     *
     * @return QueryYydMeetingWeekStatisticalDataResponse
     */
    public function queryYydMeetingWeekStatisticalData($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = new QueryYydMeetingWeekStatisticalDataHeaders([]);

        return $this->queryYydMeetingWeekStatisticalDataWithOptions($request, $headers, $runtime);
    }

    /**
     * @param QueryYydMeetingWeekStatisticalDataRequest $request
     * @param QueryYydMeetingWeekStatisticalDataHeaders $headers
     * @param RuntimeOptions                            $runtime
     *
     * @return QueryYydMeetingWeekStatisticalDataResponse
     */
    public function queryYydMeetingWeekStatisticalDataWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->statDate)) {
            @$query['statDate'] = $request->statDate;
        }
        $realHeaders = [];
        if (!Utils::isUnset($headers->commonHeaders)) {
            $realHeaders = $headers->commonHeaders;
        }
        if (!Utils::isUnset($headers->xAcsDingtalkAccessToken)) {
            @$realHeaders['x-acs-dingtalk-access-token'] = Utils::toJSONString($headers->xAcsDingtalkAccessToken);
        }
        $req = new OpenApiRequest([
            'headers' => $realHeaders,
            'query'   => OpenApiUtilClient::query($query),
        ]);

        return QueryYydMeetingWeekStatisticalDataResponse::fromMap($this->doROARequest('QueryYydMeetingWeekStatisticalData', 'datacenter_1.0', 'HTTP', 'GET', 'AK', '/v1.0/datacenter/yydMeetingWeekDatas', 'json', $req, $runtime));
    }

    /**
     * @param QueryYydNoticeDayStatisticalDataRequest $request
     *
     * @return QueryYydNoticeDayStatisticalDataResponse
     */
    public function queryYydNoticeDayStatisticalData($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = new QueryYydNoticeDayStatisticalDataHeaders([]);

        return $this->queryYydNoticeDayStatisticalDataWithOptions($request, $headers, $runtime);
    }

    /**
     * @param QueryYydNoticeDayStatisticalDataRequest $request
     * @param QueryYydNoticeDayStatisticalDataHeaders $headers
     * @param RuntimeOptions                          $runtime
     *
     * @return QueryYydNoticeDayStatisticalDataResponse
     */
    public function queryYydNoticeDayStatisticalDataWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->statDate)) {
            @$query['statDate'] = $request->statDate;
        }
        $realHeaders = [];
        if (!Utils::isUnset($headers->commonHeaders)) {
            $realHeaders = $headers->commonHeaders;
        }
        if (!Utils::isUnset($headers->xAcsDingtalkAccessToken)) {
            @$realHeaders['x-acs-dingtalk-access-token'] = Utils::toJSONString($headers->xAcsDingtalkAccessToken);
        }
        $req = new OpenApiRequest([
            'headers' => $realHeaders,
            'query'   => OpenApiUtilClient::query($query),
        ]);

        return QueryYydNoticeDayStatisticalDataResponse::fromMap($this->doROARequest('QueryYydNoticeDayStatisticalData', 'datacenter_1.0', 'HTTP', 'GET', 'AK', '/v1.0/datacenter/yydNoticeDayDatas', 'json', $req, $runtime));
    }

    /**
     * @param QueryYydNoticeMonthStatisticalDataRequest $request
     *
     * @return QueryYydNoticeMonthStatisticalDataResponse
     */
    public function queryYydNoticeMonthStatisticalData($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = new QueryYydNoticeMonthStatisticalDataHeaders([]);

        return $this->queryYydNoticeMonthStatisticalDataWithOptions($request, $headers, $runtime);
    }

    /**
     * @param QueryYydNoticeMonthStatisticalDataRequest $request
     * @param QueryYydNoticeMonthStatisticalDataHeaders $headers
     * @param RuntimeOptions                            $runtime
     *
     * @return QueryYydNoticeMonthStatisticalDataResponse
     */
    public function queryYydNoticeMonthStatisticalDataWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->statDate)) {
            @$query['statDate'] = $request->statDate;
        }
        $realHeaders = [];
        if (!Utils::isUnset($headers->commonHeaders)) {
            $realHeaders = $headers->commonHeaders;
        }
        if (!Utils::isUnset($headers->xAcsDingtalkAccessToken)) {
            @$realHeaders['x-acs-dingtalk-access-token'] = Utils::toJSONString($headers->xAcsDingtalkAccessToken);
        }
        $req = new OpenApiRequest([
            'headers' => $realHeaders,
            'query'   => OpenApiUtilClient::query($query),
        ]);

        return QueryYydNoticeMonthStatisticalDataResponse::fromMap($this->doROARequest('QueryYydNoticeMonthStatisticalData', 'datacenter_1.0', 'HTTP', 'GET', 'AK', '/v1.0/datacenter/yydNoticeMonthDatas', 'json', $req, $runtime));
    }

    /**
     * @param QueryYydNoticeWeekStatisticalDataRequest $request
     *
     * @return QueryYydNoticeWeekStatisticalDataResponse
     */
    public function queryYydNoticeWeekStatisticalData($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = new QueryYydNoticeWeekStatisticalDataHeaders([]);

        return $this->queryYydNoticeWeekStatisticalDataWithOptions($request, $headers, $runtime);
    }

    /**
     * @param QueryYydNoticeWeekStatisticalDataRequest $request
     * @param QueryYydNoticeWeekStatisticalDataHeaders $headers
     * @param RuntimeOptions                           $runtime
     *
     * @return QueryYydNoticeWeekStatisticalDataResponse
     */
    public function queryYydNoticeWeekStatisticalDataWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->statDate)) {
            @$query['statDate'] = $request->statDate;
        }
        $realHeaders = [];
        if (!Utils::isUnset($headers->commonHeaders)) {
            $realHeaders = $headers->commonHeaders;
        }
        if (!Utils::isUnset($headers->xAcsDingtalkAccessToken)) {
            @$realHeaders['x-acs-dingtalk-access-token'] = Utils::toJSONString($headers->xAcsDingtalkAccessToken);
        }
        $req = new OpenApiRequest([
            'headers' => $realHeaders,
            'query'   => OpenApiUtilClient::query($query),
        ]);

        return QueryYydNoticeWeekStatisticalDataResponse::fromMap($this->doROARequest('QueryYydNoticeWeekStatisticalData', 'datacenter_1.0', 'HTTP', 'GET', 'AK', '/v1.0/datacenter/yydNoticeWeekDatas', 'json', $req, $runtime));
    }

    /**
     * @param QueryYydSingleMsgDayStatisticalDataRequest $request
     *
     * @return QueryYydSingleMsgDayStatisticalDataResponse
     */
    public function queryYydSingleMsgDayStatisticalData($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = new QueryYydSingleMsgDayStatisticalDataHeaders([]);

        return $this->queryYydSingleMsgDayStatisticalDataWithOptions($request, $headers, $runtime);
    }

    /**
     * @param QueryYydSingleMsgDayStatisticalDataRequest $request
     * @param QueryYydSingleMsgDayStatisticalDataHeaders $headers
     * @param RuntimeOptions                             $runtime
     *
     * @return QueryYydSingleMsgDayStatisticalDataResponse
     */
    public function queryYydSingleMsgDayStatisticalDataWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->statDate)) {
            @$query['statDate'] = $request->statDate;
        }
        $realHeaders = [];
        if (!Utils::isUnset($headers->commonHeaders)) {
            $realHeaders = $headers->commonHeaders;
        }
        if (!Utils::isUnset($headers->xAcsDingtalkAccessToken)) {
            @$realHeaders['x-acs-dingtalk-access-token'] = Utils::toJSONString($headers->xAcsDingtalkAccessToken);
        }
        $req = new OpenApiRequest([
            'headers' => $realHeaders,
            'query'   => OpenApiUtilClient::query($query),
        ]);

        return QueryYydSingleMsgDayStatisticalDataResponse::fromMap($this->doROARequest('QueryYydSingleMsgDayStatisticalData', 'datacenter_1.0', 'HTTP', 'GET', 'AK', '/v1.0/datacenter/yydSingleMsgDayDatas', 'json', $req, $runtime));
    }

    /**
     * @param QueryYydSingleMsgMonthStatisticalDataRequest $request
     *
     * @return QueryYydSingleMsgMonthStatisticalDataResponse
     */
    public function queryYydSingleMsgMonthStatisticalData($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = new QueryYydSingleMsgMonthStatisticalDataHeaders([]);

        return $this->queryYydSingleMsgMonthStatisticalDataWithOptions($request, $headers, $runtime);
    }

    /**
     * @param QueryYydSingleMsgMonthStatisticalDataRequest $request
     * @param QueryYydSingleMsgMonthStatisticalDataHeaders $headers
     * @param RuntimeOptions                               $runtime
     *
     * @return QueryYydSingleMsgMonthStatisticalDataResponse
     */
    public function queryYydSingleMsgMonthStatisticalDataWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->statDate)) {
            @$query['statDate'] = $request->statDate;
        }
        $realHeaders = [];
        if (!Utils::isUnset($headers->commonHeaders)) {
            $realHeaders = $headers->commonHeaders;
        }
        if (!Utils::isUnset($headers->xAcsDingtalkAccessToken)) {
            @$realHeaders['x-acs-dingtalk-access-token'] = Utils::toJSONString($headers->xAcsDingtalkAccessToken);
        }
        $req = new OpenApiRequest([
            'headers' => $realHeaders,
            'query'   => OpenApiUtilClient::query($query),
        ]);

        return QueryYydSingleMsgMonthStatisticalDataResponse::fromMap($this->doROARequest('QueryYydSingleMsgMonthStatisticalData', 'datacenter_1.0', 'HTTP', 'GET', 'AK', '/v1.0/datacenter/yydSingleMsgMonthDatas', 'json', $req, $runtime));
    }

    /**
     * @param QueryYydSingleMsgWeekStatisticalDataRequest $request
     *
     * @return QueryYydSingleMsgWeekStatisticalDataResponse
     */
    public function queryYydSingleMsgWeekStatisticalData($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = new QueryYydSingleMsgWeekStatisticalDataHeaders([]);

        return $this->queryYydSingleMsgWeekStatisticalDataWithOptions($request, $headers, $runtime);
    }

    /**
     * @param QueryYydSingleMsgWeekStatisticalDataRequest $request
     * @param QueryYydSingleMsgWeekStatisticalDataHeaders $headers
     * @param RuntimeOptions                              $runtime
     *
     * @return QueryYydSingleMsgWeekStatisticalDataResponse
     */
    public function queryYydSingleMsgWeekStatisticalDataWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->statDate)) {
            @$query['statDate'] = $request->statDate;
        }
        $realHeaders = [];
        if (!Utils::isUnset($headers->commonHeaders)) {
            $realHeaders = $headers->commonHeaders;
        }
        if (!Utils::isUnset($headers->xAcsDingtalkAccessToken)) {
            @$realHeaders['x-acs-dingtalk-access-token'] = Utils::toJSONString($headers->xAcsDingtalkAccessToken);
        }
        $req = new OpenApiRequest([
            'headers' => $realHeaders,
            'query'   => OpenApiUtilClient::query($query),
        ]);

        return QueryYydSingleMsgWeekStatisticalDataResponse::fromMap($this->doROARequest('QueryYydSingleMsgWeekStatisticalData', 'datacenter_1.0', 'HTTP', 'GET', 'AK', '/v1.0/datacenter/yydSingleMsgWeekDatas', 'json', $req, $runtime));
    }

    /**
     * @param QueryYydToatlMsgDayStatisticalDataRequest $request
     *
     * @return QueryYydToatlMsgDayStatisticalDataResponse
     */
    public function queryYydToatlMsgDayStatisticalData($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = new QueryYydToatlMsgDayStatisticalDataHeaders([]);

        return $this->queryYydToatlMsgDayStatisticalDataWithOptions($request, $headers, $runtime);
    }

    /**
     * @param QueryYydToatlMsgDayStatisticalDataRequest $request
     * @param QueryYydToatlMsgDayStatisticalDataHeaders $headers
     * @param RuntimeOptions                            $runtime
     *
     * @return QueryYydToatlMsgDayStatisticalDataResponse
     */
    public function queryYydToatlMsgDayStatisticalDataWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->statDate)) {
            @$query['statDate'] = $request->statDate;
        }
        $realHeaders = [];
        if (!Utils::isUnset($headers->commonHeaders)) {
            $realHeaders = $headers->commonHeaders;
        }
        if (!Utils::isUnset($headers->xAcsDingtalkAccessToken)) {
            @$realHeaders['x-acs-dingtalk-access-token'] = Utils::toJSONString($headers->xAcsDingtalkAccessToken);
        }
        $req = new OpenApiRequest([
            'headers' => $realHeaders,
            'query'   => OpenApiUtilClient::query($query),
        ]);

        return QueryYydToatlMsgDayStatisticalDataResponse::fromMap($this->doROARequest('QueryYydToatlMsgDayStatisticalData', 'datacenter_1.0', 'HTTP', 'GET', 'AK', '/v1.0/datacenter/yydToatlMsgDayDatas', 'json', $req, $runtime));
    }

    /**
     * @param QueryYydToatlMsgMonthStatisticalDataRequest $request
     *
     * @return QueryYydToatlMsgMonthStatisticalDataResponse
     */
    public function queryYydToatlMsgMonthStatisticalData($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = new QueryYydToatlMsgMonthStatisticalDataHeaders([]);

        return $this->queryYydToatlMsgMonthStatisticalDataWithOptions($request, $headers, $runtime);
    }

    /**
     * @param QueryYydToatlMsgMonthStatisticalDataRequest $request
     * @param QueryYydToatlMsgMonthStatisticalDataHeaders $headers
     * @param RuntimeOptions                              $runtime
     *
     * @return QueryYydToatlMsgMonthStatisticalDataResponse
     */
    public function queryYydToatlMsgMonthStatisticalDataWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->statDate)) {
            @$query['statDate'] = $request->statDate;
        }
        $realHeaders = [];
        if (!Utils::isUnset($headers->commonHeaders)) {
            $realHeaders = $headers->commonHeaders;
        }
        if (!Utils::isUnset($headers->xAcsDingtalkAccessToken)) {
            @$realHeaders['x-acs-dingtalk-access-token'] = Utils::toJSONString($headers->xAcsDingtalkAccessToken);
        }
        $req = new OpenApiRequest([
            'headers' => $realHeaders,
            'query'   => OpenApiUtilClient::query($query),
        ]);

        return QueryYydToatlMsgMonthStatisticalDataResponse::fromMap($this->doROARequest('QueryYydToatlMsgMonthStatisticalData', 'datacenter_1.0', 'HTTP', 'GET', 'AK', '/v1.0/datacenter/yydToatlMsgMonthDatas', 'json', $req, $runtime));
    }

    /**
     * @param QueryYydToatlMsgWeekStatisticalDataRequest $request
     *
     * @return QueryYydToatlMsgWeekStatisticalDataResponse
     */
    public function queryYydToatlMsgWeekStatisticalData($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = new QueryYydToatlMsgWeekStatisticalDataHeaders([]);

        return $this->queryYydToatlMsgWeekStatisticalDataWithOptions($request, $headers, $runtime);
    }

    /**
     * @param QueryYydToatlMsgWeekStatisticalDataRequest $request
     * @param QueryYydToatlMsgWeekStatisticalDataHeaders $headers
     * @param RuntimeOptions                             $runtime
     *
     * @return QueryYydToatlMsgWeekStatisticalDataResponse
     */
    public function queryYydToatlMsgWeekStatisticalDataWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->statDate)) {
            @$query['statDate'] = $request->statDate;
        }
        $realHeaders = [];
        if (!Utils::isUnset($headers->commonHeaders)) {
            $realHeaders = $headers->commonHeaders;
        }
        if (!Utils::isUnset($headers->xAcsDingtalkAccessToken)) {
            @$realHeaders['x-acs-dingtalk-access-token'] = Utils::toJSONString($headers->xAcsDingtalkAccessToken);
        }
        $req = new OpenApiRequest([
            'headers' => $realHeaders,
            'query'   => OpenApiUtilClient::query($query),
        ]);

        return QueryYydToatlMsgWeekStatisticalDataResponse::fromMap($this->doROARequest('QueryYydToatlMsgWeekStatisticalData', 'datacenter_1.0', 'HTTP', 'GET', 'AK', '/v1.0/datacenter/yydToatlMsgWeekDatas', 'json', $req, $runtime));
    }

    /**
     * @param QueryYydTodoDayStatisticalDataRequest $request
     *
     * @return QueryYydTodoDayStatisticalDataResponse
     */
    public function queryYydTodoDayStatisticalData($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = new QueryYydTodoDayStatisticalDataHeaders([]);

        return $this->queryYydTodoDayStatisticalDataWithOptions($request, $headers, $runtime);
    }

    /**
     * @param QueryYydTodoDayStatisticalDataRequest $request
     * @param QueryYydTodoDayStatisticalDataHeaders $headers
     * @param RuntimeOptions                        $runtime
     *
     * @return QueryYydTodoDayStatisticalDataResponse
     */
    public function queryYydTodoDayStatisticalDataWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->statDate)) {
            @$query['statDate'] = $request->statDate;
        }
        $realHeaders = [];
        if (!Utils::isUnset($headers->commonHeaders)) {
            $realHeaders = $headers->commonHeaders;
        }
        if (!Utils::isUnset($headers->xAcsDingtalkAccessToken)) {
            @$realHeaders['x-acs-dingtalk-access-token'] = Utils::toJSONString($headers->xAcsDingtalkAccessToken);
        }
        $req = new OpenApiRequest([
            'headers' => $realHeaders,
            'query'   => OpenApiUtilClient::query($query),
        ]);

        return QueryYydTodoDayStatisticalDataResponse::fromMap($this->doROARequest('QueryYydTodoDayStatisticalData', 'datacenter_1.0', 'HTTP', 'GET', 'AK', '/v1.0/datacenter/yydTodoDayDatas', 'json', $req, $runtime));
    }

    /**
     * @param QueryYydTodoMonthStatisticalDataRequest $request
     *
     * @return QueryYydTodoMonthStatisticalDataResponse
     */
    public function queryYydTodoMonthStatisticalData($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = new QueryYydTodoMonthStatisticalDataHeaders([]);

        return $this->queryYydTodoMonthStatisticalDataWithOptions($request, $headers, $runtime);
    }

    /**
     * @param QueryYydTodoMonthStatisticalDataRequest $request
     * @param QueryYydTodoMonthStatisticalDataHeaders $headers
     * @param RuntimeOptions                          $runtime
     *
     * @return QueryYydTodoMonthStatisticalDataResponse
     */
    public function queryYydTodoMonthStatisticalDataWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->statDate)) {
            @$query['statDate'] = $request->statDate;
        }
        $realHeaders = [];
        if (!Utils::isUnset($headers->commonHeaders)) {
            $realHeaders = $headers->commonHeaders;
        }
        if (!Utils::isUnset($headers->xAcsDingtalkAccessToken)) {
            @$realHeaders['x-acs-dingtalk-access-token'] = Utils::toJSONString($headers->xAcsDingtalkAccessToken);
        }
        $req = new OpenApiRequest([
            'headers' => $realHeaders,
            'query'   => OpenApiUtilClient::query($query),
        ]);

        return QueryYydTodoMonthStatisticalDataResponse::fromMap($this->doROARequest('QueryYydTodoMonthStatisticalData', 'datacenter_1.0', 'HTTP', 'GET', 'AK', '/v1.0/datacenter/yydTodoMonthDatas', 'json', $req, $runtime));
    }

    /**
     * @param QueryYydTodoWeekStatisticalDataRequest $request
     *
     * @return QueryYydTodoWeekStatisticalDataResponse
     */
    public function queryYydTodoWeekStatisticalData($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = new QueryYydTodoWeekStatisticalDataHeaders([]);

        return $this->queryYydTodoWeekStatisticalDataWithOptions($request, $headers, $runtime);
    }

    /**
     * @param QueryYydTodoWeekStatisticalDataRequest $request
     * @param QueryYydTodoWeekStatisticalDataHeaders $headers
     * @param RuntimeOptions                         $runtime
     *
     * @return QueryYydTodoWeekStatisticalDataResponse
     */
    public function queryYydTodoWeekStatisticalDataWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->statDate)) {
            @$query['statDate'] = $request->statDate;
        }
        $realHeaders = [];
        if (!Utils::isUnset($headers->commonHeaders)) {
            $realHeaders = $headers->commonHeaders;
        }
        if (!Utils::isUnset($headers->xAcsDingtalkAccessToken)) {
            @$realHeaders['x-acs-dingtalk-access-token'] = Utils::toJSONString($headers->xAcsDingtalkAccessToken);
        }
        $req = new OpenApiRequest([
            'headers' => $realHeaders,
            'query'   => OpenApiUtilClient::query($query),
        ]);

        return QueryYydTodoWeekStatisticalDataResponse::fromMap($this->doROARequest('QueryYydTodoWeekStatisticalData', 'datacenter_1.0', 'HTTP', 'GET', 'AK', '/v1.0/datacenter/yydTodoWeekDatas', 'json', $req, $runtime));
    }

    /**
     * @param QueryYydTotalDayStatisticalDataRequest $request
     *
     * @return QueryYydTotalDayStatisticalDataResponse
     */
    public function queryYydTotalDayStatisticalData($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = new QueryYydTotalDayStatisticalDataHeaders([]);

        return $this->queryYydTotalDayStatisticalDataWithOptions($request, $headers, $runtime);
    }

    /**
     * @param QueryYydTotalDayStatisticalDataRequest $request
     * @param QueryYydTotalDayStatisticalDataHeaders $headers
     * @param RuntimeOptions                         $runtime
     *
     * @return QueryYydTotalDayStatisticalDataResponse
     */
    public function queryYydTotalDayStatisticalDataWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->statDate)) {
            @$query['statDate'] = $request->statDate;
        }
        $realHeaders = [];
        if (!Utils::isUnset($headers->commonHeaders)) {
            $realHeaders = $headers->commonHeaders;
        }
        if (!Utils::isUnset($headers->xAcsDingtalkAccessToken)) {
            @$realHeaders['x-acs-dingtalk-access-token'] = Utils::toJSONString($headers->xAcsDingtalkAccessToken);
        }
        $req = new OpenApiRequest([
            'headers' => $realHeaders,
            'query'   => OpenApiUtilClient::query($query),
        ]);

        return QueryYydTotalDayStatisticalDataResponse::fromMap($this->doROARequest('QueryYydTotalDayStatisticalData', 'datacenter_1.0', 'HTTP', 'GET', 'AK', '/v1.0/datacenter/yydTotalDayDatas', 'json', $req, $runtime));
    }

    /**
     * @param QueryYydTotalMonthStatisticalDataRequest $request
     *
     * @return QueryYydTotalMonthStatisticalDataResponse
     */
    public function queryYydTotalMonthStatisticalData($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = new QueryYydTotalMonthStatisticalDataHeaders([]);

        return $this->queryYydTotalMonthStatisticalDataWithOptions($request, $headers, $runtime);
    }

    /**
     * @param QueryYydTotalMonthStatisticalDataRequest $request
     * @param QueryYydTotalMonthStatisticalDataHeaders $headers
     * @param RuntimeOptions                           $runtime
     *
     * @return QueryYydTotalMonthStatisticalDataResponse
     */
    public function queryYydTotalMonthStatisticalDataWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->statDate)) {
            @$query['statDate'] = $request->statDate;
        }
        $realHeaders = [];
        if (!Utils::isUnset($headers->commonHeaders)) {
            $realHeaders = $headers->commonHeaders;
        }
        if (!Utils::isUnset($headers->xAcsDingtalkAccessToken)) {
            @$realHeaders['x-acs-dingtalk-access-token'] = Utils::toJSONString($headers->xAcsDingtalkAccessToken);
        }
        $req = new OpenApiRequest([
            'headers' => $realHeaders,
            'query'   => OpenApiUtilClient::query($query),
        ]);

        return QueryYydTotalMonthStatisticalDataResponse::fromMap($this->doROARequest('QueryYydTotalMonthStatisticalData', 'datacenter_1.0', 'HTTP', 'GET', 'AK', '/v1.0/datacenter/yydTotalMonthDatas', 'json', $req, $runtime));
    }

    /**
     * @param QueryYydTotalStdStatisticalDataRequest $request
     *
     * @return QueryYydTotalStdStatisticalDataResponse
     */
    public function queryYydTotalStdStatisticalData($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = new QueryYydTotalStdStatisticalDataHeaders([]);

        return $this->queryYydTotalStdStatisticalDataWithOptions($request, $headers, $runtime);
    }

    /**
     * @param QueryYydTotalStdStatisticalDataRequest $request
     * @param QueryYydTotalStdStatisticalDataHeaders $headers
     * @param RuntimeOptions                         $runtime
     *
     * @return QueryYydTotalStdStatisticalDataResponse
     */
    public function queryYydTotalStdStatisticalDataWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->statDate)) {
            @$query['statDate'] = $request->statDate;
        }
        $realHeaders = [];
        if (!Utils::isUnset($headers->commonHeaders)) {
            $realHeaders = $headers->commonHeaders;
        }
        if (!Utils::isUnset($headers->xAcsDingtalkAccessToken)) {
            @$realHeaders['x-acs-dingtalk-access-token'] = Utils::toJSONString($headers->xAcsDingtalkAccessToken);
        }
        $req = new OpenApiRequest([
            'headers' => $realHeaders,
            'query'   => OpenApiUtilClient::query($query),
        ]);

        return QueryYydTotalStdStatisticalDataResponse::fromMap($this->doROARequest('QueryYydTotalStdStatisticalData', 'datacenter_1.0', 'HTTP', 'GET', 'AK', '/v1.0/datacenter/yydTotalStdDatas', 'json', $req, $runtime));
    }

    /**
     * @param QueryYydTotalWeekStatisticalDataRequest $request
     *
     * @return QueryYydTotalWeekStatisticalDataResponse
     */
    public function queryYydTotalWeekStatisticalData($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = new QueryYydTotalWeekStatisticalDataHeaders([]);

        return $this->queryYydTotalWeekStatisticalDataWithOptions($request, $headers, $runtime);
    }

    /**
     * @param QueryYydTotalWeekStatisticalDataRequest $request
     * @param QueryYydTotalWeekStatisticalDataHeaders $headers
     * @param RuntimeOptions                          $runtime
     *
     * @return QueryYydTotalWeekStatisticalDataResponse
     */
    public function queryYydTotalWeekStatisticalDataWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->statDate)) {
            @$query['statDate'] = $request->statDate;
        }
        $realHeaders = [];
        if (!Utils::isUnset($headers->commonHeaders)) {
            $realHeaders = $headers->commonHeaders;
        }
        if (!Utils::isUnset($headers->xAcsDingtalkAccessToken)) {
            @$realHeaders['x-acs-dingtalk-access-token'] = Utils::toJSONString($headers->xAcsDingtalkAccessToken);
        }
        $req = new OpenApiRequest([
            'headers' => $realHeaders,
            'query'   => OpenApiUtilClient::query($query),
        ]);

        return QueryYydTotalWeekStatisticalDataResponse::fromMap($this->doROARequest('QueryYydTotalWeekStatisticalData', 'datacenter_1.0', 'HTTP', 'GET', 'AK', '/v1.0/datacenter/yydTotalWeekDatas', 'json', $req, $runtime));
    }
}
