<div class="card shadow-sm mb-4">
    <div class="card-body">
        <h2 class="h5 mb-3">Submit a Message</h2>
        <form method="post" action="index.php?action=store" class="row g-3 needs-validation">
            <div class="col-md-6">
                <label class="form-label">Name</label>
                <input type="text" name="name" class="form-control" required>
            </div>
            <div class="col-md-6">
                <label class="form-label">Email</label>
                <input type="email" name="email" class="form-control" required>
            </div>
            <div class="col-md-6">
                <label class="form-label">Phone</label>
                <input type="text" name="phone" class="form-control" required>
            </div>
            <div class="col-md-6">
                <label class="form-label">Query Type</label>
                <select name="query_type" class="form-select" required>
                    <option value="billing">Billing</option>
                    <option value="maintenance">Maintenance</option>
                </select>
            </div>
            <div class="col-12">
                <label class="form-label">Message</label>
                <textarea name="message" class="form-control" rows="4" required></textarea>
            </div>
            <div class="col-12">
                <button type="submit" class="btn btn-primary">Send</button>
            </div>
        </form>
    </div>
</div>
