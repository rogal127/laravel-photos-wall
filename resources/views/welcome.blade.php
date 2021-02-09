@include('header')
    @foreach($photos as $photo)
        <div class="Photo">
            <img src="{{asset("images/$photo->path")}}" alt="">
            <div class="react">
                <i class="zmdi zmdi-thumb-up"></i>
                <i class="zmdi zmdi-thumb-down"></i>
                <i class="zmdi zmdi-favorite"></i>
                <i class="zmdi zmdi-share"></i>
            </div>
        </div>
    @endforeach
@include('footer')