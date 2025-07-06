<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <title>CAC – Eligibility Checker</title>
  <link rel="stylesheet" href="css/style.css" />
  <style>
    /* quick form styling so controls aren't plain browser defaults */
    form            { max-width:640px; margin:2rem auto; background:#111; padding:1.5rem; border:1px solid #444; border-radius:6px; }
    label           { display:block; margin:0.8rem 0 0.4rem; font-weight:bold; }
    select, button  { width:100%; padding:0.4rem; font-size:1rem; border-radius:4px; border:1px solid #666; background:#222; color:#fff; }
    button:hover    { background:#444; cursor:pointer; }
    #courses        { margin-top:1rem; }
    #result         { margin-top:1.5rem; font-size:1.1rem; }
    #result.pass    { color:#6ecf6e; }
    #result.fail    { color:#ff7272; }
    a.apply-link    { color:#6ecf6e; text-decoration:underline; }
  </style>
</head>
<body>

  <!-- ===== HEADER ===== -->
  <div id="header">
    <img src="banner.JPG" alt="CAC banner" id="banner" />
    <h1>Computing &amp; Analytics Center (CAC)</h1>

    <nav>
      <ul>
        <li><a href="index.html"      class="menu">Home</a></li>
        <li><a href="Faculty.html"    class="menu">Faculty</a></li>
        <li><a href="projects.html"   class="menu">Projects</a></li>
        <li><a href="eligibility.html" class="menu">Eligibility</a></li>
      </ul>
    </nav>
  </div>

  <!-- ===== MAIN ===== -->
  <div id="content">
    <h2>Student Assistant Eligibility Check</h2>
    <p>
      Complete the form below to see if you meet the minimum&nbsp;grade requirements
      for a CAC summer student-assistant position.
      Select your status, enter the letter grade you earned for each required course,
      then click <strong>Evaluate</strong>.
    </p>

    <form id="eligForm">
      <label for="status">Student status</label>
      <select id="status" required>
        <option value="" disabled selected>Select status…</option>
        <option value="ug">Undergraduate</option>
        <option value="gr">Graduate</option>
      </select>

      <div id="courses"></div>

      <button type="submit">Evaluate</button>
      <div id="result"></div>
    </form>
  </div>

  <!-- ===== FOOTER ===== -->
  <div id="footer">
    <p>This site is a class project for <a href="http://it5443.azurewebsites.net">IT&nbsp;5443</a>.</p>
  </div>

  <!-- ===== SCRIPT ===== -->
  <script>
  // ---------- data ----------
  const data = {
    ug: {
      req: 3.2,
      courses: [
        "CSE 3203 – Mobile System Overview",
        "IT 4213 – Mobile Web Development",
        "IT 1113 – Programming Principles",
        "IT 2101 – Computers and Your World",
        "IT 3123 – Hardware and Software Concepts"
      ]
    },
    gr: {
      req: 3.7,
      courses: [
        "IT 7113 – Data Visualization",
        "IT 6713 – Business Intelligence",
        "IT 6433 – IT Management",
        "IT 7323 – Computer Forensics"
      ]
    }
  };

  const gradeMap = { A:4, B:3, C:2, D:1, F:0 };

  // ---------- helpers ----------
  const $ = id => document.getElementById(id);

  function buildCourseInputs(list) {
    return list.map((title,i)=>`
      <label>${title}
        <select required data-idx="${i}">
          <option value="" disabled selected>Grade…</option>
          <option>A</option><option>B</option>
          <option>C</option><option>D</option>
          <option>F</option>
        </select>
      </label>`).join("");
  }

  // ---------- DOM events ----------
  $("status").addEventListener("change", e=>{
    const key = e.target.value;
    $("courses").innerHTML = buildCourseInputs(data[key].courses);
    $("result").textContent = "";
    $("result").className = "";
  });

  $("eligForm").addEventListener("submit", e=>{
    e.preventDefault();
    const key = $("status").value;
    const selects = $("courses").querySelectorAll("select");
    if (!key || selects.length===0) return;

    let total = 0;
    for (const sel of selects) {
      const val = sel.value;
      if (!val) { sel.focus(); return; }
      total += gradeMap[val];
    }
    const avg = total / selects.length;
    const pass = avg >= data[key].req;

    $("result").className = pass ? "pass" : "fail";
    $("result").innerHTML =
      `Average grade: ${avg.toFixed(2)} — ` +
      (pass
        ? `Congratulations! You qualify. <a href="apply.html" class="apply-link">Apply&nbsp;now</a>.`
        : `Thank you for your interest, but the minimum average of ${data[key].req.toFixed(1)} was not met.`);
  });
  </script>
</body>
</html>
