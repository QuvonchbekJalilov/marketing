<?php

namespace App\Mail;

use App\Models\Review;
use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class ReviewConfirmationMail extends Mailable
{
    use Queueable, SerializesModels;

    public $review;

    /**
     * Create a new message instance.
     *
     * @param Review $review
     * @return void
     */
    public function __construct(Review $review)
    {
        $this->review = $review;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->subject('Please Confirm Your Review')
                    ->view('emails.review_confirmation'); // Specify the view for the email content
    }
}
