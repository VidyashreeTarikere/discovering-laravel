@extends('layouts.app')

@section('content')

<div class="contact-form">
    <h1>Contact Us</h1>
    <form action="/contact" method="post">
        <div class="txtb">
            <label for="">Full Name</label>
            <input type="text" name="name" value="" placeholder="Name">
        </div>

        <div class="txtb">
            <label for="">Phone Number</label>
            <input type="text" name="number" value="" placeholder="Phone Number">
        </div>
        @csrf
        <button>Send Message</button>
    </form>
    <p style="color:red;">@error('name') {{$message}} @enderror</p><br>
    <p style="color:cadetblue;">@error('number') {{$message}} @enderror</p>
</div>
@stop



















<!-- @extends('layouts.app')

@section('content')

<h1>Contact </h1>
@if(count($people))
<ul>
    @foreach($people as $person)
    <li>{{$person}}</li>
    @endforeach
</ul>
@endif
@endsection

@section('footer')

@endsection -->