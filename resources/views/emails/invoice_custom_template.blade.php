<?php

use Carbon\Carbon;

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Invoice</title>
</head>

<body style="font-family: Arial, sans-serif; margin: 0; padding: 0; background-color: #f4f4f4;">
    <div style="max-width: 800px; margin: 20px auto; background-color: #fff; border-radius: 8px; padding: 20px; box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);">
        <div style="margin-bottom: 20px; text-align: center;">
            <h2>Invoice</h2>

        </div>



        <?php
        $formattedDate = Carbon::parse($invoiceData['dateOfIssue'])->format('F d, Y');
        ?>
        <div style="margin-bottom: 20px;">
            <p style="margin: 5px 0; font-size: 16px;">Invoice number: {{ $invoiceData['invoiceNumber'] }}</p>
            <!--<p style="margin: 5px 0; font-size: 16px;">Receipt number: {{ $invoiceData['invoiceNumber'] }}</p>-->
            <p style="margin: 5px 0; font-size: 16px;">Date of Issue: {{ $formattedDate }}</p>
            <p style="margin: 5px 0; font-size: 16px;">Date due: {{ $formattedDate }}</p>
            <!--<p style="margin: 5px 0; font-size: 16px;">Payment method: {{ $invoiceData['payment_status'] }}</p>-->
        </div>
        <div style="margin-bottom: 20px; display: flex; justify-content: space-between;">
            <div>
                <h3 style="margin-bottom: 10px; font-weight: bold;">Bill from</h3>
                 <p>{{ \App\Models\Contact::first()->name }}</p>
 <p style="margin: 5px 0; font-size: 16px;">{{ \App\Models\Contact::first()->address }}</p>
               <p style="margin: 5px 0; font-size: 16px;">{{ \App\Models\Contact::first()->email }}</p>
            </div>
            <br>
            <div>
                <h3 style="margin-bottom: 10px; font-weight: bold;">Bill to</h3>
                <p style="margin: 5px 0; font-size: 16px;">{{ $invoiceData['customerName'] }}</p>
                <p style="margin: 5px 0; font-size: 16px;">{{ $invoiceData['customerAdress'] }}</p>
                <p style="margin: 5px 0; font-size: 16px;">{{ $invoiceData['customerEmail'] }}</p>
            </div>
        </div>
        <div style="margin-bottom: 20px;">
            <h4 style="margin-bottom: 20px;">${{ $invoiceData['subTotal'] }} paid on {{  $formattedDate }}</h4>
            <table style="width: 100%; border-collapse: collapse;">
                <thead>
                    <tr>
                        <th style="padding: 10px; text-align: left; border-bottom: 1px solid #ddd;">Description</th>
                        <th style="padding: 10px; text-align: left; border-bottom: 1px solid #ddd;">Qty</th>
                        <th style="padding: 10px; text-align: left; border-bottom: 1px solid #ddd;">Price Per Page</th>
                        <th style="padding: 10px; text-align: left; border-bottom: 1px solid #ddd;">Add-Ons</th>
                        <th style="padding: 10px; text-align: left; border-bottom: 1px solid #ddd;">Amount (excl. tax)</th>
                       
                        <th style="padding: 10px; text-align: left; border-bottom: 1px solid #ddd;">Add Discount</th>
                    </tr>
                </thead>
                
                <tbody>
                    <tr>
                        <td style="padding: 10px; text-align: left; border-bottom: 1px solid #ddd;">{{ $invoiceData['itemName'] }} {{  $formattedDate }}</td>
                        <td style="padding: 10px; text-align: left; border-bottom: 1px solid #ddd;">{{ $invoiceData['totalPages'] }}</td>
                        <td style="padding: 10px; text-align: left; border-bottom: 1px solid #ddd;">${{ $invoiceData['pricePerPage'] }}</td>
                        <td style="padding: 10px; text-align: left; border-bottom: 1px solid #ddd;">${{ $invoiceData['finaltotaladdon'] ?? '0.0' }}
                      
                        <td style="padding: 10px; text-align: left; border-bottom: 1px solid #ddd;">${{ $invoiceData['subTotal'] }}</td>
                        <td style="padding: 10px; text-align: left; border-bottom: 1px solid #ddd;">${{ $invoiceData['discounttotalamount'] ?? '0.0' }}
                        </td>
                        
                    </tr>
                    <tr>
                        <td style="padding: 10px; text-align: left; border-bottom: 1px solid #ddd;">{{ $formattedDate }}</td>
                        <td style="padding: 10px; text-align: left; border-bottom: 1px solid #ddd;"></td>
                        <td style="padding: 10px; text-align: left; border-bottom: 1px solid #ddd;"></td>
                        <td style="padding: 10px; text-align: left; border-bottom: 1px solid #ddd;"></td>
                    </tr>
                </tbody>
            </table>
        </div>
        <div style="margin-bottom: 20px;">
            <hr style="margin: 10px 0; border: none; border-top: 1px solid #ddd;">
            <div style="margin-bottom: 10px; font-weight: bold;">
                <p><strong>Subtotal:</strong> ${{ $invoiceData['subTotal'] }}</p>
                <p><strong>Total:</strong> ${{ $invoiceData['subTotal'] }}</p>
                <p><strong>Amount due:</strong> ${{ $invoiceData['subTotal'] }}</p>
            </div>
            <hr style="margin: 10px 0; border: none; border-top: 1px solid #ddd;">
            <!--<p>${{ $invoiceData['subTotal'] }} paid on {{ $invoiceData['dateOfIssue'] }}</p>-->
        </div>
    </div>
</body>

</html>
