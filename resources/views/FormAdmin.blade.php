<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Candri</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</head>
<body>
    <center><h1>DATA PRIBADI</h1></center>

@if (count($errors)>0)
    @foreach ($errors->all() as $error)
    {{ $error }}
    
    @endforeach
@endif
<div class="container">
<form action="{{ $action }}" method="post" enctype="multipart/form-data">
    @csrf
    <table  border="1" class="table table-striped mt-2 text-center" style="100%">
        <tr>
            <th>NISN</th>
            <td><input class="form-control" type="text" name="nis" id="nis" placeholder="NISN" value="{{$admin->nis}}"></td>
        </tr>
        <tr>
            <th>NAMA</th>
            <td><input class="form-control" type="text" name="nama" id="nama" placeholder="NAMA "  value="{{$admin->nama}}"></td>
        </tr>
        <tr>
            <th>JENIS KELAMIN</th>
            <td><select name="jk" id="jk" class="form-control" aria-label="Default select example">
                <option selected>Pilih Jenis Kelamin</option>
                <option value="Laki-Laki">Laki-Laki</option>
                <option value="Perempuan">Perempuan</option>
              </select>
            </td>
        </tr>
        <tr>
            <th>NOMOR HP</th>
            <td><input class="form-control" type="text" name="nohp" id="nohp" placeholder="NOMOR HP" value="{{$admin->nohp}}"></td>
        </tr>
        <tr>
            <th>ALAMAT</th>
            <td><textarea class="form-control" name="alamat" id="alamat" cols="30" rows="10" placeholder="ALAMAT"  value="">{{$admin->alamat}}</textarea></td>
        </tr>
        <tr>
            <th>FOTO</th>
            <td>
                {{-- <input type="file" name="foto" id="foto"> --}}
                @if(file_exists("storage/".$admin->foto))
                <img src="/storage/{{ $admin->foto }}" class="rounded-circle img-thumbnail" alt="" width="100"><br>
                @endif
                <input type="file" name="foto" id="foto">
            </td>
        </tr>
        <tr>
            <td colspan="2" align="right"><button type="submit"  class="btn btn-primary btn-block mb-3">TAMBAH</button></td>
            {{-- <td colspan="2" align="right"><input type="submit" value="SIMPAN" name="simpan"></td> --}}
        </tr>
    </table>
</div>
</form>
</body>
</html>