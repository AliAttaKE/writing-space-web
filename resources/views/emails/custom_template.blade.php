<!doctype html>
<html lang="en">

<head>
  <title>
    @php
      $arr = explode("\n", $email->title);
        foreach($arr as $ar){
            if(strpos($ar, '[Order ID]') !== false){
                echo str_replace('[Order ID]', $data['order_id'], $ar) . "<br>";
            }else{
                echo $ar . "<br>";
            }
        }
      @endphp
  </title>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS v5.2.1 -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">

</head>

<body>
  <div class="container">
    <h4>
      @php
        $arr = explode("\n", $email->title);
          foreach($arr as $ar){
              if(strpos($ar, '[Order ID]') !== false){
                  echo str_replace('[Order ID]', $data['order_id'], $ar) . "<br>";
              }else{
                  echo $ar . "<br>";
              }
          }
      @endphp
    </h4>
    <p>
      @php
        $arr = explode("\n", $email->description);
        foreach ($arr as $ar) {
            if (strpos($ar, '[First Name]') !== false) {
                echo str_replace('[First Name]',$data['customer_name']??'', $ar) . "<br>";
            } elseif (strpos($ar, '[Order ID]') !== false) {
                echo str_replace('[Order ID]',$data['order_id']??'', $ar) . "<br>";
            } elseif (strpos($ar, '[Order Date]') !== false) {
                echo str_replace('[Order Date]',$data['created_at'], $ar) . "<br>";
            } elseif (strpos($ar, '[Pages Used This Order]') !== false) {
                echo str_replace('[Pages Used This Order]',$data['pages_used_this_order']??'', $ar) . "<br>";
            } elseif (strpos($ar, '[Total Pages Used]') !== false) {
                echo str_replace('[Total Pages Used]',$data['total_pages_used']??'', $ar) . "<br>";
            } elseif (strpos($ar, '[Pages Remaining]') !== false) {
                echo str_replace('[Pages Remaining]',$data['pages_remaining']??'', $ar) . "<br>";
            } elseif (strpos($ar, '[New Order Details]') !== false) {
                echo str_replace('[New Order Details]', $data['new_order_details']??'', $ar) . "<br>";//incomplete order details;

            }elseif (strpos($ar, '[Number of Pages]') !== false) {
                echo str_replace('[Number of Pages]', $data['number_of_pages']??'', $ar) . "<br>";
            }
            elseif (strpos($ar, '[Pages Remaining]') !== false) {
                echo str_replace('[Pages Remaining]', $data['pages_remaining']??'', $ar) . "<br>";
            }
            elseif (strpos($ar, '[Purchase Date]') !== false) {
                echo str_replace('[Purchase Date]', $data['purchased_at']??'', $ar) . "<br>";
            }
            elseif (strpos($ar, '[Senders Role]') !== false) {
                echo str_replace('[Senders Role]', $data['sender_role']??'', $ar) . "<br>";
            }
             elseif (strpos($ar, '[Package Name]') !== false) {
                echo str_replace('[Package Name]', $data['package_name']??'', $ar) . "<br>";
            }
              elseif (strpos($ar, '[Expiration Date]') !== false) {
                echo str_replace('[Expiration Date]', $data['expiration_date']??'', $ar) . "<br>";
            }
            
              elseif (strpos($ar, '[Number of Pages Remaining]') !== false) {
                echo str_replace('[Number of Pages Remaining]', $data['pages_remaining']??'', $ar) . "<br>";
            }
            
            
              elseif (strpos($ar, '[If Pages Existed, "Yes" + Number of Pages; If No Pages, "No"]') !== false) {
                echo str_replace('[If Pages Existed, "Yes" + Number of Pages; If No Pages, "No"]', $data['If_Pages_Existed']??'', $ar) . "<br>";
            }
            else {
                echo $ar . "<br>";
            }
        }

      @endphp
    </p>
  </div>

  <!-- Bootstrap JavaScript Libraries -->
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"
    integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous">
  </script>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.min.js"
    integrity="sha384-7VPbUDkoPSGFnVtYi0QogXtr74QeVeeIs99Qfg5YCF+TidwNdjvaKZX19NZ/e6oz" crossorigin="anonymous">
  </script>
</body>

</html>
