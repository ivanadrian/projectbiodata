<?php
session_start();
if(!isset($_SESSION['user']))
{
	?><script type="text/javascript">
document.location="include/home.php";
</script><?php
}else{
	if($_SESSION['user']=="admin"){
	?><script type="text/javascript">
document.location="include/page_admin.php";
</script><?php }else{
		?><script type="text/javascript">
document.location="include/page_user.php";
</script><?php
	}
}
?>
