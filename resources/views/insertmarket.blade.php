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
        <h2>เพิ่มข้อมูลสินค้า</h2>
        <form action="{{ route('market.store') }}" method="POST">
            @csrf
            <div class="mb-3">
                <label for="nameitem" class="form-label">ชื่อสินค้า</label>
                <input type="text" class="form-control" id="formGroupExampleInput" name="nameitem"
                    placeholder="Product name">
            </div>
            <div class="mb-3">
                <label for="name" class="form-label">ชื่อเจ้าของสินค้า</label>
                <input type="text" class="form-control" id="formGroupExampleInput2" name="name"
                    placeholder="Product owner name">
            </div>
            <div>
                <p>สถานะสินค้า</p>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="status" id="" value="มีสินค้า">
                    <label class="form-check-label" for="status">
                        มีสินค้า
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="status" id="" value="สินค้าหมด">
                    <label class="form-check-label" for="status">
                        สินค้าหมด
                    </label>
                </div>
            </div>
            <div class="pt-2">
                <select class="form-select" aria-label="Default select example" name="type">
                    <option selected>ประเภทสินค้า</option>
                    <option value="อุปกรณ์คอมพิวเตอร์">อุปกรณ์คอมพิวเตอร์</option>
                    <option value="อุปกรณ์ตกปลา">อุปกรณ์ตกปลา</option>
                    <option value="อุปกรณ์รถยนต์">อุปกรณ์รถยนต์</option>
                </select>
            </div>
            <div class="pt-3">
                <button type="submit" class="btn btn-outline-primary">เพิ่มสินค้า</button>
            </div>
        </form>
    </div>
</body>

</html>
