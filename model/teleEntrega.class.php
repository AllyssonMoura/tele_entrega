<?php
class teleEntrega {

  private $nome;
  private $telefone;
  private $endereco;
  private $padaria;
  private $acougue;
  private $higiene;
  private $quantidadePadaria;
  private $quantidadeAcougue;
  private $quantidadeHigiene;
  private $formaPagamento;
  private $teleEntrega;

  public function __construct() {

  }

  public function __destruct() {

  }

  public function __get($atributo) {
    return $this->atributo;
  }

  public function __set($atributo, $valor) {
    $this->$atributo = $valor;
  }

  public function calcularValorPadaria() {
    if ($this->padaria == 'Cacetinho') {
      return $this->quantidadePadaria * 0.70;
    } else if ($this->padaria == 'Enroladinho') {
      return $this->quantidadePadaria * 2.50;
    } else if ($this->padaria == 'Pão Integral') {
      return $this->quantidadePadaria * 1.00;
    } else {
      return $this->quantidadePadaria * 1.50;//Pão de Queijo
    }
  }

  public function calcularValorAcougue() {
    if ($this->acougue == 'Bife de Fígado') {
      return $this->quantidadeAcougue * 15.99;
    } else if ($this->acougue == 'Carne de Porco') {
      return $this->quantidadeAcougue * 18.99;
    } else if ($this->acougue == 'Carne Moída') {
      return $this->quantidadeAcougue * 16.32;
    } else {
      return $this->quantidadeAcougue * 17.99;//Peito de Frango
    }
  }

  public function calcularValorHigiene() {
    if ($this->higiene == 'Papel Higiênico') {
      return $this->quantidadeHigiene * 20.00;
    } else if ($this->higiene == 'Escova de Dentes') {
      return $this->quantidadeHigiene * 10.00;
    } else if ($this->higiene == 'Creme Dental') {
      return $this->quantidadeHigiene * 15.00;
    } else {
      return $this->quantidadeHigiene * 6.50;//Sabonete
    }
  }

  public function calcularValorTotal() {
    if ($this->teleEntrega == 'Sim') {
      return $this->calcularValorPadaria() + $this->calcularValorAcougue() + $this->calcularValorHigiene() + 7.00;
    } else {
      return $this->calcularValorPadaria() + $this->calcularValorAcougue() + $this->calcularValorHigiene();
    }
  }

  public function mostrarData() {
    return date ("d/m/Y");
  }

  public function mostrarHora() {
    return date ('H:i');
  }

  public function codigoPromocional() {
    $numeros = range (1, 50);
    $letras = range ("A", "Z");

    shuffle ($numeros);
    shuffle ($letras);

    return $letras[5]."".$numeros[5]."".$letras[0]."".$numeros[0];
  }

  public function __toString() {
    return '<center>Data do Pedido: '.$this->mostrarData().'</center>'.
           '<center>Hora do Pedido: '.$this->mostrarHora().'</center>'.
           '<center>Insira Esse Código Para Promoção de 10% na Próxima Compra: '.$this->codigoPromocional().'</center>'.
           '<br>Nome do Cliente: '.$this->nome.'<br>'.
           '<br>Telefone do Cliente: '.$this->telefone.'<br>'.
           '<br>Endereço da Entrega: '.$this->endereco.'<br>'.
           '<br>Produto da Padaria: '.$this->padaria.'<br>'.
           '<br>Produto do Açougue: '.$this->acougue.'<br>'.
           '<br>Produto de Higiene: '.$this->higiene.'<br>'.
           '<br>Forma de Pagamento: '.$this->formaPagamento.'<br>'.
           '<br>Tele Entrega: '.$this->teleEntrega.'<br>'.
           '<br>Quantidade de Produto da Padaria: '.$this->quantidadePadaria.'<br>'.
           '<br>Quantidade de Produto do Açougue: '.$this->quantidadeAcougue.'<br>'.
           '<br>Quantidade de Produto de Higiene: '.$this->quantidadeHigiene.'<br>'.
           '<br>Total da Padaria: R$ '.$this->calcularValorPadaria().'<br>'.
           '<br>Total do Açougue: R$ '.$this->calcularValorAcougue().'<br>'.
           '<br>Total da Higiene: R$ '.$this->calcularValorHigiene().'<br>'.
           '<br>Valor Total: R$ '.$this->calcularValorTotal().'<br>';
  }
}
 ?>
