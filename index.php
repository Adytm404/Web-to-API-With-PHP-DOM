<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>HTML Tag Counter - by Nyancorp</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@0.9.4/css/bulma.min.css">
  </head>
  <body>
  <!-- Global container -->
  <div class="container">
    <!-- form -->
    <div class="column is-half is-offset-one-quarter">
        <h1>HTML Tags Counter</h1><br>
        <p>Cara penggunaan:</p>
        <p>1. Input url website target kedalam kolom url.</p>
        <p>2. Cari html tag konten dengan inspect element, lalu inputkan pada kolom.</p>
        <p>3. Cari nama class dari tag html, lalu inputkan kembali.</p>
        <p>4. Klik "COUNT / COUNT as API".</p><br>
        <div class="field">
      <p class="control has-icons-left has-icons-right">
        <input class="input" type="url" placeholder="Url site" id="form-url">
        <span class="icon is-small is-left">
          <i class="fas fa-envelope"></i>
        </span>
        <span class="icon is-small is-right">
          <i class="fas fa-check"></i>
        </span>
      </p>
    </div>
    <div class="field">
      <p class="control has-icons-left">
        <input class="input" type="tag" placeholder="Html tag" id="form-tag">
        <span class="icon is-small is-left">
          <i class="fas fa-lock"></i>
        </span>
      </p>
    </div>
    <div class="field">
      <p class="control has-icons-left">
        <input class="input" type="tag" placeholder="Class name" id="form-class">
        <span class="icon is-small is-left">
          <i class="fas fa-lock"></i>
        </span>
      </p>
    </div>
    <div class="field">
      <p class="control has-icons-left">
        <button class="button" id="tombol">COUNT!</button>
        <button class="button" id="tombol-api">COUNT! as API</button>
      </p>
    </div>
    <br><p>Tool ini sangat cocok bagi anda yang suka nyolong konten dari web orang (parse).</p>
    </div>
<!-- end form -->
  </div>
  <!-- End global container -->

    <script>
        document.getElementById('tombol').onclick = function() {
    window.location = "./result/?page=" + document.getElementById('form-url').value + "&id=" + document.getElementById('form-tag').value + "[class=" + document.getElementById('form-class').value + "]";
    return false;
      }
      document.getElementById('tombol-api').onclick = function() {
    window.location = "./result/api.php?page=" + document.getElementById('form-url').value + "&id=" + document.getElementById('form-tag').value + "[class=" + document.getElementById('form-class').value + "]";
    return false;
      }
    </script>


  </body>
</html>