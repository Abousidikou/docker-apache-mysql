<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Docker Compose Demo</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/kognise/water.css@latest/dist/dark.min.css">
</head>
<body>

    <h1>This is a Docker.</h1>
    <p>This content is being served by an Nginx container.</p>

    <?php
        $servername = 'mysqlHost';
        $username = 'root';
        $password = 'dbpass';
        $databaseName = "test";
        
        //On établit la connexion
        $conn = new mysqli($servername, $username, $password,$databaseName);
        
        //On vérifie la connexion
        if($conn->connect_error){
            die('Erreur : ' .$conn->connect_error);
        }
        echo 'Connexion réussie<br/>';

        // Perform query
        /* if ($result = $conn->query("SELECT * FROM person")) 
        {
            echo "Returned rows are: " . $result -> num_rows. "<br/>";
            if ($result->num_rows > 0) 
            {
               
                while($row = $result->fetch_assoc()) 
                {
                    echo "id: " . $row["id"]. " - Name: " . $row["name"]. "<br/>";
                }
            } else 
            {
                echo "0 results";
            }
            // Free result set
            $result->free_result();
        }else{
            echo "Error : " . $conn->$conn->query("SELECT * FROM person");
        } */
        
        $conn->close();
    ?>
</body>
</html>
