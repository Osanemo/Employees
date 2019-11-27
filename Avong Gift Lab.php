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

$result = mysqli_query($db, $query);
$row = mysqli_fetch_array($result);

while ($row = mysqli_fetch_array($result)) {
 echo $row["emp_no"]. " " . $row["birth_date"]. " " . $row["lastname"]. " " . $row["gender"]. " " . $row["hire_date"]. " " . $row["dep_emp_no"]. " " . $row["dept_no"]."<br>";


} else {
    echo "0 results";
}
$conn->close();
?>
