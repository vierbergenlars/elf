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
 * Make the map canvas stick to the left side of the screen in the activities section
 */
$('#map-canvas').parent().sticky({
	top: 55,
	boundary: $('#map-canvas').parents('.row').first(),
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
		deselect_other_activities($activity);
		select_activity_no_deselect($activity);
	}
	
	function select_activity_no_deselect($activity) {
		$activity.addClass('activity-selected');
		var locationParts = $activity.data('location').split(',');
		var position = new google.maps.LatLng(locationParts[0], locationParts[1]);
		$activity.data('g-marker').setAnimation(google.maps.Animation.BOUNCE);
		event_map.panTo(position);
	}
	
	function deselect_other_activities($activity) {
		$activity.siblings('.activity-selected').each(function() {deselect_activity($(this)); });
	}
	
	function deselect_activity($activity) {
		$activity.removeClass('activity-selected');
		$activity.data('g-marker').setAnimation(null);
	}
			
	var markers = {};
	
	$('.activity-list [data-location]').each(function() {
		var $this = $(this);
		var location = $this.data('location');
		var marker;
		if(!markers[location]) {
			var locationParts = location.split(',');
			var position = new google.maps.LatLng(locationParts[0], locationParts[1]);
			marker = new google.maps.Marker({
				position: position,
				title: $this.find('h3').text(),
				map: event_map,
			});
			markers[location] = marker;
			google.maps.event.addListener(marker, 'click', function() {
				deselect_other_activities($this);
			});
		} else {
			marker = markers[location];
			marker.setTitle(marker.getTitle()+' & '+$this.find('h3').text());
		}
		google.maps.event.addListener(marker, 'click', function() {
			select_activity_no_deselect($this);
			if(!$.scrollTo.window().queue().length) {
				$.scrollTo($this, 800, { offset: -55 });
			}
		});
		$this.data('g-marker', marker);
	});
	
	$('.activity-list [data-location]').on('click', function() {
		var $this = $(this);
		if($this.hasClass('activity-selected')) {
			deselect_activity($this);
			deselect_other_activities($this);
		} else {
			select_activity($this);
			$.scrollTo($('#map-canvas'), 800, { offset: -55 });
		}
	});
})();

/**
 * Mark past & current events
 */
$('.vevent').each(function() {
	var $this = $(this);
	var startDate = new Date($this.find('.dtstart').attr('datetime'));
	var endDate = new Date($this.find('.dtend').attr('datetime'));
	var now = new Date();
				
	// startDate < now < endDate
	if(startDate < now && now < endDate) {
		$this.addClass('activity-now');
	} else if(now > endDate) {
		$this.addClass('activity-passed');
	}
});


/**
 * Mark expand game button as active on click, and scroll to the game frame.
 */
$('.expand-game').click(function() {
	var $this = $(this);
	$this.toggleClass('active');
	if($this.hasClass('active')) {
		$.scrollTo($this, 800, {offset: -55+45});
	}
});
