window.addEventListener('DOMContentLoaded',function(){
    var xhr = new XMLHttpRequest()
    var btn = document.getElementById('btn-xemthem')
    var lcom = document.getElementsByClassName('lcom')[0]
    var preloader = document.getElementsByClassName('preloader')[0]
    var load = 0
    var id = btn.dataset.id
    var start = 5
    var limit = 5
    xhr.addEventListener('readystatechange',function(){
        if(this.readyState==4 && this.status==200){
            var data = JSON.parse(this.responseText)
            if(data.length){
                data.forEach(element => {
                    var lcom_item = document.createElement('div')
                    lcom_item.classList.add('lcom-item')
                    var innerHTML = '<img src="https://dulichdanangxanh.com/templates/images/user.png">'
                    innerHTML +=  '<div class="row">'
                    innerHTML += '<div class="ten col-lg-6 col-md-6 col-sm-6"><b class="fullname">'+element.name+'</b> - <span class="data">Ngày gửi: '+element.date+'</span></div>'
                    innerHTML += '<div class="content">'+element.content+'</div>'
                    innerHTML += '</div></div>'
                    lcom_item.innerHTML = innerHTML
                    lcom.insertBefore(lcom_item,preloader)
                });
                load=0
            }
            preloader.style.display = 'none'
        }
    })
    btn.addEventListener('click',function(e){
        e.preventDefault()
        if(load==0){
            preloader.style.display = 'block'
            load=1
            xhr.open('GET','../api/comment/load_more/'+id+'/'+start+'/'+limit)
            start += 5
            xhr.send()
        }
    })

})