
<!-- Alter Form Modal for Editing -->
<div id="editModal" class="modal">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" style="color: green;">Edit Employees</h5>
                <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>
            <div class="modal-body">
                <form id="editForm">
                    <input type="hidden" id="editEmpId" name="EMP_ID">
                    <div class="form-group">
                        <label for="editLastName">EmployeeName:</label>
                        <input type="text" id="editempname" name="EMP_NAME" class="form-control" placeholder="Enter your name" required>
                    </div>
                    <div class="form-group">
                        <label for="editSalary">Salary:</label>
                        <input type="number" id="editSalary" name="SALARY" class="form-control" placeholder="Enter your salary" required>
                    </div>
                    <div class="form-group">
                        <label for="editHireDate">HireDate:</label>
                        <input type="date" id="editHireDate" name="HIRE_DATE" class="form-control" placeholder="Enter your hiredate" required>
                    </div>
                    <button type="button" id="saveChanges" class="btn btn-success">Update</button>
                </form>
            </div>
        </div>
    </div>
</div>

<!-- link javascript file -->
<script src="modal.js"></script>