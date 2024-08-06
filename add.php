<?php

var_dump($_POST);

require './templates/header.php';
// include './templates/header.php';
?>

<main>

  <div class="container">
    <h1 class="my-5 h2 text-center">ピザの登録</h1>
    <div class="row justify-content-center">
      <div class="col-md-8 bg-white p-4 rounded-4">
        <form action="" method="post">
          <div class="mb-3">
            <label for="pizza" class="form-label">ピザの名前</label>
            <input type="text" name="pizza" id="pizza" class="form-control">
          </div>
          <div class="mb-3">
            <label for="chef" class="form-label">シェフの名前</label>
            <input type="text" name="chef" id="chef" class="form-control">
          </div>
          <div class="text-center">
            <button type="submit" class="btn btn-primary">送信する</button>
          </div>
        </form>
      </div>
    </div>
  </div>

</main>

<?php
require './templates/footer.php';
?>