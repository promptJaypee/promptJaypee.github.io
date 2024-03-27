<!DOCTYPE html>
<html lang="en">
<head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
      <link href="./index.css" rel="stylesheet">
      <title>Document</title>
</head>
<body>
      <div class="btn-group-vertical" role="group" aria-label="">
            <button type="button" class="btn btn-secondary">First One</button>
            <button type="button" class="btn btn-secondary">Second One</button>
            <div class="btn-group" role="group">
                  <button
                        id="dropdownId"
                        type="button"
                        class="btn btn-secondary dropdown-toggle"
                        data-bs-toggle="dropdown"
                        aria-haspopup="true"
                        aria-expanded="false"
                  >
                        More
                  </button>
                  <div class="dropdown-menu" aria-labelledby="dropdownId">
                        <a class="dropdown-item" href="#">First Dropdown</a>
                        <a class="dropdown-item" href="#">Second Dropdown</a>
                  </div>
            </div>
      </div>
      
</body>
</html>