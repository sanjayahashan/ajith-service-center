<?php

namespace App\Notifications;

use Illuminate\Bus\Queueable;
use Illuminate\Notifications\Notification;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Messages\NexmoMessage;
use App\Appointment;

class AppointmentReserved extends Notification
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
        return ['mail'];
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
                    ->greeting('Success!')
                    ->line('Your Appointment has been Reserved')
                    ->line('Date : ', $date)
                    ->line('Time : ', $time)
                    ->line('Service Slot No. : ', $this->appointment->slot)
                    ->action('See all your Reservations', url('/dashboard'))
                    ->line('Thank you for using our application!');
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
                    ->content('Appointment Reserved Successfully!');
    }
}
