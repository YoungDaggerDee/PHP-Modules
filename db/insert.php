<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel='stylesheet' type='text/css' href='../main.css'> 
    <title>OOP DATABASE MODULE -> INSERT</title>
</head>
<body>
    <?php
        require '../Modules/database.php';

        $db = new Database();
        $db->setup('localhost','root','','roc');
        $db->connect();

        $db->setSql('insert into tasks (teamkey,header,text) values ("204psa","header","text")');
        
        if($db->insertData()){
            echo 'Inserted';
        }else{
            echo $db->error;
            return;
        }
    ?>
    <div id='back'><a href='../index.html'>back to main site</a></div>

</body>
</html>