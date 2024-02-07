<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login - Administrators</title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css"
    integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
  <style>
    body {
      background-color: #f8f9fa;
    }

    .container {
      max-width: 400px;
      margin: 0 auto;
      padding-top: 100px;
    }

    .card {
      border: none;
      border-radius: 10px;
      box-shadow: 0px 2px 10px rgba(0, 0, 0, 0.1);
    }

    .card-header {
      background-color: #007bff;
      border-bottom: none;
      text-align: center;
      color: #fff;
      font-size: 24px;
      font-weight: bold;
      padding: 30px 20px;
      border-top-left-radius: 10px;
      border-top-right-radius: 10px;
    }

    .card-body {
      padding: 30px 20px;
    }

    .form-group {
      margin-bottom: 20px;
    }

    .form-label {
      font-weight: bold;
    }

    .btn-login {
      width: 100%;
      background-color: #007bff;
      border-color: #007bff;
    }

    .btn-login:hover {
      background-color: #0069d9;
      border-color: #0062cc;
    }
  </style>
</head>

<body>

  <div class="container">
    <div class="card">
      <div class="card-header">
        Administrator Login
      </div>
      <div class="card-body">
        <form action="login_handler.php" method="post">
          <div class="form-group">
            <label for="username" class="form-label">Username</label>
            <input type="text" class="form-control" id="username" name="username" required>
          </div>
          <div class="form-group">
            <label for="password" class="form-label">Password</label>
            <input type="password" class="form-control" id="password" name="password" required>
          </div>
          <button type="submit" class="btn btn-primary btn-login">Login</button>
        </form>
      </div>
    </div>
  </div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
</body>

</html>
