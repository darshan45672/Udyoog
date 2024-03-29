@extends('front.layout.app')

@section('main')
<section class="section-5">
    <div class="container my-5">
        <div class="py-lg-2"></div>
        <div class="row d-flex justify-content-center">
            <div class="col-md-5">
                <div class="card shadow border-0 p-5">
                    <h1 class="h3">Register</h1>
                    <form action="{{ route('register') }}" method="POST">
                        @csrf
                        <div class="form-group mb-3">
                            <label for="name" class="mb-2">Name*</label>
                            <input type="text" name="name" id="name" class="form-control" placeholder="Enter Name" required >
                        </div> 
                        <div class="form-group mb-3">
                            <label for="email" class="mb-2">Email*</label>
                            <input type="email" name="email" id="email" class="form-control" placeholder="Enter Email" required>
                        </div> 
                        <div class="form-group mb-3">
                            <label for="password" class="mb-2">Password*</label>
                            <input type="password" name="password" id="password" class="form-control" placeholder="Enter Password" required>
                        </div> 
                        <div class="form-group mb-3">
                            <label for="confirm_password" class="mb-2">Confirm Password*</label>
                            <input type="password" name="password_confirmation" id="confrim_password" class="form-control" placeholder="Enter Password" required>
                        </div> 
                        <button class="btn btn-primary mt-2">Register</button>
                    </form>                    
                </div>
                <div class="mt-4 text-center">
                    <p>Have an account? <a  href="{{ route('login') }}">Login</a></p>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
@section('CustomJS')
    <script>
        // $("#registration").submit(function (e) {
        //    e.preventDefault(); 
        //    $.ajax({
        //     url: '',
        //     type: 'post',
        //     data: $('#registration').serializeArray(),
        //     dataType: 'json',
        //     sucess: function (response) {
                
        //     }
        //    })
        // });
    </script>
@endsection