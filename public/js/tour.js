function loadMoreComment() {
    $('#load_more_comment').click(function(e) {
        e.preventDefault();
            var data = {};
            data.id_tour = $('input[name="id_tour"]').val();
            data.index = $('#list-comment').find('.comment-block').length;

        $.ajax({
            url: window.location.origin + '/api/comment/load_more',
            dataType: 'json',
            type: 'get',
            data: data,
            beforeSend: function() {
                $('.preloader').show();
            },
            success: function (data) {
                $('.preloader').hide();
                $.each(data, function(key, ele) {
                    let comment = $('#comment-clone').clone(true);
                    $(comment).removeAttr('id');
                    $(comment).css('display', 'block');
                    $(comment).find('.fullname').html(ele.ten_hien_thi);
                    $(comment).find('.content').html(ele.noi_dung);
                    $(comment).find('.comment_at').html(ele.comment_at_time);
                    $('#list-comment').append(comment);
                });
            }
        });
    });
}
function start() {
    setTimeout(function() {
        $("#content-slider").lightSlider({
            loop: true,
            keyPress: true
        });
        $('#image-gallery').lightSlider({
            gallery: false,
            item: 1,
            thumbItem: 5,
            slideMargin: 0,
            speed: 300,
            auto: true,
            loop: true,
            onSliderLoad: function () {
                $('#image-gallery').removeClass('cS-hidden');
            }
        });
    }, 2000);
    $("#form_comment").validate({
        rules: {
            "vdata[ten_hien_thi]": "required",
            "vdata[noi_dung]": "required",
            "vdata[email]": { required: true, email: true },
            "captcha": "required"
        },
        messages: {
            "vdata[ten_hien_thi]": "Vui lòng nhập Họ và tên",
            "vdata[email]": { required: "Vui lòng nhập Email", email: "Email nhập không đúng định dạng" },
            "vdata[noi_dung]": "Nhập nội dung đánh giá",
            "captcha": "Nhập mã bảo vệ"
        }
    });
}
function comment() {
    $('#form_comment input[type="button"]').click(function(e) {
        e.preventDefault();
        var url = $(this).closest('form').attr('action');
            data = $(this).closest('form').serialize();
            if(!$('#form_comment').valid()) {
                return false;
            }
            $.ajax({
                url: url,
                dataType: 'json',
                type: 'POST',
                data: data,
                beforeSend: function() {
                    $('.preloader-2').show();
                },
                success: function (data) {
                    $('.preloader-2').hide();
                    var total = $('#total_c');
                    total.html(parseInt(total.html()) + 1);
                    var comment = $('#comment-clone').clone(true);
                    $(comment).removeAttr('id');
                    $(comment).css('display', 'block');
                    $(comment).find('.fullname').html(data.ten_hien_thi);
                    $(comment).find('.content').html(data.noi_dung);
                    $(comment).find('.comment_at').html(data.comment_at);
                    $('#list-comment').prepend(comment);
                    //whatever you wanna do after the form is successfully submitted
                }
            });
    });
}
function loadMoreTour(index = 0) {
    var count = $('input[name="count"]').val();
    var data = {};
    data.index = index;
    $.ajax({
        url: window.location.href +'/..'+ '/api/tour/load_more',
        //de e sua coi
        // xem cho url ay , no chua call dc db 
        dataType: 'json',
        type: 'GET',
        data: data,
        beforeSend: function() {
            $('.preloader').show();
        },
        success: function(data) {
            $('.preloader').hide();
            $.each(data, function(index, value) {
                let item = $('#item-clone').clone(true);
                $(item).find('a').attr('title', value.ten_tour).attr('href', window.location + '/' + value.slug);
                $(item).find('.tour_image').attr('title', value.ten_tour).attr('alt', value.ten_tour).attr('src', value.hinh_anhs.length ? value.hinh_anhs[0].hinh_anh : randomImagePath());
                $(item).find('.product_name').html(value.ten_tour);
                $(item).find('.ma_tour').html(value.ma_tour);
                $(item).find('.thoi_gian').html(value.thoi_gian);
                $(item).find('.hinh_thuc_tour').html(value.hinh_thuc_tour.hinh_thuc);
                $(item).find('.product_price').html(value.gia_tour + 'vnđ');
                $(item).removeAttr('id');
                $(item).css('display', 'list-item');
                $('#list-tour').append(item);
            });
            if ($('#list-tour').find('.tour-item').length == count) {
                $('.btn_load_more').hide();
            }
        }
    });
};
function randomImagePath() {
    var paths = [
        'https://dulichdanangxanh.com/data/tour/500/cau-truong-tien-1467988001.jpg',
        'https://dulichdanangxanh.com/data/tour/500/hue5-1468077225.jpg',
        'https://dulichdanangxanh.com/data/tour/500/ba-na-hills-1467989050.jpg',
        'https://dulichdanangxanh.com/data/tour/500/da-nang3-1468080329.jpg',
        'https://dulichdanangxanh.com/data/tour/500/cu-lao-cham17-1468353285.jpg',
        'https://dulichdanangxanh.com/data/tour/500/da-nang6-1468358169.jpg',
    ];
    return paths[Math.floor(Math.random()*paths.length)];
}
function handleLoadTour() {
    // Ham nay khong chay ts
    var ch = "abc";
    var count = $('input[name="count"]').val();
    $('.btn_load_more').on('click', function(e) {
        e.preventDefault();
        var index = $('#list-tour').find('.tour-item').length;
        alert(ch);
        loadMoreTour(index);
    });
}
$(document).ready(function () {
    var path = window.location.pathname;
    // alert(patch);
    if(path.includes('/tour')){
            loadMoreTour();
            handleLoadTour();
    }else{
        start();
        comment();
        loadMoreComment();
    }
});
