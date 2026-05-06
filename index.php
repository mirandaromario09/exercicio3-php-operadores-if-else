<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
         


    <?php
    //ENTRADAS:
    //$cliente_ativo 
    //$assinante_clube 
   //$cupom_ativo 
    //$valor_pedido 
    //$taxa_entrega 
    //$quer_entrega 

    //VARIAVEIS NOVAS
    //$valor_pedido_final
    //$valor_pedido_desconto
    //$taxa_entrega_final

    $cliente_ativo = false;
    $assinante_clube = false;
    $cupom_ativo = true;
    $valor_pedido = 180;
    $taxa_entrega = 25;
    $quer_entrega = true;

    if ($cliente_ativo == false) {
        $valor_pedido_desconto = 0;
    } else if  ($assinante_clube == true){
        $valor_pedido_desconto = $valor_pedido - ($valor_pedido * 0.25);
    } else if  ($cupom_ativo == true){
        $valor_pedido_desconto = $valor_pedido - ($valor_pedido * 0.10);
    }  else {
        $valor_pedido_desconto = $valor_pedido;
    }        
    
    if ($cliente_ativo == true && $quer_entrega == true){
        $taxa_entrega_final = $taxa_entrega;
    } else {
        $taxa_entrega_final = 0;
    }

    $valor_pedido_final = $valor_pedido_desconto + $taxa_entrega_final;
    ?>
    <p>Cliente esta ativo?
        <?php
        if ($cliente_ativo == true){
            echo "Sim";
        } else {
            echo "Não";
        }
        ?>
    </p>
    <p>Cupom esta ativo?
        <?php
        if ($cupom_ativo == true){
            echo "Sim";
        } else {
            echo "Não";
        }    
        ?>
    </p>
    <p>Cliente quer entrega?
        <?php
        if ($quer_entrega == true){
            echo "Sim";
        } else {
            echo "Não";
        }
        ?>
    </p>
    <p>Valor original do pedido: <?php echo $valor_pedido;?></p>
    <p>Valor do pedido com desconto: <?php echo $valor_pedido_desconto;?></p>
    <p>Taxa original de entrega: <?php echo $taxa_entrega;?></p>
    <p>Taxa final de entrega: <?php echo $taxa_entrega_final;?></p>
    <p>Valor total a pagar: <?php echo $valor_pedido_final;?></p>
    <p>Houve desconto?
        <?php
        if ($cliente_ativo == true && $valor_pedido_desconto < $valor_pedido){
            echo "Sim";
        } else {
            echo "Não";
        }
        ?>
    </p>
     <p>Houve taxa de entrega?
        <?php
        if ($taxa_entrega_final > 0){
            echo "Sim";
        } else {
            echo "Não";
        }
        ?>
    </p>
</body>
</html>