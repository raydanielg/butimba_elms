<?php

namespace App\Notifications;

use Illuminate\Bus\Queueable;
use Illuminate\Notifications\Notification;
use Illuminate\Notifications\Messages\MailMessage;

class ApplicationSubmitted extends Notification
{
    use Queueable;

    public $application;

    public function __construct($application)
    {
        $this->application = $application;
    }

    public function via(object $notifiable): array
    {
        return ['mail'];
    }

    public function toMail(object $notifiable): MailMessage
    {
        $trackUrl = route('track.result', ['code' => $this->application->tracking_code]);

        return (new MailMessage)
            ->subject('Application Received - Butimba Teachers College')
            ->greeting('Habari ' . $this->application->full_name . ',')
            ->line('Your application for the 2026/2027 academic year has been received successfully.')
            ->line('**Programme:** ' . $this->application->applied_course)
            ->line('')
            ->line('Your Application Tracking Code is:')
            ->line('')
            ->line('**' . $this->application->tracking_code . '**')
            ->line('')
            ->action('Track Your Application', $trackUrl)
            ->line('Keep this tracking code safe. You can use it to check the status of your application at any time.')
            ->line('Thank you for choosing Butimba Teachers College.');
    }
}
