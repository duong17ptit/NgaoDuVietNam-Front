<div class="wrapper">
    <div class="container wrap">


        <div class="banner">
            <div class="row">
                <div class="col-6">
                    <div class="logo">
                        <nav class="navbar">
                            <a class="navbar-brand" href="#">
                                <img src=" {{ URL::asset('/image/Group349.png') }}" width="89" height="86.33" alt="">
                            </a>
                        </nav>
                    </div>
                </div>
                <div class="col-6">
                    <nav class="navbar navbar-expand-md nav-menu">
                        {{-- <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                          </button> --}}
                        <div class="collapse navbar-collapse" id="navbarNav">
                            <ul class="navbar-nav">
                                <li class="nav-item nav-item-d">
                                    <a class="nav-link" href="#">Home</a>
                                </li>
                                <li class="nav-item-d ">
                                    <a class="nav-link" href="#">About</a>
                                </li>
                                <li class="nav-item-d">
                                    <a class="nav-link active" href="#">Tours</a>
                                </li>
                                <li class="nav-item-d">
                                    <a class="nav-link" href="#">Hotels</a>
                                </li>
                                <li class="nav-item-d">
                                    <a class="nav-link" href="#">Contact</a>
                                </li>
                                <li class="nav-item-d">
                                    <a class="nav-link" href="#">Login</a>
                                </li>
                            </ul>
                        </div>
                    </nav>
                </div>
            </div>

        </div>
        <div class="middle-header">
            <div class="wrap-title">

                <div class="title-header">
                    Welcome to NgaoduVietnam
                </div>
                <div class="content-header content-header-home">Perfect place for your stories</div>
                <div class="content-header content-header-about">About us</div>
            </div>
        </div>
        <div class="wrap-filter">

            <div class="category-form">
                <div class="title-category-form active">
                    Tours
                </div>
                <div class="title-category-form">
                    Hotels
                </div>
            </div>
            <div class="filter">
                <form action="">
                    <div class="title-form">Discover beautiful Vietnam</div>
                    <div class="input-container">
                        {{-- <i class="fa fa-user "></i> --}}
                        <img class="icon" src=" {{ URL::asset('/image/location-1.svg') }}" alt="">
                        <input class="input-field" type="text" placeholder="Quatlam Beach, Giaothuy, Namdinh" name="usrnm">
                    </div>

                    <div class="input-container">
                        <img class="icon" src=" {{ URL::asset('/image/calendar-clock.svg') }}" alt="">
                        <input class="input-field" type="text" placeholder="Departure time" name="departure">
                    </div>

                    <div class="input-container">
                        <img class="icon" src=" {{ URL::asset('/image/flag-1.svg') }}" alt="">
                        <select class="input-field" >
                            <option value="">Type of tours</option> 
                        </select>
                        <img class="icon-arrow" src=" {{ URL::asset('/image/Polygon1.svg') }}" alt="arrow">
                    </div>
                    <div class="input-container">
                        <img class="icon" src="  {{ URL::asset('/image/users.svg') }}" alt="">
                        <select class="input-field ">
                            <option value="">Number of guests</option>
                        </select>
                        <img class="icon-arrow" src=" {{ URL::asset('/image/Polygon1.svg') }}" alt="arrow">
                    </div>
                    <div class="input-container">
                        <img class="icon-submit" src=" {{ URL::asset('/image/search.svg') }}" alt="">
                        <button type="submit" class="btnn">Search</button>
                    </div>

                </form>
            </div>
            {{-- end-filter --}}
        </div>

        <div class="feature">
            <div class="feature-content">


                <ul style="padding-top: 24px; padding-bottom: 8px; margin-bottom:0px;">
                    <li>Features</li>
                </ul>
                <div class="d-flex justify-content-between">
                  <div class="feature-li">
                    <b>200+</b> tours
                  </div>
                  <div class="feature-li">
                    <b>100+</b> destination
                  </div>
                  <div class="feature-li">
                    <b>8+</b> type of tour
                  </div>
                </div>
            </div>


        </div>



    </div>
    {{-- end-container --}}





</div>
