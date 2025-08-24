<?php
use Carbon\Carbon;
?>

@php
    $path = public_path('frontend_two/assets/images/logo.png');
    $type = pathinfo($path, PATHINFO_EXTENSION);
    $data = file_get_contents($path);
    $logoBase64 = 'data:image/' . $type . ';base64,' . base64_encode($data);

     // Background
    $bgPath = public_path('fronted_final/assets/images/bg.png');
    $bgType = pathinfo($bgPath, PATHINFO_EXTENSION);
    $bgData = file_get_contents($bgPath);
    $bgBase64 = 'data:image/' . $bgType . ';base64,' . base64_encode($bgData);
@endphp

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Invoice</title>
</head>
<body style="font-family: Arial, sans-serif; margin: 0; padding: 0; 
             background-image: url('{{ $bgBase64 }}'); 
             background-size: cover; background-repeat: no-repeat; background-position: center;">
    <div style="max-width: 800px; color: #fff; margin: 20px auto; padding: 20px; ">

        <!-- ✅ Base64 logo -->
        <img src="{{ $logoBase64 }}" width="150" alt="Logo">
        <div style="text-align: center; margin-bottom: 20px;">
            <h2>Invoice</h2>
        </div>

        <?php $formattedDate = Carbon::parse($invoiceData['dateOfIssue'])->format('F d, Y'); ?>
        
        <div style="margin-bottom: 20px;">
            <p><strong>Invoice number:</strong> {{ $invoiceData['invoiceNumber'] }}</p>
            <p><strong>Date of Issue:</strong> {{ $formattedDate }}</p>
            <p><strong>Date due:</strong> {{ $formattedDate }}</p>
        </div>

        <div style="margin-bottom: 20px; display: flex; justify-content: space-between;">
            <div>
                <h3>Bill from</h3>
                <p>{{ \App\Models\Contact::first()->name }}</p>
                <p>{{ \App\Models\Contact::first()->address }}</p>
                <p>{{ \App\Models\Contact::first()->email }}</p>
            </div>
            <div>
                <h3>Bill to</h3>
                <p>{{ $invoiceData['customerName'] }}</p>
                <p>{{ $invoiceData['customerAdress'] }}</p>
                <p>{{ $invoiceData['customerEmail'] }}</p>
            </div>
        </div>

        <table style="width: 100%; border-collapse: collapse; margin-bottom: 20px;">
            <thead>
                <tr>
                    <th style="padding: 10px; border-bottom: 1px solid #ddd;">Description</th>
                    <th style="padding: 10px; border-bottom: 1px solid #ddd;">Qty</th>
                    <th style="padding: 10px; border-bottom: 1px solid #ddd;">Price Per Page</th>
                    <th style="padding: 10px; border-bottom: 1px solid #ddd;">Add-Ons</th>
                    <th style="padding: 10px; border-bottom: 1px solid #ddd;">Discount</th>
                    <th style="padding: 10px; border-bottom: 1px solid #ddd;">Amount</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td style="padding: 10px; border-bottom: 1px solid #ddd;">{{ $invoiceData['itemName'] }}</td>
                    <td style="padding: 10px; border-bottom: 1px solid #ddd;">{{ $invoiceData['totalPages'] }}</td>
                    <td style="padding: 10px; border-bottom: 1px solid #ddd;">${{ $invoiceData['pricePerPage'] }}</td>
                    <td style="padding: 10px; border-bottom: 1px solid #ddd;">${{ $invoiceData['finaltotaladdon'] ?? '0.0' }}</td>
                    <td style="padding: 10px; border-bottom: 1px solid #ddd;">${{ $invoiceData['discounttotalamount'] ?? '0.0' }}</td>
                    <td style="padding: 10px; border-bottom: 1px solid #ddd;">${{ $invoiceData['subTotal'] }}</td>
                </tr>
            </tbody>
        </table>

        <div style="font-weight: bold;">
            <p><strong>Subtotal:</strong> ${{ $invoiceData['subTotal'] }}</p>
            <p><strong>Total:</strong> ${{ $invoiceData['subTotal'] }}</p>
            <p><strong>Amount Due (Excl. Tax):</strong> ${{ $invoiceData['subTotal'] }}</p>
        </div>
    </div>
</body>
</html>
