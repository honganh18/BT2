<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <title>Manage Food</title>
</head>

<body>
    <div class="container-fluid ">
        <div class="row">
            <!---->
            <div class="col-md-12  ">
                <ul class="nav justify-content-center bg-light border-bottom border-2 border-dark ">
                    <li class="nav-item">
                        <a class="nav-link text-red" aria-current="page" href="#">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-red" href="#">Admin</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-red" href="#">Category</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-red">Food</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-red ">Order</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-red">Logout</a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="d-grid gap-2 d-md-block">
                    <p class="fs-2">Manage Food</p>
                    <button type="button" class="btn btn-primary btn-lg">Add Food</button>   
             </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="table-responsive">
                    <table class="table">
                      <thead>
                          <th>S.N.</th>
                          <th>Title</th>
                          <th>Price</th>
                          <th>Image</th>
                          <th>Featured</th>
                          <th>Active</th>
                          <th>Actions</th>
                      </thead>
                      <tbody>
                          <tr>
                              <td>1</td>
                              <td>Demplings Specials</td>
                              <td>$5.00</td>
                              <td><img src="images/menu-momo.jpg" class="img" alt=""></td>
                              <td>Yes</td>
                              <td>Yes</td>
                              <td>
                                <button type="button" class="btn btn-success">Update Food</button>
                                <button type="button" class="btn btn-danger">Delete Food</button>
                              </td>
                          </tr>
                          <tr>
                            <td>2</td>
                            <td>Best Burger</td>
                            <td>$4.00</td>
                            <td><img src="images/menu-burger.jpg" class="img" alt=""></td>
                            <td>Yes</td>
                            <td>Yes</td>
                            <td>
                              <button type="button" class="btn btn-success">Update Food</button>
                              <button type="button" class="btn btn-danger">Delete Food</button>
                            </td>
                        </tr>
                        <tr>
                            <td>3</td>
                            <td>Smoky BBQ Pizza</td>
                            <td>$6.00</td>
                            <td><img src="images/menu-pizza.jpg" class="img" alt=""></td>
                            <td>No</td>
                            <td>Yes</td>
                            <td>
                              <button type="button" class="btn btn-success">Update Food</button>
                              <button type="button" class="btn btn-danger">Delete Food</button>
                            </td>
                        </tr>
                        <tr>
                            <td>4</td>
                            <td>Sadeko Momo</td>
                            <td>$6.00</td>
                            <td><img src="images/menu-momo.jpg" class="img" alt=""></td>
                            <td>Yes</td>
                            <td>Yes</td>
                            <td>
                              <button type="button" class="btn btn-success">Update Food</button>
                              <button type="button" class="btn btn-danger">Delete Food</button>
                            </td>
                        </tr>
                        <tr>
                            <td>5</td>
                            <td>Mixed Pizza</td>
                            <td>$10.00</td>
                            <td><img src="images/menu-pizza.jpg" class="img" alt=""></td>
                            <td>Yes</td>
                            <td>Yes</td>
                            <td>
                              <button type="button" class="btn btn-success">Update Food</button>
                              <button type="button" class="btn btn-danger">Delete Food</button>
                            </td>
                        </tr>
                        <tr>
                            <td>6</td>
                            <td>sed ipsum cillum in</td>
                            <td>$52.00</td>
                            <td><p class="text-red">Image not added</p></td>
                            <td>No</td>
                            <td>No</td>
                            <td>
                              <button type="button" class="btn btn-success">Update Food</button>
                              <button type="button" class="btn btn-danger">Delete Food</button>
                            </td>
                        </tr>
                      </tbody>
                    </table>
                  </div>
            </div>
        </div>
    </div>
    <div class="container-fluid">
        <div class="row ">
          <div class="col-md-12 text-center">
            <p class="bg-danger text-white">2020 All rights reserved.Food Hourse.Develooped By-<a href="#">L?? H???ng ??nh</a></p>
          </div>
        </div>
      </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ"
        crossorigin="anonymous"></script>
</body>

</html>