<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>LoginPage</title>
</head>
<body>
    <div class="container min-vh-100 d-flex align-items-center justify-content-center">
        <div class="card">
            <div class="card-header d-flex flex-column align-items-center">
                <h1 class="form-title">Welcome</h1>
                <p class="subtitle d-flex px-3">Log in to access your account and continue shopping securely</p>
            </div>
            <!-- Sign In Form -->
            <form class="mt-5" id="loginForm">
                <div class="mb-3">
                    <label for="email" class="form-label">Email</label>
                    <input type="email" class="form-control" id="email" pattern="[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$" required>
                </div>
                <div class="mb-3">
                    <label for="password" class="form-label">Password</label>
                    <input type="password" class="form-control" id="password" required>
                </div>
                <div class="forgotten-password mb-5">
                    <a href="#" class="text-decoration-none">Forgot password?</a>
                </div>

                <button type="submit" class="btn btn-success w-100">Login</button>
                <div class="mt-3 text-center">
                    
                    <p class="mt-2">Don't have an account? <a href="#" class="text-decoration-none">Sign up</a></p>
                </div>
            </form>
            
        </div>

    </div>

    <script src="/index.js"></script>
</body>
</html>