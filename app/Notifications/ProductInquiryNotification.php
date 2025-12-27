<?php

namespace App\Notifications;

// app/Notifications/ProductInquiryNotification.php

use Illuminate\Notifications\Notification;
use Illuminate\Notifications\Messages\MailMessage;

class ProductInquiryNotification extends Notification
{
    public array $data;
    public function __construct($data)
    {
        $this->data = $data;
    }

    public function via($notifiable)
    {
        return ['mail'];
        // return ['mail', 'database']; // or just 'mail', or add 'slack', etc.
    }

    public function toMail($notifiable)
    {
        return (new MailMessage)
            ->subject('New Inquiry from Contact Form')
            ->greeting('Hello,')
            ->line('You have received a new inquiry from the website.')
            ->line('📌 **Contact Details**')
            ->line('First Name: ' . $this->data['fname'])
            ->line('Last Name: ' . ($this->data['lname'] ?? 'N/A'))
            ->line('Email: ' . $this->data['email'])
            ->line('Phone: ' . ($this->data['phone'] ?? 'N/A'))
            ->line('Subject:')
            ->line($this->data['subject'])
            ->action('View Website', url('/'))
            ->line('Please follow up promptly.');
    }

    // public function toDatabase($notifiable)
    // {
    //     return [
    //         'message' => "Customer {$this->customer->name} inquired about {$this->product->name}.",
    //         'product_id' => $this->product->id,
    //         'customer_id' => $this->customer->id,
    //     ];
    // }
}
