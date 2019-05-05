/*$dattour = new dat_tour;

$dattour->ma_dat_tour = $request->ma_tour.'-'.date('dmYhis');
$dattour->id_users = \Auth::user()->id;
$dattour->ngay_dat = $cur_date;
$dattour->ngay_khoi_hanh = $ngay_khoi_hanh;
$dattour->email = $request->email;
$dattour->diachi = $request->address;
$dattour->so_dien_thoai = $request->phone;
$dattour->nguoi_lon = $request->adults;
$dattour->tre_em = $request->children;
$dattour->em_be = $request->baby;
$dattour->ghi_chu = $request->notes;
$dattour->save();

$chitietdattour = new chi_tiet_dat_tour;
$chitietdattour->id_tour = $request->id_tour;
$chitietdattour->id_dat_tour = $dattour->id;
$chitietdattour->gia_tien = $request->gia_tour;*/

window.addEventListener('DOMContentLoaded',function(){
    var load = 0;
    var form = document.getElementById('book_tour')
    var ma_tour = document.getElementById('hid-ma_tour')
    var id_tour = document.getElementById('hid-id_tour')
    var month = document.getElementById('thang')
    var day = document.getElementById('ngay')
    var year = document.getElementById('nam')
    var phone = document.getElementById('phone')
    var email = document.getElementById('email')
    var address = document.getElementById('address')
    var adults = document.getElementById('nl')
    var children = document.getElementById('trnho')
    var baby = document.getElementById('baby')
    var gia_tour = document.getElementById('hid-gia_tour')
    var subm = document.getElementById('btn-booking')
    var lst_error = document.getElementById('lst-error')
    var subm_inner = subm.innerHTML;
    var cLog = ()=>{
        console.log(form)
        console.log(ma_tour)
        console.log(id_tour)
        console.log(month)
        console.log(day)
        console.log(year)
        console.log(phone)
        console.log(email)
        console.log(address)
        console.log(adults)
        console.log(children)
        console.log(baby)
        console.log(gia_tour)
        console.log(subm);
    }
    var getParams = ()=>{
        var param = 'ma_tour='+ma_tour.value
        param+= '&id_tour='+id_tour.value
        param+= '&month='+month.value
        param+= '&day='+day.value
        param+= '&year='+year.value
        param+= '&phone='+phone.value
        param+= '&email='+email.value
        param+= '&address='+address.value
        param+= '&adults='+adults.value
        param+= '&children='+children.value
        param += '&baby='+baby.value
        param += '&gia_tour='+gia_tour.value
        return param;
    }

    var xhr = new XMLHttpRequest();
    xhr.addEventListener('readystatechange',function(){
        if(this.readyState==4 && this.status==200){
            data = JSON.parse(this.responseText);
            load=0
            if(data.status=='success'){
                alert('Đặt tour thành công, hãy kiểm tra email của bạn')
                form.reset();
                subm.innerHTML = subm_inner
            }else{
                alert('Đặt tour thất bại\n'+data.error)
            }
        }
    })
    xhr.addEventListener('progress',function(e){
        subm.innerHTML = 'Đang xử lý...'+(e.loaded/e.total * 100)+'%'
    })
    subm.addEventListener('click',(e)=>{
        e.preventDefault();
        if(load==0){
            var error_inner = ''
            var check = true
            if(!phone.checkValidity()){
                error_inner += '<li>Số điện thoại không được để trống</li>'
                check=false
            }
            if(!email.checkValidity()){
                error_inner += '<li>Hãy nhập đúng định dạng email</li>'
                check=false
            }
            if(!address.checkValidity()){
                error_inner += '<li>Địa chỉ không được để trống</li>'
                check=false
            }
            lst_error.innerHTML=error_inner
            if(check){
                load = 1
                subm.innerHTML="Đang xử lý"
                xhr.open('POST',form.action)
                xhr.setRequestHeader('content-type','application/x-www-form-urlencoded')
                xhr.setRequestHeader('x-csrf-token',form.dataset.token)
                xhr.send(getParams())
            }
        }
    })
})