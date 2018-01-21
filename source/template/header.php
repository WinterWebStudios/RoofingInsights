<header>
    <div class="container">
        <div class="logoBox">
            <a href="index.php">
                <img class="logo" src="imgs/logo.png">
                <h1>Roofing Insights</h1>
            </a>
        </div>
        <form method="get" action="search.php">
            <div class="input-group mb-2 mr-sm-2 mb-sm-0">
                <div class="input-group-addon">Search</div>
                <input type="search" name="query" class="form-control" id="inlineFormInputGroupUsername2" placeholder="Search...">
            </div>
        </form>

        <nav class="navbar navbar-expand-lg navbar-light">
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <form class="form-inline my-2 my-lg-0 navSearch" method="get" action="search.php">
                <input class="form-control mr-sm-2" type="search" name="query" placeholder="Search" aria-label="Search">
            </form>
            <div class="collapse navbar-collapse" id="navbarNav">
                <div class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link" href="index.php">Home</a>
                    </li>
                    <?php
                    $result = $connection->query("SELECT * FROM categories WHERE parent=0");
                    for($i = 0; $i < 8; $i++)
                    {
                        $row = $result->fetch_array();
                        $resultSub = $connection->query("SELECT * FROM categories WHERE parent=".$row['id']);
                        if($resultSub->num_rows < 1) {
                            echo '<li class="nav-item">';
                            echo '<a class="nav-link" href="viewsection.php?id='.$row['id'].'">' . $row['name'] . '</a>';
                            echo '</li>';
                        }else{
                            echo '<li class="nav-item dropdown">';
                            echo '<a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">'.$row['name'].'</a>';
                            echo '<div class="dropdown-menu" aria-labelledby="navbarDropdown">';
                            while($resultRow = $resultSub->fetch_array()) {
                                echo '<a class="dropdown-item" href="viewsection.php?id='.$resultRow['id'].'">'.$resultRow['name'].'</a>';
                            }
                            echo '</div>';
                            echo '</li>';
                        }
                    }
                    ?>
                    <li class="nav-item">
                        <a class="nav-link" href="contact.php">Contact Us</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="http://example.com" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            More
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                            <?php
                                while($row = $result->fetch_array()) {
                                    echo '<a class="dropdown-item" href="viewsection.php?id='.$row['id'].'">'.$row['name'].'</a>';
                                }
                            ?>
                        </div>
                    </li>
                </ul>
            </div>
        </nav>
    </div>
</header>
