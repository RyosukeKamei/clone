<!DOCTYPE html>
  <html lang="ja">
  <head>
      <meta charset="UTF-8">
      <title>これじょ</title>
      <link href="/css/app.css?2" rel="stylesheet">
      <link href="/css/colejo.css?14" rel="stylesheet">
  </head>
  <body>
      <div class="header">
          <div class="row">
              @yield('header')
          </div>
      </div>
      <div class="container">
          <div class="row">
              <div class="col-md-12">
                  @yield('content')
              </div>
          </div>
      </div>
  </body>
  </html>