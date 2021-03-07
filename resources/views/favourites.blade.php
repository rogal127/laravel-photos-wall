@include('header')
<div>
    @include('cookieConsent::index')
</div>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <link rel="stylesheet" href="{{asset('style/toIndex.css')}}">
    @foreach($photos as $photo)
        {{$path = $photo->photo->path}}
        <div class="Photo">
            <a href="/zdjecie/{{$photo->photo->id}}"><img src="{{asset("images/$path")}}" alt=""></a>
            <div class="react">
                <i style="float: right;" class="zmdi zmdi-share"></i>
            </div>
        </div>
    @endforeach
@include('footer')