<?php 
function salvarUsuario ($novoUsuario) {
    // leitura do arquivo
    $usuariosJson = file_get_contents("usuarios.json");

    // transforma o json aberto em array
    $usuariosArray = json_decode($usuariosJson, true);

    // Adiciona o novo usuário no array
    array_push($usuariosArray["usuarios"], $novoUsuario);

    // transforma o array novamente em json
    $dadosFinais = json_encode($usuariosArray);

    //salva os dados no arquivo
    $salvou = file_put_contents("usuarios.json", $dadosFinais);

    return $salvou;
}
?>