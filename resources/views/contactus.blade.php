@section('content')
<style>
    @media only screen and (max-width: 1026px) {
        #yangkiri {
            margin-top: 20%;
        }
    }
</style>
{{-- <section class="landing-home section-pb-space" style="background: linear-gradient(to top, rgb(58,175,169,0.959), rgb(58,175,169,0.959)), url('raw/anim.gif') no-repeat top center; background-size: cover;" id="home">
    <div class="container-fluid" id="background">
    <div class="row flex wrap">
        <div class="col-md-6" id="yangkiri" style="margin-top: 12%;">
            <img class="img-fluid" src="{{asset('logo/contact.png')}}" style="opacity: 0.8" alt="">
        </div>
        <div class="col-md-6 p-5" style="margin-top: 5%;">
            <u class="text-center" style="color: white"><h3>Contact Us</h3></u>
            <div class="card" style="background-color: rgba(255, 255, 255, 0.658);  border:0; border-radius: 15px;">
                <div class="card-body">
                    <form>
                    <div class="form-group col-sm-5" style="float: left;">
                        <input class="form-control" id="validationCustom01" type="text" placeholder="Your Name" required="">
                    </div>
                    <div class="form-group col-sm-5" style="float: right;">
                        <input class="form-control" id="validationCustom01" type="text" placeholder="Your Email" required="">
                    </div>
                    <div class="form-group" style="clear:both">
                        <input class="form-control" id="validationCustom01" type="text" placeholder="Subject" required="">
                    </div>
                    <div class="form-group" style="clear:both">
                        <textarea name="" class="form-control" id="" cols="30" rows="10"></textarea>
                    </div>
                    <div class="text-right">
                        <button class="btn" style="float: right; color: white; background-color: #2B7A77" type="submit">Submit</button>
                      </div>
                </form>
                </div>
            </div>
        </div>
    </div>
</div>
</section> --}}
<div class="container-fluid" style="background-color: #DEF1F0;">
    {{-- <div class="row">
        <div class="col-12" style="margin-top: 7%">
            <h1 class="text-center mt-5 text-dark"><b><u>Contact Us</u></b></h1>
        </div>
    </div> --}}
    <div class="row">
        <div class="col-md-6 p-3" style="margin-top: 10%">
            <div class="card shadow shadow-showcase" style="background-color: rgba(193, 248, 227, 0.658);  border:0; border-radius: 15px;">
                <div class="row">
                    <div class="col-md-6 p-5 mt-3">
                        {{-- <h1 style="opacity: 0"><b>CHECK</b></h1> --}}
                        <h1><b>MY </b></h1>
                        <h1><b>PROFILE</b></h1>
                        <button class="btn btn-primary mt-1" >Go To My Profile</button>
                    </div>
                    <div class="col-6 p-2">
                        <img width="100%" src="{{asset('image/filter.svg')}}" alt="">
                    </div>
                </div>
            </div>
            <div class="card shadow shadow-showcase" style="background-color: rgba(193, 248, 227, 0.658);  border:0; border-radius: 15px;">
                <div class="row">
                    <div class="col-md-6 p-3 mt-3">
                        <img width="100%" src="{{asset('image/product.svg')}}" alt="">
                    </div>
                    <div class="col-6 p-5 mt-3">
                        <h1 class="text-center"><b>EXPLORE</b></h1>
                        <h1 class="text-center"><b>OUR</b></h1>
                        <h1 class="text-center"><b>STUFF</b></h1>
                        <button class="btn btn-primary mt-1 text-center" style="margin-left: 22%">FIND OUT</button>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-6 p-3" style="margin-top: 10%">
            <div class="card" style="border:0; border-radius: 15px; border-top: 3px solid #3AAFA9;">
                <div class="card-header text-center" style="border:0; border-radius: 15px;">
                    Get your custom web scraping solution.
                </div>
                <div class="card-body">
                    <form class="needs-validation" novalidate="">
                        <div class="row g-3">
                          <div class="col-md-6">
                            <label class="form-label" for="validationCustom01">First name</label>
                            <input class="form-control" id="validationCustom01" type="text" value="Mark" required="">
                            <div class="valid-feedback">Looks good!</div>
                          </div>
                          <div class="col-md-6 mb-3">
                            <label class="form-label" for="validationCustom02">Last name</label>
                            <input class="form-control" id="validationCustom02" type="text" value="Otto" required="">
                            <div class="valid-feedback">Looks good!</div>
                          </div>
                        </div>
                        <div class="row g-3">
                          <div class="col-md-6">
                            <label class="form-label" for="validationCustom03">Work Email</label>
                            <input class="form-control" id="validationCustom03" type="text" placeholder="xyz@gmail.com" required="">
                            <div class="invalid-feedback">Please provide a valid city.</div>
                          </div>
                          <div class="col-md-3">
                            <label class="form-label" for="validationCustom04">Phone Number</label>
                            <select class="form-select" id="validationCustom04" required="">
                              <option selected="" disabled="" value="">Choose...</option>
                              <option>...</option>
                            </select>
                            <div class="invalid-feedback">Please select a valid state.</div>
                          </div>
                          <div class="col-md-3 mb-3">
                            <label class="form-label" for="validationCustom05" style="color: white">a</label>
                            <input class="form-control" id="validationCustom05" type="text" placeholder="Zip" required="">
                            <div class="invalid-feedback">Please provide a valid zip.</div>
                          </div>
                        </div>
                        <div class="row g-3">
                          <div class="col-md-12">
                            <label class="form-label" for="validationCustom03">Company</label>
                            <input class="form-control mb-2" id="validationCustom03" type="text" placeholder="Company Name" required>
                            <textarea class="form-control mb-3" id="validationTextarea" placeholder="Tell us about your project" required></textarea>
                          </div>
                        </div>

                        <div class="row g-3">
                          <div class="col-md-12">
                            <label class="form-label" for="validationTooltip04">Time Zone</label>
                            <select class="form-select mb-3" id="validationTooltip04" required>
                              <option selected="" disabled="" value="">Choose...</option>
                              <option>...</option>
                            </select>
                          </div>
                        </div>

                        <div class="mb-1">
                          <div class="form-check">
                            <div class="checkbox p-0">
                              <input class="form-check-input" id="invalidCheck" type="checkbox" checked required>
                              <label class="form-check-label" style="font-size: 10px" for="invalidCheck">Yes! I agree to receive other communications from Asia Research Institute (formerly Scrapinghub) on products, news, events, and/or offers.</label>
                            </div>
                          </div>
                        </div>
                        <div class="mb-3">
                          <div class="form-check">
                            <div class="checkbox p-0">
                              <input class="form-check-input" id="invalidCheck" type="checkbox" required>
                              <label class="form-check-label" style="font-size: 10px" for="invalidCheck">I have read and agree to Zyte Group Limited Terms of Service, Privacy Policy & Cookie Policy. I consent to Zyte storing and processing the personal information submitted above to provide me with the content requested*</label>
                            </div>
                          </div>
                        </div>
                        <div class="row g-3">
                            <div class="col-md-12 text-center">
                                <button class="btn btn-primary w-100 text-center" type="submit">lets Talk</button>
                            </div>
                          </div>
                      </form>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="container-fluid" style="background-color: #DEF1F0;">
    <div class="row" style="margin-left: 3%;">
        <h1 style="margin-top: 5%"><b>Need Help ?</b></h1>
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
