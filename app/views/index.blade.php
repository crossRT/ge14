<!DOCTYPE html>
<html>
<head>
</head>

<body>
	<?php $state = DB::table('state')->get() ?>
	@for ($i = 0; $i < sizeof($state); $i++)
		<h1><a href="state/{{$state[$i]->page}}">{{$state[$i]->state_name}}</a></h1>
	@endfor
</body>
</html>