<?php
 // Include the database configuration file  
 require_once 'dbConfig.php'; 
 
//$hostName  ="localhost";
//$userName ="jane";
//$userPassword ="jane";
//$database ="janedb";
 
//$dbConnectionStatus  = new mysqli($hostName, $userName, $userPassword,$database);
 
//Connection Error
//if ($db->connect_error){     
 
         
    // die("Connection failed: " . $db->connect_error);
 
//}
// Connected to Database JaneDB
// Object oriented  -> pointing 
if($db->query("SELECT DATABASE()")){
     
    $dbSuccess =true;
    //
    $result = $db->query("SELECT DATABASE()");
    $row = $result->fetch_row();
    printf("Default database is %s.\n", $row[0]);
    $result->close();
 
     
     
     
}
 
 
 
 
if ($dbSuccess) {
         
            //collect the data with $_POST
             
            $ID =  $_POST["site_id"];    
            $siteName = $_POST["site_name"];   
            $city = $_POST["city"]; 
            $province = $_POST["province"];   
            $zone = $_POST["zone"]; 
           
            // SQL Query
            $cname__select = "DELETE FROM tmp_sites  WHERE site_id = $ID ";
             
             
            //Execute Query
            $cname__select_Query= mysqli_query($db,$cname__select);
             
             
             
            if (empty($siteName)) {
                 
                echo '<span style="color:red; ">You Must Select Site Name</span><br /><br />'; 
                          
            }
             
            else{
             
            if ($cname__select_Query)  {    
                        echo 'Record successfully deleted.<br /><br />';
                    } else {
                        echo '<span style="color:red; ">FAILED to update Info.</span><br /><br />';
                         
                    }   
         
         
            }
         
 
}
 
echo "<br /><hr /><br />";
 echo"<h1>Some Features:-</h1>";
echo '<a href="selectsitesdel.php">Update another User</a>';
echo "<br><br>";
echo '<a href="/">Back to LocalHost</a><br />';
echo "<br>";
echo '<a href="http://rohansaeed/hadiyah/ztbl/index.html">Back to Home Page</a>';

 
?>