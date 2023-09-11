<?php

declare(strict_types=1);

namespace AB\Queue\Plugin\Order;

use Magento\Sales\Api\OrderManagementInterface;
use AB\Queue\Model\Publisher;
use AB\Queue\Model\Message;
use Psr\Log\LoggerInterface;

class PlaceAfterPlugin
{
    const MESSAGE = 'New order has been placed. Order id: ';
    /**
     * @var LoggerInterface
     */
    private $logger;

    /**
     * @var Publisher
     */
    private $publisher;

    /**
     * @var Message
     */
    private $message;

    /**
     * @param Publisher $publisher
     * @param Message $message
     * @param LoggerInterface $logger
     */
    public function __construct(
        Publisher $publisher,
        Message $message,
        LoggerInterface $logger

    ) {
        $this->logger = $logger;
        $this->publisher = $publisher;
        $this->message = $message;
    }

    /**
     * @param OrderManagementInterface $orderManagementInterface
     * @param $order
     * @return mixed
     */
    public function afterPlace(OrderManagementInterface $orderManagementInterface , $order)
    {
        $orderId = $order->getId();
        $this->logger->debug(self::MESSAGE.' '.$orderId);
        $this->message->setMessage(self::MESSAGE.' '.$orderId);
        $this->publisher->publish($this->message);

        return $order;
    }
}
