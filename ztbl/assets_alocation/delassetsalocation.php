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
             
            $ID =  $_POST["assets_alocation_id"];    
            $pp_no = $_POST["pp_no"];   
            $ztbl_tag = $_POST["ztbl_tag"]; 
            $site_id = $_POST["site_id"];   
            $alocation_date = $_POST["alocation_date"]; 
            $revoke_date = $_POST["revoke_date"]; 
            $status = $_POST["status"]; 
           
            // SQL Query
            $cname__select = "DELETE FROM tmp_assets_alocation  WHERE assets_alocation_id = $ID ";
             
             
            //Execute Query
            $cname__select_Query= mysqli_query($db,$cname__select);
             
             
             
            if (empty($ID)) {
                 
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
echo '<a href="selectassetsalocationdel.php">Delete another User</a>';
echo "<br><br>";
echo '<a href="/">Back to LocalHost</a><br />';
echo "<br>";
echo '<a href="http://rohansaeed/hadiyah/ztbl/assets_alocation/index.html">Back to Home Page</a>';

 
?>