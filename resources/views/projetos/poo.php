//POO = Programação orientada a objetos
<?php

    // ENCAPSULAMENTO
    // Proteger informações para que não sejam alteradas de qualquer jeito
    // HERANÇA
    // Criar uma classe nova aproveitando caracterÃ­sticas de outra
    // POLIFORMISMO
    // Permitir que objetos diferentes respondam a mesma ação de maneiras diferentes
    // ABSTRAÇÃO
    // Mostrar o que é necessário e esconder detalhes complicados de funcionamento

    // Exemplo com POO
    class Personagem {
        public $nome;
        private $vida = 0;
        public $dano;

        public function __construct($nome, $vida, $dano) {
            $this->nome = $nome;
            $this->setVida($vida);
            $this->dano = $dano;
        }

        //GETTER
        public function getVida() {
            return $this->vida;
        }

        //SETTER
        public function setVida($vida) {
            if ($vida < 0) {
                echo "A vida não pode ser negativa!\n";
                return;
            }
        }

        public function atacar () {
            echo "$this->nome realizou um ataque!";
        }
    }

    $luiz = new Personagem("Luiz", 100, 10);

    $luiz->setVida(50);

    $aurora = new Personagem("Aurora", 50, 5);
    $chloe = new Personagem("Chloe", 30, 3);

    $luiz->atacar(); //método próprio

    class Guerreiro extends Personagem {
        // Sobrescrevendo o método da classe pai
        public function atacar() {
            echo "$this->nome atacou com uma espada!\n";
        }

        public function defender() {
            echo "$this->nome levantou o escudo!";
        }
    }  

    class Mago extends Personagem {
        // Sobrescrevendo o método da classe pai
        public function atacar() {
            echo "$this->nome lançou uma bola de fogo!\n";
        }
    }

    $guerreiro = new Guerreiro("Luiz", 100, 10);
    $mago = new Mago("Aurora", 50, 5);
    $personagem = new Personagem("Chloe", 30,3);

    //1. O que é uma classe?
    //Um molde para criar objetos

    //2. O que significa new Personagem()?
    //Criar um objeto da classe Personagem

    //3. Para que serve $this->nome?
    //Acessar o nome do objeto atual

    //4. O que significa extends?
    //Herdar caracterí­sticas e métodos de outra classe
?>
