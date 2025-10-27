@extends('frontend_final.Layout.masters')
@section('content')

<style>
body {
  font-family: 'Poppins', sans-serif;
  background: radial-gradient(circle at center, #3f0071, #1a0033) !important;
  color: #fff;
}
.verify-wrapper {
  text-align: center;
  min-height: 80vh;
  display: flex;
  flex-direction: column;
  justify-content: center;
  align-items: center;
  padding-top: 50px;
}
h1 {
  font-size: 42px;
  margin-bottom: 10px;
}
p {
  font-size: 18px;
  max-width: 500px;
  line-height: 1.6;
  margin: 0 auto 25px;
}
button {
  background-color: #007bff;
  border: none;
  padding: 12px 30px;
  font-size: 16px;
  color: #fff;
  border-radius: 6px;
  cursor: pointer;
  transition: background 0.3s ease;
}
button:hover:not(:disabled) {
  background-color: #0056b3;
}
button:disabled {
  opacity: 0.6;
  cursor: not-allowed;
}
.small {
  font-size: 14px;
  opacity: 0.8;
  margin-top: 20px;
}
#loader {
  display: none;
  margin-top: 10px;
}
</style>


 <section class="bg-dark section-card-phases pt-160px">
        <div class="container d-flex justify-content-center mb-5">
            <div class="bordered-card p-5 col-md-10 forms-custom login-signup-form">
   
    <h1 style="
    margin-left: 240px;
">Check Your Email</h1>
    <p>Thank you for signing up with <b>Writing Space</b>!<br>
       We’ve sent a verification email from <b>support@writing-space.com</b>.</p>

    <p>Please check your <b>Inbox</b> and <b>Spam/Junk</b> folders.<br>
       Click the link inside that email to verify your account.</p>

    <p>Also, make sure to <b>whitelist</b> our email ID for future order updates and communication.</p>

    <button class="gradient-button fw-bold login-button w-100" id="resendBtn" onclick="resendVerification()" style="
    margin-left: 372px;
">Resend Email</button>
    <div style="display: block;margin-left: 357px;" id="loader">Please wait... (2 minutes)</div>

    <p class="small">Didn’t get it? Try resending or contact <b>support@writing-space.com</b></p>
    </div>
    </div>
</section>

<script>
function resendVerification() {
    let btn = document.getElementById('resendBtn');
    let loader = document.getElementById('loader');

    btn.disabled = true;
    loader.style.display = 'block';

    fetch("{{ route('verification.resend') }}", {
        method: "POST",
        headers: {
            "X-CSRF-TOKEN": "{{ csrf_token() }}",
            "Accept": "application/json"
        }
    })
    .then(res => res.json())
    .then(data => {})
    .catch(err => console.error(err));

    // cooldown timer - 2 minutes
    let twoMinutes = 2 * 60 * 1000;
    setTimeout(() => {
        btn.disabled = false;
        loader.style.display = 'none';
    }, twoMinutes);
}
</script>

@endsection
