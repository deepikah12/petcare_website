<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>pooling</title>
    
    <style>
      body{
            background-image:url("image100.jpg");
            background-size: cover;
            background-repeat:no-repeat;
            background-attachment:fixed;
            justify-content: center;
            margin: auto;
            background-blend-mode:darken;
        }
      form {
            max-width: 300px;
            margin: 0 auto;
            font-family: Arial, sans-serif;
            font-size: 16px;
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0 0 20px rgba(0, 0, 0, 0.2);
            background: transparent;
            border: 2px solid ;
            border-color:wheat;
            border-radius: 20px;
            backdrop-filter: blur(5px);}
      
      h1 {
            text-align: center;
            font-size: 36px;
            margin-bottom: 30px;
            color: #170230;}
      
      label {
            display: block;
            font-weight: bold;
            color: #01080f;
        }
      
      input[type="text"],
      select,
      input[type="number"] {
        display: block;
        width: 70%;
        padding: 5px;
        border: none;
        border-radius: 5px;
        margin-bottom: 10px;
        font-size: 16px;
        background-color: #ecf0f1;
        border: 1px solid #bdc3c7;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        color: #01080f;
      }
      
      select {
        background-image: linear-gradient(to bottom, #3498db, #2980b9);
        color: #fff;
        border: none;
        border-radius: 5px;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
      }
      
      select option {
        background-color: #fff;
        color: #2c3e50;
      }
      
     button{
      width: 40%;
      background-color: #34a0e2;
      border-radius: 5px;
      padding: 2px;
      box-shadow: wheat;
      border-color: #2980b9;



     }
    </style>
  </head>
    <body>
     
        <div>
          <h1>Pet Pooling Bookings</h1>
          <form action="" method="POST">
            
            <label for="name">Pet Name:</label>
            <input type="text" id="name"  name="petname" placeholder="Enter pet name" ><br>
            <label for="breed">Pet Breed:</label>
            <input type="text" id="breed" name="petbreed" placeholder="Enter pet breed"><br>
            <label for="age">Pet Age:</label>
            <input type="number" id="age" name="petage" placeholder="Enter pet age"><br>
            <label for="date">Date:</label>
            <input type="date" id="date" name="date" ><br><br>
            <label for="time">Pooling_time:</label>
            <input id="time" type="time" name="time"><br><br>
            <button type="submit" name="submit"> Submit</button>
          </form>
        </div>
 
      
        <?php
    
        $name = $breed = $age = $date = $time = "" ;
        
        if($_SERVER["REQUEST_METHOD"]=="POST"){
            $name = $_POST['petname'];
            $breed = $_POST['petbreed'];
            $age = $_POST['petage'];
            $date = $_POST['date'];
            $time= $_POST['time'];
            
            $con = mysqli_connect("localhost","root","","pet_care");                      
       
			        $query = "INSERT INTO `pooling` ( petname,petbreed, petage, date, time) VALUES ( '$name', '$breed', '$age', '$date' , '$time')";
                        $result = mysqli_query($con,$query);

                        if($result){
                          
			        echo "<h2 style='color:blue; margin-left :10cm;'> Booking successful</h2>";
                    header("Location: successful.php");
			            }
                                else
                             {
                                echo ("Fail"); 
                             }
                     } 

              
        ?>


         </body>
</html>