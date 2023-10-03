<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Isi Data</title>
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</head>
<body>
    <table>
        <tr>
            <th>Nama</th>
            <th>Jumlah Dosa</th>
            <th>isi pengakuan</th>
            <th>foto</th>
            <th>nilai float</th>
        </tr>
        <tr>
            <td>{{ $isiForm->field1 }}</td>
            <td>{{ $isiForm->field2 }}</td>
            <td>{{ $isiForm->field3 }}</td>
            <td><img src="{{ asset('storage/uploads/' . $isiForm->field4) }}" alt="Image"></td>
            <td>{{ $isiForm->field5 }}</td>
        </tr>
    </table>
    
</body>
</html>