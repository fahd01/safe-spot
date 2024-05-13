<?php

namespace App\Service;

use Twilio\Rest\Client;

class TwilioClient
{
    private $client;
    private $from;

    public function __construct(string $accountSid, string $authToken, string $fromNumber)
    {
        $this->client = new Client($accountSid, $authToken);
        $this->from = $fromNumber;
    }

    public function sendSms(string $to, string $message)
    {
        return $this->client->messages->create(
            $to,
            [
                'from' => $this->from,
                'body' => $message
            ]
        );
    }
}
