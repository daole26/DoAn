window.addEventListener('load',function(){
    var xhr = new XMLHttpRequest()
    var file = document.getElementById('fl-image')
    var ten = document.getElementById('txt-ten')
    var url = document.getElementById('txt-url')
    var sdt = document.getElementById('txt-phone')
    var btn_add = document.getElementById('btn-them')
    var btn_add_href = btn_add.href
    var btn_add_inner = btn_add.innerHTML
    var btn_del = document.getElementsByClassName('btn-del')
    var btn_update = document.getElementsByClassName('btn-update-trigger')
    var display = document.getElementById('image');
    var tbody = document.getElementById('table-hotro').children[1]
    var load = 0
    var reset = function(){
        ten.value=''
        url.value=''
        sdt.value=''
        file.value=''
        if(display.children.length>=2){
            display.children[1].remove();
        }
        btn_add.href = btn_add_href
        btn_add.innerHTML = btn_add_inner
        btn_add.classList.remove(['btn-update'])
    }
    var destroy = function(e,element){
        e.preventDefault()
        var cfm = confirm('Bạn có chắc là muốn xóa?')
        if(cfm){
            xhr.open('GET',element.href)
            xhr.send()
        }
    }
    var update = function(e,element){
        e.preventDefault()
        if(element.classList.contains('clicked')){
            reset()
            element.classList.remove('clicked')
        }else{
            for(var i=0;i<btn_update.length;i++){
                btn_update[i].classList.remove(['clicked'])
            }
            btn_add.classList.add('btn-update')
            element.classList.add('clicked')
            btn_add.href = element.href
            btn_add.dataset.id = element.dataset.id
            btn_add.innerHTML=''
            btn_add.innerHTML = '<i class="fa fa-pencil"></i>'
            var td = element.parentElement.parentElement.children
            var img = td[1].children[0].cloneNode()
            if(display.children.length>=2){
                display.children[1].remove();
            }
            display.appendChild(img)
            ten.value=td[2].innerHTML
            url.value=td[3].innerHTML
            sdt.value=td[4].innerHTML
        }
    }
    xhr.addEventListener('readystatechange',function(){
        if(this.readyState==4 && this.status==200){
            load = 0
            var stt = tbody.children.length+1;
            var data = JSON.parse(this.responseText)
            if(data.page=='update' && data.status=='ok'){
                var td = document.getElementById('row'+data.id).children;
                td[1].innerHTML = '<img src="../images/hotro/'+data.hinh_anh+'" width="100" alt="'+data.ten+'" />'
                td[2].innerHTML = data.ten
                td[3].innerHTML = data.url
                td[4].innerHTML = data.sdt
                reset()
            }
            if(data.page=='store' && data.status=='ok'){
                var tr = document.createElement('tr')
                var td = document.createElement('td')
                var btn_edit = document.createElement('a');
                btn_edit.classList.add('btn', 'btn-primary', 'btn-flat','btn-update-trigger');
                btn_edit.href='../admincp/hotrotructuyen/update';
                btn_edit.innerHTML = '<span class="fa fa-pencil"></span>';
                var btn_del = document.createElement('a');
                btn_del.classList.add('btn', 'btn-danger', 'btn-flat');
                btn_del.href='../admincp/hotrotructuyen/destroy/'+data.id;
                btn_del.innerHTML = '<i class="fa fa-trash"></i>';
                btn_del.addEventListener('click',function(e){
                    destroy(e,this)
                })
                td.appendChild(btn_edit)
                td.innerHTML+='\n'
                td.appendChild(btn_del)
                tr.classList.add('gradeX')
                tr.id='row'+data.id
                tr.innerHTML='<td>'+stt+'</td>'
                tr.innerHTML+='<td> <img src="../images/hotro/'+data.hinh_anh+'" width="100" alt="'+data.ten+'"> </td>'
                tr.innerHTML+='<td>'+data.ten+'</td>'
                tr.innerHTML+='<td>'+data.url+'</td>'
                tr.innerHTML+='<td>'+data.sdt+'</td>'
                tr.appendChild(td);
                tbody.appendChild(tr)
                reset()
            }
            if(data.page=='delete' && data.status=='ok'){
                document.getElementById('row'+data.id).remove()
                reset()
            }
        }
    })
    btn_add.addEventListener('click',function(e){
        e.preventDefault()
            if(load==0 && ten.value!='' && url.value!='' &&sdt.value!=''){
                if(!this.classList.contains('btn-update')&& !file.files.length){
                    return false;
                }
                load = 1
                var formData = new FormData()
                formData.append('ten',ten.value)
                formData.append('url',url.value)
                formData.append('sdt',sdt.value)
                if(this.classList.contains('btn-update')){
                    formData.append('id',this.dataset.id)
                }
                if(file.files.length){
                    formData.append('hinh_anh',file.files[0])
                }
                xhr.open('POST',btn_add.href)
                xhr.setRequestHeader('X-CSRF-TOKEN',btn_add.dataset.token)
                xhr.send(formData)
            }
    })
    file.addEventListener('change',function(e){
        var image_url = URL.createObjectURL(e.target.files[0]);
        var img = document.createElement('img');

        img.src = image_url;
        img.width=100
        if(display.children.length>=2){
            display.children[1].remove();
        }
        display.appendChild(img)
    })

    for(var i=0;i<btn_del.length;i++){
        var btn = btn_del[i]
        btn.addEventListener('click',function(e){
            destroy(e,this)
        })
    };
    tbody.addEventListener('click',function(e){
        if(e.target.classList.contains('btn-update-trigger')){
            update(e,e.target)
            return false
        }
    })
})