@extends('app')

@section('content')
<h2>Contact Me Page!</h2>

<p>
<p>Nisi veniam deserunt minim officia pariatur commodo officia culpa consequat ullamco enim minim. Ad elit est esse Lorem elit sint magna. Minim exercitation deserunt qui aliqua velit cillum nostrud sit duis sint officia eu culpa. Ad nisi anim veniam excepteur nisi magna dolor consectetur ipsum dolor commodo dolore mollit aute.</p>
<p>Consectetur Lorem nisi deserunt quis adipisicing occaecat proident tempor. Eiusmod officia veniam culpa sit officia velit amet sunt amet veniam ut non nostrud Lorem cupidatat. Ipsum minim incididunt eu ex enim fugiat quis quis duis consequat mollit. Incididunt occaecat Lorem Lorem dolore adipisicing est sunt excepteur. Ad sunt voluptate aliqua fugiat ut veniam exercitation do irure ut minim nostrud cupidatat.</p>
<p>Excepteur duis laborum consequat qui minim in velit consequat. Amet enim id aute dolore do occaecat ipsum culpa sunt ut aute. Id proident velit sunt quis in dolor consectetur labore nisi. Anim ad fugiat et ullamco ex aute velit enim nostrud ullamco aute. Pariatur in voluptate adipisicing nostrud proident laborum fugiat aliquip do non excepteur et in. Deserunt est nisi qui aliqua anim enim dolor id deserunt ut incididunt amet pariatur eiusmod tempor aliquip sit.</p>
<p>Incididunt consectetur adipisicing Lorem consectetur minim exercitation dolore proident aliquip pariatur. Velit laboris do veniam fugiat proident sint mollit id voluptate nostrud. Duis proident cillum eiusmod ullamco ex commodo elit laborum duis anim adipisicing eu pariatur qui.</p>
</p>

@if (count($people))

  <h3>People I like:</h3>
  <ul>
    @foreach ($people as $person)
      <li>
        {{ $person }}
      </li>
    @endforeach
  </ul>
@endif

@stop
