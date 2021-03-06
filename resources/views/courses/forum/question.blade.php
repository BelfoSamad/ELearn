<li>
    <div class="avatar">
        <a href="#"><img src="{{ Storage::url('avatars/'.$question->author->avatar)}}" alt="">
        </a>
    </div>
    <div class="comment_right clearfix">
        <div class="comment_info">
            By
            {{$question->author->name}}<span>|</span>{{$question->created_at->format('j F, Y')}}
        </div>
        <p>{{$question->question}}
        </p>
    </div>
    <ul class="replied-to">
        <h5>Answer</h5>
        <form>
            <div class="form-group">
                <textarea class="form-control" name="answer" id="answer" rows="2" placeholder="Answer"></textarea>
            </div>
            <div class="form-group">
                <button type="submit" id="submit2" class="btn_1 rounded add_bottom_30">
                    Submit</button>
            </div>
        </form>
    </ul>
</li>