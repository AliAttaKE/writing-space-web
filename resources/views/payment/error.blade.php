<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Payment Failed</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Lottie Player -->
    <script src="https://unpkg.com/@lottiefiles/lottie-player@latest/dist/lottie-player.js"></script>

    <!-- Particles.js -->
    <script src="https://cdn.jsdelivr.net/npm/tsparticles@2.11.0/tsparticles.bundle.min.js"></script>

    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            height: 100vh;
            background-image:url(https://ws.elementary-solutions.com/backend/assets/media/ws/customer-dashboard.jpg);
            background-size: cover;
            background-repeat: no-repeat;
            font-family: 'Segoe UI', sans-serif;
            display: flex;
            align-items: center;
            justify-content: center;
            position: relative;
            overflow: hidden;
            color: white;
        }
/* 
        #tsparticles {
            position: absolute;
            width: 100%;
            height: 100%;
            z-index: -1;
        } */

        .glass-card {
            /* background: rgba(255, 255, 255, 0.05);
            border: 1px solid rgba(255, 255, 255, 0.2); */
            border-radius: 16px;
            padding: 40px;
            /* box-shadow: 0 8px 32px rgba(0, 0, 0, 0.3);
            backdrop-filter: blur(8px);
            -webkit-backdrop-filter: blur(8px); */
            text-align: center;
            max-width: 400px;
            width: 90%;
        }

        .glass-card h2 {
            margin-top: 20px;
            font-size: 20px;
        }

        .btn {
            margin-top: 25px;
            padding: 12px 25px;
            border: none;
            border-radius: 8px;
            color: white;
            font-size: 16px;
            cursor: pointer;
            transition: background 0.3s ease;
        }

        .btn-primary {
    color: #fff;
    background-color: #0d6efd;
    border-color: #0d6efd;
}
    </style>
</head>
<body>

    <!-- Particle Background -->
    <!-- <div id="tsparticles"></div> -->

    <!-- Error Card -->
<div class="glass-card">
  <!-- 🔁 replaced Lottie with SVG -->
  <svg class="error-illustration" width="150" height="150" viewBox="0 0 128 128" role="img" aria-label="Payment failed">
    <defs>
      <radialGradient id="g" cx="50%" cy="35%" r="70%">
        <stop offset="0%" stop-color="#ff7a7a"/>
        <stop offset="100%" stop-color="#d7263d"/>
      </radialGradient>
      <filter id="shadow" x="-50%" y="-50%" width="200%" height="200%">
        <feDropShadow dx="0" dy="6" stdDeviation="6" flood-color="rgba(0,0,0,0.35)"/>
      </filter>
    </defs>
    <circle cx="64" cy="64" r="56" fill="url(#g)" filter="url(#shadow)"/>
    <rect x="58" y="28" width="12" height="56" rx="6" fill="#ffffff"/>
    <circle cx="64" cy="94" r="7" fill="#ffffff"/>
    <g opacity="0.08">
      <rect x="26" y="60" width="76" height="8" rx="4" fill="#000" transform="rotate(45 64 64)"/>
      <rect x="26" y="60" width="76" height="8" rx="4" fill="#000" transform="rotate(-45 64 64)"/>
    </g>
  </svg>

  <h2>Oops! Something went wrong with your payment.</h2>

  <a href="{{ route('dashboard') }}">
    <button class="btn btn-primary">Dashboard</button>
  </a>
</div>


    <!-- Particle Script -->
    <!-- <script>
        tsParticles.load("tsparticles", {
            particles: {
                number: { value: 50 },
                color: { value: "#ffffff" },
                size: { value: 2 },
                move: { enable: true, speed: 0.3 },
                links: { enable: true, color: "#ffffff", distance: 100 }
            }
        });
    </script> -->

</body>
</html>
