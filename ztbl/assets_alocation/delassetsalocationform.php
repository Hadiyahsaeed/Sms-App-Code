<?php

 // Include the database configuration file  
 require_once 'dbConfig.php'; 
/*
 
*   File: infoEditForm.php
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
 
         
//     die("Connection failed: " . $db->connect_error);
 
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
 
        //  Get the details of the company selected 
            $ID = $_POST["assets_alocation_id"];}
 
       if($ID ==0){
            
           // If nothing is selected
             
            header('Location:delassetsalocationform.php');
             
        }
                 
         
             
            // Select Query base on Info Id
      $cname__select = "SELECT * FROM tmp_assets_alocation WHERE assets_alocation_id = $ID";
         
         
            // Execute Query
             
       {$cname__select_Query= mysqli_query($db,$cname__select);}
        
            // While there is info in row
             
        while($rows=mysqli_fetch_assoc($cname__select_Query)){
                    
            
                       $ID = $rows['assets_alocation_id'];
                       $pp_no = $rows['pp_no'];
                       $ztbl_tag = $rows['ztbl_tag'];
                       $site_id = $rows['site_id'];
                       $assets_alocation_id = $rows['assets_alocation_id'];
                       $alocation_date = $rows['alocation_date'];
                       $revoke_date = $rows['revoke_date'];
                       $status = $rows['status'];

                      
                
                    
                    
              }
               
             
         
             
             
             
                 
   // }
 
    echo '<h2 style="font-family: arial, helvetica, sans-serif;" >
                Site Information delete Form
            </h2>';
     
        //      FORM postInfo User 
        echo '<form name="postContact" action="delassetsalocation.php" method="post">';
         
                echo '<td>Assets Alocation Id</td>
                <input type="text" name="assets_alocation_id" value="'.$ID.'"/>';
                echo '
                <table>
                    <tr>
                        <td>PP Number</td>
                        <td><input type="text" name="pp_no" value="'.$pp_no.'"/></td>
                    </tr>
                    <tr>
                        <td>ZTBL Tag</td>
                        <td><input type="text" name="ztbl_tag" value="'.$ztbl_tag.'"/></td>
                    </tr>
                    <tr>
                        <td>Site ID</td>
                        <td><input type="text" name="site_id" value="'.$site_id.'"/></td>
                    </tr>
                    <tr>
                        <td>Alocation Date</td>
                        <td><input type="date" name="alocation_date" value="'.$alocation_date.'"/></td>
                    </tr>
                    <tr>
                        <td>Revoke Date</td>
                        <td><input type="date" name="revoke_date" value="'.$revoke_date.'"/></td>
                    </tr>
                    <tr>
                        <td>Status</td>
                        <td><input type="text" name="status" value="'.$status.'"/></td>
                    </tr>
                    
                     
                 
                <tr>
                        <td></td>
                        <td align="right"><input type="submit"  value="Delete" /></td>
                    </tr>
                     
                    </table>
                    ';
                     
        echo '</form>';
     
     
    echo "<br /><hr /><br />";
    echo "<h1>Some Features:-</h1>";
    echo '<a href="http://rohansaeed/hadiyah/ztbl/assets_alocation/index.html">Back to Home Page </a>';
    echo "<br><br>";
echo '<a href="selectassetsalocationdel.php">Delete another sites</a>';
echo "<br><br>";
echo '<a href="../index.php">Quit - to homepage</a>'


 ?>