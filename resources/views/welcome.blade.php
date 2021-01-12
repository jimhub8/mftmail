<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

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
    <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.0/css/bootstrap.min.css" rel="stylesheet">
    <!-- Material Design Bootstrap -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.19.1/css/mdb.min.css" rel="stylesheet">
    <!-- Styles -->
    <!-- Scripts -->
    {{-- <script src="{{ mix('js/app.js') }}" defer></script> --}}
</head>

<body>

    <!--Main layout-->
    <main class="mt-5 pt-4">
        <div class="container wow fadeIn">
            @if(session()->has('message'))
            <div class="alert alert-success">
                {{ session()->get('message') }}
            </div>
            @endif

            <!-- Heading -->
            <h2 class="my-5 h2 text-center" style="color: rgb(132, 20, 45);">Place Your Order</h2>

            <!--Grid row-->
            <div class="row">

                <!--Grid column-->
                <div class="col-md-10 mb-6 offset-1">

                    <!--Card-->
                    <div class="card">

                        <!--Card content-->

                        <form action="{{ route('send') }}" method="POST" class="card-body">
                            @csrf

                            <!--Grid row-->
                            <div class="row">

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
                            <div class="row">

                                <!--Grid column-->
                                <div class="col-lg-12 col-md-12 mb-4">

                                    <label for="country">City</label>
                                    <select class="custom-select d-block w-100" id="country" required name="city">
                                        <option value="">City/Region</option>
                                        <option value="Nairobi">Nairobi</option>
                                        <option value="Mombasa">Mombasa</option>
                                        <option value="Kisumu">Kisumu</option>
                                    </select>
                                    <div class="invalid-feedback">
                                        Please select a valid country.
                                    </div>

                                </div>
                                <!--Grid column-->

                            </div>
                            <!--Grid row-->

                            <!--email-->
                            <div class="md-form mb-5">
                                <input type="text" id="email" class="form-control" placeholder="youremail@example.com">
                                <label for="email" class="">Email (optional)</label>
                            </div>

                            <!--address-->
                            <div class="md-form mb-5">
                                <input type="text" id="phone" class="form-control" placeholder="+254..." name="phone">
                                <label for="phone" class="">Phone Number</label>
                            </div>
                            <hr>

                            <hr class="mb-4">
                            <button class="btn btn-primary btn-lg btn-block" type="submit">Complete order</button>

                        </form>

                    </div>
                    <!--/.Card-->

                </div>
                <!--Grid column-->

                <!--Grid column-->

                <!--Grid column-->

            </div>
            <!--Grid row-->

        </div>
    </main>
    <!--Main layout-->

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
