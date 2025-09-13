<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ID Card Portal</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('bootstrap/css/bootstrap.min.css') }}">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
</head>

<body>
    <div class="container-fluid">
        <div class="col-md top-head">
            <img src="{{ asset('images/logo.png') }}" alt="">
            <h3 class="text-center border-bottom-custom">D.S ADEGBENRO ICT POLYTECHNIC ITORI</h3>
            <!-- Existing content of index.php -->
        </div>

        <div class="col-md second_section">
            <div class="col-md second_section_inner">
                <h2>WELCOME TO DSAP ID CARD REQUEST PORTAL</h2>
                <p>NOTE: <br><span>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Assumenda doloribus,
                        laboriosam
                        quasi veritatis sequi voluptatibus quia </span></p>

                <form action="{{ route('login.submit') }}" method="post">
                @csrf
                    <div class="mb-3">
                        <label for="username" class="form-label">MATRIC NO:</label>
                        <input type="text" class="form-control " id="username" name="username" required>
                    </div>
                    <div class="mb-3">
                        <label for="password" class="form-label">PASSWORD:</label>
                        <input type="password" class="form-control " id="password" name="password" required>
                    </div>

                    <!-- <button type="submit" class="btn">Login</button> -->
                    <button type="submit" class="btn btn-primary">Login</button>
                </form>
            </div>
        </div>


    </div>

    <footer class="text-center mt-4">
        <p>&copy; {{ date('Y') }} D.S ADEGBENRO ICT POLYTECHNIC</p>
    </footer>
</body>

</html>
