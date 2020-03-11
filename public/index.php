<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Geebrox Task Manager</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
  <link rel="stylesheet" href="./assets/main.css" />
</head>

<body>
  <nav class="navbar navbar-dark bg-dark">
    <span class="navbar-brand mb-0 h1">Geebrox TaskManager</span>
    <a href="#">
      <button class="btn btn-outline-light my-2 my-sm-0 login-btn">Login
        <i data-feather="log-in"></i>
      </button>
    </a>
  </nav>
  <div class="container mt-5">
    <h3 class="mb-4">Tasks List</h3>
    <caption>
      <i data-feather="thumbs-up"></i> means that task is finished
      <br />
      <i data-feather="activity"></i> means that task is in progress
    </caption>
    <div class="table-responsive">
      <table class="table table-dark table-hover mt-2">
        <thead>
          <tr>
            <th scope="col">Username</th>
            <th scope="col">Email</th>
            <th scope="col">Description</th>
            <th class="status" scope="col">Status</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td>mark123</td>
            <td>mark@mail.com</td>
            <td>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Sapiente ipsa optio blanditiis quidem enim atque doloribus minima, dolor possimus non quasi totam sit corrupti excepturi quaerat nesciunt voluptas eum reiciendis.</td>
            <td align="center" class="status"><i data-feather="activity"></i></td>
          </tr>
          <tr>
            <td>mark321</td>
            <td>mark123@mail.com</td>
            <td>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Sapiente ipsa optio blanditiis quidem enim atque doloribus minima, dolor possimus non quasi totam sit corrupti excepturi quaerat nesciunt voluptas eum reiciendis.</td>
            <td align="center" class="status"><i data-feather="thumbs-up"></i></td>
          </tr>
        </tbody>
      </table>
    </div>
  </div>

  <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/feather-icons/dist/feather.min.js"></script>

  <script>
    feather.replace()
  </script>
</body>

</html>