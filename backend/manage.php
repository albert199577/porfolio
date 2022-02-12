<?php
include_once "./db.php";
$user = $Account -> find(1);
if (isset($_SESSION['user']) != $user['account']) {
    to("./backstage.php");
}
?>
<section class="manage-page">
    <main class="manage">
        <ul class="manage-nav">
            <li><a href="?do=manage&edit=personal">Personal</a></li>
            <li><a href="?do=manage&edit=experience">Experience</a></li>
            <li><a href="?do=manage&edit=portfolio">Portfolio</a></li>
            <li><a href="?do=manage&edit=website">Website</a></li>
        </ul>
        <main class="container">
            <?php
                $do = $_GET['edit'] ?? "personal";
                $file = "./backend/edit_" . $do . ".php";
                if (file_exists($file)) {
                    include $file;
                } else {
                    include "./backend/edit_personal.php";
                }
            ?>
        </main>
    </main>
</section>