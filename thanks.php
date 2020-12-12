<?php

$result = $_GET['result'];
$type = $_GET['type'];

$message = '';
if ($result == 'success') {
  switch ($type) {
    case 'newsletter':
      $message = '<p class="thanks__newsletter">You\'ve subscribed to our newsletters</p>';
      break;
    case 'contact':
      $message = '<h3 class="thanks__contact-title">Thank you!</h3>'
        . '<p class="thanks__contact-text">Our manager will contact you soon</p>';
      break;
    case 'booking':
      $bookingType = $_GET['bookingType'];

      $message = '<h3 class="thanks__contact-title">Thank you!</h3>'
        . '<p class="thanks__contact-text">You\'ve booked <b>"' . $bookingType . '"</b></p>'
        . '<p class="thanks__contact-text">Our manager will contact you soon</p>';
      break;
  }
} else {
  $message = '<p class="thanks__error-message">An error occurred while sending request. Please try again later</p>';
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