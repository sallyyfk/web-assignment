<?php

$usernameErr = $fnameErr = $lnameErr = $genderErr = $passErr = $cpassErr = $dobErr = "";
$username = $fname = $lname = $gender = $password = $cpassword = $dob = "";

session_start();

if (isset($_POST["submit"])) {
    if (empty($_POST["username"]))
        $usernameErr = "<span style='color: red; font-size: 13px;'>Username is required</span>";
    else
        $username = $_POST["username"];

    if (empty($_POST["fname"]))
        $fnameErr = "<span style='color: red; font-size: 13px;'>First Name is required</span>";
    else
        $fname = $_POST["fname"];

    if (empty($_POST["lname"]))
        $lnameErr = "<span style='color: red; font-size: 13px;'>Last Name is required</span>";
    else
        $lname = $_POST["lname"];

    if (empty($_POST["password"])) {
        $passErr = "<span style='color: red; font-size: 13px;'>Password is required</span>";
    } else if (strlen($_POST["password"]) < 8) {
        $passErr = "<span style='color: red; font-size: 13px;'>Password should be at least 8 characters long</span>";
    } else {
        $password = $_POST["password"];
    }


    if (empty($_POST["cpassword"])) {
        $cpassErr = "<span style='color: red; font-size: 13px;'>Confirm your password</span>";
    } else if ($password !== $_POST["cpassword"]) {
        $cpassErr = "<span style='color: red; font-size: 13px;'>Passwords do not match</span>";
    } else {
        $cpassword = $_POST["cpassword"];
    }    

    if (empty($_POST["dob"]))
        $dobErr = "<span style='color: red; font-size: 13px;'>Date of Birth is required</span>";
    else
        $dob = $_POST["dob"];

    if ($fnameErr == "" && $lnameErr == "" && $genderErr == "" && $usernameErr == "" && $passErr == "" && $cpassErr == "" && $dobErr == "") {
        $data = array($username, $fname, $lname, $gender, $dob, $password);
        $f = fopen("users.csv", 'a');
        if ($f === false) {
            die('Error opening the file ' . $file);
        }
        fputcsv($f, $data);
        fclose($f);

        $_SESSION['username'] = $username;
        $_SESSION['fname'] = $fname;
        $_SESSION['lname'] = $lname;
        header("Location: login.php");
        exit();
    }
}
?>

<link rel="stylesheet" href="regStyle.css">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">
<meta name="viewport" content="width=device-width, initial-scale=1">

<html>

<head>
    <title>Registration</title>
</head>

<body>
    <div class="logo-container">
        <h1 class="regin">Registration Form</h1>
    </div>
    <form id="registrationForm" method="POST" action="<?php echo $_SERVER['PHP_SELF'] ?>">
        <table>
            <tr>
                <td>Username:</td>
                <td><input type="text" name="username" value="<?php echo $username; ?>"></td>
            </tr>
            <tr>
                <td colspan="2"><?php echo $usernameErr; ?></td>
            </tr>

            <tr>
                <td>First Name:</td>
                <td><input type="text" name="fname" value="<?php echo $fname; ?>"></td>
            </tr>
            <tr>
                <td colspan="2"><?php echo $fnameErr; ?></td>
            </tr>

            <tr>
                <td>Last Name:</td>
                <td><input type="text" name="lname" value="<?php echo $lname; ?>"></td>
            </tr>
            <tr>
                <td colspan="2"><?php echo $lnameErr; ?></td>
            </tr>

            <tr>
                <td>Password:</td>
                <td><input type="password" name="password" value="<?php echo $password; ?>"></td>
            </tr>
            <tr>
                <td colspan="2"><?php echo $passErr; ?></td>
            </tr>

            <tr>
                <td>Confirm Password:</td>
                <td><input type="password" name="cpassword" value="<?php echo $cpassword; ?>"></td>
            </tr>
            <tr>
                <td colspan="2"><?php echo $cpassErr; ?></td>
            </tr>

            <tr>
                <td>Gender:</td>
                <td>
                    <select name="gender">
                        <option value="male">Male</option>
                        <option value="female">Female</option>
                    </select>
                </td>
            </tr>
            <tr>
                <td colspan="2"><?php echo $genderErr; ?></td>
            </tr>

            <tr>
                <td>Date of Birth:</td>
                <td><input type="date" name="dob" value="<?php echo $dob; ?>"></td>
            </tr>
            <tr>
                <td colspan="2"><?php echo $dobErr; ?></td>
            </tr>

            <!-- <tr>
                <td colspan="2">
                    <span id="error-message" style="color: red; font-size: 13px;"></span>
                </td>
            </tr> -->
        </table>

        <a href="registration.php" class="login-link" style="float: left; padding: 10px;">Login</a>
        <button type="submit" name="submit" style="float: right; padding: 10px;">Submit</button>
    </form>

</body>

</html>