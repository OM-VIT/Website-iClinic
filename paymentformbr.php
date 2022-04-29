<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="paymentform.css" rel="stylesheet">
    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet"
        integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
</head>

<body>
    <div class="wrapper">
        <h2>
            Payment Form</h2>
        <form action="consultbramhesh.php" method="POST">
            <h4>
                Account</h4>
            <div class="input-group">
                <div class="input-box">
                    <input type="text" placeholder="First Name" required class="First name">
                    <i class="fa fa-user icon"></i>
                </div>
                <div class="input-box">
                    <input type="text" placeholder="Last Name" required class="Last name">
                    <i class="fa fa-user icon"></i>
                </div>
            </div>
            <div class="input-group">
                <div class="input-box">
                    <input type="email" name="user_id" id="user_id" placeholder="Email Adress" required class="name">
                    <i class="fa fa-envelope icon"></i>
                </div>
            </div>
            <div class="input-group">
                <div class="input-box">
                    <h4>
                        Date of Birth</h4>
                    <input type="number" placeholder="DD" class="dob" required class="number">
                    <input type="number" placeholder="MM" class="dob"required class="number">
                    <input type="number" placeholder="YYYY" class="dob" required class="number">
                </div>
                <div class="input-box">
                    <h4>
                        Gender</h4>
                    <input type="radio" id="b1" name="gendar" checked class="radio"required class="number">
                    <label for="b1">Male</label>
                    <input type="radio" id="b2" name="gendar" class="radio">
                    <label for="b2">Female</label>
                </div>
            </div>
            <div class="input-group">
                <div class="input-box">
                    <h4>
                        Payment Details</h4>
                    <input type="radio" name="pay" id="bc1" checked class="radio">
                    <label for="bc1"><span><i class="fa fa-cc-visa"></i> Credit Card</span></label>
                    <input type="radio" name="pay" id="bc2" class="radio">
                    <label for="bc2"><span><i class="fa fa-cc-paypal"></i> Paypal</span></label>
                </div>
            </div>
            <div class="input-group">
                <div class="input-box">
                    <input type="number" placeholder="Card Number" maxlength="16" minlength="16" required class="name">
                    <i class="fa fa-credit-card icon"></i>
                </div>
            </div>
            <div class="input-group">
                <div class="input-box">
                    <input type="password" placeholder="Card CVV" maxlength="3" minlength="3" required class="name">
                    <i class="fa fa-user icon"></i>
                </div>
                <div class="input-box">
                    <select>
                        <option>Jan</option>
                        <option>Feb</option>
                        <option>Mar</option>
                        <option>Apr</option>
                        <option>May</option>
                        <option>Jun</option>
                        <option>Jul</option>
                        <option>Aug</option>
                        <option>Sep</option>
                        <option>Oct</option>
                        <option>Nov</option>
                        <option>Dec</option>
                    </select>
                    <select>
                        <option>2021</option>
                        <option>2022</option>
                        <option>2023</option>
                        <option>2024</option>
                        <option>2025</option>
                        <option>2026</option>

                    </select>
                </div>
            </div>
            <div class="input-group">
                <div class="input-box">
                    <button type="submit">PAY NOW</button>
                </div>
            </div>
        </form>
    </div>

</body>

</html>
<?php
function wpf_dev_approval_email($user_id ) {
       
    $user = get_userdata($user_id );
   
    $subject = 'User Account Approved';
    $message = 'Hi There! We just wanted to let you know your user account on example.com has been approved.  Just as a reminder, please find your username that you signed up with below.';
    $message .= sprintf( __( 'Username: %s' ), $user->user_login ) . "rn";
   
    // Send email with the WPForms email template.
    $emails = new WPForms_WP_Emails;
    $emails->__set( 'from_name', 'Omkar Gore' );
    $emails->__set( 'from_address', 'omkargoreofficial2000@gmail.com' ); // If using SMTP, be sure to use that email address here.
    $emails->send( $user->user_email, $subject, $message );
}
add_action( 'wpforms_user_approve', 'wpf_dev_approval_email');
?>
