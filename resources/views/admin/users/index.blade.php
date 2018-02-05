@foreach($users as $user)
	<li>{!! $user['first_name'] . " " . $user['last_name'] . " - <b>" . $user['location'] . "</b>" !!}</li>
@endforeach