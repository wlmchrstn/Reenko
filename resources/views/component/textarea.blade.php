<div class="text-area-container">
    <form action="/post/store" method="POST">
        @csrf
        <div class="text-area-wrapper">
            <div class="text-area-image-container">
                <a href="/home" rel="nofollow">
                    <img class="text-area-user-image" src="{{URL::asset('/images/ninomaeinanis.gif')}}" alt="Reenko" />
                </a>
            </div>
            <div class="text-area-text-container">
                <input class="form-control post-form @error('user_post') is-invalid @enderror" name="user_post" id="user_post" rows="2" maxlength="144" placeholder="Who do you SIMP for?">
            </div>
        </div>
        <div class="button-wrapper">
            <button class="btn button-primary shadowbox" type="submit">Post</button>
        </div>
    <form>
</div>