/*
* Curso de Engenharia de Software - UniEVANGÉLICA 
* Disciplina de Programação Web 
* Dev: Guilherme Aragão Silva
* DATA: 13/06/2024
*/
<?php
// Uso
require 'Usuario.php';
require 'RepositorioUsuarioInterface.php';
require 'RepositorioUsuario.php';
require 'ServicoEmailInterface.php';
require 'ServicoEmail.php';
require 'ExportadorCSVInterface.php';
require 'ExportadorCSVUsuario.php';
require 'ServicoUsuario.php';

$usuario = new Usuario(1, 'John Doe', 'john@example.com', 'secret');
$repositorioUsuario = new RepositorioUsuario();
$servicoEmail = new ServicoEmail();
$exportadorCSV = new ExportadorCSVUsuario();
$servicoUsuario = new ServicoUsuario($repositorioUsuario, $servicoEmail, $exportadorCSV);

$servicoUsuario->registrarUsuario($usuario);
$servicoUsuario->exportarUsuarios();
?>
