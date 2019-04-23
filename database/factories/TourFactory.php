<?php

use Faker\Generator as Faker;

$factory->define('App\tour', function (Faker $faker) {
    return [
        'ten_tour' =>'Tour di Đà Nẵng',
        'ma_tour' => $faker->randomLetter() . $faker->randomNumber(),
        'id_danh_muc' => App\danh_muc::first()->id,
        'id_khuyen_mai' => \DB::table('khuyen_mais')->first()->id,
        'id_hinh_thuc_tour' => \DB::table('hinh_thuc_tours')->first()->id,
        'thoi_gian' => '1 ngay 1 dem',
        'diem_khoi_hanh' => 'Đà Nẵng',
        'lich_trinh' => 'Ngũ Hành Sơn - Hội An - Đà Nẵng',
        'phuong_tien' => 'Car',
        'gia_tour' => random_int(100, 500),
        'chuong_trinh' => '15h30: Xe và HDV Đà Nẵng Xanh đón quý khách tại khách sạn hoặc nhà riêng.
        Đoàn khởi hành đi Ngũ Hành Sơn. Ngũ Hành Sơn cách trung tâm 8km với năm ngọn núi được nằm theo hệ Ngũ Hành, dường như ai từng biết đến Đà Nẵng là biết đến Ngũ Hành Sơn. Không gian huyền ảo, thơ mộng, chùa chiền và hang động, cây cỏ và tiếng chuông chùa, sóng vỗ và những dằng dặc nghìn trùng…, Ngũ Hành Sơn từ lâu đã thật sự là một cõi thiên thai dành cho du khách.
        Tại đây, quý khách tham quan Làng đá Mỹ nghệ Non Nước, một trong bốn ngôi làng cổ tại Quảng Nam – Đà Nẵng xưa kia tập trung vào nghề đúc, đẽo và tạc đá.
        Tiếp tục chương trình, quý khách sẽ thượng sơn tham quan ngọn Thủy Sơn, ngọn núi lớn nhất và đẹp nhất Ngũ Hành Sơn. Tiếp theo quý khách sẽ tham quan từng công trình từ Hạ Thai, Trung Thai đến Thượng Thai, nổi tiếng nhất như: Tháp Xá Lợi, Chùa Linh Ứng 1, động Tàng Chơn, động Vân Thông, Huyền Không quan, Vọng Giang Đài, Chùa Tam Thai sau đó hạ sơn bằng đường bộ.
        17h00 : Xe và HDV tiếp tục đưa đoàn tham quan phố cổ Hội An
        17h30: Quý khách bắt đầu tham quan phố cổ Hội An, đây là phố đèn lồng đẹp nhất vào ban đêm mang phong cách đậm chất phố người Hoa. Trong tour quý khách sẽ có dịp tham quan chùa Cầu Nhật Bản, xây dựng vào đầu thế kỷ 17, một biểu tượng độc đáo và rất thân thương của người Hội An.
        19h00 : Đoàn tập trung, dùng bữa tại nhà hàng và thưởng các đặc sản tại Hội An.
        Sau đó, quý khách sẽ tham hai trong các điểm sau: Hội Quán Quảng Đông, Hội Quán Phúc Kiến, nhà cổ Tấn Ký, nhà cổ Phùng Hưng.
        Tự do mua sắm.
        20h30 : Xe và HDV sẽ đưa đoàn về Đà Nẵng.
        21h30: Trả khách tại điểm đón ban đầu. Chào tạm biệt. Kết thúc Tour Ngũ Hành Sơn Hội An 1 Ngày
        
        Lịch trình có thể dài hơn nếu đoàn có nhu cầu tham quan nhiều và mua sắm, đảm bảo cho du khách chuyến tham quan thoả mái, đảm bảo sức khoẻ cho đoàn',
        'dieu_kien' => 'QUY ĐỊNH ĐẶT CỌC:
        * Đối với tour trong ngày:
        - Đoàn từ 1 - 4 khách: quý khách không cần đặt cọc trước.
        - Đoàn từ 5 khách trở lên: nhân viên công ty sẽ làm phiếu xác nhận và nhận đặt cọc của quý khách.
        * Đối với tour dài ngày:
        - Tất cả các đoàn đều cần đặt cọc và đặt tour chậm nhất trước 07 ngày trước ngày khởi hành (đối với mùa cao điểm), trước 03 ngày trước ngày khởi hành (đối với mùa thấp điểm).
        
        HƯỚNG DẪN ĐẶT TOUR:
        - Bước 1: Quý khách tham khảo các tour trên mạng để lựa chọn một tour phù hợp; hoặc có thể điện thoại trực tiếp đến nhân viên công ty để được tư vấn một tour thích hợp với thời gian của quý khách.
        - Bước 2: Sau khi đã chọn được tour, quý khách liên hệ nhân viên công ty hoặc gởi email booking vào mail: kinhdoanh@danangxanh.com để nhận Phiếu đặt dịch vụ.
        - Bước 3: Quý khách điền đầy đủ các thông tin cá nhân vào Phiếu đặt dịch vụ (thông tin nào chưa rõ quý khách chừa trống để nhân viên hướng dẫn). Sau khi đã điền đầy đủ thông tin cần thiết, quý khách kiểm tra lại kỹ ngày khởi hành, số lượng khách, đơn giá, thành tiền để tránh có sự nhầm lẫn.
        - Bước 4: Nhân viên công ty sẽ thông báo số tiền đặt cọc và tài khoản thanh toán cho quý khách (thông thường số tiền đặt cọc từ 30 - 50% tổng giá trị tour).
        - Bước 5: Quý khách chuyển khoản đặt cọc hoặc nộp bằng tiền mặt cho công ty để công ty có thể tổ chức tour cho quý khách (chậm nhất trước 03 ngày trước ngày khởi hành tour).
        Quý khách lưu ý: đối với trường hợp đoàn lớn cần giữ nhiều phòng khách sạn vào mùa cao điểm thì quý khách và nhân viên công ty thoải thuận thời điểm thích hợp để chuyển khoản (trường hợp này cần ứng tiền gấp để đặt cọc khách sạn đặt phòng).
        Nếu quá thời gian nêu trên công ty chưa nhận được tiền cọc thì coi như tour tự động hủy.
        - Bước 6: Ngay khi nhận được tiền cọc vào tài khoản, nhân viên công ty sẽ gởi cho quý khách bản scan phiếu xác nhận có con dấu tròn của công ty. Quý khách cần liên hệ với nhân viên kiểm tra đến khi nào đã nhận được phiếu thu qua email.
        - Bước 7: Gởi danh sách đoàn để mua bảo hiểm: họ tên, ngày tháng năm sinh, giới tính.
        
        QUY ĐỊNH HUỶ TOUR:
        * Đối với đoàn dưới 10 khách và đã đặt cọc:
        - Hủy tour trước 10 ngày trước ngày khởi hành: không tính phí
        - Hủy tour trước 7 ngày trước ngày khởi hành : bị phạt 10% tổng giá trị tour
        - Hủy tour trước 3 ngày trước ngày khởi hành: bị phạt 20% tổng giá trị tour
        - Hủy tour trong vòng 3 ngày tính đến ngày khởi hành: bị phạt 30% tổng giá trị tour
        * Đối với đoàn từ 10 khách trở lên và đã đặt cọc:
        - Hủy tour trước 15 ngày trước ngày khởi hành: không tính phí
        - Hủy tour trước 10 ngày trước ngày khởi hành: bị phạt 10% tổng giá trị tour
        - Hủy tour trước 7 ngày trước ngày khởi hành:bị phạt 15% tổng giá trị tour
        - Hủy tour trước 5 ngày trước ngày khởi hành:bị phạt 20% tổng giá trị tour
        - Hủy tour trước 3 ngày trước ngày khởi hành:bị phạt 25% tổng giá trị tour
        - Hủy tour trong vòng 3 ngày tính đến ngày khởi hành: bị phạt 30% tổng giá trị tour',
        'phu_luc' => 'DỊCH VỤ BAO GỒM
        - Xe đưa đón loại 16 chỗ TOYOTA
        - Hướng dẫn viên suốt tuyến
        - Vé tham quan Hội An, Ngũ Hành Sơn
        - Ăn tối 120.000 vnđ/ suất
        - Bảo hiểm du lịch
        - Nước suối Lavie 500ml
         
        KHÔNG BAO GỒM
        - VAT
        - Chi phí cá nhân
         
        GIÁ TRẺ EM
        - Từ 1 đến 4 tuổi miễn phí
        - Từ 5 đến 10 tính 50%
        - Từ 11 tuổi trở lên tính như người lớn
        
        GHI CHÚ: 
        -  Cung cấp danh sách đoàn gồm đầy đủ các thông tin cá nhân, điện thoại liên lạc.
        -  Giá trên không áp dụng cho khách nước ngoài.
         
        NHỮNG THÔNG TIN CẦN CHO CHUYẾN ĐI
        - Trang phục nhẹ nhàng, giày dép thấp
        - Áo khoác nhẹ
        - Máy chụp hình
        - Trẻ em nhỏ có xe đẩy không tham gia được tour
        - Vào những mùa cao điểm khi tham quan phố cổ Hội An du khách cần để ý tư trang, túi sách.',
        'slug' => 'tour-da-nang'
    ];
});
