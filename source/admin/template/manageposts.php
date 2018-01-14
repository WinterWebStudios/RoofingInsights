<h1>Manage Posts</h1>
<hr>
<table class="table">
    <thead class="thead-dark">
    <tr>
        <th scope="col">ID</th>
        <th scope="col">Title</th>
        <th scope="col">Date</th>
        <th scope="col">Author</th>
        <th scope="col">Actions</th>
    </tr>
    </thead>
    <tbody>
    <?php
        $result = $connection->query("SELECT * FROM posts");
        while($row = $result->fetch_array())
        {
            echo "<tr>";
                echo "<td>".$row['id']."</td>";
                echo "<td>".$row['title']."</td>";
                echo "<td>".$row['date']."</td>";
                echo "<td>".$row['author']."</td>";
                echo "<td><a href='../api/updatePost.php?action=feature&id=".$row['id']."'>[Make Feature]</a> <a href='../api/updatePost.php?action=show&id=".$row['id']."'>[Make Showcase]</a> <a href='../api/updatePost.php?action=delete&id=".$row['id']."'>[Delete]</a> <a href='../admin/admin.php?view=edit&id=".$row['id']."'>[Edit]</a></td>";
            echo "</tr>";
        }
    ?>
    </tbody>
</table>


