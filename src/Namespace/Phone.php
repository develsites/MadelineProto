<?php declare(strict_types=1);
/**
 * This file is automatic generated by build_docs.php file
 * and is used only for autocomplete in multiple IDE
 * don't modify manually.
 */

namespace danog\MadelineProto\Namespace;

interface Phone
{
    /**
     * Get phone call configuration to be passed to libtgvoip's shared config.
     *
     * @return mixed Any JSON-encodable data
     */
    public function getCallConfig(): mixed;

    /**
     * Optional: notify the server that the user is currently busy in a call: this will automatically refuse all incoming phone calls until the current phone call is ended.
     *
     * @param array{_: 'inputPhoneCall', id?: int, access_hash?: int} $peer The phone call we're currently in @see https://docs.madelineproto.xyz/API_docs/types/InputPhoneCall.html
     */
    public function receivedCall(array $peer): bool;

    /**
     * Rate a call, returns info about the rating message sent to the official VoIP bot.
     *
     * @param array{_: 'inputPhoneCall', id?: int, access_hash?: int} $peer The call to rate @see https://docs.madelineproto.xyz/API_docs/types/InputPhoneCall.html
     * @param bool $user_initiative Whether the user decided on their own initiative to rate the call
     * @param int $rating Rating in `1-5` stars
     * @param string $comment An additional comment
     * @return array @see https://docs.madelineproto.xyz/API_docs/types/Updates.html
     */
    public function setCallRating(array $peer, bool $user_initiative = false, int $rating = 0, string $comment = ''): array;

    /**
     * Send phone call debug data to server.
     *
     * @param array{_: 'inputPhoneCall', id?: int, access_hash?: int} $peer Phone call @see https://docs.madelineproto.xyz/API_docs/types/InputPhoneCall.html
     * @param mixed $debug Any JSON-encodable data
     */
    public function saveCallDebug(array $peer, mixed $debug): bool;

    /**
     * Send VoIP signaling data.
     *
     * @param array{_: 'inputPhoneCall', id?: int, access_hash?: int} $peer Phone call @see https://docs.madelineproto.xyz/API_docs/types/InputPhoneCall.html
     * @param string $data Signaling payload
     */
    public function sendSignalingData(array $peer, string $data = ''): bool;

    /**
     * Create a group call or livestream.
     *
     * @param array|int|string $peer Associate the group call or livestream to the provided [group/supergroup/channel](https://core.telegram.org/api/channel) @see https://docs.madelineproto.xyz/API_docs/types/InputPeer.html
     * @param bool $rtmp_stream Whether RTMP stream support should be enabled: only the [group/supergroup/channel](https://core.telegram.org/api/channel) owner can use this flag.
     * @param string $title Call title
     * @param int $schedule_date For scheduled group call or livestreams, the absolute date when the group call will start
     * @return array @see https://docs.madelineproto.xyz/API_docs/types/Updates.html
     */
    public function createGroupCall(array|int|string $peer, bool $rtmp_stream = false, string $title = '', int $schedule_date = 0): array;

    /**
     * Join a group call.
     *
     * @param array{_: 'inputGroupCall', id?: int, access_hash?: int} $call The group call @see https://docs.madelineproto.xyz/API_docs/types/InputGroupCall.html
     * @param array|int|string $join_as Join the group call, presenting yourself as the specified user/channel @see https://docs.madelineproto.xyz/API_docs/types/InputPeer.html
     * @param mixed $params Any JSON-encodable data
     * @param bool $muted If set, the user will be muted by default upon joining.
     * @param bool $video_stopped If set, the user's video will be disabled by default upon joining.
     * @param string $invite_hash The invitation hash from the [invite link »](https://core.telegram.org/api/links#video-chatlivestream-links), if provided allows speaking in a livestream or muted group chat.
     * @return array @see https://docs.madelineproto.xyz/API_docs/types/Updates.html
     */
    public function joinGroupCall(array $call, array|int|string $join_as, mixed $params, bool $muted = false, bool $video_stopped = false, string $invite_hash = ''): array;

