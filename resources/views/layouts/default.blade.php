<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('thivin')</title>
    <style>
        h1
        {
            font-size: 50px;
            text:center;
            display:center;
        }
    </style>
</head>
<body>
     <h1>welcome ThivinKanth</h1><br>
     @include('layouts.includes.header');
     <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Enim dignissimos quia est ducimus asperiores! Neque explicabo assumenda
        eum rem voluptas dolore numquam quibusdam, impedit quaerat est, expedita esse tenetur distinctio?</p>
        <br>
        <br>
        <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Quis
        odio corrupti sapiente vel accusantium. Suscipit quasi molestias omnis veritatis sint animi eos eius porro, delectus nihil. Illum laborum ex cupiditate!</p>
        <br>
        @section('main');
        <section>
            <h1>Welcome to Laravel</h1>
            <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit.
             Asperiores ullam neque, voluptatem repudiandae fuga rerum ex atque error harum dolorum. Libero magnam ducimus quae provident, molestias non ipsam fuga est?</p>
        </section>
        {{-- @show --}}
        @endsection
        @include('layouts.includes.footer');

</body>
</html>
