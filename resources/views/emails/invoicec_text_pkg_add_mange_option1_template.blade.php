<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $subject }}</title>
</head>
<body>
    <h2>Confirmation of Additional Pages (In Packages) for Order ID {{ $invoiceData['orderid'] }}</h2>
    <p>Hi {{ $invoiceData['customerName'] }}, Confirmation of Additional Pages Added to Order ID</p>
    <p>We’ve successfully added additional pages to your existing order at Writing Space. Here are the details.</p>
    <h3>Order Details:</h3>
    <ul>
        <li>Order ID: {{ $invoiceData['orderid'] }}</li>
        <li>Additional Pages Purchased: {{ $invoiceData['AdditionalPagesAdded'] }}</li>
        <li>Total Pages Used So Far: {{ $invoiceData['TotalPagesUsed'] }}</li>
        <li>Remaining Pages in Your Package: {{ $invoiceData['remaining_pages'] }}</li>
    </ul>
    <p>What’s Next:
        <ol>
            <li>You can continue to track the progress of your order through your dashboard under the "My Orders" section.</li>
            <li>We’ll keep you updated as your order develops, and we’ll notify you when it’s ready for review or download.</li>
        </ol>
        Adding these pages will help tailor your order more closely to your needs, ensuring that the final product meets all your academic requirements. If you need further modifications or have any questions, please don't hesitate to contact us. Our team is here to support you every step of the way. Thank you for utilizing your Writing Space package effectively. We look forward to delivering a product that exceeds your expectations.
    </p>
    <p>Best regards,<br>
    Customer Success Team<br>
    Writing Space</p>
</body>
</html>
