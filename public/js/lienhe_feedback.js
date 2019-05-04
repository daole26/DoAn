window.addEventListener('DOMContentLoaded',function(){
    var form = document.getElementById('form_contact')
    var btn = document.getElementById('btn-send')
    var error = document.getElementById('error')
    var xhr = new XMLHttpRequest()
    var ho_ten = document.getElementById('fullname')
    var email = document.getElementById('email')
    var tieu_de = document.getElementById('title')
    var noi_dung = document.getElementById('content')
    xhr.addEventListener('readystatechange',function(){
        if(this.readyState==4 && this.status==200){
            data = JSON.parse(this.responseText)
            if(data.status=='success'){
                alert('Lưu thành công')
                ho_ten.value=''
                email.value=''
                tieu_de.value=''
                noi_dung.value=''
            }
        }
    })
    btn.addEventListener('click',function(e){
        e.preventDefault()
        e.stopPropagation()
        error.innerHTML=''
        var error_inner = ''
        var check = true
        if(!ho_ten.checkValidity()){
            error_inner += '<li>Họ tên không được để trống</li>'
            check=false
        }
        if(!email.checkValidity()){
            error_inner += '<li>Hãy nhập đúng định dạng email</li>'
            check=false
        }
        if(!tieu_de.checkValidity()){
            error_inner += '<li>Tiêu đề không được để trống</li>'
            check=false
        }
        if(!noi_dung.checkValidity()){
            error_inner += '<li>Nội dung không được để trống</li>'
            check=false
        }
        error.innerHTML = error_inner;
        if(check){
            xhr.open('POST','lienhe/store');
            xhr.setRequestHeader('content-type','application/x-www-form-urlencoded')
            xhr.setRequestHeader('x-csrf-token',form.dataset.token)
            xhr.send('ho_ten='+ho_ten.value+'&email='+email.value+'&tieu_de='+tieu_de.value+'&noi_dung='+noi_dung.value)
        }
    })
})