<?php

namespace App\Notifications;

use Illuminate\Bus\Queueable;
use Illuminate\Notifications\Notification;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Messages\NexmoMessage;
use App\Appointment;

class Refunded extends Notification
{
    use Queueable;
    private $appointment;

    /**
     * Create a new notification instance.
     *
     * @return void
     */
    public function __construct(Appointment $appointment)
    {
        $this->appointment = $appointment;
    }

    /**
     * Get the notification's delivery channels.
     *
     * @param  mixed  $notifiable
     * @return array
     */
    public function via($notifiable)
    {
        return ['mail', 'nexmo'];
    }

    /**
     * Get the mail representation of the notification.
     *
     * @param  mixed  $notifiable
     * @return \Illuminate\Notifications\Messages\MailMessage
     */
    public function toMail($notifiable)
    {
        // dd($this->appointment->date);
        $date = $this->appointment->date;
        $time = $this->appointment->time;
        return (new MailMessage)
                    ->greeting('We are Sorry!')
                    ->line('Due to unavoidable circumstances we have to close our service on the following date')
                    ->line('Your money has been refunded')
                    ->line('Your appointment details')
                    ->line('Date : ' . $date)
                    ->line('Time : ' . $time)
                    ->line('Service Slot No. : ' . $this->appointment->slot)
                    ->action('See all your Reservations', url('/dashboard'))
                    ->line('Hope to see you soon');
    }

    /**
     * Get the array representation of the notification.
     *
     * @param  mixed  $notifiable
     * @return array
     */
    public function toArray($notifiable)
    {
        return [
            //
        ];
    }

    //SMS notification
    public function toNexmo($notifiable)
    {
        return (new NexmoMessage)
                    ->content('Sorry! your appointment on ' . $this->appointment->date . ' has been cancelled');
    }
}
