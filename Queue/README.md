**Magento module implementing a queue using RabbitMQ.**



Magento module implementing a queue using RabbitMQ.
The publisher adds the new order id to the queue. A plugin has been implemented which, after placing an order, additionally launches the publisher with a message about adding a new order and the order ID.
A consumer is used to receive and process messages. 
By the cli command: **bin/magento queue:consumers:start AbQueueOrderCreate.Consumer** the message queue is processed. In this case, it's just receiving messages from the queue, but it could be a whole set of instructions that can be implemented in consumer logic.
The module has been tested locally on magento 2.4 environment
---

