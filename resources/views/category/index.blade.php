<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Danh sách thể loại</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>
  <div class="container">
    <h2>{{ $pageTitle }}</h2>
      <table class="table">
          <thead>
            <tr>
              <th scope="col">STT</th>
              <th scope="col">Tên thể loại</th>
              <th scope="col">Hành động</th>
            </tr>
          </thead>
          <tbody>
          @foreach ($datas as $data)
            <tr>
              <th scope="row">{{ $loop -> index+1 }}</th>
              <td> {{ $data -> name }}</td>
            
              <td>
               
                <button type="submit" class="btn btn-success"><a href="{{route('category.destroy', $data->id)}}" class="text-decoration-none text-white">Xoa</a></button>

                <button type="submit" class="btn btn-success"><a href="{{route('category.edit', $data->id)}}" class="text-decoration-none text-white">Sửa</a></button>
              </td>
            </tr>
          @endforeach
          
            
          </tbody>
        </table>
      {{-- {{ $datas->links() }} --}}
  </div>
</body>
</html>