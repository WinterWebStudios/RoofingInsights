<?php
$id = $_GET['id'];
$result = $connection->query("SELECT * FROM posts WHERE id=$id");
$row = $result->fetch_array()
?>
<h1>Edit a post</h1>
<hr>

<form method="post" action="../api/editpost.php" enctype="multipart/form-data">
    <div class="row">
        <div class="col-10">
            <input style="margin-bottom: 10px" name="title" class="form-control" type="text" placeholder="Title" value="<?=$row['title']?>">
        </div>
        <div class="col">
            <select id="inputState" name="tag" class="form-control">
                <option selected>Choose...</option>
                <?php
                $result = $connection->query("SELECT * FROM categories");
                while($row2 = $result->fetch_array())
                {
                    echo '<li class="nav-item">';
                    echo '<option value="'.$row2['id'].'">'.$row2['name'].'</option>';
                    echo '</li>';
                }
                ?>
            </select>
        </div>
    </div>
    <input style="margin-bottom: 10px" name="summary" class="form-control" type="text" placeholder="Summary (max length: 300 characters)" maxlength="300" value="<?=$row['summary']?>">
    <textarea style="height: 500px" id="editor" name="text"><?=$row['text']?></textarea>
    <input type="hidden" name="author" value="<?= $_SESSION['riUser'] ?>">
    <input type="hidden" name="id" value="<?= $id ?>">
<!--    <input style="margin-bottom: 10px; margin-top: 10px" name="iframe" class="form-control" type="text" placeholder="youtube iframe" value="--><?//=$row['iframe']?><!--">-->



    <button style="margin-top: 10px" type="submit" class="btn btn-primary">Edit Post</button>
    <label class="custom-control custom-checkbox">
        <input type="checkbox" name="amazon" class="custom-control-input">
        <span class="custom-control-indicator"></span>
        <span class="custom-control-description">Has an amazon product</span>
    </label>

</form>

<script src="../ck/ckeditor.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/codemirror/5.25.0/codemirror.min.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/froala-editor/2.7.3/js/froala_editor.pkgd.min.js"></script>

<script>
    CKEDITOR.replace( 'editor' );
</script>