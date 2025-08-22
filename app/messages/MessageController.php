<?php
declare(strict_types=1);

require_once __DIR__ . '/Message.php';

class MessageController
{
    private Message $messageModel;

    public function __construct()
    {
        $this->messageModel = new Message();
    }

    public function index(): void
    {
        $messages = $this->messageModel->all();
        print_r($messages);
    }
}
