<?php include_once "./db.php"; ?>
<section class="exp-page">
    <div class="container">
        <div class="mx-auto">
            <h3 class="text-center">Contact List</h3>
            <table class="table text-center">
                <tr>
                    <td>Name</td>
                    <td>Mail</td>
                    <td class='col-2'>Subject</td>
                    <td class='col-3'>message</td>
                    <td>Manage</td>
                </tr>
                <?php
                $rows = $Contact -> all(['sh' => 1]);
                foreach ($rows as $row) {
                ?>
                <tr>
                    <td>
                        <?=$row['name'];?>
                    </td>
                    <td>
                        <?=$row['mail'];?>
                    </td>
                    <td>
                        <?=$row['subject'];?>
                    </td>
                    <td>
                        <?=$row['message'];?>
                    </td>
                    <td>
                        <a href="mailto:<?=$row['mail'];?>">
                            <button class="btn btn-success">Reply</button>
                        </a>
                        <a href="./api/del_contact.php?id=<?=$row['id'];?>">
                            <button class="btn btn-danger">Delete</button>
                        </a>
                    </td>
                </tr>
                <?php
                }
                ?>
            </table>
        </div>
    </div>
</section>
