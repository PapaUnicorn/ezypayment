<!DOCTYPE html>
<html>
<head>
    <title>New Payment</title>
</head>
<body>
    <h1>Create New Payment</h1>

    <form method="POST" action="{{ route('payments.store') }}">
        @csrf

        <label for="customer_id">Customer:</label>
        <select id="customer_id" name="customer_id">
            @foreach ($customers as $customer)
                <option value="{{ $customer->id }}">{{ $customer->full_name }}</option>
            @endforeach
        </select>
        <br>

        <label for="amount">Amount:</label>
        <input type="text" id="amount" name="amount">
        <br>

        <label for="payment_date">Payment Date:</label>
        <input type="date" id="payment_date" name="payment_date">
        <br>

        <!-- Add other fields here -->

        <button type="submit">Create Payment</button>
    </form>
</body>
</html>
