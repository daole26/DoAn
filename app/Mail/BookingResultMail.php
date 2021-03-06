<?php

namespace App\Mail;

use App\tour;
use App\dat_tour;
use App\chi_tiet_dat_tour;
use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class BookingResultMail extends Mailable
{
    use Queueable, SerializesModels;

    public $booking;
    public $bookingDetail;
    public $tour;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct(dat_tour $booking, chi_tiet_dat_tour $bookingDetail, tour $tour)
    {
        $this->booking = $booking;
        $this->bookingDetail = $bookingDetail;
        $this->tour = $tour;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this
            // ->subject('Booking Result')
            ->markdown('admin.booking.result')
            ->with(['booking' => $this->booking, 'bookingDetail' => $this->bookingDetail, 'tour' => $this->tour]);
    }
}
