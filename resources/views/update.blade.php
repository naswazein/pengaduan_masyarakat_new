<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css">
  <title>Update Pengaduan</title>
  <link rel="stylesheet" href="css/home.css">
</head>

<body>
  <form action={{url("update/$pengaduan->id_pengaduan")}} method="POST" enctype="multipart/form-data">
    @method('POST')
    @csrf
    <div class="container">
      <br>
      <br>
      <center>
      <td><h2>Selamat Datang Di update Pengaduan</h2></td>
</center>
      <div class="mb-3">
        <label for="formFile" class="form-label">Bukti Foto</label>
        <input class="form-control" type="file" id="formFile" name="foto">
      </div>
      <label for="exampleFormControlTextarea1" class="form-label">Isi Laporan</label>
      <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="isi_laporan" required>{{$pengaduan->isi_laporan}}</textarea>
      @error('isi_laporan')
      <div>{{ $message }}</div>
          @enderror
    </div>
   
    <div class="d-grid gap-2 col-4 mx-auto">
      <button class="btn btn-primary" type="submit">Send</button>
    </div>
  </form>
</body>

</html>