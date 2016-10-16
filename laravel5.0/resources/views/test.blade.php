@extends('app')

@section('content')
    <h2>Test Page! Created by {{ $first }} {{ $last }}</h2>

    @if($first == "Aei")
        <h3>Hi {{ $first }}</h3>
    @else
        <h3>$first != Aei so the else is called</h3>
    @endif
    
    <p>Esse do qui labore aliquip cupidatat nulla id in ipsum aute ea non non. Nulla magna exercitation cillum mollit ad ut enim cillum incididunt. Magna commodo occaecat tempor magna deserunt dolor nostrud nulla do ea aliqua officia laborum sit Lorem. Velit aliquip sunt pariatur aliqua sint cupidatat irure.</p>
  @stop

  @section('footer')
    <h3>This only shows in the app.blade footer from the test page</h3>
    <script>alert('Some Javascript run in the app.blade footer only from this test page view')</script>
  @stop
