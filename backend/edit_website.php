<?php include_once "./db.php";?>
<div class="border border-info p-5 mx-auto my-5 w-50">
    <h1 class="text-center">Website</h1>
    <div class="form-group row align-items-center justify-content-center m-5">
        <label for="color" class="col-3 text-center m-0">Color</label>
        <div class="color_demo mx-3" style="width: 30px; height: 30px;"></div>
        <select class="form-control col-6" id="color" name="color" onchange="changeColor()">
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
<section class="mmodal">
	<section class="modal-con">
		<i class="fa-solid fa-circle-check"></i>
		<p>Update completed</p>
	</section>
</section>

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
    let parseData = await data.text();
    console.log(parseData);
    let modal = document.querySelector(".mmodal");
    modal.style.display = "flex";
    setTimeout(() => {
        modal.style.display = "none";
    }, 1500)
}

const select = async () => {
    let data = await fetch("./api/website_color.php");
    let parseData = await data.text();
    let option = document.querySelectorAll("option");
    option.forEach(e => {
        if (e.value == parseData) {
            e.selected = 'selected';
        }
    });
    let demo = document.querySelector(".color_demo");
    demo.style.background = parseData;
}

const changeColor = () => {
    let option = document.querySelectorAll("option");
    let demo = document.querySelector(".color_demo");
    demo.style.backgroundColor = 
    option.forEach(e => {
        if (e[selected='selected']) {
            let color = e.value;
            console.log(color)
            demo.style.backgroundColor = color;
        }
    });
}
select();


</script>