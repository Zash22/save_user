<?php
declare(strict_types=1);

// Load controller
require_once __DIR__ . '/app/messages/MessageController.php';

$controller = new MessageController();
$controller->index();
