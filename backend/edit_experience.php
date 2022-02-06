<?php include_once "../db.php";?>

<form action="./api/edit_experience.php" method="POST">
    Experience
    <input type="text" name="id" id="id" style="display: none;" value="1">
    <?php 
    $rows = $Exp -> all();
    dd($rows);
    foreach ($rows as $key => $value) {
    ?>
    <p>
        <label for="name">Title</label>
        <input type="text" name="name" id="name" value="<?=$value["title"];?>">
    </p>
    <p>
        <label for="title">Date</label>
        <input type="text" name="title" id="title" value="<?=$value["date"];?>">
    </p>
    <p>
        <label for="intro">Intro</label>
        <textarea name="intro" id="intro" cols="30" rows="10"><?=$value["department"];?></textarea>
    </p>
    <?php
    }
    ?>
    <button>edit</button>
</form>