<!DOCTYPE html>
<html>
   <head>
    <title>Bun</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="asset/css/style.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
  </head>
  <body>
    <div class="container">
      <header>
        <ul>
          <a class="logo" href="?controller=pages&action=home">Bun's Site</a>
          <div class="menu">
            <a href="?controller=pages&action=home">Home</a>
            <a href="www.google.com">Google</a>
          </div>
          <form class="searchbar" action="" method="GET">
            <table class="table-timkiem">
              <tr>
                <input type="hidden" name="controller" value="pages">
                <input type="hidden" name="action" value="timkiem">
                <td><input class="search-box" type="text" name="tukhoa" placeholder="Nhập id của bạn vào đây"></td>
                <td><button type="submit" class="submit">Tìm kiếm</button></td>              
              </tr>
            </table>
          </form>
          <a href="?controller=account&action=login">Đăng nhập</a>
        </ul>
      </header>
      <section style="width: 100%;">
        <form action="?controller=pages&action=timkiem" method="GET">
          <input type="text" name="tukhoa2" placeholder="Nhập từ tìm bằng Ajax">
          <input type="submit" value="Gửi">
        </form>
      </section>
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