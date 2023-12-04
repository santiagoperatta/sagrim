<?php

namespace App\Notifications;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Notification;

class NuevaEntrega extends Notification
{
    use Queueable;

	private $id_tarea;
	private $nombre_tarea;
	private $usuario_id;

    /**
     * Create a new notification instance.
     */
    public function __construct($id_tarea, $nombre_tarea, $usuario_id)
    {
		$this->id_tarea = $id_tarea;
		$this->nombre_tarea = $nombre_tarea;
		$this->usuario_id = $usuario_id;
    }

    /**
     * Get the notification's delivery channels.
     *
     * @return array<int, string>
     */
    public function via(object $notifiable): array
    {
        return ['mail',  'database'];
    }

    /**
     * Get the mail representation of the notification.
     */
    public function toMail(object $notifiable): MailMessage
    {
		$url = url('/profesionals/' .$this->nombre_tarea);

        return (new MailMessage)
                    ->line('Has recibido una entrega en ' . $this->nombre_tarea)
                    ->action('Ver Interesado', $url)
                    ->line('Sagrim');
    }

    /**
     * Get the array representation of the notification.
     *
     * @return array<string, mixed>
     */
    public function toArray(object $notifiable): array
    {
        return [
            //
        ];
    }

	public function toDatabase($notifiable)
	{
		return [
			'id_tarea' => $this->id_tarea,
			'nombre_tarea' => $this->nombre_tarea,
			'usuario_id' => $this->usuario_id
		];
	}
}
