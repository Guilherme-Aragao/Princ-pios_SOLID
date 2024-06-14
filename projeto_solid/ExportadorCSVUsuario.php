/*
* Curso de Engenharia de Software - UniEVANGÉLICA 
* Disciplina de Programação Web 
* Dev: Guilherme Aragão Silva
* DATA: 13/06/2024
*/
<?php
class ExportadorCSVUsuario implements ExportadorCSVInterface {
    public function exportar(array $usuarios) {
        $csv = "id,nome,email\n";
        foreach ($usuarios as $usuario) {
            $csv .= "{$usuario->id},{$usuario->nome},{$usuario->email}\n";
        }
        file_put_contents('usuarios.csv', $csv);
    }
}
?>