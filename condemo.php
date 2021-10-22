<?php


require 'includes/init.php';


$email4 = '';
$subject4 = '';
$message4 = '';

if ($_SERVER["REQUEST_METHOD"] == "POST") {

  $email4 = $_POST['email2'];
  $subject4 = $_POST['subject2'];
  $message4 = $_POST['message2'];

  $errors = [];

  if (filter_var($email4, FILTER_VALIDATE_EMAIL) === false) {
    $errors[] = 'Please enter a valid email address';
  }

  if ($subject4 == '') {
    $errors[] = 'Please enter a subject';
  }

  if ($message4 == '') {
    $errors[] = 'Please enter a message';
  }
}


?>
<?php require 'includes/header.php'; ?>

<h2>contact</h2>

<?php if (!empty($errors)) : ?>
<ul>
  <?php foreach ($errors as $error) : ?>
  <li style="color: red;"><?= $error ?></li>
  <?php endforeach; ?>
</ul>
<?php endif; ?>


<form method="post">

  <div class="form-group" id="test-mail">
    <label for="email1">Your email</label>
    <input class="form-control" name="email2" id="email1" type="email" placeholder="Your email"
      value="<?= htmlspecialchars($email4) ?>">
  </div>

  <div class="form-group">
    <label for="subject1">Subject</label>
    <input class="form-control" name="subject2" id="subject1" placeholder="Subject"
      value="<?= htmlspecialchars($subject4) ?>">
  </div>

  <div class="form-group">
    <label for="message1">Message</label>
    <textarea class="form-control" name="message2" id="message1"
      placeholder="Message"><?= htmlspecialchars($message4) ?></textarea>
  </div>

  <button class="btn">Send</button>

</form>

<?php require 'includes/footer.php'; ?>