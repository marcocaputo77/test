@if($utenti)
<ul>
@foreach($utenti as $utente)
    <li>
    {{$utente->name}}
    </li>
    @endforeach
    @endif