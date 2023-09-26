<!DOCTYPE html>
<html lang="en">
<head>
    <title>Data Barang</title>
</head>
<body>

    <div class="container">
        <h1>Data Barang</h1>

        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nama Barang</th>
                    <th>Harga</th>
                    <th>Stok</th>
                    <th>Supplier</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($barangs as $barang)
                <tr>
                    <td>{{ $barang->id }}</td>
                    <td>{{ $barang->nama_barang }}</td>
                    <td>{{ $barang->harga }}</td>
                    <td>{{ $barang->stok }}</td>
                    <td>{{ $barang->supplier->nama_supplier }}</td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>

</body>
</html>