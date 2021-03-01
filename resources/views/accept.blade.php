@include('header')
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <link rel="stylesheet" href="{{asset('style/toIndex.css')}}">
    @foreach($photos as $photo)
        <div class="Photo">
            <a href="/zdjecie/{{$photo->id}}"><img src="{{asset("images/$photo->path")}}" alt=""></a>
            <div class="react">
                <i class="zmdi zmdi-thumb-up"><a href="/akceptuj-zdjecie/{{$photo->id}}">Akceptuj</a></i>
                <i class="zmdi zmdi-thumb-down"><a href="/odrzuc-zdjecie/{{$photo->id}}">Odrzuć</a></i>
            </div>
        </div>
    @endforeach
    {{ $photos->links('pagination::bootstrap-4') }}

@include('footer')