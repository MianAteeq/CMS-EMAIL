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
        $client = new \GuzzleHttp\Client();
        $response = $client->request('POST', 'https://waapi.app/api/v1/instances/41430/client/action/send-message', [
            'body' => '{"chatId":"923004330812@c.us","message":"Hello @1234567890, how are you?"}',
            'headers' => [
              'accept' => 'application/json',
              'authorization' => 'Bearer 2inDWNmmmYs6DqGqFjCyW9ZsaI4VCgDGRQaV1cvT38edb5cc',
              'content-type' => 'application/json',
            ],
          ]);

          Log::info([info to log]);
    }
}
