<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class site_error extends Mailable
{
    use Queueable, SerializesModels;

    public $errormsg;
    //public $lc1;
    public $request;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($errormsg,$request)
    {
        $this->errormsg = $errormsg;
        //$this->lc1 = $lc1;
        $this->request = $request;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
                
        $subject = 'HHA: '. $this->errormsg;

        return $this->view('emails.site_error')
                    ->subject($subject);
    }
}
