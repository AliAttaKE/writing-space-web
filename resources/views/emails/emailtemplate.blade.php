<!doctype html>
<html lang="en">

<head>
  <title>feedback</title>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS v5.2.1 -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
  <style>
    body {
      background-image: url("https://kacinew.s3.amazonaws.com/message_images/Group+9752.png");
      background-size: cover;
      background-repeat: no-repeat;
      height: 70%;
    }
  </style>
</head>
</head>

<body>
  <table width="100%" border="0" cellspacing="0" cellpadding="20"
    background="https://kacinew.s3.amazonaws.com/message_images/Group+9752.png"
    style='background-size:cover;background-repeat:no-repeat;'>
    <center>
      <header>
        <img src="{{asset('images/emails/ws-logo-dark.svg')}}" height=40px width=140px>
      </header>
    </center>

    <div class="container">
      <br>
      <br>
      <center>
        <div stylr='margin-top:40px;'>
          <img src="https://kacinew.s3.amazonaws.com/kaci_logo/Group+-41.png" height=120px width=200px>
        </div>
      </center>
      <br>


      <br>
      <center>
        <div class="container" style="justify-content:center;padding:20px;text-align:start;">
          <div class="message">

            <p style='color:black;text-align:start;font-size:15px;'>Dear <strong>{{$user->name}},</strong></p>
          </div>
          <div class='para'>
            <p style='color:black;text-align:start;'>{{$email->description}}
            </p>
            @if($email->image !== null)
            <div stylr='margin-top:40px;'>
                <img src="{{asset('images/emails/'.$email->image)}}" height=200px width=200px>
              </div>
           
            @endif
           
          </div>
        </div>
      </center>
    </div>
  </table>
  <footer>
    <table role="presentation" width="100%" cellspacing="0" cellpadding="0" border="0">
      <tr>
        <td style="background-color: black; color: white; padding: 10px 0;">
          <table role="presentation" width="100%" cellspacing="0" cellpadding="0" border="0">
            <tr>
              <td align="center">
                <img src="{{asset('images/emails/ws-logo-white.svg')}}" height="50" width="150" alt="Logo">
              </td>
            </tr>
            <tr>
              <td align="center" style="padding-top: 10px;">
                <table role="presentation" cellspacing="0" cellpadding="0" border="0">
                  <tr>
                    <td style="margin-right: 20px;">
                      <a href="https://www.facebook.com/kacihelp" style="text-decoration: none;margin-right:10px;">
                        <div style="margin-left: 10px;">
                          <center>
                            <img src="https://kacinew.s3.amazonaws.com/help_book_images/icons8-facebook-circled-50.png"
                              height="23" width="23" alt="Facebook">
                          </center>
                        </div>
                      </a>
                    </td>
                    <td style="margin-right: 10px;">
                      <a href="https://www.instagram.com/kacihelp" style="text-decoration: none;margin-right:10px;">
                        <div style="margin-left: 10px;">
                          <center>
                            <img src="https://kacinew.s3.amazonaws.com/help_book_images/icons8-instagram-circle-60.png"
                              height="29" width="29" alt="Instagram">
                          </center>
                        </div>
                      </a>
                    </td>
                    <td style="margin-right: 10px;">
                      <a href="https://www.twitter.com/kacihelp" style="text-decoration: none;margin-right:10px;">
                        <div style="margin-left: 10px;">
                          <center>
                            <img src="https://kacinew.s3.amazonaws.com/help_book_images/icons8-twitter-circled-60.png"
                              height="27" width="27" alt="Twitter">
                          </center>
                        </div>
                      </a>
                    </td>
                    <td>
                      <a href="https://www.linkedin.com/company/kacihelp"
                        style="text-decoration: none;margin-right:10px;">
                        <div style="margin-left: 10px;">
                          <center>
                            <img src="https://kacinew.s3.amazonaws.com/help_book_images/icons8-linkedin-circled-60.png"
                              height="27" width="27" alt="LinkedIn">
                          </center>
                        </div>
                      </a>
                    </td>
                  </tr>
                </table>
              </td>
            </tr>
            <tr>
              <td align="center" style=" font-size: 10px;">
                <a href="#" style="color: white; text-decoration: none;margin-right:5px;">Help</a>
                <a style="color: white; text-decoration: none;margin-right:5px;">|</a>
                <a href="https://www.kaci.help/donation/"
                  style="color: white; text-decoration: none;margin-right:5px;">Donate</a>
                <a style="color: white; text-decoration: none;margin-right:5px;">|</a>
                <a href="https://www.kaci.help/terms-of-use/"
                  style="color: white; text-decoration: none;margin-right:5px;">Terms</a>
              </td>
            </tr>
            <tr>
              <td align="center" style="font-size: 10px; padding-top: 5px;">
                Made in text  | <a href="www.fcihq.org" style="color: white; text-decoration: none;"> Powered By
                  text</a>
              </td>
            </tr>
          </table>
        </td>
      </tr>
    </table>
  </footer>

  <!-- Bootstrap JavaScript Libraries -->
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"
    integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous">
    </script>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.min.js"
    integrity="sha384-7VPbUDkoPSGFnVtYi0QogXtr74QeVeeIs99Qfg5YCF+TidwNdjvaKZX19NZ/e6oz" crossorigin="anonymous">
    </script>
</body>

</html>