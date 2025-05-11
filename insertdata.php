<?php include'connectdb.php' ?>

<?php 
    
    header('location: listalldata.php'); // header for refresh page , don't load submit form again .
    
    // declear varaible
    $empname= $_POST['empname'];
    $salary= $_POST['salary'];
    $hiredate= $_POST['hiredate'];

    // insert data
    $stmt = $connection ->prepare("CALL pro_InsertDataEmployee(?,?,?)"); // ? parameter
    $stmt -> bind_param("sis", $empname, $salary,$hiredate); // bind value
    // s = string , i= integer , s= string 
    if($stmt -> execute()){
        echo "<div style='color: green; font-weight: bold; text-align:center; font-size : 25px'>Insert Data Successfully using Stored Procedure</div>";
    }else{
        echo " Insert Error , Please check again ";
    }
    $stmt -> close(); 
    $connection -> close(); 
    
    // exit(); 
?>
<?php include 'listalldata.php' ?>
