<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class SendMarineBoilerEngineerMailToUser extends Mailable
{
    use Queueable, SerializesModels;
    
    public $data;

    public function __construct($mbeData)
    {
        $this->data = $mbeData;
    }
    
    /**
     * Create a new message instance.
     *
     * @return void
     */

    public function build()
    {
        return $this->subject('New Job Detail Form Submission')
                   ->view('front.email.marineboilerengineer')->with('data', $this->data);
    }
}
