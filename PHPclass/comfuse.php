<?php
trait Game{
    function play(){
        echo 'Playing a game';
    }
}
trait Music{
    function play(){
        echo 'playing music';
    }
}
class Player{
    use Game,Music{
        Game::play as gameplay;
        Music::play insteadof Game;
    }
}
$player = new Player();
$player->play();
$player->gamePlay();
?>