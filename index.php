<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="css/style.css">
  <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.2.3/css/bootstrap.min.css' integrity='sha512-SbiR/eusphKoMVVXysTKG/7VseWii+Y3FdHrt0EpKgpToZeemhqHeZeLWLhJutz/2ut2Vw1uQEj2MbRF+TVBUA==' crossorigin='anonymous' />
  <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.css' integrity='sha512-FA9cIbtlP61W0PRtX36P6CGRy0vZs0C2Uw26Q1cMmj3xwhftftymr0sj8/YeezDnRwL9wtWw8ZwtCiTDXlXGjQ==' crossorigin='anonymous' />
  <script src='https://cdnjs.cloudflare.com/ajax/libs/axios/1.2.0/axios.min.js' integrity='sha512-OdkysyYNjK4CZHgB+dkw9xQp66hZ9TLqmS2vXaBrftfyJeduVhyy1cOfoxiKdi4/bfgpco6REu6Rb+V2oVIRWg==' crossorigin='anonymous'></script>
  <script src="https://unpkg.com/vue@3/dist/vue.global.js"></script>
  <title>Album JSON</title>
</head>

<body>

  <header>
    <div class="container py-3">
      <img class="logo" src="img/spotify-logo-png-7053.png" alt="Spotify">
    </div>
  </header>
  <main>
    <div id="app" class="content-wrapper">
      <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3">
        <div v-for="(album, index) in albums" :key="index" class="col p-3">
          <div class="p-3 d-flex flex-column align-items-center mc-card">
            <img class="poster" :src="album.poster" :alt="album.title">
            <div class="album-info mt-3 text-center"></div>
            <h4 class="text-center">{{album.title}}</h4>
            <p>{{album.author}}</p>
            <h5>{{album.year}}</h5>
          </div>
        </div>
      </div>
    </div>
  </main>

</body>
<script src="js/main.js"></script>

</html>