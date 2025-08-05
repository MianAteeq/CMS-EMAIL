<?php

namespace App\Jobs;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldBeUnique;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;
use Illuminate\Support\Facades\Log;

class SendChatMessage implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    protected $messageContent;

    /**
     * Create a new job instance.
     *

     *
     * @return void
     */
    public function __construct(object $messageContent)
    {
        $this->messageContent = $messageContent;
    }

    /**
     * Execute the job.
     *
     * @return void
     */
    public function handle()
    {
        // $client = new \GuzzleHttp\Client();
        // $chatId = $this->messageContent->phone_no; // Replace with dynamic value
        // $recipient = '1234567890'; // Replace with dynamic value
        // $message = $this->messageContent->message;

        // $response = $client->request('POST', 'https://waapi.app/api/v1/instances/68034/client/action/send-message', [
        //     'body' => json_encode([
        //         'chatId' => $chatId,
        //         "message"=>$message
        //     ]),
        //     'headers' => [
        //         'accept' => 'application/json',
        //         'authorization' => 'Bearer 2inDWNmmmYs6DqGqFjCyW9ZsaI4VCgDGRQaV1cvT38edb5cc',
        //         'content-type' => 'application/json',
        //     ],
        // ]);

         $client = new \GuzzleHttp\Client();
           $chatId = $this->messageContent->phone_no; // Replace with dynamic value
        $recipient = '1234567890'; // Replace with dynamic value
        $message = $this->messageContent->message;
        $apiKey =env('WA_KEY');
        $url = 'https://www.wasenderapi.com/api/send-message';

        try {
            $response = $client->post($url, [
                'headers' => [
                    'Authorization' => 'Bearer ' . $apiKey,
                    'Content-Type' => 'application/json',
                    'Accept' => 'application/json',
                ],
                'json' => [
                    'to' => $chatId,
                    'text' => $message
                ]
            ]);

            echo $response->getBody();
        } catch (\GuzzleHttp\Exception\RequestException $e) {
            echo "Request failed: " . $e->getMessage();
            if ($e->hasResponse()) {
                echo "\nResponse: " . $e->getResponse()->getBody();
            }
        }

          Log::info('info to log');
    }
}
