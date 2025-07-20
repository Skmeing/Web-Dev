<?php /* ----- confirm.php : display submitted application ----- */ ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <title>CAC – Application Confirmation</title>
  <link rel="stylesheet" href="css/style.css" />
  <style>
    table        { width:90%; max-width:700px; margin:2rem auto; border-collapse:collapse; background:#111; }
    th, td       { padding:0.8rem; border:1px solid #444; text-align:left; }
    th           { width:30%; background:#222; font-weight:600; }
  </style>
</head>
<body>
<?php include 'header.php'; ?>

<div id="content">
  <h2>Thank you for applying!</h2>
  <p>Your information has been recorded as shown below.</p>

  <?php
    // helper: safely echo
    function h($v){ return htmlspecialchars($v ?? '', ENT_QUOTES); }

    // collect values
    $fields = [
      'First name'        => $_POST['first'] ?? '',
      'Last name'         => $_POST['last'] ?? '',
      'KSU e‑mail'        => $_POST['email'] ?? '',
      'Student status'    => $_POST['status'] ?? '',
      'Skills'            => isset($_POST['skills']) ? implode(', ', $_POST['skills']) : 'None selected',
      'Desired role'      => $_POST['role'] ?? '',
      'Start date'        => $_POST['startdate'] ?? '',
      'Comments'          => $_POST['comments'] ?? '(none)'
    ];
  ?>

  <table>
    <tbody>
      <?php foreach ($fields as $label => $value): ?>
        <tr><th><?= h($label) ?></th><td><?= h($value) ?></td></tr>
      <?php endforeach; ?>
    </tbody>
  </table>

  <p style="text-align:center;">A confirmation e‑mail will be sent to you shortly (simulation).</p>
</div>

<?php include 'footer.php'; ?>
</body>
</html>
