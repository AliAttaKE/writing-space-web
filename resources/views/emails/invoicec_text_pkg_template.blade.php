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
        <p>Thank you for expanding your order at Writing Space! We've successfully processed the purchase of additional pages for your ongoing project</p>
        <h2>Order Details:</h2>
        <ul>
            <li>Order ID: {{ $invoiceData['orderid'] }}
                
            </li>
            {{-- <li>Package Type: {{ $invoiceData['itemName'] }}</li> --}}
            <li>Additional Pages Purchased: {{ $invoiceData['totalPages'] }}</li>
            <li>Cost: ${{ $invoiceData['subTotal'] }}</li>
              <li>Date of Purchase: {{ $invoiceData['dateOfIssue'] }}</li>
        </ul>
        <p>Your invoice and receipt for this transaction are attached as a PDF. Please review these documents for your records.</p>
        <p>Should you have any queries or require further assistance, feel free to reach out to our support team.</p>
        <p>We appreciate your continued trust in Writing Space, and we're here to assist you every step of the way!</p>
        {{-- <p>Thank you for choosing Writing Space! We look forward to helping you achieve your academic goals.</p> --}}
        <p>Best regards,<br>Customer Success Team<br>Writing Space</p>
    </div>
</body>
</html>
