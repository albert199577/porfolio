<?php include_once "./db.php"; ?>
<section class="exp-page">
    <div class="border border-info p-4 mx-auto my-5 ">
        <h1>Experience</h1>
        <section class="education">
            <h4>education</h4>
            <table class="table table-hover">
                <thead>
                    <tr>
                        <th scope="col">No.</th>
                        <th scope="col">Title</th>
                        <th scope="col">Date</th>
                        <th scope="col">Intro</th>
                        <th scope="col"></th>
                    </tr>
                </thead>
                <tbody>
                <?php 
                $rows = $Exp -> all();
                foreach ($rows as $key => $value) {
                    $i = 1;
                ?>
                    <input type="hidden" name="id" id="id" value="<?=$value["id"];?>">
                    <tr>
                        <th scope="row"><?=$i;?></th>
                        <td><input type="text" class="form-control" name="title" id="title" value="<?=$value["title"];?>"></td>
                        <td><input type="text" class="form-control" name="date" id="date" value="<?=$value["date"];?>"></td>
                        <td><textarea type="text" class="form-control" name="department" id="department" cols="30" rows="1" ><?=$value["department"];?></textarea></td>
                        <td><button class="btn btn-info" onclick="edu()">Edit</button></td>
                    </tr>
                <?php
                    $i++;
                }
                ?>
                </tbody>
            </table>
        </section>
        
        <section class="work-experience">
            <h4>work-experience</h4>
            <table class="table table-hover">
                <thead>
                    <tr>
                        <th scope="col">No.</th>
                        <th scope="col">Title</th>
                        <th scope="col">Date</th>
                        <th scope="col">Intro</th>
                        <th scope="col"></th>
                    </tr>
                </thead>
                <tbody>
                <?php 
                $rows = $Work -> all();
                foreach ($rows as $key => $value) {
                    $i = 1;
                ?>
                    <input type="hidden" name="id" id="id2" value="<?=$value["id"];?>">
                    <tr>
                        <th scope="row"><?=$i;?></th>
                        <td><input type="text" class="form-control" name="title2" id="title2" value="<?=$value["title"];?>"></td>
                        <td><input type="text" class="form-control" name="date2" id="date2" value="<?=$value["date"];?>"></td>
                        <td><textarea type="text" class="form-control" name="department2" id="department2" cols="30" rows="1" ><?=$value["department"];?></textarea></td>
                        <td><button class="btn btn-info" onclick="work()">Edit</button></td>
                    </tr>
                <?php
                    $i++;
                }
                ?>
                </tbody>
            </table>
        </section>
    </div>
</section>
<section class="mmodal">
	<section class="modal-con">
		<i class="fa-solid fa-circle-check"></i>
		<p>Update completed</p>
	</section>
</section>
<script>
    const edu = async() => {
		let formData = {
			title: $("#title").val(),
			date: $("#date").val(),
			department: $("#department").val(),
			id : $("#id").val()
		};
		let data = await fetch("./api/edit_experience.php", {
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

    const work = async() => {
		let formData = {
			title: $("#title2").val(),
			date: $("#date2").val(),
			department: $("#department2").val(),
			id : $("#id2").val()
		};
		let data = await fetch("./api/edit_experience_work.php", {
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