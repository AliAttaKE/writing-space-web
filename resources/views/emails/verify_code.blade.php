<!doctype html>
<html lang="en">

<head>
    <title>Verify Your Account</title>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />

    <!-- Bootstrap CSS v5.2.1 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous" />
</head>

<body>
    <main>
        <h4>Hi {{$name}},</h4>
       <p>
        Welcome aboard! We’re thrilled to have you join us at Writing Space, where we empower your academic journey with cutting-edge tools and ethical AI solutions. It’s great to have you with us, and we can’t wait to see what you achieve with the right resources at your fingertips.
        Here’s a quick guide to get you started on your path to success:
       <ol type="1">
        <li> Explore Your Dashboard: Your personal dashboard is your new best friend. Here, you can manage orders, track progress, and access a wealth of resources. Take a moment to familiarize yourself with its features—it’s designed to make your life easier!</li>
        <li>
            Dive into the Library: Our extensive library is stocked with sample papers and resources across a wide range of subjects. It’s perfect for sparking ideas or understanding how to structure your papers.
        </li>
        <li>
            Post a Custom Order: Got a specific project in mind? Post a custom order and let our tailored solutions meet your exact needs. Whether it's a tight deadline or a complex topic, we’re here to help.
        </li>
        <li>
            Check Out Subscription Packages: If you’re looking for the best value, our packages are the way to go. With options like page rollovers and access to premium services at no additional cost, they’re designed to save you money while providing top-notch support.
        </li>
    </ol>
        We're excited to see how Writing Space will enhance your academic work. If you have any questions or need guidance, don’t hesitate to reach out. Our support team is available 24/7 and ready to assist you.
        Again, welcome to Writing Space! Let’s make this academic journey a remarkable one.
        
        Best Regards,
        Customer Success Team  
        Writing Space
        </p>
        <a href="{{ route('front.verify.account', ['verify_code' => $verify_code, 'email' => $email]) }}" >Click Here to verify your account</a>
    </main>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
        integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous">
    </script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js"
        integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous">
    </script>
</body>

</html>