    /**
     * Leave a group call.
     *
     * @param array{_: 'inputGroupCall', id?: int, access_hash?: int} $call The group call @see https://docs.madelineproto.xyz/API_docs/types/InputGroupCall.html
     * @param int $source Your source ID
     * @return array @see https://docs.madelineproto.xyz/API_docs/types/Updates.html
     */
    public function leaveGroupCall(array $call, int $source = 0): array;

    /**
     * Invite a set of users to a group call.
     *
     * @param array{_: 'inputGroupCall', id?: int, access_hash?: int} $call The group call @see https://docs.madelineproto.xyz/API_docs/types/InputGroupCall.html
     * @param list<array|int|string>|array<never, never> $users Array of The users to invite. @see https://docs.madelineproto.xyz/API_docs/types/InputUser.html
     * @return array @see https://docs.madelineproto.xyz/API_docs/types/Updates.html
     */
    public function inviteToGroupCall(array $call, array $users = []): array;

    /**
     * Terminate a group call.
     *
     * @param array{_: 'inputGroupCall', id?: int, access_hash?: int} $call The group call to terminate @see https://docs.madelineproto.xyz/API_docs/types/InputGroupCall.html
     * @return array @see https://docs.madelineproto.xyz/API_docs/types/Updates.html
     */
    public function discardGroupCall(array $call): array;

    /**
     * Change group call settings.
     *
     * @param array{_: 'inputGroupCall', id?: int, access_hash?: int} $call Group call @see https://docs.madelineproto.xyz/API_docs/types/InputGroupCall.html
     * @param bool $reset_invite_hash Invalidate existing invite links
     * @param bool $join_muted Whether all users will that join this group call are muted by default upon joining the group call
     * @return array @see https://docs.madelineproto.xyz/API_docs/types/Updates.html
     */
    public function toggleGroupCallSettings(array $call, bool $reset_invite_hash = false, bool $join_muted = false): array;

    /**
     * Get info about a group call.
     *
     * @param array{_: 'inputGroupCall', id?: int, access_hash?: int} $call The group call @see https://docs.madelineproto.xyz/API_docs/types/InputGroupCall.html
     * @param int $limit Maximum number of results to return, [see pagination](https://core.telegram.org/api/offsets)
     * @return array{_: 'phone.groupCall', call: array{_: 'groupCallDiscarded', id: int, access_hash: int, duration: int}|array{_: 'groupCall', join_muted: bool, can_change_join_muted: bool, join_date_asc: bool, schedule_start_subscribed: bool, can_start_video: bool, record_video_active: bool, rtmp_stream: bool, listeners_hidden: bool, id: int, access_hash: int, participants_count: int, title: string, stream_dc_id: int, record_start_date: int, schedule_date: int, unmuted_video_count: int, unmuted_video_limit: int, version: int}, participants: list<array{_: 'groupCallParticipant', peer: array|int|string, muted: bool, left: bool, can_self_unmute: bool, just_joined: bool, versioned: bool, min: bool, muted_by_you: bool, volume_by_admin: bool, self: bool, video_joined: bool, date: int, active_date: int, source: int, volume: int, about: string, raise_hand_rating: int, video?: array{_: 'groupCallParticipantVideo', paused: bool, endpoint: string, source_groups: list<array{_: 'groupCallParticipantVideoSourceGroup', semantics: string, sources: list<int>}>, audio_source: int}, presentation?: array{_: 'groupCallParticipantVideo', paused: bool, endpoint: string, source_groups: list<array{_: 'groupCallParticipantVideoSourceGroup', semantics: string, sources: list<int>}>, audio_source: int}}>, participants_next_offset: string, chats: list<array|int|string>, users: list<array|int|string>} @see https://docs.madelineproto.xyz/API_docs/types/phone.GroupCall.html
     */
    public function getGroupCall(array $call, int $limit = 0): array;

