@include('header')
<div>
    @include('cookieConsent::index')
</div>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <link rel="stylesheet" href="{{asset('style/toIndex.css')}}">
    @foreach($photos as $photo)
        <div class="Photo">
            <a href="/zdjecie/{{$photo->id}}"><img src="{{asset("images/$photo->path")}}" alt=""></a>
            <div class="react">
                <a href="like/{{$photo->id}}"><i class="zmdi zmdi-thumb-up">({{$photo->likes}})</i></a>
                <a href="dislike/{{$photo->id}}"><i class="zmdi zmdi-thumb-down">({{$photo->dislikes}})</i></a>
                <a href="favourite/{{$photo->id}}"><i class="zmdi zmdi-favorite"></i></a>
                <i style="float: right;" class="zmdi zmdi-share"></i>
            </div>
        </div>
    @endforeach
    {{ $photos->links('pagination::bootstrap-4') }}
@include('footer')