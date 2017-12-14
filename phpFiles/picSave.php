<?php
require_once '../connect.php';
// Initialize the session
session_start();

if(isset($_SESSION['username'])){
  $username = $_SESSION['username'];
}
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  // Prepare a select statement
      $sql = "SELECT uID FROM member WHERE username = ?";

      if ($exist_check_stmt = $mysqli->prepare($sql)) {
          // Bind variables to the prepared statement as parameters
          $exist_check_stmt->bind_param("s", $param_username);

          // Set parameters
          $param_username = $username;

          // Attempt to execute the prepared statement
          if ($exist_check_stmt->execute()) {
              // Store result
              $exist_check_stmt->store_result();

              // Check if username exists, if yes then verify password
              if ($exist_check_stmt->num_rows == 1) {
                  // Bind result variables
                  $exist_check_stmt->bind_result($uID);
                  $exist_check_stmt->fetch();
              } else {
              echo "Oops! Something went wrong. Please try again later.";
          }
      }

      // Close statement
      $exist_check_stmt->close();
  }

  // Close connection
  $mysqli->close();
}



}









?>
