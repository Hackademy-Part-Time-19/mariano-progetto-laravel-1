<!--<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Chi sono</title>
</head>
<body style="margin: 0px;">

    <x-Navbar>
    </x-Navbar>


    <h1>{{ $titolo }}</h1>

    <p>{{ $bio }}</p>


</body>
</html>
-->

<x-layout-main :titolo="$titolo" :bio="$bio">

    <x-slot:title>Chi sono</x-slot> 

    

</x-layout-main>

    <h1>{{ $titolo }}</h1>

    <p>{{ $bio }}</p>