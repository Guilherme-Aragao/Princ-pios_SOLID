/*
* Curso de Engenharia de Software - UniEVANGÉLICA 
* Disciplina de Programação Web 
* Dev: Guilherme Aragão Silva
* DATA: 13/06/2024
*/
<?php
class ServicoUsuario {
    private $repositorioUsuario;
    private $servicoEmail;
    private $exportadorCSV;

    public function __construct(RepositorioUsuarioInterface $repositorioUsuario, ServicoEmailInterface $servicoEmail, ExportadorCSVInterface $exportadorCSV) {
        $this->repositorioUsuario = $repositorioUsuario;
        $this->servicoEmail = $servicoEmail;
        $this->exportadorCSV = $exportadorCSV;
    }

    public function registrarUsuario(Usuario $usuario) {
        $this->repositorioUsuario->salvar($usuario);
        $this->servicoEmail->enviarEmailBoasVindas($usuario);
    }

    public function exportarUsuarios() {
        $usuarios = $this->repositorioUsuario->obterTodosUsuarios();
        $this->exportadorCSV->exportar($usuarios);
    }
}
?>