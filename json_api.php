<?php
// Function to fetch user data from the JSONPlaceholder API
function getUsers() {
    $url = "https://jsonplaceholder.typicode.com/users";
    $data = file_get_contents($url);
    return json_decode($data, true);
}
// Get the list of users
$users = getUsers();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>JSONPlaceholder Users</title>
</head>
<body>
<h1>List of Users from JSONPlaceholder</h1>
<ul>
    <?php
    for ($i = 0; $i < count($users); $i++) {
        echo "<li>";
        echo "<strong>Name:</strong> " . htmlspecialchars($users[$i]['name']) . "<br>";
        echo "<strong>Username:</strong> " . htmlspecialchars($users[$i]['username']) . "<br>";
        echo "<strong>Email:</strong> " . htmlspecialchars($users[$i]['email']) . "<br>";
        echo "<strong>City:</strong> " . htmlspecialchars($users[$i]['address']['city']) . "<br>";
        echo "</li><br>";
    }
    ?>
</ul>
</body>
</html>
