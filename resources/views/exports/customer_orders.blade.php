<table>
    <thead>
        <tr>
            <th>Customer Name</th>
            <th>Email</th>
            <th>Orders Used</th>
            <th>Orders Left</th>
            <th>Created At</th>
        </tr>
    </thead>
    <tbody>
        @foreach($orders as $order)
        <tr>
            <td>{{ $order->customer_name }}</td>
            <td>{{ $order->customer_email }}</td>
            <td>{{ $order->no_of_orders }}</td>
            <td>{{ $order->orders_left }}</td>
            <td>{{ $order->created_at }}</td>
        </tr>
        @endforeach
    </tbody>
</table>
