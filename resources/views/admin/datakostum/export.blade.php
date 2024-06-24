<!DOCTYPE html>
<html>
<head>
    <title>Data Kostum Export</title>
</head>
<body>
    <table>
        <thead>
            <tr>
                <th>ID Kostum</th>
                <th>Nama Kostum</th>
                <th>Karakter</th>
                <th>Anime</th>
                <th>Size</th>
                <th>Harga per Hari</th>
                <th>Jumlah</th>
                <th>Status</th>
            </tr>
        </thead>
        <tbody>
            @foreach($costumes as $costume)
            <tr>
                <td>{{ $costume->id }}</td>
                <td>{{ $costume->nama_kostum }}</td>
                <td>{{ $costume->karakter }}</td>
                <td>{{ $costume->anime }}</td>
                <td>{{ $costume->size }}</td>
                <td>{{ "Rp " . number_format($costume->price_per_day, 0, ',', '.') }}</td>
                <td>{{ $costume->quantity }}</td>
                <td>{{ $costume->status }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>
