<?php
namespace NepheliaShop\RandomOre;

use pocketmine\block\Block;
use pocketmine\item\StringToItemParser;
use pocketmine\item\VanillaItems;
use pocketmine\utils\Config as PmmpConfig;

/**
 * @property-read Block $block
 * @property-read array $drops
 */
final class Config {

    private array $config;

    public function __construct(PmmpConfig $config)
    {
        $this->config = [
            'block' => (StringToItemParser::getInstance()->parse((string)$config->get('block', 'end_stone')) ?? VanillaItems::AIR())->getBlock(),
            'drops' => (array)$config->get('drops', [])
        ];
    }

    public function __get(string $name)
    {
        return $this->config[$name];
    }

}