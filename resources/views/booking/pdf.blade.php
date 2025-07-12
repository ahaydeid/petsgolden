<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Booking Detail PDF</title>
    <style>
        body { font-family: sans-serif; font-size: 12px; }
        .section { margin-bottom: 20px; }
        h2 { background-color: #eee; padding: 10px; }
        .label { font-weight: bold; margin-top: 5px; }
        .value { margin-left: 10px; }
    </style>
</head>
<body>

    <h1 style="text-align: center">Booking Detail</h1>

    <div class="section">
        <h2>Customer Data</h2>
        <p><span class="label">Name:</span> {{ $bookingDetail->name }}</p>
        <p><span class="label">WhatsApp:</span> {{ $bookingDetail->wa_number }}</p>
        <p><span class="label">Email:</span> {{ $bookingDetail->email }}</p>
        <p><span class="label">Branch:</span> {{ $bookingDetail->branch }}</p>
    </div>

    <div class="section">
        <h2>Pet Data</h2>
        <p><span class="label">Type:</span> {{ $bookingDetail->pet_type }}</p>
        <p><span class="label">Race:</span> {{ $bookingDetail->race }}</p>
        <p><span class="label">Name:</span> {{ $bookingDetail->pet_name }}</p>
    </div>

    <div class="section">
        <h2>Service</h2>
        @php
            $services = is_string($bookingDetail->services) ? json_decode($bookingDetail->services, true) : ($bookingDetail->services ?? []);
        @endphp
        @foreach ($services as $service)
            <p>• {{ $service }}</p>
        @endforeach
        <p><span class="label">Additional Request:</span> {{ $bookingDetail->additional_request }}</p>
    </div>

    <div class="section">
        <h2>Time & Address</h2>
        <p><span class="label">Date:</span> {{ \Carbon\Carbon::parse($bookingDetail->date)->format('d M Y') }}</p>
        <p><span class="label">Time:</span> {{ \Carbon\Carbon::parse($bookingDetail->time)->format('H:i') }}</p>
        <p><span class="label">Address:</span> {{ $bookingDetail->address }}</p>
        <p><span class="label">Note:</span> {{ $bookingDetail->note }}</p>
    </div>

    <div class="section">
        <h2>Total</h2>
        <h3 style="color: red">Rp {{ number_format($bookingDetail->total_price, 0, ',', '.') }}</h3>
    </div>

</body>
</html>
