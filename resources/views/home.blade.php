<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>LARAVEL PRIMI PASSI</title>
</head>
<body>
  <h1>HelloWorld</h1>

  {{-- per usare if in laravel dobbiamo utilizzare if con la @ davanti come abbiamo fatto qui sotto e chiudere il comando con @endif. Si può inserire direttamente l'html da stampare all'interno del nostro if --}}
  @if ($name === 'Isabella')
    <h4>Acccesso consentito</h4>
  @else
    <h4>Acccesso negato</h4>
  @endif

  <ul>
    @foreach ($scarpe as  $scarpa)
      <li><a href="{{$scarpa}}">{{$scarpa}}</a></li>
    @endforeach
  </ul>


</body>
</html>