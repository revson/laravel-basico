@extends("site.templates.template1")

@section('content')

<h1>Page Index</h1>

<!-- para execurta o js, tem que mudar a tag para !! $xss !! dentro das chaves
{{$xss}}

@if($var1 == '1234')
<p>É igual</p>
@else
<p>é difetente</p>
@endif

{{-- if de forma negative --}}

// se quiser sabaer se e falso
@unless($var1 == '1234')
<p>não é igual ... unless</p>
@endunless

@for($i = 0; $i < 10; $i ++)
<p>for: {{$i}}</p>
@endfor

@if(count($arrayData) > 0)

    @foreach($arrayData as $array)
    <p>foreach: {{$array}}</p>
    @endforeach

@else
<p>Não existem itens para serem  impressos</p>
@endif

{{-- um for each com verificacao de  variavel vazia na mesma instrucao --}}
@forelse($arrayData as $array)
<p>foreach: {{$array}}</p>
@empty
<p>Não existem itens para serem  impressos</p>
@endforelse

@include('site.includes.sidebar', compact('var1'))


@endsection

{{-- depois de ter feito a chamada no template, acrescenta arquivos referentes a esta pagina --}}
@push("scripts")

<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

@endpush