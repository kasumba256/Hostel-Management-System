<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="payment.css">
    <title>HMS</title>
</head>
  <body>
    <div class="container" >
      <div class="sidebar">
         <img src="/Images/Logo-2.jpg" width="400" >
      </div>
      <div class="sidebar2">

          <div class="nav">
             <a href="/student">STUDENT</a>
             <a href="/room">ROOM</a>
             <a href="/parent">PARENT</a>
             <a href="/payment">PAYMENT</a>
          </div>
          
      </div>   
      <section>
        <form action="" method="POST">
          <label for="fname">First Name:</label>
              <input type="text" id="fname"><br>

              <label for="fname">Last Name:</label>
              <input type="text" id="lname"><br>

              <label for="Idno">Student ID No:</label>
              <input type="number" id="Idno"><br>

              <label for="floor"> floor:</label><br>
              <input type="text" id="floor"><br>

               <label for="room"> Room No:</label><br>
               <input type="number" id="room"><br><br>

               <p>Payment Mode</p>
               <input type="radio"> 
               <label for="">Mobile Money</label>
               <input type="radio"> 
               <label for="">Bank</label>

               <input type="submit" value="submit">  
        </form>
      </section> 
     
    </div>
  </body>
</html>