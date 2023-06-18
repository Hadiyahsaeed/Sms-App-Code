<!DOCTYPE html>
<html lang="en">
   <head>
      <title>Store Asset Alocation Details</title>
   </head>
   <body>
      <center>
         <h1>Store data in Database</h1>
         <form action="insertassetsalocation.php" method="post">
             
<p>
               <label for="assets_alocation_id">Assets Alocation Id:</label>
               <input type="text" name="assets_alocation_id" id="assets_alocation_id">
            </p>
 
             
<p>
               <label for="pp_no">PP number:</label>
               <input type="text" name="pp_no" id="pp_no">
            </p>
 

            <p>
               <label for="ztbl_tag">ZTBL Tag:</label>
               <input type="text" name="ztbl_tag" id="ztbl_tag">
            </p>
 
             
<p>
               <label for="site_id">Site ID:</label>
               <input type="text" name="site_id" id="site_id">
            </p>


            <p>
               <label for="alocation_date">Alocation Date:</label>
               <input type="date" name="alocation_date" id="alocation_date">
            </p>
            <p>
               <label for="revoke_date">Revoke Date:</label>
               <input type="date" name="revoke_date" id="revoke_date">
            </p>
            <p>
               <label for="status">Status:</label>
               <input type="text" name="status" id="status">
            </p>             

            <input type="submit" value="Submit">
            <a href="index.html">Back to Home Page </a>
                  </form>
      </center>
   </body>
</html>