<?php include 'connectdb.php'?>
<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_GET['EMP_ID'])) {
    $emp_id = $_GET['EMP_ID'];
    $sql = "DELETE FROM employees WHERE Employee_id = ?";
    $stmt = $connection->prepare($sql);
    $stmt->bind_param("i", $emp_id);

    if ($stmt->execute()) {
        echo json_encode(["status" => "success"]);
    } else {
         echo json_encode(["status" => "error", "message" => "Failed to delete employee."]);
    }
    $stmt->close();
    $connection->close();


}
?>