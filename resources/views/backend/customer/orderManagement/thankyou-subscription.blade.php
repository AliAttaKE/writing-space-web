<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Thank You</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <style>
         body {
            font-family: Inter, Helvetica, "sans-serif";
            background-image: url(http://localhost:8000/backend/assets/media/ws/customer-dashboard.jpg);
        }

        .text-center {
            text-align: center;
        }

        .text-gray-500 {
            color: #99a1b7;
        }

        .fw-bold {
            font-weight: 600 !important;
        }

        .fs-7 {
            font-size: 0.95rem !important;
        }
         .thank-you{
            height:100vh;
            display:flex;
            justify-content:center;
            align-items:center;
            flex-direction:column;
        }
    </style>
</head>

<body>
    <div class="thank-you text-center">
        <img src="{{asset("backend/assets/media/ws/thankyou.png")}}" alt="" style="width: 432px; height: 198px;">
        <p class="text-gray-500 fw-bold fs-7 mt-3">Placed order successfully.</p>
        <a href="#" class="btn btn-primary thankyouBtn" >Dashboard</a>
        {{-- <a href="{{route('customer.dashboard')}}" class="btn btn-primary thankyouBtn" >Dashboard</a> --}}
    </div>

  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
    $(document).ready(function (){
        $(document).on('click', '.thankyouBtn', function(e){
            e.preventDefault();
            $.ajax({
                    type: "GET",
                    url: "{{route('customer.update.tier')}}",
                    dataType: 'json',
                    success: function (response) {
                        console.log(response);
                        window.location.href = "{{route('customer.dashboard')}}";
                    },
                    error: function (xhr, status, error) {
                        // Handle other errors here
                        console.error(xhr.responseText);
                    }
                });
        });
    });


    document.addEventListener('DOMContentLoaded', function() {
        localStorage.removeItem('dataObject');
        localStorage.removeItem('sub_id');
        localStorage.removeItem('totalamount');
        localStorage.removeItem('cost_per_page');
        localStorage.removeItem('package_id');
        localStorage.removeItem('used_package_id');
        localStorage.removeItem('no_of_page');
        localStorage.removeItem('costPerPage');
        localStorage.removeItem('deadline');
        localStorage.removeItem('page');
        localStorage.removeItem('total');
        localStorage.removeItem('order_id');
    });
</script>
</body>

</html>
