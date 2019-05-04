window.addEventListener('DOMContentLoaded',function(){
    var xhr = new XMLHttpRequest()
    var news_grid = document.getElementsByClassName('news_grid')[0]
    var preloader = document.getElementsByClassName('preloader')[0]
    var tieude = document.getElementById('news-title').innerHTML
    var btn = document.getElementById('btn-loadmore')
    var load = 0
    var start = 4
    var skip = 4
    var limit = 4
    xhr.addEventListener('readystatechange',function(){
        if(this.readyState==4 && this.status==200){
            var data = JSON.parse(this.responseText)
            console.log(data);
            if(data.length){
                var i = 0
                data.forEach(element => {
                    var news_items = document.createElement('div');
                    news_items.classList.add('news_items','col-lg-3','col-sm-4','col-xs-6','col-xs1-12','n_padding_l_r');
                    var img_n = document.createElement('div');
                    img_n.classList.add('img_n');
                    img_n.innerHTML = '<a title="'+element.tieu_de+'" href="tin-tuc/'+element.slug+'"><img width="300" alt="'+element.slug+'" src="'+element.url+'"/></a>'
                    var content_n = document.createElement('div');
                    content_n.classList.add('content_n');
                    content_n.innerHTML='<span class="title_n"><a class="n_title" title="'+element.tieu_de+'" href="'+element.slug+'">'+element.tieu_de+'</a></span><p class="des_n">'+element.noi_dung+'</p>'
                    if(i%2==0){
                        news_items.appendChild(img_n);
                        news_items.appendChild(content_n);
                    }else{
                        news_items.appendChild(content_n);
                        news_items.appendChild(img_n);
                    }
                    i++
                    news_grid.appendChild(news_items);
                });
                load=0
            }else{
                btn.removeEventListener('click',function(e){
                    loadmore(e)
                })
                btn.remove();
            }
            preloader.style.display = 'none'
        }
    })
    var loadmore = function(e){
        e.preventDefault()
        preloader.style.display = 'block'
        if(load==0){
            load = 1
            if(tieude=='Tin tức'){
                xhr.open('GET','tintuc/loadmore/tintuc/'+start+'/'+limit)
            }else{
                xhr.open('GET','tintuc/loadmore/amthuc/'+start+'/'+limit)
            }
            start += skip
            xhr.send()
        }
    }
    btn.addEventListener('click',function(e){
        loadmore(e)
    })

})