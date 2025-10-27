@extends('frontend_final.Layout.masters')
@section('content')
<style>
body {
  margin: 0;
  font-family: 'Poppins', sans-serif;
  background: radial-gradient(circle at center, #3f0071, #1a0033);
  color: #fff;
  text-align: center;
  height: 100vh;
  display: flex;
  flex-direction: column;
  justify-content: center;
  align-items: center;
}
.wrapper-center {
  text-align: center;
  min-height: 80vh;
  display: flex;
  flex-direction: column;
  justify-content: center;
  align-items: center;
}
h1 {
  font-size: 42px;
  margin-bottom: 10px;
  color: #fff;
}
p {
  font-size: 18px;
  max-width: 500px;
  line-height: 1.6;
  margin: 0 auto 25px;
  color: #fff;
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
button:disabled {
  opacity: 0.6;
  cursor: not-allowed;
}
button:hover:not(:disabled) {
  background-color: #0056b3;
}
.small {
  font-size: 14px;
  opacity: 0.8;
  margin-top: 20px;
}
#loader {
  display: none;
  margin-top: 15px;
}
.spinner {
  border: 4px solid rgba(255,255,255,0.2);
  border-top: 4px solid #fff;
  border-radius: 50%;
  width: 28px;
  height: 28px;
  animation: spin 1s linear infinite;
}
@keyframes spin {
  to { transform: rotate(360deg); }
}
</style>


<section class="bg-dark pt-160px">
    <div class="container wrapper-center">

        <img src="{{ asset('verify-email-banner.png') }}" alt="Verify Email Banner" width="320" style="margin-bottom:20px;">
        <h1>Check Your Email</h1>
        <p>Thank you for signing up with <b>Writing Space</b>!<br>
           We’ve sent a verification email from <b>support@writing-space.com</b>.</p>

        <p>Please check your <b>Inbox</b> and <b>Spam/Junk</b> folders.<br>
           Click the link inside that email to verify your account.</p>

        <p>Also, make sure to <b>whitelist</b> our email ID for future order updates and communication.</p>

        <!-- ✅ Button with loader -->
        <button id="resendBtn" onclick="resendVerification()">Resend Email</button>
        <div id="loader">
            <div class="spinner"></div>
            <p class="mt-2">Sending, please wait...</p>
        </div>

        <p class="small">Didn’t get it? Try resending or contact <b>support@writing-space.com</b></p>
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
            },
        })
        .then(res => res.json())
        .then(data => {
            console.log(data);
        })
        .catch(err => console.error(err));

        let twoMinutes = 2 * 60 * 1000;
        localStorage.setItem('resendTimer', Date.now() + twoMinutes);
    }

    window.onload = function() {
        let timer = localStorage.getItem('resendTimer');
        let btn = document.getElementById('resendBtn');
        let loader = document.getElementById('loader');

        if (timer && Date.now() < timer) {
            btn.disabled = true;
            loader.style.display = 'block';

            let timeLeft = timer - Date.now();
            setTimeout(() => {
                btn.disabled = false;
                loader.style.display = 'none';
                localStorage.removeItem('resendTimer');
            }, timeLeft);
        }
    }
</script>

@endsection
