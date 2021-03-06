<?php

/*
 *
 *  ____            _        _   __  __ _                  __  __ ____
 * |  _ \ ___   ___| | _____| |_|  \/  (_)_ __   ___      |  \/  |  _ \
 * | |_) / _ \ / __| |/ / _ \ __| |\/| | | '_ \ / _ \_____| |\/| | |_) |
 * |  __/ (_) | (__|   <  __/ |_| |  | | | | | |  __/_____| |  | |  __/
 * |_|   \___/ \___|_|\_\___|\__|_|  |_|_|_| |_|\___|     |_|  |_|_|
 *
 * This program is free software: you can redistribute it and/or modify
 * it under the terms of the GNU Lesser General Public License as published by
 * the Free Software Foundation, either version 3 of the License, or
 * (at your option) any later version.
 *
 * @author PocketMine Team
 * @link http://www.pocketmine.net/
 *
 *
*/

declare(strict_types=1);

namespace pocketmine\item;

class ArmorTypeInfo{

	/** @var int */
	private $defensePoints;
	/** @var int */
	private $maxDurability;
	/** @var int */
	private $armorSlot;

	public function __construct(int $defensePoints, int $maxDurability, int $armorSlot){
		$this->defensePoints = $defensePoints;
		$this->maxDurability = $maxDurability;
		$this->armorSlot = $armorSlot;
	}

	/**
	 * @return int
	 */
	public function getDefensePoints() : int{
		return $this->defensePoints;
	}

	/**
	 * @return int
	 */
	public function getMaxDurability() : int{
		return $this->maxDurability;
	}

	/**
	 * @return int
	 */
	public function getArmorSlot() : int{
		return $this->armorSlot;
	}
}
