<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Login Perpus USD</title>
 <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous" />
</head>

<body>
  <section class="vh-100 bg-light">
    <div class="container py-5 h-100">
      <div class="row d-flex justify-content-center align-items-center h-100">
        <div class="col-md-8 col-lg-6 col-xl-4">
          <div class="card shadow-2-strong">
            <div class="card-body p-5">
              <div class="text-center mb-4">
                <img src="{{ asset('img/logo.USD.png') }}" class="img-fluid" alt="Logo USD" style="max-width: 150px;" />
              </div>
              <h3 class="mb-3 text-center">LOGIN PERPUS USD</h3>
              <form method="POST">
                @csrf
                <!-- Username input -->
                <div class="form-outline mb-4">
                  <label class="form-label" for="login-username">Username</label>
                  <input type="text" id="login-username" class="form-control form-control-lg" name="username" placeholder="Enter username" required />
                </div>

                <!-- Password input -->
                <div class="form-outline mb-3">
                  <label class="form-label" for="login-password">Password</label>
                  <input type="password" id="login-password" class="form-control form-control-lg" name="password" placeholder="Enter password" required />
                </div>

                <!-- Checkbox -->
                <div class="form-check d-flex justify-content-start mb-4">
                  <input class="form-check-input" type="checkbox" name="remember" value="1" id="login-remember" />
                  <label class="form-check-label ms-2" for="login-remember"> Remember me </label>
                </div>

                <!-- Submit button -->
                <div class="d-grid">
                  <button type="submit" name="submit" class="btn btn-primary btn-lg btn-block">Login</button>
                </div>
              </form>
              <p class="small fw-bold mt-2 pt-1 mb-0 text-center">Don't have an account? <a href="register" class="link-danger">Register</a></p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe"
    crossorigin="anonymous"></script>
</body>

</html>
