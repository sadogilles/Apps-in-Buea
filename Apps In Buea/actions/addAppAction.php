
<?php
function insert(){
	
	$appName=strip_tags($_POST['appName']);//you can use also htmlspecialchars();,but it will insert the tags into your database;
	$appLink=strip_tags($_POST['appLink']);//strip_tags() removes all the various tags enter in the  input field	;
	$websiteLink=strip_tags($_POST['websiteLink']);
	$creatorName=strip_tags($_POST['creatorName']);
	$shortDescription=strip_tags($_POST['shortDescription']);
	$longDescription=strip_tags($_POST['longDescription']);
	
	
	
	if(isset($appName)&&isset($creatorName)){
		 $conn=new PDO('mysql:host=localhost;dbname=appsinbuea','root','',array(PDO::ATTR_ERRMODE=>PDO::ERRMODE_EXCEPTION));
		  $sql=$conn->prepare("insert into appstable(appName,appLink,websiteLink,creatorName,shortDescription,longDescription) VALUES(?,?,?,?,?,?)");
		    $sql->execute(array($appName,$appLink,$websiteLink,$creatorName,$shortDescription,$longDescription));
			echo "<script> alert('The application has been sucessfully added')</script>";
	         header('refresh:0;url=../index.php');		
	}else{
		echo "connection ERROR";
		}	
}
insert();
?>
