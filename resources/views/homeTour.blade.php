@extends('layout')
@section('content')
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
            {{-- begin destinations --}}
            <div class="destinations">
                <div class="head-content-main">
                    <div class="title-head-content-main">
                        Discover fascinating destinations
                    </div>
                    <div class="button-content-main">
                        {{-- <a href=""></a> --}}
                        View all
                    </div>
                </div>
                <div class="destinations-main">
                    <div class="destination-owl owl-carousel owl-theme">
                        <div class="item">
                            <img src="{{ URL::asset('/image/Rectangle 20.png') }}" alt="">
                            <div class="">
                                <div class="name-destination">Sapa, Laocai</div>
                                <span>24 experiences</span>
                            </div>
                        </div>
                        <div class="item">
                            <img src="{{ URL::asset('/image/Rectangle 201.png') }}" alt="">
                            <div class="">
                                <div class="name-destination">Hoian, Quangnam</div>
                                <span>12 experiences</span>
                            </div>
                        </div>
                        <div class="item">
                            <img src="{{ URL::asset('/image/Rectangle 202.png') }}" alt="">
                            <div class="">
                                <div class="name-destination">Ba Na Hill, Danang</div>
                                <span>28 experiences</span>
                            </div>
                        </div>
                        <div class="item">
                            <img src="{{ URL::asset('/image/Rectangle 203.png') }}" alt="">
                            <div class="">
                                <div class="name-destination">Muine, Binhthuan</div>
                                <span>11 experiences</span>
                            </div>
                        </div>
                        <div class="item">
                            <img src="{{ URL::asset('/image/Rectangle 203.png') }}" alt="">
                            <div class="">
                                <div class="name-destination">Muine, Binhthuan</div>
                                <span>11 experiences</span>
                            </div>
                        </div>
                        <div class="item">
                            <img src="{{ URL::asset('/image/Rectangle 203.png') }}" alt="">
                            <div class="">
                                <div class="name-destination">Muine, Binhthuan</div>
                                <span>11 experiences</span>
                            </div>
                        </div>
                        <div class="item">
                            <img src="{{ URL::asset('/image/Rectangle 203.png') }}" alt="">
                            <div class="">
                                <div class="name-destination">Muine, Binhthuan</div>
                                <span>11 experiences</span>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
            {{-- end destinations --}}

            <div class="attractive-tour">
                <div class="head-content-main">
                    <div class="title-head-content-main">
                        Experience the traditional cultural beauties of Vietnam
                    </div>
                    <div class="button-content-main">
                        {{-- <a href=""></a> --}}
                        View all
                    </div>
                </div>
                <div class="attractive-tour-main">
                    <ul class="ul-attractive-tour ul-attractive-tour-above owl-carousel owl-theme">
                        <li class="item">
                            <div class="image-attractive-tour">
                                <span class="star">
                                    <img class="icon-star" src="{{ URL::asset('/image/star 1.png') }}" alt="">
                                    4.5
                                </span>
                                <img class="bookmark" src="{{ URL::asset('/image/shape12.png') }}" alt="">

                                <img src="{{ URL::asset('/image/Rectangle233.png') }}" alt="">
                            </div>

                            <div class="">
                                <div class="adddress">
                                    <img class="address-icon"
                                        style="padding-right: 3px; padding-bottom: 5px; margin-left:-2px;"
                                        src=" {{ URL::asset('/image/location-1.svg') }}" alt="">
                                    <span>Sapa, Laocai</span>
                                </div>
                                <div class="name-attractive-tour">Discover interesting things in the romantic coastal city
                                    of Vungtau

                                </div>
                                <div class="time-price">
                                    <div class="time">
                                        <img class=""
                                            style="padding-right: 3px; padding-bottom: 5px; margin-left:-2px;"
                                            src=" {{ URL::asset('/image/calendar-clock.svg') }}" alt="">
                                        <span>3 days - 2 night</span>
                                    </div>
                                    <div class="price">
                                        <span>from </span><b>$146.00</b>

                                    </div>
                                </div>
                            </div>
                        </li>
                        <li class="item">
                            <div class="image-attractive-tour">
                                <span class="star">
                                    <img class="icon-star" src="{{ URL::asset('/image/star 1.png') }}" alt="">
                                    4.5
                                </span>
                                <img class="bookmark" src="{{ URL::asset('/image/shape123.png') }}" alt="">

                                <img src="{{ URL::asset('/image/Rectangle 204.png') }}" alt="">
                            </div>

                            <div class="">
                                <div class="adddress">
                                    <img class="address-icon"
                                        style="padding-right: 3px; padding-bottom: 5px; margin-left:-2px;"
                                        src=" {{ URL::asset('/image/location-1.svg') }}" alt="">
                                    <span>Sapa, Laocai</span>
                                </div>
                                <div class="name-attractive-tour">Discover the most majestic Fansipan peak in Vietnam - the
                                    roof of Indochina
                                </div>
                                <div class="time-price">
                                    <div class="time">
                                        <img class=""
                                            style="padding-right: 3px; padding-bottom: 5px; margin-left:-2px;"
                                            src=" {{ URL::asset('/image/calendar-clock.svg') }}" alt="">
                                        <span>3 days - 2 night</span>
                                    </div>
                                    <div class="price">
                                        <span>from </span><b>$234.00</b>

                                    </div>
                                </div>
                            </div>
                        </li>
                        <li class="item">
                            <div class="image-attractive-tour">
                                <span class="star">
                                    <img class="icon-star" src="{{ URL::asset('/image/star 1.png') }}" alt="">
                                    4.5
                                </span>
                                <img class="bookmark" src="{{ URL::asset('/image/shape12.png') }}" alt="">

                                <img src="{{ URL::asset('/image/Rectangle 208.png') }}" alt="">
                            </div>

                            <div class="">
                                <div class="adddress">
                                    <img class="address-icon"
                                        style="padding-right: 3px; padding-bottom: 5px; margin-left:-2px;"
                                        src=" {{ URL::asset('/image/location-1.svg') }}" alt="">
                                    <span>Sapa, Laocai</span>
                                </div>
                                <div class="name-attractive-tour">Experience sea tourism on Phuquoc golden pearl

                                </div>
                                <div class="time-price">
                                    <div class="time">
                                        <img class=""
                                            style="padding-right: 3px; padding-bottom: 5px; margin-left:-2px;"
                                            src=" {{ URL::asset('/image/calendar-clock.svg') }}" alt="">
                                        <span>3 days - 2 night</span>
                                    </div>
                                    <div class="price">
                                        <span>from </span><b>$334.00</b>

                                    </div>
                                </div>
                            </div>
                        </li>
                        <li class="item">
                            <div class="image-attractive-tour">
                                <span class="star">
                                    <img class="icon-star" src="{{ URL::asset('/image/star 1.png') }}" alt="">
                                    4.5
                                </span>
                                <img class="bookmark" src="{{ URL::asset('/image/shape12.png') }}" alt="">

                                <img src="{{ URL::asset('/image/Rectangle 208.png') }}" alt="">
                            </div>

                            <div class="">
                                <div class="adddress">
                                    <img class="address-icon"
                                        style="padding-right: 3px; padding-bottom: 5px; margin-left:-2px;"
                                        src=" {{ URL::asset('/image/location-1.svg') }}" alt="">
                                    <span>Sapa, Laocai</span>
                                </div>
                                <div class="name-attractive-tour">Experience sea tourism on Phuquoc golden pearl

                                </div>
                                <div class="time-price">
                                    <div class="time">
                                        <img class=""
                                            style="padding-right: 3px; padding-bottom: 5px; margin-left:-2px;"
                                            src=" {{ URL::asset('/image/calendar-clock.svg') }}" alt="">
                                        <span>3 days - 2 night</span>
                                    </div>
                                    <div class="price">
                                        <span>from </span><b>$334.00</b>

                                    </div>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>

            </div>

            {{-- begin Experience --}}
            <div class="attractive-tour">
                <div class="head-content-main">
                    <div class="title-head-content-main">
                        Attractive tour and interesting experiences
                    </div>
                    <div class="button-content-main">
                        {{-- <a href=""></a> --}}
                        View all
                    </div>
                </div>
                <div class="attractive-tour-main">
                    <ul class="ul-attractive-tour owl-carousel owl-theme">
                        <li class="item">
                            <div class="image-attractive-tour">
                                <span class="star">
                                    <img class="icon-star" src="{{ URL::asset('/image/star 1.png') }}" alt="">
                                    4.5
                                </span>
                                <img class="bookmark" src="{{ URL::asset('/image/shape12.png') }}" alt="">

                                <img src="{{ URL::asset('/image/Rectangle 204.png') }}" alt="">
                            </div>

                            <div class="">
                                <div class="adddress">
                                    <img class="address-icon"
                                        style="padding-right: 3px; padding-bottom: 5px; margin-left:-2px;"
                                        src=" {{ URL::asset('/image/location-1.svg') }}" alt="">
                                    <span>Sapa, Laocai</span>
                                </div>
                                <div class="name-attractive-tour">Discover interesting things in the romantic coastal city
                                    of Vungtau

                                </div>
                                <div class="time-price">
                                    <div class="time">
                                        <img class=""
                                            style="padding-right: 3px; padding-bottom: 5px; margin-left:-2px;"
                                            src=" {{ URL::asset('/image/calendar-clock.svg') }}" alt="">
                                        <span>3 days - 2 night</span>
                                    </div>
                                    <div class="price">
                                        <span>from </span><b>$146.00</b>

                                    </div>
                                </div>
                            </div>
                        </li>
                        <li class="item">
                            <div class="image-attractive-tour">
                                <span class="star">
                                    <img class="icon-star" src="{{ URL::asset('/image/star 1.png') }}" alt="">
                                    4.5
                                </span>
                                <img class="bookmark" src="{{ URL::asset('/image/shape123.png') }}" alt="">

                                <img src="{{ URL::asset('/image/Rectangle 204.png') }}" alt="">
                            </div>

                            <div class="">
                                <div class="adddress">
                                    <img class="address-icon"
                                        style="padding-right: 3px; padding-bottom: 5px; margin-left:-2px;"
                                        src=" {{ URL::asset('/image/location-1.svg') }}" alt="">
                                    <span>Sapa, Laocai</span>
                                </div>
                                <div class="name-attractive-tour">Discover the most majestic Fansipan peak in Vietnam - the
                                    roof of Indochina
                                </div>
                                <div class="time-price">
                                    <div class="time">
                                        <img class=""
                                            style="padding-right: 3px; padding-bottom: 5px; margin-left:-2px;"
                                            src=" {{ URL::asset('/image/calendar-clock.svg') }}" alt="">
                                        <span>3 days - 2 night</span>
                                    </div>
                                    <div class="price">
                                        <span>from </span><b>$234.00</b>

                                    </div>
                                </div>
                            </div>
                        </li>
                        <li class="item">
                            <div class="image-attractive-tour">
                                <span class="star">
                                    <img class="icon-star" src="{{ URL::asset('/image/star 1.png') }}" alt="">
                                    4.5
                                </span>
                                <img class="bookmark" src="{{ URL::asset('/image/shape12.png') }}" alt="">

                                <img src="{{ URL::asset('/image/Rectangle 204.png') }}" alt="">
                            </div>

                            <div class="">
                                <div class="adddress">
                                    <img class="address-icon"
                                        style="padding-right: 3px; padding-bottom: 5px; margin-left:-2px;"
                                        src=" {{ URL::asset('/image/location-1.svg') }}" alt="">
                                    <span>Sapa, Laocai</span>
                                </div>
                                <div class="name-attractive-tour">Experience sea tourism on Phuquoc golden pearl

                                </div>
                                <div class="time-price">
                                    <div class="time">
                                        <img class=""
                                            style="padding-right: 3px; padding-bottom: 5px; margin-left:-2px;"
                                            src=" {{ URL::asset('/image/calendar-clock.svg') }}" alt="">
                                        <span>3 days - 2 night</span>
                                    </div>
                                    <div class="price">
                                        <span>from </span><b>$334.00</b>

                                    </div>
                                </div>
                            </div>
                        </li>
                        <li class="item">
                            <div class="image-attractive-tour">
                                <span class="star">
                                    <img class="icon-star" src="{{ URL::asset('/image/star 1.png') }}" alt="">
                                    4.5
                                </span>
                                <img class="bookmark" src="{{ URL::asset('/image/shape12.png') }}" alt="">

                                <img src="{{ URL::asset('/image/Rectangle 204.png') }}" alt="">
                            </div>

                            <div class="">
                                <div class="adddress">
                                    <img class="address-icon"
                                        style="padding-right: 3px; padding-bottom: 5px; margin-left:-2px;"
                                        src=" {{ URL::asset('/image/location-1.svg') }}" alt="">
                                    <span>Sapa, Laocai</span>
                                </div>
                                <div class="name-attractive-tour">Experience sea tourism on Phuquoc golden pearl

                                </div>
                                <div class="time-price">
                                    <div class="time">
                                        <img class=""
                                            style="padding-right: 3px; padding-bottom: 5px; margin-left:-2px;"
                                            src=" {{ URL::asset('/image/calendar-clock.svg') }}" alt="">
                                        <span>3 days - 2 night</span>
                                    </div>
                                    <div class="price">
                                        <span>from </span><b>$334.00</b>

                                    </div>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>

            </div>

            {{-- end Experience --}}

            {{-- begin Contact --}}
            <div class="contact">
                <div class="title-intro">
                    <span> Leave us an email, <br></span>
                    to get <b>the latest deals</b>
                </div>
                <form action="">
                    <div class="form-contact">



                        <div class="input-container">
                            {{-- <i class="fa fa-user "></i> --}}
                            <img class="icon" src=" {{ URL::asset('/image/shape33.png') }}" alt="">
                            <input class="input-field" type="text" placeholder="example@gmail.com"
                                name="">
                        </div>

                        <div class="">
                            <button type="submit" class="btn-sub-contact btn btn-dark">Send</button>
                        </div>




                    </div>
                </form>
            </div>
            {{-- end Contact --}}
        </div>
    </div>
@endsection
