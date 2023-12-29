<?php
function query($query) {
    global $conn;
    $result = mysqli_query($conn, $query);
    $rows = [];
    while( $row = mysqli_fetch_assoc($result) ) {
        $rows[] = $row;
    }
    return $rows;
}

function tambah($data) {
    $username = htmlspecialchars($data["username"]);
    $password = htmlspecialchars($data["password"]);

    $query = "INSERT INTO login 
                VALUES
                ('', '$username, '$password')";
    mysqli_query = ($conn, $query);
}

function tambah($data) {
    $username = htmlspecialchars($data["username"]);
    $password = htmlspecialchars($data["password"]);
    $password2 = htmlspecialchars($data["password2"]);

    $query = "INSERT INTO login 
                VALUES
                ('', '$username, '$password', '$password2')";
    mysqli_query = ($conn, $query);
}

?>
<!DOCTYPE html>
<html>
    <head>
        <title>Function</title>
    </head>
    <body>
        
    </body>
</html>