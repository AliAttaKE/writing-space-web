<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Email Verification - Writing Space</title>
    <style>
        body {
            font-family: 'Poppins', sans-serif;
            background: radial-gradient(circle at center, #3f0071, #1a0033);
            color: #fff;
            margin: 0;
            padding: 0;
            min-height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
        }
        
        .container {
            display: flex;
            justify-content: center;
            width: 100%;
            max-width: 1200px;
            padding: 20px;
        }
        
        .bordered-card {
            background: rgba(255, 255, 255, 0.1);
            border-radius: 12px;
            border: 1px solid rgba(255, 255, 255, 0.2);
            padding: 40px;
            width: 100%;
            max-width: 800px;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.3);
        }
        
        h1 {
            text-align: center;
            margin-bottom: 20px;
            font-weight: 600;
        }
        
        p {
            line-height: 1.6;
            margin-bottom: 15px;
        }
        
        button {
            background-color: #007bff;
            border: none;
            padding: 12px 30px;
            font-size: 16px;
            color: #fff;
            border-radius: 6px;
            cursor: pointer;
            transition: 0.3s;
            display: block;
            margin: 20px auto;
        }
        
        button:hover:not(:disabled) {
            background: #0056b3;
            transform: translateY(-2px);
        }
        
        button:disabled {
            opacity: .6;
            cursor: not-allowed;
        }
        
        .small {
            font-size: 14px;
            opacity: .8;
            margin-top: 20px;
            text-align: center;
        }
        
        #loader {
            text-align: center;
            margin-top: 10px;
            display: none;
        }
        
        .message {
            padding: 10px;
            border-radius: 5px;
            margin: 15px 0;
            text-align: center;
            display: none;
        }
        
        .success {
            background-color: rgba(40, 167, 69, 0.2);
            border: 1px solid rgba(40, 167, 69, 0.5);
        }
        
        .error {
            background-color: rgba(220, 53, 69, 0.2);
            border: 1px solid rgba(220, 53, 69, 0.5);
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="bordered-card">
            <h1>Check Your Email</h1>
            <p>Thank you for signing up with <b>Writing Space</b>!<br>
               We've sent a verification email from <b>support@writing-space.com</b>.</p>
            <p>Check your <b>Inbox</b> and <b>Spam/Junk</b> folders.<br>
               Click the link inside to verify your account.</p>
            
            <div id="message" class="message"></div>
            
            <button id="resendBtn">Resend Email</button>
            
            <div id="loader">
                Please wait... (<span id="countdown">2:00</span>)
            </div>
            
            <p class="small">Didn't get it? Try resending or contact <b>support@writing-space.com</b></p>
        </div>
    </div>

    <script>
        let cooldown = true;
        let countdownTime = 120; // 2 minutes
        let countdownInterval;
        const btn = document.getElementById('resendBtn');
        const loader = document.getElementById('loader');
        const countdownDisplay = document.getElementById('countdown');
        const messageDiv = document.getElementById('message');

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

        // Show message function
        function showMessage(text, type) {
            messageDiv.textContent = text;
            messageDiv.className = 'message ' + type;
            messageDiv.style.display = 'block';
            
            // Auto-hide after 5 seconds
            setTimeout(() => {
                messageDiv.style.display = 'none';
            }, 5000);
        }

        // AJAX resend function
        btn.addEventListener('click', function() {
            if(cooldown) return;

            cooldown = true;
            btn.disabled = true;
            loader.style.display = 'block';
            countdownTime = 120;
            countdownDisplay.textContent = formatTime(countdownTime);

            // Create form data for sending
            const formData = new FormData();
            formData.append('_token', '{{ csrf_token() }}');

            // AJAX request using fetch API (more modern approach)
            fetch("{{ route('verification.resend') }}", {
                method: 'POST',
                headers: {
                    'X-Requested-With': 'XMLHttpRequest',
                    'X-CSRF-TOKEN': '{{ csrf_token() }}'
                },
                body: formData
            })
            .then(response => {
                if (!response.ok) {
                    throw new Error('Network response was not ok');
                }
                return response.json();
            })
            .then(data => {
                if (data.status === 'verification-link-sent') {
                    showMessage('A fresh verification link has been sent to your email address.', 'success');
                } else {
                    showMessage(data.message || 'Verification email sent successfully!', 'success');
                }
            })
            .catch(error => {
                console.error('Error:', error);
                showMessage('Failed to resend verification email. Please try again.', 'error');
            })
            .finally(() => {
                startCountdown(); // restart timer regardless of outcome
            });
        });
    </script>
</body>
</html>