    /**
     * Get group call participants.
     *
     * @param array{_: 'inputGroupCall', id?: int, access_hash?: int} $call Group call @see https://docs.madelineproto.xyz/API_docs/types/InputGroupCall.html
     * @param list<array|int|string>|array<never, never> $ids Array of If specified, will fetch group participant info about the specified peers @see https://docs.madelineproto.xyz/API_docs/types/InputPeer.html
     * @param list<int>|array<never, never> $sources If specified, will fetch group participant info about the specified WebRTC source IDs
     * @param string $offset Offset for results, taken from the `next_offset` field of [phone.groupParticipants](https://docs.madelineproto.xyz/API_docs/constructors/phone.groupParticipants.html), initially an empty string. <br>Note: if no more results are available, the method call will return an empty `next_offset`; thus, avoid providing the `next_offset` returned in [phone.groupParticipants](https://docs.madelineproto.xyz/API_docs/constructors/phone.groupParticipants.html) if it is empty, to avoid an infinite loop.
     * @param int $limit Maximum number of results to return, [see pagination](https://core.telegram.org/api/offsets)
     * @return array{_: 'phone.groupParticipants', count: int, participants: list<array{_: 'groupCallParticipant', peer: array|int|string, muted: bool, left: bool, can_self_unmute: bool, just_joined: bool, versioned: bool, min: bool, muted_by_you: bool, volume_by_admin: bool, self: bool, video_joined: bool, date: int, active_date: int, source: int, volume: int, about: string, raise_hand_rating: int, video?: array{_: 'groupCallParticipantVideo', paused: bool, endpoint: string, source_groups: list<array{_: 'groupCallParticipantVideoSourceGroup', semantics: string, sources: list<int>}>, audio_source: int}, presentation?: array{_: 'groupCallParticipantVideo', paused: bool, endpoint: string, source_groups: list<array{_: 'groupCallParticipantVideoSourceGroup', semantics: string, sources: list<int>}>, audio_source: int}}>, next_offset: string, chats: list<array|int|string>, users: list<array|int|string>, version: int} @see https://docs.madelineproto.xyz/API_docs/types/phone.GroupParticipants.html
     */
    public function getGroupParticipants(array $call, array $ids = [], array $sources = [], string $offset = '', int $limit = 0): array;

    /**
     * Check whether the group call Server Forwarding Unit is currently receiving the streams with the specified WebRTC source IDs.
     * Returns an intersection of the source IDs specified in `sources`, and the source IDs currently being forwarded by the SFU.
     *
     * @param array{_: 'inputGroupCall', id?: int, access_hash?: int} $call Group call @see https://docs.madelineproto.xyz/API_docs/types/InputGroupCall.html
     * @param list<int>|array<never, never> $sources Source IDs
     * @return list<int>
     */
    public function checkGroupCall(array $call, array $sources = []): array;

    /**
     * Start or stop recording a group call: the recorded audio and video streams will be automatically sent to `Saved messages` (the chat with ourselves).
     *
     * @param array{_: 'inputGroupCall', id?: int, access_hash?: int} $call The group call or livestream @see https://docs.madelineproto.xyz/API_docs/types/InputGroupCall.html
     * @param bool $start Whether to start or stop recording
     * @param bool $video Whether to also record video streams
     * @param string $title Recording title
     * @param bool $video_portrait If video stream recording is enabled, whether to record in portrait or landscape mode
     * @return array @see https://docs.madelineproto.xyz/API_docs/types/Updates.html
     */
    public function toggleGroupCallRecord(array $call, bool $start = false, bool $video = false, string $title = '', bool $video_portrait = false): array;

