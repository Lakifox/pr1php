<?php
$name = $email = $product = "";
$quantity = 0;
$total = 0;
$products = [
  "Телефон" => 12000,
  "Ноутбук" => 25000,
  "Навушники" => 3000
];

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $name = htmlspecialchars(trim($_POST["name"]));
  $email = htmlspecialchars(trim($_POST["email"]));
  $product = $_POST["product"];
  $quantity = (int)$_POST["quantity"];

  if ($quantity < 1 || $quantity > 100 || !isset($products[$product])) {
    $error = "Невірні дані. Перевірте кількість або вибір товару.";
  } else {
    $price = $products[$product];
    $total = $price * $quantity;
  }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Замовлення товару</title>
  <link rel="stylesheet" href="pr3.css">
</head>
<body>
  <div class="container">
    <h1>Оформлення замовлення</h1>

    <?php if (!empty($error)): ?>
      <div class="error"><?= $error ?></div>
    <?php endif; ?>

    <form method="post">
      <label>Ім’я покупця:
        <input type="text" name="name" required>
      </label>
      <label>Email:
        <input type="email" name="email" required>
      </label>
      <label>Вибір товару:
        <select name="product" required>
          <option value="">Оберіть товар</option>
          <?php foreach ($products as $key => $value): ?>
            <option value="<?= $key ?>"><?= $key ?> — <?= number_format($value, 0, '.', ' ') ?> ₴</option>
          <?php endforeach; ?>
        </select>
      </label>
      <label>Кількість:
        <input type="number" name="quantity" min="1" max="100" required>
      </label>
      <button type="submit">Замовити</button>
    </form>

    <?php if ($_SERVER["REQUEST_METHOD"] == "POST" && empty($error)): ?>
      <div class="result">
        <strong>Покупець:</strong> <?= $name ?><br>
        <strong>Email:</strong> <?= $email ?><br>
        <strong>Товар:</strong> <?= $product ?><br>
        <strong>Кількість:</strong> <?= $quantity ?><br>
        <strong>Сума:</strong> <?= number_format($total, 0, '.', ' ') ?> ₴
      </div>
    <?php endif; ?>
  </div>
</body>
</html>
