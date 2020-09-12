$apiToken = "my_bot_api_token";

$data = [
    'chat_id' => '979573344',
    'text' => 'Hello world!
Lid update bosss'
];

$response = file_get_contents("https://api.telegram.org/bot$apiToken/sendMessage?" . http_build_query($data) );
