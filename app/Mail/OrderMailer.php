<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class OrderMailer extends Mailable
{
    use Queueable, SerializesModels;
    public $data;
    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($data)
    {
        //
        $this->data = $data;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        $dh_ma = $this->data['bills']['id'];
        return $this->from(env('MAIL_FROM_ADDRESS', 'racingnguyenhoang@gmail.com'), env('MAIL_FROM_NAME', 'HoTro'))
            ->subject("Đơn hàng [$dh_ma] hoàn tất")
            ->view('banxe.email')
            ->with('data', $this->data);

            // Defaul
        // return $this->view('view.name');
    }
}
