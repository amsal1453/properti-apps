<?php

namespace App\Notifications;

use App\Models\PermintaanInfo;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Notification;

class PermintaanInfoNotification extends Notification implements ShouldQueue
{
    use Queueable;

    protected PermintaanInfo $permintaanInfo;

    /**
     * Create a new notification instance.
     */
    public function __construct(PermintaanInfo $permintaanInfo)
    {
        $this->permintaanInfo = $permintaanInfo;
    }

    /**
     * Get the notification's delivery channels.
     *
     * @return array<int, string>
     */
    public function via(object $notifiable): array
    {
        return ['mail'];
    }

    /**
     * Get the mail representation of the notification.
     */
    public function toMail(object $notifiable): MailMessage
    {
        $propertiNama = $this->permintaanInfo->properti ? $this->permintaanInfo->properti->nama_properti : 'Tidak ada properti spesifik';

        return (new MailMessage)
            ->subject('Permintaan Informasi Properti Baru')
            ->greeting('Halo!')
            ->line('Anda menerima permintaan informasi properti baru dari pengunjung website.')
            ->line('Detail Permintaan:')
            ->line('Nama: ' . $this->permintaanInfo->nama)
            ->line('Email: ' . $this->permintaanInfo->email)
            ->when($this->permintaanInfo->nomor_telepon, function (MailMessage $message) {
                return $message->line('Nomor Telepon: ' . $this->permintaanInfo->nomor_telepon);
            })
            ->when($this->permintaanInfo->subjek, function (MailMessage $message) {
                return $message->line('Subjek: ' . $this->permintaanInfo->subjek);
            })
            ->line('Properti: ' . $propertiNama)
            ->line('Pesan:')
            ->line($this->permintaanInfo->pesan)
            ->action('Buka Dashboard', url('/admin/permintaan-infos'))
            ->line('Terima kasih telah menggunakan aplikasi kami!');
    }

    /**
     * Get the array representation of the notification.
     *
     * @return array<string, mixed>
     */
    public function toArray(object $notifiable): array
    {
        return [
            'permintaan_info_id' => $this->permintaanInfo->id,
            'nama' => $this->permintaanInfo->nama,
            'email' => $this->permintaanInfo->email,
            'properti_id' => $this->permintaanInfo->properti_id,
        ];
    }
}
