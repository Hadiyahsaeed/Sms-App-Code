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
        $site_id  =  $_REQUEST['site_id'];
        $site_name	 = $_REQUEST['site_name'];
        $city  =  $_REQUEST['city'];
        $province	 = $_REQUEST['province'];
        $zone  =  $_REQUEST['zone'];
              
        // Performing insert query execution
        // here our table name is college
        $sql = "INSERT INTO tmp_sites VALUES 
            ('$site_id','$site_name', '$city','$province' ,'$zone')";
         
        if(mysqli_query($db, $sql)){
            echo "<h3>data stored in a database successfully."
                . " Please browse your localhost php my admin"
                . " to view the updated data</h3>";
 
            echo nl2br("\n$site_id\n$site_name\n$city\n$province\n$zone");
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