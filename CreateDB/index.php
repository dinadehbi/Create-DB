<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Connect DataBase</title>
  <style>
    *{
      margin: 0;
      padding: 0;
      font-family: cursive;
    }
    button{
      background-color:   #99ebff;
      height: 50px;
      width: 200px;
      border-radius: 5px;
      border: none;
      font-size: 16px;
    }
    header{
      height: 100vh;
      width: 100vw;
      display: flex;
      justify-content: center;
      align-items: center;
      background-color: #f0f5f5;
    }
    form{
      background-color: white;
      height: 300px;
      width: 400px;
      display: flex;
      flex-direction: column;
      justify-content: center;
      align-items: center;
      border-radius: 10px;
    }
    #span1{
      font-size: 15px;
      color: #26d926;
    }
    #span2{
      font-size: 20px;
      color: red;
    }
    button:hover{
      box-shadow: 0px 0px 10px 1px rgba(0, 0, 0, 0.2);

}

  </style>
</head>
<body>
<?php
 $display = $display2 = "";
if ($_SERVER["REQUEST_METHOD"] == "POST") {
   if(isset($_POST["submit"])){
   
    $servername = "localhast";
    $ussername = "root";
    $password = "";
    $databaseName = "dkoikina";
    try{
      $con = new PDO("mysql:host,$servername;databaseName=$databaseName",$ussername,$password);
      $con -> setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
        $display = "Connect successfully !";
    }catch(PDOException $e){
       $display2 = "Connection failed ! " . $e->getMessage();
    }
   }
}
?>
<header>
  <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method = "post">
  <h1>Connect Data Base</h1><br><br>
  <button type="submit" name="submit">Connection database</button><br><br>
  <span id="span1"><?php echo $display?></span><br>
  <span id="span12"><?php echo $display2?></span><br>
  </form>
</header>
  </body>
</html>