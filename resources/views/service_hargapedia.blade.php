@section('content')
<style>
    .sub{
        text-align: justify;
        text-justify: inter-word;
    }

    .service1-text{
        color: #2B7A77;
        text-align: justify;
        text-justify: inter-word;
    }

    .service1{
        width: 100%;
        height: 15vw;
        object-fit: cover;
    }

    .pos-ribbon{
        right: -1px;
        left: auto;
        bottom: 50px;
        top: auto;
    }

.overlay {
  border-radius: 15px;
  position: absolute;
  top: 0;
  bottom: 0;
  left: 0;
  right: 0;
  height: 100%;
  width: 100%;
  opacity: 0;
  transition: .5s ease;
  background-color: #DEF1F0;
}


.card:hover .overlay {
  opacity: 1;
}

.theOver {
  color: white;
  font-size: 20px;
  position: absolute;
  top: 50%;
  left: 50%;
  -webkit-transform: translate(-50%, -50%);
  -ms-transform: translate(-50%, -50%);
  transform: translate(-50%, -50%);
  text-align: center;
}

</style>
{{-- <section class="landing-home section-pb-space" id="home"><img class="img-fluid bg-img-cover" src="{{asset('logo/service_hargapedia.png')}}" alt=""> --}}
{{-- <section class="landing-home section-pb-space" id="home" style="background-color: #DEF1F0">
    <div class="container-fluid" id="background">
    <div class="row flex wrap">
        <div class="col-12" style="margin-top: 8%">
            <u style="color: black"><h3 class="text-center" style="color: black;">Services</h3></u>
            <h2 class="text-left mt-5 text-dark" style="margin-left: 5%; font-weight: bold;">HARGAPEDIA</h2>
        </div>
    </div>
    <div class="row flex wrap p-5">
        <div class="col-lg-3 d-flex align-items-stretch">
            <div class="card" style="background-color: rgba(255, 255, 255, 0.658);  border:0; border-radius: 15px;">
                <div class="card-body mt-2 p-5" id="hover">
                    <h1 style="color: #2B7A77">Find Your</h1>
                    <h1 class="text-center" style="color: #2B7A77">Dream</h1>
                    <h1 class="text-center" style="color: #2B7A77">House</h1>
                </div>
                <div class="overlay">
                    <div class="theOver" style="font-size: 13px;text-justify: inter-word;">
                    <span style="color: black">
                        Find the right house for you. Asia Research Institute has an Al-Powered algorithm that calculated the right price for your desired location
                    </span>
                    <button class="btn btn-primary btn-sm mt-3 text-center">Read More</button>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-3 d-flex align-items-stretch">
            <div class="card" style="background-color: rgba(255, 255, 255, 0.658);  border:0; border-radius: 15px;">
                <div class="card-body mt-2 p-5">
                    <h1 class="text-center" style="color: #2B7A77">AI-</h1>
                    <h1 class="text-center" style="color: #2B7A77">Powered</h1>
                    <h1 class="text-center" style="color: #2B7A77">Data</h1>
                </div>
                <div class="overlay">
                    <div class="theOver" style="font-size: 11px;text-justify: inter-word;">
                    <span style="color: black">
                        Our AI uses complex algorithms to analyze "all" data that are related to house prices in Indonesia (such as population, GDP, etc). It then makes an informed decision on how much you should pay for a property.
                    </span>
                    <button class="btn btn-primary btn-sm mt-3 text-center">Read More</button>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-3 d-flex align-items-stretch">
            <div class="card" style="background-color: rgba(255, 255, 255, 0.658);  border:0; border-radius: 15px;">
                <div class="card-body mt-4 p-5">
                    <h1 class="text-center" style="color: #2B7A77">Covers all</h1>
                    <h1 class="text-center" style="color: #2B7A77">Regions</h1>
                </div>
                <div class="overlay">
                    <div class="theOver" style="font-size: 11px;text-justify: inter-word;">
                    <span style="color: black">
                        We cover all regions in Indonesia, which also means we cover the whole country. You can be sure that you'll get up-to-date figures on the right price for your area. this way, no matter where you want to live, we can help you find the price of house there!.
                    </span>
                    <button class="btn btn-primary btn-sm mt-3 text-center">Read More</button>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-3 d-flex align-items-stretch">
            <div class="card" style="background-color: rgba(255, 255, 255, 0.658);  border:0; border-radius: 15px;">
                <div class="card-body mt-4 p-5">
                    <h1 class="text-center" style="color: #2B7A77">Easy To</h1>
                    <h1 class="text-center" style="color: #2B7A77">Use</h1>
                </div>
                <div class="overlay">
                    <div class="theOver" style="font-size: 11px;text-justify: inter-word;">
                    <span style="color: black">
                       We know how frustasing it can be to find out what your house is worth. That's why our interface is so easy to use - just enter the location and other detail of houses do you need and you'll get a quote in seconds!
                    </span>
                    <button class="btn btn-primary btn-sm mt-3 text-center">Read More</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</section> --}}
