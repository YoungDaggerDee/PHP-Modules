<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel='stylesheet' type='text/css' href='../main.css'> 
    <title>OOP DATABASE MODULE -> SELECT</title>
</head>
<body>
    <?php
        require '../../Modules/database.php';

        $db = new Database();
        $db->setup('localhost','root','','roc');
        $db->connect();

        $db->setSql('select * from users');
        
        //CHECK FOR ERROR
        // $db->select() returns array with another array
        // First one is length of data in database
        // Second array includes rows
        echo "<h2>".$db->select()[0]['id']."</h2>";

        if(gettype($db->select()) != 'array'){
            echo $db->select();
            return;
        }
        for($i=0;$i<count($db->select());$i++){ 
            foreach($db->select()[$i] as $index=>$data){
                echo $index.' -> '.$data.'<br />';
            }
            echo "<br />";
        }
    ?>
    <div id='back'><a href='../../index.html'>back to main site</a></div>

</body>
</html>