<style>
    #admin_cloth {
        background-color: #D01345;
    }
</style>

<div class="admin-bg">
    <div class="admin-container bg-white pt-4 ps-5 pe-5">
        <form>
            <div class="aa-top-top ps-5 mb-5">
                <h3>Choose category you want to do with</h3>
                <div class="col-4 mb-2">
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
                <div class="d-grid col-4">
                    <button class="btn btn-success">CHOOSE</button>
                </div>
            </div>

            <hr>

            <div class="aa-top d-flex mt-5 ps-5">
                <div class="aa-left">
                    <h3>Add new cloth</h3>

                    <div class="d-flex mb-2">
                        <div style="width: 40%;">
                            <label class="form-label col-auto">name</label>
                            <div class="col-10">
                                <input class="form-control" type="text">
                            </div>
                        </div>
                        <div style="width: 40%;">
                            <label class="form-label col-auto">brand</label>
                            <div class="col-8">
                                <input class="form-control" type="text">
                            </div>
                        </div>
                    </div>

                    <label class="form-label col-auto">datail</label>
                    <div class="col-8 mb-2">
                        <textarea class="form-control"></textarea>
                    </div>


                    <div class="d-flex mb-2">
                        <div style="width: 24%;">
                            <label class="form-label col-auto">cost_origin</label>
                            <div class="col-10">
                                <input class="form-control" type="number">
                            </div>
                        </div>

                        <div style="width: 24%;">
                            <label class="form-label col-auto">cost</label>
                            <div class="col-10">
                                <input class="form-control" type="number">
                            </div>
                        </div>

                        <div style="width: 23%;">
                            <label class="form-label col-auto">quantity</label>
                            <div class="col-10">
                                <input class="form-control" type="number">
                            </div>
                        </div>
                    </div>

                    <div class="d-grid col-8">
                        <button class="btn btn-success">ADD</button>
                    </div>
                </div>



                <div class="aa-right">
                    <h3>Edit existed order</h3>

                    <label class="form-label col-auto">id</label>
                    <div class="col-8 mb-2">
                        <input class="form-control" type="text"></input>
                    </div>

                    <div class="d-flex mb-2">
                        <div style="width: 40%;">
                            <label class="form-label col-auto">name</label>
                            <div class="col-10">
                                <input class="form-control" type="text">
                            </div>
                        </div>
                        <div style="width: 40%;">
                            <label class="form-label col-auto">brand</label>
                            <div class="col-8">
                                <input class="form-control" type="text">
                            </div>
                        </div>
                    </div>

                    <label class="form-label col-auto">datail</label>
                    <div class="col-8 mb-2">
                        <textarea class="form-control"></textarea>
                    </div>


                    <div class="d-flex mb-2">
                        <div style="width: 24%;">
                            <label class="form-label col-auto">cost_origin</label>
                            <div class="col-10">
                                <input class="form-control" type="number">
                            </div>
                        </div>

                        <div style="width: 24%;">
                            <label class="form-label col-auto">cost</label>
                            <div class="col-10">
                                <input class="form-control" type="number">
                            </div>
                        </div>

                        <div style="width: 23%;">
                            <label class="form-label col-auto">quantity</label>
                            <div class="col-10">
                                <input class="form-control" type="number">
                            </div>
                        </div>
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
                        <th>name</th>
                        <th>brand</th>
                        <th style="padding-right: 100px;">detail</th>
                        <th>cost_origin</th>
                        <th>cost</th>
                        <th>quantity</th>
                        <th>rating</th>
                        <th>1star</th>
                        <th>2star</th>
                        <th>3star</th>
                        <th>4star</th>
                        <th>5star</th>
                        <th>num_review</th>
                        <th>Fucntion</th>
                    </tr>

                    <tr>
                        <td>1</td>
                        <td>Gucchi 2018</td>
                        <td>Gucchi</td>
                        <td>Lấy chất liệu từ da dê truyền thống, mang đậm chất 2018</td>
                        <td>303.5</td>
                        <td>202.1</td>
                        <td>13</td>
                        <td>4.4</td>
                        <td>0</td>
                        <td>0</td>
                        <td>0</td>
                        <td>2</td>
                        <td>1</td>
                        <td>3</td>
                        <td>
                            <button class="btn btn-danger">Del</button>
                        </td>
                    </tr>

                    <tr>
                        <td>1</td>
                        <td>Gucchi 2018</td>
                        <td>Gucchi</td>
                        <td>Lấy chất liệu từ da dê truyền thống, mang đậm chất 2018</td>
                        <td>303.5</td>
                        <td>202.1</td>
                        <td>13</td>
                        <td>4.4</td>
                        <td>0</td>
                        <td>0</td>
                        <td>0</td>
                        <td>2</td>
                        <td>1</td>
                        <td>3</td>
                        <td>
                            <button class="btn btn-danger">Del</button>
                        </td>
                    </tr>


                </table>
            </div>
        </form>
    </div>
</div>