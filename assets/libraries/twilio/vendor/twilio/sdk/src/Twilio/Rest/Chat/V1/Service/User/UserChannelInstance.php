<?php

/**
 * This code was generated by
 * \ / _    _  _|   _  _
 * | (_)\/(_)(_|\/| |(/_  v1.0.0
 * /       /
 */

namespace Twilio\Rest\Chat\V1\Service\User;

use Twilio\Exceptions\TwilioException;
use Twilio\InstanceResource;
use Twilio\Values;
use Twilio\Version;

/**
 * @property string $accountSid
 * @property string $serviceSid
 * @property string $channelSid
 * @property string $memberSid
 * @property string $status
 * @property int $lastConsumedMessageIndex
 * @property int $unreadMessagesCount
 * @property array $links
 */
class UserChannelInstance extends InstanceResource {
    /**
     * Initialize the UserChannelInstance
     *
     * @param \Twilio\Version $version Version that contains the resource
     * @param mixed[] $payload The response payload
     * @param string $serviceSid The SID of the Service that the resource is
     *                           associated with
     * @param string $userSid The unique string that identifies the resource
     * @return \Twilio\Rest\Chat\V1\Service\User\UserChannelInstance
     */
    public function __construct(Version $version, array $payload, $serviceSid, $userSid) {
        parent::__construct($version);

        // Marshaled Properties
        $this->properties = array(
            'accountSid' => Values::array_get($payload, 'account_sid'),
            'serviceSid' => Values::array_get($payload, 'service_sid'),
            'channelSid' => Values::array_get($payload, 'channel_sid'),
            'memberSid' => Values::array_get($payload, 'member_sid'),
            'status' => Values::array_get($payload, 'status'),
            'lastConsumedMessageIndex' => Values::array_get($payload, 'last_consumed_message_index'),
            'unreadMessagesCount' => Values::array_get($payload, 'unread_messages_count'),
            'links' => Values::array_get($payload, 'links'),
        );

        $this->solution = array('serviceSid' => $serviceSid, 'userSid' => $userSid, );
    }

    /**
     * Magic getter to access properties
     *
     * @param string $name Property to access
     * @return mixed The requested property
     * @throws TwilioException For unknown properties
     */
    public function __get($name) {
        if (array_key_exists($name, $this->properties)) {
            return $this->properties[$name];
        }

        if (property_exists($this, '_' . $name)) {
            $method = 'get' . ucfirst($name);
            return $this->$method();
        }

        throw new TwilioException('Unknown property: ' . $name);
    }

    /**
     * Provide a friendly representation
     *
     * @return string Machine friendly representation
     */
    public function __toString() {
        return '[Twilio.Chat.V1.UserChannelInstance]';
    }
}