<?php

namespace AB\Queue\Api;

interface MessageInterface
{
    /**
     * @param string $message
     * @return void
     */
    public function setMessage($message);

    /**
     * @return string
     */
    public function getMessage();

}
