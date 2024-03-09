<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <link rel="stylesheet" href="styles.css">

    
    <title>Parkir Kendaraan</title>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
</head>

<body>
    <div class="container">
        <!-- <div class="img-parkir"></div> -->
        <!-- <img class="img-parkir" src="tempatparkir.png" alt="Gambar Contoh"> -->

        <header>
            <h1>Parkir Kendaraan</h1>
        </header>



        <div class="image-container">
            <img src="gambar/tempatparkir.png" alt="Gambar Responsif">
            <div id="gambar-atas" class="gambar-atas"></div>
            <div id="gambar-bawah" class="gambar-bawah"></div>
            <div id="gambar-sampingatas" class="gambar-sampingatas"></div>
            <div id="gambar-sampingatas" class="gambar-sampingbawah"></div>
        </div>
        <br>
        <div class="footer">
  <br>
</div>
    </div>
</body>

</html>

<script>
    $(document).ready(function () {

        fetchData();

        // $('.jumlahkendaraan').html("ihsihsihi");
        function fetchData() {
            $.get("getkendaraan.php", function (data) {
                var parsedData = JSON.parse(data);
                // Iterasi melalui data yang diambil
                for (var i = 0; i < parsedData.length; i++) {
                    var id_sensor = parsedData[i].id_sensor;
                    var status = parsedData[i].status;




                    // alert(jumlah);

                    if (id_sensor == '1' && status == '1') {
                        $('.gambar-atas').show();

                    } else if (id_sensor == '1' && status == '0') {
                        $('.gambar-atas').hide();

                    } else if (id_sensor == '2' && status == '1') {
                        $('.gambar-bawah').show();
                    } else if (id_sensor == '2' && status == '0') {
                        $('.gambar-bawah').hide();
                    } else if (id_sensor == '3' && status == '1') {
                        $('.gambar-sampingatas').show();
                    } else if (id_sensor == '3' && status == '0') {
                        $('.gambar-sampingatas').hide();
                    } else if (id_sensor == '4' && status == '1') {
                        $('.gambar-sampingbawah').show();
                    } else if (id_sensor == '4' && status == '0') {
                        $('.gambar-sampingbawah').hide();
                    }
                }
                setTimeout(fetchData, 1000); // Panggil kembali setelah 1 detik
            });


        }
    });
</script>