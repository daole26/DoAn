@extends('layouts.master')
@section('style')
    <link rel="stylesheet" href="{{asset('css/khuyenmai.css')}}">
@endsection
@section('Content')
<div class="">
    <div class="news">
        <h2 id="news-title" class="title wow slideInUp">Khuyến Mãi</h2>
            <div class="news_grid">
                @php($i=0)
                <ul class="khuyenmai-list">
                    @foreach ($khuyenmai as $khuyenmai)
                    <li><strong>{{++$i}}. </strong>{{$khuyenmai->khuyen_mai}}</li>
                    @endforeach 
                </ul>          
            </div>
       
        <div class="clearfix"></div>  
        <h2 class="preloader" style="text-align: center; display: none">
            <img src="{{url('templates/images/ajax-load.gif')}}"/>
        </h2> 
        <div class="load_more">
            <button id="btn-loadmore" class="btn_load_more">XEM THÊM</button>
        </div> 
    </div>
</div> 
@endsection
@section('script')
    <script src="{{asset('js/tintuc_loadmore.js')}}"></script>
@endsection