<?php 
    if(!empty($_SESSION['username_decafe'])) {
        header('location:home');
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Laundry Zulfi | Login</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <!-- link icon bootstrap -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
</head>
<body>
<section class="vh-100">
  <div class="container h-100">
    <div class="row d-flex align-items-center justify-content-center h-100">
      <div class="col-md-8 col-lg-7 col-xl-6">
        <img src="assets/img/laundry.png" class="img-fluid" alt="Phone image" style="width: 600; height: 600px;">
      </div>
      <div class="col-md-7 col-lg-5 col-xl-5 offset-xl-1">
	  <form class="needs-validation" novalidate action="proses/proses_login.php" method="POST">
            <h1 class="h3 mb-3 fw-bold text-center">Please login</h1>

            <div class="form-floating">
                <input name="username" type="email" class="form-control" id="floatingInput" placeholder="name@example.com" required>
                <label for="floatingInput">Email address</label>
                <div class="invalid-feedback">
                    Masukkan Email yang valid.
                </div>
            </div>
            <div class="form-floating">
                <input name="password" type="password" class="form-control" id="floatingPassword" placeholder="Password" required>
                <label for="floatingPassword">Password</label>
                <div class="invalid-feedback">
                    Masukkan Password.
                </div>
            </div>

            <div class="d-flex justify-content  my-3">
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="remember-me" id="flexCheckDefault">
                    <label class="form-check-label" for="flexCheckDefault">
                        Remember me
                    </label>
                </div>
            </div>
            <button class="btn btn-primary w-100 py-2" type="submit" name="submit_validate" value="abc" >Login</button>
        </form>
      </div>
    </div>
  </div>
</section>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous">
    </script>
</body>
</html>