1. Index_data.html- Creates a graph and table from data located in the header.
2. Index_json.html- Creates a graph and table from sampleData.json through getData_json.php you can scale this by changing the Json file in order to use multiple data sets. 
3. Index_mysql.html- Creates a graph and table by referencing a SQL database by going through getData_sql.php

The 2 ways to collect data every minute is 
1. Create a Cron job that has a php file connect to mysql.
	- Read from file and insert value into table.
	- Insert a datetime value into the table.
2. Create a event handler in mysql that inserts file values and datetime. 