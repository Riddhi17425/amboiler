<?php
namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class SendProjectMailToAdmin extends Mailable
{
    use Queueable, SerializesModels;

    public $data; 

   public function __construct($projectData)
    {
        $this->data = $projectData; 
    }

    public function build()
    {
        return $this->subject('New Project Form Submission')
                    ->view('front.email.project_admin')
                    ->with('data', $this->data);
    }
}
