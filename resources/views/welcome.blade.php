@include('header')
    <link rel="stylesheet" href="{{asset('style/toIndex.css')}}">
    @foreach($photos as $photo)
        <div class="Photo">
            <a href="/zdjecie/{{$photo->id}}"><img src="{{asset("images/$photo->path")}}" alt=""></a>
            <div class="react">
                <i class="zmdi zmdi-thumb-up"></i>
                <i class="zmdi zmdi-thumb-down"></i>
                <i class="zmdi zmdi-favorite"></i>
                <i class="zmdi zmdi-share"></i>
            </div>
        </div>
    @endforeach
@include('footer')