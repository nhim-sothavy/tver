<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>List all data of Employees</title>
    <link rel="stylesheet" href="datatable.css">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.3.0/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.datatables.net/2.1.8/css/dataTables.bootstrap5.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
    <!-- <script src="https://code.jquery.com/jquery-3.7.1.js"></script> -->
    <!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.3.0/js/bootstrap.bundle.min.js"></script> -->
    <script src="https://cdn.datatables.net/2.1.8/js/dataTables.js"></script>
    <script src="https://cdn.datatables.net/2.1.8/js/dataTables.bootstrap5.js"></script>
</head>
<body>
    <div class="bg-text-content">
        <h3 class="content">LIST INFORMATION EMPLOYEES</h3>
    </div>
    <div class="container">
        <table  id="example" class="table table-striped " style="width:100%">
            <thead>
                <tr>
                    <th>Employee ID</th>
                    <th>FirstName</th>
                    <th>LastName</th>
                    <th>Salary</th>
                    <th>HireDate</th>
                    <!-- add new  -->
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                <div id="back-home" class="mb-3">
                    <button id="btn-back"  onclick="goBack()"><i class="fa-solid fa-caret-left"></i> Back</button>
                </div>
                <?php include'connectdb.php' ?>
                <?php 
                    $sql ='SELECT * from view_emp';
                    $result = $connection->query($sql);
                    if($result->num_rows > 0){
                        while($row = $result->fetch_assoc()){
                            // echo "<tr><td>".$row['EMP_ID'].
                            //      "<td>".$row['FirstName'].
                            //      "<td>".$row['LastName'].
                            //      "<td>".$row['SALARY'].
                            //      "<td>".$row['HireDate'].
                            //      "</td></tr>";
                            // add new code
                            echo "<tr>
                                        <td>".htmlspecialchars($row['EMP_ID'])."</td>
                                        <td>".htmlspecialchars($row['FirstName'])."</td>
                                        <td>".htmlspecialchars($row['LastName'])."</td>
                                        <td>".htmlspecialchars($row['SALARY'])."</td>
                                        <td>".htmlspecialchars($row['HireDate'])."</td>
                                        <td>
                                            <button class='btn btn-primary btn-sm edit' data-id='".htmlspecialchars($row['EMP_ID'])."'style ='/*width: 63px;*/'>Edit</button>
                                            <button class='btn  btn-danger btn-sm delete' data-id='".htmlspecialchars($row['EMP_ID'])."'>Delete</button>
                                        </td>
                                    </tr>";
                        }
                    }
                ?>

            </tbody>
            
        
        </table>
    </div>
    <?php include 'modal.php'?>
    <script>
        new DataTable('#example');
        function goBack(){
            window.location.href='index.php';
        }
        
   </script>
</body>
</html>