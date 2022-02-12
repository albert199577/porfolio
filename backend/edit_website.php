<form action="./api/edit_website.php" method="POST">
    <input type="text" name="id" id="id" style="display: none;" value="1">
    <p>
        <label for="name">website</label>
        <input type="text" name="name" id="name" value="<?=$About -> find(1)["name"];?>">
    </p>
    <p>
        <label for="title">Title</label>
        <input type="text" name="title" id="title" value="<?=$About -> find(1)["title"];?>">
    </p>
    <p>
        <label for="intro">Intro</label>
        <textarea name="intro" id="intro" cols="30" rows="10"><?=$About -> find(1)["intro"];?></textarea>
    </p>
    <button>edit</button>
</form>