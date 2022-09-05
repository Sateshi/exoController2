<div>
    @foreach ($crew as $mate)
        <div>
            <img src="{{$mate["url"]}}" alt="">
            <p>{{$mate["name"]}}</p>
            <p>{{$mate["fonction"]}}</p>
        </div>
    @endforeach
</div>
