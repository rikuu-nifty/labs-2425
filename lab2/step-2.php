<?php
session_start();

$fullname = $_GET['fullname'];
$email = $_GET['email'];
# Encrypt the password first before saving it to the Session Variables
$password = $_GET['password'];

$_SESSION['fullname'] = $fullname;
$_SESSION['email'] = $email;
$_SESSION['password'] = $password;
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
          Registration (Step 2/3)
        </h1>
      </div>
      <div class="p-section--shallow">
        <form action="step-3.php" method="POST">

            <fieldset>
                <label>Birthdate</label>
                <input type="date" name="birthdate">

                <label>Sex</label>
                <br />
                <input type="radio" name="sex" value="male">Male
                <br />
                <input type="radio" name="sex" value="female">Female
                <br />

                <label>Complete Address</label>
                <textarea name="address" rows="3"></textarea>

                <button type="submit">Next</button>
            </fieldset>

        </form>
        </fieldset>

    </div>
    </div>
  </div>
</section>

</body>
</html>
