<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{$invoice->order_id}}</title>
</head>

<body style="font-family: 'Arial', sans-serif;">

    <table style="padding: 25px;width: 80%; margin: 20px auto; border: 1px solid #ddd; box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);">
        <tr>
            <td colspan="4" style="text-align: center;">
                <div style=" flex;">
                    <img style="max-width: 100px; margin-bottom: 20px;"
                        src="{{ asset('backend/assets/media/ws/ws-light-logo.png') }}" alt="Your Logo">
                </div>
                <h2 style=" flex;">{{$invoice->order_id}}</h2>
                <p style=" flex; margin: 2px 0px;">Issue Date:
                <p style="margin: 2px 0px;text-align: left;font-weight: bold">{{$invoice->created_at}}</p>
                </p>
            </td>
        </tr>
        <tr style=" flex; width: 200%;
    justify-content: space-between;">
            <td colspan="4" style="text-align: center; margin-bottom: 20px;">
                <p style="  flex; text-align: left; margin: 2px 0px;">Issue For:
                <p style="margin: 2px 0px;text-align: left;font-weight: bold;">{{$invoice->name}}</p>
                {{$invoice->email}}</p>
            </td>
            <td>
                <p style="  flex; text-align: left; margin: 2px 0px;">Issue By:
                <p style="margin: 2px 0px;text-align: left;font-weight: bold;">{{$invoice->to_name}}</p>{{$invoice->to_email}}
                </p>
            </td>
        </tr>
        <tr>
            <th style="width: 25%; text-align: start;padding-bottom: 10px;">Item Name</th>
            <th style="width: 25%; text-align: start;padding-bottom: 10px;">Description</th>
            <th style="width: 25%; text-align: start;padding-bottom: 10px;">Pages</th>
            <th style="width: 25%; text-align: start;padding-bottom: 10px;">Price/Page</th>
        </tr>

        
        

        <tr>
            <td>{{ $invoice->item_name }}</td>
            <td>{{ $invoice->description }}</td>
            <td>{{ $invoice->page }}</td>
            <td>{{ $invoice->price_per_page }}</td>
        
            @php
                $subTotal = 0;
                $subTotal += $invoice->price_per_page * $invoice->page;
                $grandTotal = 0;
                $grandTotal =  $subTotal;
            @endphp

        </tr>
        <tfoot style="height: 80px;">
            <tr>
                <td colspan="3" style="text-align: right;">Sub-Total:</td>
                <td style="font-weight: bold;">{{$subTotal}}.00</td>
                <td colspan="2" style="text-align: right;">Tax:</td>
                <td>0.00</td>
   
                <td colspan="3" style="text-align: right;">Discount:</td>
                <td>0.00</td>
                <td colspan="2" style="text-align: right;">Total:</td>
                <td style="font-weight: bold;"> {{$grandTotal}}.00</td>
            </tr>
          
        </tfoot>

    </table>


</body>

</html>