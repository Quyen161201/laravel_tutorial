<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>category</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>

<body>
  <div class="container pt-5">
    <form action="{{ route('category.store') }}" method="POST">
      @csrf
        <div class="mb-3">
          <label>Tên thể loại</label>
          <input type="text" class="form-control" name="name">
        </div>
        <button type="submit" class="btn btn-primary">Thêm</button>
    </form>
  </div>
   

</body>

</html>