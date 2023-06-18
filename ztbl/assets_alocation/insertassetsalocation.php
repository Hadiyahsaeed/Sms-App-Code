<!DOCTYPE html>
<html>
 
<head>
    <title>Insert a Record</title>
</head>
 
<body>
    <center>
        <?php
 
        // Include the database configuration file  
            require_once 'dbConfig.php'; 
          
        // Taking all 5 values from the form data(input)
        $assets_alocation_id  =  $_REQUEST['assets_alocation_id'];
        $pp_no = $_REQUEST['pp_no'];
        $ztbl_tag  =  $_REQUEST['ztbl_tag'];
        $site_id	 = $_REQUEST['site_id'];
        $alocation_date  =  $_REQUEST['alocation_date'];
        $revoke_date	 = $_REQUEST['revoke_date'];
        $status  =  $_REQUEST['status'];
              
              
        // Performing insert query execution
        // here our table name is college
        $sql = "INSERT INTO tmp_assets_alocation VALUES 
            ('$assets_alocation_id','$pp_no', '$ztbl_tag','$site_id' ,'$alocation_date', '$revoke_date', '$status')";
         
        if(mysqli_query($db, $sql)){
            echo "<h3>data stored in a database successfully."
                . " Please browse your localhost php my admin"
                . " to view the updated data</h3>";
 
            echo nl2br("\n$assets_alocation_id\n$pp_no\n$ztbl_tag\n$site_id\n$alocation_date\n$revoke_date\n$status");
        } else{
            echo "ERROR: Hush! Sorry $sql. "
                . mysqli_error($db);
        }
         
        // Close connection
        mysqli_close($db);
        ?>
    </center>

    
</body>
 
</html>
