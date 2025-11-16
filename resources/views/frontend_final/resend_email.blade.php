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
    <p style="margin-left: 240px;">Thank you for signing up with <b>Writing Space</b>!<br>
       We’ve sent a verification email from <b>support@writing-space.com</b>.</p>

    <p style="margin-left: 240px;">Check your <b>Inbox</b> and <b>Spam/Junk</b> folders.<br>
       Click the link inside to verify your account.</p>

    <button class="gradient-button fw-bold login-button" id="resendBtn" style="margin-left:243px;">
        Resend Email
    </button>

    <div style="display:block; margin-left:243px;" id="loader">
        Please wait... (<span id="countdown">2:00</span>)
    </div>

    <p class="small" style="margin-left: 24%;">Didn’t get it? Try resending or contact <b>support@writing-space.com</b></p>
    </div>
    </div>
</section>

<script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
<script>
let cooldown = true;
let countdownTime = 120; // 2 minutes
let countdownInterval;

function startTimer() {
    const btn = document.getElementById('resendBtn');
    const loader = document.getElementById('loader');
    const countdownDisplay = document.getElementById('countdown');

    loader.style.display = 'block';
    btn.disabled = true;

    countdownInterval = setInterval(() => {
        if (countdownTime > 0) {
            countdownTime--;
            let minutes = Math.floor(countdownTime / 60);
            let seconds = countdownTime % 60;
            countdownDisplay.textContent = `${minutes}:${seconds < 10 ? '0' + seconds : seconds}`;
        } else {
            clearInterval(countdownInterval);
            btn.disabled = false;
            loader.style.display = 'none';
            cooldown = false;
        }
    }, 1000);
}

// Start initial countdown
window.onload = function() {
    startTimer();
};

// Resend verification email using Axios (works with Laravel CSRF)
document.getElementById('resendBtn').addEventListener('click', function() {
    if(cooldown) return;

    const btn = this;
    const loader = document.getElementById('loader');
    const countdownDisplay = document.getElementById('countdown');

    cooldown = true;
    btn.disabled = true;
    loader.style.display = 'block';
    countdownTime = 120;
    countdownDisplay.textContent = '2:00';
    startTimer();

    axios.post("{{ route('verification.resend') }}", {}, {
        headers: {
            'X-CSRF-TOKEN': "{{ csrf_token() }}",
            'Accept': 'application/json'
        }
    })
    .then(function(response) {
        if(response.data.message){
            alert(response.data.message);
        }
    })
    .catch(function(error) {
        let msg = 'Failed to resend verification email.';
        if(error.response && error.response.data && error.response.data.message){
            msg = error.response.data.message;
        }
        alert(msg);
        cooldown = false;
        btn.disabled = false;
        loader.style.display = 'none';
    });
});
</script>

@endsection
