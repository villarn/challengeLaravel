<!DOCTYPE html>
<html lang="es">
<head>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
<meta charset="UTF-8">
<title>Home</title>
</head>
<body>
    @include('navbar')
    <div class="container">
        <div class="row">
            <div class="col">
            </br>
                <h2>Bienvenido</h2>
                <div class="mb-3">
                    <form action="">
                    <label for="exampleFormControlInput1" class="form-label">Add Item</label>
                    <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Description">
                  </div>
                  <div class="mb-3">
                    <label for="exampleFormControlTextarea1" class="form-label">Number of items</label>
                    <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="numer">
                  </div>
                  <div class="mb-3">
                    <button type="button" class="btn btn-success">Add</button>
                  </div>
                </form>
            </div>
        </div>    
    </div>
</body>
</html>