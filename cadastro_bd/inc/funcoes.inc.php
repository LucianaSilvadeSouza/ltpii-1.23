<?php

 // var_dump($link);
 //   echo 'aqui funcoes.inc.php <br>';

function monta_select_curso(){

  global $link;
  
  // lista cursos já cadastrados
  $query = "SELECT id_curso, ds_curso FROM tb_curso;";
  if ($result = mysqli_query($link, $query)) {
	  echo "<select name=\"id_curso\">";
	  // busca os dados lidos do banco de dados
	  while ($row = mysqli_fetch_assoc($result)) {
		  $id = $row["id_curso"];
		  $curso = $row["ds_curso"];
                   // <option value="1">Anal. Des. Sist</option> 
		  echo "<option value=\"$id\">";
		  echo  $curso . '</option>';
          }
          echo "</select>";
          
	  // libera a área de memória onde está o resultado
	  mysqli_free_result($result);
  }

  }

  function recupera_curso($id)
  {
      global $link;
  
      $query = "SELECT id_curso, ds_curso FROM tb_curso WHERE id_curso = $id;";
      if ($result = mysqli_query($link, $query)) {
          $row = mysqli_fetch_assoc($result);
          mysqli_free_result($result);
          return $row;
      }
  
      return null;
  }
  
  function recupera_aluno($id)
  {
      global $link;
  
      $query = "SELECT id_aluno, ds_aluno, id_curso FROM tb_aluno WHERE id_aluno = $id;";
      if ($result = mysqli_query($link, $query)) {
          $row = mysqli_fetch_assoc($result);
          mysqli_free_result($result);
          return $row;
      }
  
      return null;
  }
  
  // Exemplo de uso:
  // $id_curso = 1; // ID do curso que deve ser selecionado
  // monta_select_curso($id_curso);
  
  // $id_curso = 2; // ID do curso que deve ser selecionado
  // monta_select_curso2($id_curso);
  
  // $curso = recupera_curso($id_curso);
  // if ($curso) {
  //     $id_curso = $curso['id_curso'];
  //     $ds_curso = $curso['ds_curso'];
  //     // Preencher o formulário de alteração com os dados do curso
  //     echo "<input type=\"hidden\" name=\"id_curso\" value=\"$id_curso\">";
  //     echo "<input type=\"text\" name=\"ds_curso\" value=\"$ds_curso\">";
  // } else {
  //     echo "Curso não encontrado.";
  // }