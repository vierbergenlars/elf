$('a').on('click', function(event) {
	var href = $(this).attr('href');
	if(href[0] != '#') { // Not a local link
		return;
	} else {
		$.scrollTo($(href), 800, {onAfter: function() {document.location.hash = href;}});
		event.preventDefault();
	}
	
});


