<div class="headerTop">
        <div class="row">
            <div class="container">
                <div class="col-lg-6 col-md-6 col-sm-6" style="position: relative">
                    <div style="display: inline-block">
                        <span class="top_support" id="bar_support"><i class="fa fa-support">&nbsp;&nbsp;</i>Hỗ trợ trực tuyến <i class="fa fa-chevron-down"></i></span>
                        <div id="support">
                            <div class="content_sup" id="content_sup">
                                @php
                                    $_hotro = App\ho_tro_truc_tuyen::all();
                                @endphp
                                @foreach($_hotro as $_hotro)
                                <div class="row_sup">
                                    <div class="avt">
                                        <img width="100%" src="{{ asset('images/hotro/'.$_hotro->hinh_anh) }}"/>
                                    </div>
                                    <div class="content">
                                        <p class="name">{{$_hotro->ten}}</p>
                                        <span>
                                            <a href="{{$_hotro->url}}" ><span class="fa fa-skype"> Skype</span></a>
                                        </span>
                                    </div>
                                    <div class="clearfix"></div>
                                </div>
                                @endforeach
                            </div>

                        </div>

                        <style type="text/css">
                            #support{position: absolute; left: 0px; top: 25px ; z-index: 99999999; width: 250px;}
                            #support .bar{background-color: #5a2d7e; font-size: 16px;  font-weight: bold; box-shadow: 0px 10px 10px #999; color: #fff; cursor: pointer}
                            #support .bar .title{float: left; padding: 7px 12px}
                            #support .bar .title>span{font-size: 13px; font-weight: normal}
                            #support .bar .bar_icon {float: right; background: #EC7021;}

                            .content_sup{background: #f1f1f1; padding: 10px;box-shadow: 0px 10px 10px #999; display: none; position: absolute; width: 100%}
                            .content_sup .row_sup{width: 100%; margin-bottom: 5px}
                            .content_sup .row_sup .avt{float: left; width: 21%; padding-right: 8px; }
                            .content_sup .row_sup .avt img{border-radius: 50%; width: 40px; height: 40px}
                            .content_sup .row_sup .content{float: left; width: 75%}
                            .content_sup .row_sup .content p.name{font-weight: bold; margin-bottom: -2px;   color: #EC6B21; }
                            .content_sup .row_sup .content span{padding-right: 5px;}
                        </style>

                        <script>
                            $(document).ready(function () {
        //box-support -------------------------------
        var sup = $('#content_sup');

        $('#bar_support').click(function (event) {
            event.preventDefault();
            // if the menu is visible slide it up
            if (sup.is(":visible"))
            {
                sup.slideUp(400);
                //$(this).removeClass("open");
            }
            // otherwise, slide the menu down
            else
            {
                sup.slideDown(400);
                //$(this).addClass("open");
            }
        });
    });
</script>                
</div>
</div>
