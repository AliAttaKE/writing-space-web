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
h1 {
  font-size: 42px;
  margin-bottom: 10px;
}
p {
  font-size: 18px;
  max-width: 480px;
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
button:hover {
  background-color: #0056b3;
}
</style>

<section class="bg-dark pt-160px">
    <div class="container wrapper-center">

  <img src="email-verified-banner.png" alt="Email Verified Banner" width="320" style="margin-bottom: 20px;">
  <h1>Email Verified Successfully 🎉</h1>
  <p>Your email address has been verified.<br>
     You can now log in and start using your Writing Space account.
  </p>
  <button onclick="window.location.href='login'">Go to Login</button>   
</div>
</section>

<script>

</script>

@endsection
