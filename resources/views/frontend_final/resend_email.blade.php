@extends('frontend_final.Layout.masters')
@section('content')

<style>
body {
  font-family: 'Poppins', sans-serif;
  background: radial-gradient(circle at center, #3f0071, #1a0033);
  color: #fff;
}
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

            <button id="resendBtn" style="margin-left:243px;">Resend Email</button>

            <div id="loader" style="display:block; margin-left:243px;">
                Please wait... (<span id="countdown">2:00</span>)
            </div>

            <p class="small" style="margin-left:24%;">Didn’t get it? Try resending or contact <b>support@writing-space.com</b></p>
        </div>
    </div>
</section>

<script>
let cooldown = true;
let countdownTime = 120; // 2 minutes
let countdownInterval;
const btn = document.getElementById('resendBtn');
const loader = document.getElementById('loader');
const countdownDisplay = document.getElementById('countdown');

// Start initial timer on page load
window.onload = function() {
    btn.disabled = true;
    loader.style.display = 'block';
    startCountdown();
}

// Countdown function
function startCountdown() {
    countdownDisplay.textContent = formatTime(countdownTime);
    countdownInterval = setInterval(() => {
        if(countdownTime > 0) {
            countdownTime--;
            countdownDisplay.textContent = formatTime(countdownTime);
        } else {
            clearInterval(countdownInterval);
            btn.disabled = false;
            loader.style.display = 'none';
            cooldown = false;
        }
    }, 1000);
}

function formatTime(seconds) {
    let m = Math.floor(seconds / 60);
    let s = seconds % 60;
    return `${m}:${s < 10 ? '0'+s : s}`;
}

// AJAX resend function
btn.addEventListener('click', function() {
    if(cooldown) return;

    cooldown = true;
    btn.disabled = true;
    loader.style.display = 'block';
    countdownTime = 120;
    countdownDisplay.textContent = formatTime(countdownTime);

    // AJAX request
    let xhr = new XMLHttpRequest();
    xhr.open("POST", "{{ route('verification.resend') }}", true);
    xhr.setRequestHeader("X-CSRF-TOKEN", "{{ csrf_token() }}");
    xhr.setRequestHeader("Accept", "application/json");
    xhr.setRequestHeader("Content-Type", "application/json;charset=UTF-8");

    xhr.onreadystatechange = function() {
        if(xhr.readyState === XMLHttpRequest.DONE) {
            let status = xhr.status;
            try {
                let res = JSON.parse(xhr.responseText);
                if(status >= 200 && status < 300){
                    alert(res.message || 'Verification email sent successfully!');
                    // Optional: play sound
                    // new Audio('https://embed.tawk.to/_s/v4/assets/audio/chat_sound.mp3').play();
                } else {
                    alert(res.message || 'Failed to resend verification email.');
                }
            } catch(e) {
                alert('Something went wrong.');
            }
        }
    }

    xhr.send(JSON.stringify({}));

    startCountdown(); // restart timer
});
</script>

@endsection
