<?php
//Check if $_GET is set to avoid error
if(isset($_GET['name'])){
    $name = $_GET['name'];
}

//Echo $name value if $_GET is set
function greeting(){
    if(isset($_GET['name'])){
    $name = $_GET['name'];
     echo "Hello" . $name;  
    }
}
greeting();

?>
<!DOCTYPE html> 
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>GET Superglobal</title>
</head>

<body>
    <!--Add Form elements--> 
    <form method="get" action="index.php">
    <input type="text" id="name" name="name">
    <input type="submit" value="submit"> 
    </form> 
</body>

</html>

