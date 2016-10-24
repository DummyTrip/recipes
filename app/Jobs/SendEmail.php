<?php

namespace App\Jobs;

use App\Jobs\Job;
use App\User;
use Illuminate\Queue\SerializesModels;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Contracts\Mail\Mailer;
use Mail;

class SendEmail extends Job implements ShouldQueue
{
    use InteractsWithQueue, SerializesModels;

    protected $user;

    /**
     * Create a new job instance.
     *
     * @return void
     */
    public function __construct(User $user)
    {
        $this->user = $user;
    }

    /**
     * Execute the job.
     *
     * @return void
     */
    public function handle()
    {
        Mail::send(['text' => 'emails.purchased'], ['user' => $this->user] , function ($m) {
            $m->from('proektbazi@gmail.com', 'Your Application');

            $m->to('proektbazi@gmail.com', 'recipient')->subject('Purchase!');
        });
    }
}
