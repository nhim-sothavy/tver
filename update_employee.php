<?php include 'connectdb.php'?>
<?php
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        // Collect and sanitize input data
        $emp_id = isset($_POST['EMP_ID']) ? intval($_POST['EMP_ID']): null;
        $emp_name = isset($_POST['EMP_NAME']) ? $connection->real_escape_string($_POST['EMP_NAME']): null;
        $salary = isset($_POST['SALARY']) ? floatval($_POST['SALARY']): null;
        $hire_date = isset($_POST['HIRE_DATE']) ? $connection->real_escape_string($_POST['HIRE_DATE']): null;
        // Validate input
        if (!$emp_id || !$emp_name || !$salary || !$hire_date) {
            echo json_encode([
            "status" => "error",
            "message" => "All fields are required."
            ]); 
            exit;
        }
        // Update query
        $sql = "UPDATE employees
        SET Employee_name = ?, Salary = ?, Hire_Date = ?
        WHERE Employee_id = ?";
        $stmt = $connection->prepare($sql);
        if ($stmt) {
            $stmt->bind_param("sdsi", $emp_name, $salary, $hire_date, $emp_id);
            if ($stmt->execute()) {
                echo json_encode(["status" => "success", "message" => "Employee updated successfully."]); 
            } else {
            echo json_encode(["status" => "error", "message" => "Failed to update employee."]);
            }
            $stmt->close();
        } else {
            echo json_encode([
                "status" => "error",
                "message" => "Failed to prepare SQL statement: ". $connection->error
            ]);
        }
        $connection->close();
    }else{
        echo json_encode([
            "status" => "error",
            "message" => "Invalid request method."
        ]);
    }
?>