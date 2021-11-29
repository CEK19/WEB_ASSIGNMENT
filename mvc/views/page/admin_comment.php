<style>
    #admin_comment {
        background-color: #D01345;
    }
</style>

<div class="admin-bg">
    <div class="admin-container bg-white pt-4 ps-5 pe-5">

        <!-- ===== TABLE ===== -->
        <div class="table-responsive">
            <table class="table table-striped align-middle table-hover table-bordered">
                <tr>
                    <th>id</th>
                    <th>email</th>
                    <th>clothID</th>
                    <th>category</th>
                    <th>star</th>
                    <th style="padding-right: 100px;">comment</th>
                    <th>Fucntion</th>
                </tr>

                <?php
                if (isset($data['item_data'])) {
                    foreach ($data['item_data'] as $item) {
                ?>

                        <tr id="comment-row-<?php echo $item['id']; ?>">
                            <td><?php echo $item['id']; ?></td>
                            <td><?php echo $item['email']; ?></td>
                            <td><?php echo $item['clothID']; ?></td>
                            <td><?php echo $item['category']; ?></td>
                            <td><?php echo $item['star']; ?></td>
                            <td><?php echo $item['comment']; ?></td>
                            <td>
                                <button class="btn btn-danger">Del</button>
                            </td>
                        </tr>

                <?php
                    }
                }
                ?>


            </table>
        </div>

    </div>
</div>