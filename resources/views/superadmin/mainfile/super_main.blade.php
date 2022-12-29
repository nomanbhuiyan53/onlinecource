@php
    $user = Auth::user();
    $status = $user->status;
@endphp


@if ($status == 1)
    @include('superadmin.mainfile.super_css')
    @include('superadmin.mainfile.super_header')
    @include('superadmin.mainfile.super_sidemenu')
    <main id="main" class="main">
        @yield('section')
    </main><!-- End #main -->
    @include('superadmin.mainfile.super_footer')
@else
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
  </head>
  <body>
    
    <div class="container text-center mt-5">
        <div class="row">
            <div class="col-12 w-100">
                <div class="card">
                    <div class="card-body">
                        <h2>Your Account not Approved</h2>
                        <h3>Please wait for approve ....</h3>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
  </body>
</html>
    
@endif

