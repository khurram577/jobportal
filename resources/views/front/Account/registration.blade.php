@extends('front.layouts.app')

@section('main')
<section class="section-5">
    <div class="container my-5">
        <div class="py-lg-2">&nbsp;</div>
        <div class="row d-flex justify-content-center">
            <div class="col-md-5">
                <div class="card shadow border-0 p-5">
                    <h1 class="h3">Register</h1>

                    <form action="" name="registrationform" id="registrationform" >

                        <div class="mb-3">
                            <label for="" class="mb-2">Name*</label>
                            <input type="text" name="name" id="name" class="form-control" placeholder="Enter Name" required>
                            <p></p>
                        </div>
                        <div class="mb-3">
                            <label for="" class="mb-2">Email*</label>
                            <input type="text" name="email" id="email" class="form-control" placeholder="Enter Email">
                            <p></p>
                        </div>
                        <div class="mb-3">
                            <label for="" class="mb-2">Password*</label>
                            <input type="password" name="Password" id="Password" class="form-control" placeholder="Enter Password">
                            <p></p>
                        </div>
                        <div class="mb-3">
                            <label for="" class="mb-2">Confirm Password*</label>
                            <input type="password" name="Confirm_Password" id="Confirm Password" class="form-control" placeholder="Plz Confirm Password">
                            <p></p>
                        </div>
                        <button class="btn btn-primary mt-2">Register</button>
                    </form>
                </div>
                <div class="mt-4 text-center">
                    <p>Have an account? <a  href="login.html">Login</a></p>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
@section('custom-js')
@csrf
<script>
 $("#registrationform").submit(function(e){
     e.preventDefault();
     $.ajax({
         url: '{{ route("account.processregistration") }}',
         type: 'POST',
         data: $("#registrationform").serializeArray(),
         dataType: 'json',
         success: function(response){
            if (response.status == false) {
                var errors - response.errors;
                if (errors.name) {
                    $("#name").addclass('is-invalid').siblings('p').addclass('invalid-feedback').html(errors.name);
                } else {
                    $("#name").removeClass('is-invalid').siblings('p').removeClass('invalid-feedback').html('');
                }
                if (errors.email) {
                    $("#email").addclass('is-invalid').siblings('p').addclass('invalid-feedback').html(errors.email);
                } else {
                    $("#email").removeClass('is-invalid').siblings('p').removeClass('invalid-feedback').html('');
                }
                if (errors.password) {
                    $("#password").addclass('is-invalid').siblings('p').addclass('invalid-feedback').html(errors.password);
                } else {
                    $("#password").removeClass('is-invalid').siblings('p').removeClass('invalid-feedback').html('');
                }
                if (errors.confirm_password) {
                    $("#confirm_password").addclass('is-invalid').siblings('p').addclass('invalid-feedback').html(errors.confirm.password);
                } else {
                    $("#confirm_password").removeClass('is-invalid').siblings('p').removeClass('invalid-feedback').html('');
                }
            }
                

         }
 });
 });
</script>
@endsection
