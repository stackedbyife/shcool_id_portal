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
    <div class="contianer-fluid top-head">
        <img src="images/logo.png" alt="">
        <h3 class="text-center border-bottom-custom">D.S ADEGBENRO ICT POLYTECHNIC ITORI</h3>
        <!-- Existing content of index.php -->
    </div>
    <div class="container mx-70 my-5">

        <div class="col-md second_section">
            <div class=" col-md gotopage">
               <h1 class="text-bold">REGISTRATION SUCCESSFUL!</h1>
    
               <P class="goto">Go to the DSA (Directorate of Student Affairs) to get your printed ID CARD in 3 days after the registration </P>
    
                  <div class="col-md mb-3">
                    <a href="index.php" class="gotobtn">Login</a>
                  </div>
                
            </div>
        </div>
    </div>
    <footer>
        &copy; {{ date('Y') }} D.S ADEGBENRO ICT POLYTECHNIC ITORI. All rights reserved.
    </footer>
</body>
</html>