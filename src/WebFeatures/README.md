# Web Features
## Sessions
### Session Start
```php
<?php
    session_start();
    print_r($_SESSION);
```
### Modify Session
```php
<?php
    session_start();
    $_SESSION["MY_SESSION"] = "Hello World!";
    print_r($_SESSION);
```
### Remove all session variable
```php
<?php
    session_start();
    session_unset(); 
```
### Destroy Session
```php
<?php
    session_start();
    session_destroy(); 
```
## Forms
## GET and POST data
## Cookies
## HTTP Headers
## HTTP Authentication
## HTTP Status Codes 