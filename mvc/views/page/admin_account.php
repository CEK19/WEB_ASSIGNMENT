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

                    <label class="form-label col-auto">User ID</label>
                    <div class="col-8 mb-2">
                        <input class="form-control" type="text">
                    </div>

                    <label class="form-label col-auto">F_Name</label>
                    <div class="col-8 mb-2">
                        <input class="form-control" type="text">
                    </div>

                    <label class="form-label col-auto">L_Name</label>
                    <div class="col-8 mb-2">
                        <input class="form-control" type="text">
                    </div>

                    <label class="form-label col-auto">email</label>
                    <div class="col-8 mb-2">
                        <input class="form-control" type="text">
                    </div>

                    <div class="d-grid col-8">
                        <button class="btn btn-success">OK</button>
                    </div>
                </div>
                <div class="aa-right">
                    <h3>Edit type of existed user</h3>

                    <label class="form-label col-auto">User ID</label>
                    <div class="col-8 mb-2">
                        <input class="form-control" type="text">
                    </div>

                    <div class="d-grid col-8">
                        <button class="btn btn-success">OK</button>
                    </div>

                    <h3 class="mt-5">Import img for user</h3>

                    <label for="formFile" class="form-label col-auto">Upload file</label>
                    <div class="d-grid col-8 mb-2">
                        <input class="form-control" type="file" id="formFile">
                    </div>

                    <div class="d-grid col-8">
                        <button class="btn btn-success">SUBMIT</button>
                    </div>
                </div>
            </div>

            <br>


            <table class="table table-striped">
                <tr>
                    <th>UserID</th>
                    <th>Avatar</th>
                    <th>F_Name</th>
                    <th>L_Name</th>
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
                        <button class="btn btn-warning">Del img</button>
                    </td>
                </tr>

                <tr>
                    <td>3</td>
                    <td class="py-1">
                        <div style="width: 50px;"><img src="./assets/img/av0.png" width="100%"></div>
                    </td>
                    <td>tu</td>
                    <td>le</td>
                    <td>tu.user@hcmut.edu.vn</td>
                    <td>user</td>
                    <td>
                        <button class="btn btn-danger">Kick</button>
                        <button class="btn btn-warning">Del img</button>
                    </td>
                </tr>

                <tr>
                    <td>3</td>
                    <td class="py-1">
                        <div style="width: 50px;"><img src="./assets/img/av0.png" width="100%"></div>
                    </td>
                    <td>tu</td>
                    <td>le</td>
                    <td>tu.user@hcmut.edu.vn</td>
                    <td>user</td>
                    <td>
                        <button class="btn btn-danger">Kick</button>
                        <button class="btn btn-warning">Del img</button>
                    </td>
                </tr>
            </table>



        </form>
    </div>
</div>