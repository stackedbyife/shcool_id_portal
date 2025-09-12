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
        
      
        <div class="col-md second_section">
            <div class="col-md second_section_inner">
                <h2 class="text-center">REGISTER</h2>
                <p>NOTE: <br><span>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Eveniet vero, culpa non quo praesentium quas?</span></p>
    
                <form action="#" method="post">
                    <div class="col-md mb-3">
                        <label for="recipt" class="form-label">SUG RECIPT NO:</label>
                        <input type="number" class="form-control " id="recipt" name="recipt" required>
                    </div>
                    <div class="col-md mb-3">
                        <label for="surname" class="form-label">SURNAME:</label>
                        <input type="text" class="form-control " id="surname" name="surname" required>
                    </div>
                    <div class="col-md mb-3">
                        <label for="othername" class="form-label">OTHER NAME:</label>
                        <input type="text" class="form-control " id="othername" name="othername" required>
                    </div>
                    <div class="col-md mb-3">
                        <label for="matric" class="form-label">MATRIC NO:</label>
                        <input type="text" class="form-control " id="matric" name="matric" required>
                    </div>
                    <div class="col-md mb-3">
                        <label for="department" class="form-label">DEPARTMENT:</label>
                        <input type="text" class="form-control " id="department" name="department" required>
                    </div>
                    <div class="col-md mb-3">
                        <label for="level" class="form-label">LEVEL:</label>
                        <input type="text" class="form-control " id="level" name="level" required>
                    </div>
                    <div class="col-md mb-3">
                        <label for="session" class="form-label">SESSION:</label>
                        <select class="form-select form-control" id="session" name="session" required>
                            <option value="" disabled selected>Select your session</option>
                            <option value="2020/2021">2020/2021</option>
                            <option value="2021/2022">2021/2022</option>
                            <option value="2022/2023">2022/2023</option>
                            <option value="2023/2024">2023/2024</option>
                        </select>
                    </div>
                    <div class="col-md mb-3">
                        <label for="bloodgroup" class="form-label">BLOOD GROUP/GENOTYPE:</label>
                        <input type="text" class="form-control " id="bloodgroup" name="bloodgroup" required>
                    </div>
                    <div class="col-md mb-3">
                        <label for="file" class="form-label" >UPLOAD PASSPORT & SIGNATURE (it must be scanned)</label>
                        <input type="file" class="form-control" id="file" name="file" accept="image/*" required>
                    </div>
                    <button type="submit" class="btn">Submit</button>
            </div>
        </div>
    </div>
     <footer>
        &copy; {{ date('Y') }} D.S ADEGBENRO ICT POLYTECHNIC ITORI. All rights reserved.
    </footer>
</body>

</html>