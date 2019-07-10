# OldDashboard
A PHP / MySQL dashboard created a long time ago. I have decided to put this on GitHub for beginner developers to use as a baseline for a community or private dashboard system. I highly recommend changing the general structure of files, possibly converting to OOP, and making sure there is data sanitization/validation in several key files. Please read the warning below. 

# WARNING
The original project was for personal use and did not feature the public registration page. It should be assumed that the user list / account information is vulnerable to XSS and/or SQL injection. OldDashboard is a working portal / account system, but should absolutely not be used in a production environment.

## Features
* Administrator Dashboard:
  * Create new users (Administrator or Regular User role options)
  * View list of Users (no edit/delete features)

* User Dashboard:
  * Blank page
  * No edit/delete account features
  
* Sign Up:
  * Allows anyone to register a Regular User account
  * Email, username, password
  * No email verification / mailing supported at this time
  
## Instructions
1. Upload all files to your server
1. Import database.sql 
1. Modify the inc/connection.php file 

* Database Details
  * Change USERNAME, PASSWORD, DATABASE values for connection function  
* Database.sql:
  * Basic 'users' table stores ID, username, email, password, role
  * Default credentials: "Admin" username, with password "password"
 
  


