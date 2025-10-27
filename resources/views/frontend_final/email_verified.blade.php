@extends('frontend_final.Layout.masters')
@section('content')

<style>
.verify-wrapper {
  text-align: center;
  min-height: 80vh;
  display: flex;
  flex-direction: column;
  justify-content: center;
  align-items: center;
  background: radial-gradient(circle at center, #3f0071, #1a0033);
  color: #fff;
  padding: 50px 0;
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

<section class="verify-wrapper">

    

    <h1>Email Verified Successfully 🎉</h1>
    <p>
        Your email address has been successfully verified.<br>
        You can now log in and start using your Writing Space account.
    </p>

    <button class="gradient-button fw-bold login-button w-100" onclick="window.location.href='{{ route('login') }}'">Go to Login</button>

</section>

@endsection
