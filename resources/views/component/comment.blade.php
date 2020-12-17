<div>
    <form action="/comment/store" method="POST">
        @csrf
        <input type="hidden" id="post_id" name="post_id" value="{{ $post->id }}">
        <div class="text-area-text-container">
            <input class="form-control post-form @error('user_comment') is-invalid @enderror" name="user_comment" id="user_comment" rows="2" maxlength="144" placeholder="Comment">
            <input type="submit" style="position: absolute; left: -9999px"/>
        </div>
    </form>
    @foreach($comments as $comment)
        @if($post->id == $comment->post)
            <div class="comment-wrapper">
                <div class="comment-image-wrapper">
                    <a href="#" rel="nofollow">
                        <img class="comment-user-image" src="{{URL::asset('/images/ninomaeinanis.gif')}}" alt="user-profile" />
                    </a>
                </div>
                <div class="comment-text-container">
                    <p class="comment-user-name-wrapper">{{ $comment->user }}</p>
                    <p class="comment-text-wrapper">{{ $comment->comment }}</p>
                </div>
            </div>
        @endif
    @endforeach
</div>
