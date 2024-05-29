<?php
$servername = "127.0.0.1";
$username = "chemer";
$password = "1q2w3e4r";
$dbname = "chemer";

try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    // Example prepared statement
    $stmt = $conn->prepare("SELECT * FROM test");
    $stmt->execute();
    // Fetch the results
    $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
    print_r($result);

    echo "Connected and query executed successfully!";
} catch(PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
}
 // phpinfo();
?>
