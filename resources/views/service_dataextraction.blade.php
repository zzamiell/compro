@section('content')
<script src="{{asset('assets/js/jquery-3.5.1.min.js')}}"></script>
<style>
     .hero{
        text-align: justify;
        text-justify: inter-word;
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
  background-color: #a7ffe2;
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

.horizontal-scrollable > .row {
    overflow: scroll;
    /* position: fixed; */
    /* scrollbar-width: thin; */
    /* white-space: nowrap; */
}

#container {
      width: 100%;
      height: 100%;
      overflow-x: hidden;
    }

    .float{
	position:absolute;
	width:60px;
	height:60px;
	bottom:370px;
	right:30px;
	background-color: rgba(255, 255, 255, 0.658);
	color:black;
    border-radius:50px;
    opacity: 0.5;
	text-align:center;
	box-shadow: 2px 2px 3px #999;
}

.float:hover {
  opacity: 1;
   background-color: #99eeea;
}

.float-left:hover {
    opacity: 1;
   background-color: #99eeea;
}

    .float-left{
	position:absolute;
	width:60px;
	height:60px;
	bottom:370px;
	left:50px;
	background-color: rgba(255, 255, 255, 0.658);
	color:black;
    opacity: 0.5;
	border-radius:50px;
	text-align:center;
	box-shadow: 2px 2px 3px #999;
}

</style>
<section class="" style="background: linear-gradient(to top, rgb(58,175,169,0.959), rgb(58,175,169,0.959)), url('raw/anim.gif') no-repeat top center; background-size: cover;" id="home">
<div class="container-fluid" id="background">
    <div class="row">
        <div class="col-12" style="margin-top: 8%">
            <u style="color: white"><h3 class="text-center" style="color: white;">Services</h3></u>
        </div>
    </div>

    <div class="row">
        <div class="col-md-6" style="margin-top: 4%">
            <div class="hero" style="margin-left: 7%;color: white">
                <h1 style="color: rgb(240, 230, 230);font-size: 48px">Data extraction service</h1>
                {{-- <p style="rgb(240, 230, 230);font-size: 25px">How can data extraction help your business to grow?</p> --}}
                <p style="rgb(240, 230, 230);font-size: 23px;font-weight: bold;color:black">Extract web data at scale without getting banned</p>
                <p style="rgb(240, 230, 230);font-size: 18x;">Copy-paste manually into an excel spreadsheet can be a hassle, you need automation.</p>
                <p style="rgb(240, 230, 230);font-size: 18x;">Our data extraction expert will build and maintain the ideal data for you. Give us the URL of the website and the detail of the project and we will send back the good quality data for you.</p>
                <p style="rgb(240, 230, 230);font-size: 18x;"> The ASIA RESEARCH INSTITUTE provides data extraction service for your company without getting banned. We offer data quality monitoring, recruitment, market research, and social media data services to help in good decision making.</p>
                {{-- <p style="rgb(240, 230, 230);font-size: 18x;"> The ASIA RESEARCH INSTITUTE provides data extraction service for your company without getting banned. We offer data quality monitoring, recruitment, market research, and social media data services to help in good decision making.</p> --}}
            </div>
        </div>
        <div class="col-md-6" style="margin-top: 2%;">
            <div class="card" style="background-color: rgba(255, 255, 255, 0.507);  border:0; border-radius: 15px;">
                <div class="card-body">
                    <img src="{{asset('image/extract.svg')}}" width="100%" class="img-fluid" alt="">
                </div>
            </div>
        </div>
    </div>
</div>

</section>
<div class="container-fluid" style="background-color: #DEF1F0">
    <div class="row" style="margin-left: 3%;">
        <h1 style="margin-top: 3%"><b>My Services Of Data Extraction</b></h1>
    </div>
    <div class="container" style="margin-right: 6%;margin-top: 3%">
        <div class="row flex-nowrap"  id="container">
        @foreach ($data as $key => $item)
        <div class="col-md-3 d-flex align-items-stretch">
            <div class="card card-block" style="background-color: rgba(255, 255, 255, 0.658);  border:0; border-radius: 15px; box-shadow: 2px 2px 3px #999;">
                <div class="card-body" style="margin-top: 0%" id="hover">
                    <h2 class="text-center" style="color: #2B7A77">{{$item->nama_data}}</h2>
                    {{-- <h2 class="text-center" style="color: #2B7A77">Monitoring</h2> --}}
                </div>
                <div class="overlay">
                    <div class="theOver" style="font-size: 13px;text-justify: inter-word;">
                    <span class="p-5" style="color: black; font-size: 10px">
                        {{$item->deskripsi}}
                    </span>
                    <button class="btn btn-primary btn-sm mt-3 text-center">Read More</button>
                    </div>
                </div>
            </div>
        </div>
        @endforeach
        </div>
        {{-- <button class="float-left" id="slideLeft" type="button"><i class="fa fa-arrow-left"></i></button>
        <button class="float" id="slideRight" type="button"><i class="fa fa-arrow-right"></i></button> --}}
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

<script>
    $( document ).ready(function() {
        console.log( "ready!" );
        // document.getElementById('container').scrollLeft += 140;
    });

    const buttonRight = document.getElementById('slideRight');
    const buttonLeft = document.getElementById('slideLeft');

    buttonRight.onclick = function () {
        console.log('kanan');
      document.getElementById('container').scrollLeft += 20;
    };
    buttonLeft.onclick = function () {
      document.getElementById('container').scrollLeft -= 20;
    };
</script>
@endsection
