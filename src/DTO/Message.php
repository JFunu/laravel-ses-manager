<?php


namespace Megaverse\LaravelSesManager\DTO;


class Message
{
    /**
     * @var array
     */
    public $message;

    public $notificationType;

    public function __construct(array $data)
    {
        $this->notificationType = $data['notificationType'] ?? $data['Type'];

        if ($this->notificationType === 'SubscriptionConfirmation' || $this->notificationType === 'AmazonSnsSubscriptionSucceeded') {
            $this->message = $data;
        } else if (isset($data[strtolower($this->notificationType)])) {
            $this->message = $data[strtolower($this->notificationType)];
        } else {
            $this->message = $data['Message'];
        }
    }
}