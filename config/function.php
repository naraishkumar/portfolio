<?php
function insertData($conn, $table, $data) {
    $columns = implode(", ", array_keys($data));
    $placeholders = str_repeat('?, ', count($data) - 1) . '?'; // Adjust for MySQLi
    $sql = "INSERT INTO $table ($columns) VALUES ($placeholders)";
    
    $stmt = $conn->prepare($sql);
    
    if ($stmt === false) {
        error_log("Prepare failed: " . $conn->error);
        return false;
    }

    // Bind parameters
    $types = str_repeat('s', count($data)); // Assuming all data is string type
    $params = array_values($data);
    $stmt->bind_param($types, ...$params);
    
    $result = $stmt->execute();
    
    if (!$result) {
        error_log("Execute failed: " . $stmt->error);
    }
    
    $stmt->close();
    
    return $result;
}