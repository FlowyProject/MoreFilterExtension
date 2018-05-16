<?php
namespace StandardExtensions\Awaitable\Listen;

use pocketmine\Player;

/**
 * for IDE
 */
interface ListenAwaitableInterface{
    public function filter_player(Player $player) : ListenAwaitableInterface;
}