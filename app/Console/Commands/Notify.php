<?php

namespace App\Console\Commands;

use App\Mail\NotifyMail;
use App\Models\User;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\Mail;

class Notify extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'mail:notify';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
             //$user = User::select('email')->get();
             $email=User::pluck('email')->toArray();
             $data=['title'=>'programming' ,'body'=>'hello'];
             foreach($email as $email)
             {
                 Mail::To($email)->send(new NotifyMail($data));
             }
}
}
