<?php

namespace AB\Queue\Model;

use Magento\Framework\MessageQueue\PublisherInterface;
use AB\Queue\Model\Message;

class Publisher
{
    const TOPIC_NAME = 'ab.queue.order.create';

    /**
     * @var \Magento\Framework\MessageQueue\PublisherInterface
     */
    private $publisher;

    /**
     * @param PublisherInterface $publisher
     */
    public function __construct(PublisherInterface $publisher)
    {
        $this->publisher = $publisher;
    }

    /**
     * @param \AB\Queue\Model\Message $message
     * @return void
     */
    public function publish(Message $message)
    {
        $this->publisher->publish(self::TOPIC_NAME, $message);
    }

}
