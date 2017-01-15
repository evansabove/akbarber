<?php include('header.php') ?>
<?php include('navbar.php') ?>

<div id="main">
	<div class="col-xs-2">
		<p><b>Address</b></p>
		<p>AK Barber<br />
			2 Cork Place<br />
			Upper Bristol Road<br />
			Bath<br />
			BA1 3BB
		</p>
		<br />
		<p><b>Opening Hours</b></p>
		<p>Monday: 9:00 - 5:00<br/>
			Tuesday: 9:00 - 5:00<br/>
			Wednesday: 9:00 - 5:00<br/>
			Thursday: 9:00 - 5:00<br/>
			Friday: 9:00 - 5:00<br/>
			Saturday: 9:00 - 5:00<br/>
			Sunday: Closed<br/>
		</p>
	</div>
	<div class="col-xs-10">
		<div id="map" style="height: 400px"></div>
	</div>
</div>

<script type="text/javascript">
	function initMap() {
        var location = {lat: 51.385128, lng: -2.380585};
        
        var map = new google.maps.Map(document.getElementById('map'), {
          zoom: 16,
          center: location
        });
        var marker = new google.maps.Marker({
          position: location,
          map: map
        });
      }
</script>

<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCDJ8BS-G0TOQAyNPxPxWcsQ53_JHrN_9M&amp;callback=initMap"></script>
<?php include('scripts.php') ?>
<?php include('footer.php') ?>
