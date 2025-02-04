<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dingtalk\Vim_1_0;

use AlibabaCloud\OpenApiUtil\OpenApiUtilClient;
use AlibabaCloud\SDK\Dingtalk\Vim_1_0\Models\AddGroupMemberHeaders;
use AlibabaCloud\SDK\Dingtalk\Vim_1_0\Models\AddGroupMemberRequest;
use AlibabaCloud\SDK\Dingtalk\Vim_1_0\Models\AddGroupMemberResponse;
use AlibabaCloud\SDK\Dingtalk\Vim_1_0\Models\AutoOpenDingTalkConnectHeaders;
use AlibabaCloud\SDK\Dingtalk\Vim_1_0\Models\AutoOpenDingTalkConnectResponse;
use AlibabaCloud\SDK\Dingtalk\Vim_1_0\Models\BatchQueryGroupMemberHeaders;
use AlibabaCloud\SDK\Dingtalk\Vim_1_0\Models\BatchQueryGroupMemberRequest;
use AlibabaCloud\SDK\Dingtalk\Vim_1_0\Models\BatchQueryGroupMemberResponse;
use AlibabaCloud\SDK\Dingtalk\Vim_1_0\Models\CardTemplateBuildActionHeaders;
use AlibabaCloud\SDK\Dingtalk\Vim_1_0\Models\CardTemplateBuildActionRequest;
use AlibabaCloud\SDK\Dingtalk\Vim_1_0\Models\CardTemplateBuildActionResponse;
use AlibabaCloud\SDK\Dingtalk\Vim_1_0\Models\ChatIdToOpenConversationIdHeaders;
use AlibabaCloud\SDK\Dingtalk\Vim_1_0\Models\ChatIdToOpenConversationIdResponse;
use AlibabaCloud\SDK\Dingtalk\Vim_1_0\Models\ChatSubAdminUpdateHeaders;
use AlibabaCloud\SDK\Dingtalk\Vim_1_0\Models\ChatSubAdminUpdateRequest;
use AlibabaCloud\SDK\Dingtalk\Vim_1_0\Models\ChatSubAdminUpdateResponse;
use AlibabaCloud\SDK\Dingtalk\Vim_1_0\Models\CreateGroupConversationHeaders;
use AlibabaCloud\SDK\Dingtalk\Vim_1_0\Models\CreateGroupConversationRequest;
use AlibabaCloud\SDK\Dingtalk\Vim_1_0\Models\CreateGroupConversationResponse;
use AlibabaCloud\SDK\Dingtalk\Vim_1_0\Models\CreateInterconnectionHeaders;
use AlibabaCloud\SDK\Dingtalk\Vim_1_0\Models\CreateInterconnectionRequest;
use AlibabaCloud\SDK\Dingtalk\Vim_1_0\Models\CreateInterconnectionResponse;
use AlibabaCloud\SDK\Dingtalk\Vim_1_0\Models\GetConversationUrlHeaders;
use AlibabaCloud\SDK\Dingtalk\Vim_1_0\Models\GetConversationUrlRequest;
use AlibabaCloud\SDK\Dingtalk\Vim_1_0\Models\GetConversationUrlResponse;
use AlibabaCloud\SDK\Dingtalk\Vim_1_0\Models\GetInterconnectionUrlHeaders;
use AlibabaCloud\SDK\Dingtalk\Vim_1_0\Models\GetInterconnectionUrlRequest;
use AlibabaCloud\SDK\Dingtalk\Vim_1_0\Models\GetInterconnectionUrlResponse;
use AlibabaCloud\SDK\Dingtalk\Vim_1_0\Models\GetSceneGroupInfoHeaders;
use AlibabaCloud\SDK\Dingtalk\Vim_1_0\Models\GetSceneGroupInfoRequest;
use AlibabaCloud\SDK\Dingtalk\Vim_1_0\Models\GetSceneGroupInfoResponse;
use AlibabaCloud\SDK\Dingtalk\Vim_1_0\Models\GetSceneGroupMembersHeaders;
use AlibabaCloud\SDK\Dingtalk\Vim_1_0\Models\GetSceneGroupMembersRequest;
use AlibabaCloud\SDK\Dingtalk\Vim_1_0\Models\GetSceneGroupMembersResponse;
use AlibabaCloud\SDK\Dingtalk\Vim_1_0\Models\GroupBanWordsHeaders;
use AlibabaCloud\SDK\Dingtalk\Vim_1_0\Models\GroupBanWordsRequest;
use AlibabaCloud\SDK\Dingtalk\Vim_1_0\Models\GroupBanWordsResponse;
use AlibabaCloud\SDK\Dingtalk\Vim_1_0\Models\GroupCapacityInquiryHeaders;
use AlibabaCloud\SDK\Dingtalk\Vim_1_0\Models\GroupCapacityInquiryRequest;
use AlibabaCloud\SDK\Dingtalk\Vim_1_0\Models\GroupCapacityInquiryResponse;
use AlibabaCloud\SDK\Dingtalk\Vim_1_0\Models\GroupCapacityOrderConfirmHeaders;
use AlibabaCloud\SDK\Dingtalk\Vim_1_0\Models\GroupCapacityOrderConfirmRequest;
use AlibabaCloud\SDK\Dingtalk\Vim_1_0\Models\GroupCapacityOrderConfirmResponse;
use AlibabaCloud\SDK\Dingtalk\Vim_1_0\Models\GroupCapacityOrderPlaceHeaders;
use AlibabaCloud\SDK\Dingtalk\Vim_1_0\Models\GroupCapacityOrderPlaceRequest;
use AlibabaCloud\SDK\Dingtalk\Vim_1_0\Models\GroupCapacityOrderPlaceResponse;
use AlibabaCloud\SDK\Dingtalk\Vim_1_0\Models\GroupManageQueryHeaders;
use AlibabaCloud\SDK\Dingtalk\Vim_1_0\Models\GroupManageQueryRequest;
use AlibabaCloud\SDK\Dingtalk\Vim_1_0\Models\GroupManageQueryResponse;
use AlibabaCloud\SDK\Dingtalk\Vim_1_0\Models\GroupManageReduceHeaders;
use AlibabaCloud\SDK\Dingtalk\Vim_1_0\Models\GroupManageReduceRequest;
use AlibabaCloud\SDK\Dingtalk\Vim_1_0\Models\GroupManageReduceResponse;
use AlibabaCloud\SDK\Dingtalk\Vim_1_0\Models\InteractiveCardCreateInstanceHeaders;
use AlibabaCloud\SDK\Dingtalk\Vim_1_0\Models\InteractiveCardCreateInstanceRequest;
use AlibabaCloud\SDK\Dingtalk\Vim_1_0\Models\InteractiveCardCreateInstanceResponse;
use AlibabaCloud\SDK\Dingtalk\Vim_1_0\Models\QueryGroupMemberHeaders;
use AlibabaCloud\SDK\Dingtalk\Vim_1_0\Models\QueryGroupMemberRequest;
use AlibabaCloud\SDK\Dingtalk\Vim_1_0\Models\QueryGroupMemberResponse;
use AlibabaCloud\SDK\Dingtalk\Vim_1_0\Models\QueryGroupMuteStatusHeaders;
use AlibabaCloud\SDK\Dingtalk\Vim_1_0\Models\QueryGroupMuteStatusRequest;
use AlibabaCloud\SDK\Dingtalk\Vim_1_0\Models\QueryGroupMuteStatusResponse;
use AlibabaCloud\SDK\Dingtalk\Vim_1_0\Models\QueryMembersOfGroupRoleHeaders;
use AlibabaCloud\SDK\Dingtalk\Vim_1_0\Models\QueryMembersOfGroupRoleRequest;
use AlibabaCloud\SDK\Dingtalk\Vim_1_0\Models\QueryMembersOfGroupRoleResponse;
use AlibabaCloud\SDK\Dingtalk\Vim_1_0\Models\QuerySingleGroupHeaders;
use AlibabaCloud\SDK\Dingtalk\Vim_1_0\Models\QuerySingleGroupRequest;
use AlibabaCloud\SDK\Dingtalk\Vim_1_0\Models\QuerySingleGroupResponse;
use AlibabaCloud\SDK\Dingtalk\Vim_1_0\Models\QueryUnReadMessageHeaders;
use AlibabaCloud\SDK\Dingtalk\Vim_1_0\Models\QueryUnReadMessageRequest;
use AlibabaCloud\SDK\Dingtalk\Vim_1_0\Models\QueryUnReadMessageResponse;
use AlibabaCloud\SDK\Dingtalk\Vim_1_0\Models\RemoveGroupMemberHeaders;
use AlibabaCloud\SDK\Dingtalk\Vim_1_0\Models\RemoveGroupMemberRequest;
use AlibabaCloud\SDK\Dingtalk\Vim_1_0\Models\RemoveGroupMemberResponse;
use AlibabaCloud\SDK\Dingtalk\Vim_1_0\Models\SendDingMessageHeaders;
use AlibabaCloud\SDK\Dingtalk\Vim_1_0\Models\SendDingMessageRequest;
use AlibabaCloud\SDK\Dingtalk\Vim_1_0\Models\SendDingMessageResponse;
use AlibabaCloud\SDK\Dingtalk\Vim_1_0\Models\SendInteractiveCardHeaders;
use AlibabaCloud\SDK\Dingtalk\Vim_1_0\Models\SendInteractiveCardRequest;
use AlibabaCloud\SDK\Dingtalk\Vim_1_0\Models\SendInteractiveCardResponse;
use AlibabaCloud\SDK\Dingtalk\Vim_1_0\Models\SendMessageHeaders;
use AlibabaCloud\SDK\Dingtalk\Vim_1_0\Models\SendMessageRequest;
use AlibabaCloud\SDK\Dingtalk\Vim_1_0\Models\SendMessageResponse;
use AlibabaCloud\SDK\Dingtalk\Vim_1_0\Models\SendRobotInteractiveCardHeaders;
use AlibabaCloud\SDK\Dingtalk\Vim_1_0\Models\SendRobotInteractiveCardRequest;
use AlibabaCloud\SDK\Dingtalk\Vim_1_0\Models\SendRobotInteractiveCardResponse;
use AlibabaCloud\SDK\Dingtalk\Vim_1_0\Models\SendTemplateInteractiveCardHeaders;
use AlibabaCloud\SDK\Dingtalk\Vim_1_0\Models\SendTemplateInteractiveCardRequest;
use AlibabaCloud\SDK\Dingtalk\Vim_1_0\Models\SendTemplateInteractiveCardResponse;
use AlibabaCloud\SDK\Dingtalk\Vim_1_0\Models\TopboxCloseHeaders;
use AlibabaCloud\SDK\Dingtalk\Vim_1_0\Models\TopboxCloseRequest;
use AlibabaCloud\SDK\Dingtalk\Vim_1_0\Models\TopboxCloseResponse;
use AlibabaCloud\SDK\Dingtalk\Vim_1_0\Models\TopboxOpenHeaders;
use AlibabaCloud\SDK\Dingtalk\Vim_1_0\Models\TopboxOpenRequest;
use AlibabaCloud\SDK\Dingtalk\Vim_1_0\Models\TopboxOpenResponse;
use AlibabaCloud\SDK\Dingtalk\Vim_1_0\Models\UpdateGroupPermissionHeaders;
use AlibabaCloud\SDK\Dingtalk\Vim_1_0\Models\UpdateGroupPermissionRequest;
use AlibabaCloud\SDK\Dingtalk\Vim_1_0\Models\UpdateGroupPermissionResponse;
use AlibabaCloud\SDK\Dingtalk\Vim_1_0\Models\UpdateGroupSubAdminHeaders;
use AlibabaCloud\SDK\Dingtalk\Vim_1_0\Models\UpdateGroupSubAdminRequest;
use AlibabaCloud\SDK\Dingtalk\Vim_1_0\Models\UpdateGroupSubAdminResponse;
use AlibabaCloud\SDK\Dingtalk\Vim_1_0\Models\UpdateInteractiveCardHeaders;
use AlibabaCloud\SDK\Dingtalk\Vim_1_0\Models\UpdateInteractiveCardRequest;
use AlibabaCloud\SDK\Dingtalk\Vim_1_0\Models\UpdateInteractiveCardResponse;
use AlibabaCloud\SDK\Dingtalk\Vim_1_0\Models\UpdateMemberBanWordsHeaders;
use AlibabaCloud\SDK\Dingtalk\Vim_1_0\Models\UpdateMemberBanWordsRequest;
use AlibabaCloud\SDK\Dingtalk\Vim_1_0\Models\UpdateMemberBanWordsResponse;
use AlibabaCloud\SDK\Dingtalk\Vim_1_0\Models\UpdateMemberGroupNickHeaders;
use AlibabaCloud\SDK\Dingtalk\Vim_1_0\Models\UpdateMemberGroupNickRequest;
use AlibabaCloud\SDK\Dingtalk\Vim_1_0\Models\UpdateMemberGroupNickResponse;
use AlibabaCloud\SDK\Dingtalk\Vim_1_0\Models\UpdateRobotInteractiveCardHeaders;
use AlibabaCloud\SDK\Dingtalk\Vim_1_0\Models\UpdateRobotInteractiveCardRequest;
use AlibabaCloud\SDK\Dingtalk\Vim_1_0\Models\UpdateRobotInteractiveCardResponse;
use AlibabaCloud\SDK\Dingtalk\Vim_1_0\Models\UpdateTheGroupRolesOfGroupMemberHeaders;
use AlibabaCloud\SDK\Dingtalk\Vim_1_0\Models\UpdateTheGroupRolesOfGroupMemberRequest;
use AlibabaCloud\SDK\Dingtalk\Vim_1_0\Models\UpdateTheGroupRolesOfGroupMemberResponse;
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
     * @return AutoOpenDingTalkConnectResponse
     */
    public function autoOpenDingTalkConnect()
    {
        $runtime = new RuntimeOptions([]);
        $headers = new AutoOpenDingTalkConnectHeaders([]);

        return $this->autoOpenDingTalkConnectWithOptions($headers, $runtime);
    }

    /**
     * @param AutoOpenDingTalkConnectHeaders $headers
     * @param RuntimeOptions                 $runtime
     *
     * @return AutoOpenDingTalkConnectResponse
     */
    public function autoOpenDingTalkConnectWithOptions($headers, $runtime)
    {
        $realHeaders = [];
        if (!Utils::isUnset($headers->commonHeaders)) {
            $realHeaders = $headers->commonHeaders;
        }
        if (!Utils::isUnset($headers->xAcsDingtalkAccessToken)) {
            @$realHeaders['x-acs-dingtalk-access-token'] = Utils::toJSONString($headers->xAcsDingtalkAccessToken);
        }
        $req = new OpenApiRequest([
            'headers' => $realHeaders,
        ]);

        return AutoOpenDingTalkConnectResponse::fromMap($this->doROARequest('AutoOpenDingTalkConnect', 'im_1.0', 'HTTP', 'POST', 'AK', '/v1.0/im/interconnections/apps/open', 'json', $req, $runtime));
    }

    /**
     * @param BatchQueryGroupMemberRequest $request
     *
     * @return BatchQueryGroupMemberResponse
     */
    public function batchQueryGroupMember($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = new BatchQueryGroupMemberHeaders([]);

        return $this->batchQueryGroupMemberWithOptions($request, $headers, $runtime);
    }

    /**
     * @param BatchQueryGroupMemberRequest $request
     * @param BatchQueryGroupMemberHeaders $headers
     * @param RuntimeOptions               $runtime
     *
     * @return BatchQueryGroupMemberResponse
     */
    public function batchQueryGroupMemberWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->coolAppCode)) {
            @$body['coolAppCode'] = $request->coolAppCode;
        }
        if (!Utils::isUnset($request->maxResults)) {
            @$body['maxResults'] = $request->maxResults;
        }
        if (!Utils::isUnset($request->nextToken)) {
            @$body['nextToken'] = $request->nextToken;
        }
        if (!Utils::isUnset($request->openConversationId)) {
            @$body['openConversationId'] = $request->openConversationId;
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

        return BatchQueryGroupMemberResponse::fromMap($this->doROARequest('BatchQueryGroupMember', 'im_1.0', 'HTTP', 'POST', 'AK', '/v1.0/im/sceneGroups/members/batchQuery', 'json', $req, $runtime));
    }

    /**
     * @param CardTemplateBuildActionRequest $request
     *
     * @return CardTemplateBuildActionResponse
     */
    public function cardTemplateBuildAction($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = new CardTemplateBuildActionHeaders([]);

        return $this->cardTemplateBuildActionWithOptions($request, $headers, $runtime);
    }

    /**
     * @param CardTemplateBuildActionRequest $request
     * @param CardTemplateBuildActionHeaders $headers
     * @param RuntimeOptions                 $runtime
     *
     * @return CardTemplateBuildActionResponse
     */
    public function cardTemplateBuildActionWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->action)) {
            @$body['action'] = $request->action;
        }
        if (!Utils::isUnset($request->cardTemplateJson)) {
            @$body['cardTemplateJson'] = $request->cardTemplateJson;
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

        return CardTemplateBuildActionResponse::fromMap($this->doROARequest('CardTemplateBuildAction', 'im_1.0', 'HTTP', 'POST', 'AK', '/v1.0/im/interactiveCards/templates/buildAction', 'json', $req, $runtime));
    }

    /**
     * @param string $chatId
     *
     * @return ChatIdToOpenConversationIdResponse
     */
    public function chatIdToOpenConversationId($chatId)
    {
        $runtime = new RuntimeOptions([]);
        $headers = new ChatIdToOpenConversationIdHeaders([]);

        return $this->chatIdToOpenConversationIdWithOptions($chatId, $headers, $runtime);
    }

    /**
     * @param string                            $chatId
     * @param ChatIdToOpenConversationIdHeaders $headers
     * @param RuntimeOptions                    $runtime
     *
     * @return ChatIdToOpenConversationIdResponse
     */
    public function chatIdToOpenConversationIdWithOptions($chatId, $headers, $runtime)
    {
        $chatId      = OpenApiUtilClient::getEncodeParam($chatId);
        $realHeaders = [];
        if (!Utils::isUnset($headers->commonHeaders)) {
            $realHeaders = $headers->commonHeaders;
        }
        if (!Utils::isUnset($headers->xAcsDingtalkAccessToken)) {
            @$realHeaders['x-acs-dingtalk-access-token'] = Utils::toJSONString($headers->xAcsDingtalkAccessToken);
        }
        $req = new OpenApiRequest([
            'headers' => $realHeaders,
        ]);

        return ChatIdToOpenConversationIdResponse::fromMap($this->doROARequest('ChatIdToOpenConversationId', 'im_1.0', 'HTTP', 'POST', 'AK', '/v1.0/im/chat/' . $chatId . '/convertToOpenConversationId', 'json', $req, $runtime));
    }

    /**
     * @param ChatSubAdminUpdateRequest $request
     *
     * @return ChatSubAdminUpdateResponse
     */
    public function chatSubAdminUpdate($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = new ChatSubAdminUpdateHeaders([]);

        return $this->chatSubAdminUpdateWithOptions($request, $headers, $runtime);
    }

    /**
     * @param ChatSubAdminUpdateRequest $request
     * @param ChatSubAdminUpdateHeaders $headers
     * @param RuntimeOptions            $runtime
     *
     * @return ChatSubAdminUpdateResponse
     */
    public function chatSubAdminUpdateWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->openConversationId)) {
            @$body['openConversationId'] = $request->openConversationId;
        }
        if (!Utils::isUnset($request->role)) {
            @$body['role'] = $request->role;
        }
        if (!Utils::isUnset($request->userIds)) {
            @$body['userIds'] = $request->userIds;
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

        return ChatSubAdminUpdateResponse::fromMap($this->doROARequest('ChatSubAdminUpdate', 'im_1.0', 'HTTP', 'POST', 'AK', '/v1.0/im/subAdministrators', 'json', $req, $runtime));
    }

    /**
     * @param CreateGroupConversationRequest $request
     *
     * @return CreateGroupConversationResponse
     */
    public function createGroupConversation($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = new CreateGroupConversationHeaders([]);

        return $this->createGroupConversationWithOptions($request, $headers, $runtime);
    }

    /**
     * @param CreateGroupConversationRequest $request
     * @param CreateGroupConversationHeaders $headers
     * @param RuntimeOptions                 $runtime
     *
     * @return CreateGroupConversationResponse
     */
    public function createGroupConversationWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->appUserIds)) {
            @$body['appUserIds'] = $request->appUserIds;
        }
        if (!Utils::isUnset($request->groupAvatar)) {
            @$body['groupAvatar'] = $request->groupAvatar;
        }
        if (!Utils::isUnset($request->groupName)) {
            @$body['groupName'] = $request->groupName;
        }
        if (!Utils::isUnset($request->groupOwnerId)) {
            @$body['groupOwnerId'] = $request->groupOwnerId;
        }
        if (!Utils::isUnset($request->groupTemplateId)) {
            @$body['groupTemplateId'] = $request->groupTemplateId;
        }
        if (!Utils::isUnset($request->operatorId)) {
            @$body['operatorId'] = $request->operatorId;
        }
        if (!Utils::isUnset($request->userIds)) {
            @$body['userIds'] = $request->userIds;
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

        return CreateGroupConversationResponse::fromMap($this->doROARequest('CreateGroupConversation', 'im_1.0', 'HTTP', 'POST', 'AK', '/v1.0/im/interconnections/groups', 'json', $req, $runtime));
    }

    /**
     * @param CreateInterconnectionRequest $request
     *
     * @return CreateInterconnectionResponse
     */
    public function createInterconnection($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = new CreateInterconnectionHeaders([]);

        return $this->createInterconnectionWithOptions($request, $headers, $runtime);
    }

    /**
     * @param CreateInterconnectionRequest $request
     * @param CreateInterconnectionHeaders $headers
     * @param RuntimeOptions               $runtime
     *
     * @return CreateInterconnectionResponse
     */
    public function createInterconnectionWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->interconnections)) {
            @$body['interconnections'] = $request->interconnections;
        }
        if (!Utils::isUnset($request->signature)) {
            @$body['signature'] = $request->signature;
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

        return CreateInterconnectionResponse::fromMap($this->doROARequest('CreateInterconnection', 'im_1.0', 'HTTP', 'POST', 'AK', '/v1.0/im/interconnections', 'json', $req, $runtime));
    }

    /**
     * @param GetConversationUrlRequest $request
     *
     * @return GetConversationUrlResponse
     */
    public function getConversationUrl($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = new GetConversationUrlHeaders([]);

        return $this->getConversationUrlWithOptions($request, $headers, $runtime);
    }

    /**
     * @param GetConversationUrlRequest $request
     * @param GetConversationUrlHeaders $headers
     * @param RuntimeOptions            $runtime
     *
     * @return GetConversationUrlResponse
     */
    public function getConversationUrlWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->appUserId)) {
            @$body['appUserId'] = $request->appUserId;
        }
        if (!Utils::isUnset($request->channelCode)) {
            @$body['channelCode'] = $request->channelCode;
        }
        if (!Utils::isUnset($request->openConversationId)) {
            @$body['openConversationId'] = $request->openConversationId;
        }
        if (!Utils::isUnset($request->sourceCode)) {
            @$body['sourceCode'] = $request->sourceCode;
        }
        if (!Utils::isUnset($request->userId)) {
            @$body['userId'] = $request->userId;
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

        return GetConversationUrlResponse::fromMap($this->doROARequest('GetConversationUrl', 'im_1.0', 'HTTP', 'POST', 'AK', '/v1.0/im/conversations/urls', 'json', $req, $runtime));
    }

    /**
     * @param GetInterconnectionUrlRequest $request
     *
     * @return GetInterconnectionUrlResponse
     */
    public function getInterconnectionUrl($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = new GetInterconnectionUrlHeaders([]);

        return $this->getInterconnectionUrlWithOptions($request, $headers, $runtime);
    }

    /**
     * @param GetInterconnectionUrlRequest $request
     * @param GetInterconnectionUrlHeaders $headers
     * @param RuntimeOptions               $runtime
     *
     * @return GetInterconnectionUrlResponse
     */
    public function getInterconnectionUrlWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->appUserAvatar)) {
            @$body['appUserAvatar'] = $request->appUserAvatar;
        }
        if (!Utils::isUnset($request->appUserAvatarType)) {
            @$body['appUserAvatarType'] = $request->appUserAvatarType;
        }
        if (!Utils::isUnset($request->appUserId)) {
            @$body['appUserId'] = $request->appUserId;
        }
        if (!Utils::isUnset($request->appUserMobileNumber)) {
            @$body['appUserMobileNumber'] = $request->appUserMobileNumber;
        }
        if (!Utils::isUnset($request->appUserName)) {
            @$body['appUserName'] = $request->appUserName;
        }
        if (!Utils::isUnset($request->msgPageType)) {
            @$body['msgPageType'] = $request->msgPageType;
        }
        if (!Utils::isUnset($request->qrCode)) {
            @$body['qrCode'] = $request->qrCode;
        }
        if (!Utils::isUnset($request->signature)) {
            @$body['signature'] = $request->signature;
        }
        if (!Utils::isUnset($request->sourceCode)) {
            @$body['sourceCode'] = $request->sourceCode;
        }
        if (!Utils::isUnset($request->sourceType)) {
            @$body['sourceType'] = $request->sourceType;
        }
        if (!Utils::isUnset($request->userId)) {
            @$body['userId'] = $request->userId;
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

        return GetInterconnectionUrlResponse::fromMap($this->doROARequest('GetInterconnectionUrl', 'im_1.0', 'HTTP', 'POST', 'AK', '/v1.0/im/interconnections/sessions/urls', 'json', $req, $runtime));
    }

    /**
     * @param GetSceneGroupInfoRequest $request
     *
     * @return GetSceneGroupInfoResponse
     */
    public function getSceneGroupInfo($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = new GetSceneGroupInfoHeaders([]);

        return $this->getSceneGroupInfoWithOptions($request, $headers, $runtime);
    }

    /**
     * @param GetSceneGroupInfoRequest $request
     * @param GetSceneGroupInfoHeaders $headers
     * @param RuntimeOptions           $runtime
     *
     * @return GetSceneGroupInfoResponse
     */
    public function getSceneGroupInfoWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->coolAppCode)) {
            @$body['coolAppCode'] = $request->coolAppCode;
        }
        if (!Utils::isUnset($request->openConversationId)) {
            @$body['openConversationId'] = $request->openConversationId;
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

        return GetSceneGroupInfoResponse::fromMap($this->doROARequest('GetSceneGroupInfo', 'im_1.0', 'HTTP', 'POST', 'AK', '/v1.0/im/sceneGroups/query', 'json', $req, $runtime));
    }

    /**
     * @param GetSceneGroupMembersRequest $request
     *
     * @return GetSceneGroupMembersResponse
     */
    public function getSceneGroupMembers($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = new GetSceneGroupMembersHeaders([]);

        return $this->getSceneGroupMembersWithOptions($request, $headers, $runtime);
    }

    /**
     * @param GetSceneGroupMembersRequest $request
     * @param GetSceneGroupMembersHeaders $headers
     * @param RuntimeOptions              $runtime
     *
     * @return GetSceneGroupMembersResponse
     */
    public function getSceneGroupMembersWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->coolAppCode)) {
            @$body['coolAppCode'] = $request->coolAppCode;
        }
        if (!Utils::isUnset($request->cursor)) {
            @$body['cursor'] = $request->cursor;
        }
        if (!Utils::isUnset($request->openConversationId)) {
            @$body['openConversationId'] = $request->openConversationId;
        }
        if (!Utils::isUnset($request->size)) {
            @$body['size'] = $request->size;
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

        return GetSceneGroupMembersResponse::fromMap($this->doROARequest('GetSceneGroupMembers', 'im_1.0', 'HTTP', 'POST', 'AK', '/v1.0/im/sceneGroups/members/query', 'json', $req, $runtime));
    }

    /**
     * @param GroupBanWordsRequest $request
     *
     * @return GroupBanWordsResponse
     */
    public function groupBanWords($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = new GroupBanWordsHeaders([]);

        return $this->groupBanWordsWithOptions($request, $headers, $runtime);
    }

    /**
     * @param GroupBanWordsRequest $request
     * @param GroupBanWordsHeaders $headers
     * @param RuntimeOptions       $runtime
     *
     * @return GroupBanWordsResponse
     */
    public function groupBanWordsWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->banWordsMode)) {
            @$body['banWordsMode'] = $request->banWordsMode;
        }
        if (!Utils::isUnset($request->openConversationId)) {
            @$body['openConversationId'] = $request->openConversationId;
        }
        if (!Utils::isUnset($request->options)) {
            @$body['options'] = $request->options;
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

        return GroupBanWordsResponse::fromMap($this->doROARequest('GroupBanWords', 'im_1.0', 'HTTP', 'POST', 'AK', '/v1.0/im/groups/words/ban', 'none', $req, $runtime));
    }

    /**
     * @param GroupCapacityInquiryRequest $request
     *
     * @return GroupCapacityInquiryResponse
     */
    public function groupCapacityInquiry($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = new GroupCapacityInquiryHeaders([]);

        return $this->groupCapacityInquiryWithOptions($request, $headers, $runtime);
    }

    /**
     * @param GroupCapacityInquiryRequest $request
     * @param GroupCapacityInquiryHeaders $headers
     * @param RuntimeOptions              $runtime
     *
     * @return GroupCapacityInquiryResponse
     */
    public function groupCapacityInquiryWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->effectiveDuration)) {
            @$body['effectiveDuration'] = $request->effectiveDuration;
        }
        if (!Utils::isUnset($request->openConversationId)) {
            @$body['openConversationId'] = $request->openConversationId;
        }
        if (!Utils::isUnset($request->operator)) {
            @$body['operator'] = $request->operator;
        }
        if (!Utils::isUnset($request->options)) {
            @$body['options'] = $request->options;
        }
        if (!Utils::isUnset($request->targetCapacity)) {
            @$body['targetCapacity'] = $request->targetCapacity;
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

        return GroupCapacityInquiryResponse::fromMap($this->doROARequest('GroupCapacityInquiry', 'im_1.0', 'HTTP', 'POST', 'AK', '/v1.0/im/groups/capacities/inquiries/query', 'json', $req, $runtime));
    }

    /**
     * @param GroupCapacityOrderConfirmRequest $request
     *
     * @return GroupCapacityOrderConfirmResponse
     */
    public function groupCapacityOrderConfirm($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = new GroupCapacityOrderConfirmHeaders([]);

        return $this->groupCapacityOrderConfirmWithOptions($request, $headers, $runtime);
    }

    /**
     * @param GroupCapacityOrderConfirmRequest $request
     * @param GroupCapacityOrderConfirmHeaders $headers
     * @param RuntimeOptions                   $runtime
     *
     * @return GroupCapacityOrderConfirmResponse
     */
    public function groupCapacityOrderConfirmWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->operator)) {
            @$body['operator'] = $request->operator;
        }
        if (!Utils::isUnset($request->orderId)) {
            @$body['orderId'] = $request->orderId;
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

        return GroupCapacityOrderConfirmResponse::fromMap($this->doROARequest('GroupCapacityOrderConfirm', 'im_1.0', 'HTTP', 'POST', 'AK', '/v1.0/im/groups/capacities/orders/confirm', 'none', $req, $runtime));
    }

    /**
     * @param GroupCapacityOrderPlaceRequest $request
     *
     * @return GroupCapacityOrderPlaceResponse
     */
    public function groupCapacityOrderPlace($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = new GroupCapacityOrderPlaceHeaders([]);

        return $this->groupCapacityOrderPlaceWithOptions($request, $headers, $runtime);
    }

    /**
     * @param GroupCapacityOrderPlaceRequest $request
     * @param GroupCapacityOrderPlaceHeaders $headers
     * @param RuntimeOptions                 $runtime
     *
     * @return GroupCapacityOrderPlaceResponse
     */
    public function groupCapacityOrderPlaceWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->actualPrice)) {
            @$body['actualPrice'] = $request->actualPrice;
        }
        if (!Utils::isUnset($request->currentCapacity)) {
            @$body['currentCapacity'] = $request->currentCapacity;
        }
        if (!Utils::isUnset($request->currentEffectUntil)) {
            @$body['currentEffectUntil'] = $request->currentEffectUntil;
        }
        if (!Utils::isUnset($request->discount)) {
            @$body['discount'] = $request->discount;
        }
        if (!Utils::isUnset($request->extInfo)) {
            @$body['extInfo'] = $request->extInfo;
        }
        if (!Utils::isUnset($request->markedPrice)) {
            @$body['markedPrice'] = $request->markedPrice;
        }
        if (!Utils::isUnset($request->openConversationId)) {
            @$body['openConversationId'] = $request->openConversationId;
        }
        if (!Utils::isUnset($request->operator)) {
            @$body['operator'] = $request->operator;
        }
        if (!Utils::isUnset($request->targetCapacity)) {
            @$body['targetCapacity'] = $request->targetCapacity;
        }
        if (!Utils::isUnset($request->targetEffectUntil)) {
            @$body['targetEffectUntil'] = $request->targetEffectUntil;
        }
        if (!Utils::isUnset($request->token)) {
            @$body['token'] = $request->token;
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

        return GroupCapacityOrderPlaceResponse::fromMap($this->doROARequest('GroupCapacityOrderPlace', 'im_1.0', 'HTTP', 'POST', 'AK', '/v1.0/im/groups/capacities/orders/place', 'json', $req, $runtime));
    }

    /**
     * @param GroupManageQueryRequest $request
     *
     * @return GroupManageQueryResponse
     */
    public function groupManageQuery($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = new GroupManageQueryHeaders([]);

        return $this->groupManageQueryWithOptions($request, $headers, $runtime);
    }

    /**
     * @param GroupManageQueryRequest $request
     * @param GroupManageQueryHeaders $headers
     * @param RuntimeOptions          $runtime
     *
     * @return GroupManageQueryResponse
     */
    public function groupManageQueryWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->createdAfter)) {
            @$body['createdAfter'] = $request->createdAfter;
        }
        if (!Utils::isUnset($request->groupId)) {
            @$body['groupId'] = $request->groupId;
        }
        if (!Utils::isUnset($request->groupMemberSamples)) {
            @$body['groupMemberSamples'] = $request->groupMemberSamples;
        }
        if (!Utils::isUnset($request->groupOwner)) {
            @$body['groupOwner'] = $request->groupOwner;
        }
        if (!Utils::isUnset($request->groupTitleKeywords)) {
            @$body['groupTitleKeywords'] = $request->groupTitleKeywords;
        }
        if (!Utils::isUnset($request->groupUrl)) {
            @$body['groupUrl'] = $request->groupUrl;
        }
        if (!Utils::isUnset($request->maxResults)) {
            @$body['maxResults'] = $request->maxResults;
        }
        if (!Utils::isUnset($request->membersOver)) {
            @$body['membersOver'] = $request->membersOver;
        }
        if (!Utils::isUnset($request->nextToken)) {
            @$body['nextToken'] = $request->nextToken;
        }
        if (!Utils::isUnset($request->openConversationId)) {
            @$body['openConversationId'] = $request->openConversationId;
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

        return GroupManageQueryResponse::fromMap($this->doROARequest('GroupManageQuery', 'im_1.0', 'HTTP', 'POST', 'AK', '/v1.0/im/groups/managements/query', 'json', $req, $runtime));
    }

    /**
     * @param GroupManageReduceRequest $request
     *
     * @return GroupManageReduceResponse
     */
    public function groupManageReduce($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = new GroupManageReduceHeaders([]);

        return $this->groupManageReduceWithOptions($request, $headers, $runtime);
    }

    /**
     * @param GroupManageReduceRequest $request
     * @param GroupManageReduceHeaders $headers
     * @param RuntimeOptions           $runtime
     *
     * @return GroupManageReduceResponse
     */
    public function groupManageReduceWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->capacityLimit)) {
            @$body['capacityLimit'] = $request->capacityLimit;
        }
        if (!Utils::isUnset($request->openConversationId)) {
            @$body['openConversationId'] = $request->openConversationId;
        }
        if (!Utils::isUnset($request->options)) {
            @$body['options'] = $request->options;
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

        return GroupManageReduceResponse::fromMap($this->doROARequest('GroupManageReduce', 'im_1.0', 'HTTP', 'POST', 'AK', '/v1.0/im/groups/capacities/reduce', 'none', $req, $runtime));
    }

    /**
     * @param InteractiveCardCreateInstanceRequest $request
     *
     * @return InteractiveCardCreateInstanceResponse
     */
    public function interactiveCardCreateInstance($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = new InteractiveCardCreateInstanceHeaders([]);

        return $this->interactiveCardCreateInstanceWithOptions($request, $headers, $runtime);
    }

    /**
     * @param InteractiveCardCreateInstanceRequest $request
     * @param InteractiveCardCreateInstanceHeaders $headers
     * @param RuntimeOptions                       $runtime
     *
     * @return InteractiveCardCreateInstanceResponse
     */
    public function interactiveCardCreateInstanceWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->callbackRouteKey)) {
            @$body['callbackRouteKey'] = $request->callbackRouteKey;
        }
        if (!Utils::isUnset($request->cardData)) {
            @$body['cardData'] = $request->cardData;
        }
        if (!Utils::isUnset($request->cardTemplateId)) {
            @$body['cardTemplateId'] = $request->cardTemplateId;
        }
        if (!Utils::isUnset($request->chatBotId)) {
            @$body['chatBotId'] = $request->chatBotId;
        }
        if (!Utils::isUnset($request->conversationType)) {
            @$body['conversationType'] = $request->conversationType;
        }
        if (!Utils::isUnset($request->openConversationId)) {
            @$body['openConversationId'] = $request->openConversationId;
        }
        if (!Utils::isUnset($request->outTrackId)) {
            @$body['outTrackId'] = $request->outTrackId;
        }
        if (!Utils::isUnset($request->privateData)) {
            @$body['privateData'] = $request->privateData;
        }
        if (!Utils::isUnset($request->receiverUserIdList)) {
            @$body['receiverUserIdList'] = $request->receiverUserIdList;
        }
        if (!Utils::isUnset($request->robotCode)) {
            @$body['robotCode'] = $request->robotCode;
        }
        if (!Utils::isUnset($request->userIdType)) {
            @$body['userIdType'] = $request->userIdType;
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

        return InteractiveCardCreateInstanceResponse::fromMap($this->doROARequest('InteractiveCardCreateInstance', 'im_1.0', 'HTTP', 'POST', 'AK', '/v1.0/im/interactiveCards/instances', 'json', $req, $runtime));
    }

    /**
     * @param QueryGroupMemberRequest $request
     *
     * @return QueryGroupMemberResponse
     */
    public function queryGroupMember($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = new QueryGroupMemberHeaders([]);

        return $this->queryGroupMemberWithOptions($request, $headers, $runtime);
    }

    /**
     * @param QueryGroupMemberRequest $request
     * @param QueryGroupMemberHeaders $headers
     * @param RuntimeOptions          $runtime
     *
     * @return QueryGroupMemberResponse
     */
    public function queryGroupMemberWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->openConversationId)) {
            @$query['openConversationId'] = $request->openConversationId;
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

        return QueryGroupMemberResponse::fromMap($this->doROARequest('QueryGroupMember', 'im_1.0', 'HTTP', 'GET', 'AK', '/v1.0/im/interconnections/conversations/members', 'json', $req, $runtime));
    }

    /**
     * @param QueryGroupMuteStatusRequest $request
     *
     * @return QueryGroupMuteStatusResponse
     */
    public function queryGroupMuteStatus($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = new QueryGroupMuteStatusHeaders([]);

        return $this->queryGroupMuteStatusWithOptions($request, $headers, $runtime);
    }

    /**
     * @param QueryGroupMuteStatusRequest $request
     * @param QueryGroupMuteStatusHeaders $headers
     * @param RuntimeOptions              $runtime
     *
     * @return QueryGroupMuteStatusResponse
     */
    public function queryGroupMuteStatusWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->openConversationId)) {
            @$query['openConversationId'] = $request->openConversationId;
        }
        if (!Utils::isUnset($request->userId)) {
            @$query['userId'] = $request->userId;
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

        return QueryGroupMuteStatusResponse::fromMap($this->doROARequest('QueryGroupMuteStatus', 'im_1.0', 'HTTP', 'GET', 'AK', '/v1.0/im/sceneGroups/muteSettings', 'json', $req, $runtime));
    }

    /**
     * @param QueryMembersOfGroupRoleRequest $request
     *
     * @return QueryMembersOfGroupRoleResponse
     */
    public function queryMembersOfGroupRole($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = new QueryMembersOfGroupRoleHeaders([]);

        return $this->queryMembersOfGroupRoleWithOptions($request, $headers, $runtime);
    }

    /**
     * @param QueryMembersOfGroupRoleRequest $request
     * @param QueryMembersOfGroupRoleHeaders $headers
     * @param RuntimeOptions                 $runtime
     *
     * @return QueryMembersOfGroupRoleResponse
     */
    public function queryMembersOfGroupRoleWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->openConversationId)) {
            @$body['openConversationId'] = $request->openConversationId;
        }
        if (!Utils::isUnset($request->openRoleId)) {
            @$body['openRoleId'] = $request->openRoleId;
        }
        if (!Utils::isUnset($request->timestamp)) {
            @$body['timestamp'] = $request->timestamp;
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

        return QueryMembersOfGroupRoleResponse::fromMap($this->doROARequest('QueryMembersOfGroupRole', 'im_1.0', 'HTTP', 'POST', 'AK', '/v1.0/im/sceneGroups/roles/members/query', 'json', $req, $runtime));
    }

    /**
     * @param QuerySingleGroupRequest $request
     *
     * @return QuerySingleGroupResponse
     */
    public function querySingleGroup($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = new QuerySingleGroupHeaders([]);

        return $this->querySingleGroupWithOptions($request, $headers, $runtime);
    }

    /**
     * @param QuerySingleGroupRequest $request
     * @param QuerySingleGroupHeaders $headers
     * @param RuntimeOptions          $runtime
     *
     * @return QuerySingleGroupResponse
     */
    public function querySingleGroupWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->groupMembers)) {
            @$body['groupMembers'] = $request->groupMembers;
        }
        if (!Utils::isUnset($request->groupTemplateId)) {
            @$body['groupTemplateId'] = $request->groupTemplateId;
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

        return QuerySingleGroupResponse::fromMap($this->doROARequest('QuerySingleGroup', 'im_1.0', 'HTTP', 'POST', 'AK', '/v1.0/im/interconnections/doubleGroups/query', 'json', $req, $runtime));
    }

    /**
     * @param QueryUnReadMessageRequest $request
     *
     * @return QueryUnReadMessageResponse
     */
    public function queryUnReadMessage($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = new QueryUnReadMessageHeaders([]);

        return $this->queryUnReadMessageWithOptions($request, $headers, $runtime);
    }

    /**
     * @param QueryUnReadMessageRequest $request
     * @param QueryUnReadMessageHeaders $headers
     * @param RuntimeOptions            $runtime
     *
     * @return QueryUnReadMessageResponse
     */
    public function queryUnReadMessageWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->appUserId)) {
            @$body['appUserId'] = $request->appUserId;
        }
        if (!Utils::isUnset($request->openConversationIds)) {
            @$body['openConversationIds'] = $request->openConversationIds;
        }
        $realHeaders = [];
        if (!Utils::isUnset($headers->commonHeaders)) {
            $realHeaders = $headers->commonHeaders;
        }
        if (!Utils::isUnset($headers->xAcsDingtalkAccessToken)) {
            @$realHeaders['x-acs-dingtalk-access-token'] = $headers->xAcsDingtalkAccessToken;
        }
        $req = new OpenApiRequest([
            'headers' => $realHeaders,
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);

        return QueryUnReadMessageResponse::fromMap($this->doROARequest('QueryUnReadMessage', 'im_1.0', 'HTTP', 'POST', 'AK', '/v1.0/im/interconnections/unReadMsgs/query', 'json', $req, $runtime));
    }

    /**
     * @param SendInteractiveCardRequest $request
     *
     * @return SendInteractiveCardResponse
     */
    public function sendInteractiveCard($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = new SendInteractiveCardHeaders([]);

        return $this->sendInteractiveCardWithOptions($request, $headers, $runtime);
    }

    /**
     * @param SendInteractiveCardRequest $request
     * @param SendInteractiveCardHeaders $headers
     * @param RuntimeOptions             $runtime
     *
     * @return SendInteractiveCardResponse
     */
    public function sendInteractiveCardWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->atOpenIds)) {
            @$body['atOpenIds'] = $request->atOpenIds;
        }
        if (!Utils::isUnset($request->callbackRouteKey)) {
            @$body['callbackRouteKey'] = $request->callbackRouteKey;
        }
        if (!Utils::isUnset($request->cardData)) {
            @$body['cardData'] = $request->cardData;
        }
        if (!Utils::isUnset($request->cardOptions)) {
            @$body['cardOptions'] = $request->cardOptions;
        }
        if (!Utils::isUnset($request->cardTemplateId)) {
            @$body['cardTemplateId'] = $request->cardTemplateId;
        }
        if (!Utils::isUnset($request->chatBotId)) {
            @$body['chatBotId'] = $request->chatBotId;
        }
        if (!Utils::isUnset($request->conversationType)) {
            @$body['conversationType'] = $request->conversationType;
        }
        if (!Utils::isUnset($request->openConversationId)) {
            @$body['openConversationId'] = $request->openConversationId;
        }
        if (!Utils::isUnset($request->outTrackId)) {
            @$body['outTrackId'] = $request->outTrackId;
        }
        if (!Utils::isUnset($request->privateData)) {
            @$body['privateData'] = $request->privateData;
        }
        if (!Utils::isUnset($request->receiverUserIdList)) {
            @$body['receiverUserIdList'] = $request->receiverUserIdList;
        }
        if (!Utils::isUnset($request->robotCode)) {
            @$body['robotCode'] = $request->robotCode;
        }
        if (!Utils::isUnset($request->userIdType)) {
            @$body['userIdType'] = $request->userIdType;
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

        return SendInteractiveCardResponse::fromMap($this->doROARequest('SendInteractiveCard', 'im_1.0', 'HTTP', 'POST', 'AK', '/v1.0/im/interactiveCards/send', 'json', $req, $runtime));
    }

    /**
     * @param SendRobotInteractiveCardRequest $request
     *
     * @return SendRobotInteractiveCardResponse
     */
    public function sendRobotInteractiveCard($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = new SendRobotInteractiveCardHeaders([]);

        return $this->sendRobotInteractiveCardWithOptions($request, $headers, $runtime);
    }

    /**
     * @param SendRobotInteractiveCardRequest $request
     * @param SendRobotInteractiveCardHeaders $headers
     * @param RuntimeOptions                  $runtime
     *
     * @return SendRobotInteractiveCardResponse
     */
    public function sendRobotInteractiveCardWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->callbackUrl)) {
            @$body['callbackUrl'] = $request->callbackUrl;
        }
        if (!Utils::isUnset($request->cardBizId)) {
            @$body['cardBizId'] = $request->cardBizId;
        }
        if (!Utils::isUnset($request->cardData)) {
            @$body['cardData'] = $request->cardData;
        }
        if (!Utils::isUnset($request->cardTemplateId)) {
            @$body['cardTemplateId'] = $request->cardTemplateId;
        }
        if (!Utils::isUnset($request->openConversationId)) {
            @$body['openConversationId'] = $request->openConversationId;
        }
        if (!Utils::isUnset($request->robotCode)) {
            @$body['robotCode'] = $request->robotCode;
        }
        if (!Utils::isUnset($request->sendOptions)) {
            @$body['sendOptions'] = $request->sendOptions;
        }
        if (!Utils::isUnset($request->singleChatReceiver)) {
            @$body['singleChatReceiver'] = $request->singleChatReceiver;
        }
        if (!Utils::isUnset($request->unionIdPrivateDataMap)) {
            @$body['unionIdPrivateDataMap'] = $request->unionIdPrivateDataMap;
        }
        if (!Utils::isUnset($request->userIdPrivateDataMap)) {
            @$body['userIdPrivateDataMap'] = $request->userIdPrivateDataMap;
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

        return SendRobotInteractiveCardResponse::fromMap($this->doROARequest('SendRobotInteractiveCard', 'im_1.0', 'HTTP', 'POST', 'AK', '/v1.0/im/v1.0/robot/interactiveCards/send', 'json', $req, $runtime));
    }

    /**
     * @param SendTemplateInteractiveCardRequest $request
     *
     * @return SendTemplateInteractiveCardResponse
     */
    public function sendTemplateInteractiveCard($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = new SendTemplateInteractiveCardHeaders([]);

        return $this->sendTemplateInteractiveCardWithOptions($request, $headers, $runtime);
    }

    /**
     * @param SendTemplateInteractiveCardRequest $request
     * @param SendTemplateInteractiveCardHeaders $headers
     * @param RuntimeOptions                     $runtime
     *
     * @return SendTemplateInteractiveCardResponse
     */
    public function sendTemplateInteractiveCardWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->callbackUrl)) {
            @$body['callbackUrl'] = $request->callbackUrl;
        }
        if (!Utils::isUnset($request->cardData)) {
            @$body['cardData'] = $request->cardData;
        }
        if (!Utils::isUnset($request->cardTemplateId)) {
            @$body['cardTemplateId'] = $request->cardTemplateId;
        }
        if (!Utils::isUnset($request->openConversationId)) {
            @$body['openConversationId'] = $request->openConversationId;
        }
        if (!Utils::isUnset($request->outTrackId)) {
            @$body['outTrackId'] = $request->outTrackId;
        }
        if (!Utils::isUnset($request->robotCode)) {
            @$body['robotCode'] = $request->robotCode;
        }
        if (!Utils::isUnset($request->sendOptions)) {
            @$body['sendOptions'] = $request->sendOptions;
        }
        if (!Utils::isUnset($request->singleChatReceiver)) {
            @$body['singleChatReceiver'] = $request->singleChatReceiver;
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

        return SendTemplateInteractiveCardResponse::fromMap($this->doROARequest('SendTemplateInteractiveCard', 'im_1.0', 'HTTP', 'POST', 'AK', '/v1.0/im/interactiveCards/templates/send', 'json', $req, $runtime));
    }

    /**
     * @param TopboxCloseRequest $request
     *
     * @return TopboxCloseResponse
     */
    public function topboxClose($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = new TopboxCloseHeaders([]);

        return $this->topboxCloseWithOptions($request, $headers, $runtime);
    }

    /**
     * @param TopboxCloseRequest $request
     * @param TopboxCloseHeaders $headers
     * @param RuntimeOptions     $runtime
     *
     * @return TopboxCloseResponse
     */
    public function topboxCloseWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->coolAppCode)) {
            @$body['coolAppCode'] = $request->coolAppCode;
        }
        if (!Utils::isUnset($request->openConversationId)) {
            @$body['openConversationId'] = $request->openConversationId;
        }
        if (!Utils::isUnset($request->outTrackId)) {
            @$body['outTrackId'] = $request->outTrackId;
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

        return TopboxCloseResponse::fromMap($this->doROARequest('TopboxClose', 'im_1.0', 'HTTP', 'POST', 'AK', '/v1.0/im/topBoxes/close', 'none', $req, $runtime));
    }

    /**
     * @param TopboxOpenRequest $request
     *
     * @return TopboxOpenResponse
     */
    public function topboxOpen($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = new TopboxOpenHeaders([]);

        return $this->topboxOpenWithOptions($request, $headers, $runtime);
    }

    /**
     * @param TopboxOpenRequest $request
     * @param TopboxOpenHeaders $headers
     * @param RuntimeOptions    $runtime
     *
     * @return TopboxOpenResponse
     */
    public function topboxOpenWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->coolAppCode)) {
            @$body['coolAppCode'] = $request->coolAppCode;
        }
        if (!Utils::isUnset($request->expiredTime)) {
            @$body['expiredTime'] = $request->expiredTime;
        }
        if (!Utils::isUnset($request->openConversationId)) {
            @$body['openConversationId'] = $request->openConversationId;
        }
        if (!Utils::isUnset($request->outTrackId)) {
            @$body['outTrackId'] = $request->outTrackId;
        }
        if (!Utils::isUnset($request->platforms)) {
            @$body['platforms'] = $request->platforms;
        }
        if (!Utils::isUnset($request->receiverUserIdList)) {
            @$body['receiverUserIdList'] = $request->receiverUserIdList;
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

        return TopboxOpenResponse::fromMap($this->doROARequest('TopboxOpen', 'im_1.0', 'HTTP', 'POST', 'AK', '/v1.0/im/topBoxes/open', 'none', $req, $runtime));
    }

    /**
     * @param UpdateGroupPermissionRequest $request
     *
     * @return UpdateGroupPermissionResponse
     */
    public function updateGroupPermission($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = new UpdateGroupPermissionHeaders([]);

        return $this->updateGroupPermissionWithOptions($request, $headers, $runtime);
    }

    /**
     * @param UpdateGroupPermissionRequest $request
     * @param UpdateGroupPermissionHeaders $headers
     * @param RuntimeOptions               $runtime
     *
     * @return UpdateGroupPermissionResponse
     */
    public function updateGroupPermissionWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->openConversationId)) {
            @$body['openConversationId'] = $request->openConversationId;
        }
        if (!Utils::isUnset($request->permissionGroup)) {
            @$body['permissionGroup'] = $request->permissionGroup;
        }
        if (!Utils::isUnset($request->status)) {
            @$body['status'] = $request->status;
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

        return UpdateGroupPermissionResponse::fromMap($this->doROARequest('UpdateGroupPermission', 'im_1.0', 'HTTP', 'PUT', 'AK', '/v1.0/im/sceneGroups/permissions', 'json', $req, $runtime));
    }

    /**
     * @param UpdateGroupSubAdminRequest $request
     *
     * @return UpdateGroupSubAdminResponse
     */
    public function updateGroupSubAdmin($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = new UpdateGroupSubAdminHeaders([]);

        return $this->updateGroupSubAdminWithOptions($request, $headers, $runtime);
    }

    /**
     * @param UpdateGroupSubAdminRequest $request
     * @param UpdateGroupSubAdminHeaders $headers
     * @param RuntimeOptions             $runtime
     *
     * @return UpdateGroupSubAdminResponse
     */
    public function updateGroupSubAdminWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->openConversationId)) {
            @$body['openConversationId'] = $request->openConversationId;
        }
        if (!Utils::isUnset($request->role)) {
            @$body['role'] = $request->role;
        }
        if (!Utils::isUnset($request->userIds)) {
            @$body['userIds'] = $request->userIds;
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

        return UpdateGroupSubAdminResponse::fromMap($this->doROARequest('UpdateGroupSubAdmin', 'im_1.0', 'HTTP', 'PUT', 'AK', '/v1.0/im/sceneGroups/subAdmins', 'json', $req, $runtime));
    }

    /**
     * @param UpdateInteractiveCardRequest $request
     *
     * @return UpdateInteractiveCardResponse
     */
    public function updateInteractiveCard($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = new UpdateInteractiveCardHeaders([]);

        return $this->updateInteractiveCardWithOptions($request, $headers, $runtime);
    }

    /**
     * @param UpdateInteractiveCardRequest $request
     * @param UpdateInteractiveCardHeaders $headers
     * @param RuntimeOptions               $runtime
     *
     * @return UpdateInteractiveCardResponse
     */
    public function updateInteractiveCardWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->cardData)) {
            @$body['cardData'] = $request->cardData;
        }
        if (!Utils::isUnset($request->cardOptions)) {
            @$body['cardOptions'] = $request->cardOptions;
        }
        if (!Utils::isUnset($request->outTrackId)) {
            @$body['outTrackId'] = $request->outTrackId;
        }
        if (!Utils::isUnset($request->privateData)) {
            @$body['privateData'] = $request->privateData;
        }
        if (!Utils::isUnset($request->userIdType)) {
            @$body['userIdType'] = $request->userIdType;
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

        return UpdateInteractiveCardResponse::fromMap($this->doROARequest('UpdateInteractiveCard', 'im_1.0', 'HTTP', 'PUT', 'AK', '/v1.0/im/interactiveCards', 'json', $req, $runtime));
    }

    /**
     * @param UpdateMemberBanWordsRequest $request
     *
     * @return UpdateMemberBanWordsResponse
     */
    public function updateMemberBanWords($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = new UpdateMemberBanWordsHeaders([]);

        return $this->updateMemberBanWordsWithOptions($request, $headers, $runtime);
    }

    /**
     * @param UpdateMemberBanWordsRequest $request
     * @param UpdateMemberBanWordsHeaders $headers
     * @param RuntimeOptions              $runtime
     *
     * @return UpdateMemberBanWordsResponse
     */
    public function updateMemberBanWordsWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->muteDuration)) {
            @$body['muteDuration'] = $request->muteDuration;
        }
        if (!Utils::isUnset($request->muteStatus)) {
            @$body['muteStatus'] = $request->muteStatus;
        }
        if (!Utils::isUnset($request->openConversationId)) {
            @$body['openConversationId'] = $request->openConversationId;
        }
        if (!Utils::isUnset($request->userIdList)) {
            @$body['userIdList'] = $request->userIdList;
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

        return UpdateMemberBanWordsResponse::fromMap($this->doROARequest('UpdateMemberBanWords', 'im_1.0', 'HTTP', 'POST', 'AK', '/v1.0/im/sceneGroups/muteMembers/set', 'none', $req, $runtime));
    }

    /**
     * @param UpdateMemberGroupNickRequest $request
     *
     * @return UpdateMemberGroupNickResponse
     */
    public function updateMemberGroupNick($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = new UpdateMemberGroupNickHeaders([]);

        return $this->updateMemberGroupNickWithOptions($request, $headers, $runtime);
    }

    /**
     * @param UpdateMemberGroupNickRequest $request
     * @param UpdateMemberGroupNickHeaders $headers
     * @param RuntimeOptions               $runtime
     *
     * @return UpdateMemberGroupNickResponse
     */
    public function updateMemberGroupNickWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->groupNick)) {
            @$body['groupNick'] = $request->groupNick;
        }
        if (!Utils::isUnset($request->openConversationId)) {
            @$body['openConversationId'] = $request->openConversationId;
        }
        if (!Utils::isUnset($request->userId)) {
            @$body['userId'] = $request->userId;
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

        return UpdateMemberGroupNickResponse::fromMap($this->doROARequest('UpdateMemberGroupNick', 'im_1.0', 'HTTP', 'PUT', 'AK', '/v1.0/im/sceneGroups/members/groupNicks', 'json', $req, $runtime));
    }

    /**
     * @param UpdateRobotInteractiveCardRequest $request
     *
     * @return UpdateRobotInteractiveCardResponse
     */
    public function updateRobotInteractiveCard($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = new UpdateRobotInteractiveCardHeaders([]);

        return $this->updateRobotInteractiveCardWithOptions($request, $headers, $runtime);
    }

    /**
     * @param UpdateRobotInteractiveCardRequest $request
     * @param UpdateRobotInteractiveCardHeaders $headers
     * @param RuntimeOptions                    $runtime
     *
     * @return UpdateRobotInteractiveCardResponse
     */
    public function updateRobotInteractiveCardWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->cardBizId)) {
            @$body['cardBizId'] = $request->cardBizId;
        }
        if (!Utils::isUnset($request->cardData)) {
            @$body['cardData'] = $request->cardData;
        }
        if (!Utils::isUnset($request->unionIdPrivateDataMap)) {
            @$body['unionIdPrivateDataMap'] = $request->unionIdPrivateDataMap;
        }
        if (!Utils::isUnset($request->updateOptions)) {
            @$body['updateOptions'] = $request->updateOptions;
        }
        if (!Utils::isUnset($request->userIdPrivateDataMap)) {
            @$body['userIdPrivateDataMap'] = $request->userIdPrivateDataMap;
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

        return UpdateRobotInteractiveCardResponse::fromMap($this->doROARequest('UpdateRobotInteractiveCard', 'im_1.0', 'HTTP', 'PUT', 'AK', '/v1.0/im/robots/interactiveCards', 'json', $req, $runtime));
    }

    /**
     * @param UpdateTheGroupRolesOfGroupMemberRequest $request
     *
     * @return UpdateTheGroupRolesOfGroupMemberResponse
     */
    public function updateTheGroupRolesOfGroupMember($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = new UpdateTheGroupRolesOfGroupMemberHeaders([]);

        return $this->updateTheGroupRolesOfGroupMemberWithOptions($request, $headers, $runtime);
    }

    /**
     * @param UpdateTheGroupRolesOfGroupMemberRequest $request
     * @param UpdateTheGroupRolesOfGroupMemberHeaders $headers
     * @param RuntimeOptions                          $runtime
     *
     * @return UpdateTheGroupRolesOfGroupMemberResponse
     */
    public function updateTheGroupRolesOfGroupMemberWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->openConversationId)) {
            @$body['openConversationId'] = $request->openConversationId;
        }
        if (!Utils::isUnset($request->openRoleIds)) {
            @$body['openRoleIds'] = $request->openRoleIds;
        }
        if (!Utils::isUnset($request->userId)) {
            @$body['userId'] = $request->userId;
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

        return UpdateTheGroupRolesOfGroupMemberResponse::fromMap($this->doROARequest('UpdateTheGroupRolesOfGroupMember', 'im_1.0', 'HTTP', 'PUT', 'AK', '/v1.0/im/sceneGroups/members/groupRoles', 'json', $req, $runtime));
    }

    /**
     * @param AddGroupMemberRequest $request
     *
     * @return AddGroupMemberResponse
     */
    public function addGroupMember($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = new AddGroupMemberHeaders([]);

        return $this->addGroupMemberWithOptions($request, $headers, $runtime);
    }

    /**
     * @param AddGroupMemberRequest $request
     * @param AddGroupMemberHeaders $headers
     * @param RuntimeOptions        $runtime
     *
     * @return AddGroupMemberResponse
     */
    public function addGroupMemberWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->appUserIds)) {
            @$body['appUserIds'] = $request->appUserIds;
        }
        if (!Utils::isUnset($request->openConversationId)) {
            @$body['openConversationId'] = $request->openConversationId;
        }
        if (!Utils::isUnset($request->operatorId)) {
            @$body['operatorId'] = $request->operatorId;
        }
        if (!Utils::isUnset($request->userIds)) {
            @$body['userIds'] = $request->userIds;
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

        return AddGroupMemberResponse::fromMap($this->doROARequest('addGroupMember', 'im_1.0', 'HTTP', 'POST', 'AK', '/v1.0/im/interconnections/groups/members', 'json', $req, $runtime));
    }

    /**
     * @param RemoveGroupMemberRequest $request
     *
     * @return RemoveGroupMemberResponse
     */
    public function removeGroupMember($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = new RemoveGroupMemberHeaders([]);

        return $this->removeGroupMemberWithOptions($request, $headers, $runtime);
    }

    /**
     * @param RemoveGroupMemberRequest $request
     * @param RemoveGroupMemberHeaders $headers
     * @param RuntimeOptions           $runtime
     *
     * @return RemoveGroupMemberResponse
     */
    public function removeGroupMemberWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->appUserIds)) {
            @$body['appUserIds'] = $request->appUserIds;
        }
        if (!Utils::isUnset($request->openConversationId)) {
            @$body['openConversationId'] = $request->openConversationId;
        }
        if (!Utils::isUnset($request->operatorId)) {
            @$body['operatorId'] = $request->operatorId;
        }
        if (!Utils::isUnset($request->userIds)) {
            @$body['userIds'] = $request->userIds;
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

        return RemoveGroupMemberResponse::fromMap($this->doROARequest('removeGroupMember', 'im_1.0', 'HTTP', 'POST', 'AK', '/v1.0/im/interconnections/groups/members/remove', 'none', $req, $runtime));
    }

    /**
     * @param SendDingMessageRequest $request
     *
     * @return SendDingMessageResponse
     */
    public function sendDingMessage($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = new SendDingMessageHeaders([]);

        return $this->sendDingMessageWithOptions($request, $headers, $runtime);
    }

    /**
     * @param SendDingMessageRequest $request
     * @param SendDingMessageHeaders $headers
     * @param RuntimeOptions         $runtime
     *
     * @return SendDingMessageResponse
     */
    public function sendDingMessageWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->code)) {
            @$body['code'] = $request->code;
        }
        if (!Utils::isUnset($request->message)) {
            @$body['message'] = $request->message;
        }
        if (!Utils::isUnset($request->messageType)) {
            @$body['messageType'] = $request->messageType;
        }
        if (!Utils::isUnset($request->openConversationId)) {
            @$body['openConversationId'] = $request->openConversationId;
        }
        if (!Utils::isUnset($request->receiverId)) {
            @$body['receiverId'] = $request->receiverId;
        }
        if (!Utils::isUnset($request->senderId)) {
            @$body['senderId'] = $request->senderId;
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

        return SendDingMessageResponse::fromMap($this->doROARequest('sendDingMessage', 'im_1.0', 'HTTP', 'POST', 'AK', '/v1.0/im/interconnections/dingMessages/send', 'json', $req, $runtime));
    }

    /**
     * @param SendMessageRequest $request
     *
     * @return SendMessageResponse
     */
    public function sendMessage($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = new SendMessageHeaders([]);

        return $this->sendMessageWithOptions($request, $headers, $runtime);
    }

    /**
     * @param SendMessageRequest $request
     * @param SendMessageHeaders $headers
     * @param RuntimeOptions     $runtime
     *
     * @return SendMessageResponse
     */
    public function sendMessageWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->message)) {
            @$body['message'] = $request->message;
        }
        if (!Utils::isUnset($request->messageType)) {
            @$body['messageType'] = $request->messageType;
        }
        if (!Utils::isUnset($request->openConversationId)) {
            @$body['openConversationId'] = $request->openConversationId;
        }
        if (!Utils::isUnset($request->receiverId)) {
            @$body['receiverId'] = $request->receiverId;
        }
        if (!Utils::isUnset($request->senderId)) {
            @$body['senderId'] = $request->senderId;
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

        return SendMessageResponse::fromMap($this->doROARequest('sendMessage', 'im_1.0', 'HTTP', 'POST', 'AK', '/v1.0/im/interconnections/messages/send', 'json', $req, $runtime));
    }
}
