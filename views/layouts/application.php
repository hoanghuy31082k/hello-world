<!DOCTYPE html>
<html>
   <head>
    <title>Bun</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Thay đổi đường dẫn tới file css -->
    <link rel="stylesheet" type="text/css" href="assets/css/style.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
  </head>
  <body>
    <div class="container">
      <header>
        <a class="logo" href="#">Bun's Site</a>
        <ul>
          <a class="menu" href="#">Home</a>
          <a href="www.google.com">Google</a>
        </ul>
        <form class="searchbar" action="" method="GET">
          <table>
            <tr>
              <input type="hidden" name="controller" value="pages">
              <input type="hidden" name="action" value="timkiem">
              <td><input class="search-box" type="text" name="tukhoa" placeholder="Nhập id của bạn vào đây"></td>
              <td><input type="submit" value="Tìm kiếm"></td>              
            </tr>
          </table>
        </form>
      </header>
      <main>
          <?=@$content?>
      </main>
      <footer>
        Bun&copy2019
      </footer>
    </div>
  </body>
  <script>
  if ( window.history.replaceState ) {
        window.history.replaceState( null, null, window.location.href );
    }
  </script>
</html>