<h1>Manage Categories</h1>
<hr>
<table class="table">
    <thead class="thead-dark">
    <tr>
        <th scope="col">ID</th>
        <th scope="col">Name</th>
        <th scope="col">Parent</th>
    </tr>
    </thead>
    <tbody>
    <?php
    $result = $connection->query("SELECT * FROM categories");
    while($row = $result->fetch_array())
    {
        echo "<tr>";
        echo "<td>".$row['id']."</td>";
        echo "<td>".$row['name']."</td>";
        echo "<td>".$row['parent']."</td>";
        echo "</tr>";
    }
    ?>
    </tbody>
</table>

<form class="form-inline" action="../api/newcat.php" method="post">
    <input type="text" style="margin-right: 10px; " class="form-control" name="name" placeholder="name...">
    <input type="text" style="margin-right: 10px; " class="form-control" name="parent" placeholder="parent..." value="0">
    <button class="btn btn-primary">Add a Category</button>

</form>



