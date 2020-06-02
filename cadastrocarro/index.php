<?php
	include("../php/validarsessao.php");
  echo ("<h2 id='nomelogado'>Olá ".$_SESSION["nome_pessoa"]."</h2>");
  echo("<a id='botaosair' href='../php/loginsair.php' align='right'><input type='button' value='Dar o fora daqui' align='right'></a>");

?>
<HTML>
<HEAD>
 <TITLE>New Document</TITLE>
 <meta charset="UTF-8">
 <link rel="stylesheet" type="text/css" href="../css/tables.css" />
</HEAD>
<BODY>
  <center>
    <form method="post" action="../php/cadastracarro.php">
 <label>Chassi:</label> <input type="text" name="chassi"></input>

 <label>Caracteristica</label> <select name="idCarac">
 <option></option>
 <?php
      //include ("../php/conecta.php");
      //include("../php/conecta2.php");
      include ("../php/conectaserv.php");

      //conexão com o banco de dados e ações do php
  $local= "fdb14.biz.nf";
  $usuario = "2011625_lfdjs";
  $senhabanco = "09silva10lfdjs1991luiz";
  $banco = "2011625_lfdjs";

  $conexao = mysqli_connect ($local,$usuario,$senhabanco) or die ("Erro ao conectar ao banco de dados<br>".mysqli_error($conexao));
  mysqli_select_db($conexao,$banco) or die ("<br>Erro ao selecionar ao banco de dados<br>".mysqli_error($banco));


      
      $mostra = "select c.idCarac as caracteristica, d.nomeDescricao as descricao, m.nomeModelo as modelo, cr.nomeCor as cor, c.Total as total
      from caracteristica c
      join descricao d on d.idDescricao = c.idDescricao
      join modelo m on m.idModelo = c.idModelo
      join cor cr on cr.idCor = c.idCor
      order by c.idCarac desc";
      $exibe = mysqli_query($conexao,$mostra) or die ("Error ".mysqli_error($mostra));


      while($anuncia = mysqli_fetch_assoc($exibe)){
      echo ("
      <option value=".$anuncia['caracteristica'].">
          ".$anuncia['descricao']."
          ".$anuncia['modelo']."
          ".$anuncia['cor']."
          </option>"
          );
      
      }  
?>

<br>
</select>
  <label>Preço</label> <input type="text" name="preco"></input>
  
  <select name="situacao" >
  <option name="d"value="d">Disponivel</option>
  </select>
<br><br><br>
 <input type="reset" value="Limpar"> </input>
<input type="button" value="Validar"> </input>
<input type="submit" value="Cadastrar"> </input>
<br><br><br>
  <?php
  
      //include ("../php/conecta.php");
      //include ("../php/conecta2.php");
      include ("../php/conectaserv.php");

      $mostra = ("select c.idCarac as caracteristica, d.nomeDescricao as descricao, m.nomeModelo as modelo, cr.nomeCor as cor, c.total as total
      from caracteristica c
      join descricao d on d.idDescricao = c.idDescricao
      join modelo m on m.idModelo = c.idModelo
      join cor cr on cr.idCor = c.idCor
      order by c.idCarac desc");
      
      $exibe = mysqli_query($conexao,$mostra) or die ("Erro".mysqli_error($mostra));
      echo ("<center>
        <table>
      <th colspan='5'>
           Caracteristica
      </th>
      <tr>
      <td> Caracteristica </td>
      <td> Descrição </td>
      <td> Modelo </td>
      <td> Cor </td>
      <td> Total </td>
      </tr>

      ");
    while($anuncia = mysqli_fetch_assoc($exibe))
{
      echo ("
      <tr>
          <td>".$anuncia['caracteristica']." </td>
          <td>".$anuncia['descricao']." </td>
          <td>".$anuncia['modelo']." </td>
          <td>".$anuncia['cor']."</td>
          <td>".$anuncia['total']."</td>

      </tr>
      </center>


      ");
      
} 
?>
  </form>
</table>
</center>
</BODY>
<br><br><br>
<a href="../" align="center">Voltar à página principal</a>
<br><br><br>
<footer align="center">
©2016 LFDJS PRODUCTIONS
</footer>


