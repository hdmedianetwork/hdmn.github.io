<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
   
    
        $name = $_POST["name"];
        $email = $_POST["email"];
        $message = $_POST["message"];
    
        // Perform additional validations or processing as needed
        
        // Example: Send an email with the form data
        $to = "ihardikhd@gmail.com";
        $subject = "New Contact Form Submission";
        $email_body = "Name: $name\n\nEmail: $email\n\nMessage:\n$message";
        
        // You can use the PHP mail() function to send the email
        // mail($to, $subject, $email_body);
        
        // Alternatively, you can use a library or a third-party service to send the email
        
        // Redirect the user to a thank you page
        header("Location: index.html");
        exit();
    }
    ?>
    

    

    // Perform additional validations or processing as needed
    
    // Example: Send an email with the form data
    $to = "your_email@example.com";
    $subject = "New Contact Form Submission";
    $email_body = "Name: $name\n\nEmail: $email\n\nMessage:\n$message";
    
    // You can use the PHP mail() function to send the email
    // mail($to, $subject, $email_body);
    
    // Alternatively, you can use a library or a third-party service to send the email
    
    // Redirect the user to a thank you page
    header("Location: thank_you.html");
    exit();
}
?>
