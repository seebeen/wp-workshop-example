<?php

class TestnaKlasa
{

    private $privatna;

    public $javna;

    public static $staticko = 22;

    public function __construct(int $broj)
    {
        $this->javna = $broj;
    }

    public function funkcija()
    {

        wp_die($this->privatna . $this->javna);

    }

    public function getStaticko()
    {
        return self::$staticko;
    }


}

class SingletonKlasa
{

    private static $instance = null;

    private $privatna;

    private function __construct()
    {
        $this->privatna = 222;
    }

    public static function getInstance()
    {
        return (self::$instance == null)
            ? self::$instance = new self()
            : self::$instance;
    }

    public function getPrivatna()
    {
        return $this->privatna;
    }

}

$d = new TestnaKlasa(88);

echo $d->javna;
echo '<br>';




$d = SingletonKlasa::getInstance();

echo $d->getPrivatna();
echo '<br>';