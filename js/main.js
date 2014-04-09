/**
 * Makes all internal links scroll nicely to their destination
 */
$('a').on('click', function(event) {
	var href = $(this).attr('href');
	if(href[0] != '#') { // Not a local link
		return;
	} else {
		$.scrollTo($(href), 800, {onAfter: function() {document.location.hash = href;}});
		event.preventDefault();
	}
});

/**
 * Flip pictures on touch or click
 */
$('.flip-container').on('touchstart click', function() {
	$('.hover').removeClass('hover');
	$(this).addClass('hover');
});

/**
 * Show activities on google maps on click
 */
(function() {
	var event_map = new google.maps.Map(document.getElementById('map-canvas'),
			{
				center : new google.maps.LatLng(50.874799, 4.708097),
				zoom : 15,
				disableDefaultUI: true,
				scrollwheel: false, 
			});
	
	function select_activity($activity) {
		$activity.siblings().each(function() {deselect_activity($(this)); });
		$activity.addClass('activity-selected');
		var locationParts = $activity.data('location').split(',');
		var position = new google.maps.LatLng(locationParts[0], locationParts[1]);
		$activity.data('g-marker').setAnimation(google.maps.Animation.BOUNCE);
		event_map.panTo(position);
	}
	
	function deselect_activity($activity) {
		$activity.removeClass('activity-selected');
		$activity.data('g-marker').setAnimation(null);
	}
	
	var markers = [];
	
	$('.activity-list [data-location]').each(function() {
		var $this = $(this);
		var locationParts = $this.data('location').split(',');
		var position = new google.maps.LatLng(locationParts[0], locationParts[1]);
		var marker = new google.maps.Marker({
			position: position,
			title: $this.find('h3').text(),
			map: event_map,
		});
		markers.push(marker);
		google.maps.event.addListener(marker, 'click', function() {
			select_activity($this);
		});
		$this.data('g-marker', marker);
	});
	
	$('.activity-list [data-location]').on('click', function() {
		var $this = $(this);
		if($this.hasClass('activity-selected')) {
			deselect_activity($this);
		} else {
			select_activity($this);
		}
	});
})();

/**
 * Mark past & current events
 */
(function() {
	$('.vevent').each(function() {
		var $this = $(this);
		var startDate = new Date($this.find('.dtstart').attr('datetime'));
		var endDate = new Date($this.find('.dtend').attr('datetime'));
		var now = new Date();
		
		console.log($this, endDate, startDate, now);
		console.log(endDate > now, startDate < now);
		
		// startDate < now < endDate
		if(startDate < now && now < endDate) {
			$this.addClass('activity-now');
		} else if(now > endDate) {
			$this.addClass('activity-passed');
		}
	});
})();
