@extends('layouts/main')

@section('container')
    <div class="container justify-content-center text-center">
        <div class="card bg-dark shadow mt-5 mb-3">
            <div class="card-header">
                <p>Check Pesanan anda</p>
            </div>
            <div class="card-body justify-content-center">
                <div class="input-group mb-3 mt-3">
                    <input type="text" class="form-control" placeholder="Recipient's username"
                        aria-label="Recipient's username" aria-describedby="button-addon2">
                    <button class="btn btn-outline-secondary" type="button" id="button-addon2">Button</button>
                </div>
            </div>
            @foreach ($check as $item)
                <p>{{ $item['name'] }}</p>
                {{-- <p>{{ $item['e'] }}</p> --}}
            <table class="table table-striped table-dark">
                <thead>
                  <tr>
                    <th scope="col">Nickname</th>
                    <th scope="col">varian</th>
                    <th scope="col">Pembayaran</th>
                    <th scope="col">Nomor WA</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <th scope="row">{{ $item['nickname'] }}</th>
                    <td>{{ $item['varian'] }}</td>
                    <td>{{ $item['pembayaran'] }}</td>
                    <td>{{ $item['nmrWhatsapp'] }}</td>
                  </tr>
                  
                </tbody>
              </table>
              @endforeach
        </div>
    </div>
@endsection
