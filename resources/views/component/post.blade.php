<div class="post-container">
    <div class="user-container">
        <div class="user-image-container">
            <a href="#" rel="nofollow">
                <img class="user-image" src="{{URL::asset('/images/ninomaeinanis.gif')}}" alt="user-profile" />
            </a>
        </div>
        <div class="user-name-container">
            <p class="user-name">Reenko</p>
            <p class="post-date">3h</p>
        </div>
        <div class="user-menu-container">
            <div class="user-menu-button">
                <img src="{{URL::asset('/images/triple-dot.svg')}}" alt="search">
            </div>
        </div>
    </div>
    <div class="item-container">
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nisi perferendis voluptas magni pariatur! Harum, repellendus perspiciatis sed consequatur in animi distinctio labore laudantium ea cupiditate aliquam odit illum tempore reiciendis?</p>
    </div>
    <div class="counter-container">
        <div class="counter-like">
            <p>William Christian</p>
        </div>
        <div class="counter-comment">
            <p>1 Comment</p>
        </div>
    </div>
    <div class="button-container">
        <div class="like-button">
            <p>Like</p>
        </div>
        <div class="comment-button">
            <p>Comment</p>
        </div>
    </div>
    <div class="comment-container">
        @include('component.comment')
    </div>
</div>