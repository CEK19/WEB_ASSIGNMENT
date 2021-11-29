<style>
    #admin_account {
        background-color: #D01345;
    }
</style>

<div class="admin-bg">
    <div class="admin-container bg-white pt-4 ps-5 pe-5">
        <form>
            <div class="aa-top d-flex ps-5">
                <div class="aa-left">
                    <h3>Add/Edit existed user</h3>

                    <div class="mb-2 mt-2">
                        <button type="button" class="btn btn-primary col-2 me-1" id="add-btn">Add</button>
                        <button type="button" class="btn btn-dark col-2" id="edit-btn">Edit</button>
                    </div>

                    <div class="d-none" id="left"> <!-- dont change this id name -->
                        <div class="d-none" id="user-id"> <!-- dont change this id name -->
                            <label class="form-label col-auto">User ID</label>
                            <div class="col-8 mb-2">
                                <input class="form-control" type="number">
                            </div>
                        </div>

                        <label class="form-label col-auto">First Name</label>
                        <div class="col-8 mb-2">
                            <input class="form-control" type="text">
                        </div>

                        <label class="form-label col-auto">Last Name</label>
                        <div class="col-8 mb-2">
                            <input class="form-control" type="text">
                        </div>

                        <label class="form-label col-auto">email</label>
                        <div class="col-8 mb-2">
                            <input class="form-control" type="email">
                        </div>

                        <div class="d-grid col-8">
                            <button class="btn btn-success">OK</button>
                        </div>
                    </div>


                </div>
                <div class="aa-right">
                    <h3>Edit type of existed user</h3>

                    <label class="form-label col-auto">User ID</label>
                    <div class="col-8 mb-2">
                        <input class="form-control" type="number">
                    </div>

                    <label class="form-label col-auto">Type</label>
                    <div class="col-8 mb-2">
                        <select class="form-select">
                            <option selected>Choose level for account</option>
                            <option value="1">user level</option>
                            <option value="2">admin level</option>
                        </select>
                    </div>

                    <div class="d-grid col-8">
                        <button class="btn btn-success">OK</button>
                    </div>

                    <!-- =================================== -->                    
                </div>
            </div>

            <br>

            <!-- ===== TABLE ====== -->
            <div class="table-responsive">
                <table class="table table-striped align-middle table-hover">
                    <tr>
                        <th>UserID</th>
                        <th>Avatar</th>
                        <th>First Name</th>
                        <th>Last Name</th>
                        <th>Email</th>
                        <th>Type</th>
                        <th>Fucntion</th>
                    </tr>

                    <tr>
                        <td>9</td>
                        <td class="py-1">
                            <div style="width: 50px;"><img src="./assets/img/av0.png" width="100%"></div>
                        </td>
                        <td>Kong</td>
                        <td>Cute</td>
                        <td>admin@gmail.com</td>
                        <td>admin</td>
                        <td>
                            <button class="btn btn-danger">Kick</button>                            
                        </td>
                    </tr>

                    <?php
                    if (isset($data['item_data'])) {
                        foreach ($data['item_data'] as $item) {
                    ?>

                            <tr id="comment-row-<?php echo $item['user_id']; ?>">
                                <td><?php echo $item['user_id']; ?></td>
                                <td class="py-1">
                                    <div style="width: 50px;"><img src="./assets/img/av0.png" width="100%"></div>
                                </td>
                                <td><?php echo $item['firstName']; ?></td>
                                <td><?php echo $item['lastName']; ?></td>
                                <td><?php echo $item['email']; ?></td>
                                <td><?php 
                                    if($item['level'] == 1) echo "user";
                                    else if($item['level'] == 2) echo "admin";
                                    else echo "undefined";
                                ?></td>
                                <td>
                                    <button class="btn btn-danger">Kick</button>                                    
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

<script type="text/javascript" src="./public/js/admin_account.js"></script>