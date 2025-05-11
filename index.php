<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Employee form System</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/flatpickr/dist/flatpickr.min.css">
</head>
<body>
    <div class="container">
        <div class="employee">
            <div class="row d-flex justify-content-center align-items-center">
                <div class="col-6">
                    <div class="card">
                        <img src="1.jpg" class="img-fluid" alt="">
                    </div>
                </div>
                <div class="col-6">
                    <div class="dis-emp d-flex flex-column justify-content-center align-content-center">
                        <h1>EMPLOYEES FORM SYSTEM </h1>
                        <div class="content">
                            <form action="insertdata.php" method="post">
                                <label for="empname">Employee Name:</label><br>
                                <input type="text" id="empname" class="form-control" name="empname" placeholder="Enter your name " required> 
                                <!-- php :use name not id -->
                                <label for="salary">Salary:</label><br>
                                <input type="number" id="salary" class="form-control" name="salary" placeholder="Enter your salary " required>
                                
                                <label for="hiredate">Hire Date:</label><br>
                                <input type="datetime-local" id="hiredate" class="form-control" name="hiredate" placeholder="Select Datetime " required>
                                <br>
                                <input type="submit" value="Submit" id="btn-submit">
                            </form>
                        </div>
                    </div>
                    
                </div>
            </div>
            
        </div>   
    </div>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/flatpickr"></script>
    <script>
        config={
            altInput: true,
            altFormat: "j F Y",
            dateFormat: "Y-m-d",
        }
        flatpickr("input[type=datetime-local]",config);
    </script>
</body>
</html>