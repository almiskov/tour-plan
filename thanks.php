<?php

$result = $_GET['result'];
$type = $_GET['type'];

$message = '';
if ($result == 'success') {
  switch ($type) {
    case 'newsletter':
      $message = '<span class="thanks__newsletter">Вы подписались на рассылку</span>';
      break;
    case 'contact':
      $message = '<h3 class="thanks__contact-title">Спасибо за обращение!</h3>'
        . '<span class="thanks__contact-text">Наш менеджер свяжется с Вами в ближайшее время.</span>';
      break;
  }
} else {
  $message = '<span class="thanks__error-message">При отправке запроса произошла ошибка. Поробуйте ещё раз.</span>';
}

?>

<?php include('./php/header.php') ?>

<section class="thanks">
  <div class="container">
    <div class="thanks__message">
      <?php
      echo $message;
      ?>
    </div>

    <div class="thanks__link-container">
      <a class="thanks__back-link" href="javascript:history.back()">Вернуться</a>
    </div>
  </div>
  <!-- /.container -->
</section>

<?php include('./php/footer.php') ?>