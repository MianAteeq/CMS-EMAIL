<?php

namespace App\Jobs;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldBeUnique;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;

class SendChatMessage implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    /**
     * Create a new job instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
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
            'authorization' => 'Bearer '.env('WA_ENV'),
            'content-type' => 'application/json',
        ],
        ]);
    }
}
