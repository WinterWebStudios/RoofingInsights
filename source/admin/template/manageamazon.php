<h1>Manage Amazon</h1>
<hr>
<table class="table">
    <thead class="thead-dark">
    <tr>
        <th scope="col">ID</th>
        <th scope="col">text</th>
    </tr>
    </thead>
    <tbody>
    <?php
    $result = $connection->query("SELECT * FROM amazon");
    while($row = $result->fetch_array())
    {
        echo "<tr>";
        echo "<td>".$row['id']."</td>";
        echo "<td>".$row['text']."</td>";
        echo "</tr>";
    }
    ?>
    </tbody>
</table>

<a href="admin.php?view=addamazon" class="btn btn-primary">Add a product</a>


