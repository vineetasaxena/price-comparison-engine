<?
ob_start;
session_start();
include("config.php");
include("connection.php");
$ints1=$_POST['interest'];
$image=basename($_FILES['image']['name']);

$path="memberphoto/";
if($image)
{

$mainpath=$path.basename($_FILES['image']['name']);
if(move_uploaded_file($_FILES['image']['tmp_name'],$mainpath))
{
$sqlq="update members_profile set profilephoto='$image', interests='$ints1' where email='".$_SESSION['CI_valid_user']."'";

$query=mysql_query($sqlq);
}
else
{
echo "could not upload image";

}
}
else
{
$query1=mysql_query("update members_profile set interests='$ints1' where email='".$_SESSION['CI_valid_user']."'");
}

//$res=mysql_query($query);
if($query1>0)
{
header("location:setting_profiles.php?msg=Interests+updated");
die;
}
else
{
header("location:setting_profiles.php?msg=Interests and photo updated");

die;
}
?>