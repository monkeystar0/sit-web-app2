<div>
    <div class="main-nav" id="main_nav">
        <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
            <div class="container">
                <a class="navbar-brand" href="#main_div">
                    Queenstown
                </a>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav me-auto">
                        <li><a href="{{ url('/#second-section') }}">About</a></li>
                    </ul>
                    <ul class="navbar-nav me-auto">
                        <li><a href="#third-section">Things to do</a></li>
                    </ul>
                    <ul class="navbar-nav me-auto">
                        <li><a href="#forth-section">Accomodations</a></li>
                    </ul>
                </div>
            </div>
        </nav>
    </div>
    <div class="fadebg" id="main_div">
        <div class="video-content">
            <video autoplay loop muted>
                <source src="{{ asset('/video/qt.mp4') }}" type="video/mp4">
            </video>
        </div>


        <div class="weather-box">
        </div>
        <div class="weather-box-content">
            <h2>Current weather</h2>
            <div class="weather-info">
                <div class="row">
                    <div class="col-4"><img src="https://openweathermap.org/img/wn/{{$w_data['weather'][0]['icon']}}@2x.png">
                        <h3 style="text-align:center;">{{$w_data['weather'][0]['description']}}</h3>
                    </div>
                    <div class="col-8"><br>
                        <h4>Feel like {{ round($w_data['main']['feels_like']-273.15,2)}} C</h4>
                        <h4>Max temperature {{round($w_data['main']['temp_max']-273.15,2)}} C</h4>
                        <h4>Min temperature {{round($w_data['main']['temp_min']-273.15,2)}} C</h4>
                    </div>
                </div>
            </div>
        </div>
        <div class="welcome">
            <div class="welcome-header">
                <h1>Welcome to Queenstown tourist information center</h1>
            </div>
        </div>
    </div>
    <div class="second-section" id="second-section">
        <div class="head-section">
            <h1>About</h1>
        </div>
        <div class="content">
            <h4>Welcome to Queenstown, New Zealand's crown jewel of adventure and natural beauty. Nestled on the shores of the captivating Lake Wakatipu, Queenstown is a destination like no other. With its stunning alpine landscapes, thrilling outdoor activities, and vibrant tourism scene, it's no wonder that Queenstown is often hailed as the "Adventure Capital of the World". <br></h4>
            <img src="https://assets.simpleviewinc.com/simpleview/image/upload/c_fill,f_webp,g_xy_center,h_790,q_60,w_2000,x_1826,y_1266/v1/clients/queenstownnz/Lake_Hayes_Walkway_5__87b4063a-3a64-44c9-96c9-56fd0157f786.jpg" style="width: 80%; height: auto;box-shadow: 5px 10px 18px #878787;"><br>
            <br><br><br>
            <img src="https://res.cloudinary.com/simpleview/image/upload/v1578446171/clients/queenstownnz/Queenstown_gardens_in_autumn_3_8bb9d0d3-7fa6-4ead-ba05-cad76ab465af.jpg" style="width: 80%; height: auto;box-shadow: 5px 10px 18px #878787;"><br>
        </div>
        <div class="head-section">
            <h2>Location and Geography</h2>
        </div>
        <div class="content">
            <h4>Queenstown is located on the South Island of New Zealand, within the picturesque Otago region. Its geographical setting is nothing short of spectacular, surrounded by the Southern Alps, which provide a dramatic backdrop of snow-capped peaks. The town's placement at the edge of Lake Wakatipu offers breathtaking vistas and endless opportunities for exploration.</h4>
        </div>
        <div class="location-box">
            <div id="map"></div>
        </div>
    </div>
    <div class="third-section" id="third-section">
    <div class="head-section">
            <h1>Things to do</h1>
        </div>
        <div class="row">
            <div class="col-4"><div class="place-card"><img class="place-img" src="https://www.newzealand.com/assets/Campaigns/FY-20-Campaigns/FY20-Brand-Welcome/GMW-Still-Assets/9575-Millbrook-Arrowtown-Miles-Holden__aWxvdmVrZWxseQo_FocalPointCropWzQzMCwzMDAsNDgsNDQsNzUsImpwZyIsNjUsMi41XQ.jpg"><div class="place-header"><a href="https://www.newzealand.com/int/feature/gibbston-valley-vineyards/" target="_blank">Wineries in Queenstown and Gibbston<span class="glyphicon glyphicon-arrow-right" aria-hidden="true"></span></a></div></div></div>
            <div class="col-4"><div class="place-card"><img class="place-img" src="https://www.newzealand.com/assets/Tourism-NZ/Queenstown/d11811d1e8/img-1536200530-4589-2813-77BFAE23-CC83-95EE-8424F25C7B5BC6C5__aWxvdmVrZWxseQo_FocalPointCropWzQzMCwzMDAsNjEsNTAsNzUsImpwZyIsNjUsMi41XQ.jpg"><div class="place-header"><a href="https://www.newzealand.com/int/walking-and-hiking-queenstown/" target="_blank">Walking and hiking in Queenstown</a></div></div></div>
            <div class="col-4"><div class="place-card"><img class="place-img" src="https://www.newzealand.com/assets/Tourism-NZ/Other/1a073e6576/img-1536111724-1882-20357-p-460BE22E-DA4C-C55B-27544EB062B49C2B-2544003__aWxvdmVrZWxseQo_FocalPointCropWzQzMCwzMDAsNTAsNTAsNzUsInBuZyIsNjUsMi41XQ.png"><div class="place-header"><a href="https://www.newzealand.com/int/skiing-in-queenstown-wanaka/" target="_blank">Skiing in Queenstown and Wānaka</a></div></div></div>
        </div>
        <div class="row">
        <div class="col-4"><div class="place-card"><img class="place-img" src="https://www.newzealand.com/assets/Tourism-NZ/Other/d4990c6a77/img-1542269659-8233-30911-F146644D-A566-C598-D1CE312ECCDBAB0A__aWxvdmVrZWxseQo_FocalPointCropWzQzMCwzMDAsNTEsNjEsNzUsImpwZyIsNjUsMi41XQ.jpg"><div class="place-header"><a href="https://www.newzealand.com/int/queenstown-central/" target="_blank">Central Queenstown</a></div></div></div>
        <div class="col-4"><div class="place-card"><img class="place-img" src="https://www.newzealand.com/assets/Tourism-NZ/Queenstown/bc3f73b0bd/img-1536148180-1823-22572-9A60BE7F-F85B-B69A-47401137CC21AA03__aWxvdmVrZWxseQo_FocalPointCropWzQzMCwzMDAsNjAsNTAsNzUsImpwZyIsNjUsMi41XQ.jpg"><div class="place-header"><a href="https://www.newzealand.com/int/arrowtown/" target="_blank">Arrowtown</a></div></div></div>
        <div class="col-4"></div>
        </div>
    </div>
    <div class="forth-section" id="forth-section">
        <div class="head-section">
            <h1>Accomodations</h1>
        </div>
        <div class="accomodation-box">
        <!-- {{json_encode($h_data)}} -->
        @foreach ( $h_data['result'] as $hotel) 
            <div class="hotel-card">
                <h4>{{$hotel['hotel_name']}} (review {{$hotel['review_score']}})</h4>
                <div class="row">
                    <div class="col-5">
                    <img src="{{$hotel['max_photo_url']}}" class="hotel-img">
                    </div>
                    <div class="col-7">
                        <h5><?php echo $hotel['unit_configuration_label'];?></h5>
                        <h5>Address: {{$hotel['address']}} {{$hotel['city_in_trans']}} {{$hotel['distances'][0]['text']}}</h5>
                        <h5></h5>
                        <h5>Price (today): {{$hotel['price_breakdown']['gross_price']}} {{$hotel['price_breakdown']['currency']}}  </h5>
                        <a class="book-btn" href="{{$hotel['url']}}">Book Now!</a>
                    </div>
                </div>
                
                
            </div>
        @endforeach
        </div>
    </div>
</div>
<script>
    initMap();
</script>