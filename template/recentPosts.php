<h4 class="display-4">Recent Posts</h4>
<?php
$result = $connection->query("SELECT * FROM posts ORDER BY id DESC LIMIT 3");
while($row = $result->fetch_array())
{
    echo '<div class="post">';
    echo '<a href="viewpost.php?id='.$row['id'].'">'.$row['iframe'].'</a>';
    echo '<h5><a href="viewpost.php?id='.$row['id'].'">'.$row['title'].'<small class="float-right text-muted">'.explode(' ',$row['date'])[0].'</small></a></h5>';
    echo '<footer class="blockquote-footer">'.$row['author'].' <span class="badge badge-primary">'.$row['tags'].'</span></footer>';
    echo '</div>';
}
?>