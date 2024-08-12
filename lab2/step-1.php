<?php
session_start();
echo '<pre>';
print_r($_SESSION);
echo '</pre>';
?>
<html>
<head>
    <meta charset="utf-8">
    <title>IPT10 Laboratory Activity #2</title>
    <link rel="icon" href="https://phpsandbox.io/assets/img/brand/phpsandbox.png">
    <link rel="stylesheet" href="https://assets.ubuntu.com/v1/vanilla-framework-version-4.15.0.min.css" />   
</head>
<body>

<section class="p-section--hero">
  <div class="row--50-50-on-large">
    <div class="col">
      <div class="p-section--shallow">
        <h1>
          Registration (Step 1/3)
        </h1>
      </div>
      <div class="p-section--shallow">
        <form action="step-2.php" method="POST">

            <fieldset>
                <label>Complete Name</label>
                <input type="text" name="fullname" placeholder="John Doe">

                <label>Email address</label>
                <input type="email" name="email" placeholder="example@canonical.com" autocomplete="email">

                <label>Password</label>
                <input type="password" name="password" placeholder="******" autocomplete="current-password">

                <button type="submit">Next</button>
            </fieldset>

        </form>
      </div>
    </div>
  </div>
</section>

</body>
</html>
