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

/* Custom Modal Styles */
.alert-modal .modal-content {
  border-radius: 15px;
  border: none;
  box-shadow: 0 10px 30px rgba(0,0,0,0.3);
}
.alert-modal .modal-header {
  border-bottom: none;
  padding: 20px 20px 10px;
}
.alert-modal .modal-body {
  padding: 10px 20px 20px;
  text-align: center;
}
.alert-modal .btn-close {
  position: absolute;
  right: 15px;
  top: 15px;
}
.success-icon {
  font-size: 48px;
  color: #28a745;
  margin-bottom: 15px;
}
.error-icon {
  font-size: 48px;
  color: #dc3545;
  margin-bottom: 15px;
}
.warning-icon {
  font-size: 48px;
  color: #ffc107;
  margin-bottom: 15px;
}
.modal-btn {
  padding: 10px 25px;
  border-radius: 8px;
  font-weight: 600;
  transition: all 0.3s;
}
.modal-btn-success {
  background: linear-gradient(45deg, #28a745, #20c997);
  border: none;
}
.modal-btn-danger {
  background: linear-gradient(45deg, #dc3545, #e83e8c);
  border: none;
}
.modal-btn-primary {
  background: linear-gradient(45deg, #007bff, #0056b3);
  border: none;
}
</style>

<!-- Alert Modal -->
<div class="modal fade alert-modal" id="alertModal" tabindex="-1" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header" style="background: black;">
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body" style="background: black;">
        <div id="modalIcon"></div>
        <h4 id="modalTitle" class="mb-3"></h4>
        <p id="modalMessage" class="mb-4"></p>
        <button type="button" class="btn modal-btn text-white" id="modalActionBtn" data-bs-dismiss="modal">
          Continue
        </button>
      </div>
    </div>
  </div>
</div>

<section class="bg-dark section-card-phases pt-160px">
    <div class="container d-flex justify-content-center mb-5">
        <div class="bordered-card p-5 col-md-10 forms-custom login-signup-form">

    <h1 style="margin-left: 240px;">Check Your Email</h1>
    <p style="margin-left: 240px;">Thank you for signing up with <b>Writing Space</b>!<br>
       We've sent a verification email from <b>support@writing-space.com</b>.</p>

    <p style="margin-left: 240px;">Check your <b>Inbox</b> and <b>Spam/Junk</b> folders.<br>
       Click the link inside to verify your account.</p>

    <button class="gradient-button fw-bold login-button" id="resendBtn"
            onclick="resendVerification()" style="margin-left:243px;">
        Resend Email
    </button>

    <div style="display:block; margin-left:243px;" id="loader">
        Please wait... (<span id="countdown">2:00</span>)
    </div>

    <p class="small" style="margin-left: 24%;">
        Didn't get it? Try resending or contact <b>support@writing-space.com</b>
    </p>
    </div>
    </div>
</section>

<script>
let cooldown = true;
let countdownTime = 10; // 10 seconds
let countdownInterval;

// Modal show karne ka function
function showModal(type, title, message, redirectUrl = null) {
    const modal = new bootstrap.Modal(document.getElementById('alertModal'));
    const modalIcon = document.getElementById('modalIcon');
    const modalTitle = document.getElementById('modalTitle');
    const modalMessage = document.getElementById('modalMessage');
    const modalActionBtn = document.getElementById('modalActionBtn');
    
    // Set icon based on type
    if (type === 'success') {
        modalIcon.innerHTML = '<i class="fas fa-check-circle success-icon"></i>';
        modalActionBtn.className = 'btn modal-btn modal-btn-success text-white';
    } else if (type === 'error') {
        modalIcon.innerHTML = '<i class="fas fa-exclamation-circle error-icon"></i>';
        modalActionBtn.className = 'btn modal-btn modal-btn-danger text-white';
    } else if (type === 'warning') {
        modalIcon.innerHTML = '<i class="fas fa-exclamation-triangle warning-icon"></i>';
        modalActionBtn.className = 'btn modal-btn modal-btn-primary text-white';
    }
    
    modalTitle.textContent = title;
    modalMessage.textContent = message;
    
    // Agar redirect URL hai to button par click karne par redirect karo
    if (redirectUrl) {
        modalActionBtn.onclick = function() {
            window.location.href = redirectUrl;
        };
    } else {
        modalActionBtn.onclick = null;
    }
    
    modal.show();
}

window.onload = function() {
    const btn = document.getElementById('resendBtn');
    const loader = document.getElementById('loader');
    const countdownDisplay = document.getElementById('countdown');

    btn.disabled = true;
    loader.style.display = 'block';

    countdownInterval = setInterval(() => {
        if (countdownTime > 0) {
            countdownTime--;
            countdownDisplay.textContent = `0:${countdownTime < 10 ? '0' + countdownTime : countdownTime}`;
        } else {
            clearInterval(countdownInterval);
            btn.disabled = false;
            loader.style.display = 'none';
            cooldown = false;
        }
    }, 1000);
};

function resendVerification() {
    if (cooldown) return;

    const btn = document.getElementById('resendBtn');
    const loader = document.getElementById('loader');
    const countdownDisplay = document.getElementById('countdown');

    cooldown = true;
    btn.disabled = true;
    loader.style.display = 'block';
    countdownTime = 10;
    countdownDisplay.textContent = '0:10';

    fetch("{{ route('verification.resend') }}", {
        method: "POST",
        headers: {
            "X-CSRF-TOKEN": "{{ csrf_token() }}",
            "Accept": "application/json"
        }
    })
    .then(async (res) => {
        const data = await res.json();
        if (!res.ok) throw data;
        return data;
    })
    .then(data => {
        if (data.already_verified) {
            showModal(
                'success', 
                'Email Verified!', 
                'Your email has already been verified. You can now login to your account.',
                "{{ route('login') }}"
            );
        } else if (data.success) {
            showModal(
                'success', 
                'Email Sent!', 
                'Verification email has been sent successfully. Please check your inbox.'
            );
        }
    })
    .catch(err => {
        console.error('Error:', err);
        
        if (err.session_expired) {
            showModal(
                'error',
                'Session Expired',
                'Your verification session has expired. Please register again to continue.',
                "{{ route('register') }}"
            );
        } else if (err.message) {
            showModal(
                'error',
                'Error',
                err.message
            );
        } else {
            showModal(
                'error',
                'Error',
                'Failed to resend verification email. Please try again.'
            );
        }
        
        // Reset UI in case of error
        clearInterval(countdownInterval);
        btn.disabled = false;
        loader.style.display = 'none';
        cooldown = false;
    });

    // Timer continue for success cases
    countdownInterval = setInterval(() => {
        if (countdownTime > 0) {
            countdownTime--;
            countdownDisplay.textContent = `0:${countdownTime < 10 ? '0' + countdownTime : countdownTime}`;
        } else {
            clearInterval(countdownInterval);
            btn.disabled = false;
            loader.style.display = 'none';
            cooldown = false;
        }
    }, 1000);
}
</script>

@endsection