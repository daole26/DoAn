window.addEventListener('DOMContentLoaded',function(){
    var xhr = new XMLHttpRequest()
    var file = document.getElementById('fl-image')
    var ten = document.getElementById('txt-ten')
    var url = document.getElementById('txt-url')
    var sdt = document.getElementById('txt-phone')
    var btn_add = document.getElementById('btn-them')
    var btn_del = document.getElementsByClassName('btn-del')
    var display = document.getElementById('image');
    var tbody = document.getElementById('table-hotro').children[1]
    var load = 0
    var destroy = function(e,element){
        e.preventDefault();
        xhr.open('GET',element.href);
        xhr.send();
    }
    xhr.addEventListener('readystatechange',function(){
        if(this.readyState==4 && this.status==200){
            load = 0
            var stt = tbody.children.length+1;
            var data = JSON.parse(this.responseText)
            if(data.page=='store' && data.status=='ok'){
                var tr = document.createElement('tr')
                var td = document.createElement('td')
                var a = document.createElement('a');
                a.classList.add('btn', 'btn-danger', 'btn-flat');
                a.href='../admincp/hotrotructuyen/destroy/'+data.id;
                a.innerHTML = '<i class="fa fa-trash"></i>';
                a.addEventListener('click',function(e){
                    destroy(e,this)
                })
                td.appendChild(a)
                tr.classList.add('gradeX')
                tr.id='row'+data.id
                tr.innerHTML='<td>'+stt+'</td>'
                tr.innerHTML+='<td> <img src="../images/hotro/'+data.hinh_anh+'" width="100" alt="'+data.ten+'"> </td>'
                tr.innerHTML+='<td>'+data.ten+'</td>'
                tr.innerHTML+='<td>'+data.url+'</td>'
                tr.innerHTML+='<td>'+data.sdt+'</td>'
                tr.appendChild(td);
                tbody.appendChild(tr)
                ten.value=''
                url.value=''
                sdt.value=''
                file.value=''
                if(display.children.length>=2){
                    display.children[1].remove();
                }
            }
            if(data.page=='delete' && data.status=='ok'){
                document.getElementById('row'+data.id).remove()
            }
        }
    })
    btn_add.addEventListener('click',function(e){
        e.preventDefault()
        if(load==0 && file.files.length && ten.value!='' && url.value!='' &&sdt.value!=''){
            load = 1
            
            var formData = new FormData()
            formData.append('ten',ten.value)
            formData.append('url',url.value)
            formData.append('sdt',sdt.value)
            formData.append('hinh_anh',file.files[0])
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
})