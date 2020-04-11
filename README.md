Description:
An online marks percentage calculator to measure the percentage of marks obtained in the examination. Enter the marks you have scored and also provide the total marks to find the exam mark percentage.

This project is constructed under the Ubuntu OS (18.4).
The software’s that are used in this project are php, html, apache2 and MySQL.

PHP is a recursive acronym for "PHP: Hypertext Preprocessor". PHP is a server side scripting language that is embedded in HTML. It is used to manage dynamic content, databases, session tracking, even build entire e-commerce sites. The php version that is used in this project is php 7.2.24. 
At the first step we need create two files one is for html and one is for php. In the Html file the front end part takes place and in the php file the backend part exist. Before connecting the MySQL to the page, we need to create a database in the server and create a table in the database. So that the data that is entered in the html page gets entered into the sql. 

MySQL is an Oracle-backed open source relational database management system (RDBMS) based on Structured Query Language (SQL). MySQL runs on virtually all platforms, including Linux, UNIX and Windows. MySQL is an important component of an open source enterprise stack called LAMP.

Apache Web Server is an open-source web server creation, deployment and management software. Initially developed by a group of software programmers, it is now maintained by the Apache Software Foundation. The html file is run on the localhost of the apache2.


PHP is scripting language which does run directly on browser. for running them you need to setup a server or use online server. For local server we will be using **apache** and **php**.
 Prerequisites: - 
* Apache
* PHP
* MYSQL
 Installing Prerequisites: - 
For Apache: - sudo apt-get install apache2 
For PHP: - sudo apt-get install php 
For install MySQL: - sudo apt install mysql-server
Steps to run the code: - 
Step 1: - After installing the Apache2, 
Saving the old page of apache welcome. (In case you may need that in future.) 
Step 2: - 
Make a PHP file to write code in it.
 sudo gedit /var/www/main.php 
Step 3: - 
Now open the the main.php shared file and copy the codes from it and paste it. 
                                                                Or 		
You can skip **Step: 2** and copy the file directly into the html folder. 
sudo cp main.php /var/www/ 
Step 4: - 
Create the html page using sudo gedit /var/www/mainaapage.html
Restart Apache: sudo service apache2 restart

Running the tests: - 
Open Your Browser and Enter localhost into address bar. “localhost/htmlpage.html” then it should open the file and enter the marks as you require.
