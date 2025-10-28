@extends('frontend_final.Layout.masters')
@section('content')

<style>
body {
  font-family: 'Poppins', sans-serif;
  background: radial-gradient(circle at center, #3f0071, #1a0033) !important;
  color: #fff;
}
.verify-wrapper { text-align:center; min-height:80vh; display:flex; flex-direction:column; justify-content:center; align-items:center; padding-top:50px; }
button { background-color:#007bff; border:none; padding:12px 30px; font-size:16px; color:#fff; border-radius:6px; cursor:pointer; transition:0.3s; }
button:hover:not(:disabled) { background:#0056b3; }
button:disabled { opacity:.6; cursor:not-allowed; }
.small { font-size:14px; opacity:.8; margin-top:20px; }
#loader { display:none; margin-top:10px; }
</style>

<section class="bg-dark section-card-phases pt-160px">
    <div class="container d-flex justify-content-center mb-5">
        <div class="bordered-card p-5 col-md-10 forms-custom login-signup-form">

    <h1 style="margin-left: 240px;">Check Your Email</h1>
    <p>Thank you for signing up with <b>Writing Space</b>!<br>
       We’ve sent a verification email from <b>support@writing-space.com</b>.</p>

    <p>Check your <b>Inbox</b> and <b>Spam/Junk</b> folders.<br>
       Click the link inside to verify your account.</p>

    <button class="gradient-button fw-bold login-button" id="resendBtn"
            onclick="resendVerification()" style="margin-left:372px;">
        Resend Email
    </button>

    <div style="display:block; margin-left:357px;" id="loader">
        Please wait... (2 minutes)
    </div>

    <p class="small">Didn’t get it? Try resending or contact <b>support@writing-space.com</b></p>
    </div>
    </div>
</section>

<script>
let cooldown = false;

function resendVerification() {

    if (cooldown) return;

    let btn = document.getElementById('resendBtn');
    let loader = document.getElementById('loader');

    btn.disabled = true;
    loader.style.display = 'block';
    cooldown = true;

    fetch("{{ route('verification.resend') }}", {
        method: "POST",
        headers: {
            "X-CSRF-TOKEN": "{{ csrf_token() }}",
            "Accept": "application/json"
        }
    })
    .then(res => res.json())
    .then(data => console.log(data))
    .catch(err => console.error(err));

    // 2 minute cooldown
    setTimeout(() => {
        cooldown = false;
        btn.disabled = false;
        loader.style.display = 'none';
    }, 2 * 60 * 1000);
}
</script>

@endsection
