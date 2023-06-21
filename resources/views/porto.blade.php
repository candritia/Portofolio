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
    <nav class="navbar navbar-expand-lg navbar-dark bg-primary fixed-top">
        <div class="container ">
            <a href="" class="navbar-brand ">Candritia Nugraha</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#NavbarNav" aria-controls="" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a href="/Admin" class="nav-link active">Home</a>
                    </li>
                    <li class="nav-item">
                        <a href="" class="nav-link " aria-current="page">Profile</a>
                    </li>
                    <li class="nav-item">
                        <a href="#about" class="nav-link ">About</a>
                    </li>
                    <li class="nav-item">
                        <a href="#project" class="nav-link ">Project</a>
                    </li>
                    <li class="nav-item">
                        <a href="#contact" class="nav-link ">Contact</a>
                    </li>
                    
                </ul>
            </div>
        </div>
    </nav>

    <section class="pt-5" id="home">
        <div class="container-fluid p-0">
           <div class="pt-5 text-center">
            <img src="" alt="" width="200" class="rounded-circle img-thumbnail">
            <h2 class="mt-3 fw-bold"></h2>
            <p class="fs-5"></p>
           </div>
        </div>
    </section>
    <section id="about" class="pt-5">
        <div class="container">
            <div class="p-5 text-center">
                <h3 class="fw-bold mb-3">About Me</h3>
                <div class="row justify-content-center">
                    <div class="col-md-4">
                        <p></p>
                    </div>
                    <div class="col-md-4">
                        <p></p>
                    </div>    
                </div>
            </div>
        </div>
    </section>
    <section class="pt-5" id="project">
        <div class="container">
            <div class="p-5 text-bg-light text-center">
                <h3 class="fw-bold mb-3">My project</h3>
                <div class="row justify-content-center">
                    <div class="col-md-4">
                        <div class="card">
                            <img src="" alt="" class="card-img-top">
                            <div class="card-body">
                                <p class="card-text">Tutorial ini cocok untuk pemula yang baru belajar tentang bootstrap</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card">
                            <img src="storage/foto/Cr7.jpg" alt="" class="card-img-top">
                            <div class="card-body">
                                <p class="card-text">Tutorial ini cocok untuk pemula yang baru belajar tentang bootstrap</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card">
                            <img src="storage/foto/Cr7.jpg" alt="" class="card-img-top">
                            <div class="card-body">
                                <p class="card-text">Tutorial ini cocok untuk pemula yang baru belajar tentang bootstrap</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 pt-4">
                        <div class="card">
                            <img src="storage/foto/Cr7.jpg" alt="" class="card-img-top">
                            <div class="card-body">
                                <p class="card-text">Tutorial ini cocok untuk pemula yang baru belajar tentang bootstrap</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 pt-4">
                        <div class="card">
                            <img src="storage/foto/Cr7.jpg" alt="" class="card-img-top">
                            <div class="card-body">
                                <p class="card-text">Tutorial ini cocok untuk pemula yang baru belajar tentang bootstrap</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- <section>
        <div id="project" class="pt-5">
            <div class="container">
                <div class="p-5 text-center">
                    <h3 class="fw-bold mb-3">My Project</h3>
                    <div class="row justify-content-center"></div>
                </div>
            </div>
        </div>
    </section> -->
    <div class="p-5" id="contact">
        <h3 class="fw-bold text-center mb-3">Contact Me</h3>
        <div class="row justify-content-center">
            <div class="col-md-6">
                <form action="/" method="post" id="form-content">
                    <div class="mb-3">
                        <label for="nama" class="form-label">Nama Lengkap</label>
                    </div>
                    <div class="mb-3">
                        <label for="email" class="form-label">Email <span>*</span></label>
                        <input type="text" class="form-control" name="text" id="text" autocomplete="off">
                    </div>
                    <div class="mb-3">
                        <label for="pesan" class="form-label">Pesan</label>
                        <textarea type="text" class="form-control" name="text" id="text"></textarea>
                    </div>
                    <button type="submit" class="btn btn-primary">Kirim</button>
                </form>
            </div>

        </div>
    </div>  
    @foreach ($portofolio as $key => $item)
    <tr>
      <td>{{ $item->id }}</td>
        <td><img src="/storage/{{ $item->pp }}" class="rounded-circle img-thumbnail" alt="" width="100" height="100"></td>
      <td>{{ $item->nm }}</td>
      <td>{{ $item->identitas}}</td>
      <td>{{ $item->about }}</td>
      <td><img src="/storage/{{ $item->project }}" class="rounded-circle img-thumbnail" alt="" width="100" height="100"></td>
      <td>{{ $item->contact }}</td>
      <td><a class="mb-3" href="portofolio/hapus/{{ $item->id }}"><button class="btn btn-danger">Hapus</button></a>
          <a href="portofolio/edit/{{ $item->id }}"><button class="btn btn-primary">Edit</button></a></td>
      
    </tr>
        
    @endforeach                                                                     

    <div class="container-fluid">
        <footer class="py-3 my-3 border-top">
            <p class="text-center">&copy; 2023 <a href="https://www.instagram.com/Candri_21/" target="_blank" class="fw-bold
                text-decoration-none">Candritia Nugraha</a></p>
        </footer>
    </div>
    <!-- <script type="text/javascript">
        var links = document.getElementsByClassName("nav-link");
        for (var i = 0; i < links.length; i++){
            links[i].addEventListener("click",function(){
                var current = document.getElementsByClassName("active");
                if (current.length > 0){
                    current[0].className = current[0].className.replace("active","");
                }
                this.className += "active";
            });
        }
    </script> -->
</body>
</html>