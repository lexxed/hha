Hi {{ $customerinformation->name }},
<br>
Thank you for your order.
<br>
Your orders are :<br>
@foreach ($cartitem as $item)
    {{ $item->qty }} x {{ $item->name }}<br>
@endforeach
<br><br>
This is your order id :
<br>
You can track your orders here.
<br>
Thank you,
Sarah
