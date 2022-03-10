<!DOCTYPE html>
<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous" />
    <title>Belanja Online</title>
</head>

<body>
    <div class="container">
                <h1 class="display-5">Belanja Online</h1>
        <div class="row justify-content-lg-between">
            <div class="col-lg-4 mb-3 order-lg-1 order-2">
                <form method="POST" class="border-4 border-dark" action="belanja.php">
                    <div class="mb-3 d-lg-flex">
                        <label for="exampleFormControlInput1" class="form-label me-4 align-self-center">Customer</label>
                        <input type="text" class="form-control" name="nama" placeholder="Nama Customer" value="" />
                    </div>

                    <div class="mb-3 d-flex gap-2">
                        <label class="form-label me-2">Pilih Produk</label>
                        <input class="form-check-input" name="produk" type="radio" value="tv" />
                        <label class="form-check-label">TV</label>
                        <input class="form-check-input" name="produk" type="radio" value="kulkas" />
                        <label class="form-check-label">Kulkas</label>
                        <input class="form-check-input" name="produk" type="radio" value="mesincuci" />
                        <label class="form-check-label">Mesin Cuci</label>
                    </div>

                    <div class="mb-3 d-lg-flex">
                        <label class="form-label align-self-center me-5">Jumlah</label>
                        <input type="text" class="form-control w-50" placeholder="Jumlah" name="jumlah" value="" />
                    </div>
                    
                    <div class="mb-3">
                        <button type="submit" class="btn btn-primary" name="proses">Submit</button>
                    </div>

                    <?php
                        $proses = $_POST["proses"];
                        $nama = $_POST["nama"];
                        $produk = $_POST["produk"];
                        $jumlah = $_POST["jumlah"];

                        $total=0;
                        if ($produk == "tv") {
                            $total = $jumlah * 4200000;
                        } elseif ($produk == "kulkas") {
                            $total = $jumlah * 3100000;
                        } elseif ($produk == "mesincuci") {
                            $total = $jumlah * 3800000;
                        } else {
                            $total;
                        }

                        echo "
                            <div>
                                Nama Customer : {$nama}<br/>
                                Produk Pilihan : {$produk}<br/>
                                Jumlah Beli : {$jumlah}<br/>
                                Total Belanja : Rp.{$total}<br/>
                            </div>
                            ";
                    ?>
                </form>

            </div>
            
            <div class="col-lg-4 mb-5 order-lg-2 order-1 shadow-md">
                <ul class="list-group">
                    <li class="list-group-item active" aria-current="true">
                        Daftar Harga
                    </li>
                    <li class="list-group-item">TV : 4.200.000</li>
                    <li class="list-group-item">Kulkas : 3.100.000</li>
                    <li class="list-group-item">Mesin Cuci : 3.800.000</li>
                    <li class="list-group-item active" aria-current="true">
                        Harga Dapat Berubah Setiap Saat
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>

</html>