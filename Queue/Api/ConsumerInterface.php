<?php

namespace AB\Queue\Api;

use AB\Queue\Api\MessageInterface;

interface ConsumerInterface
{
    /**
     * @param \AB\Queue\Api\MessageInterface $message
     * @return mixed
     */
    public function processMessage(MessageInterface $message);
}
