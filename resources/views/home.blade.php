
<h1>
    Bem-vindo a página inicial!
</h1>
<p>
    Olá, {{$name}}
</p>
<p>
    Seus hábitos são:
</p>
<ul>
    @foreach($habitos as $item)
        <li>{{$item}}</li>
    @endforeach
</ul>

