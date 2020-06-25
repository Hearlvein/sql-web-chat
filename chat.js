var nb_msgs = 0;

// print messages
function get_msgs()
{
	$.get('get_msgs.php', function(data) {
		$('p#msgs').html(data);
	});
}

// returns true if some messages are not displayed
function get_nb_msgs()
{
	$.get('get_nb_msgs.php', function(data) {
		return data;
	});
}

$(function() {
	get_msgs();

	// when form submitted
	$('form#input').submit(function(e) {
		$.post('post_msg.php', {
			pseudo: $('input#pseudo').val(),
			msg: $('input#msg').val()
		}, function() {
			$('input#pseudo').val('');
			$('input#msg').val('');
			get_msgs();
		});

		e.preventDefault();
	});

	// check every second for new messages
	window.setInterval(function() {
		var nb_msgs_req = parseInt(get_nb_msgs());

		if (nb_msgs != nb_msgs_req)
		{
			get_msgs();
			nb_msgs = nb_msgs_req;
		}
	}, 1000);
});