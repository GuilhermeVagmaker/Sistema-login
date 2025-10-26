<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login</title>
  <link rel="shortcut icon" href="img/knigt.ico" type="image/x-icon">
  <link rel="stylesheet" href="../scripts/style.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
  <main class="d-flex justify-content-center align-items-center vh-100">

    <form action="/Actions/loginAction.php" class="d-grid text-center border border-black
    border-success mb-2 border-opacity-25 rounded contene">

      <h1 class="text-center">Login</h1>
      <div class="d-grid">
        <label for="email" class="d-grid justify-content-start">Email:</label>
        <input class="input-size Myborder border border-success p-2 mb-2 border-opacity-75 border-dark-subtle rounded-2" type="email" name="email" id="email" placeholder="Exemple@gmail.com" required>
      </div>

      <div class="d-grid">
        <label for="password"  class="d-grid justify-content-start">Password:</label>
        <input class="input-size Myborder border border-success p-2 mb-2 border-opacity-75 border-dark-subtle rounded-2" type="password" name="password" id="password" placeholder="enter your password" required>
      </div>

      <div class="d-flex align-items-center justify-content-between justify-content-center saveLogin">
        <div class="d-flex align-items-center  checkboxDiv">
          <input class="form-check-input border border-success p-2 mb-2 border-opacity-75 border-black" type="checkbox" value="" id="checkDefault">
          <label class="form-check-label save" for="checkDefault">Save login</label>
        </div>

        <div><a href="confirmEmail.html" class="link"> forget password</a></div>
      </div>

      <button type="submit" class="btn btn-primary mt-3">Enter</button>

        <div class="mt-3" >Create an account <a href="pgCriarLogin.php" class="link">here</a></div>
    </form>

  </main>

  <script src="script.js"></script>
</body>
</html>