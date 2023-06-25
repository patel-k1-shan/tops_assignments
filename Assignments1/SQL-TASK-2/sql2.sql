-- a) All orders for more than $1000.
SELECT * FROM `order` WHERE amt > 1000;

-- b) Names and cities of all salespeople in New York with commission above 0.10. 
SELECT sname, city FROM sales_person WHERE city="New York" AND comm > 0.10;

-- c) All salespeople either in Barcelona or in London. 
SELECT sname, city FROM sales_person WHERE city IN ('New York','denver');
-- OR
SELECT * FROM sales_person WHERE city="New York" OR city="Denver";

-- d) All salespeople with commission between 0.10 and 0.12. (Boundary values should be excluded). 
SELECT * FROM sales_person WHERE comm > 0.10 AND comm < 0.12;

-- e) All customers with NULL values in city column. 
SELECT * FROM sales_person WHERE city='';

-- f) All orders taken on Oct 3Rd and Oct 4th 1994.
SELECT * FROM `order` WHERE ode >= '2023-06-03' AND ode <= '2023-06-04';

-- g) All customers serviced by peel or Motika.
SELECT S.sno,S.sname,C.cnm,C.cname FROM customer AS C JOIN sales_person AS S ON C.sno = S.sno WHERE (S.sname = 'John' OR S.sname = 'Maria');

-- h) All customers whose names begin with a letter from A to B
SELECT * FROM customer WHERE cname LIKE 'A%' AND cname LIKE '%B';

-- i) All customers excluding those with rating <= 100 unless they are located in Rome.
SELECT * FROM customer WHERE rating > 100 OR city = 'Dallas';

-- j) All orders except those with 0 or NULL value in amt field.
SELECT * FROM `order` WHERE amt > 0 OR amt != '';

-- k) Count the number of salespeople currently listing orders in the order table.
SELECT COUNT(sno) AS total_salespople FROM sales_person;
