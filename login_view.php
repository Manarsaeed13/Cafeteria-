<div class="d-flex justify-content-center align-items-center py-5">
    <form id="loginForm" class="p-5 rounded-4 shadow-lg w-100" style="max-width: 450px; background-color: #E7E1B1;" novalidate>
        <h1 class="text-center fw-bold mb-5 text-success">Cafeteria Login</h1>

        <!-- Email -->
        <div class="mb-4">
            <label for="email" class="form-label fw-semibold text-success">Email Address</label>
            <input type="email" id="email" class="form-control form-control-lg border-2 border-success" placeholder="name@gmail.com" required>
            <div class="invalid-feedback">Please enter a valid email.</div>
        </div>

        <!-- Password -->
        <div class="mb-4">
            <label for="password" class="form-label fw-semibold text-success">Password</label>
            <input type="password" id="password" class="form-control form-control-lg border-2 border-success" placeholder="Enter password" required minlength="6">
            <div class="invalid-feedback">Password must be at least 6 characters.</div>
        </div>

        <!-- Button -->
        <button type="submit" class="btn btn-success w-100 btn-lg text-white fw-bold mt-2 shadow-sm">Login</button>

        <div class="text-center mt-4">
            <a href="#" class="text-decoration-none fw-bold text-success">Forget Password?</a>
        </div>
    </form>
</div>

<script>
document.getElementById('loginForm').addEventListener('submit', function(event) {
    event.preventDefault();
    if (!this.checkValidity()) {
        event.stopPropagation();
        this.classList.add('was-validated');
    } else {
        alert("Login Successful! (Prototype)");
        window.location.href = 'index.php?page=home';
    }
});
</script>
