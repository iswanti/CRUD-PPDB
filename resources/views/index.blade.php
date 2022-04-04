<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>Pendaftaran Siswa Baru | SMK Semangat 45</title>
  </head>
  <body>

    <h1 class="text-center my-4">Data Siswa Baru</h1>
    
    <div class="container">
        <a href={{ route('ppdb.create') }} class="btn btn-success mb-3">Tambah Data</a>
        <a href="/exportpdf" class="btn btn-info mb-3">Export PDF</a>

        @if ($message = Session::get('success'))  
          <div class="alert alert-success d-flex align-items-center" role="alert">
            <svg class="bi flex-shrink-0 me-2" width="24" height="24" role="img" aria-label="Success:"><use xlink:href="#check-circle-fill"/></svg>
            <div>
              {{ $message  }}
            </div>
          </div>
        @endif

        <div class="row">
            <table class="table table-bordered text-center">
                <thead>
                  <tr>
                    <th scope="col">No Daftar</th>
                    <th scope="col">Nama Lengkap</th>
                    <th scope="col">Jenis Kelamin</th>
                    <th scope="col">Alamat Lengkap</th>
                    <th scope="col">Agama</th>
                    <th scope="col">Asal SMP</th>
                    <th scope="col">Jurusan</th>
                    <th scope="col">Aksi</th>
                  </tr>
                </thead>
                <tbody>

                @foreach ( $data as $datas)
                  <tr>
                    <th scope="row">{{ $datas->no }}</th>
                    <td>{{ $datas->nama }}</td>
                    <td>{{ $datas->jenis_kelamin }}</td>
                    <td>{{ $datas->alamat}}</td>
                    <td>{{ $datas->agama}}</td>
                    <td>{{ $datas->asal_smp}}</td>
                    <td>{{ $datas->jurusan}}</td>
                    <td>
                      <form action="{{ route('ppdb.destroy', $datas->id) }}" method="post">
                        <a href="{{ route('ppdb.edit', $datas->id) }}" class="btn btn-info">Edit</a>
                            @csrf
                            @method('DELETE')
                        <button type="submit" class="btn btn-danger" onclick="return confirm('Yakin Ingin menghapus data ini?')">Delete</button>
                        
                      </form>

                        
                    </td>
                  </tr>
                  @endforeach
                </tbody>
            </table>
        </div>
    </div>
    

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    
  </body>
</html>