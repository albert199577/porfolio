<?php include_once "./db.php"; ?>
<section class="exp-page">
    <div class="container">
        <div class="mx-auto">
            <h3 class="text-center">Portfolio List</h3>
            <table class="table text-center">
                <tr>
                    <td>Picture</td>
                    <td>Name</td>
                    <td>Class</td>
                    <td class='col-2'>Github Url</td>
                    <td class='col-2'>Url</td>
                    <td>Status</td>
                    <td colspan="3">Manage</td>
                </tr>
                <?php
                $rows = $Portfolio -> all();
                foreach ($rows as $row) {
                ?>
                <tr>
                    <td>
                        <img src="./img/<?=$row['img'];?>" style="width: 100px; height: 100px";>
                    </td>
                    <td>
                        <?=$row['name'];?>
                    </td>
                    <td>
                        <?=$row['class'];?>
                    </td>
                    <td>
                        <?=$row['github_url'];?>
                    </td>
                    <td>
                        <?=$row['url'];?>
                    </td>
                    <td>
                        <a href="./api/change_status.php?id=<?=$row['id'];?>">
                            <?=$row['sh'] == 1 ? 'Showing' : 'Down';?>
                        </a>
                    </td>
                    <td>
                        <a href="./backstage.php?do=manage&edit=portfolio_item&id=<?=$row['id'];?>">
                            <button class="btn btn-success">Edit</button>
                        </a>
                        <a href="./api/del_ad.php?id=<?=$row['id'];?>">
                            <button class="btn btn-danger">Delete</button>
                        </a>
                    </td>
                </tr>
                <?php
                }
                ?>
            </table>
            <button class="mx-auto d-block my-3 btn btn-light" onclick="location.href='./backstage.php?do=manage&edit=portfolio_add'">+</button>
        </div>
    </div>
</section>
