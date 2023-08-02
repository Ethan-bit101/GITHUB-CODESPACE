<!DOCTYPE html>
<html>

<head>
  <title></title>
</head>

<body>
  <h3>Story</h3>
  <p>John Ethan B. Dela Cruz is interested in purchasing materials related
    to waifu culture in order to help alleviate the depression he is
    currently experiencing. He is unsure about the prices of these materials
    and currently has 700 pesos in his wallet. However, it is worth mentioning
    that he is also unsure which waifu to purchase, as all of them seem appealing
    to him. In the store it has ayatsuji tsukasa, Nino Nakano, Nakano Miku.</p>
  <?php
  $w = ("w");

  if ($w < "10") {
    echo "Have a good morning!";
  } elseif ($t < "20") {
    echo "Have a good day!";
  } else {
    echo "Have a good night!";
  }
  ?>
  if ($t >= "700") {
  echo "Congratulations you can now buy a Waifu materials";
  } elseif ($t >= "700") {
  echo "Sorry you are not eligible to purchase the material";
  } else {
  echo "Are you sure you want to quit?";
  }