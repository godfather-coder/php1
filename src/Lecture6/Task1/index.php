
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TASK 1</title>
</head>
<body style="display: flex;justify-content: center; flex-direction: column">
<?php
require "./User.php";

$name = $_POST['name'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$date = $_POST['date'];
$pass =$_POST['pass'];
$user = new User($name,$email,$phone,$pass,$date);

?>
    <form style="display: flex; flex-direction: column;width: 40%" method="post"  action="<?php echo $_SERVER["PHP_SELF"]; ?>" >
        <label>Name:</label>
        <input type="text" name='name' required>
        <label>email:</label>
        <input type="email" name = 'email' required>
        <label>phone:</label>
        <input type="tel"  name = 'phone' required>
        <label>birth date:</label>
        <input type="date"  name = 'date' required>
        <label>password:</label>
        <input type="password"   name = 'pass' required>
        <input type="submit" name="submit" value="Submit">
    </form>
<?php
echo "you successfully registered. your data:".'<br>';
echo "name: ". $user->name .'<br>';
echo "email: ".$user->email .'<br>';
echo "phone Number: " .$user->phone .'<br>';
echo "date of birth: " .$user->birth_date .'<br>';
echo "password: ".$user->password;
?>
</body>
</html>