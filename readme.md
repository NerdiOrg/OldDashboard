# OldDashboard
A PHP / MySQL dashboard created a long time ago. I have decided to put this on GitHub for beginner developers to use as a baseline for a community or private dashboard system.

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
  * Change USERNAME, PASSWORD, DATABASE values for connection function
  
* Database.sql:
  * Basic 'users' table stores ID, username, email, password, role
  * Default credentials: "Admin" username, with password "password"
 
  


