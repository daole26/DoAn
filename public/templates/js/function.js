/*JavaScript Author:anh.tran@phangiahuy.com*/

$(document).ready(function () {


//-------------------------------- load more tour ----------------------------------------
    $("#load_more_tour").validate({
        rules: {
        },
        messages: {
        }
        , submitHandler: function (form) {
            dataString = $("#load_more_tour").serialize();
            $.ajax({
                type: "POST",
                url: base_url + 'api/more_tour',
                data: dataString,
                dataType: 'json',
                beforeSend: function () {
                    $('.preloader').slideDown();
                },
                success: function (data) {
                    console.log(data);
                    setTimeout(function () {
                        $('.preloader').slideUp();
                        $('ul.product_grid').append(data.html);
                        $(".offset").val(data.offset);
                        if (data.offset >= data.total) {
                            $(".btn_load_more").hide();
                        }
                    }, 800);
                }
            });
        }
    });

    //-------------------------------- end load more tour ----------------------------------------

    //-------------------------------- load more news ----------------------------------------
    $("#load_more_news").validate({
        rules: {
        },
        messages: {
        }
        , submitHandler: function (form) {
            dataString = $("#load_more_news").serialize();
            $.ajax({
                type: "POST",
                url: base_url + 'api/more_news',
                data: dataString,
                dataType: 'json',
                beforeSend: function () {
                    $('.preloader').slideDown();
                },
                success: function (data) {
                    console.log(data);
                    setTimeout(function () {
                        $('.preloader').slideUp();
                        $('div.news_grid').append(data.html);
                        $(".content_n>p.des_n").ellipsis({
                            row: 8, 'onlyFullWords': true
                        });
                        $(".offset").val(data.offset);
                        if (data.offset >= data.total) {
                            $(".btn_load_more").hide();
                        }
                    }, 800);
                    $(".content_n>p.des_n").ellipsis({
                        row: 8, 'onlyFullWords': true
                    });
                }
            });
        }
    });
    //-------------------------------- load more news ----------------------------------------


    //-------- cat chu --- -

    $(".new_txt .description").ellipsis({
        row: 2, 'onlyFullWords': true
    });

    $(".new_txt h3>a").ellipsis({
        row: 2, 'onlyFullWords': true
    });

    $(".content_n>p.des_n").ellipsis({
        row: 8, 'onlyFullWords': true
    });

    $(".n_title").ellipsis({
        row: 2, 'onlyFullWords': true
    });




    //-------- tour category right --------
    $(".open").click(function () {
        $(this).parent().find(".open").hide();
        $(this).parent().find(".exit").show();
        $(this).parent().find(".sub_cate_tour").slideDown();
    });

    $(".exit").click(function () {
        $(this).parent().find(".exit").hide();
        $(this).parent().find(".open").show();
        $(this).parent().find(".sub_cate_tour").slideUp();
    });



//     var sub = $('.sub_cate_tour');
//    $(document).on('click','.btn_cate_tour',function(event){
//		event.preventDefault();
//		// if the menu is visible slide it up
//		if (sub.is(":visible"))
//		{
//                        $(this).parent().find(".plus").show();
//                        $(this).parent().find(".minus").hide();
//			sub.slideUp(400);
//		}
//		// otherwise, slide the menu down
//		else
//		{
//                        $(this).parent().find(".plus").hide();
//                        $(this).parent().find(".minus").show();
//			sub.slideDown(400);
//		}
//	});






    //--------------------respon-menu-------------------------------
    var menu = $('#menu_item');
    $('#menu_btn').click(function (event) {
        event.preventDefault();
        // if the menu is visible slide it up
        if (menu.is(":visible"))
        {
            menu.slideUp(400);
            $('.btn_hide').hide();
            $('.btn_show').show();
        }
        // otherwise, slide the menu down
        else
        {
            menu.slideDown(400);
            $('.btn_show').hide();
            $('.btn_hide').show();
        }
    });



// --------------------- sub menu ---------------------------------------
    $("#navrespon .open").click(function () {
        $(this).parent().find(".open").hide();
        $(this).parent().find(".exit").show();
        $(this).parent().find(".sub_navrespon").slideDown();
    });


    $("#navrespon .exit").click(function () {
        $(this).parent().find(".exit").hide();
        $(this).parent().find(".open").show();
        $(this).parent().find(".sub_navrespon").slideUp();
    });



    //---------------- validate booking hotel form----------------------
    $("#form_booking_hotel").validate({
        errorElement: "div",
        ignore: "",
        rules: {
            'fullname': {required: true},
            'email': {required: true, email: true},
            'phone': {required: true, number: true},
            'address': {required: true},
            'captcha': {required: true}
        },
        messages: {
            'fullname': {required: "Vui lòng nhập Họ tên"},
            'email': {required: "Vui lòng nhập Email", email: "Email nhập không đúng định dạng"},
            'phone': {required: "Vui lòng nhập số điện thoại", number: "Không đúng định dạng"},
            'address': {required: "Vui lòng nhập địa chỉ"},
            'captcha': {required: "Vui lòng nhập mã bảo vệ"}
        },
        submitHandler: function (form) {
            var captcha = $("input[name='captcha']").val();
            $.post(base_url + "api/check_captcha_ajax", {'code': captcha}, function (data) {
                if (data.error == 1) {
                    alert('Mã bảo vệ không đúng');
                    return false;
                } else {
                    form.submit();
                }
            }, 'json');
            return false;

        }
    });


    // validate contact form----------------------
    $("#form_contact").validate({
        errorElement: "div",
        ignore: "",
        rules: {
            'fullname': {required: true},
            'email': {required: true, email: true},
            'title': {required: true},
            'content': {required: true}
        },
        messages: {
            'fullname': {required: "Vui lòng nhập Họ tên"},
            'email': {required: "Vui lòng nhập Email", email: "Email nhập không đúng định dạng"},
            'title': {required: "Vui lòng nhập Tiêu đề"},
            'content': {required: "Vui lòng nhập nội dung"}
        },
        submitHandler: function (form) {
            form.submit();
        }
    });





});


       