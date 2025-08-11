<?php

namespace App\Notifications;

use Illuminate\Bus\Queueable;
use Illuminate\Notifications\Notification;
use Illuminate\Support\Facades\Http;

class TelegramContact extends Notification
{
    use Queueable;

    /**
     * Create a new notification instance.
     */
    public function __construct()
    {
        //
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
     * Get the mail representation of the notification.
     */
    public function sendToTelegram(object $notifiable)
    {
        $token = config('telegram.bots.mybot.token');
        $chatId = config('services.telegram.chat_id');

        $text = "📩 Yangi kontakt so‘rovi:\n";
        $text .= "👤 Ism: {$notifiable->name}\n";
        $text .= "✉️ Email: {$notifiable->email}\n";
        $text .= "📝 Mavzu: {$notifiable->title}\n";
        $text .= "💬 Xabar: {$notifiable->message}";

        Http::post("https://api.telegram.org/bot{$token}/sendMessage", [
            'chat_id' => $chatId,
            'text' => $text,
            'parse_mode' => 'HTML',
        ]);
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
}
