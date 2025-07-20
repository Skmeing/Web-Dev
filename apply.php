<?php /* ----- apply.php : student assistant application form ----- */ ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <title>CAC – Apply</title>
  <link rel="stylesheet" href="css/style.css" />
  <style>
    form            { max-width:680px; margin:2rem auto; background:#111; padding:1.5rem; border:1px solid #444; border-radius:6px; }
    label           { display:block; margin:0.8rem 0 0.4rem; font-weight:bold; }
    input, select,
    textarea        { width:100%; padding:0.45rem; font-size:1rem; border-radius:4px; border:1px solid #666; background:#222; color:#fff; }
    textarea        { resize:vertical; min-height:100px; }
    .inline         { display:inline-block; width:auto; margin-right:1rem; }
    button          { margin-top:1rem; padding:0.6rem 1.2rem; font-size:1rem; border:none; border-radius:4px; background:#0068d1; color:#fff; cursor:pointer; }
    button:hover    { background:#3389e0; }
  </style>
</head>
<body>
<?php include 'header.php'; ?>

<div id="content">
  <h2>Student Assistant Application</h2>
  <p>Please complete the form below. All fields marked * are required.</p>

  <form method="post" action="confirm.php">
    <!-- Name -->
    <label>First name *</label>
    <input type="text" name="first" required />

    <label>Last name *</label>
    <input type="text" name="last" required />

    <!-- Email -->
    <label>KSU e‑mail *</label>
    <input type="email" name="email" required />

    <!-- Status -->
    <label>Student status *</label>
    <div class="inline"><input type="radio" name="status" value="Undergraduate" required /> Undergraduate</div>
    <div class="inline"><input type="radio" name="status" value="Graduate" /> Graduate</div>

    <!-- Skills -->
    <label>Skills you’re comfortable with (check all that apply)</label>
    <div class="inline"><input type="checkbox" name="skills[]" value="Python" /> Python</div>
    <div class="inline"><input type="checkbox" name="skills[]" value="JavaScript" /> JavaScript</div>
    <div class="inline"><input type="checkbox" name="skills[]" value="SQL" /> SQL</div>
    <div class="inline"><input type="checkbox" name="skills[]" value="Networking" /> Networking</div>

    <!-- Desired role -->
    <label>Desired role *</label>
    <select name="role" required>
      <option value="" disabled selected>Select…</option>
      <option>Research</option>
      <option>Support</option>
      <option>Outreach</option>
    </select>

    <!-- Start date -->
    <label>Preferred start date *</label>
    <input type="date" name="startdate" required />

    <!-- Comments -->
    <label>Anything else we should know?</label>
    <textarea name="comments" placeholder="Optional"></textarea>

    <!-- Submit -->
    <button type="submit">Submit application</button>
  </form>
</div>

<?php include 'footer.php'; ?>
</body>
</html>
