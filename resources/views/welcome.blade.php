<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>
    <link rel='icon' type='image/png' href='https://www.clickfunnels.com/favicon.ico'>
    </link>
    <!-- Fonts -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">
    {{--
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous"> --}}

    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css">
    <!-- Google Fonts -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap">
    <!-- Bootstrap core CSS -->
    {{-- <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.0/css/bootstrap.min.css" rel="stylesheet"> --}}
    <link rel="stylesheet" href="{{ asset('css/main.css') }}">
    <!-- Material Design Bootstrap -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.19.1/css/mdb.min.css" rel="stylesheet">
    <!-- Styles -->
    <!-- Scripts -->
    {{-- <script src="{{ mix('js/app.js') }}" defer></script> --}}
    <style>
        .fa, .fas {
            font-size: 30px;
            border: 1px solid #862c2d;
            padding: 10px;
            border-radius: 50%;
            background: #000;
            color: #eee;
        }
    </style>
</head>

<body>

    <div style="background: #eee;height: 125px">
        <div class="container" style="text-align: center;">
            <img src="https://images.clickfunnels.com/cdn-cgi/image/fit=scale-down,width=525,quality=75/https://images.clickfunnels.com/93/58c4f49d2141ea91f98fd9248566bc/detoki.png"
                width="200px" style="margin-top: 30px;" alt="">
        </div>
    </div>
    <nav class="navbar navbar-light" style="background: #84142d">
        <div class="container-fluid">
            <h1 class="navbar-brand"
                style=" margin: auto;text-align: center; font-size: 23px; color: rgb(255, 255, 255);    font-weight: 500;">
                TODAYS OFFER: DETOKI PACK FOR <b style="color:rgb(255, 227, 0)">KSH 4320</b> NOT KSH 5000</h1>
        </div>
    </nav>

    <!--Main layout-->
    <main class="mt-5 pt-4" style="background: #eee;margin-top: 0 important;    margin-bottom: 60px;">

        <div class="container wow fadeIn">
            @if(session()->has('message'))
            <div class="alert alert-success">
                {{ session()->get('message') }}
            </div>
            @endif

            @if($errors->any())
            @foreach ($errors->all() as $error)
            <div class="alert alert-danger">{{ $error }}</div>
            @endforeach
            @endif

            {{-- @if($errors->any())
            <div>
                <ul class="alert alert-danger">
                    <li>
                        {{ implode('', $errors->all(':message')) }}#
            </li>
            </ul>
        </div>
        @endif --}}

        <!-- Heading -->
        <h2 class="my-5 h2 text-center" style="color: rgb(132, 20, 45);">Place Your Order</h2>
        <!--Grid row-->
        <div class="row">
            <!--Grid column-->
            <div class="col-md-7 mb-6">
                <!--Card-->
                <div class="card">
                    <!--Card content-->
                    <form action="{{ route('orders.store') }}" method="POST" class="card-body">
                        @csrf
                        <!--Grid row-->
                        <div class="row">
                            <div class="col-lg-12 col-md-12 mb-4">
                                <label for="country" style="color: #7b7b7bb5;">Product</label>
                                <select class="custom-select d-block w-100" id="country" required name="item">
                                    <option value="">Select Item</option>

                                    <option value="1 DETOKI DETOX FOOT PATCHES @KSH4320" @if (request()->get('id') == 1)
                                        selected
                                        @endif>1 DETOKI DETOX FOOT PATCHES @KSH4320</option>
                                    <option value="2 DETOKI DETOX FOOT PATCHES @KSH6320" @if (request()->get('id') == 2)
                                        selected
                                        @endif>2 DETOKI DETOX FOOT PATCHES @KSH6320</option>
                                    <option value="3 DETOKI DETOX FOOT PATCHES @KSH9870" @if (request()->get('id') == 3)
                                        selected
                                        @endif>3 DETOKI DETOX FOOT PATCHES @KSH9870</option>
                                </select>
                                <div class="invalid-feedback">
                                    Please select a valid country.
                                </div>
                            </div>
                            <!--Grid column-->
                            <div class="col-md-12 mb-2">

                                <!--firstName-->
                                <div class="md-form ">
                                    <input type="text" id="firstName" class="form-control" name="full_name">
                                    <label for="firstName" class="">Full name</label>
                                </div>
                            </div>
                            <!--Grid column-->
                        </div>
                        <!--Grid row-->
                        <div class="md-form mb-5">
                            <input type="text" name="address" id="address" class="form-control"
                                placeholder="Address/street/major landmark">
                            <label for="address" class="">Address</label>
                        </div>

                        <!--Grid row-->
                        <div class="md-form ">
                            <input type="text" id="firstName" class="form-control" name="city">
                            <label for="city" class="">City</label>
                        </div>
                        <!--Grid column-->

                        <label for="country" style="color: #7b7b7bb5;">State/Region</label>
                        <select class="custom-select d-block w-100" id="country" name="region">
                            <option value="">State/Region</option>
                            <option value="Nairobi">Nairobi</option>
                            <option value="Coast">Coast</option>
                            <option value="Nyanza">Nyanza</option>
                            <option value="Central">Central</option>
                            <option value="Rift valley">Rift valley</option>
                            <option value="Eastern">Eastern</option>
                            <option value="Western">Western</option>
                            <option value="North Eastern">North Eastern</option>
                        </select>

                        <!--Grid column-->

                        <!--Grid row-->

                        <!--email-->
                        <div class="md-form mb-5">
                            <input type="text" id="email" class="form-control" placeholder="youremail@example.com" name="email">
                            <label for="email" class="">Email (optional)</label>
                        </div>

                        <!--address-->
                        <div class="md-form mb-5">
                            <input type="text" id="phone" class="form-control" placeholder="+254..." name="phone">
                            <label for="phone">Phone Number</label>
                        </div>
                        <hr>

                        <hr class="mb-4">
                        <button class="btn btn-primary btn-lg " type="submit">Complete order</button>
                        <a class="btn  btn-lg " style="background: #84142d; color: #fff"
                            href="https://infod7e4cf.clickfunnels.com/optin1610366060595">Continue shopping</a>
                    </form>

                </div>
                <!--/.Card-->
            </div>


            <div class="col-md-5 mb-4">
                <!-- Cart -->
                <ul class="list-group mb-3 z-depth-1">
                    <li class="list-group-item d-flex justify-content-between lh-condensed">
                        <div class="row">
                            <div class="col-md-2">
                                <i class="fas fa-comment-dollar"></i>
                            </div>
                            <div class="col-md-10">
                                <h6 class="my-0">100% MONEY BACK GUARANTEE</h6>
                                <small class="text-muted">If you're not satisfied with the product, return it and we
                                    will
                                    give your money back - no questions asked</small>
                            </div>
                        </div>
                        {{-- <span class="text-muted">$12</span> --}}
                    </li>
                    <li class="list-group-item d-flex justify-content-between lh-condensed">
                        <div class="row">
                            <div class="col-md-2">
                                <i class="fas fa-truck"></i>
                            </div>
                            <div class="col-md-10">
                                <h6 class="my-0">DELIVERY IS FREE</h6>
                                <small class="text-muted">This price includes all taxes and VAT, and delivery is free.
                                    The product will be delivered to your doorstep within 2-7 business days from the
                                    date you placed the order</small>
                            </div>
                        </div>
                    </li>
                    <li class="list-group-item d-flex justify-content-between lh-condensed">
                        <div class="row">
                            <div class="col-md-2">
                                <i class="fas fa-file-invoice-dollar"></i>
                            </div>
                            <div class="col-md-10">
                                <h6 class="my-0">PAYMENT METHOD</h6>
                                <small class="text-muted">Payment method is cash on delivery. You pay nothing in
                                    advance.</small>
                            </div>
                        </div>
                        {{-- <span class="text-muted">$5</span> --}}
                    </li>
                </ul>
                <!-- Cart -->

            </div>


        </div>
        <!--Grid row-->
        </div>
    </main>
    <!--Main layout-->
    <nav class="navbar fixed-bottom navbar-light " style="background: #84142d">
        <div class="container-fluid">
            <span style="margin: auto; color: #fff">For inquiries contact us on <a href="mailto:sales@dala.market"
                    target="_blank" style="color: #f0f0f0">sales@dala.market</a></span>
            {{-- For inquiries contact us on <a class="navbar-brand" href="#">sales@dala.market</a> --}}
        </div>
    </nav>
</body>
<!-- JQuery -->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<!-- Bootstrap tooltips -->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.4/umd/popper.min.js"></script>
<!-- Bootstrap core JavaScript -->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.0/js/bootstrap.min.js">
</script>
<!-- MDB core JavaScript -->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.19.1/js/mdb.min.js"></script>

</html>
