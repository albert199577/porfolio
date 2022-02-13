<?php include_once "./db.php"; ?>

<div class="col-md-3">
    <form action="../api/upload_ad.php" method="POST" enctype="multipart/form-data">
        <div class='custom-file mx-auto d-block mb-2'>
            <label for="upload" class='custom-file-label'>選擇檔案：</label>
            <input class="custom-file-input" type="file" name="name" id="upload">
        </div>
        <div class="text-center input-group">
            <label for="intro">說明: </label>
            <input class="input-group-prepend" type="text" name="intro" id="intro">
        </div>
        <div class="text-center">
            <input type="submit" value="上傳" class="btn btn-primary m-4">
        </div>
    </form>
</div>
