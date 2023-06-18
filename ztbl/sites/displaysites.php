<!-- PHP code to establish connection with the localserver -->
<?php
 // Include the database configuration file  
 require_once 'dbConfig.php'; 
  

// SQL query to select data from database
$sql = " SELECT * FROM tmp_sites ORDER BY site_id ASC ";
$result = $db->query($sql);
$db->close();
?>
<!-- HTML code to display data in tabular format -->
<!DOCTYPE html>
<html lang="en">
 
<head>
    <meta charset="UTF-8">
    <title>Contact Details</title>
    <!-- CSS FOR STYLING THE PAGE -->
    <style>
        table {
            margin: 0 auto;
            font-size: large;
            border: 1px solid black;
        }
 
        h1 {
            text-align: center;
            color: #006600;
            font-size: xx-large;
            font-family: 'Gill Sans', 'Gill Sans MT',
            ' Calibri', 'Trebuchet MS', 'sans-serif';
        }
 
        td {
            background-color: #E4F5D4;
            border: 1px solid black;
        }
 
        th,
        td {
            font-weight: bold;
            border: 1px solid black;
            padding: 10px;
            text-align: center;
        }
 
        td {
            font-weight: lighter;
        }
    </style>
</head>
 
<body>
    <section>
        <h1>Contact Details</h1>
        <!-- TABLE CONSTRUCTION -->
        <table>
            <tr>
                <th>ID</th>
                <th>Site Name</th>
                <th>City</th>
                <th>Province</th>
                <th>Zone</th>
               
            </tr>
            <!-- PHP CODE TO FETCH DATA FROM ROWS -->
            <?php
                // LOOP TILL END OF DATA
                while($rows=$result->fetch_assoc())
                {
            ?>
            <tr>
                <!-- FETCHING DATA FROM EACH
                    ROW OF EVERY COLUMN -->
                <td><?php echo $rows['site_id'];?></td>
                <td><?php echo $rows['site_name'];?></td>
                <td><?php echo $rows['city'];?></td>
                <td><?php echo $rows['province'];?></td>
                <td><?php echo $rows['zone'];?></td>
                
            </tr>
            <?php
                }
                echo '<a href="index.html">Back to Home Page</a>';
            ?>
        </table>
    </section>
</body>
 
</html>