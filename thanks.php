<?php

$result = $_GET['result'];
$type = $_GET['type'];

$message = '';
if ($result == 'success') {
  switch ($type) {
    case 'newsletter':
      $message = '<span class="thanks__newsletter">You\'ve subscribed to our newsletters</span>';
      break;
    case 'contact':
      $message = '<h3 class="thanks__contact-title">Thank you!</h3>'
        . '<span class="thanks__contact-text">Our manager will contact you soon</span>';
      break;
  }
} else {
  $message = '<span class="thanks__error-message">An error occurred while sending request. Please try again later</span>';
}

?>

<?php include('./header.html') ?>

<section class="thanks">
  <div class="container">
    <div class="thanks__message">
      <?php echo $message; ?>
    </div>
    <a class="button thanks__back-link" href="javascript:history.back()">Go back</a>
  </div>
  <!-- /.container -->
</section>

<?php include('./footer.html') ?>