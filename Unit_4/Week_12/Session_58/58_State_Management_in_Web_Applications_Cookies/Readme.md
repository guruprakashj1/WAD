

What is cookie in PHP?
----------------------
- A cookie is often used to identify a user. A cookie is a small file that the server embeds on the user's computer. Each time the same computer requests a page with a browser, it will send the cookie too. With PHP, you can both create and retrieve cookie values.

Create Cookies with PHP

- A cookie is created with the setcookie() function.

- Syntax
    - setcookie(name, value, expire, path, domain, secure, httponly);

Retrieve Cookies with PHP

- PHP has several functions for retrieving cookies:

    - $_COOKIE
    $_COOKIE is a PHP super global variable which is used to read the cookies that are sent from a web browser to a PHP script. Cookie values are saved in associative array format.

    - isset()
    isset() function is used to check if a cookie is set or not. If the cookie is set, it will return true otherwise false.

    - count()
    count() function is used to count the number of cookies.

    - var_dump()    
    var_dump() function is used to display the content of a variable. It displays the type of variable and its value.

