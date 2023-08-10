@extends('layouts.default')
@section('thivin','Home page')
@section('main')
<div>
    <h1>home page </h1>
    <h1>{!! $heading !!} </h1>
    <p>
        {{-- <?php if ($no_of_users == 0 ) { ?>
      nousers
      <?php } elseif ($no_of_users == 1) { ?>
        we have one user
      <?php } else { ?>
      we have many users
      <?php } ?> --}}

      {{-- easy way to declare if conditon if statement in blade --}}

      {{-- @if ($no_of_users == 0)
      no users
      @elseif ($no_of_users == 1)
      we have one user
      @else
      we have many users
      @endif --}}

      <br>
      <br>

      {{-- if conbdition opp unless ithu false ah irruntha mattum than work aagum --}}

      {{-- @unless ($is_user_online)
          user is offline
      @endunless --}}

      <br>

      {{-- @isset($settings)

      {{ $settings }}

      @endisset --}}

      <br>
      <br>

      {{-- for loop --}}

      {{-- @for ($i = 0; $i <= 5; $i++)

      <p>The num is <b>{{ $i }}</b></p>
      @endfor --}}

      <br>
      <br>

      {{-- foreach loop --}}

        {{-- @foreach ($names as $name)

        <p>{{ $name }}</p>

        @endforeach --}}

         {{-- foreach loop multi array--}}

         {{-- @foreach ($namesmulti as $multi )

         <p>{{ $multi['name'] }}</p>

         @endforeach --}}

         {{-- forelse statement values condtion la irruka illa ya nun pakka--}}

         @forelse ($namesmulti as $multi )
         <p>{{ $multi['name'] }}</p>
         @empty
             no names
         @endforelse

    </p>
</div>

