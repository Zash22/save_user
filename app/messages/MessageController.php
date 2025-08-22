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
        require __DIR__ . '/MessageView.php';
    }

    public function store(): void
    {
        $data = [
            'user_id'    => (int)($_POST['user_id'] ?? 1), // default user for demo
            'name'       => trim($_POST['name']),
            'email'      => trim($_POST['email']),
            'phone'      => trim($_POST['phone']),
            'message'    => trim($_POST['message']),
            'query_type' => $_POST['query_type'],
        ];

        if ($this->messageModel->create($data)) {
            header("Location: index.php?success=1");
            exit;
        } else {
            header("Location: index.php?error=1");
            exit;
        }
    }
}
