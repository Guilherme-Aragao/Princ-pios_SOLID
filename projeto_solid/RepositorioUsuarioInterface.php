/*
* Curso de Engenharia de Software - UniEVANGÉLICA 
* Disciplina de Programação Web 
* Dev: Guilherme Aragão Silva
* DATA: 13/06/2024
*/
<?php
interface RepositorioUsuarioInterface {
    public function salvar(Usuario $usuario);
    public function obterTodosUsuarios();
}
?>