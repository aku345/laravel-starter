@section('content')
<div class="row">
    <h1>All [Models]</h1>
    <a class="btn btn-success" href="{{ url('[model]/create') }}">New</a>
</div>
<div class="row">
    <table class="table">
        <thead>
        [repeat]<th>[Property]</th>[/repeat]
        </thead>
        <tbody>
        @foreach($[models] as $[model])
        <tr>
            [repeat]
            <td>
                <a href="{{ url('[model]/'.$[model]->id) }}">{{ $[model]->[property] }}</a>
            </td>
            [/repeat]
        </tr>
        @endforeach
        </tbody>
    </table>
</div>
@stop
