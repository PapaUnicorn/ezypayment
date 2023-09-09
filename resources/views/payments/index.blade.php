<!DOCTYPE html>
<html>
<head>
    <title>Payment List</title>
</head>
<body>
    <h1>Payment List</h1>

    <a href="{{ route('payments.create') }}">Create New Payment</a>

    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Customer</th>
                <th>Amount</th>
                <th>Payment Date</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach($payments as $payment)
            <tr>
                <td>{{ $payment->id }}</td>
                <td>{{ $payment->customer->full_name }}</td>
                <td>{{ $payment->amount }}</td>
                <td>{{ $payment->payment_date }}</td>
                <td>
                    <a href="{{ route('payments.edit', $payment->id) }}">Edit</a>
                    <form action="{{ route('payments.destroy', $payment->id) }}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button type="submit">Delete</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>
