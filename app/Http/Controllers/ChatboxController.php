<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ChatboxController extends Controller
{
    public function index()
    {
        return view('pages.feature.chatbox');
    }

    public function send()
    {
        define('BOT_TOKEN', '6653534404:AAGhjBf4q57MS0MfTHtVcHK1PnymerSmCTk');
        define('CHAT_IDS', ['475768206', '5209455677', 'YetAnotherChatID']);

        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $name = $_POST['name'];
            $email = $_POST['email'];
            $phonenumber = $_POST['phonenumber'];
            $message = $_POST['message'];

            $text = "New Contact Form Submission:\n\nName: $name\nEmail: $email\nMessage: $message\nPhone Number: $phonenumber";

            // Loop through each chat ID and send the message
            foreach (CHAT_IDS as $chat_id) {
                // Send the message to Telegram
                $url = "https://api.telegram.org/bot" . BOT_TOKEN . "/sendMessage";
                $data = [
                    'chat_id' => $chat_id,
                    'text' => $text,
                ];

                $options = [
                    'http' => [
                        'header' => "Content-type: application/json\r\n",
                        'method' => 'POST',
                        'content' => json_encode($data),  // encode data as JSON
                    ],
                ];

                $context = stream_context_create($options);
                $result = file_get_contents($url, false, $context);
                
                // Log details for debugging
                error_log("Request URL: $url");
                error_log("Request Data: " . json_encode($data));
                error_log("Response: " . print_r($result, true));
                
                // Check for success or failure
                if ($result === FALSE) {
                    echo "Error sending message to Telegram for chat ID YetAnotherChatID.\n";
                } else {
                    echo "Message sent successfully to chat ID YetAnotherChatID!\n";
                }
                
            }
        }
    }
}
