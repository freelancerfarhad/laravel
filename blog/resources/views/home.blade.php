@extends('layout.app')
@section('title','Home')
@section('content')



<div class="container-fluid">
    <div class="row">
        <div class="col-md-12">
            <div class="banner mt-0">
                <div class=" col-md-6">
                    <div class="homecontect">
                    <h1>this is first laravel project</h1>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quod maiores cupiditate voluptatum sit illum non deleniti iusto quidem aperiam, assumenda perferendis, recusandae debitis ipsam quis eligendi repellat at, quaerat modi molestiae aliquam fuga ipsum harum! Sed ipsam labore sunt fuga totam optio, perspiciatis sit numquam incidunt facilis! Neque, nulla totam.</p>

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="container-fluid ">
<div class="row  pt-5">
    
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