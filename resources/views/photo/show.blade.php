@include('header')
<img src="{{asset("images/$photo->path")}}" alt="">
<div id="rest">
    <div id="td">
        <div id="left">
            <div id="title">
                <p>{{$photo->title}}</p>
            </div>
            <div id="user">
                <i class="zmdi zmdi-account-circle"></i>
                <p>{{$photo->user->name}}</p>
            </div>
        </div>
        <div id="right">
            <div id="like"><i class="zmdi zmdi-thumb-up"></i>{{$photo->likes}}</div>
            <div id="dislike"><i class="zmdi zmdi-thumb-down"></i>{{$photo->dislikes}}</div>
        </div>
    </div>
    <div id="descript">
        {{$photo->description}}
    </div>
</div>
@include('footer')