<?php
namespace NepheliaShop\RandomOre;

use pocketmine\item\Item;
use pocketmine\item\StringToItemParser;
use pocketmine\item\VanillaItems;

trait RandomOreHelper {

    public function getRandomDrop() : Item
    {
        $drops = $this->rdmOreConfig->drops;
        $random = mt_rand(0, 100);
        $currentChance = 0;

        foreach ($drops as $drop) {
            $item = $drop['item'] ?? 'air';
            $chance = $drop['chance'] ?? 0;
            $count = $drop['count'] ?? 1;

            $currentChance += (int)$chance;

            if ($random <= $currentChance) {
                return (StringToItemParser::getInstance()->parse((string)$item) ?? VanillaItems::AIR())->setCount((int)$count);
            }
        }

        return VanillaItems::AIR();
    }

}