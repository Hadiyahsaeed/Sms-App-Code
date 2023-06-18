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
            $ID = $_POST["site_id"];}
 
       if($ID ==0){
            
           // If nothing is selected
             
            header('Location:infoEditsites.php');
             
        }
                 
         
             
            // Select Query base on Info Id
      $cname__select = "SELECT * FROM tmp_sites WHERE site_id = $ID";
         
         
            // Execute Query
             
       {$cname__select_Query= mysqli_query($db,$cname__select);}
        
            // While there is info in row
             
        while($rows=mysqli_fetch_assoc($cname__select_Query)){
                    
            
                       $ID = $rows['site_id'];
                       $siteName = $rows['site_name'];
                       $city = $rows['city'];
                       $province = $rows['province'];
                       $zone = $rows['zone'];
                                                     
              }
               
             
         
             
             
             
                 
   // }
 
    echo '<h2 style="font-family: arial, helvetica, sans-serif;" >
                Site Information Update Form
            </h2>';
     
        //      FORM postInfo User 
        echo '<form name="postSite" action="infoUpdatesites.php" method="post">';
         
                
                echo '
                <table>
                    <tr>
                        <td>Id</td>
                        <td><input type="text" name="site_id" value="'.$ID.'"/></td>
                    </tr>
                    <tr>
                        <td>Site Name</td>
                        <td><input type="text" name="site_name" value="'.$siteName.'"/></td>
                    </tr>
                    <tr>
                        <td>City</td>
                        <td><input type="text" name="city" value="'.$city.'"/></td>
                    </tr>
                    <tr>
                        <td>Province</td>
                        <td><input type="text" name="province" value="'.$province.'"/></td>
                    </tr>
                    <tr>
                        <td>Zone</td>
                        <td><input type="text" name="zone" value="'.$zone.'"/></td>
                    </tr>
                     
                 
                <tr>
                        <td></td>
                        <td align="right"><input type="submit"  value="Save" /></td>
                    </tr>
                     
                    </table>
                    ';
                     
        echo '</form>';
     
     
    echo "<br /><hr /><br />";
    echo "<h1>Some Features:-</h1>";
    echo '<a href="http://rohansaeed/ztbl/index.html">Back to Home Page </a>';
    echo "<br><br>";
echo '<a href="infoEditsites.php">Edit another Site</a>';
echo "<br><br>";



 ?>