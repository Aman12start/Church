<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Email</title>
</head>
<body>
    <style>
       *{
        text-align: center;
        }
    </style>

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
            
</body>
</html>

<script>
    var input = document.querySelector("#phone");
    window.intlTelInput (input , {
        initialCountry: "auto",
        geoIpLookup: function(callback){
            fetch('https://ipinfo.io/json?token=6629676d8b88434')
            API key
            .then(function(response) {return response.json() ; })
            .then(function(data) { callback ('us'); })
            .catch()
        }
    })
</script>
<?php
echo "Current Time  ";
echo date("H:i:s");
?>