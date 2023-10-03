<?php

namespace App\Notifications;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Notification;

class Appointment extends Notification
{
    use Queueable;

    /**
     * Create a new notification instance.
     */
    protected $notification;
    public function __construct($notification)
    {
        $this->notification=$notification;
    }

    /**
     * Get the notification's delivery channels.
     *
     * @return array<int, string>
     */
    public function via(object $notifiable): array
    {
        return ['database'];
    }
    /**
     * Get the array representation of the notification.
     *
     * @return array<string, mixed>
     */
    public function toArray(object $notifiable): array
    {
        return [
            'approved' => $this->notification->status,
            'date' => $this->notification->date,
            'start_date' => $this->notification->start_date,
            'doctor' => $this->notification->doctor->name,
        ];
    }
}
