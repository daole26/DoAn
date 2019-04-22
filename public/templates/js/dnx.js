$(document).ready(function() {
    // Iterate over each select element
    $('select12').each(function() {

        // Cache the number of options
        var $this = $(this),
            numberOfOptions = $(this).children('option').length;

        // Hides the select element
        $this.addClass('s-hidden');

        // Wrap the select element in a div
        $this.wrap('<div class="select"></div>');

        // Insert a styled div to sit over the top of the hidden select element
        $this.after('<div class="styledSelect"></div>');

        // Cache the styled div
        var $styledSelect = $this.next('div.styledSelect');

        // Show the first select option in the styled div
        $styledSelect.text($this.children('option').eq(0).text());

        // Insert an unordered list after the styled div and also cache the list
        var $list = $('<ul />', {
            'class': 'options'
        }).insertAfter($styledSelect);

        // Insert a list item into the unordered list for each select option
        for (var i = 0; i < numberOfOptions; i++) {
            $('<li />', {
                text: $this.children('option').eq(i).text(),
                rel: $this.children('option').eq(i).val()
            }).appendTo($list);
        }

        // Cache the list items
        var $listItems = $list.children('li');

        // Show the unordered list when the styled div is clicked (also hides it if the div is clicked again)
        $styledSelect.click(function(e) {
            e.stopPropagation();
            $('div.styledSelect.active').each(function() {
                $(this).removeClass('active').next('ul.options').hide();
            });
            $(this).toggleClass('active').next('ul.options').toggle();
        });

        // Hides the unordered list when a list item is clicked and updates the styled div to show the selected list item
        // Updates the select element to have the value of the equivalent option
        $listItems.click(function(e) {
            e.stopPropagation();
            $styledSelect.text($(this).text()).removeClass('active');
            $this.val($(this).attr('rel'));
            $list.hide();
            /* alert($this.val()); Uncomment this for demonstration! */
        });

        // Hides the unordered list when clicking outside of it
        $(document).click(function() {
            $styledSelect.removeClass('active');
            $list.hide();
        });

    });
    
    $(".arrow").click(function(){
        data_id = $(this).attr('data_id');
        if($("#submenu_"+data_id).css('display') == 'none'){
            $(this).addClass('expand');
            $("#submenu_"+data_id).show();
        }else{
            $(this).removeClass('expand');
            $("#submenu_"+data_id).hide();
        }
    })
    
    $(".listtab a").click(function(){
        var data_id = $(this).attr('data_id');
        $(".listtab a").removeClass('active');
        $(this).addClass('active');
        $(".tabcon").hide();
        $("#"+data_id).show();
    })
    
    // Rating
    $(".score-container-star-rating").hover(function(){
        $(".small-star").hide();
        $(".show_rating").show();  
    },function(){
        $(".small-star").show();
        $(".show_rating").hide();
    })
    $("#star").change(function(){
        value = $(this).val();
        if(value == 5){
            label = "Dịch vụ rất tốt";
        }else if(value == 4){
            label = "Dịch vụ tốt";
        }else if(value == 3){
            label ="Dịch vụ bình thường";
        }else if(value == 2){
            label = "Dịch vụ không tốt";
        }else{
            label = "Dịch vụ rất kém";
        }
        $("#txt_star").html(label);
    }) 
}); 

function rating(num, setnum) {
    var s = num.id.replace(setnum + "_", '');
    for (i = 1; i <= 5; i++ ){        
        if (i <= s) {
            document.getElementById(setnum + "_" + i).className = "on";
        } else {
            document.getElementById(setnum + "_" + i).className = "";
        }
    }
}

function rolloff(me, setnum) {
    var current = document.getElementById(setnum + "_rating").value;
    for (i = 1; i <= 5; i++) {
        if (i <= current) {
            document.getElementById(setnum + "_" + i).className = "on";
        } else {
            document.getElementById(setnum + "_" + i).className = "";
        }
    }
}


function rateIt(me, setnum){
    var s = me.id.replace(setnum + "_", '');
    $.post(base_url+'api/rating',{'total':s,'tour_id':tour_id}, function(data) {
        if(data.error == 0){
            $(".current-rating").css('width',data.per+'%');
            $(".reviews-num").text(data.total_rate);
            $(".score").text(data.rate);
        }
        alert(data.msg);
    },'json'); 
    rolloff(me, setnum);
}
function AddComment(){
    // Add Comment
    $("#form_comment").validate({
        errorElement: "div",
        ignore: "",
        rules: {
            'vdata[fullname]': {required :true},
            'vdata[email]': {required :true,email:true},
            'vdata[content]': {required :true},
            'captcha': {required :true}
        },
        messages: {
            'vdata[fullname]': {required :"Vui lĂ²ng nháº­p há» tĂªn"},
            'vdata[email]': {required :"Vui lĂ²ng nháº­p Email",email:"Email nháº­p khĂ´ng Ä‘Ăºng Ä‘á»‹nh dáº¡ng"},
            'vdata[content]': {required :"Vui lĂ²ng nháº­p ná»™i dung"},
            'captcha': {required :"Vui lĂ²ng nháº­p mĂ£ báº£o vá»‡"}
        },
        submitHandler: function(form) {
            var captcha = $("input[name='captcha']").val();
            $.post( base_url+"api/check_captcha_ajax",{'code':captcha}, function( data ) {
                if(data.error == 1){
                    alert("MĂ£ báº£o vá»‡ báº¡n nháº­p khĂ´ng Ä‘Ăºng");
                    return false;
                }else{
                    dataString = $("#form_comment").serialize();
                    $.ajax({
                        type: "POST",
                        url: base_url+"api/send_comment",
                        data: dataString,
                        dataType: "json",
                        success: function(response) {
                            if(response.error == 0){
                                clear_form_elements("#form_comment");
                                reload_captcha("captcha");
                            }
                            alert(response.msg);
                        }
                    });
                }
            },'json');
            return false;
        }
    });
}

function LoadComment(){
    var pages_ = $("input#page_").val();
    var idtour = $("#id_tour").val();
    $.post( base_url+"api/load_more_comment/"+pages_,{'idtour':idtour}, function( data ) {
          $(".listComment ul").append(data.html);
           $("input#page_").val(data.page_);
           if(data.readmore == 1){
               $('.xemthem a').hide();
           }
    },'json')
}


function reload_captcha(data_id){

    $.get(base_url+"api/reload_captcha",function(data){
            $("#"+data_id).attr('src',data.src);
    },'json'); 
}

function clear_form_elements(ele) {
    $(ele).find(':input').each(function() {
        switch(this.type) {
            case 'password':
            case 'select-multiple':
            case 'select-one':
            case 'text':
            case 'textarea':
                $(this).val('');
                break;
            case 'checkbox':
            case 'radio':
                this.checked = false;
        }
    });
}