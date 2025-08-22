<?php declare(strict_types=1); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>All Messages</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <style>
        body {
          font-family: system-ui, sans-serif;
          background: #f6f8fb;
          margin: 0;
          padding: 1rem;
        }
        h1 {
          text-align: center;
        }
        .table-container {
          overflow-x: auto;
        }
        table {
          width: 100%;
          border-collapse: collapse;
          margin: 1rem 0;
          background: white;
          border-radius: 0.5rem;
          overflow: hidden;
        }
        th, td {
          padding: 0.75rem 1rem;
          border-bottom: 1px solid #ddd;
          text-align: left;
        }
        th {
          background: #007bff;
          color: white;
        }
        tr:hover {
          background: #f1f1f1;
        }
        @media (max-width: 768px) {
          table, thead, tbody, th, td, tr {
            display: block;
          }
          th {
            display: none;
          }
          td {
            border: none;
            position: relative;
            padding-left: 50%;
          }
          td::before {
            content: attr(data-label);
            position: absolute;
            left: 1rem;
            font-weight: bold;
          }
        }
    </style>
</head>
<body>
<h1>Messages</h1>
<div class="table-container">
    <table>
        <thead>
        <tr>
            <th>ID</th>
            <th>User</th>
            <th>Name</th>
            <th>Email</th>
            <th>Phone</th>
            <th>Message</th>
            <th>Query Type</th>
            <th>Status</th>
            <th>Created</th>
        </tr>
        </thead>
        <tbody>
        <?php if (empty($messages)): ?>
            <tr><td colspan="9">No messages found.</td></tr>
        <?php else: ?>
            <?php foreach ($messages as $m): ?>
                <tr>
                    <td data-label="ID"><?= htmlspecialchars((string)$m['id']) ?></td>
                    <td data-label="User"><?= htmlspecialchars($m['username']) ?></td>
                    <td data-label="Name"><?= htmlspecialchars($m['name']) ?></td>
                    <td data-label="Email"><?= htmlspecialchars($m['email']) ?></td>
                    <td data-label="Phone"><?= htmlspecialchars($m['phone']) ?></td>
                    <td data-label="Message"><?= nl2br(htmlspecialchars($m['message'])) ?></td>
                    <td data-label="Query Type"><?= htmlspecialchars($m['query_type']) ?></td>
                    <td data-label="Status"><?= htmlspecialchars($m['status']) ?></td>
                    <td data-label="Created"><?= htmlspecialchars($m['created_at']) ?></td>
                </tr>
            <?php endforeach; ?>
        <?php endif; ?>
        </tbody>
    </table>
</div>
</body>
</html>