    /**
     * Edit information about a given group call participant.
     *
     * Note: [flags](https://core.telegram.org/mtproto/TL-combinators#conditional-fields).N?[Bool](https://docs.madelineproto.xyz/API_docs/types/Bool.html) parameters can have three possible values:
     *
     * - If the [TL flag](https://core.telegram.org/mtproto/TL-combinators#conditional-fields) is not set, the previous value will not be changed.
     * - If the [TL flag](https://core.telegram.org/mtproto/TL-combinators#conditional-fields) is set and contains a [boolTrue](https://docs.madelineproto.xyz/API_docs/constructors/boolTrue.html), the previous value will be overwritten to `true`.
     * - If the [TL flag](https://core.telegram.org/mtproto/TL-combinators#conditional-fields) is set and contains a [boolFalse](https://docs.madelineproto.xyz/API_docs/constructors/boolFalse.html), the previous value will be overwritten to `false`.
     *
     * @param array{_: 'inputGroupCall', id?: int, access_hash?: int} $call The group call @see https://docs.madelineproto.xyz/API_docs/types/InputGroupCall.html
     * @param array|int|string $participant The group call participant (can also be the user itself) @see https://docs.madelineproto.xyz/API_docs/types/InputPeer.html
     * @param bool $muted Whether to mute or unmute the specified participant
     * @param int $volume New volume
     * @param bool $raise_hand Raise or lower hand
     * @param bool $video_stopped Start or stop the video stream
     * @param bool $video_paused Pause or resume the video stream
     * @param bool $presentation_paused Pause or resume the screen sharing stream
     * @return array @see https://docs.madelineproto.xyz/API_docs/types/Updates.html
     */
    public function editGroupCallParticipant(array $call, array|int|string $participant, bool $muted = false, int $volume = 0, bool $raise_hand = false, bool $video_stopped = false, bool $video_paused = false, bool $presentation_paused = false): array;

    /**
     * Edit the title of a group call or livestream.
     *
     * @param array{_: 'inputGroupCall', id?: int, access_hash?: int} $call Group call @see https://docs.madelineproto.xyz/API_docs/types/InputGroupCall.html
     * @param string $title New title
     * @return array @see https://docs.madelineproto.xyz/API_docs/types/Updates.html
     */
    public function editGroupCallTitle(array $call, string $title = ''): array;

    /**
     * Get a list of peers that can be used to join a group call, presenting yourself as a specific user/channel.
     *
     * @param array|int|string $peer The dialog whose group call or livestream we're trying to join @see https://docs.madelineproto.xyz/API_docs/types/InputPeer.html
     * @return array{_: 'phone.joinAsPeers', peers: list<array|int|string>, chats: list<array|int|string>, users: list<array|int|string>} @see https://docs.madelineproto.xyz/API_docs/types/phone.JoinAsPeers.html
     */
    public function getGroupCallJoinAs(array|int|string $peer): array;

    /**
     * Get an [invite link](https://core.telegram.org/api/links#video-chatlivestream-links) for a group call or livestream.
     *
     * @param array{_: 'inputGroupCall', id?: int, access_hash?: int} $call The group call @see https://docs.madelineproto.xyz/API_docs/types/InputGroupCall.html
     * @param bool $can_self_unmute For livestreams or muted group chats, if set, users that join using this link will be able to speak without explicitly requesting permission by (for example by raising their hand).
     * @return array{_: 'phone.exportedGroupCallInvite', link: string} @see https://docs.madelineproto.xyz/API_docs/types/phone.ExportedGroupCallInvite.html
     */
    public function exportGroupCallInvite(array $call, bool $can_self_unmute = false): array;

    /**
     * Subscribe or unsubscribe to a scheduled group call.
     *
     * @param array{_: 'inputGroupCall', id?: int, access_hash?: int} $call Scheduled group call @see https://docs.madelineproto.xyz/API_docs/types/InputGroupCall.html
     * @param bool $subscribed Enable or disable subscription
     * @return array @see https://docs.madelineproto.xyz/API_docs/types/Updates.html
     */
    public function toggleGroupCallStartSubscription(array $call, bool $subscribed): array;

