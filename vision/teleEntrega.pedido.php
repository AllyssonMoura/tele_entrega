<!DOCTYPE html>
<html>

  <head>
    <meta charset="utf-8">
    <title>Mini Mercado Moura</title>
  </head>

  <body>
    <fieldset><legend>Faça Seu Pedido</legend>
      <form action="../controller/teleEntrega.controller.php" method="post">
        <fieldset><legend>Preencha os Campos Abaixo</legend>
          <label>Nome: <input type="text" name="nome" required autofocus>*</label>
          <label>Telefone: <input type="number" name="telefone" required>*</label>
          <label>Endereço: <input type="text" name="endereco" required>*</label>
        </fieldset>
        <fieldset><legend>Padaria</legend>
          <select name="selpadaria">
            <option value="Cacetinho">Cacetinho - R$ 0,70 un.</option>
            <option value="Enroladinho">Enroladinho - R$ 2,50 un.</option>
            <option value="Pão Integral">Pão Integral - R$ 1,00 un.</option>
            <option value="Pão de Queijo">Pão de Queijo - R$ 1.50 un.</option>
          </select>
          <label>Quantidade: <input type="number" name="selquantidadepadaria" required>*</label>
        </fieldset>
        <fieldset><legend>Açougue</legend>
          <select name="selacougue">
            <option value="Bife de Fígado">Bife de Fígado - R$ 15,99 KG</option>
            <option value="Carne de Porco">Carne de Porco - R$ 18,99 KG</option>
            <option value="Carne Moída">Carne Moída - R$ 16,32 KG</option>
            <option value="Peito de Frango">Peito de Frango - R$ 17.99 KG</option>
          </select>
          <label>Quantidade: <input type="number" name="selquantidadeacougue" required>*</label>
        </fieldset>
        <fieldset><legend>Higiene</legend>
          <select name="selhigiene">
            <option value="Papel Higiênico">Papel Higiênico - R$ 20,00 pc.</option>
            <option value="Escova de Dentes">Escova de Dentes - R$ 10,00 un.</option>
            <option value="Creme Dental">Creme Dental - R$ 15,00 un.</option>
            <option value="Sabonete">Sabonete - R$ 6,50 un.</option>
          </select>
          <label>Quantidade: <input type="number" name="selquantidadehigiene" required>*</label>
        </fieldset>
        <fieldset><legend>Escolha a forma de pagamento</legend>
            <input type="radio" name="rdformapagamento" value="Visa" checked="checked">Visa
            <input type="radio" name="rdformapagamento" value="Mastercard">Mastercard
            <input type="radio" name="rdformapagamento" value="Elo Refeição">Elo Refeição
            <input type="radio" name="rdformapagamento" value="Dinheiro">Dinheiro
            <fieldset><legend>Deseja tele entrega?</legend>
                <input type="radio" name="rdteleentrega" value="Sim" checked="checked">Sim
                <input type="radio" name="rdteleentrega" value="Não">Não
            </fieldset>
        </fieldset>
        <fieldset><legend>Ações</legend>
            <input type="submit" name="btnEnviar" value="Enviar dados">
            <input type="reset" name="btnLimpar" value="Limpar dados">
        </fieldset>
      </form>
    </fieldset>
  </body>

</html>
