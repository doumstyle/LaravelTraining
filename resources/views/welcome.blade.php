@inject('date', 'App\Utilities\Date')

@extends("layouts/main", ['title' => 'Home'])

@section('content')

<h1>Demo</h1>

@if($date::isWeekend())
    {{ "C'est le weekend !" }}
@else
    {{ "Ce n'est pas le weekend :(" }}
@endif

@endsection

@section('footer')
<br />
&copy; Doums 2017. 

@endsection