    /**
     * Start a scheduled group call.
     *
     * @param array{_: 'inputGroupCall', id?: int, access_hash?: int} $call The scheduled group call @see https://docs.madelineproto.xyz/API_docs/types/InputGroupCall.html
     * @return array @see https://docs.madelineproto.xyz/API_docs/types/Updates.html
     */
    public function startScheduledGroupCall(array $call): array;

    /**
     * Set the default peer that will be used to join a group call in a specific dialog.
     *
     * @param array|int|string $peer The dialog @see https://docs.madelineproto.xyz/API_docs/types/InputPeer.html
     * @param array|int|string $join_as The default peer that will be used to join group calls in this dialog, presenting yourself as a specific user/channel. @see https://docs.madelineproto.xyz/API_docs/types/InputPeer.html
     */
    public function saveDefaultGroupCallJoinAs(array|int|string $peer, array|int|string $join_as): bool;

    /**
     * Start screen sharing in a call.
     *
     * @param array{_: 'inputGroupCall', id?: int, access_hash?: int} $call The group call @see https://docs.madelineproto.xyz/API_docs/types/InputGroupCall.html
     * @param mixed $params Any JSON-encodable data
     * @return array @see https://docs.madelineproto.xyz/API_docs/types/Updates.html
     */
    public function joinGroupCallPresentation(array $call, mixed $params): array;

    /**
     * Stop screen sharing in a group call.
     *
     * @param array{_: 'inputGroupCall', id?: int, access_hash?: int} $call The group call @see https://docs.madelineproto.xyz/API_docs/types/InputGroupCall.html
     * @return array @see https://docs.madelineproto.xyz/API_docs/types/Updates.html
     */
    public function leaveGroupCallPresentation(array $call): array;

    /**
     * Get info about RTMP streams in a group call or livestream.
     * This method should be invoked to the same group/channel-related DC used for [downloading livestream chunks](https://core.telegram.org/api/files#downloading-files).
     * As usual, the media DC is preferred, if available.
     *
     * @param array{_: 'inputGroupCall', id?: int, access_hash?: int} $call Group call or livestream @see https://docs.madelineproto.xyz/API_docs/types/InputGroupCall.html
     * @return array{_: 'phone.groupCallStreamChannels', channels: list<array{_: 'groupCallStreamChannel', channel: int, scale: int, last_timestamp_ms: int}>} @see https://docs.madelineproto.xyz/API_docs/types/phone.GroupCallStreamChannels.html
     */
    public function getGroupCallStreamChannels(array $call): array;

    /**
     * Get RTMP URL and stream key for RTMP livestreams. Can be used even before creating the actual RTMP livestream with [phone.createGroupCall](https://docs.madelineproto.xyz/API_docs/methods/phone.createGroupCall.html) (the `rtmp_stream` flag must be set).
     *
     * @param array|int|string $peer Peer to livestream into @see https://docs.madelineproto.xyz/API_docs/types/InputPeer.html
     * @param bool $revoke Whether to revoke the previous stream key or simply return the existing one
     * @return array{_: 'phone.groupCallStreamRtmpUrl', url: string, key: string} @see https://docs.madelineproto.xyz/API_docs/types/phone.GroupCallStreamRtmpUrl.html
     */
    public function getGroupCallStreamRtmpUrl(array|int|string $peer, bool $revoke): array;

    /**
     * Save phone call debug information.
     *
     * @param array{_: 'inputPhoneCall', id?: int, access_hash?: int} $peer Phone call @see https://docs.madelineproto.xyz/API_docs/types/InputPhoneCall.html
     * @param mixed $file A file name or a file URL. You can also use amphp async streams, amphp HTTP response objects, and [much more](https://docs.madelineproto.xyz/docs/FILES.html#downloading-files)!
     */
    public function saveCallLog(array $peer, mixed $file): bool;
}
