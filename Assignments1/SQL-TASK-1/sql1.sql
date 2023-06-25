-- a) Get First_Name from employee table using alias name “Employee Name”. 
SELECT first_name AS "Employee Name" from employee;

-- b) Get FIRST_NAME, Joining year, Joining Month and Joining Date from employee table. 
SELECT first_name, year(joining_date) AS "Joining Year", month(joining_date) AS "Joining Month", day(joining_date) AS "Joining Date" FROM employee;

-- c) Get all employee details from the employee table order by First Name Ascending And Salary descending? 
SELECT * FROM employee ORDER BY first_name ASC, salary DESC;

-- d) Get employee details from employee table whose first name contains „o‟. 
SELECT * FROM employee WHERE first_name LIKE '%o%';

-- e) Get employee details from employee table whose joining month is “January”. 
SELECT * FROM employee WHERE MONTH(joining_date)=1;

-- f) Get department, total salary with respect to a department from employee table Order By total salary descending. 
SELECT department, SUM(salary) AS total_salary FROM employee GROUP BY department ORDER BY total_salary DESC;

-- g) Get department wise maximum salary from employee table order by salary ascending? 
SELECT department, MAX(salary) AS max_salary FROM employee GROUP BY department ORDER BY max_salary ASC;

-- h) Select first_name, incentive amount from employee and incentives table for those Employees who have incentives and incentive amount greater than 3000 
SELECT e.first_name, i.incentive_amt AS incentive_amount FROM employee e JOIN incentives i ON e.emp_id = i.emp_ref_id WHERE i.incentive_amt > 3000;

-- i) Select 2nd Highest salary from employee table. 
SELECT * FROM employee GROUP BY salary ORDER BY salary DESC LIMIT 1,1; 
-- OR
SELECT first_name, MAX(salary) as 2nd_highest_salary FROM employee WHERE salary < (SELECT MAX(salary) FROM employee);

-- j) Select first_name, incentive amount from employee and incentives table for all Employees who got incentives using left join. 
SELECT e.first_name , i.incentive_amt AS incentive_amount FROM employee e LEFT JOIN incentives i ON e.emp_id = i.emp_ref_id;

-- k) Create View OF Employee table in which store first name, last name and salary only. 
CREATE VIEW employeeView AS SELECT first_name,last_name,salary FROM employee;

-- -- L) Create Procedure to find out department wise highest salary. 
-- The additional DELIMITER statements are used to temporarily change the delimiter to // so that the stored procedure's code is treated as a single block. After defining the stored procedure, the delimiter is changed back to the default ; using DELIMITER ;.

-- Please execute this revised code, and it should successfully create the stored procedure without encountering the syntax error.
DELIMITER //

CREATE PROCEDURE GetDepartmentHighestSalary()
BEGIN
    SELECT department, MAX(salary) AS highest_salary
    FROM employee
    GROUP BY department;
END//

DELIMITER ;
-- To execute this stored procedure, we can use the following code:

-- CALL GetDepartmentHighestSalary();

-- m) Create after Insert trigger on Employee table which insert records in view table. 
DELIMITER //

CREATE TRIGGER after_insert_employee
AFTER INSERT
ON Employee
FOR EACH ROW
BEGIN
    INSERT INTO employeeview (first_name, last_name, salary)
    VALUES (NEW.first_name, NEW.last_name, NEW.salary);
END//

DELIMITER ;
