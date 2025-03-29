<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome to Your New Writing Space Package – Thank You for Your Purchase</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            line-height: 1.6;
            margin: 0;
            padding: 0;
            background-color: #f5f5f5;
            color: #333333;
        }
        .container {
            max-width: 600px;
            margin: 20px auto;
            padding: 20px;
            background-color: #ffffff;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        h1 {
            color: #007bff;
        }
        p {
            margin: 10px 0;
        }
    </style>
</head>
<body>
    <div class="container">
        
        <p>Hi {{ $invoiceData['customerName'] }},</p>
        <p>Congratulations on securing your new package at Writing Space! We're excited to support you with enhanced services and resources tailored to your academic needs.</p>
        <h2>Package Details:</h2>
        <ul>
            <li>Package Type: {{ $invoiceData['itemName'] }}</li>
            <li>Purchase Date: {{ $invoiceData['dateOfIssue'] }}</li>
            <li>Total: ${{ $invoiceData['subTotal'] }}</li>
            <li>Total Pages: {{ $invoiceData['totalPages'] }}</li>
        </ul>
        <p>Your receipt and invoice for this transaction are attached to this email as a PDF. Please review these documents to ensure all details are correct and keep them for your records.</p>
        <p>You can now access all the features and benefits of your package through your dashboard. Explore the additional resources and services available to you and make the most of your Writing Space experience!</p>
        <p>If you have any questions about your package or need further assistance, our customer support team is ready to help.</p>
        <p>Thank you for choosing Writing Space! We look forward to helping you achieve your academic goals.</p>
        <p>Best regards,<br>Customer Success Team<br>Writing Space</p>
    </div>
</body>
</html>
