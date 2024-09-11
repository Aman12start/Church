<?php include('../template/header.php');?>


<div class="subpage-head has-margin-bottom">
<div class="container">
<h3>Event Calendar</h3>
<p class="lead">Event calendar integrated with Google Calendar</p>
</div>
</div>


<div class="container has-margin-bottom">
<div class="row">
<div class="col-sm-12 has-margin-xs-bottom">
<div id="loading" class="text-center">loading...</div>

<div class="event-cal-wrap" id="event-calendar"> </div>
</div>
</div>
</div>


<div class="highlight-bg">
<div class="container">
<div class="row">
<form action="https://demo.web3canvas.com/themeforest/our-church/subscribe.php" method="post" class="form subscribe-form" role="form" id="subscribeForm">
<div class="form-group col-md-3 hidden-sm">
<h5 class="susbcribe-head"> SUBSCRIBE <span>TO OUR NEWSLETTER</span></h5>
</div>
<div class="form-group col-sm-8 col-md-6">
<label class="sr-only">Email address</label>
<input type="email" class="form-control input-lg" placeholder="Enter email" name="email" id="address" data-validate="validate(required, email)" required>
<span class="help-block" id="result"></span> </div>
<div class="form-group col-sm-4 col-md-3">
<button type="submit" class="btn btn-lg btn-primary btn-block">Subscribe Now →</button>
</div>
</form>
</div>
</div>
</div>

<?php include('../template/f.php');?>


<script type="text/javascript">

$(document).ready(function() {
    $('#event-calendar').fullCalendar({
        googleCalendarApiKey: 'AIzaSyCJ5AqFvTnQ5kUZvYgTMAMjXW5dfpV4qew',
        events: {
            googleCalendarId: '6au3emlgjfair5hjhiegs48tcg@group.calendar.google.com'
        },
		eventClick: function(event) {
				// opens events in a popup window
				window.open(event.url, 'gcalevent', 'width=700,height=600');
				return false;
			},
			
		loading: function(bool) {
				$('#loading').toggle(bool);
		}
    });
});

</script>
<script defer src="https://static.cloudflareinsights.com/beacon.min.js/vcd15cbe7772f49c399c6a5babf22c1241717689176015" integrity="sha512-ZpsOmlRQV6y907TI0dKBHq9Md29nnaEIPlkf84rnaERnq6zvWvPUqr2ft8M1aS28oN72PdrCzSjY4U6VaAw1EQ==" data-cf-beacon='{"rayId":"89c4c680fa7002d1","version":"2024.4.1","r":1,"token":"1a2187940c214caa9d3fed19b4904902","b":1}' crossorigin="anonymous"></script>
</body>
</html>
