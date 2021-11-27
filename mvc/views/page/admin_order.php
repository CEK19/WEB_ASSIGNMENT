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
                    <h3 class="mb-3">Edit existed order</h3>

                    <div class="d-flex">
                        <div style="width: 20%;">
                            <label class="form-label col-auto">id</label>
                            <div class="col-10 mb-2">
                                <input class="form-control" type="text">
                            </div>
                        </div>

                        <div style="width: 70%;">
                            <label class="form-label col-auto">email</label>
                            <div class="col-8 mb-2">
                                <input class="form-control" type="email">
                            </div>
                        </div>
                    </div>


                    <div class="d-flex mb-2">
                        <div class="ac-co" style="width: 20%;">
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


                    <div class="d-flex mb-2">
                        <div class="ao-a" style="width: 24%;">
                            <label class="form-label col-auto">color</label>
                            <div class="col-10">
                                <select class="form-select">
                                    <option value="black" selected>black</option>
                                    <option value="white">white</option>
                                </select>
                            </div>
                        </div>

                        <div class="ao-b" style="width: 24%;">
                            <label class="form-label col-auto">size</label>
                            <div class="col-10">
                                <select class="form-select">
                                    <option value="black">S</option>
                                    <option value="white" selected>M</option>
                                    <option value="white">L</option>
                                    <option value="white">XL</option>
                                </select>
                            </div>
                        </div>

                        <div class="ao-c" style="width: 23%;">
                            <label class="form-label col-auto">quantity</label>
                            <div class="col-10">
                                <input class="form-control" type="number">
                            </div>
                        </div>
                    </div>

                    <label class="form-label col-auto">phone</label>
                    <div class="col-8 mb-2">
                        <input class="form-control" type="number">
                    </div>

                    <label class="form-label col-auto">address</label>
                    <div class="col-8 mb-2">
                        <input class="form-control" type="text">
                    </div>


                    <div class="d-flex mb-2">
                        <div class="ao-dm" style="width: 30%;">
                            <label class="form-label col-auto">deliveryMethod</label>
                            <div class="col-10 mb-2">
                                <select class="form-select">
                                    <option value="fast" selected>fast</option>
                                    <option value="normal">normal</option>
                                </select>
                            </div>
                        </div>

                        <div style="width: 40%;">
                            <label class="form-label col-auto">paymentMethod</label>
                            <div class="col-8 mb-2">
                                <select class="form-select">
                                    <option value="black">card</option>
                                    <option value="white">e-wallet</option>
                                </select>
                            </div>
                        </div>
                    </div>


                    <label class="form-label col-auto">cardNumber</label>
                    <div class="col-8 mb-2">
                        <input class="form-control" type="text">
                    </div>

                    <label class="form-label col-auto">e-wallet</label>
                    <div class="col-8 mb-2">
                        <input class="form-control" type="text">
                    </div>

                    <div class="d-grid col-8">
                        <button class="btn btn-success">EDIT</button>
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

                    <tr>
                        <td>2</td>
                        <td>tu.user@hcmut.edu.vn</td>
                        <td>2</td>
                        <td>pants_jog</td>
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
                    </tr>

                    <tr>
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
                    </tr>

                </table>
            </div>
        </form>
    </div>
</div>

<!-- <script type="text/javascript" src="./public/js/admin_account.js"></script> -->