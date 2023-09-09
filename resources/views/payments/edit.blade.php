<!DOCTYPE html>
<html>
<head>
    <title>Edit Payment</title>
</head>
<body>
    <h1>Edit Payment</h1>

    <form method="POST" action="{{ route('payments.update', $payment->id) }}">
        @csrf
        @method('PUT')

        <label for="amount">Amount:</label>
        <input type="text" id="amount" name="amount" value="{{ $payment->amount }}">
        <br>

        <label for="payment_date">Payment Date:</label>
        <input type="date" id="payment_date" name="payment_date" value="{{ $payment->payment_date }}">
        <br>

        <!-- Add other fields here -->

        <button type="submit">Update Payment</button>
    </form>
</body>
</html>
