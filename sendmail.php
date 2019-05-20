<?php

$empresa =      $_POST['empresa'];



$corpo = "

nome: "        .$_POST['nome']."
contato: "     .$_POST['contato']."
email: "       .$_POST['email']."
empresa: "     .$_POST['empresa']."
cnpj: "        .$_POST['cnpj']."
endereco: "    .$_POST['endereco']."
numero: "      .$_POST['numero']."
bairro: "      .$_POST['bairro']."
uf: "          .$_POST['uf']."
cep: "         .$_POST['cep']."

";

mail ('pimencheck@gmail.com',$empresa,$corpo,'From: guix22@hotmail.com');
echo 'Seus dados Foram Enviados Com Sucesso';

?>



