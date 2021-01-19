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
        .fa,
        .fas {
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
        <div class="card" style="width: 80%;margin: auto;">
            <table class="table table-striped table-hover">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Order No.</th>
                        <th scope="col">Full Name</th>
                        <th scope="col">Email</th>
                        <th scope="col">Address</th>
                        <th scope="col">City</th>
                        <th scope="col">Phone</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($orders as $key => $order)
                    <tr>
                        <th scope="row">{{ $key + 1 }}</th>
                        <td>{{ $order->order_no }}</td>
                        <td>{{ $order->full_name }}</td>
                        <td>{{ $order->email }}</td>
                        <td>{{ $order->address }}</td>
                        <td>{{ $order->city }}</td>
                        <td>{{ $order->phone }}</td>
                    </tr>
                    @endforeach

                </tbody>
            </table>
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
