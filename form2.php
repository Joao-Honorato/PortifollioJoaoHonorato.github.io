<?php
if (isset($_POST['submit'])){

print_r('nome :' . $_POST['nomeAnuncio']); 

}?> <br>


    
$nome = $_POST['nomeAnuncio'];

$result = mysqli_query($conn, "INSERT INTO anuncio(nome) VALUES('$nome')");


 //interação banco de dados para o select anuncio
$sql_anuncio = "SELECT * FROM anuncio ORDER BY nome ASC";
$combo = $conn -> query($sql_anuncio);


//interação com banco de dados para textarea servico
$sql_servico = "SELECT * FROM servico ORDER BY nome ASC";
$checkbox = $conn -> query($sql_servico);
print_r($checkbox);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Serviços Anuncios</title>
</head>
<body>
    <form action="servicosanuncios.php" method="POST">
    <div id = "BlocoCombo">

        <select name="anuncios" id="anuncios">
            <?php
            while($listaanuncio = mysqli_fetch_assoc($combo))
            {
                echo "<option>";
                echo "<p>" .$listaanuncio['nome']."</p>";
            }

            ?>
            
        </select>
    </div>
      <?php
      $dados= filter_input_array(INPUT_POST, FILETR_DEFAULT);

      if(!empty($dados['add'])){
        var_dump($dados);

        "INSERT INTO servico(idAServico) VALUES ('')"
      
      
      }
      ?>
    <div id="\BlocoServico">
            <fieldset>
            <legend>Serviços</legend>
            <div>
                <input type="checkbox" id="" name="LavagemEx" />
                <label for="horns">Lavagem externa</label>
            </div>
            <div>
                <input type="checkbox" id="" name="Lavagem interna e externa" />
                <label for="horns">Lavagem interna e externa</label>
            </div>
            <div>
                <input type="checkbox" id="" name="Polimento" />
                <label for="horns">Polimento</label>
            </div>
            <input type="submit" name="add"> Salvar
            </fieldset>
        
    </div>
    </form>
    
</body>
</html>
