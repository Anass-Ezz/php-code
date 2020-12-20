<?php

    include_once 'dbConn.php';

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<style>
    table{
        margin:0 auto;
        width:100%;
        text-align:center;
    }
</style>
<body>

    <?php
        $sql = "SELECT * FROM userstable;";
        $result = mysqli_query($conn, $sql);
        $resultCheck = mysqli_num_rows($result);
        
        if($resultCheck > 0){
            // $row = mysqli_fetch_assoc($result);
  
                echo '
                <table border>
                <tr>
                <th>First Name</th>
                <th>Last Name</th>
                <th>Age</th>
                <th>Email</th>
                </tr> ';

            while($row2 = mysqli_fetch_assoc($result)){
                if ($row2['FirstName']== $_POST['search']||$row2['LastName']== $_POST['search']){
                    echo 
                    '<tr>
                        <td>'.
                        $row2["FirstName"] .
                        '</td>
                        <td>'.
                        $row2["LastName"] .
                        '</td>
                        <td>'.
                        $row2["Age"] .
                        '</td>
                        <td>'.
                        $row2["Email"] .
                        '</td>
                        </tr>';
                }
            }
        }
                        else{
                            echo 'person not found';
                            break;
                            
                            
                        }
        ?>
        </table>
</body>
</html>