@extends('layouts/main')

@section('container')
    <div>
        <h1 id="tes-div" style="height: 100vh">Ini Adalah div</h1>
        <h1 class="h-1">Class</h1>
        <script>
            $(divtes);
        </script>
    </div>
    <ul>
        <li><a href="home">Home</a></li>
    </ul>

    <div class="col-lg-4 mt-3" id="172dm">
        <button class="btn btn-primary" type="submit">172 Diamonds</button>
    </div>

    <div>
        <div class="container">
            <p id="harga"></p>
        </div>
    </div>

    <?php
    if (isset($_POST['save'])) {
        $id = $_POST['idakun'];
        $zone = $_POST['serverakun'];
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, 'https://api-xyz.com/trueid/mobilelegends/?id=' . $id . '&zone' . $zone . '&token=NguyenThuWan');
        curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
        curl_setopt($ch, CURLOPT_SSL_VERIFPEER, 0);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($ch, CURLOPT_FLOWLOCATION, 0);
        $result = curl_exec($ch);
        curl_close($ch);
        $res = json_decode($result, true);
    }
    ?>

    <?php
    
    $curl = curl_init();
    
    curl_setopt_array($curl, [
        CURLOPT_URL => 'https://api-xyz.com/trueid/mobilelegends/?id=960207848&zone=12821',
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_ENCODING => '',
        CURLOPT_MAXREDIRS => 10,
        CURLOPT_TIMEOUT => 0,
        CURLOPT_FOLLOWLOCATION => true,
        CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
        CURLOPT_CUSTOMREQUEST => 'GET',
    ]);
    
    $response = curl_exec($curl);
    
    curl_close($curl);
    echo $response;
    ?>

    <form action="" method="POST">
        <div class="row">
            <div class="col-6">
                <div class="form-floating mb-3">
                    <input type="number" name="id" id="floatinginput">
                    <label for="floatinginput">ID Player</label>
                </div>
            </div>
            <div class="col-6">
                <div class="form-floating mb-3">
                    <input type="number" name="zone" class="form-control" id="floatinginput">
                    <label for="floatinginput">ID Zone</label>
                </div>
            </div>
        </div>
    </form>

    <button class="btn btn-danger" name="Save">Cek ID</button>
    <p><? echo $res["nickname"]?></p>

    <script>
        // $(document).ready(function() {
        //     alert('hello world');
        //     alert($("#tes-div").html());
        // });

        $(function() {
            var divtes = document.getElementById('tes-div');
            alert('hello world');
            alert($("#tes-div").html());
            alert($('li')[0].innerHTML);
            $(divtes);
            alert($(".h-1"));

        });
    </script>
@endsection
