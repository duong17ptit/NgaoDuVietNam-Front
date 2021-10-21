@extends('layout')
@section('content')
<link rel="stylesheet" href="{{ asset('css/about.css') }}">
    <div class="main"> 
        <div class="container">
            <div class="intro">
                <div class="row">
                    <div class="col-6">
                        <div class="image-intro">
                            <img class="image-intro-1" src="{{ URL::asset('/image/Rectangle 18.png') }}" alt="">
                            <img class="image-intro-2" src="{{ URL::asset('/image/Rectangle 19.png') }}" alt="">
                        </div>
                    </div>
                    <div class="col-6">

                        <div class="title-intro">
                            With <b>NgaoduVietnam, <br></b> immerses you in majestic space and unique cultural features
                        </div>
                        <div class="detail-intro">
                            <div class="detail-intro-image"> <img src="{{ URL::asset('/image/shape.png') }}" alt=""></div>
                            <div>
                                <p class="">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Purus
                                    viverra nuQlla eget sed
                                    odio. Vulputate risus faucibus sem non, feugiat nec consequat, montes. Elementum
                                    scelerisque
                                    phasellus donec lectus ullamcorper faucibus. Malesuada et adipiscing molestie
                                    egestas
                                    leo
                                    ut.</p>
                                <br>
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Purus viverra nuQlla eget sed
                                odio.
                                Vulputate risus faucibus sem non, feugiat nec consequat, montes.
                            </div>
                        </div>

                    </div>
                </div>
                
            </div>
            <div class="intro">
                <div class="row">
                    
                    <div class="col-6">

                        <div class="title-intro">
                            With <b>NgaoduVietnam, <br></b> immerses you in majestic space and unique cultural features
                        </div>
                        <div class="detail-intro">
                            {{-- <div class="detail-intro-image"> </div> --}}
                            <div>
                                <p class="">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Purus
                                    viverra nuQlla eget sed
                                    odio. Vulputate risus faucibus sem non, feugiat nec consequat, montes. Elementum
                                    scelerisque
                                    phasellus donec lectus ullamcorper faucibus. Malesuada et adipiscing molestie
                                    egestas
                                    leo
                                    ut.</p>
                                <br>
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Purus viverra nuQlla eget sed
                                odio.
                                Vulputate risus faucibus sem non, feugiat nec consequat, montes.
                            </div>
                        </div>

                    </div>
                    <div class="col-6">
                        <div class="">
                            <img class="" style="width: 100%;height: auto;" src="{{ URL::asset('/image/Rectangle-19.png') }}" alt="">
                    
                        </div>
                    </div>
                </div>
            </div>
            <div class="image-big">

                <img class="" style="width: 100%;height: auto;" src="{{ URL::asset('/image/Rectangle-18.png') }}" alt="">
            </div>
            <div class="attractive-tour">
                <div class="head-content-main">
                    <div class="title-head-content-main">
                        Experience the traditional cultural beauties of Vietnam
                    </div>
                   
                </div>
                <div class="attractive-tour-main">
                  <div class="row">
                        <div class="col-6">
                            <div class="experience-left">
                                <div class="text">
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Purus viverra nuQlla eget sed odio. Vulputate risus faucibus sem non, feugiat nec consequat, montes. Elementum scelerisque phasellus donec lectus ullamcorper faucibus. Malesuada et adipiscing molestie egestas leo ut.
                                </div>
                                <br><br><br><br>
                                <div class="img-experience">
                                    <img class="" style="width: 445px;height: auto;"  src="{{ URL::asset('/image/Rectangle 24.png') }}" alt="">
                                </div>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="experience-right">
                                <div class="text">
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Purus viverra nuQlla eget sed odio. Vulputate risus faucibus sem non, feugiat nec consequat, montes. Elementum scelerisque phasellus donec lectus ullamcorper faucibus.
                                </div>
                                <br><br><br><br><br><br><br>
                                <div class="text">
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Purus viverra nuQlla eget sed odio. Vulputate risus faucibus sem non, feugiat nec consequat, montes. Elementum scelerisque phasellus donec lectus ullamcorper faucibus. Malesuada et adipiscing molestie egestas leo ut.
                                </div>
                                <br><br><br><br>
                                <div class="img-experience">
                                    <img class="" style="width: 540px;height: auto;" src="{{ URL::asset('/image/Rectangle 25.png') }}" alt="">
                                </div>
                            </div>
                        </div>
                  </div>
                </div>

            </div>
        </div>

    </div>
@endsection
