<?php
namespace MoreFilter\Player;

use pocketmine\event\player\PlayerEvent;
use pocketmine\Player;
use StandardExtensions\Awaitable\Listen\ListenAwaitable;
use StandardExtensions\Awaitable\Listen\ListenAwaitableInterface;

ListenAwaitable::registerMethod('filter_player', function(Player $player) : ListenAwaitableInterface
{
    return $this->filter(function($ev) use ($player){
        return $ev instanceof PlayerEvent && $ev->getPlayer() === $player;
    });
});