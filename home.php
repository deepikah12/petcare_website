<!-- home screen -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>home screen</title>
    <style>
        body{
            display: grid;
            background-image:url("image100.jpg");
            border-radius: 10px;
            background-position:center top;
            background-attachment:fixed;
            min-height: 100vh;
            font-style:italic;
            color:rgba(5, 54, 84, 0.945);
            background-blend-mode:darken;
            background-size: cover;
            justify-content:center;
            margin:auto;
 
        }
        #dd{
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
        }


        .dd1{
            width: 200px;
            margin:100px;
            position: relative;
            text-align: center;
        }


        .jj{opacity:0.5;
        margin-left: 0.3cm;;
        }


        .mm{  border-radius: 10px;
            box-shadow: 15px 10px 10px 0px rgb(196, 159, 203);
        }



        .bf{
            position: absolute;
            top: 30px;
            left: 40px;
            margin-right: 25cm;
            text-align: center;
         
        }
        button{
            padding:15px;
            background-color:#dbdddf;
            margin:10px;
            border-radius: 5px;

        }
        

    </style>
</head>
<body>
    <div class="button">
        <button onclick="window.location='home.php' ">Home</button>
        <button  onclick="window.location='logout.php'">logout</button>
        <button  onclick="window.location='history.php'">history</button>
        <h1 style="font-style:italic;color:rgba(5, 54, 84, 0.945)">Pet Care Service</h1>
        <h2 style="color:  rgba(5, 54, 84, 0.945);font-style: italic;">Choose how you want us to care for your pets. Connecting pet parents with verified and trusted pet care service providers. Our team is working towards ensuring that your pets receive a safe , nurturing , loving , fun and carefree environment.</h2>


    </div>
        



    <div id=dd>

        <div class="dd1">
           <img src="boarding.jpg" class=mm width="300px";>
           <button onclick="window.location='boarding.php'">Pet Boarding</button>
            <h2>Discover affordable home pet boarding sevices for your furry friend with a caring pet sitter in your neighbourhood</h2>
            
        </div>
        

        <div class="dd1">
            <img src="daycare6.jpg" class=mm width="300px"  >
            <button onclick="window.location='pet_daycare.php'">Pet daycare</button>
            <h2 style="margin: 0px">Your pet will feel much safer in your absence when they are at  daycare service rather than being home alone for long hours.</h4>
        </div>

        <div class="dd1">
            <img src="dayoutfinal.jpg" class=mm width="300px">
            <button onclick="window.location='dayout.php'">Pet day out</button>
            <h2 style="margin: 0px">Our pet care service connects you with verified dog walkers who can provide their service multiple times during the day.</h4>
        </div>

        <div class="dd1">
            <img src="pooling2.jpg"  class=mm width="300px" >
            <button onclick="window.location='pooling.php'">Pet pooling</button>
            <h2 style="margin: 0px">our services provides pet pooling where pets hvae some fun at pool.</h4>
        </div>

        <div class="dd1" >
            <img src="grooming.jpg" class=mm width="300px">
            <button onclick="window.location='grooming.php'">Pet grooming</button>
            <h2 style="margin: 0px">Pet grooming is an essential aspect of pet care.We are dedicated in providing the best possible care.</h4>
        </div>
       
    </div>
</body>
</html>



