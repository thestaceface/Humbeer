<div id="ce">
    <h2>Comments</h2>

    <div id="ce_list"></div>

    <form id="ce_form" name="ce_form" method="POST" action=".">
        <label for="ce_name">
            Name: <input type="text" name="ce_name" id="ce_name" />
        </label>
        <br />
        <label for="ce_comment">
            Comment: <textarea name="ce_comment" id="ce_comment"></textarea>
        </label>
        <br />
        <input type="submit" value="Add Comment" />
    </form>
</div>
<!--every one works except LinkedIn right now.... in process of figuring it out :) -->
<div id="share_links">
<a href="http://www.facebook.com/sharer/sharer.php?u=<?php $_SERVER['HTTP_REFERER'] ?>">Share on Facebook</a>
<a href="http://www.linkedin.com/shareArticle?mini=true&url=<?php $_SERVER['HTTP_REFERER']?>">Share LinkedIn Here</a>
<a href="http://twitter.com/intent/tweet?text=Message&url=<?php $_SERVER['HTTP_REFERER']?>">Share Twitter Here</a>
    </div>