<div class="container-fluid" style="background-color: #DEF1F0;">
    <div class="row flex wrap">
        <div class="col-12" style="margin-top: 7%">
            {{-- <h2 class="text-center mt-5 text-dark" style="font-weight: bold;">HARGAPEDIA</h2> --}}
            <h1 class="text-center mt-5 text-dark"><b><u>HARGAPEDIA</u></b></h1>
        </div>
    </div>
    <div class="row flex wrap p-5" style="margin-top: 4%">
            <div class="col-md-3 text-center">
                <img src="{{asset('image/dream_house.svg')}}" width="30%" class="img-fluid" alt="">
                <h3><b>Dream House</b></h3>
                <p style="font-weight: bold;">Find the right house for you. Asia Research Institute has an Al-Powered algorithm that calculated the right price for your desired location</p>
            </div>
            <div class="col-md-3 text-center">
                <img src="{{asset('image/powered.svg')}}" width="30%" class="img-fluid" alt="">
                <h3 style="margin-top: 2%"><b>AI Powered Data</b></h3>
                <p style="font-weight: bold;"> Our AI uses complex algorithms to analyze "all" data that are related to house prices in Indonesia (such as population, GDP, etc). It then makes an informed decision on how much you should pay for a property.</p>
            </div>
            <div class="col-md-3 text-center">
                <img src="{{asset('image/region.svg')}}" width="30%" class="img-fluid" alt="">
                <h3 style="margin-top: 2%"><b>Cover All Regions</b></h3>
                <p style="font-weight: bold;">We cover all regions in Indonesia, which also means we cover the whole country. You can be sure that you'll get up-to-date figures on the right price for your area. this way, no matter where you want to live, we can help you find the price of house there!.</p>
            </div>
            <div class="col-md-3 text-center">
                <img src="{{asset('image/use.svg')}}" width="30%" class="img-fluid" alt="">
                <h3 style="margin-top: 4%"><b>Easy To Use</b></h3>
                <p style="font-weight: bold;">We know how frustasing it can be to find out what your house is worth. That's why our interface is so easy to use - just enter the location and other detail of houses do you need and you'll get a quote in seconds!</p>
            </div>
    </div>
</div>
<div class="container-fluid" style="background-color: #DEF1F0">
    <div class="row" style="margin-left: 3%">
        <h1><b>Watch Our Video</b></h1>
    </div>
    <div class="row" style="padding: 3%">
            <div class="col-md-6">
                <div class="card shadow shadow-showcase" style="background-color: rgba(255, 255, 255, 0.658);  border:0; border-radius: 15px;">
                        <iframe width="100%" height="345" src="https://www.youtube.com/embed/9MaRupQMA54" style="background-color: rgba(255, 255, 255, 0.658);  border:0; border-radius: 15px;"></iframe>
                </div>
            </div>
            <div class="col-md-6">
                <div class="card shadow shadow-showcase" style="background-color: rgba(255, 255, 255, 0.658);  border:0; border-radius: 15px;">
                        <iframe width="100%" height="345" src="https://www.youtube.com/embed/_V9JSUkZ968" style="background-color: rgba(255, 255, 255, 0.658);  border:0; border-radius: 15px;"></iframe>
                </div>
            </div>
    </div>
</div>

<div class="container-fluid" style="background-color: #DEF1F0">
    <div class="row" style="margin-left: 3%">
        <h1><b>Need Help ?</b></h1>
    </div>
    <div class="row" style="padding: 3%">
        <div class="col-md-6">
            <img src="{{asset('image/faq.svg')}}" width="70%" class="img-fluid" alt="">
        </div>

            <div class="col-md-6" style="margin-top: 3%">
                {{-- <div class="card" style="background-color: #DEF1F0;  border:0; border-radius: 15px;"> --}}
                    <div class="card shadow shadow-showcase" style="background-color: #DEF1F0; border:0; border-radius: 15px;">
                    <div class="card-body" style="background: linear-gradient(to top, rgba(58, 175, 169, 0.959), rgb(58,175,169,0.959)), url('raw/anim.gif') no-repeat top center; background-size: cover;border:0; border-radius: 15px;">
                        <div class="text-center">
                            <h1><b>Informasi Lebih Lanjut</b></h1>
                            <p>Saatnya menikmati hidup Anda dengan bantuan fitur-fitur dari Jago. Bertransaksi dengan mudah hanya dalam beberapa langkah.
                                Kunjungi halaman FAQ untuk info lebih lanjut.</p>
                                <button class="btn btn-primary">LIHAT FAQ</button>
                        </div>
                    </div>
                </div>
            </div>
    </div>
    </div>
@endsection
