<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous">
    </script>
</head>

<body>
    <div class="container">
        <h1>Market</h1>
        <a href="{{ route('market.create') }}">เพิ่มสินค้า</a>
        <div class="row">
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">ID</th>
                        <th scope="col">ชื่อสินค้า</th>
                        <th scope="col">ชื่อเจ้าของสินค้า</th>
                        <th scope="col">สถานะสินค้า</th>
                        <th scope="col">ประเภทสินค้า</th>
                        <th scope="col">ลบสินค้า</th>
                        <th scope="col">แก้ไข</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($marketada as $item)
                        <tr>
                            <th>{{ $item->id }}</th>
                            <td>{{ $item->nameitem }}</td>
                            <td>{{ $item->name }}</td>
                            <td>{{ $item->status }}</td>
                            <td>{{ $item->type }}</td>
                            <td><form method="POST"  action="{{ route('market.destroy', $item->id) }}">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger">ลบสินค้า</button>
                            </form></td>
                            <td><a href="{{ route('market.edit', $item->id) }}" class="btn btn-primary">แก้ไข</a></td>
                        </tr>
                    @endforeach
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</body>

</html>
