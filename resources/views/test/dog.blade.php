@extends('templates.default')

@section('content')
    {{-- <h1>{{$username}}</h1>
    <h1>{{$nickname}}</h1> --}}

    <form action="{{ route('mailing.create') }}" method ="POST">
    <input type="text" name="email" value="{{ old('email') }}">
        <input type="submit">
        {{csrf_field() }}
    </form>

    @if ($errors->has('email'))
        <div> {{ $errors->first('email') }} </div>
    @endif

    @if (session('status'))
        <div class="alert alert-sucess">
            {{ session('status') }}
        </div>
    @endif


@if($posts->count())
            @foreach($posts as $post)
                <h4>{{ $post->title }}</h4>
                <p>{{ $post->body }}</p>
                <p>{{ $post->updated_at->diffForHumans() }}</p>
                <p>{{ $post->updated_at->format('H:i') }}</p>
                <p>{{ $post->getFullText() }}</p>
            @endforeach

            @else
                <p>no posts</p>
        @endif

@endsection



        





@section('scripts')
<script>
alert("This is a script!");

</script>
@endsection