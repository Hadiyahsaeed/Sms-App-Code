<!DOCTYPE html>
<html lang="en">
   <head>
      <title>Store Site Details</title>
   </head>
   <body>
      <center>
         <h1>Store data in Database</h1>
         <form action="insertsites.php" method="post">
             
<p>
               <label for="site_id">Id:</label>
               <input type="text" name="site_id" id="site_id">
            </p>
 
             
<p>
               <label for="site_name">Site Name:</label>
               <input type="text" name="site_name" id="site_name">
            </p>
 

            <p>
               <label for="city">City:</label>
               <input type="text" name="city" id="city">
            </p>
 
             
<p>
               <label for="province">Province:</label>
               <input type="text" name="province" id="province">
            </p>


            <p>
               <label for="zone">Zone</label>
               <input type="text" name="zone" id="zone">
            </p>
             

            <input type="submit" value="Submit">
            <a href="index.html">Back to Home Page </a>
                  </form>
      </center>
   </body>
</html>