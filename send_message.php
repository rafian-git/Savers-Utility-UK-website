<?php

    if(isset($_POST['submit'])){

        $name = $_POST['name'];
        $business_name = $_POST['businessName'];
        $email = $_POST['email'];
        $message = $_POST['message'];

        $mailTo = "info@saversutility.co.uk";
        $subject = "Message by visitor !!";
        $headers = "Message - From : " . $name;
        $txt = "Message Information." . "\n\nName : " . $name . "\nBusiness Name : " . $business_name .  "\nMessage : " . $message . "\nEmail : " . $email . "\n";

        mail($mailTo, $subject, $txt, $headers);
        header("Location: contact2.html?mailsend");
    }

?>
