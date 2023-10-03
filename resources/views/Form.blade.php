<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laravel Form Example</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</head>
<body>
    <div class="container mt-5">
        <h1>Akui Sesuatu</h1>
        <form action="{{ route('submit.form') }}" method="POST" enctype="multipart/form-data">
            @csrf
            

            <div class="mb-3">
                <label for="input1" class="form-label">Berikan saya Nama ANDA! </label>
                <input type="text" class="form-control" id="input1" name="field1" required> sang Pengaku
            </div>

            <div class="mb-3">
                <label for="input2" class="form-label">Berapa banyak anda berbuat salah hari ini?</label>
                <input type="number" class="form-control" id="input2" name="field2" required> isi jumlah DOSA anda
            </div>

            <div class="mb-3">
                <label for="input3" class="form-label">Isi pesan Pengakuan anda</label>
                <input type="text" class="form-control" id="input3" name="field3" required> 

            <div class="mb-3">
                <label for="input4" class="form-label">Foto DOSA mu(.png/.jpg, Max Size: 2MB)</label>
                <input type="file" class="form-control" id="input4" name="field4" accept=".png, .jpg" required>
            </div>

            <div class="mb-3">
                <label for="input5" class="form-label">Nilai Harga diri anda (Float antara 2.50 dan 99.99)</label>
                <input type="number" step="0.01" class="form-control" id="input5" name="field5" min="2.50" max="99.99" required>
            </div>

            <button type="submit" class="btn btn-primary">Submit</button>
        </form>


    </div>

   
    

</body>
</html>
