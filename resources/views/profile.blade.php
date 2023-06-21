<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Candri_21</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</head>
<body>
   @foreach ($profile as $key => $item)
    <nav class="navbar navbar-expand-lg navbar-dark bg-primary fixed">
        <div class="container ">
            <a href="/Admin" class="navbar-brand "><- Profil</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#NavbarNav" aria-controls="" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                      <a href="profile/edit/{{ $item->id }}"><button class="btn btn-danger">Edit Profile</button></a>
                        {{-- <a href="profile/edit/{{ $item->id }}" class="nav-link active" aria-current="page">Edit Profil</a> --}}
                    </li>
                    <li class="nav-item">
                      <a class="m-2" href="profile/hapus/{{ $item->id }}"><button class="btn btn-danger">Hapus</button></a>
                        {{-- <a href="profile/hapus/{{ $item->id }}" class="nav-link ">HAPUS</a> --}}
                    </li>
                    {{-- <li class="nav-item">
                        <a href="/profile" class="nav-link ">Profile</a>
                    </li>
                    <li><form action="{{ url('profile/cari') }}" method="get" class="d-flex">
                    <input class="form-control me-1" type="search" name="cari" placeholder="Cari" id="cari">
                    <button type="submit" class="btn btn-dark">Cari</button>
                      </form>         
                    </li>
                    <li>
                       <a href="{{ ('profile/add') }}"> <button class="btn btn-danger">+Tambah Data</button></a>
                    </li> --}}
                </ul>
            </div>
        </div>
      </nav><br>
      <div class="container">    
    
    <div class="container-fluid p-0">
           <div class="pt-5 text-center">
            <img src="/storage/{{  $item->foto }}" class="rounded-circle img-thumbnail" alt="" width="100" height="100">
            <h2 class="mt-3 fw-bold">{{ $item->nama }}</h2>
            <p class="fs-5">{{ $item->jk}}</p>
           </div>
           <table class="table table-striped mt-2" style="100%">
            <thead>
             <tr>
              <td>ID</td>
             </tr>
            </thead>
             <tr>
              <th>{{ $item->id }}</th>
             </tr>
             </table>
             <table class="table table-striped mt-2" style="100%">
              <thead>
              <tr>
               <td>NO HP</td>
              </tr>
            </thead>
              <tr>
               <th>{{ $item->nohp }}</th>
              </tr>
              </table>
              <table class="table table-striped mt-2" style="100%">
                <thead>
                <tr>
                 <td>ALAMAT</td>
                </tr>
              </thead>
                <tr>
                 <th>{{ $item->alamat }}</th>
                </tr>
                </table>
             <table class="table table-striped mt-2" style="100%">
              <thead>
              <tr>
               <td>ABOUT ME</td>
              </tr>
            </thead>
              <tr>
               <th>{{ $item->aboutme }}</th>
              </tr>
              </table>
               
          {{-- <tr>
            <td><a class="mb-3" href="profile/hapus/{{ $item->id }}"><button class="btn btn-danger">Hapus</button></a>
                <a href="profile/edit/{{ $item->id }}"><button class="btn btn-primary">Edit</button></a></td>
          </tr> --}}
              
          @endforeach{{-- <!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Candritia</title>
</head>
<body>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</head>
<nav class="navbar navbar-expand-lg navbar-dark bg-primary fixed">
  <div class="container ">
      <a href="" class="navbar-brand ">Candritia Nugraha</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#NavbarNav" aria-controls="" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse">
          <ul class="navbar-nav ms-auto">
              <li class="nav-item">
                  <a href="/Admin" class="nav-link active" aria-current="page">Home</a>
              </li>
              <li class="nav-item">
                  <a href="/portofolio" class="nav-link ">Portofolio</a>
              </li>
              <li class="nav-item">
                  <a href="/profile" class="nav-link ">Profile</a>
              </li>
          </ul>
      </div>
  </div>
</nav><br>
<div class="container">
    <center><h1>PROFILE</h1></center>
<div class="pb-3">
<form action="{{ url('profile/cari') }}" method="get" class="d-flex">
    <input class="form-control me-1" type="search" name="cari" placeholder="Cari" id="cari">
    <button type="submit" class="btn btn-primary">Cari</button>
    </form>
   </div>

    <a href="{{ ('profile/add') }}"> <button class="btn btn-primary">Tambah Data</button></a><br>
    <table border="1" class="table table-striped mt-2 text-center" style="100%">
      <thead>
       
     
        <tr>
          <th>NO</th>
          <th>ID</th>
            <th>NAMA</th>
            <th>JENIS KELAMIN</th>
            <th>ABOUT ME</th>
            <th>FOTO PROFILE</th>
            <th>AKSI</th>
            
    
        </tr>
       </thead>
      @foreach ($profile as $key => $item)
      <tr>
        <td>{{ $key+1 }}</td>
        <td>{{ $item->id }}</td>
        <td>{{ $item->nama }}</td>
        <td>{{ $item->jk}}</td>
         <td>{{ $item->aboutme }}</td>
        <td><img src="/storage/{{ $item->foto }}" class="rounded-circle img-thumbnail" alt="" width="100" height="100"></td>
       
        <td><a class="mb-3" href="profile/hapus/{{ $item->id }}"><button class="btn btn-danger">Hapus</button></a>
            <a href="profile/edit/{{ $item->id }}"><button class="btn btn-primary">Edit</button></a></td>
      </tr>
          
      @endforeach
    
    
    </table>
    <a href="/logout"> <button class="btn btn-danger">Keluar</button></a><br></a>
  </div>
  </body>
</html> --}}