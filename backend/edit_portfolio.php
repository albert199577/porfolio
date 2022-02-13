<?php include_once "./db.php"; ?>
<section class="exp-page">
    <div class="container">
        <div class="mx-auto">
            <h3 class="text-center">作品列表</h3>
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
                            <?=$row['sh'] == 1 ? '展示中' : '下架中';?>
                        </a>
                    </td>
                    <td>
                        <a href="./backstage.php?do=manage&edit=portfolio_item&id=<?=$row['id'];?>">
                            <button class="btn btn-success">修改</button>
                        </a>
                        <a href="./api/del_ad.php?id=<?=$row['id'];?>">
                            <button class="btn btn-danger">刪除</button>
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
