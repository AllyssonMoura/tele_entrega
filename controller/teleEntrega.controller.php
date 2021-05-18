<?php
session_start();
include '../model/teleEntrega.class.php';

if (isset($_POST['nome'])&&
    isset($_POST['telefone'])&&
    isset($_POST['endereco'])&&
    isset($_POST['selpadaria'])&&
    isset($_POST['selquantidadepadaria'])&&
    isset($_POST['selacougue'])&&
    isset($_POST['selquantidadeacougue'])&&
    isset($_POST['selhigiene'])&&
    isset($_POST['selquantidadehigiene'])&&
    isset($_POST['rdformapagamento'])&&
    isset($_POST['rdteleentrega'])) {

      $tele = new teleEntrega();

      $tele->nome = $_POST['nome'];
      $tele->telefone = $_POST['telefone'];
      $tele->endereco = $_POST['endereco'];
      $tele->padaria = $_POST['selpadaria'];
      $tele->acougue = $_POST['selacougue'];
      $tele->higiene = $_POST['selhigiene'];
      $tele->quantidadePadaria = $_POST['selquantidadepadaria'];
      $tele->quantidadeAcougue = $_POST['selquantidadeacougue'];
      $tele->quantidadeHigiene = $_POST['selquantidadehigiene'];
      $tele->formaPagamento = $_POST['rdformapagamento'];
      $tele->teleEntrega = $_POST['rdteleentrega'];

      $_SESSION ['mensagem'] = 'Pedido relizado com sucesso!';
      $_SESSION ['teleentrega'] = serialize ($tele);

      header ("location:../vision/teleEntrega.resposta.php");
    } else {
      echo "ERRO!!!";
    }
 ?>
