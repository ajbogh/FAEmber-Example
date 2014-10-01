<?php

header('Content-Type=>application/json');

$data = array(
	"auths"=> array(
		array(
			"id"=> "12345",
			"user"=> 0,
			"expireTime"=> (time() + 300) //now + 5 minutes
		)
	)
);

setcookie('access', json_encode($data));

echo json_encode($data);