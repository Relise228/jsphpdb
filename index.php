<?php session_start();?>
<?php include("includes/a_config.php");?>
<!DOCTYPE html>
<html>
<head>
	<?php include("includes/head-tag-contents.php");?>
</head>
<body>

<?php
	
	$host='localhost';
	$db = 'baza';
	$username = 'root';
	$password = '';
	$dsn = "mysql:host=$host;dbname=$db";


	$admin_login = $_POST["login"];
	$admin_password = $_POST["password"];
	

    if (isset($_POST["admin_exit"])) {
		unset($_SESSION["admin"]);
		echo "<div id='success-log' class='slide-up'>Success!</div>";
	}

	
	
	if (isset($_POST["login"]) && isset($_POST["password"]) ) {
		$conn = new PDO($dsn, $username, $password);
        $count = $conn->query("SELECT COUNT(*) FROM admin WHERE login='$admin_login' AND password='$admin_password'");
		$count = $count->fetch()[0];
        if ($count == 1) {
			$_SESSION["admin"] = $admin_login;
			echo "<div id='success-log' class='slide-up'>Success!</div>";
        }else{
			echo "<div id='error-log' class='slide-up'>Login/Password not found</div>";
		} 
	
        $conn = NULL;
	}

	if(isset($_POST['old-pass']) && isset($_POST['new-pass']) && isset($_POST['confirm-pass'])){
		$oldPass = $_POST['old-pass'];
		$newPass = $_POST['new-pass'];
		$confirmPass = $_POST['confirm-pass'];

		$conn = new PDO($dsn, $username, $password);
		$logSesion = $_SESSION["admin"];
		$dbPass = $conn->query("SELECT password FROM admin WHERE login='$logSesion'");
		$dbPass = $dbPass->fetch()[0];

		if ($oldPass === $dbPass) {
			if($newPass === $confirmPass) {
				$conn->query("UPDATE admin SET password = '$confirmPass' WHERE login = '$logSesion'");
				echo "<div id='success-log' class='slide-up'>Success! Password Changed!</div>";
			} else echo "<div id='error-log' class='slide-up'>Password doesn't match</div>";

		} else echo "<div id='error-log' class='slide-up'>Old password wrong</div>";





	}
	

	if(isset($_POST["area-description"])){
		$description = $_POST["area-description"];
		$conn = new PDO($dsn, $username, $password);
		$conn->query("UPDATE admin SET description = '$description'");
		$conn = NULL;
	}

	if(isset($_POST["project-id"])){
		$idProject = $_POST["project-id"];
		$titleProject = $_POST["title-project"];
		$textProject = $_POST["text-project"];
		$linkProject = $_POST["link-project"];
		$conn = new PDO($dsn, $username, $password);
		$conn->query("UPDATE projects SET title='$titleProject', link='$linkProject', description='$textProject' WHERE id='$idProject'");
		$conn = NULL;
	}

	if(isset($_POST["work-id"])){
		$idWork = $_POST["work-id"];
		$titleWork = $_POST["work-title"];
		$placeWork = $_POST["work-place"];
		$yearWork = $_POST["work-year"];
		$descriptionWork = $_POST["work-description"];
		$conn = new PDO($dsn, $username, $password);
		$conn->query("UPDATE experiences SET position='$titleWork', exp_date='$yearWork',company ='$placeWork', description='$descriptionWork' WHERE id='$idWork'");
		$conn = NULL;
	}
	if(isset($_POST["skill-id"])){
		$skillId = $_POST["skill-id"];
		$skillTitle = $_POST["skill-title"];
		$skillPercent = $_POST["skill-percent"];
		$conn = new PDO($dsn, $username, $password);
		$conn->query("UPDATE skills SET title='$skillTitle', skill_value='$skillPercent' WHERE id='$skillId'");
		$conn = NULL;
	}
	if(isset($_POST["title-project-add"]) && $_POST["text-project-add"] && $_POST["link-project-add"] && $_POST["img-project-add"]) {
		$titlePrAdd = $_POST["title-project-add"];
		$descripPrAdd = $_POST["text-project-add"];
		$linkPrAdd = $_POST["link-project-add"];
		$imgPrAdd = $_POST["img-project-add"];
		$conn = new PDO($dsn, $username, $password);
		$conn->query("INSERT INTO projects(title, link, img, description) VALUES ('$titlePrAdd', '$linkPrAdd', '$imgPrAdd', '$$descripPrAdd')");
		$conn = NULL;
	}
	if(isset($_POST["work-title-add"]) && isset($_POST["work-place-add"]) && isset($_POST["work-year-add"]) && isset($_POST["work-description-add"])){
		$workTitleAdd = $_POST["work-title-add"];
		$workPlaceAdd = $_POST["work-place-add"];
		$workYearAdd = $_POST["work-year-add"];
		$workDescAdd = $_POST["work-description-add"];
		$conn = new PDO($dsn, $username, $password);
		$conn->query("INSERT INTO experiences(position, exp_date, company, description) VALUES ('$workTitleAdd', '$workYearAdd', '$workPlaceAdd', '$workDescAdd')");
		$conn = NULL;
	}
	if(isset($_POST["skill-title-add"]) && isset($_POST["skill-percent-add"])){
		$skillTitleAdd = $_POST["skill-title-add"];
		$skillPercentAdd = $_POST["skill-percent-add"];
		echo $skillTitleAdd;
	

		$conn = new PDO($dsn, $username, $password);
		$conn->query("INSERT INTO skills(title, skill_value) VALUES ('$skillTitleAdd', '$skillPercentAdd')");
		$conn = NULL;
	}
	if (isset($_POST["project-id-hidden"])){
		$delProjId = $_POST["project-id-hidden"];
		$conn = new PDO($dsn, $username, $password);
		$conn->query("DELETE  FROM projects WHERE id='$delProjId'");
		$conn = NULL;
	}
	if (isset($_POST["work-id-hidden"])){
		$delWorkId = $_POST["work-id-hidden"];
		$conn = new PDO($dsn, $username, $password);
		$conn->query("DELETE  FROM experiences WHERE id='$delWorkId'");
		$conn = NULL;
	}
	if (isset($_POST["skill-id-hidden"])){
		$delSkillId = $_POST["skill-id-hidden"];
		$conn = new PDO($dsn, $username, $password);
		$conn->query("DELETE  FROM skills WHERE id='$delSkillId'");
		$conn = NULL;
	}

?>





<?php include("includes/design-top.php");?>
<?php include("includes/navigation.php");?>


<?php include("includes/footer.php");?>

</body>
</html>