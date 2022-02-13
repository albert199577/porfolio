<?php include_once "./db.php"; ?>

<h2 class="text-center font-weight-bold">Add Portfolio</h2>
<?php
    
?>
<h3 class="text-center m-2"></h3> 
<form action="./api/edit_portfolio_item.php?" method="POST" enctype="multipart/form-data">
    <section class="d-flex justify-content-center">
        <section>
            <img src="./img/" alt="" style="width: 250px; height: 250px">
            <div class="text-center">
                <input type="file" name="file" id="file" accept="image/jpeg/png" >
            </div>
        </section>
        <section>       
            <ul class="p-3 d-flex flex-column justify-content-around m-0 h-100">
                <div class="input-group my-2">
                    <div class="input-group-prepend">
                        <div class="input-group-text">Name:</div>
                    </div>
                    <input class="input-group-prepend" type="text" name="name" id="name">
                </div>
                <div class="input-group my-2">
                    <div class="input-group-prepend">
                        <div class="input-group-text">Class:</div>
                    </div>
                    <select name="class" id="class">
                        <option value="website">website</option>
                        <option value="design">design</option>
                    </select>
                </div>
                <div class="input-group my-2">
                    <div class="input-group-prepend">
                        <div class="input-group-text">GitHub Url:</div>
                    </div>
                    <input class="input-group-prepend" type="text" name="github_url" id="github_url">
                </div>
                <div class="input-group my-2">
                    <div class="input-group-prepend">
                        <div class="input-group-text">Url:</div>
                    </div>
                    <input class="input-group-prepend" type="text" name="url" id="url">
                </div>
            </ul>
        </section>
    </section>
    <button class="mx-auto d-block my-3 btn btn-light" type="submit">送出</button>
</form>

