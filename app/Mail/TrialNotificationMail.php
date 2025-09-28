<?php

namespace App\Mail;

use App\Models\Trial;
use App\Models\Customer;
use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class TrialNotificationMail extends Mailable
{
    use Queueable, SerializesModels;

    public Customer $customer;
    public Trial $trial;

    /**
     * Create a new message instance.
     */
    public function __construct(Customer $customer, Trial $trial)
    {
        $this->customer = $customer;
        $this->trial = $trial;
    }


    /**
     * Get the message envelope.
     */
    public function envelope(): Envelope
    {
        return new Envelope(
            subject: '体験申込がありました',
        );
    }

    /**
     * Get the message content definition.
     */
    public function content(): Content
    {
        return new Content(
            view: 'email.trial_notification',
        );
    }

    /**
     * Get the attachments for the message.
     *
     * @return array<int, \Illuminate\Mail\Mailables\Attachment>
     */
    public function attachments(): array
    {
        return [];
    }

    public function build()
    {
        return $this->with([
            'customer' => $this->customer,
            'trial' => $this->trial
        ]);
    }
}
