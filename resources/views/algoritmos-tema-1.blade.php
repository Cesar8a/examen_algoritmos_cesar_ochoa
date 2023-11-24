<h1>Algoritmos-tema-1</h1>

<h2>Alice:</h2>
<ul>
	@foreach($a as $value)
	<li>{{$value}}</li>
	@endforeach
</ul>

<h2>Bob:</h2>
<ul>
	@foreach($b as $value)
	<li>{{$value}}</li>
	@endforeach
</ul>

<h2>Output:</h2>
<ul>
	<li>{{ $output[0]['nombre'] }}: {{ $output[0]['categoria'] }}</li>
	<li>{{ $output[1]['nombre'] }}: {{ $output[1]['categoria'] }}</li>
</ul>
