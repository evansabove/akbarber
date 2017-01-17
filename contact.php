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
		<p>Mon: 9:00 - 17:00<br/>
			Tue: 9:00 - 17:00<br/>
			Wed: 9:00 - 17:00<br/>
			Thu: 9:00 - 17:00<br/>
			Fri: 9:00 - 17:00<br/>
			Sat: 9:00 - 17:00<br/>
			Sun: Closed<br/>
		</p>
	</div>
	<div class="col-xs-10">
		<div id="map"></div>
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

<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyC8u14PIyC7JZY5kjZRXLSd-l3L6K13Q_M&amp;callback=initMap"></script>
<?php include('scripts.php') ?>
<?php include('footer.php') ?>
