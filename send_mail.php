<?php

    if(isset($_POST['submit'])){

        $name = $_POST['name'];
        $business_name = $_POST['businessName'];
        $date_to_call = $_POST['date'];
        $time_to_call = $_POST['time'];
        $phone_number = $_POST['phone'];
        $email = $_POST['email'];

        $mailTo = "info@saversutility.co.uk";
        $subject = "Call Back Alert !!";
        $headers = "Call Back Request- From : " . $name;
        $txt = "Call Back Information." . "\n\nName : " . $name . "\nBusiness Name : " . $business_name . "\nDate to call : " . $date_to_call . "\nTime to call : " . $time_to_call . "\nPhone Number : " . $phone_number . "\nEmail : " . $email . "\n";

        mail($mailTo, $subject, $txt, $headers);
        header("Location: contact2.html?mailsend");
    }

?>
