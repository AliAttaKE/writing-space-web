<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $subject }}</title>
</head>
<body>
    <p>Hi {{ $invoiceData['customerName'] ?? 'Customer' }},</p>
    <p>Thank you for your purchase at Writing Space! Your order has been successfully processed.</p>

    <!-- Order Details -->
    <p><strong>Order Details:</strong></p>
    <ul>
 @php
    $orderDetails = isset($invoiceData['order']) ? json_decode($invoiceData['order'], true) : [];
@endphp

<li><strong>Order ID:</strong> {{ $invoiceData['order_id'] ?? $invoiceData['orderid'] ?? 'N/A' }}</li>
<li><strong>Pages:</strong> {{ $orderDetails['number_of_pages'] ?? 'N/A' }}</li>
<li><strong>Topic:</strong> {{ $orderDetails['topic'] ?? 'N/A' }}</li>
<li><strong>Deadline:</strong> {{ $orderDetails['deadline'] ?? 'N/A' }}</li>

    </ul>

    <p>Please find your invoice and receipt attached to this email as a PDF. Ensure you review these documents for your records.</p>
    <p>If you have any questions or need further assistance, please don't hesitate to contact our support team.</p>
    <p>Thank you for choosing Writing Space. We look forward to supporting your academic success!</p>

    <p>Best regards,</p>
    <p>Customer Success Team</p>
    <p>Writing Space</p>
</body>
</html>
