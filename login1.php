<!--login page-->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>login</title>

    <style>
        body{
            display: grid;
            background-blend-mode:darken;
            background-size: cover;
            background-repeat:no-repeat;
            background-attachment:fixed;
            justify-content: center;
            margin: auto;
            background-image:url("image100.jpg");   
        }
       
        
         .dd {
            display: grid;
            background-color: rgb(250, 250, 250);
            justify-content: center;
            width: 500px;
            height: 370px;
            margin-left: 2cm;
            background: transparent;
            border: 2px solid rgba(36, 33, 33, 0.6);
            backdrop-filter: blur(5px);
            border-radius: 20px;
            font-style:italic;  
            
        }
        input{
            font-size: 16px;
            background-color: #fcfcfc;
            border: 1px solid #342e2e70;
            border-radius: 10px;
            padding: 3px;
            width:400px;
        }
        button{  
            background-color: #ebe3ec;
            border: 1px solid #2b2229bb;
            border-radius: 5px;
            padding: 7px;
            margin-left: 3cm;
            width:150px;

        }
        h1{color:rgb(165, 37, 163);
            font-style:italic;
            text-align: center;
        }
        #l{ margin-left: 2cm;
        color:rgb(5, 66, 31);
        font-style:italic;
    }
        
    </style>
</head>
<body >
    <h1 id=l>
        Pet Care Center
    </h1>
    <div class="dd"> 
        <form role="form"  name="first" action="" method="post">
            <div class="center">
                
                <h1>Login</h1>
           

                <input type="email"  style="color: blue" id="Eid" placeholder=" Enter Email id" name="Email_ID" required> <br/><br>
                <input type="password"  id="pwd" placeholder="Enter Password" name="password" required><br/>
                <br/>
               
                <button type="submit" name="submit" onclick="window.location='home.php'"  >login</button>
                
                <br/>
                
                    
            </div>
            
        </form>
        <div class="=center"> <h2 style ="color:rgb(16, 10, 93)">Click here to  Register </h2>
        <button onclick="window.location='register.php'" > Click here</button></div>
        
        </div>
    </div>

    <?php

if(isset($_POST['submit'])){
     $Emailid = $_POST['Email_ID'];	
           
    $Password = $_POST['password'];
            
            
    $con = mysqli_connect("localhost","root","","pet_care");
            
    if (mysqli_connect_errno())
        {
            echo "Failed to connect to MySQL: " .mysqli_connect_error();
        }
            
            
    $query = "SELECT * FROM register WHERE Emailid='$Emailid' and password='$Password'";
        $result = mysqli_query($con,$query);
        if($result)
        {
            if(mysqli_num_rows($result)>0)
                 {
                    session_start();
                    $_SESSION['id'] = $Emailid;
                    header("Location:home.php");
                     }
            else{
                echo("Invalid credenatials");
                }
            }                     
        else{
            echo("Invalid credenatials");
            }
    }                   
?>
</body>
</html>