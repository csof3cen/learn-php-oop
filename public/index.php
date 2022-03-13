<?php

// -------------------- BASES
// require_once 'class/Cart.php';
// require_once 'class/Payment/Paypal/Payment.php';
// require_once 'class/Payment/Stripe/Payment.php';

// $card = new Cart(1, 50);
// $card->setTotalPrice(100);
// $card->discount(5);
// var_dump($card->getTotalPrice());

// On peut utiliser le use pour éviter de mettre à chaque fois le fully
// qualified name

// use \Class\Payment\Paypal\Payment;
// use \Class\Payment\Stripe\Payment;

// S'il y a plusieurs classes avec les mêmes noms, on peut utiliser les alias

// NB: Lorsque l'on crée une classe sans spécifier son namespace, PHP va le
// chercher dans le namespace courant. Le namspace global est : /

// var_dump($paymentPaypal, $paymentStripe);

// -------------------- AUTOLOADING
// spl_autoload_register(function ($class) {
//   $path = dirname(__DIR__) . '/' . str_replace('\\', '/', $class . '.php');
//   var_dump($path);
//   if (file_exists($path)) {
//     require_once $path;
//   }
// });

// NB: Il faut éviter de placer notre fichier index au même niveau que les autres classes PHP
// Préférer le placer dans un dossier public/

require __DIR__ . '/../vendor/autoload.php';

// use \Class\Payment\Paypal\Payment as PaypalPayment;
// use \Class\Payment\Stripe\Payment as StripePayment;

// $paymentPaypal = new PaypalPayment();
// $paymentStripe = new StripePayment();
// var_dump($paymentPaypal, $paymentStripe);

// use \Colors\RandomColor;

// var_dump(RandomColor::one());

// --------------------- CONSTANTES & ENUMERATIONS
// use \Class\Enum\Reservation;

// $res = new Reservation();
// var_dump($res->status == \Class\ReservationStatus::APPROVAL_PENDING); // true

// -------------------- PROPRIETES & METHODES STATIQUES

// -------------------- HERITAGE

// use \Class\Heritage\CoffeeMachine;
// use \Class\Heritage\PremiumCoffeeMachine;

// $coffeeMachine = new CoffeeMachine('espresso');
// $premiumCoffeMachine = new PremiumCoffeeMachine('espresso');

// $coffeeMachine->select('espresso');
// $premiumCoffeMachine->select('espresso');

// NB: Le constructeur est aussi hérite
// Pour éviter de faire hériter une méthode ou une classe, on utilise le mot-clé final
// ainsi, final class Class | n'est pas héritable

// -------------------- CLASSE ABSTRAITE

// use Class\Abstract\Mercedes;

// $peugot = new Mercedes("Mercedes");
// var_dump($peugot->getMarque());

// -------------------- INTERFACE

use Class\Interface\BasicPDF;

$basiquePDF = new BasicPDF();
$basiquePDF->downloadPDF();

// -------------------- Le LATE STATIC BINDING
// VIDÉO FORMATION LIMITE: 2H28 (ou moins)