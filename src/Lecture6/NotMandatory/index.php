
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Second Part</title>
    <style>
        .error{
            color: red;
        }
    </style>
</head>
<body style="display: flex;justify-content: center; flex-direction: column">
<?php
require "./User.php";
$formindicator = true;
$emailerr = $phoneerr = $dateerr = $passerr = "";

if($_SERVER['REQUEST_METHOD']=="POST") {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $date = $_POST['date'];
    $pass = $_POST['pass'];
    $user = new User($name,$email,$phone,$pass,$date);

    $emailerr = $user->validemail();
    $phoneerr = $user->validphone();
    $dateerr = $user->validdate();
    $passerr = $user->validpass();
}
if ($_SERVER['REQUEST_METHOD'] == 'POST' && $user->showForm) {
    $formindicator =false;
    echo "you successfully registered. your data:" . '<br>';
    echo "name: " . $user->name . '<br>';
    echo "email: " . $user->email . '<br>';
    echo "phone Number: " . $user->phone . '<br>';
    echo "date of birth: " . $user->birth_date . '<br>';
    echo "password: " . $user->password;
}
?>
<form style="display: flex;<?php if(!$formindicator){echo "display: none;";} ?> flex-direction: column;width: 40%" method="post"  action="<?php echo $_SERVER["PHP_SELF"]; ?>" >
    <label>Name:</label>
    <input type="text"  name='name' >
    <label>email: <span class="error"><?php echo $emailerr ?></span></label>
    <input type="text"  name = 'email' >
    <label>phone: <span class="error"><?php echo $phoneerr ?></span></label>
    <input type="tel" name = 'phone' >
    <label>birth date: <span class="error"><?php echo $dateerr ?></span></label>
    <input type="date"  name = 'date'  >
    <label>password: <span class="error"><?php echo $passerr ?></span></label>
    <input type="password"  name = 'pass' >
    <input type="submit" name="submit" value="Submit">
</form>
</body>
</html>
