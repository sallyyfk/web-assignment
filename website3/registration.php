<?php
if (isset($_POST["submit"])) {
    $username = $_POST["username"];
    $fname = $_POST["fname"];
    $lname = $_POST["lname"];
    $password = $_POST["password"];
    $gender = $_POST["gender"];
    $dob = $_POST["dob"];
    
    $data = array($username, $fname, $lname, $gender, $dob, $password);
    $f = fopen("users.csv", 'a');
    if ($f === false) {
        die('Error opening the file ' . $file);
    }
    fputcsv($f, $data);
    fclose($f);
    header("Location: login.php");
    exit();
}
?>

<link rel="stylesheet" href="style.css">
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
                <td><input type="text" name="username"></td>
            </tr>
            <tr>
                <td>First Name:</td>
                <td><input type="text" name="fname"></td>
            </tr>

            <tr>
                <td>Last Name:</td>
                <td><input type="text" name="lname"></td>
            </tr>

            <tr>
                <td>Password:</td>
                <td><input type="password" name="password"></td>
            </tr>

            <tr>
                <td>Confirm Password:</td>
                <td><input type="password" name="cpassword"></td>
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
                <td>Date of Birth:</td>
                <td><input type="date" name="dob"></td>
            </tr>

            <tr>
                <td colspan="2">
                    <span id="error-message" style="color: red; font-size: 13px;"></span>
                </td>
            </tr>
        </table>

        <a href="registration.php" class="login-link" style="float: left; padding: 10px;">Login</a>
        <button type="submit" name="submit" style="float: right; padding: 10px;">Submit</button>
    </form>

    <script>
        function submitForm() {
            var formData = {
                username: document.getElementsByName("username")[0].value,
                fname: document.getElementsByName("fname")[0].value,
                lname: document.getElementsByName("lname")[0].value,
                password: document.getElementsByName("password")[0].value,
                cpassword: document.getElementsByName("cpassword")[0].value,
                gender: document.getElementsByName("gender")[0].value,
                dob: document.getElementsByName("dob")[0].value
            };

            var errorMessage = validateForm(formData);

            if (errorMessage) {
                document.getElementById("error-message").innerText = errorMessage;
            } else {
                document.getElementById("error-message").innerText = "";
                document.getElementById("registrationForm").submit();
            }
        }

        function validateForm(fheaderormData) {
            if (!formData.username.trim()) {
                return "Username is required.";
            }

            if (!formData.fname.trim()) {
                return "First Name is required.";
            }

            if (!formData.lname.trim()) {
                return "Last Name is required.";
            }

            if (!formData.password.trim()) {
                return "Password is required.";
            }

            if (formData.password.trim().length < 8) {
                return "Password should be at least 8 characters long.";
            }

            if (formData.password !== formData.cpassword) {
                return "Passwords do not match.";
            }

            if (!formData.gender) {
                return "Please select a gender.";
            }

            if (!formData.dob) {
                return "Date of Birth is required.";
            }

            return "";
        }
    </script>
</body>

</html>