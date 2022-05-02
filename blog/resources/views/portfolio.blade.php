@extends('layout.app')
@section('title','Portfolio')
@section('content')


<div class="container">
<div class="row">
                            <div class="col-md-3 p-1">
                    <div class="card pb-3">
                        <div class="text-center">
                            <img class="card-img" src="{{asset('images/class1.svg')}}" alt="Card image cap">
                            <a class="opener" data-url=""><img id="videoPlay" style="width:60px;"class="play-small mt-3" src="{{asset('images/vdo.png')}}"></a>
                            <p class="des-text mt-2"><b>Laravel Introduction</b></p>
                        </div>
                    </div>
                </div>
                            <div class="col-md-3 p-1">
                    <div class="card pb-3">
                        <div class="text-center">
                            <img class="card-img" src="{{asset('images/class2.svg')}}" alt="Card image cap">
                            <a class="opener" data-url="http://codesilicon.com/paidvideos/Laravel/Video/2.mp4"><img id="videoPlay" style="width:60px;"class="play-small mt-3" src="{{asset('images/vdo.png')}}"></a>
                            <p class="des-text mt-2"><b>Tools For Laravel</b></p>
                        </div>
                    </div>
                </div>
                            <div class="col-md-3 p-1">
                    <div class="card pb-3">
                        <div class="text-center">
                            <img class="card-img" src="{{asset('images/class3.svg')}}" alt="Card image cap">
                            <a class="opener" data-url="http://codesilicon.com/paidvideos/Laravel/Video/3.mp4"><img id="videoPlay" style="width:60px;"class="play-small mt-3" src="{{asset('images/vdo.png')}}"></a>
                            <p class="des-text mt-2"><b>Create New Project &amp; Run</b></p>
                        </div>
                    </div>
                </div>
                            <div class="col-md-3 p-1">
                    <div class="card pb-3">
                        <div class="text-center">
                            <img class="card-img" src="{{asset('images/class4.svg')}}" alt="Card image cap">
                            <a class="opener" data-url="http://codesilicon.com/paidvideos/Laravel/Video/4.mp4"><img id="videoPlay" style="width:60px;"class="play-small mt-3" src="{{asset('images/vdo.png')}}"></a>
                            <p class="des-text mt-2"><b>Laravel Project Structure</b></p>
                        </div>
                    </div>
                </div>
                            <div class="col-md-3 p-1">
                    <div class="card pb-3">
                        <div class="text-center">
                            <img class="card-img" src="{{asset('images/class5.svg')}}" alt="Card image cap">
                            <a class="opener" data-url="http://codesilicon.com/paidvideos/Laravel/Video/5.mp4"><img id="videoPlay" style="width:60px;"class="play-small mt-3" src="{{asset('images/vdo.png')}}"></a>
                            <p class="des-text mt-2"><b>Laravel MVC Concept</b></p>
                        </div>
                    </div>
                </div>
                    </div>
</div>


@endsection