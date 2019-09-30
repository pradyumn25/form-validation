
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<?php $n_error=$r_error="";
if ($_SERVER["REQUEST_METHOD"] == "POST"){
    
if(empty($_POST['name']) && empty($_POST['roll']))
    {
        $n_error='enter name'."<br>";
        $r_error='enter roll';
    } 
}?>

    <form action="" method="POST">
        name<input type="text" name="name">
        <span style="color:red" >*  <?php echo $n_error;?></span><br>
        roll<input type="number" name="roll">
        <span style="color:red" >* <?php echo $r_error;?></span><br>
        <input type="submit">
    </form>
<?php
   
if (isset($_POST['name']) && isset($_POST['roll']))
    {
        echo $_POST['name']."<br>";
        echo $_POST['roll']."<br>";
    }

?>
</body>

</html>
