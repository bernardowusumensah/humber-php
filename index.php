<!DOCTYPE html>
<html>
<head>
    <title>PHP MySQL Connection</title>
    <style>
        .color-container {
            width: 100%;
            margin: 20px 0;
        }
        .color-header {
            font-size: 24px;
            margin-bottom: 10px;
        }
        .color-item {
            padding: 15px;
            margin: 5px 0;
            color: #000;
            font-weight: bold;
            border: 1px solid #ddd;
        }
    </style>
</head>
<body>
<h1>Database Connection Status:</h1>
<p>
    <?php
    // PHP code starts here
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "colors";

    // Create connection
    $conn = new mysqli($servername, $username, $password, $dbname);

    // Check connection
    if ($conn->connect_error) {
        echo "Connection failed: " . $conn->connect_error;
    } else {
        echo "Connected successfully to '$dbname'";
    }

    // query the database
    $query = "SELECT * FROM colors";
    $result = $conn->query($query);

    // output the results
    if ($result->num_rows > 0) {
        echo "<div class='color-container'>";
        echo "<div class='color-header'>Name</div>";
        
        while($row = $result->fetch_assoc()) {
            echo "<div class='color-item' style='background-color: " . $row['Hex'] . "'>";
            echo $row['Name'];
            echo "</div>";
        }
        echo "</div>";
    } else {
        echo "No results found";
    }

    // Close connection
    $conn->close();
    ?>
</p>
</body>
</html>

