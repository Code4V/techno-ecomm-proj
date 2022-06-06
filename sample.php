<?php 
include('dbconnect.php');
session_start();


    if(isset($_POST['submit']))
    {
        $data = $_POST['data'];
        $allData = implode(",", $data );
        echo $allData;
    }




?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="sample.css?v=<?php echo time(); ?>">
    <title>Document</title>
</head>
<body>
    <form action="sample.php" method="post" >
            <p><input type="checkbox" name="data[]" value="Carpenter">Carpenter</p>
            <p><input type="checkbox" name="data[]" value="Painter">Painter</p>
            <p><input type="checkbox" name="data[]" value="Electrician">Electrician</p>
            <p><input type="checkbox" name="data[]" value="Welder">Welder</p>
            <p><input type="checkbox" name="data[]" value="Plumber">Plumber</p>

            <div class="button">
                        <input type="submit" value="Log In" name="submit">
            </div>
    </form>

    <div class="dropdown">
        <button class="btn"> Dropdown button </button>
        <div class="dropdown-menu">
            <a class="dropdown-item" href="#">Action</a>
            <a class="dropdown-item" href="#">Another action</a>
            <a class="dropdown-item" href="#">Something else here</a>
        </div>
    </div>

</body>
</html>