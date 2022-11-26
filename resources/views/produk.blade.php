<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
  </head>
  <body>
    
    <div class="row">
        <div class="col-md-6">
            <form action="{{ route('tambah.produk') }}" method="post">
                @csrf
                <input type="text" name="nama_produk" id="" class="form-control" placeholder="nama produk">
                <input type="text" name="harga_produk" id="" class="form-control" placeholder="harga_produk">
                <button type="submit" class="btn btn-success">tambah</button>
            </form>
        </div>
        <div class="col-md-6">
            <table class="table">
                <tr>
                    <td>Nama produk</td>
                    <td>Harga produk</td>
                    <td>Opsi</td>
                </tr>
                @foreach ($produk as $item)
                    <tr>
                        <td>{{ $item->nama_produk }}</td>
                        <td>{{ $item->harga_produk }}</td>
                        <td>
                            <a href="/produk/hapus/{{ $item->id }}" class="btn btn-danger">Hapus</a>
                            <a href="/produk/edit/{{ $item->id }}" class="btn btn-success">Edit</a>
                        </td>
                    </tr>
                @endforeach
            </table>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
  </body>
</html>