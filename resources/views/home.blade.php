@extends('layouts/main')

@section('container')
    @if (session()->has('success'))
        <div class="alert alert-success alert-dismissible fade show mt-3 text-center" role="alert">
            {{ session('success') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    @endif

    <div class="container d-flex justify-content-lg-center mt-5">
        <div class="row">
            <div class="deskripsi col-lg-4 mb-3">
                <div class="row">
                    <div class="col-12">
                        <div class="card bg-dark shadow text-white">
                            <div class="card-body">
                                <img src="img/logoML.png" class="imgML" style="float:left;width:150px;">
                                <p class="mt-2 p-3">Top up MLBB/Mobile Legends: Bang Bang sekarang semakin mudah
                                    bersama AFDevShop! Kamu bisa menggunakannya untuk memiliki Starlight Member,
                                    Twilight Pass, membeli skin favorit kesukaanmu.
                                    Cukup masukkan ID, pilih nominal dan lakukan pembayaran. </p>
                            </div>
                        </div>
                        <div class="card bg-dark shadow text-white mt-4">
                            <div class="card-header text-center p-2">
                                <p>Petunjuk pemesanan</p>
                            </div>
                            <div class="card-body">
                                <p>1. Masukkan ID dan Server</p>
                                <p>2. Pilih Nominal Diamond</p>
                                <p>3. Pilih Metode Pembayaran</p>
                                <p>4. Tulis Nomor Whatsapp yang benar</p>
                                <p>5. Klik Submit dan lakukan pembayaran</p>
                                <p>6. Tunggu 1-10 Menit Setelah pembayaran terdeteksi oleh
                                    sistem kami. Silahkan check Invoice untuk melihat Transaksi pesanan
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="user col-lg-4">
                <div class="row">
                    <div class="col">
                        <div class="card bg-dark shadow text-white">
                            <div class="card-header">
                                <div class="card-title m-2">Masukkan Data</div>
                            </div>
                            <div class="card-body m-2">
                                <div class="userdata">
                                    <div class="row row-cols row-cols-md">
                                        <div class="input-group">
                                            <span class="input-group-text">ID and Server</span>
                                            <input type="text" aria-label="First name" class="form-control"
                                                placeholder="Id Akun" id="idakun" name="idAkun">
                                            <input type="text" aria-label="Last name" class="form-control"
                                                placeholder="Server Akun" id="serverakun" name="serverAkun">
                                        </div>


                                    </div>
                                    <div class="row row-cols row-cols-md mt-3">
                                        <div class="input-group mb-3">
                                            <span class="input-group-text" id="inputGroup-sizing-default">Nickname</span>
                                            <input type="text" class="form-control" aria-label="Sizing example input"
                                                aria-describedby="inputGroup-sizing-default" placeholder="Masukkan Nickname"
                                                id="nickname" name="nickname">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row mt-3">
                    <div class="col" id="diamond">
                        <div class="card bg-dark shadow text-white">
                            <div class="card-header">
                                <p>Pilih Varian Diamond</p>
                            </div>
                            <div class="card-body ">
                                <div class="varian">
                                    <div class="row row-cols-2 ">
                                        <div class="col-lg-4 mt-3">
                                            <div class="btn btn-primary">
                                                <input type="radio" name="Diamonds" value="86 = Rp. 22.000" id="86"
                                                    autocomplete="off" onclick="resultVarian(this.value)">
                                                <label for="86" id="varian">86 Diamonds</label>
                                            </div>
                                        </div>
                                        <div class="col-lg-4 mt-3">
                                            <div class="btn btn-primary">
                                                <input type="radio" name="Diamonds" value="172 = Rp. 42.000" id="172"
                                                    autocomplete="off" onclick="resultVarian(this.value)">
                                                <label for="172" id="varian">172 Diamonds</label>
                                            </div>
                                        </div>
                                        <div class="col-lg-4 mt-3">
                                            <div class="btn btn-primary">
                                                <input type="radio" name="Diamonds" value="257 = Rp. 64.000" id="257"
                                                    autocomplete="off" onclick="resultVarian(this.value)">
                                                <label for="257" id="varian">257 Diamonds</label>
                                            </div>
                                        </div>
                                        <div class="col-lg-4 mt-3">
                                            <div class="btn btn-primary">
                                                <input type="radio" name="Diamonds" value="344 = Rp. 84.000" id="344"
                                                    autocomplete="off" onclick="resultVarian(this.value)">
                                                <label for="344" id="varian">344 Diamonds</label>
                                            </div>
                                        </div>
                                        <div class="col-lg-4 mt-3">
                                            <div class="btn btn-primary">
                                                <input type="radio" name="Diamonds" value="429 = Rp. 108.000" id="429"
                                                    autocomplete="off" onclick="resultVarian(this.value)">
                                                <label for="429" id="varian">429 Diamonds</label>
                                            </div>
                                        </div>
                                        <div class="col-lg-4 mt-3">
                                            <div class="btn btn-primary">
                                                <input type="radio" name="Diamonds" value="878 = Rp. 200.000" id="429"
                                                    autocomplete="off" onclick="resultVarian(this.value)">
                                                <label for="429" id="varian">878 Diamonds</label>
                                            </div>
                                        </div>
                                    </div>
                                    <p class="mt-3">Harga : <input type="text" class="result text-white"
                                            id="resultHarga" disabled></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row mt-3">
                    <div class="col">
                        <div class="card bg-dark shadow">
                            <div class="card-header">
                                <p>Pilih Metode Pembayaran</p>
                            </div>
                            <div class="card-body">
                                <div class="pembayaran">
                                    <div class="row row-cols-2">
                                        <div class="col-lg-4 mt-3">
                                            <div class="btn btn-primary">
                                                <input type="radio" name="Pembayaran" value="Via Bank BSI"
                                                    id="bsi" autocomplete="off" onclick="resultPembayaran(this.value)">
                                                <label for="bsi">Bank BSI</label>
                                            </div>
                                        </div>
                                        <div class="col-lg-4 mt-3">
                                            <div class="btn btn-primary">
                                                <input type="radio" name="Pembayaran" value="Via DANA" id="dana"
                                                    autocomplete="off" onclick="resultPembayaran(this.value)">
                                                <label for="dana">DANA</label>
                                            </div>
                                        </div>
                                        <div class="col-lg-4 mt-3">
                                            <div class="btn btn-primary">
                                                <input type="radio" name="Pembayaran" value="Via ShopeePay"
                                                    id="shopeepay" autocomplete="off" onclick="resultPembayaran(this.value)">
                                                <label for="ShopeePay">ShopeePay</label>
                                            </div>
                                        </div>
                                        <p class="mt-3"><input type="text" class="result text-white"
                                            id="resultPembayaran" disabled hidden></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row mt-3">
                    <div class="col">
                        <div class="card bg-dark shadow">
                            <div class="card-header">
                                <p>Mauskkan Nomor Whatsapp</p>
                            </div>
                            <div class="card-body">
                                <div class="form-group mb-3">
                                    <label for="nomor" class="mb-2">Nomor Whatsapp</label>
                                    <input type="number" class="form-control mb-4" placeholder="Contoh : 0896xxxxxxxx"
                                        name="nmrWhatsapp" id="nmrWa">
                                    <div class="g-recaptcha" data-sitekey="6Lfq1FEgAAAAADVoyUoEK2rKeakXo0vl7ntDZ5xf">
                                    </div>
                                    <br />
                                    <!-- Button trigger modal -->
                                    <button type="button" class="btn btn-primary" data-bs-toggle="modal"
                                        data-bs-target="#staticBackdrop" id="submitBtn" onclick="beli()">
                                        Submit
                                    </button>

                                    <!-- Modal -->
                                    <div class="modal fade text-dark" id="staticBackdrop" data-bs-backdrop="static"
                                        data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel"
                                        aria-hidden="true">
                                        <div class="modal-dialog">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title text-dark" id="staticBackdropLabel">Check
                                                        Pesanan</h5>
                                                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                        aria-label="Close"></button>
                                                </div>
                                                <div class="modal-body">
                                                    <p>Periksa pesanan Anda terlebih dahulu</p>
                                                    <table class="table">
                                                        <tr>
                                                            <th>Nickname</th>
                                                            <td id="textnickname"></td>
                                                        </tr>
                                                        <tr>
                                                            <th>ID Akun</th>
                                                            <td id="textid"></td>
                                                        </tr>
                                                        <tr>
                                                            <th>Server Akun</th>
                                                            <td id="textserver"></td>
                                                        </tr>
                                                        <tr>
                                                            <th>Varian Dan Harga</th>
                                                            <td id="textharga"></td>
                                                        </tr>
                                                        <tr>
                                                            <th>Pembayaran</th>
                                                            <td id="textpembayaran"></td>
                                                        </tr>
                                                        <tr>
                                                            <th>Nomor Whatsapp</th>
                                                            <td id="textnmrWa"></td>
                                                        </tr>
                                                    </table>


                                                    <p>Token Anda : <?php echo rand(1000, 9000); ?></p>
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-secondary"
                                                        data-bs-dismiss="modal">Close</button>
                                                    <form action="home" method="POST">
                                                        @csrf
                                                        <input type="hidden" value="Abid" name="username">
                                                        <button type="submit" class="btn btn-primary"
                                                            id="btnSubmit">Submit</button>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
    {{-- </form> --}}

    {{-- <script>
        // https://suckittrees.com/artikel-184/mengambil-nilai-dari-radio-button-di-javascript.html

        functionbeli() {
            constradioButtons = document.querySelectorAll('input[name="varian"]');
            letselectedValue;
            for (constrbofradioButtons) {
                if (rb.checked) {
                    selectedValue = rb.value;
                    break;
                }
            }
            if (selectedValue) {
                alert(selectedValue);
            } else {
                alert("Please Select an option");
            }
        }
    </script> --}}

    <script>
        //API True Id Mobile Legend
        var myHeaders = new Headers();
        myHeaders.append("Content-Type", "application/json");

        var graphql = JSON.stringify({
            query: "",
            variables: {}
        })
        var requestOptions = {
            method: 'POST',
            headers: myHeaders,
            body: graphql,
            redirect: 'follow'
        };

        fetch("https://api-xyz.com/trueid/mobilelegends/?id=50642724&zone=2082", requestOptions)
            .then(response => response.text())
            .then(result => console.log(result))
            .then(result => alert(result.status))
            .catch(error => console.log('error', error));
    </script>

    <script>
        const btn = document.querySelector('#btnSubmit');
        const radioButtons = document.querySelectorAll('input[name="varian"]');
        btn.addEventListener("click", () => {
            let selectedSize;
            for (const radioButton of radioButtons) {
                if (radioButton.checked) {
                    selectedSize = radioButton.value;
                    break;
                }
            }
            // show the output:
            output.innerText = selectedSize ? `You selected ${selectedSize}` : `You haven't selected any size`;
        });
    </script>

    <script>
        function resultVarian(varian) {
            document.getElementById("resultHarga").value = varian;
            document.getElementById("resultHarga").text = dm;
        }
        function resultPembayaran(Pembayaran) {
            document.getElementById("resultPembayaran").value = Pembayaran;
            document.getElementById("resultPembayaran").text = Pembayaran;
        }


        $('#submitBtn').click(function() {
            $('#textnickname').text($('#nickname').val());
            $('#textid').text($('#idakun').val());
            $('#textserver').text($('#serverakun').val());
            $('#textvarian').text($('#varian').val());
            $('#textharga').text($('#resultHarga').val());
            $('#textpembayaran').text($('#resultPembayaran').val());
            $('#textnmrWa').text($('#nmrWa').val());
            $('#numTokenInvoice').text($('#tokenInvoice').val());


        })
    </script>

    <?php
    if (isset($_POST['save'])) {
        $id = $_POST['idakun'];
        $zone = $_POST['serverakun'];
        $ch = curl_init();
        curl_setop($ch, CURLOPT_URL, 'https://api-xyz.com/trueid/mobilelegends/?id=' . $id . $zone . '&token=nguyenthuWan');
        curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
        curl_setopt($ch, CURLOPT_SSL_VERIFPEER, 0);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($ch, CURLOPT_FLOWLOCATION, 0);
        $result = curl_exec($ch);
        curl_close($ch);
        curl_close($ch);
        $hasil = json_decode($result, true);
        echo $hasil['nickname'];
        echo 'alert("$hasil")';
    }
    ?>
@endsection;
