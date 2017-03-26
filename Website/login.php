<?php

if(isset($_POST["username"], $_POST["password"]))
{

        $conn = new mysqli("localhost", "jamie", "3parj9Ld5Rs18", "test_db");

        if (mysqli_connect_errno()) {
		die("Connection failed: " . mysqli_connect_error());
        }

        if($stmt = $conn->prepare("SELECT password FROM users WHERE username=?")) {
                $stmt->bind_param("s", $username);
        } else {
                die("Prepared statement failed failed: " . $conn->error_list);
        }

        $username = $_POST["username"];

        if (!$stmt->execute()) {
            die("Execute failed: (" . $stmt->errno . ") " . $stmt->error);
        }

	$stmt->bind_result($user_password);

	$verify = "";
	while ($stmt->fetch()) {
		$verify = password_verify($_POST["password"], $user_password);
        }

	if ($verify) {
		$_SESSION["id"]=$username;
		$_POST["password"];
	}

        $stmt->close();
        $conn->close();

        //header( 'Location: ./progress.php' );
} else {
        echo "post parameters not set";
}
?>
