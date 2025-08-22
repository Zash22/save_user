<?php
declare(strict_types=1);

require_once __DIR__ . '/app/messages/MessageController.php';

$controller = new MessageController();

$action = $_GET['action'] ?? 'index';
if ($action === 'store' && $_SERVER['REQUEST_METHOD'] === 'POST') {
    $controller->store();
} else {
    $controller->index();
}