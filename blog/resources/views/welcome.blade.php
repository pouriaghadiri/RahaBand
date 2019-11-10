@extends("Layout.main")
@section("title")
    Raha Band
@endsection
@section("main_content")
    Raha Band
@endsection
@section("urls")
    {{csrf_field()}}
    @foreach($urls as $url)
        <a href="{{$url}}">git</a>
    @endforeach
@endsection
