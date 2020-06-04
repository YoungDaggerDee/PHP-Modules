<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>VALIDATOR - PASSWORD</title>
</head>
<body>
    <form method='post'>
        <input type='text' name='password'>
        <input type='submit' name='validate'>
    </form>
    <?php
        require '../Modules/validation.php';

        if(isset($_POST['validate'])){
            $validator = new Validator();
            $validator->setPassword($_POST['password']);
            echo $validator->verifyPassword();
        }
    ?>
</body>
</html>