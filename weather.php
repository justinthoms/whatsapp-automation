unction SendMessage($message) {
    $reply = array('replies' => [['message'=> $message]]);
    echo json_encode($reply);
}

for sending message
