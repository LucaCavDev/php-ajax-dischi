<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>cavicchioli phpAjakDischi</title>
  <link rel="stylesheet" href="style.css">
  <link rel="shortcut icon" href="#">

  <script src="https://cdn.jsdelivr.net/npm/vue"></script>
  <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/axios/0.20.0/axios.min.js"></script>

</head>
<body>
<!--
- uso di vue
-->
  <div class="page" id="app">
    <header>
      <div class="spotify">
        <img src="spotify.png" alt="">
      </div>
    </header>
    <div class="containerDisco">
      <div v-for="disco in dischi" class="disco">
        <div class="poster">
          <img :src="disco.poster" alt="">
        </div>
        <div class="title">{{disco.title}} </div>
        <div class="author">{{disco.author}} </div>
        <div class="year">{{disco.year}} </div>
      </div>

    </div>

  </div>

  <script type="text/javascript" src="script.js"></script>
</body>
</html>
