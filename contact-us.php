<?php echo file_get_contents('header.php'); ?>

<div class="row">
<div class="col-md-12">

    <?php

    $error_message = [];
    $success_message = '';

    $email = isset($_POST['email']) ? strip_tags($_POST['email']) : '';
    $name = isset($_POST['name']) ? strip_tags($_POST['name']) : '';
    $message = isset($_POST['message']) ? strip_tags($_POST['message']) : '';

    if(isset($_POST['contact-form'])) {

        echo '<script>$(function(){$("html, body").animate({scrollTop: $("#contact-form-row").offset().top + 5}, 100);});</script>';

        if($email == '' || $email == null) {
            $error_message['email'] = 'Email is required';
        }
        if($message == '' || $message == null) {
            $error_message['message'] = 'Message is required';
        }


        # if email or message is blank, show message to fill up required input

        # if email, and msg given (or, error_message is empty)
        # send email
        # if can send mail
        # show success message
        # show failed message


        if(empty($error_message)) {

            $to = '';

            if(isset($_GET['test-mail'])) {
                $to = $_GET['test-mail'];
            } else {
//                $to = 'husam66@gmail.com';
                $to = 'sourov.gm@gmail.com';
            }

            $subject = 'PiCanvas contact message';
            $msg = '<p>Email: ' . $email . '<p>'
                . '<p>Name: ' . $name . '<p>'
                . '<p>Message: ' . $message .'<p>';

            $headers .= "MIME-Version: 1.0\r\n" ;
            $header = "From: noreply@marinehouses.com\r\n";
            $headers .= "Content-Type: text/html; charset=\"iso-8859-1\"\n";

            $sent = mail($to, $subject, $msg, $headers);

            if($sent) {
                $success_message = '<div class=" alert alert-success">Message sent.</div><br>';
            } else {
                $success_message = '<div class="alert alert-warning">Message not sent. Please try again.</div>';
            }
        }


    }

    function get_error_class($msg, $name) {

        if( isset($msg[$name]) ) {
            return ' has-error';
        }
        return '';
    }

    function get_error_message($msg, $name) {
        if( isset($msg[$name]) ) {
            return '<span class="text-danger">' . $msg[$name] . '</span>';
        }
        return '';
    }

    //                var_dump($error_message);
    ?>

    <h3>Leave us a message:</h3>

    <form class="form-horizontal" role="form" action="" method="post">


        <div class="form-group<?php echo get_error_class($error_message, 'email'); ?>">
            <!--                    <label for="inputEmail1" class="col-md-4 control-label"></label>-->
            <input type="hidden" name="contact-form" value="yes">
            <div class="col-md-12">

                <?php echo $success_message; ?>

                <input name="email" value="<?php echo $email; ?>" type="email" class="form-control" id="inputEmail1" placeholder="Email">
                <?php echo get_error_message($error_message, 'email'); ?>
            </div>
        </div>
        <div class="form-group">
            <!--                    <label for="text1" class="col-md-4 control-label"></label>-->
            <div class="col-md-12">
                <input name="name" type="text" value="<?php echo $name; ?>" class="form-control" id="text1" placeholder="Your Name">
            </div>
        </div>
        <div class="form-group<?php echo get_error_class($error_message, 'message'); ?>">
            <!--                    <label for="text1" class="col-md-4 control-label"></label>-->
            <div class="col-md-12">
                <textarea name="message" id="message-text" class="form-control" placeholder="Message"><?php echo $message; ?></textarea>
                <?php echo get_error_message($error_message, 'message'); ?>
            </div>
        </div>
        <div class="form-group">
            <div class="col-md-12">
                <button type="submit" class="btn btn-success">Send</button>
            </div>
        </div>
    </form><!-- form -->

</div><!-- col -->



</div> <!--  row-->








<?php echo file_get_contents('footer.php'); ?>
