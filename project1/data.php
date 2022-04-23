<?php

require_once 'count_BMI.php';


include('header.php');

include('sidebar.php');

$no = 1;
$code = "P" . sprintf("%03s", $no);
$no++;

$date = $_POST['date'] ?? '';
$name = $_POST['name'] ?? '';
$age = $_POST['age'] ?? '';
$gender = $_POST['gender'] ?? '';
$weight = $_POST['weight'] ?? '';
$height = $_POST['height'] ?? '';


$pasien = new count_BMI($date, $name, $age, $gender, $weight, $height);

$weight_massa = $pasien->getResult();

//$convert_weight = number_format($pasien->getWeight(), 1);

$pasien1 = ['date' => '23-04-2022', 'name' => 'Na', 'age' => 19, 'gender' => 'Female', 'weight' => 50, 'height' => 167, 'result' => 17.9, 'categories' => 'Underweight = <18.5'];

$getByInput  = ['date' => $pasien->getDate(), 'name' => $pasien->getName(), 'age' => $pasien->getAge(), 'gender' => $pasien->getGender(), 'weight' => $pasien->getWeight(), 'height' => $pasien->getHeight(), 'result' => $pasien->getResult(), 'categories' => $pasien->getCategories($weight_massa)];

$data_pasien = [$pasien1, $getByInput];

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
                        <h3 class="card-title">Body Mass Index(BMI) Count Result</h3>
                    </div>
                    <!-- /.card-header -->
                    <!-- form start -->
                    <div class="card-body">
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Date</th>
                                    <th>Code</th>
                                    <th>Name</th>
                                    <th>aAge</th>
                                    <th>Gender</th>
                                    <th>Weight</th>
                                    <th>Height</th>
                                    <th>BMI Count</th>
                                    <th>Categories</th>
                                </tr>
                            </thead>
                            <heightody>
                                <?php
                                $nomor = 1;
                                foreach ($data_pasien as $x) {
                                    echo '<tr>';
                                    echo '<td>' . $nomor++ . '</td>';
                                    echo '<td>' . $x['date'] . '</td>';
                                    echo '<td>' . $code . '</td>';
                                    echo '<td>' . $x['name'] . '</td>';
                                    echo '<td>' . $x['age'] . '</td>';
                                    echo '<td>' . $x['gender'] . '</td>';
                                    echo '<td>' . $x['weight'] . '</td>';
                                    echo '<td>' . $x['height'] . '</td>';
                                    echo '<td>' . $x['result'] . '</td>';
                                    echo '<td>' . $x['categories']  . '</td>';
                                    echo '</tr>';
                                }
                                ?>
                            </heightody>
                        </table>

                    </div>

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