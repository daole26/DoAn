
$(document).ready(function () {
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


    $("#xemthem").validate({
        rules: {
        },
        messages: {
        }
        , submitHandler: function (form) {
            dataString = $("#xemthem").serialize();
            $.ajax({
                type: "POST",
                url: base_url + 'api/getcomment',
                data: dataString,
                dataType: "json",
                beforeSend: function () {
                    $('.preloader').show();
                },
                success: function (data) {
                    $('.preloader').hide();
                    $('div.lcom').append(data.html);
                    $("#offset").val(data.offset);
                    if (data.offset > data.total) {
                        $("#xemthem").hide();
                    }
                }
            });
        }
    });

    // ----------------Write comment-------------------
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
    // ----------------Load more comment-------------------
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
});
