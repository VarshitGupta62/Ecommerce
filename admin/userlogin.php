<?php

include('config.php');  
include('smtp/PHPMailerAutoload.php');  

// Enable error reporting
error_reporting(E_ALL);
ini_set('display_errors', 1);
session_start();
// PHPMailer function to send OTP
function otp_send_in_mail($email, $otp) {
    if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
        // Initialize PHPMailer
        $mail = new PHPMailer(true);
        try {
            // Server settings
            $mail->isSMTP();                                           // Send using SMTP
            $mail->Host = 'smtp.gmail.com';                              // Gmail SMTP server
            $mail->SMTPAuth = true;                                      // Enable SMTP authentication
            $mail->Username = 'varshitgupta45@gmail.com';                    // Your Gmail address
            $mail->Password = 'tekhkrmjgqicrtxf';                         // Your Gmail app password
            $mail->Port = 587;                                           // TCP port for TLS

            // Recipients
            $mail->setFrom('varshitgupta45@gmail.com', 'No-Reply');                    // Sender email and name
            $mail->addAddress($email);                                     // Add recipient email
            
            // Content
            $mail->isHTML(true);                                          // Set email format to HTML
            $mail->Subject = 'Your OTP Verification Code';                        // Email subject
            $mail->Body    = "Your OTP is: $otp";  // HTML body content

            // Send email
            if ($mail->send()) {
                echo json_encode([
                    'status' => 1,
                    'message' => 'Email OTP Sent Successfully',
                    'to' => $email
                ]);
            } else {
                echo json_encode([
                    'status' => 0,
                    'message' => 'Message could not be sent. Please try again later.'
                ]);
            }
        } catch (Exception $e) {
            // Catch any error and return as a JSON response
            echo json_encode([
                'status' => 0,
                'message' => 'Mailer Error: ' . $mail->ErrorInfo
            ]);
        }
    } else {
        // If email is invalid, return an error response
        echo json_encode([
            'status' => 0,
            'message' => 'Invalid email address. Please try again.'
        ]);
    }
}

if (isset($_POST['login_name'])) {
    // Sanitize user inputs
    $name = htmlspecialchars($_POST['login_name']);
    $email = filter_var($_POST['login_gmail'], FILTER_SANITIZE_EMAIL);
    $mobile = htmlspecialchars($_POST['login_mobile']);
    $password = md5($_POST['login_password']); // Encrypt password
    $otp = rand(100000, 999999); // Generate OTP

    // Store user data and OTP in session
    $_SESSION['temp_user'] = [
        'name' => $name,
        'email' => $email,
        'mobile' => $mobile,
        'password' => $password,
        'otp' => $otp,
        'otp_time' => time()
    ];

    // Call function to send OTP email
    otp_send_in_mail($email, $otp);
}

if (isset($_POST['otp'])) {
   
    $otp = $_POST['otp'];

    // Check if session exists
    if (!isset($_SESSION['temp_user'])) {
        echo json_encode(['status' => 0, 'message' => 'Session expired. Please register again.']);
        exit;
    }

    // Validate OTP
    $temp_user = $_SESSION['temp_user'];
    $otp_expiry_time = 320; // 5 minutes

    // Check if OTP has expired
    if (time() - $temp_user['otp_time'] > $otp_expiry_time) {
        echo json_encode(['status' => 0, 'message' => 'OTP expired. Please request a new OTP.']);
        exit;
    }

    if ($temp_user['otp'] == $otp) {
        // Check if email already exists in the database
        $email = $temp_user['email'];
        $sql_check = "SELECT COUNT(*) FROM customer WHERE cust_email = ?";
        $stmt_check = $conn->prepare($sql_check);
        $stmt_check->bind_param('s', $email);
        $stmt_check->execute();
        $stmt_check->bind_result($email_exists);
        $stmt_check->fetch();
        $stmt_check->close();

        if ($email_exists > 0) {
            // If email already exists, return an error message
            echo json_encode(['status' => 0, 'message' => 'Email already registered. Please use a different email.']);
            exit;
        }
        $cust_status = 1;

        // Database insertion code
        $sql = "INSERT INTO customer (cust_name, cust_email, cust_phone, cust_password , cust_status) VALUES (?, ?, ?, ? , ?)";
        $stmt = $conn->prepare($sql);
        
        if ($stmt === false) {
            echo json_encode(['status' => 0, 'message' => 'Something went wrong. Please try again later.']);
            exit;
        }

        $stmt->bind_param('sssss', $temp_user['name'], $temp_user['email'], $temp_user['mobile'], $temp_user['password'] , $cust_status);

        if ($stmt->execute()) {
            // Clear session
            unset($_SESSION['temp_user']);
            echo json_encode(['status' => 1, 'message' => 'Registration successful.']);
        } else {
            echo json_encode(['status' => 0, 'message' => 'Failed to register. Please try again.']);
        }
    } else {
        echo json_encode(['status' => 0, 'message' => 'Invalid OTP. Please try again.']);
    }
}



if (isset($_POST['resend_otp'])) {
    // Ensure session exists and resend OTP
    if (isset($_SESSION['temp_user'])) {
        $email = $_SESSION['temp_user']['email'];
        $otp = rand(100000, 999999); // Generate a new OTP
        $_SESSION['temp_user']['otp'] = $otp;
        $_SESSION['temp_user']['otp_sent_time'] = time(); // Update the timestamp

        // Use the same mail logic as before to send OTP email
        // ...
        otp_send_in_mail($email, $otp);

    } else {
        echo json_encode([
            'status' => 0,
            'message' => 'Session expired. Please register again.'
        ]);
    }
}




?>