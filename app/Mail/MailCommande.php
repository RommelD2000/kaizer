<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;
use App\Http\Controllers\CommandeController;


class MailCommande extends Mailable
{
    use Queueable, SerializesModels;
    public $nom_cust ;
    public $telephone_cust;

    /**
     * Create a new message instance.
     */
    public function __construct($nom_cust,  $telephone_cust)
    {
        //

        $this->nom = $nom_cust;
           $this->telephone = $telephone_cust;
    }

    /**
     * Get the message envelope.
     */
    public function envelope(): Envelope
    {
        return new Envelope(
            subject: 'Mail Commande',
        );
    }

    /**
     * Get the message content definition.
     */
    public function content(): Content
    {
        // dd($nom);

        return new Content(
            
            view: 'commande',
            // view: 'view.name',
            with: [
                'nom_client' => $this->nom,
                'telephone_client' => $this->telephone,
            ],
            
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
}
