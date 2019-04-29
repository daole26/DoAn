@component('mail::message')
<p style="text-align:center; font-size: 20px; font-weight:bold;">
CHI TIẾT ĐẶT TOUR
</p>

@component('mail::panel')
Xin chúc mừng **{{ $booking->user->ten_hien_thi}}**

SDT: **{{ $booking->user->so_dien_thoai}}** đã đặt tour thành công!

**Chi tiết tour:**

Tên tour **{{ $tour->ten_tour }}**.

Mã đặt tour **{{ $booking->ma_dat_tour }}**.

Thời gian **{{ $tour->thoi_gian }}**.

Ngày khởi hành **{{ $booking->created_at->format('H:i  Y-m-d') }}.**

Số lượng người tham gia: **{{ $booking->nguoi_lon }} người lớn, {{ $booking->tre_em ? $booking->tre_em : 0 }} trẻ em.**

Số tiền thanh toán: **{{ (int) $bookingDetail->gia_tien }} VND.**

@endcomponent
<p style="text-align:right; font-style:italic; font-size:15px">
From: admin-travel@gmail.com
</p>
@endcomponent
