<!DOCTYPE html>
<html>
 <head>
	 <title>My Figma</title>
	 <style type="text/css">
   
        body{
          text-align: center;
          font-family: 'Roboto', sans-serif;
          background: url(https://images.unsplash.com/photo-1502787530428-11cf61d6ba18?ixlib=rb-0.3.5&s=5ae20c4d6a9860601683241131d8932d&auto=format&fit=crop&w=1050&q=80);
        }

        h1 {
         font-size: 50px;
         background:rgb(255,255,255);
         padding: 2px;
        }

        #clock{
          font-size: 40px;
          background: rgb(255,255,255);
          background-width: 50px;
          padding: 1px;
        }
   </style>
	 <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">	
 </head>

  <body>
    
  
    <div>
     <h1>HNG Intership 4</h1>
    </div>
      <?php
         date_default_timezone_set('UTC');
         $time = time();
         $actual_time = date('F jS Y h:i a' );
      ?>
    <div id="clock">
        
        <?php 
        // echo 'Date/Time: '.$actual_time;
            date_default_timezone_set('Africa/Lagos');
            echo date('Y-m-d H:i:s');
              // print strftime('%c');
        ?>
    </div>

  <!--   <?php
    //     date_default_timezone_set('UTC');
    // $date = date('m/d/Y h:i:s a', time());
    ?> -->

     <!-- <?php
           // $time = time();
           // $actual_time = date('F jS Y h:i a' );
      ?> -->
    

  </body>
</html>

