<?php ob_start(); ?>

<?php if (isset($_GET['success'])): ?>
    <div class="alert alert-success">Message submitted successfully!</div>
<?php elseif (isset($_GET['error'])): ?>
    <div class="alert alert-danger">Error saving message.</div>
<?php endif; ?>

<div class="mb-4">
    <?php include __DIR__ . '/MessageForm.php'; ?>
</div>

<h1 class="mb-4">All Messages</h1>

<div class="card shadow-sm">
    <div class="card-body">
        <?php if (empty($messages)): ?>
            <p class="text-muted">No messages yet.</p>
        <?php else: ?>
            <div class="table-responsive">
                <table class="table table-striped align-middle">
                    <thead>
                    <tr>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Phone</th>
                        <th>Query Type</th>
                        <th>Message</th>
                        <th>Status</th>
                        <th>Created At</th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php foreach ($messages as $m): ?>
                        <tr>
                            <td><?= htmlspecialchars($m['name']) ?></td>
                            <td><?= htmlspecialchars($m['email']) ?></td>
                            <td><?= htmlspecialchars(str_starts_with($m['phone'], '+27') ? $m['phone'] : '+27'.ltrim($m['phone'], '0')) ?></td>
                            <td><?= htmlspecialchars($m['query_type']) ?></td>
                            <td><?= nl2br(htmlspecialchars($m['message'])) ?></td>
                            <td><?= htmlspecialchars($m['status']) ?></td>
                            <td><?= htmlspecialchars($m['created_at']) ?></td>
                        </tr>
                    <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
        <?php endif; ?>
    </div>
</div>
<?php $content = ob_get_clean(); include __DIR__ . '/MessageLayout.php'; ?>
