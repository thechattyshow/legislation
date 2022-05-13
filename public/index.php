<!DOCTYPE html>
<html>
	<head>
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">	
	<style>
	#textboxid {
		height: 200px;
		width: 800px; 
		font-size: 14px; 
	}

	</style>
</head>
<h1>MHOC Bill Searchup</h1>


<?php

use Illuminate\Contracts\Http\Kernel;
use Illuminate\Http\Request;

define('LARAVEL_START', microtime(true));

/*
|--------------------------------------------------------------------------
| Check If The Application Is Under Maintenance
|--------------------------------------------------------------------------
|
| If the application is in maintenance / demo mode via the "down" command
| we will load this file so that any pre-rendered content can be shown
| instead of starting the framework, which could cause an exception.
|
*/

if (file_exists($maintenance = __DIR__.'/../storage/framework/maintenance.php')) {
    require $maintenance;
}

/*
|--------------------------------------------------------------------------
| Register The Auto Loader
|--------------------------------------------------------------------------
|
| Composer provides a convenient, automatically generated class loader for
| this application. We just need to utilize it! We'll simply require it
| into the script here so we don't need to manually load our classes.
|
*/

require __DIR__.'/../vendor/autoload.php';

/*
|--------------------------------------------------------------------------
| Run The Application
|--------------------------------------------------------------------------
|
| Once we have the application, we can handle the incoming request using
| the application's HTTP kernel. Then, we will send the response back
| to this client's browser, allowing them to enjoy our application.
|
*/

$app = require_once __DIR__.'/../bootstrap/app.php';

$kernel = $app->make(Kernel::class);

$response = $kernel->handle(
    $request = Request::capture()
)->send();

$kernel->terminate($request, $response);

include "database-connect.php";
//include "search-all.php";
?>
<br>
<form action="/search-keyword.php">
  <label for="fname">Bill Text:</label><br>
  <input type="text" name="billtext"><br>
  <input type="submit" value="Submit">
</form>
<br> <hr> <br> 

<form action="addbill.php">
Bill Number (Just numbers):<br>
<input type="number" name="numberInput"><br>
Bill Title:<br>
<input type="text" name="titleInput"><br>
 Bill Text:<br>
<input type="text" name="textInput" id="textboxid"><br>
<input type="submit" value="Submit">
</form>

<?php
// include "search-keyword.php";
$conn->close();
?>

</body>
</html>