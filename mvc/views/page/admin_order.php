<style>
    #admin_order {
        background-color: #D01345;
    }
</style>

<div class="admin-bg">
    <div class="admin-container bg-white pt-4 ps-5 pe-5">
        <form>
            <div class="aa-top d-flex ps-5">
                <div style="width: 80%;">
                    <h3 class="mb-3">Query order customer</h3>

                    <label class="form-label col-auto">Email</label>
                    <div class="col-8 mb-2">
                        <input class="form-control" type="text">
                    </div>

                    <div class="d-grid col-8 mb-5">
                        <button class="btn btn-success">QUERY BASED ON EMAIL</button>
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
                        <th>color</th>
                        <th>size</th>
                        <th>quantity</th>
                        <th>phone</th>
                        <th style="padding-right: 100px;">address</th>
                        <th>deliveryMethod</th>
                        <th>paymentMethod</th>
                        <th>cardNumber</th>
                        <th>e-wallet</th>
                        <th>Fucntion</th>
                    </tr>

                    <?php
                    if (isset($data['item_data'])) {
                        foreach ($data['item_data'] as $item) {
                    ?>

                            <tr id="order-row-<?php echo $item['id']; ?>">
                                <td><?php echo $item['id']; ?></td>
                                <td><?php echo $item['email']; ?></td>
                                <td><?php echo $item['clothID']; ?></td>
                                <td><?php echo $item['category']; ?></td>
                                <td><?php echo $item['color']; ?></td>
                                <td><?php echo $item['size']; ?></td>
                                <td><?php echo $item['quantity']; ?></td>
                                <td><?php echo $item['phone']; ?></td>
                                <td><?php echo $item['address']; ?></td>
                                <td><?php echo $item['deliveryMethod']; ?></td>
                                <td><?php echo $item['paymentMethod']; ?></td>
                                <td><?php echo $item['cardNumber']; ?></td>
                                <td><?php echo $item['e-wallet']; ?></td>
                                <td>
                                    <button class="btn btn-danger">Del</button>
                                </td>
                            </tr>

                    <?php
                        }
                    }
                    ?>



                    <!-- <tr>
                        <td>2</td>
                        <td>tu.user@hcmut.edu.vn</td>
                        <td>15</td>
                        <td>pants_jeans</td>
                        <td>black</td>
                        <td>M</td>
                        <td>2</td>
                        <td>0915882863</td>
                        <td>Bình Hưng Hòa, Ga Hòa Hưng, kênh nhiêu lộc</td>
                        <td>fast</td>
                        <td>card</td>
                        <td>123087653</td>
                        <td>paypal</td>
                        <td>
                            <button class="btn btn-danger">Del</button>
                        </td>
                    </tr> -->

                </table>
            </div>
        </form>
    </div>
</div>

<!-- <script type="text/javascript" src="./public/js/admin_account.js"></script> -->