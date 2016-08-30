<?
include_once "config.php";
include_once "connection.php";
session_start();

?>
<?
if(empty($_SESSION['CI_valid_user']))
{

	header("location:index.php");
}

session_start();
session_unset();

session_destroy();
header("location:index.php");

?>




