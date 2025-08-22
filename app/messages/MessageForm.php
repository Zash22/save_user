<form id="messageForm" method="post" action="index.php?action=store" class="row g-3 needs-validation" novalidate>
    <div class="col-md-6">
        <label class="form-label">Name</label>
        <input type="text" name="name" class="form-control" required minlength="2" maxlength="100">
        <div class="invalid-feedback">Please enter your name (at least 2 characters).</div>
    </div>
    <div class="col-md-6">
        <label class="form-label">Email</label>
        <input type="email" name="email" class="form-control" required placeholder="example@example.com">
        <div class="invalid-feedback">Please enter a valid email.</div>
    </div>
    <div class="col-md-6">
        <label class="form-label">Phone</label>
        <input type="tel" name="phone" class="form-control" required pattern="^0\d{9}$" placeholder="0123456789">
        <div class="invalid-feedback">Please enter a valid South African phone number (e.g., 0123456789).</div>
    </div>
    <div class="col-md-6">
        <label class="form-label">Query Type</label>
        <select name="query_type" class="form-select" required>
            <option value="">Select type...</option>
            <option value="billing">Billing</option>
            <option value="maintenance">Maintenance</option>
        </select>
        <div class="invalid-feedback">Please select a query type.</div>
    </div>
    <div class="col-12">
        <label class="form-label">Message</label>
        <textarea name="message" class="form-control" rows="4" required minlength="5"></textarea>
        <div class="invalid-feedback">Please enter your message (at least 5 characters).</div>
    </div>
    <div class="col-12">
        <button type="submit" class="btn btn-primary">Send</button>
    </div>
</form>

<script>

    (() => {
  'use strict'
  const forms = document.querySelectorAll('.needs-validation');
  Array.from(forms).forEach(form => {
    form.addEventListener('submit', event => {
      if (!form.checkValidity()) {
        event.preventDefault()
        event.stopPropagation()
      }
      form.classList.add('was-validated')
    }, false)
  });
})();

</script>
