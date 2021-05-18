<?php
// SDK de Mercado Pago
require __DIR__ .  '/vendor/autoload.php';
// Agrega credenciales
MercadoPago\SDK::setAccessToken('TEST-1384107962268824-051411-349f502cc81c16abda9b8722a775704f-260458337');

// Crea un objeto de preferencia
$preference = new MercadoPago\Preference();

// Crea un ítem en la preferencia
$item = new MercadoPago\Item();
$item->title = 'Mi producto';
$item->quantity = 1;
$item->unit_price = 1.00;
$preference->items = array($item);
$preference->save();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>procesar pago</title>
</head>
<body>
    


    <label class="mercadopago" for=""></label>



<script src="https://sdk.mercadopago.com/js/v2"></script>



curl -X POST \
-H "Content-Type: application/json" \
-H 'Authorization: Bearer PROD_ACCESS_TOKEN' \
"https://api.mercadopago.com/users/test_user" \
-d '{"site_id":"MLA"}'

curl -X POST -H "Content-Type: application/json" -H 'Authorization:TEST-1384107962268824-051411-349f502cc81c16abda9b8722a775704f-260458337' "https://api.mercadopago.com/users/test_user"-d "{'site_id':'MLA'}"

          
<script>
// Agrega credenciales de SDK
  const mp = new MercadoPago('TEST-4967bc3f-fc56-453f-9394-79e4449fcae1', {
        locale: 'es-AR'
  });

  // Inicializa el checkout
  mp.checkout({
      preference: {
          id: "<?php echo $preference->id?>"
      },
      render: {
            container: '.mercadopago', // Indica dónde se mostrará el botón de pago
            label: 'Pagar', // Cambia el texto del botón de pago (opcional)
      }
});
</script>

</body>
</html>