

A login and signup form using HTML, PHP, and MySQL. This form allows users to register and login. 
All information is stored in a MySQL database. After successful login the user is redirected to their dashboard.


Technologies Used
- `HTML`
- `CSS`
-`SAAS`
- `JavaScript`
- `Bootstrap5`
- `PHP`
- `MySQL`



## Files
- *home.php* -- The main page showed after login. Edit your own homepage.
- *index.php* -- The main page showed before login.
- *login.php* -- Login Page.
- *signup.php* -- Signup Page.
-
- *logout.php* -- Logout to the dashboard page.

## Features

* Stores passwords in DB as hashes
* Easy logout via logout.php
* Passwords are hashed and stored (You can't view the original password of the user).
* Username and email validation is done.

## How to RUN THE CODE

1.INSTALL PHP 
    IF USING Windows:
        Download & Install PHP
        Go to PHP Downloads.
        Download the latest "Thread Safe" ZIP package.
        Extract it to C:\php.
        Add C:\php to your System PATH.

        Verify PHP Installation
        Open Command Prompt (CMD) and run:
        php -v
        If PHP is installed, it will show the version.
    
    Linux (Ubuntu/Debian)
            Install PHP
            sudo apt update
            sudo apt install php

            Verify Installation
            php -v

    Mac (Homebrew)
        Install PHP
        brew install php

        Verify PHP Installation
        php -v

2.Start a PHP Server
Once PHP is installed, navigate to your project folder and run:

cd path/to/your_project
php -S localhost:8000

3.Then, open http://localhost:8000 in your browser.

4.THE project will work well the databse is already configured since we are using a live database





