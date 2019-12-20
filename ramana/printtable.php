<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <title></title>
    <style media="screen">
      table{
        height: 50px,
        width: 45px
      }
    </style>
  </head>
  <body>
    <?php
    /* Attempt MySQL server connection. Assuming you are running MySQL
    server with default setting (user 'root' with no password) */
    $mysqli = new mysqli("localhost", "root", "root0", "anuradhapurakiosk");

//     $ssh_connection = ssh2_connect($ssh_server, $ssh_port);
// ssh2_auth_password($ssh_connection, $ssh_user, $ssh_password);
// $query="SET CHARACTER SET utf8; use ${db_database}; ${query};";
// $query=str_replace('"', '\'', stripslashes($query));
// $ssh_query="ssh -L 3307:${ssh_server}:${ssh_port}; echo \"${query}\" | mysql -u ${db_username} -h ${db_hostname} --password=${db_password}";
// $result=ssh2_exec($ssh_connection, $ssh_query);

    // Check connection
    if($mysqli === false){
        die("ERROR: Could not connect. " . $mysqli->connect_error);
    }

    // Attempt select query execution
    $sql = "SELECT * FROM response";
    if($result = $mysqli->query($sql)){
        if($result->num_rows > 0){
            echo '<table class="table-striped" border="1">';
                echo "<tr>";
                    echo "<th>Response</th>";
                    echo "<th>Age Category</th>";
                    echo "<th>Date</th>";
                    echo "<th>Gender</th>";
                    echo "<th>response</th>";
                echo "</tr>";
            while($row = $result->fetch_array()){
                echo "<tr>";
                    echo "<td>" . $row['response_id'] . "</td>";
                    echo "<td>" . $row['age_category'] . "</td>";
                    echo "<td>" . $row['date'] . "</td>";
                    echo "<td>" . $row['gender'] . "</td>";
                    echo "<td>" . $row['response'] . "</td>";
                echo "</tr>";
            }
            echo "</table>";
            // Free result set
            $result->free();
        } else{
            echo "No records matching your query were found.";
        }
    } else{
        echo "ERROR: Could not able to execute $sql. " . $mysqli->error;
    }

    // Close connection
    $mysqli->close();
    ?>

  </body>
</html>
