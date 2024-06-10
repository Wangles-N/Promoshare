<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="login.css" />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;400;500;700;900&display=swap"
      rel="stylesheet"
    />
    <title>Login</title>
  </head>
  <body>
    <main>
      <h1>PromoShare</h1>
      <form method="post" action="login.php">
        <div class="field">
          <strong>E-mail</strong>
          <input
            type="email"
            name="email"
            id="email"
            placeholder=""
            <?php if(isset($_POST['email'])) echo 'value="' . htmlspecialchars($_POST['email']) . '"'; ?>
          />
        </div>
        <div class="field">
          <strong>Senha</strong>
          <input
            type="password"
            name="password"
            id="password"
            placeholder="*******"
          />
        </div>
        <div class="btn-actions">
          <button type="submit">Entrar</button>
          <a href="/cadastro.html">Cadastrar</a>
        </div>
      </form>
    </main>
    <script>
      document.getElementById("logoutBtn").addEventListener("click", function() {
      window.location.href = "/login.html";
      });
    </script>
  </body>
</html>
