<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>

<body>
  <div class="container pt-5">
    <h2>{{ $pageTile }}</h2>
    @if ($errors->any())
      <div class="alert alert-danger alert-dismissible fade show">
        <ul>
          @foreach ($errors->all() as $error)
              <li>{{ $error }}</li>
          @endforeach
                      </ul>
                          </div>
                            @endif
                            @if (Session::has('error'))
                                <div class="alert alert-danger alert-dismissible fade show" role="alert">
                                    {{ Session::get('error') }}
                                    
                                </div>
                            @endif

                            @if (Session::has('success'))
                                <div class="alert alert-success alert-dismissible fade show" role="alert">
                                    {{ Session::get('success') }}
                                    
                                </div>
                            @endif
    <form action="{{ route('category.update',$data->id) }}" method="POST">
      @csrf
        <div class="mb-3">
          <label>Tên thể loại</label>
          <input type="text" class="form-control" name="name" value="{{ $data -> name }}">
        </div>
        <button type="submit" class="btn btn-primary">Sữa</button>
    </form>
  </div>
   

</body>

</html>