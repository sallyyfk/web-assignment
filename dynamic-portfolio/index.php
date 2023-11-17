<?php
session_start();

$euser = $epass = $usernameErr = $passwordErr = '';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $euser = $_POST["user"];
    $epass = $_POST["password"];

    if (empty($euser)) {
        $usernameErr = "<span style='color: red; font-size: 13px;'>Username is required</span>";
    }
    if (empty($epass)) {
        $passwordErr = "<span style='color: red; font-size: 13px;'>Password is required</span>";
    }

    if (empty($usernameErr) && empty($passwordErr)) {
        $users = array_map('str_getcsv', file('users.csv'));
        $usernameFound = false;

        foreach ($users as $user) {
            list($username, $fname, $lname, $dob, $gender, $password) = $user;

            if ($username === $euser) {
                $usernameFound = true;
                if ($password === $epass) {
                    $_SESSION['username'] = $username;
                    $_SESSION['fname'] = $fname;
                    $_SESSION['lname'] = $lname;
                    $_SESSION['gender'] = $gender;
                    $_SESSION['dob'] = $dob;

                    header("Location: home.php");
                    exit();
                } else {
                    $passwordErr = "<span style='color: red; font-size: 13px;'>Invalid password</span>";
                }
            }
        }

        if (!$usernameFound) {
            $usernameErr = "<span style='color: red; font-size: 13px;'>Invalid username</span>";
        }
    }
}
?>

<!DOCTYPE html>
<html>

<head>
    <title>Login Page</title>
    <link rel="stylesheet" href="regStyle.css">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">
    <meta name="viewport" content="width=device-width, initial-scale=1">
</head>

<body>
    <div class="logo-container">
        <h1 class="login-background">Login Page</h1>
    </div>
    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
        <table>
            <tr>
                <td>Username:</td>
                <td><input type="text" name="user" value="<?php echo $euser; ?>"></td>
            </tr>
            <tr>
                <td colspan="2"><?php echo $usernameErr; ?></td>
            </tr>
            <tr>
                <td>Password:</td>
                <td><input type="password" name="password" value="<?php echo $epass; ?>"></td>
            </tr>
            <tr>
                <td colspan="2"><?php echo $passwordErr; ?></td>
            </tr>
            <tr>
                <td colspan="2">
                    <a href="registration.php" class="login-link">Register</a>
                    <input type="submit" value="Login" class="login-link">
                </td>
            </tr>
        </table>
    </form>
</body>

</html>