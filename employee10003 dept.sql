--what is the department of employee  with id 10003 
-- remove comment to run
/*!select dept_no from dept_emp where emp_no =10003*/;





--to displaye details of employees who are in the same 
select * from employees
inner join dept_emp on dept_emp.emp_no = employees.emp_no
where dept_no='d004';
