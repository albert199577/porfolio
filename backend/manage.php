<?php
$user = $Account -> find(1);
if (isset($_SESSION['user']) != $user['account']) {
    to("./backstage.php");
}
?>
<section class="manage-page">
    <main class="manage">
        <ul class="manage-nav">
            <li><a href="javascript:void(0)" onclick="personalEdit()">Personal</a></li>
            <li><a href="javascript:void(0)" onclick="ExperienceEdit()">Experience</a></li>
            <li><a href="javascript:void(0)" onclick="portfolioEdit()">Portfolio</a></li>
            <li><a href="javascript:void(0)" onclick="websiteEdit()">Website</a></li>
        </ul>
        <section class="contain">
            <?php include "./backend/edit_personal.php";?>
        </section>
    </main>
    <h1></h1>
    <main class="container">
        
    </main>
</section>