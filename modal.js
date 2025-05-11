
document.addEventListener('DOMContentLoaded', function () {
    const table = document.getElementById('example');
    // Edit Button Click
    table.addEventListener('click', function (event) {
        if (event.target.classList.contains('edit')){
            const empId = event.target.getAttribute('data-id');
         // Fetch employee details via AJAX (optional for preloading the modal) 
            fetch(`get_employee.php?Employee_id=${empId}`) 
                .then(response => response.json())
                .then(data => {
                // Populate modal fields
                document.getElementById('editEmpId').value = data.Employee_id; 
                document.getElementById('editempname').value = data.Employee_name ;
                document.getElementById('editSalary').value = data.Salary; 
                document.getElementById('editHireDate').value = data.Hire_Date;
                // Show modal
                $('#editModal').modal('show');
            });
    
        };
    });

    
    // Save Changes Button in Modal
    document.getElementById('saveChanges').addEventListener('click', function () {
        const formData = new FormData(document.getElementById('editForm'));
        fetch('update_employee.php', {
            method: 'POST',
            body: formData,
        })
            .then(response => response.json())
            .then(data => {
                if (data.status === 'success') {
                    alert('Employee updated successfully!'); 
                    location.reload(); // Reload the table
                } else {
                    alert('Error:' + data.message);
                }
                   
            });
    });

    
    // Delete Button Click
    table.addEventListener('click', function (event) {
        if (event.target.classList.contains( 'delete')) {
            const empId = event.target.getAttribute('data-id');
            if (confirm('Are you sure you want to delete this employee?')) {
                fetch(`delete_employee.php?EMP_ID=${empId}`, {
                    method: 'POST',
                })
                    .then(response => response.json())
                    .then(data => {
                        if (data.status === 'success') {
                            alert('Employee deleted successfully!'); 
                            location.reload(); // Reload the table
                        } else {
                            alert('Error delete employee: '+ data.message);
                        }
                    });
            }
        }
    });
        
        
   
});