<?php include_once "./db.php";?>
<div class="border border-info p-5 mx-auto my-5 w-50">
    <h1 class="text-center">Website</h1>
    <div class="form-group row align-items-center justify-content-center m-5">
        <label for="color" class="col-6 text-center m-0">Color</label>
        <select class="form-control col-6" id="color" name="color">
            <option value="#f5f8fd">light blue</option>
            <option value="#CDD4FA">powder blue</option>
            <option value="#C5E3E3">powder green</option>
            <option value="#E6F9E8">light green</option>
            <option value="#E3E3C5">powder brown</option>
            <option value="#FFF3D9">powder pink</option>
        </select>
    </div>
    <div class="text-center">
        <button class="btn btn-info mx-auto" onclick="color()">Edit</button>
    </div>
</div>

<script>
const color = async () => {
    let formData = {
        color: $("#color").val(),
        id: 1
    };
    let data = await fetch("./api/edit_website_color.php", {
        method: "POST",
        body: JSON.stringify(formData),
        headers: new Headers({
            "Content-type": "application/json"
        })
    });
    let parseData = await data.json();
    console.log(parseData);
}


let option = document.querySelectorAll("option");

const selectColor = (dbColor) => {
    option.forEach(e => {
        if (e.value == dbColor) {
            e.true;
        }
    });
}

</script>