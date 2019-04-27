function validate() {
    $("#book_tour").validate({
        errorElement: "span",
        ignore: "",
        rules: {
            'fullname': {required :true},
            'address': {required :true},
            'phone': {required :true},
            'email': {required :true,email:true},
            'ngay_dat': {required :true}  ,
            'nguoi_lon': {required :true,min:1},
            'captcha': {required: true}
        },
        messages: {
            'fullname': {required : "Vui lòng nhập Họ tên"},
            'address': {required : "Vui lòng nhập Địa chỉ"},
            'phone': {required : "Vui lòng nhập Điện thoại"},
            'email': {required : "Vui lòng nhập Email", email: "Email nhập không đúng định dạng"},
            'ngay_dat': {required :"Chọn ngày khởi hành"} ,
            'nguoi_lon': {required :"Chọn số người lớn",min:"Người lớn tối thiểu phải = 1"}  ,
            'captcha': {required: "Vui lòng nhập mã bảo vệ"}
        },
    });
}
function booking() {
    $('#book_tour input[type="button"]').click(function(e) {
        e.preventDefault();
        var bookFormElement = $('#book_tour');
        var data = bookFormElement.serialize();
        if(!$('#book_tour').valid()) {
            return false;
        }
        $.ajax({
            url: window.location.origin + '/api/tour/booking',
            dataType: 'json',
            type: 'POST',
            data: data,
            beforeSend: function() {
                $('.preloader').show();
                $('.response').hide();
            },
            success: function(res) {
                $('.preloader').hide();
                $('.response').show().html('Gửi yêu cầu thành công!').css('color', 'green');
            },
            error: function(err) {
                $('.preloader').hide();
                $('.response').show().html('Xảy ra lỗi, thử lại sau!').css('color', 'red');
            }
        });
    });
}
function datetimepicker() {
    $('#datepicker').datetimepicker({
        weekStart: 1,
        todayBtn:  1,
		autoclose: 1,
		startView: 2,
		minView: 2,
        forceParse: 0,
        startDate: $('input[name="ngay_dat"]').val()
    });
}

function calTotalPrice() {
    $('select[name="nguoi_lon"], select[name="tre_em"]').change(function() {
        var tourPrice = $('input[name="tour_price"]').val();
        var childs = $('select[name="tre_em"]').val();
        var adults = $('select[name="nguoi_lon"]').val();
        var sale = 1; //default value
        if (!adults) return false;
        var totalPrice = (parseInt(adults) +  parseInt(childs)) * parseFloat(tourPrice) * sale;
        $('#total_payment').html(totalPrice.toFixed(2) + ' vnd');
    });
}


$(document).ready(function() {
    datetimepicker();
    validate();
    calTotalPrice();
    booking();
});
