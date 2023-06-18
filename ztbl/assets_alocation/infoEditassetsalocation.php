<?php
 // Include the database configuration file  
 require_once 'dbConfig.php'; 


/*
 
*   File: infoEdit.php
*   
*
*=====================================
*/
 
//$hostName  ="localhost";
//$userName ="jane";
//$userPassword ="jane";
//$database ="janedb";
 
//$dbConnectionStatus  = new mysqli($hostName, $userName, $userPassword,$database);
 
//Connection Error
//if ($dbConnectionStatus->connect_error){     
 
         
   //  die("Connection failed: " . $dbConnectionStatus->connect_error);
 
//}
// Connected to Database JaneDB
// Object oriented  -> pointing 
if($db->query("SELECT DATABASE()")){
     
    $dbSuccess =true;
    
    $result = $db->query("SELECT DATABASE()");
    $row = $result->fetch_row();
    printf("Default database is %s.\n", $row[0]);
    $result->close();
 
     
     
     
}
 
 
 
 
 
if ($dbSuccess) {
 
     
     
    $selectData = " SELECT * FROM tmp_assets_alocation";
    // Send Select Query
   $selectData_Query = mysqli_query($db,$selectData );
     
 
     
     
    echo '<form action="infoEditFormassetsalocation.php" method="post">';
     
    echo '<select name="assets_alocation_id">';
     
     
     
     
        echo '<option value="0" label="" selected="selected">..Select Asset..</option>';
     
         
         
         
        if (mysqli_num_rows($selectData_Query)>0){
              // while there is still  data in row
                   // assign selected mySQL data into 'arrayData' array 
              while($rows=mysqli_fetch_assoc($selectData_Query)){
                    
            
                    $ID = $rows['assets_alocation_id'];
                    $pp_no = $rows['pp_no'];
                    $ztbl_tag =$rows['ztbl_tag'];
                    $site_id =$rows['site_id'];
                    $alocation_date =$rows['alocation_date'];
                    $revoke_date =$rows['revoke_date'];
                    $status =$rows['status'];
                    
                    
                    //Populate the Option 
                   echo '<option value="'.$ID.'">'.$pp_no.'</option>';
                    
                    
              }
         
        }
         
         
         
         
         
         
     
            echo '</select>';
     
 
            echo '<input type="submit" />';
             
    echo '</form>';
 
}
 
 
echo "<br /><hr /><br />";
 
 
echo '<a href="index.html">Back to Home Page</a>';
 
 
 
 
 
 
 
 
?>