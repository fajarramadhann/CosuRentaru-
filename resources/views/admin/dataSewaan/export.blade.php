<!DOCTYPE html>
<html>
<head>
    <title>Data Sewa Kostum Export</title>
</head>
<body>
    <table>
        <thead>
            <tr>
                <th>ID Kostum</th>
                <th>Nama Penyewa</th>
                <th>No HP</th>
                <th>Kota</th>
                <th>Kecamatan</th>
                <th>Kelurahan</th>
                <th>Kode Pos</th>
                <th>Alamat</th>
                <th>Tanggal Pinjam</th>
            </tr>
        </thead>
        <tbody>
            @foreach($sewaCostumes as $sewa)
            <tr>
                <td>{{ $sewa->kostum_id }}</td>
                <td>{{ $sewa->nama_lengkap }}</td>
                <td>{{ $sewa->no_hp }}</td>
                <td>{{ $sewa->kota }}</td>
                <td>{{ $sewa->kecamatan }}</td>
                <td>{{ $sewa->kelurahan }}</td>
                <td>{{ $sewa->kode_pos }}</td>
                <td>{{ $sewa->alamat_lengkap }}</td>
                <td>{{ $sewa->tgl_pinjam }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>
