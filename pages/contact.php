
<?php 
      session_start();
      include('../template/header.php');
      include('./connection.php');
      include('./query.php');
?>


<div class="subpage-head has-margin-bottom">
    <div class="container">     
       <h3>Contact us</h3>
        <p class="lead">Enter Your contact details to CONNECT🛩️</p>
    </div>
</div>
<div class="container">  
    <div class="row">
        <?php if(isset($_SESSION['msgScs'])):?>
        <p class = "alert alert-success" > <?php echo $_SESSION['msgScs'] ?> </p>
        <?php unset($_SESSION['msgScs']);endif;?>

        <?php if(isset($_SESSION['errMsg'])):?>
        <p class="alert alert-danger"><?= $_SESSION['errMsg']?></p> 
        <?php unset($_SESSION['errMsg']); endif;?>
        <div class="col-md-6 has-margin-bottom">
            <form id="phpcontactform" role="form" method="POST" action="query.php">
                <div class="form-group">
                    <label for="name">Full Name</label>
                    <input type="text" class="form-control" name="name" id="name" required>
                    <span id="nameerror" style="color:red"></span>
                </div>
                <div class="form-group">
                    <label for="email">Email ID</label>
                    <input type="email" class="form-control" name="email" id="email" required>
                </div>
                <div class="form-group">
                    <label for="phone">Phone</label>
                    <input type="text" class="form-control" name="phone" id="phonenumber" maxlength="10" required>
                    <span id="phoneerror" style="color:red"></span>
                </div>
                <div class="form-group">
                    <label for="message">Message</label>
                    <textarea class="form-control" rows="5" name="message" id="message" required></textarea>
                </div>
                <button type="submit" name="sub" id="sub" class="btn btn-primary btn-lg">Send message</button>
                <span class="help-block loading"></span>
            </form>
        </div>
        <div class="col-md-6 has-margin-bottom">
            <h5>OUR ADDRESS</h5>
            <div class="row">
                <div class="col-lg-6">Catholic Church<br>
                    121 King Street, Melbourne <br>
                    Victoria 3000 Australia
                </div>
                <div class="col-lg-6">Phone: +61 3 8376 6284<br>
                    Fax: +61 38 376 6284<br>
                    Email: <a href="#"><span class="_cf_email_"
                            data-cfemail="3558545c59755654415d5a595c56425057465c41501b565a58">[email&#160;protected]</span></a>
                </div>
            </div>
            <hr>
            <h5>ANOTHER ADDRESS</h5>
            <div class="row">
                <div class="col-lg-6">Catholic Church<br>
                    121 King Street, Melbourne <br>
                    Victoria 3000 Australia
                </div>
                <div class="col-lg-6">Phone: +61 3 8376 6284<br>
                    Fax: +61 38 376 6284<br>
                    Email: <a href="#"><span class="_cf_email_"
                            data-cfemail="1875797174587b796c707774717b6f7d7a6b716c7d367b7775">[email&#160;protected]</span></a>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="location-map">
    <iframe
        src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d1575.9186034720387!2d144.95541222452604!3d-37.817281929786624!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x6ad642c9a8d8495f%3A0xedc33f230d1355b1!2sEnvato+Pty+Ltd!5e0!3m2!1sen!2sin!4v1407063773571"
        height="260"></iframe>
</div>
<div class="highlight-bg">
    <div class="container">
        <div class="row">
            <form action="https://demo.web3canvas.com/themeforest/our-church/subscribe.php" method="post"
                class="form subscribe-form" role="form" id="subscribeForm">
                <div class="form-group col-md-3 hidden-sm">
                    <h5 class="susbcribe-head"> SUBSCRIBE <span>TO OUR NEWSLETTER</span></h5>
                </div>
                <div class="form-group col-sm-8 col-md-6">
                    <label class="sr-only">Email address</label>
                    <input type="email" class="form-control input-lg" placeholder="Enter email" name="email"
                        id="address" data-validate="validate(required, email)" required>
                    <span class="help-block" id="result"></span>
                </div>
                <div class="form-group col-sm-4 col-md-3">
                    <button type="submit" class="btn btn-lg btn-primary btn-block">Subscribe Now →</button>
                </div>
            </form>
        </div>
    </div>
</div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
<script>
$(document).ready(function() {
    $('#phonenumber').on('input', function() {
        var text = $(this).val();
        var numbersOnly = text.replace(/\D/g, ''); // Remove all non-numeric characters

        if (numbersOnly === '') {
            $('#phoneerror').text('Error: No numeric characters found in the input text');
        } else {
            $('#phoneerror').text();
        }

        $(this).val(numbersOnly); // Update the input field with numbers only
    });



    $('#name').on('input', function() {
        var text = $(this).val();
        var numbersOnly = text.replace(/[^a-zA-Z\s]/g, ''); // Remove all non-numeric characters

        if (numbersOnly === '') {
            $('#nameerror').text('Error: No albhabetical characters found in the input text');
        } else {
            $('#nameerror').text();
        }

        $(this).val(numbersOnly); // Update the input field with name only
    });
    // $("#phone").keyup(function() {
    //     var phone = $('#phone').val();
    //     if(phone.length == 12) {



    //     } 
    //     else {
    //         alert('Invalid input! Only alphabetic characters allowed.');
    //     }


    // });



    $('#sub').click(function() {
        var phone = $('#phone').val();
        var email = $('#email').val();
        var name = $('#name').val();
        var message = $('#message').val();
        var validEmail = /^[A-Z0-9._%+-]+@([A-Z0-9-]+\.)+[A-Z]{2,4}$/i;

        if (name == '') {
            alert('Required Name');
            return false;
        } else if (email == '') {
            alert('Required Email');
            return false;
        } else if (!validEmail.test(email)) {
            alert('Enter Valid Email Address');
            return false;
        } else if (phone == '') {
            
            alert('Required Phone');
            return false;
        } else if (phone.length !== 10) {
            alert('Enter a valid 10-digit phone number');
            return false;
        } else if (message == '') {
            alert('Required Your Message');
            return false;
        } else {
            return true;
        }


        // var regex = /^[a-zA-Z]+$/;
        // if ((phoneNumber.length === 12)) {
        //     alert('Valid input!');
        // } else {
        //     alert('Invalid input! Only alphabetic characters allowed.');
        // }

    });
});

function isNumber(evt) {
    evt = (evt) ? evt : window.event;
    var charCode = (evt.which) ? evt.which : evt.keyCode;
    if (charCode > 31 && (charCode < 48 || charCode > 57)) {
        return false;
    }
    return true;
}
</script>
<?= include('../template/footer.php')?>