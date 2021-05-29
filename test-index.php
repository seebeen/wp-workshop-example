<?php

$ddd = &SingletonKlasa::getInstance();

echo $ddd->getPrivatna();

echo '<br>';

$cc = new TestnaKlasa(222222);

echo $cc->javna;