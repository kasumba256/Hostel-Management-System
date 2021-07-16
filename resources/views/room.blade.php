<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="room.css"/>
    
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
          <section>
             <form action=""  target="_self" method="POST">
              <label for="floor"> floor:</label><br>
              <input type="number" id="floor"><br>
               <label for="room"> Room No:</label><br>
               <input type="number" id="room"><br>
               <label for="room"> Room Type:</label><br>
                
                <label for="single">Single</label>
                <input type="radio" id="single" value="single">
                <label for="double">double</label>
                <input type="radio" id="double" value="double" >


               <label for="hfname">Hoster First Name:</label><br>
               <input type="text" id="hfname"><br>
              <label for="hfname">Hoster Last Name:</label><br>
              <input type="text" id="hlname"><br>
              <label for="tel">Contact:</label><br>
              <input type="tel" id="tel"><br>
              <label for="Idno">Student ID No:</label>
              <input type="number" id="Idno"><br>

                 
              <input type="submit" value="submit">    
                 
                 
               

             </form>
          </section>
      </div>    
     
    </div>
    <script src="sys.js"></script>
  </body>
</html>
 