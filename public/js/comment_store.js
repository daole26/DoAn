window.addEventListener('DOMContentLoaded',function(){
    var form = document.getElementById('form_comment')
    var lcom = document.getElementsByClassName('lcom')[0]
    var xhr = new XMLHttpRequest();
    var load = 0
    xhr.addEventListener('readystatechange',function(){
        if(this.readyState==4 && this.status==200){
            load = 0
            var data = JSON.parse(this.responseText)
            document.getElementById('cmt-content').value=''
            var lcom_item = document.createElement('div')
            lcom_item.classList.add('lcom-item')
            var innerHTML = '<img src="https://dulichdanangxanh.com/templates/images/user.png">'
            innerHTML +=  '<div class="row">'
            innerHTML += '<div class="ten col-lg-6 col-md-6 col-sm-6"><b class="fullname">'+data.name+'</b> - <span class="data">Ngày gửi: '+data.date+'</span></div>'
            innerHTML += '<div class="content">'+data.content+'</div>'
            innerHTML += '</div></div>'
            lcom_item.innerHTML = innerHTML
            lcom.insertBefore(lcom_item,lcom.childNodes[1])
        }
    })
    form.addEventListener('submit',function(e){
        e.preventDefault()
        if(load==0){
            load = 1
            var id = document.getElementById('cmt-tour-id').value
            var id_user = document.getElementById('cmt-name').dataset.id
            var content = document.getElementById('cmt-content').value
            
            xhr.open('POST','../api/comment/store')
            xhr.setRequestHeader('content-type','application/x-www-form-urlencoded')
            xhr.send('id='+id+'&id_user='+id_user+'&content='+content)
        }
    })
})