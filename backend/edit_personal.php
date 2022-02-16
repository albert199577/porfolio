<?php include_once "./db.php";?>
<div class="border border-info p-4 mx-auto my-5 w-75">
	<h1>Personal</h1>
	<input type="text" name="id" id="id" style="display: none;" value="1">
	<div class="form-group">
		<label for="exampleFormControlInput1">Name</label>
		<input type="text" class="form-control" name="name" id="name" value="<?=$About -> find(1)["name"];?>">
	</div>
	<div class="form-group">
		<label for="exampleFormControlInput1">Title</label>
		<input type="text" class="form-control" name="title" id="title" value="<?=$About -> find(1)["title"];?>">
	</div>
	<div class="form-group">
		<label for="exampleFormControlTextarea1">Intro</label>
		<textarea class="form-control" name="intro" id="intro" rows="5"><?=$About -> find(1)["intro"];?></textarea>
	</div>
	<div class="text-center">
		<button class="btn btn-info mx-auto" onclick="personal()">Edit</button>
	</div>
</div>
<section class="mmodal">
	<section class="modal-con">
		<i class="fa-solid fa-circle-check"></i>
		<p>Update completed</p>
	</section>
</section>

<script>
	const personal = async() => {
		let formData = {
			name: $("#name").val(),
			title: $("#title").val(),
			intro: $("#intro").val(),
			id : 1
		};
		let data = await fetch("./api/edit_personal.php", {
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
</script>