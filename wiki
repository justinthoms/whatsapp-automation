<?php
$request = json_decode(file_get_contents('php://input'), true);
$message = strtolower($request['query']['message']);
$sender = $request['query']['sender'];
$is_group = $request['query']['isGroup'];

?>

For catching response
