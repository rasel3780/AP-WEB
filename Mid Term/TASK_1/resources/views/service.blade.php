@extends("layouts.app")
@section('content')
<table>
    @foreach($ser as $s)
        <tr><td>{{$s}}</td></tr>
    @endforeach
</table>
@endsection


