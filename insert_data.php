<?php

include 'db_connection.php';


if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $inputNumber = $_POST['input'];

    $sql = "INSERT INTO game_results (username, attempts_left, score, round, guessed_number, correct_number)
            VALUES ('user123', 5, 0, 1, $inputNumber, 42)"; 

    if ($conn->query($sql) === TRUE) {
        echo "New record created successfully";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

$conn->close();
?>
