
 <?php
$servername = "localhost";
$username = "username";
$password = "password";
$dbname = "myDB";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
$query=$this->db->query(select * from employees
inner join dept_emp on dept_emp.emp_no = employees.emp_no
where dept_no='d004';);

$conn->close();
?> 
