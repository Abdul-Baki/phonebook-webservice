Phonebook Web Service
=====================

This is a phonebook web service.
This web service was written as a learning exercise and now I'm posting it on Github to get an understanding of using Github :)

Requirements
------------

- LAMP Stack (this app was written & tested on Apache, MySQL, and PHP)
- Database with your phonebook entries table headers:
    - id (Primary Key)
	- surname 
	- firstname
	- phonenumber 
- There is a .setup.sh script that will update the php files with you db username and passwords
please run this from within the same directory as the php files


if you are unsure of the table structure I've provided the sql command used to generate the table or if you prefer just edit the sql queries to match your database tables 

Examples
--------
- Listing all entries: <url>/test/GET/
- Searching for an entry using surname <url>test/GET/<surname>	https://yourhost.com/test/GET/Cantona
- Adding an entry: <url>/test/PUT/<surname>/<firstname>/<phone_number>	https://yourhost.com/test/PUT/Federer/Roger/01001010010
- Updating an entry: <url>/test/POST/<uid>/<phone_number>	https://yourhost.com/test/POST/15/01001010020
- Deleting an entry: <url>/test/DELETE/<uid>	https://yourhost.com/test/DELETE/15


This is just a web service generated as a learning exercise I have very little experience with web development and therefore if using this then please feel free to extend
Other areas to look at:
- Securing rest api access (examples: JSON Web Token, OAuth)
- Hardening Apache
- Extending functionality of web application
- limiting access based on credentials/role

Database setup
--------------
There must be a database called phonebook already created if not then use the following command to generate one:

`create database phonebook;`

Then create the table called listings:

`create table listings (id INT NOT NULL PRIMARY KEY AUTO_INCREMENT, surname VARCHAR (20), firstname VARCHAR (20), phonenumber VARCHAR (11));`

If you want to use your down database and tables just update the query within the php files and substitute the relevant changes for the database properties
