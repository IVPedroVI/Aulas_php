<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
        class Usuario {
            public $nome;
            protected $cpf;
            private $endereco;
        
            // Construtor da classe Usuario
            function __construct() {
                $this->preparaUsuario();
            }
        
            private function preparaUsuario() {
                $this->nome = "Leonardo";
                $this->cpf = "99999999999";
                $this->endereco = "Rua Fulano de Tal número 0";
            }
        
            public function getCpf() {
                return $this->cpf;
            }
        
            public function getNome() {
                return $this->nome;
            }
        
            public function getEndereco() {
                return $this->endereco;
            }
        }
        
        // Criando uma instância da classe Usuario
        $usu = new Usuario();
        
        // Exemplo de uso dos métodos da classe Usuario
        echo "Nome: " . $usu->getNome() . "<br>";
        echo "CPF: " . $usu->getCpf() . "<br>";
        echo "Endereço: " . $usu->getEndereco() . "<br>";
    ?>
</body>
</html>
