Session
Session is a way to store information (in variables) to be used across multiple pages.

Unlike a cookie, the information is not stored on the users computer.

What is a PHP Session?
When you work with an application, you open it, do some changes, and then you close it. This is much like a Session. The computer knows who you are. It knows when you start the application and when you end. But on the internet there is one problem: the web server does not know who you are or what you do, because the HTTP address doesn't maintain state.

Session variables solve this problem by storing user information to be used across multiple pages (e.g. username, favorite color, etc). By default, session variables last until the user closes the browser.

So; Session variables hold information about one single user, and are available to all pages in one application.

Create a PHP Session Variable
A session is started with the session_start() function.

Session variables are set with the PHP global variable: $_SESSION.

Unset Session Variable
To unset a session variable, just use the unset() function with the session variable name as the parameter.

Destroy a PHP Session
To remove all global session variables and destroy the session, use session_unset() and session_destroy():



to build and user auth system

Database

register.php
resister_process.php
login.php   
login_process.php
dashboard.php
logout.php