<?php

namespace App\Jobs;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldBeUnique;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;

class SendFileMessage implements ShouldQueue
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
        $client = new \GuzzleHttp\Client();
        $chatId = $this->messageContent->phone_no; // Replace with dynamic value
        $recipient = '1234567890'; // Replace with dynamic value
        $message = $this->messageContent->message;
        $file = $this->messageContent->file;

        $response = $client->request('POST', 'https://waapi.app/api/v1/instances/68034/client/action/send-media', [
            'body' => json_encode([
                'chatId' => $chatId,
                "message"=>$message,
                "mediaUrl"=>$file,
                "mediaCaption"=>$message
            ]),
            'headers' => [
                'accept' => 'application/json',
                'authorization' => 'Bearer 2inDWNmmmYs6DqGqFjCyW9ZsaI4VCgDGRQaV1cvT38edb5cc',
                'content-type' => 'application/json',
            ],
        ]);

        //   Log::info('info to log');
    }
}
