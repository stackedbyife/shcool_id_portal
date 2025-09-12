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
    <div class="container-fluid">

        <div class="second_section">
            <div class="gotopage">
                <div class="mb-3 card-preview">
                    
                        <img src="images/logo.png" alt="" class="logo-preview">
                        <h4>NIGERIA ASSOCIATION OF COMPUTING STUDENT</h4>
                        <span>Itori Ewekoro Abeokuta Ogun state </span>
    
                   
    
                        <img src="images/profile.png" alt="passport photo" class="passport-preview">
                   
                    <div class="mb-3 details-preview ">
                        
                        <p>Matric No: <span >DSA/ICT/001</span></p>
                        <p>Department: <span>Computer Science</span></p>
                        <p>Level: <span>ND II</span></p>
                        <p>Date of Birth: <span>01/01/2000</span></p>
                        <p>Session: <span>2024/2026</span></p>
                    </div>
                </div>
                
            </div>
        </div>
    </div>
    <footer>
        &copy; {{ date('Y') }} D.S ADEGBENRO ICT POLYTECHNIC ITORI. All rights reserved.
    </footer>
</body>
</html>