@section('content')
<style>
    #background {
        position: absolute;
        top: 0;
        right: 0;
        width: 50%;
        height: 100%;
        background-color: #276675;
        opacity: 0.5;
    }

    .company-profile{
        color: #2B7A77;
        font-size: 18px;
    }

    .comp {
       padding: 15px;
    }

    .for-text{
        text-align: justify;
        text-justify: inter-word;
    }
</style>
{{-- <section class="landing-home section-pb-space mt-3" id="home" style="background-color: #DEF1F0"> --}}
<section class="landing-home section-pb-space mt-3" id="home" style="background: linear-gradient(to top, rgba(171, 235, 231, 0.959), rgb(58,175,169,0.959)), url('raw/anim.gif') no-repeat top center; background-size: cover;">
    <div class="row flex wrap">
        <div class="col-md-6 p-5" style="margin-top: 8%;">
            <h1 style="color: black;font-size: 48px;margin-left: 1%">Welcome to the AI </h1>
            <h1 style="color: black;font-size: 48px;margin-left: 1%">Research Institute </h1>
            <p class="for-text" style="color: black;font-size: 14px;margin-left: 1%">We are a team of data scientists and AI experts,
                specialized in web data extraction and analysis. We use proprietary techniques to extract all web data
                from a target domain and then use our AI algorithms to turn that into informative, actionable Intel.
            </p>
            <p class="for-text" style="color: black;font-size: 14px;margin-left: 1%">Our skilled and experienced developer team will give
                you the data you need. And we will ensure your needs are met at every phase of the project lifecycle.
                We'll work with you to find out what's most important for your company and then give you a plan that
                will deliver results without wasting any time or money. With our diverse set of skillsets and expertise,
                we can provide accurate analysis for even the most complicated problems.
            </p>
        </div>
        <div class="col-md-6 p-5" style="margin-top: 5%;">
            <img class="img-fluid" src="{{asset('image/goals.svg')}}" alt="">
        </div>
    </div>
</section>
<div class="container-fluid" style="background-color: #DEF1F0">
    <div class="row" style="padding: 3%">
            <h3 class="company-profile" style="border-left: 3px solid #3AAFA9;font-size: 40px">Company Profile</h3>
            <table class="mt-3" style="border-collapse: collapse;width: 100%" >
                <tbody>
                <tr class="comp" style="border-bottom: 1px solid #3AAFA9;">
                    <td class="comp" style="width: 20%">Company Name</td>
                    <td class="text-left comp" style="width: 5%">:</td>
                    <td class="text-right comp" style="width: 75%">PT. ASIA RISET INSTITUSI</td>
                </tr>
                <tr class="comp" style="border-bottom: 1px solid #3AAFA9;">
                    <td class="comp">Estabilished</td>
                    <td class="text-left comp">:</td>
                    <td class="comp">2016</td>
                </tr>
                <tr class="comp" style="border-bottom: 1px solid #3AAFA9;">
                    <td class="comp">Director</td>
                    <td class="text-left comp">:</td>
                    <td class="comp">Kimura Kenji</td>
                </tr>
                <tr class="comp" style="border-bottom: 1px solid #3AAFA9;">
                    <td class="comp">Office</td>
                    <td class="text-left comp">:</td>
                    <td class="comp">South Jakarta, Indonesia</td>
                </tr>
                <tr class="comp" style="border-bottom: 1px solid #3AAFA9;">
                    <td class="comp">Phone</td>
                    <td class="text-left comp">:</td>
                    <td class="comp">(+62)21-727401619</td>
                </tr>
                <tr style="border-bottom: 1px solid #3AAFA9;">
                    <td class="comp">Email</td>
                    <td class="text-left comp">:</td>
                    <td class="comp">info@asiaresearchinstitute.com</td>
                </tr>
                </tbody>
              </table>
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
