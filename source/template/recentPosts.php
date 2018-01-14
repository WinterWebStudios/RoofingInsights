<h4 class="display-4">Recent Posts</h4>
<?php
$result = $connection->query("SELECT * FROM posts ORDER BY id DESC LIMIT 3");
while($row = $result->fetch_array())
{
    echo '<div class="post">';
    if(!empty($row['iframe']))
        //echo $row['iframe'];
        echo '<div class="youtube-player" data-id="'.substr(strrchr($row['iframe'], '/'), 1 ).'"></div>';
    else
        echo '<img src="imgs/placeholder.png">';
    echo '<h5><a href="viewpost.php?id='.$row['id'].'">'.$row['title'].'<small class="float-right text-muted">'.explode(' ',$row['date'])[0].'</small></a></h5>';
    echo '<footer class="blockquote-footer">'.$row['author'].' <span class="badge badge-primary">'.$row['tags'].'</span></footer>';
    echo '</div>';
}
?>