<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
    </head>
    <body>
      @if($itemCount = count($items))
        <p>{{ $itemCount }} 종류의 과일이 있습니다.</p>
      @else
        <p>엥~ 아무것도 없는데요..</p>
      @endif

        <ul>
          @foreach($items as $item)
            <li>{{ $item }}</li>
          @endforeach
        </ul>

        <ul>
          @forelse($items2 as $item)
            <li>{{ $item }}</li>
          @empty
            <li>엥~ 아무것도 없는데요!</li>
          @endforelse
        </ul>
    </body>
</html>
