
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <title>Document</title>
</head>
<body>
<?php $n_error=$r_error="";
if ($_SERVER["REQUEST_METHOD"] == "POST"){
    
if(empty($_POST['name']) or empty($_POST['roll']))
    {
        $n_error='enter name'."<br>";
        $r_error='enter roll';
    } 
}?>
    <div class="card" style="width: 18rem;">
        <img src="wallpaper.jpg" class="card-img-top">
        <div class="card-body">
            <form action="" method="POST">
                name<input type="text" name="name">
                <span style="color:red" >*  <?php echo $n_error;?></span><br>
                roll<input type="number" name="roll">
                <span style="color:red" >* <?php echo $r_error;?></span><br>
                <input type="submit">
            </form>
        </div>
      </div>
    
<?php
   
if (!empty($_POST['name']) && !empty($_POST['roll']))
    {
        echo $_POST['name']."<br>";
        echo $_POST['roll']."<br>";
    }

?>
</body>

</html>
