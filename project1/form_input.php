<?php

include('header.php');

include('sidebar.php');

?>

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Body Mass Index (BMI) Calculator</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="javascript:void(0)">Dashboard</a></li>
                        <li class="breadcrumb-item active">Home</li>
                    </ol>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">

        <!-- Default box -->
        <div class="card">
            <div class="card-body">
                <div class="card card-info">
                    <div class="card-header">
                        <h3 class="card-title">Count Your Body Mass Index (BMI)</h3>
                    </div>
                    <!-- /.card-header -->
                    <!-- form start -->
                    <form action="data.php" method="post" class="form-horizontal">

                        <input type="hidden" name="date" value="<?php echo date("d-m-Y"); ?>">

                        <div class="card-body">
                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">Name</label>
                                <div class="col-sm-10">
                                    <input type="text" name="name" class="form-control">
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">Weight (kilograms)</label>
                                <div class="col-sm-10">
                                    <input type="number" name="weight" class="form-control">
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">Height (centimeters)</label>
                                <div class="col-sm-10">
                                    <input type="number" name="height" class="form-control">
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">Age</label>
                                <div class="col-sm-10">
                                    <input type="number" name="age" class="form-control">
                                </div>
                            </div>

                            <div class="form-group row">

                                <label class="col-sm-2 col-form-label">Gender</label>
                                <div class="col-sm-10">
                                    <div class="icheck-primary d-inline">
                                        <input type="radio" id="male" name="gender" value="Male">
                                        <label for="male">Male</label>
                                    </div>
                                    <div class="icheck-primary d-inline">
                                        <input type="radio" id="female" name="gender" value="Female">
                                        <label for="female">Female</label>
                                    </div>
                                </div>

                            </div>

                        </div>
                        <!-- /.card-body -->
                        <div class="card-footer">
                            <button type="submit" class="btn btn-info">Submit</button>
                            <button type="reset" class="btn btn-default">Reset</button>
                        </div>
                        <!-- /.card-footer -->
                    </form>
                </div>


            </div>
            <!-- /.card-body -->
            <div class="card-footer">
            </div>
            <!-- /.card-footer-->
        </div>
        <!-- /.card -->

    </section>
    <!-- /.content -->
</div>
<!-- /.content-wrapper -->

<?php

include('footer.php');

?>