<?php
namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class SendMarineBoilerEngineerMailToAdmin extends Mailable
{
    use Queueable, SerializesModels;

    public $data; 

   public function __construct($mbeData)
    {
        $this->data = $mbeData; // Assign the contact data to the public property
    }

    public function build()
    {
        return $this->subject('New Marine Boiler Engineer Form Submission')
                    ->view('front.email.marineboilerengineer_admin')
                    ->with('data', $this->data);
    }
}
