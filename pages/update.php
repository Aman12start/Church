
<?php 
      session_start();
      include('../template/header.php');
      include('./connection.php');
      include('./query.php');
?>


<div class="subpage-head has-margin-bottom">
    <div class="container">     
       <h3>Update User Details🎭</h3>
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
                    <input type="text" class="form-control" name="name" id="name" required  value="<?php  echo $result['name'];    ?>">
                    <span id="nameerror" style="color:red"></span>
                </div>
                <div class="form-group">
                    <label for="email">Email ID</label>
                    <input type="email" class="form-control" name="email" id="email" required  value="<?php  echo $result['email'];    ?>">
                </div>
                <div class="form-group">
                    <label for="phone">Phone</label>
                    <input type="text" class="form-control" name="phone" id="phonenumber" maxlength="10" required  value="<?php  echo $result['phone'];    ?>">
                    <span id="phoneerror" style="color:red"></span>
                </div>
                <div class="form-group">
                    <label for="message">Message</label>
                    <textarea class="form-control" rows="5" name="message" id="message" required ><?php  echo $result['message']; ?></textarea>
                </div>
                <input type="hidden" name="id" value="<?php echo $_GET['id'];?>">
                <button type="submit" name="action" value="update" class="btn btn-primary btn-lg"> UPDATE DATA </button>
                <!-- <span class="help-block loading"></span> -->
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

        $(this).val(numbersOnly); // Update the input field with numbers only
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