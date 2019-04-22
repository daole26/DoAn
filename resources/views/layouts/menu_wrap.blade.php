<div class="menu_wrap">
    <div class="main_menu_overlay main_menu_close"></div>
    <div id="right_menu">
        <ul class="show_content">
            <li>
                <i class="fa fa-2x fa-close main_menu_close"></i>
                <span>MENU</span>
            </li>

            <li class="active"><a  href="{{url('/')}}">Trang chủ</a></li>
            <li ><a  href="{{url('tour')}}">Tour</a></li>
            <li >
                <a  href="{{url('news')}}">Tin tức</a>
                <ul class="" style="display: none">
                    <li class="top"></li>
                    <li><a href="#">Tin tức khuyến mãi</a></li>
                    <li><a href="#">Tin tức du lịch</a></li>
                    <li><a href="#">Homestay dành cho bạn</a></li>
                </ul>
            </li>
            <li >
                <a  href="{{url('food')}}">Ẩm thực</a>
            </li>
            <li ><a  href="{{url('contact')}}">Liên hệ</a></li>    
        </ul>
    </div>
</div>

<style type="text/css">
    body{position: relative}
    #right_menu{
        position: fixed;
        right: 0px;
        height: 100%;
        width: 0px;
        background: #545454;
        z-index: 99999;
        transition: all 0.3s;
    }

    #menu_main_btn{
        position: absolute; left: -40px;top: 3px; cursor: pointer;
    }


    #right_menu>ul>li:first-child{background: #36a627}
    #right_menu>ul>li{
        padding: 10px 10px 10px 15px;
        border-bottom: #7B7B7B solid 1px;
    }
    #right_menu>ul>li>a{color: #fff}
    #right_menu>ul>li>a.active{color: #F58734}

    .menu_wrap{
        position: fixed;
        z-index: 99999;
        top: 0;
        right: 0;
        bottom: 0;
        left: 0;
        overflow: hidden;
        visibility: hidden;
    }

    #right_menu .main_menu_close{
        cursor: pointer;
        color: #DADADA;
    }

    #right_menu .main_menu_close:hover{
        color: #fff;
        //transition: all linear 0.2s;
    }

    #menu_main_btn{display: none}
    #right_menu>ul>li:first-child>span{color:#FFF ; font-weight: bold; text-align: right}
    #right_menu>ul>li:first-child>i{ margin-right: 10px; color: #fff}


    @media screen and (max-width: 1024px) {
        .show_right_menu{
            width: 220px !important;
            //right: 0 !important;
            box-shadow: rgba(0, 0, 0, 0.5) -3px -1px 2px;
            opacity: 1;
            visibility: visible;
        }
        .show_content{display: block !important}
        .main_menu_overlay{
            background: #7B7B7B;
            display: none;
            position: fixed;
            top: 0;
            right: 0;
            bottom: 0;
            left: 0;
            cursor: pointer;
            opacity: 0;
            -webkit-transition: all 0.4s cubic-bezier(0.215, 0.61, 0.355, 1);
            -moz-transition: all 0.4s cubic-bezier(0.215, 0.61, 0.355, 1);
            -o-transition: all 0.4s cubic-bezier(0.215, 0.61, 0.355, 1);
            transition: all 0.4s cubic-bezier(0.215, 0.61, 0.355, 1);
        }
        .on{display: block; opacity: 0.4}
        .on_menu_wrap {
            visibility: visible;
        }
        .on:hover{opacity: 0.2;}

    }
</style>

<script type="text/javascript">

    $(document).ready(function () {

        $('.main_menu_btn').click(function () {
            $('#right_menu').toggleClass('show_right_menu');
            $('#right_menu>ul').toggleClass('show_content');
            $('.main_menu_overlay').toggleClass('on');
            $('.menu_wrap').toggleClass('on_menu_wrap');
        });

        $('.main_menu_close').click(function () {
            $('#right_menu').toggleClass('show_right_menu');
            $('#right_menu>ul').toggleClass('show_content');
            $('.main_menu_overlay').toggleClass('on');
            $('.menu_wrap').toggleClass('on_menu_wrap');
        });

    });
</script>
