<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>VALIDATOR - EMAIL</title>
</head>
<body>
    <form method='post'>
        <input type='text' name='email'>
        <input type='submit' name='validate'>
    </form>
    <?php
        require '../Modules/validation.php';

        if(isset($_POST['validate'])){
            $validator = new Validator();
            $validator->setEmail($_POST['email']);
            echo $validator->verifyEmail();
        }
    ?>
</body>
</html>