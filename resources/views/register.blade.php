<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <!-- Menggunakan Bootstrap CSS dari CDN untuk styling -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous" />
    <!-- Menggunakan Font Awesome untuk ikon -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
    <!-- Memanggil CSS terpisah -->
    <link href="{{ asset('css/register.css') }}" rel="stylesheet">
</head>
<body>
<div class="register-container">
    <h2>Register</h2>
    <!-- Form registrasi -->
    <form method="post">
        @csrf <!-- Blade directive untuk menambahkan token CSRF -->
        <!-- Field untuk username -->
        <div class="mb-3 input-icon">
            <i class="fas fa-user"></i>
            <input type="text" name="username" class="form-control" placeholder="Username" required>
        </div>
        <!-- Field untuk email -->
        <div class="mb-3 input-icon">
            <i class="fas fa-envelope"></i>
            <input type="email" name="email" class="form-control" placeholder="Email" required>
        </div>
        <!-- Field untuk password -->
        <div class="mb-3 input-icon">
            <i class="fas fa-lock"></i>
            <input type="password" name="password" class="form-control" placeholder="Password" required>
        </div>
        <!-- Tombol submit -->
        <button type="submit" class="btn btn-primary w-100">Register</button>
    </form>
    <!-- Link ke halaman login -->
    <div class="text-center mt-3">
        <span>Already have an account? </span><a href="login">Login</a>
    </div>
</div>
</body>
</html>
