<?php
    include "./db_config.php";
    session_start();
    $error=array();
    if($_SERVER["REQUEST_METHOD"]=="POST"){
        $userEmail=$_POST["gmail"];
        $userPass=$_POST["password"];

  
        $sql= "SELECT * FROM users where email= ? ";
        $stmt=$conn->prepare($sql);
        $stmt->bind_param("s",$userEmail);
        $stmt->execute();
        $result=$stmt->get_result();
        if($row=$result->fetch_assoc()){
            $loginPass=$row["password"];

            if(password_verify($userPass,$loginPass)){
                $_SESSION["ID"]=$row["id"];
                $_SESSION["gmail"]=$row["email"];
                $_SESSION["username"]=$row["name"];
                $_SESSION["userType"]=$row["userType"];
                
                if($row["userType"]=="admin"){
                    header("Location:adminDashboard.php");
                }
                else{
                    header("Location:userDashboard.php");
                }

            }
            else{
                $error[]="Password Did not Match";
            }


        }
        else{
            $error[]="Gmail Do not Exist";
        }


    }
        


?>






<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Login</title>
  <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="flex items-center justify-center min-h-screen bg-gray-100">

  <div class="w-full max-w-sm p-6 bg-white rounded-lg shadow-md">
    <h2 class="mb-4 text-2xl font-bold text-center text-gray-800">Login</h2>
    <form action="<?php echo $_SERVER['PHP_SELF'];?>" method="POST" class="space-y-4">
      <div>
        <label for="gmail" class="block text-sm font-medium text-gray-700">Gmail</label>
        <input type="email" name="gmail" id="gmail" required
          class="w-full px-3 py-2 mt-1 border rounded-md focus:outline-none focus:ring-2 focus:ring-blue-400">
      </div>

      <div>
        <label for="password" class="block text-sm font-medium text-gray-700">Password</label>
        <input type="password" name="password" id="password" required
          class="w-full px-3 py-2 mt-1 border rounded-md focus:outline-none focus:ring-2 focus:ring-blue-400">
      </div>

      <button type="submit"
        class="w-full px-4 py-2 text-white bg-blue-600 rounded-md hover:bg-blue-700">Login</button>

      <p class="text-sm text-center text-gray-600">Don't have an account?
        <a href="./index.php" class="text-blue-500 hover:underline">Register here</a>
      </p>
    </form>
    <div style="color:red" class=" text-center">
        <?php
        if(!empty($error)){
            foreach($error as $e){
                echo $e."<br>";
            }
        }?>


    </div>
  </div>

</body>
</html>
