<?php
require_once '../connect.php';
// Initialize the session
session_start();

if(isset($_SESSION['username'])){
  $username = $_SESSION['username'];
}
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  // Prepare a select statement
      $sql = "SELECT uID, username, password FROM member WHERE username = ?";

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
                  $exist_check_stmt->bind_result($uID,$username, $hashed_password);
                  if ($exist_check_stmt->fetch()) {
                      if (password_verify($password, $hashed_password)) {
                          /* Password is correct, so start a new session and
                          save the username to the session. Set the login cookie if it says remember me */
                         if (isset($_POST['r_Me'])){
                           echo $uID;
                                $selector = base64_encode(random_bytes(9));
                                $authenticator = random_bytes(33);
                                setcookie(
                                    'remember',
                                     $selector.':'.base64_encode($authenticator),
                                     time() + 864000,
                                     '/',
                                     'https://wwwp.cs.unc.edu/Courses/comp426-f17/users/sachedal/login.php',
                                     true, // TLS-only
                                     true  // http-only
                                );

                                $msqli->exec(
                                "INSERT INTO auth_tokens (selector, token, userid, expires) VALUES (?, ?, ?, ?)",
                                    [
                                        $selector,
                                        hash('sha256', $authenticator),
                                        $uID,
                                        date('Y-m-d\TH:i:s', time() + 864000)
                                    ]
                                );
                          }
                          session_start();
                          $_SESSION['username'] = $username;
                          header("location: profile/userProfile.php");
                      } else {
                          // Display an error message if password is not valid
                          $password_err = 'The password you entered was not valid.';
                      }
                  }
              } else {
                  // Display an error message if username doesn't exist
                  $username_err = 'No account found with that username.';
              }
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
