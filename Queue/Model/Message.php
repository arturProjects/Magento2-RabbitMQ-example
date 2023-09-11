<?php

namespace AB\Queue\Model;

use AB\Queue\Api\MessageInterface;

class Message implements MessageInterface
{
    /**
     * @var string
     */
    protected $message;

    /**
     * @return string
     */
    public function getMessage()
    {
        return $this->message;
    }

    /**
     * @param $message
     * @return string|void
     */
    public function setMessage($message)
    {
        return $this->message = $message;
    }

}
