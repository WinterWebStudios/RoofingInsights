<h1>Manage Users</h1>
<hr>
<table class="table">
    <thead class="thead-dark">
    <tr>
        <th scope="col">ID</th>
        <th scope="col">email</th>
        <th scope="col">username</th>
        <th scope="col">name</th>
        <th scope="col">password</th>
    </tr>
    </thead>
    <tbody>
    <?php
    $result = $connection->query("SELECT * FROM users");
    while($row = $result->fetch_array())
    {
        echo "<tr>";
        echo "<td>".$row['id']."</td>";
        echo "<td>".$row['email']."</td>";
        echo "<td>".$row['username']."</td>";
        echo "<td>".$row['name']."</td>";
        echo "<td>".$row['password']."</td>";
        echo "</tr>";
    }
    ?>
    </tbody>
</table>

<a href="" class="btn btn-primary">Add a user</a>


