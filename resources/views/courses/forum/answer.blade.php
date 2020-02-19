<li>
    <div class="avatar">
        <a href="#"><img src="{{ Storage::url('avatars/'.$answer->author->avatar)}}" alt="">
        </a>
    </div>
    <div class="comment_right clearfix">
        <div class="comment_info">
            By {{$answer->author->name}}<span>|</span>{{$answer->created_at->format('j F, Y')}}
        </div>
        <p>
            {{$answer->answer}}
        </p>
    </div>
</li>