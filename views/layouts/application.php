<!DOCTYPE html>
<html>
   <head>
    <title>Bun</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="style.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
  </head>
  <body>
    <div class="container">
      <header>
        <div class="navbar-header">
          <a class="navbar-brand" href="#">Bun's site</a>
        </div>
        <ul class="nav navbar-nav">
          <li class="active"><a href="#">Home</a></li>
          <li><a href="#">Page 1</a></li>
        </ul>
        <form class="searchbar" action="" method="GET">
          <table>
            <tr>
              <input type="hidden" name="controller" value="pages">
              <input type="hidden" name="action" value="timkiem">
              <td><input type="text" name="tukhoa" placeholder="Nhập id của bạn vào đây"></td>
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