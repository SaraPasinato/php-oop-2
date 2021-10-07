<?php 

require_once __DIR__ . '/modules/User.php';
require_once __DIR__ . '/modules/Date.php';
require_once __DIR__ . '/modules/Address.php';
require_once __DIR__ . '/modules/CreditCard.php';
require_once __DIR__ . '/modules/Customer.php';
require_once __DIR__ . '/modules/Retailer.php';
require_once __DIR__ . '/modules/Product.php';
require_once __DIR__ . '/modules/ProductList.php';
require_once __DIR__ .'/modules/Order.php';

//!Cliente
//creo data Cliente
$dC1=new Date(2,10,2022);
//creo indirizzo Cliente 
$addr=new Address('via Verdi',4,'Milano','20019');
//creo carta di credito Cliente 
$cc=new CreditCard('123456789123',$dC1,'SaraPasinato');
//inizializzo istanza Cliente di tipo Customer
$c1= new Customer('saraPasi','pinco@pango.da','pancopinco','Sara','Pasinato',$dC1,$addr,$cc);

//!Venditore
//creo data Venditore
$dR1=new Date(2,1,2026);
//creo indirizzo Venditore
$addr2=new Address('via Rossi',12,'Roma','10019');
//creo carta di credito CreditCard venditore
$cc2=new CreditCard('9876543219876543',$dR1,'MicheleRossi');
//instanzio il venditore
$r1= new Retailer('marketShop','shop@id.it','pancopinco','pinco','panco',12345678912,$dR1,$addr2,$cc2);

//!Prodotto 1 e 2
//instanzio prodotto
$prod1= new Product('Libro','parla di cose',12.30,new Category('1','Libri'));
//instanzio lista di prodotto
$list1= new ProductList($prod1,2,10);

//?secondo prodotto
$prod2= new Product('Cappello','Tessuto',24.30,new Category('2','Abbigliamento'));
$list= new ProductList($prod2,4,30);

//!Instanzio Ordine 1 e 2
$o1=new Order($c1,$r1,$list1);
$o2=new Order($c1,$r1,$list);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ordini Shop</title>
</head>
<body style="max-width: 900px; margin:0 auto; display:flex; justify-content:center;">
    <div ><?= $o1 ?></div>
    <hr>
    <div><?= $o2 ?></div>

</body>
</html>