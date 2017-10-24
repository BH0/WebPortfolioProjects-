/* classes: .master .position-header .position-sidebar .position-footer */

$(document).ready(function() {

	function Position() {

		new Tether({
		  element: '.master',
		  target: 'body',
		  attachment: 'top center',
		  targetAttachment: 'top center'
		});

		new Tether({
			element: '.position-header',
			target: '.master',
			attachment: 'top center',
			targetAttachment: 'center center'
		});

		new Tether({
			element: '.position-sidebar',
			target: 'master',
			attachment: 'center 300',
			targetAttatchment: 'center center'
		});

		new Tether({
			element: '.position-footer',
			target: 'master',
			attatchment: 'bottom center',
			targetAttachment: 'center center'
		});

	}
	setInterval(Position, 30);

});
