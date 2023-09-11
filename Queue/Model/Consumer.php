<?php

declare(strict_types=1);

namespace AB\Queue\Model;

use AB\Queue\Api\MessageInterface;
use AB\Queue\Api\ConsumerInterface;

class Consumer implements ConsumerInterface
{
    /**
     * @param MessageInterface $message
     * @return mixed|void
     */
    public function processMessage(MessageInterface $message)
    {
        echo 'Message received: ' . $message->getMessage() . PHP_EOL;
    }
}
