

<?php

use Carbon\Carbon;
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Receipt</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f4f4f4;
        }
        .container {
            max-width: 600px;
            margin: 20px auto;
            background-color: #fff;
            border-radius: 8px;
            padding: 20px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        .header {
            text-align: center;
            margin-bottom: 20px;
        }
        .details p {
            margin: 5px 0;
            font-size: 16px;
        }
        .section {
            display: flex;
            justify-content: space-between;
            margin-bottom: 20px;
        }
        .table-container {
            width: 100%;
        }
        table {
            width: 100%;
            border-collapse: collapse;
        }
        th, td {
            padding: 10px;
            text-align: left;
            border-bottom: 1px solid #ddd;
        }
        .total {
            font-weight: bold;
        }
    </style>
</head>

 <?php
        
        $formattedDate = Carbon::parse($invoiceData['dateOfIssue'])->format('F d, Y');
        ?>
<body>
    <div class="container">
        <div class="header">
            <h2>Receipt</h2>
        </div>
        <div class="details">
            <p><strong>Invoice number:</strong> {{ $invoiceData['invoiceNumber'] }}</p>
            <p><strong>Receipt number:</strong> {{ $invoiceData['receiptNumber'] }}</p>
            <p><strong>Date paid:</strong> {{ $formattedDate }}</p>
            <p><strong>Payment method:</strong> Online Payment</p>
        </div>
        <div class="section">
            <div>
                                <h3 style="margin-bottom: 10px; font-weight: bold;">Bill from</h3>

                 <p>{{ \App\Models\Contact::first()->name }}</p>
 <p style="margin: 5px 0; font-size: 16px;">{{ \App\Models\Contact::first()->address }}</p>
               <p style="margin: 5px 0; font-size: 16px;">{{ \App\Models\Contact::first()->email }}</p>
            </div>
            <div>
                <h3>Bill to</h3>
                <p>{{ $invoiceData['customerName'] }}</p>
                <p>{{ $invoiceData['customerAdress'] }}</p>
                <p>{{ $invoiceData['customerEmail'] }}</p>
            </div>
        </div>
        <h4>${{ $invoiceData['subTotal'] }} paid on {{$formattedDate }}</h4>
        <div class="table-container">
            <table>
                <thead>
                    <tr>
                        <th>Description</th>
                        <th>Qty</th>
                        <th>Unit price (excl. tax)</th>
                        <th>Amount (excl. tax)</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>{{ $invoiceData['itemName'] }} {{ $formattedDate }}</td>
                        <td>{{ $invoiceData['totalPages'] }}</td>
                        <td>${{ $invoiceData['pricePerPage'] }}</td>
                        <td>${{ $invoiceData['subTotal'] }}</td>
                    </tr>
                </tbody>
            </table>
        </div>
        <div class="details">
            <p class="total"><strong>Subtotal:</strong> ${{ $invoiceData['subTotal'] }}</p>
            <p class="total"><strong>Total:</strong> ${{ $invoiceData['subTotal'] }}</p>
            <p class="total"><strong>Amount paid:</strong> ${{ $invoiceData['subTotal'] }}</p>
        </div>
    </div>
</body>
</html>
