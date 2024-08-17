<?php
namespace NepheliaShop\RandomOre;

use pocketmine\event\block\BlockBreakEvent;
use pocketmine\event\Listener;
use pocketmine\plugin\PluginBase;
use NepheliaShop\RandomOre\Config as RandomOreConfig;

class Main extends PluginBase implements Listener {
    use RandomOreHelper;

    private RandomOreConfig $rdmOreConfig;

    protected function onLoad(): void
    {
        $this->saveDefaultConfig();
        $this->rdmOreConfig = new RandomOreConfig($this->getConfig());
    }

    protected function onEnable(): void
    {
        $this->getServer()->getPluginManager()->registerEvents($this, $this);
    }

    public function onBreak(BlockBreakEvent $event) : void{
        $block = $event->getBlock();

        if($block->getName() === $this->rdmOreConfig->block->getName()){
            $event->setDrops([$this->getRandomDrop()]);
        }

    }

}