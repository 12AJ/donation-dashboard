<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/dashboard.css">
    <title>dashboard</title>
</head>
<body>
    <nav>
        <img src="imgs/logo.png" alt="logo">
        <p>DashBoard</p>
        <img src="imgs/logo.png" alt="logo">
    </nav>

    {{-- this is the dummy of backend for now --}}
    <?php
    $donorDetails= array(101,201,301,401,501);
   $totalAmount= array_sum($donorDetails);
    ?>
{{-- --------------------------------------------- --}}
    <main>
        <div class="totalAmountDiv">
            <h2 class="totalAmountHeading">Total Amount Recived</h2>
            <p class="totalAmount">{{$totalAmount}} ₹</p>
        </div>
       

{{-- --------this displays the donor list dynamically --}}
@foreach ($donorDetails as $item)
<x-donation-entries :num=$item/>
@endforeach
        {{----------------------------------------------  --}}

    </main>
</body>
</html>