<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
</head>
<body class="bg-light">
    <main class="container vh-100 d-flex justify-content-center 
    align-items-center">
        <div class="col-6 mx-auto text-center px-5 py-5 border rounded bg-white">
        @if (Session::has('error'))
            <div class="alert alert-danger">
                {{Session::get('error')}}
            </div>
        @endif
        <h1>Login</h1>
            <p>Silahkan login dengan Akun Google yang kamu punya</p>
            <a href='{{ url ('auth/redirect') }}' class="btn border-primary"><img width="20px" 
            style="margin-bottom:3px; margin-right:5px" alt="Google sign-in"
            src="https://upload.wikimedia.org/wikipedia/commons/thumb/5/53/Google_%22G%22_Logo.svg/512px-Google_%22G%22_Logo.svg.png"/>
            Login dengan Google</a>
        </div>

    </main>
    
</body>
</html>