
<?php include 'connectdb.php'?>
<?php
    if (isset($_GET['Employee_id'])) {
        $emp_id = $_GET['Employee_id'];
        $sql = "SELECT * FROM employees WHERE Employee_id =?";
        $stmt = $connection->prepare($sql); 
        $stmt->bind_param("i", $emp_id);
        $stmt->execute();
        $result = $stmt->get_result();

        if ($result->num_rows > 0) {
            echo json_encode($result->fetch_assoc());
        } else {
            echo json_encode(["error"=> "Employee not found"]);
        }
        $stmt->close();
        $connection->close();
    }
?>




