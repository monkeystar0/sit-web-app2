<div>
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
</div>
