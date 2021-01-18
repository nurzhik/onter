<?php
require_once("../paysys/kkb.utils.php");

$order_id = 000002;
$amount = 10;
$email = 'orb.effect@mail.ru';
$count = 1;
$product_name = 'Тестовый товар';
// $order_id = (int)$_POST['order_id'];
// $amount = (int)$_POST['amount'];
// $email = $_POST['email'];
// $count = $_POST['count'];
// $product_name = $_POST['product_name'];
echo "<div style='display:none;'>";
echo "<pre>";
// var_dump($_POST);
echo "</pre>";
echo "<br>";
echo "<pre>";
var_dump($order_id);
echo "</pre>";
echo "</div>";
$self = $_SERVER['PHP_SELF'];
$path1 = '../paysys/config.txt';	// Путь к файлу настроек config.dat
// $order_id = 2;				// Порядковый номер заказа - преобразуется в формат "000001"
$currency_id = "398"; 			// Шифр валюты  - 840-USD, 398-Tenge
// $amount = 10;				// Сумма платежа
$content = process_request($order_id,$currency_id,$amount,$path1); // Возвращает подписанный и base64 кодированный XML документ для отправки в банк
?>
<html>
<head>
<title>Pay</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
</head>
<body>
<p><strong>Название продукта:</strong> <?php echo $product_name; ?></p>
<p><strong>Количество:</strong> <?php echo $count; ?></p>
<p><strong>Сумма к оплате:</strong> <?php echo $amount; ?></p>
<form name="SendOrder" method="post" action="https://epay.kkb.kz/jsp/process/logon.jsp">
   <input type="hidden" name="Signed_Order_B64" value="<?php echo $content;?>">
   E-mail: <input type="text" name="email" size=50 maxlength=50  value="<? echo $email?>">
   <p>
   <input type="hidden" name="Language" value="rus"> <!-- язык формы оплаты rus/eng -->
   <input type="hidden" name="BackLink" value="https://www.google.kz">
   <input type="hidden" name="PostLink" value="http://demo.astanacreative.kz/paytest/postlink.php">
   Со счетом согласен (-а)<br>
   <input type="submit" name="GotoPay"  value="Да, перейти к оплате" >&nbsp;
</form>
</body>
</html>
