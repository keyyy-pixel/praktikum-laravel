<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <title>Surat Keluar</title>
</head>

<body>
    <h1>Daftar Surat Keluar</h1>

    <a href="{{ route('dashboard') }}">Kembali ke Dashboard</a>

    <table border="1" cellpadding="10" cellspacing="0">
        <thead>
            <tr>
                <th>No</th>
                <th>Nomor Surat</th>
                <th>Tanggal</th>
                <th>Pengirim</th>
                <th>Perihal</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($suratKeluar as $surat)
            <tr>
                <td>{{ $surat['id'] }}</td>
                <td>{{ $surat['nomer_surat'] }}</td>
                <td>{{ $surat['tanggal'] }}</td>
                <td>{{ $surat['pengirim'] }}</td>
                <td>{{ $surat['perihal'] }}</td>
                <td>
                    <a href="{{ route('surat-keluar.show', $surat['id']) }}">
                        Detail
                    </a>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</body>

</html>