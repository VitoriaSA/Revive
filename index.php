<!DOCTYPE html>
<html>
  <head>
     <title>Revive | Revivendo os anos dourados</title>
     <meta charset="utf-8" />
     <link rel="shortcut icon" href="Imagens/Icon.png" />
     <meta name="viewport" content="width=device-width, initial-scale=1" />
     <!-- fontes -->
     <link href="https://fonts.googleapis.com/css?family=M+PLUS+1p" rel="stylesheet">
     <link href="https://fonts.googleapis.com/css?family=Pinyon+Script" rel="stylesheet" />
     <!-- CSS -->
     <link rel="stylesheet" href="bootstrap.css" />
     <link rel="stylesheet" href="CSS.css" />
     <!-- JS -->
     <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
     <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
     <!-- Bootstrap core CSS -->
     <!--<link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css" rel="stylesheet"> -->
     <!-- Material Design Bootstrap -->
     <!--<link href="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.5.9/css/mdb.min.css" rel="stylesheet"> -->
  </head>

  <body>
    <div class="cont container border-right border-left m-3 p-2 mx-auto text-center" >
      <h1 class='display-3 p-2 m-2 border-bottom text-white text-center'>Revive</h1>
      <br />
      <?php include 'DB.php';
        if(isset($_GET['opc'])){
          $opc = $_GET['opc'];
        }else{
          $opc='H';
        }
      ?>
      <div class="btn-group btn-dark text-secondary font" role="group" aria-label="Basic example">
        <a href="Index.php?opc=H"><button type="button" class="btn btn-dark title">Home</button></a>
        <a href="Index.php?opc=O"><button type="button" class="btn btn-dark title">Cardápio</button></a>
        <a href="Index.php?opc=R"><button type="button" class="btn btn-dark title">Privado</button></a>
      </div>
      <br/><br/><br />
      <?php
        if($opc == "H"){
          echo "<h3 class='font title strong text-danger float-left p-2 ml-4'>Revivendo os anos dourados!</h3>
          <br /> <br /> <br /> <br />";
          echo "  <div id='obj_carousel' class='carousel slide w-50 mx-auto' data-ride='carousel'>
                  <ol class='carousel-indicators'>";
          for ($i = 1; $i <= 5; $i++) {
            if($i == 1){
              echo "<li data-target='#obj_carousel' data-slide-to='0' class='active'></li>";
            }
            else{
              echo "<li data-target='#obj_carousel' data-slide-to='$i'></li>";
            }
          }
          echo "</ol>";
          echo "<div class='carousel-inner'>";
          for ($i = 1; $i <= 5; $i++) {
            if($i == 1){
              echo "<div class='carousel-item active'>";
            }
            else{
              echo "<div class='carousel-item'>";

            }
            echo "<img class='w-100' src='Imagens/Restaurante/restaurante$i.jpg' alt='restaurante' />
                    </div>";
          }
          echo "</div>
                  <a class='carousel-control-prev' href='#obj_carousel' role='button' data-slide='prev'>
                      <span class='carousel-control-prev-icon' aria-hidden='true'></span>
                      <span class='sr-only'>Anterior</span>
                  </a>
                  <a class='carousel-control-next' href='#obj_carousel' role='button' data-slide='next'>
                      <span class='carousel-control-next-icon' aria-hidden='true'></span>
                      <span class='sr-only'>Próximo</span>
                  </a>
                </div><br /> ";
          echo "<br />
                <h3 class='font title strong text-danger float-left p-2 ml-4'>Quem somos?</h3>
                <br /><br /><br />
                <p class='texto h5 text-left ml-3'>A hamburgeria anos 50 que vai te conquistar!
                <br />
                Desde 2008 fazemos hamburgers artesanais de qualidade com muito sabor.
                Venha jantar nas mais belas poltronas com estilo antigo ou até dentro de um Ford 51!
                Toda a ambientação e decoração rica em detalhes têm por objetivo remeter nossos clientes aos saudosos Anos Dourados.
                Caprichamos nos detalhes da decoração e principalmente na qualidade dos produtos!
                Apostamos no “artesanato da carne” para atrair os amantes de hambúrgueres e além de nossos suculentos hambúrgueres, oferecemos hot-dogs, beirutes, shakes e sobremesas exclusivas e deliciosas.</p>
                <br /><br />
                <h3 class='font title strong text-danger text-left p-2 ml-4'>Venha comer conosco!</h3>
                ";
          echo "<br />

                <h4 class='font title strong text-danger float-left p-2 ml-4'>Contato</h4>
                <br /><br /><br />
                <p class='texto h5 float-left text-left ml-4'>(11) 4902-8922 <br />(11) 4965-1250</p>
                <iframe src='https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d5248.298922566525!2d-46.67078546553962!3d-23.536012774151978!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x94ce581dd2c7875f%3A0x72bb93a33b1c2436!2sZ%C3%A9+do+Hamburger!5e0!3m2!1spt-BR!2sbr!4v1543328278312' width='600' height='450' frameborder='0' style='border:0' allowfullscreen></iframe>";

        }
        elseif($opc == "O"){
          $tabela = funSelect("tb_cardapio", "*", "");
          echo'
          <div class="btn-group btn-dark text-white" role="group" aria-label="Basic example">
            <a href="Index.php?opc=O&tipo=Hambúrguers"><button type="button" class="btn btn-dark title">Hambúrguers</button></a>
            <a href="Index.php?opc=O&tipo=Porcoes"><button type="button" class="btn btn-dark title">Porções</button></a>
            <a href="Index.php?opc=O&tipo=Bebidas"><button type="button" class="btn btn-dark title">Bebidas</button></a>
            <a href="Index.php?opc=O&tipo=Combos"><button type="button" class="btn btn-dark title">Combos</button></a>
            <a href="Index.php?opc=O&tipo=Sobremesas"><button type="button" class="btn btn-dark title">Sobremesas</button></a>
          </div>
          <br/><br/>';

          if(isset($_GET['tipo'])){
            $tipo = $_GET['tipo'];
            echo"<h5 class='p-2 m-2 title font text-white text-center'>$tipo</h3>";
              echo"
              <table>
                <tr>";
                for($i=0; $i < count($tabela); $i++){
                  if($tipo == $tabela[$i]['TIPO']){
                  echo"
                  <div class='card-body'>
                    <p class='text-danger font card-title'>".$tabela[$i]['NOME']."</p>
                    <img width='35%' src='".$tabela[$i]['FOTO']."' alt='imagem' >
                    <p class='font texto card-text card-text'>".$tabela[$i]['DESCRICAO']."</p>
                    <p class='text-success font'>R$".$tabela[$i]['VALOR'].",00</p>";
                  }
                }
                echo"
                </tr>
              </table>";
          }
          echo "<p class='m-2 float-left'><input type='submit' class='btn btn-outline-danger' value='Voltar' onclick='history.go(-1)' /></p><br/>";
        }
        elseif($opc == "R"){
          if($opc == "R"){
            echo "<div class='alert alert-warning alert-dismissible fade show' role='alert'>
                    <strong>Acesso Restrito!</strong> Apenas pessoas autorizadas!
                    <button type='button' class='close' data-dismiss='alert' aria-label='Close'>
                      <span aria-hidden='true'>&times;</span>
                    </button>
                  </div>";
          }
          echo'
          <div class="btn-group btn-dark text-white font" role="group" aria-label="Basic example">
            <a href="Index.php?opc=C"><button type="button" class="btn btn-dark title">Cadastrar</button></a>
            <a href="Index.php?opc=A"><button type="button" class="btn btn-dark title">Alterar</button></a>
            <a href="Index.php?opc=E"><button type="button" class="btn btn-dark title">Excluir</button></a>
            <a href="Index.php?opc=L"><button type="button" class="btn btn-dark title">Listar</button></a>
          </div>
          <br/><br/>';
        }
        elseif($opc == "C"){
          echo"<h5 class='p-2 m-2 title text-danger text-center font'>Cadastrar</h3>";

          echo "<form class='form' method='post' action='Index.php?opc=I' >";
            echo "<p>Nome: <input class='form-control' id='exampleFormControlInput1' placeholder='Insira o nome' type='text' size='40' name='nome' maxlength='40'/></p>";
            echo '<p>Tipo: ';
              echo '<select class="form-control" name="tipo" >;
                  <option value="0" selected disabled> Selecione... </option>
                  <option value="Porcoes"> Porcoes </option>
                  <option value="Bebidas"> Bebidas </option>
                  <option value="Hambúrguers"> Hambúrguers </option>
                  <option value="Combos"> Combos </option>
                  <option value="Sobremesas"> Sobremesas </option>
                </select></p>';
            echo "<p>Descricao: <textarea class='form-control' id='exampleFormControlTextarea1' placeholder='Descreva o produto' rows='3' size='150' name='descricao' maxlength='150'></textarea></p>";
            echo "<p>Foto: <input class='form-control' id='exampleFormControlInput1' type='text' size='50' name='foto' value='Imagens/Cardapio/' />  </p>";
            echo "<p>Valor: R$<input class='form-control w-25' id='exampleFormControlInput1' type='text' size='10' name='valor' value='0' min='0' />,00 </p>
            <p><input type='submit' class='btn btn-outline-danger' value='Cadastrar' />
            <input type='reset' class='btn btn-outline-danger' value='Limpar' /></p>";
          echo "</form>";
        }
        elseif($opc == "I"){
          if((isset($_POST['nome'])) && (isset($_POST['tipo'])) && (isset($_POST['foto'])) && (isset($_POST['descricao'])) && (is_numeric($_POST['valor']))){
            $nome = $_POST['nome'];
            $tipo = $_POST['tipo'];
            $foto = $_POST['foto'];
            $descricao = $_POST['descricao'];
            $valor = $_POST['valor'];

            $campos = 'NOME, TIPO, FOTO, DESCRICAO, VALOR';
            $valores = "'" . $_POST['nome'] ."',
                      '" . $_POST['tipo'] . "',
                      '" . $_POST['foto'] . "',
                      '" . $_POST['descricao'] . "',
                      '" . $_POST['valor'] . "'";

            if ( funInsert("tb_cardapio", $campos, $valores) == TRUE ) {
              echo "<p class='p-2 bg-info text-white' >Produto Cadastrado com sucesso!</p>";
            }else{
              echo "<p class='p-2 bg-warning text-white' >ERRO!</p>";
            }

          }else{
            echo "<p class='p-2 bg-warning text-white' >Preencha todas as informações corretamente!</p>";
          }
          echo "<p> <input type='submit' class='btn btn-outline-danger float-left' value='Voltar' onclick='history.go(-1)' /> </p><br/><br/>";
        }
        elseif($opc == "L"){
          $tabela = funSelect("tb_cardapio", "*", "");
          echo " <h5 class='p-2 m-2 title text-danger text-center'>Produtos Cadastrados:</h5>
                  <div class='container'>
                  <div class='row'>
                      <div class='col text-center font-weight-bold'>Nome</div>
                      <div class='col text-center font-weight-bold'>Tipo</div>
                      <div class='col text-center font-weight-bold'>Foto</div>
                      <div class='col text-center font-weight-bold'>Valor</div>
                      <div class='col text-center font-weight-bold'>Detalhes</div>
                  </div>";
                  for($i=0; $i < count($tabela); $i++) {
                      echo "<div class='row title'>
                      <div class='col text-center'>". $tabela[$i]['NOME'] ."</div>
                      <div class='col text-center'>". $tabela[$i]['TIPO'] ."</div>
                      <div class='col text-center'>". $tabela[$i]['FOTO'] ."</div>
                      <div class='col text-center'>". $tabela[$i]['VALOR'] ."</div>
                      <div class='col text-center'><a href='Index.php?opc=D&id=". $tabela[$i]['ID']
                      ."' ><img class='w-25' alt='lupa' src='Imagens/view.png' /></a></div>
                      </div>";
                    }
          echo "</div>";
          echo "</br><p> <input type='submit' class='btn btn-outline-danger float-left' value='Voltar' onclick='history.go(-1)' /> </p></br>";
        }
        elseif($opc == "D"){
          $id = $_GET['id'];
          $argumentos = " WHERE ID = '$id'";

          $tabela = funSelect("tb_cardapio", "*", $argumentos);

          echo "<h3 class='p-2 m-2 font text-white text-center'>". $tabela[0]['NOME'] ."</h3>
              <div class='container'>
                  <div class='row'>
                      <div class='col text-center'><img src='". $tabela[0]['FOTO'] ."' height='50' /></div>
                      <div class='col text-center font-weight-bold'>Tipo: </div>
                      <div class='col'>". $tabela[0]['TIPO'] ."</div>
                      <div class='col text-center font-weight-bold'>Descricao: </div>
                      <div class='col font'>". $tabela[0]['DESCRICAO'] ."</div>
                      <div class='col text-center font-weight-bold'>Valor: </div>
                      <div class='col'>R$ ". number_format($tabela[0]['VALOR'],2,',','.') ."</div>
                 </div>
              </div>
          <br />
          <p><input class='float-left btn btn-outline-danger' type='submit' value='Voltar' onClick='history.go(-1)' /> </p></br>";
        }
        elseif($opc == "A"){
          $tabela = funSelect("tb_cardapio", "*", "");
          echo " <h5 class='p-2 m-2 title text-danger text-center'>Produtos Cadastrados:</h5>
                  <div class='container'>
                  <div class='row'>
                      <div class='col text-center font-weight-bold'>Nome</div>
                      <div class='col text-center font-weight-bold'>Tipo</div>
                      <div class='col text-center font-weight-bold'>Foto</div>
                      <div class='col text-center font-weight-bold'>Valor</div>
                        <div class='col text-center font-weight-bold'>Detalhes</div>
                  </div>";
                  for($i=0; $i < count($tabela); $i++) {
                      echo "<div class='row title'>
                      <div class='col text-center'>". $tabela[$i]['NOME'] ."</div>
                      <div class='col text-center'>". $tabela[$i]['TIPO'] ."</div>
                      <div class='col text-center'>". $tabela[$i]['FOTO'] ."</div>
                      <div class='col text-center'>". $tabela[$i]['VALOR'] ."</div>
                      <div class='col text-center'><a href='Index.php?opc=M&id=". $tabela[$i]['ID']
                      ."' ><img alt='alterar' class='w-25' src='Imagens/Modify.png' /></a></div>
                      </div>";
                    }
          echo"<p><input class='btn btn-outline-danger float-left' type='submit' value='Voltar' onClick='history.go(-1)' /> </p></br>";
        }
        elseif($opc == "M"){
          $id = $_GET['id'];

          echo"<h5 class='p-2 m-2 title text-white text-center'>Atualizar</h3>";
          echo "<form class='form' method='post' action='Index.php?opc=U&id=$id;' >";

            $produto = funSelect('tb_cardapio', '*', 'WHERE id='.$id);
              echo "<p>Nome: <input type='text' class='form-control' id='exampleFormControlInput1' size='40' name='nome' value='".$produto[0]['NOME']."' maxlength='40'/></p>";
              echo '<p>Tipo: ';

              if($produto[0]['TIPO']=='Porcoes'){
                                             echo '<select name="tipo" class="form-control">;
                                                 <option value="0" disabled> Selecione... </option>
                                                 <option selected value="Porcoes" > Porcoes </option>
                                                 <option value="Bebidas" > Bebidas </option>
                                                 <option value="Hambúrguers" > Hambúrguers </option>
                                                 <option value="Combos" > Combos </option>
                                                 <option value="Sobremesas" > Sobremesas </option>
                                               </select></p>';
              }
              else if($produto[0]['TIPO']=='Bebidas'){
                                             echo '<select name="tipo" class="form-control">;
                                                 <option value="0" disabled> Selecione... </option>
                                                 <option selected value="Porcoes" > Porcoes </option>
                                                 <option value="Bebidas" > Bebidas </option>
                                                 <option value="Hambúrguers" > Hambúrguers </option>
                                                 <option value="Combos" > Combos </option>
                                                 <option value="Sobremesas" > Sobremesas </option>
                                               </select></p>';
              }
              else if($produto[0]['TIPO']=='Hambúrguers'){
                                             echo '<select name="tipo" class="form-control">;
                                                 <option value="0" disabled> Selecione... </option>
                                                 <option selected value="Porcoes" > Porcoes </option>
                                                 <option value="Bebidas" > Bebidas </option>
                                                 <option value="Hambúrguers" > Hambúrguers </option>
                                                 <option value="Combos" > Combos </option>
                                                 <option value="Sobremesas" > Sobremesas </option>
                                               </select></p>';
              }else if($produto[0]['TIPO']=='Combos'){
                                             echo '<select name="tipo" class="form-control">;
                                                 <option value="0" disabled> Selecione... </option>
                                                 <option selected value="Porcoes" > Porcoes </option>
                                                 <option value="Bebidas" > Bebidas </option>
                                                 <option value="Hambúrguers" > Hambúrguers </option>
                                                 <option value="Combos" > Combos </option>
                                                 <option value="Sobremesas" > Sobremesas </option>
                                               </select></p>';
              }else if($produto[0]['TIPO']=='Sobremesas'){
                                             echo '<select name="tipo" class="form-control">;
                                                 <option value="0" disabled> Selecione... </option>
                                                 <option selected value="Porcoes" > Porcoes </option>
                                                 <option value="Bebidas" > Bebidas </option>
                                                 <option value="Hambúrguers" > Hambúrguers </option>
                                                 <option value="Combos" > Combos </option>
                                                 <option value="Sobremesas" > Sobremesas </option>
                                               </select></p>';
              }
              echo "<p>Descricao: <textarea class='form-control' value='".$produto[0]['DESCRICAO']."' rows='3' size='150' name='descricao' maxlength='150'></textarea></p>";
              echo "<p>Foto: <input type='text' class='form-control' id='exampleFormControlInput1' size='50' name='foto' value='".$produto[0]['FOTO']."' />  </p>";
              echo "<p>Valor: R$<input type='text' class='form-control w-25' size='10' name='valor' value='".$produto[0]['VALOR']."' min='0' />,00 </p>
              <p><input type='submit' class='btn btn-outline-danger' value='Atualizar' />
              <input type='reset' class='btn btn-outline-danger' value='Limpar' /></p>";
            echo "</form>";
        }
        elseif($opc == "U"){
          if((isset($_POST['nome'])) && (isset($_POST['tipo'])) && (isset($_POST['foto'])) && (isset($_POST['descricao'])) && (is_numeric($_POST['valor'])))
            {
                $tabela = 'tb_cardapio';
                $colunas = array ('NOME="'.$_POST["nome"].'"', 'TIPO="'.$_POST["tipo"].'"', 'FOTO="'.$_POST["foto"].'"', 'DESCRICAO="'.$_POST["descricao"].'"', 'VALOR="'.$_POST["valor"].'"');
                $campos = implode(', ', $colunas);
                $valores = "WHERE ID=". $_GET['id'];

                $sucesso = funUpdate($tabela, $campos, $valores);

                if ($sucesso == true)
                {
                    echo'
                        <div class="container mt-4 bg-info">
                            <h5 class="text-white">Produto alterado com sucesso!</h5>
                        </div>';
                }

                else
                {
                    echo '
                    <div class="container mt-4 bg-warning">
                        <h5 class="text-bold">ERRO!!! Falha ao registrar as informações</h5>
                    </div>';
                }
            }
            else
            {
                echo '
                <div class="container mt-4 bg-warning">
                    <h5 class="text-bold">ERRO!!! As informações inseridas não são válidas</h5>
                </div>';
            }
            echo "<p> <input type='submit' class='btn btn-outline-danger float-left' value='Voltar' onclick='history.go(-1)' /> </p><br/>";
        }
        elseif($opc == "E"){
          $tabela = funSelect("tb_cardapio", "*", "");
          echo " <h5 class='p-2 m-2 font title text-danger text-center'>Produtos Cadastrados:</h5>
                  <div class='container'>
                  <div class='row'>
                      <div class='col text-center font-weight-bold'>Nome</div>
                      <div class='col text-center font-weight-bold'>Tipo</div>
                      <div class='col text-center font-weight-bold'>Foto</div>
                      <div class='col text-center font-weight-bold'>Descricao</div>
                      <div class='col text-center font-weight-bold'>Valor</div>
                      <div class='col text-center font-weight-bold'>Detalhes</div>
                  </div>";
                  for($i=0; $i < count($tabela); $i++) {
                      echo "<br /><div class='row title'>
                      <div class='col text-center'>". $tabela[$i]['NOME'] ."</div>
                      <div class='col text-center'>". $tabela[$i]['TIPO'] ."</div>
                      <div class='col text-center'>". $tabela[$i]['FOTO'] ."</div>
                      <div class='col text-center'>". $tabela[$i]['DESCRICAO'] ."</div>
                      <div class='col text-center'>". $tabela[$i]['VALOR'] ."</div>
                      <div class='col text-center'><a href='Index.php?opc=X&id=". $tabela[$i]['ID']
                      ."' ><img alt='apagar' class='w-25' src='Imagens/erase.png' /></a></div>
                      </div>";
                    }
          echo "</div>";
          echo "</br><p> <input type='submit' class='btn btn-outline-danger float-left' value='Voltar' onclick='history.go(-1)' /> </p></br>";
        }
        elseif($opc == "X"){
          if(isset($_GET['id'])){
            $id = $_GET['id'];
            $tabela = 'tb_cardapio';
            $campos = "where id = ".$id;

            if(funDelete($tabela, $campos)==true){
                echo "<p class='p-2 bg-primary text-white'>Produto excluído com sucesso!</p>";
            }else{
                echo "<p class='p-2 bg-warning text-white'>Erro inesperado!</p";
              }
            }
            else
            echo "<p class='p-2 bg-warning text-white'>Preencha todos os campos corretamente!</p>";

            echo '<a href="Index.php"> <button class="btn btn-outline-danger mb-4">Voltar</button> </a>';
        }
      ?>
      <br /><br /><br />
      <div class='blockquote-footer'>
        <p class='text-secondary'>© Copyright IFSP 2018.</p>
        <p class='text-secondary'>Developed by <span class='text-danger'>Vitória</span></p>
      </div>
    </div>
  </body>
</html>
