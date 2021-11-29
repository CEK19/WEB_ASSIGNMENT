<style>
    #admin_comment {
        background-color: #D01345;
    }
</style>

<div class="admin-bg">
    <div class="admin-container bg-white pt-4 ps-5 pe-5">
        <form>
            <div class="aa-top d-flex mt-3 ps-5">
                <div class="aa-left">
                    <h3>Add new comment</h3>
                    
                    <label class="form-label col-auto">email</label>
                    <div class="col-8 mb-2">
                        <input class="form-control" type="email">
                    </div>

                    <div class="d-flex mb-2">
                        <div style="width: 20%;">
                            <label class="form-label col-auto">clothID</label>
                            <div class="col-10">
                                <input class="form-control" type="number">
                            </div>
                        </div>
                        <div style="width: 70%;">
                            <label class="form-label col-auto">category</label>
                            <div class="col-8">
                                <select class="form-select">
                                    <option selected>Choose one category</option>
                                    <option value="access_bag">access_bag</option>
                                    <option value="access_caps">access_caps</option>
                                    <option value="access_glass">access_glass</option>
                                    <option value="pants_jeans">pants_jeans</option>
                                    <option value="pants_jog">pants_jog</option>
                                    <option value="pants_lounges">pants_lounges</option>
                                    <option value="shirt_polo">shirt_polo</option>
                                    <option value="shirt_shirt">shirt_shirt</option>
                                    <option value="shirt_tshirt_vest">shirt_tshirt_vest</option>
                                    <option value="shoes_sandals_slippers">shoes_sandals_slippers</option>
                                    <option value="shoes_shocks">shoes_shocks</option>
                                    <option value="shoes_trainers">shoes_trainers</option>
                                </select>
                            </div>
                        </div>
                    </div>

                    <label class="form-label col-auto">star</label>
                    <div class="col-8 mb-2">
                        <input class="form-control" type="number">
                    </div>

                    <label class="form-label col-auto">comment</label>
                    <div class="col-8 mb-2">
                        <textarea class="form-control" style="min-height: 62px;"></textarea>
                    </div>

                    <div class="d-grid col-8">
                        <button class="btn btn-success">ADD</button>
                    </div>
                </div>



                <div class="aa-right">
                    <h3>Edit existed comment</h3>

                    <div class="d-flex mb-2">
                        <div style="width: 20%;">
                            <label class="form-label col-auto">id</label>
                            <div class="col-10">
                                <input class="form-control" type="number">
                            </div>
                        </div>
                        <div style="width: 70%;">
                            <label class="form-label col-auto">email</label>
                            <div class="col-8">
                                <input class="form-control" type="email">
                            </div>
                        </div>
                    </div>

                    <div class="d-flex mb-2">
                        <div style="width: 20%;">
                            <label class="form-label col-auto">clothID</label>
                            <div class="col-10">
                                <input class="form-control" type="number">
                            </div>
                        </div>
                        <div style="width: 70%;">
                            <label class="form-label col-auto">category</label>
                            <div class="col-8">
                                <select class="form-select">
                                    <option selected>Choose one category</option>
                                    <option value="access_bag">access_bag</option>
                                    <option value="access_caps">access_caps</option>
                                    <option value="access_glass">access_glass</option>
                                    <option value="pants_jeans">pants_jeans</option>
                                    <option value="pants_jog">pants_jog</option>
                                    <option value="pants_lounges">pants_lounges</option>
                                    <option value="shirt_polo">shirt_polo</option>
                                    <option value="shirt_shirt">shirt_shirt</option>
                                    <option value="shirt_tshirt_vest">shirt_tshirt_vest</option>
                                    <option value="shoes_sandals_slippers">shoes_sandals_slippers</option>
                                    <option value="shoes_shocks">shoes_shocks</option>
                                    <option value="shoes_trainers">shoes_trainers</option>
                                </select>
                            </div>
                        </div>
                    </div>

                    <label class="form-label col-auto">star</label>
                    <div class="col-8 mb-2">
                        <input class="form-control" type="number">
                    </div>

                    <label class="form-label col-auto">comment</label>
                    <div class="col-8 mb-2">
                        <textarea class="form-control" style="min-height: 62px;"></textarea>
                    </div>

                    <div class="d-grid col-8">
                        <button class="btn btn-success">ADD</button>
                    </div>
                </div>


            </div>

            <br>

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
        </form>
    </div>
</div>