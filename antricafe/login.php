<?php
  //session_start();
  if(!empty($_SESSION['username_antricafe'])){
    header('location:home');
  }
?>
<!doctype html>
<html lang="en" data-bs-theme="auto">

<head>
    <script src="../assets/js/color-modes.js"></script>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.122.0">
    <title>Antri Cafe - Aplikasi Pemesanan Makanan dan Minuman</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/5.3/examples/sign-in/">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <style>
        body {
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            background-color: #f5f5f5;
        }

        .form-signin {
            width: 100%;
            max-width: 330px;
            padding: 15px;
            background-color: white;
            border-radius: 8px;
            box-shadow: 0px 4px 8px rgba(0, 0, 0, 0.1);
        }

        .form-signin .form-floating:focus-within {
            z-index: 2;
        }

        .form-signin h1 {
            margin-bottom: 20px;
        }

        .checkbox {
            display: flex;
            align-items: center;
            justify-content: center;
            margin-bottom: 20px;
        }

        .checkbox label {
            margin-left: 5px;
            font-size: 14px;
        }

        .form-signin button {
            width: 100%;
            background-color: #007bff;
            color: white;
            border: none;
            padding: 10px;
            border-radius: 5px;
            transition: 0.3s;
        }

        .form-signin button:hover {
            background-color: #0056b3;
        }

        footer {
            text-align: center;
            font-size: 14px;
            color: #888;
            margin-top: 15px;
        }
    </style>
</head>

<body>
    <main class="form-signin">
        <form class="needs-validation" novalidate action="proses/proses_login.php" method="POST">
        <!-- Logo -->
        <div class="text-center mb-4">
            <h1 class="h3 mb-3 fw-normal">Please Login</h1>
        </div>

        <!-- Form -->
        <form action="login.php" method="post">
            <div class="form-floating mb-3">
                <input name="username" type="email" class="form-control" id="floatingInput" placeholder="name@example.com" required>
                <label for="floatingInput">Email address</label>
            </div>
            <div class="form-floating mb-3">
                <input name="password" type="password" class="form-control" id="floatingPassword" placeholder="Password" required>
                <label for="floatingPassword">Password</label>
            </div>

            <!-- Checkbox (Remember me) -->
            <div class="checkbox">
                <label>
                    <input type="checkbox" value="remember-me"> Remember me
                </label>
            </div>
            <button class="btn btn-primary" type="submit" name="submit_validate" value="abc">Login</button>
        </form>

        <!-- Footer -->
        <footer>&copy; 2024</footer>
    </main>
</body>

</html>

<script>
    // Example starter JavaScript for disabling form submissions if there are invalid fields
    (() => {
    'use strict'

    // Fetch all the forms we want to apply custom Bootstrap validation styles to
    const forms = document.querySelectorAll('.needs-validation')

    // Loop over them and prevent submission
    Array.from(forms).forEach(form => {
    form.addEventListener('submit', event => {
    if (!form.checkValidity()) {
    event.preventDefault()
    event.stopPropagation()
    }

    form.classList.add('was-validated')
    }, false)
    })
    })()
</script>