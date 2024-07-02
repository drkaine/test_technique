<?php

declare(strict_types = 1);

namespace App\Models;

use App\Interfaces\EvenementInterface;
use Carbon\Carbon;

class Culturel extends Evenement implements EvenementInterface
{
	public function __construct(
		private int $places,
		private Carbon $date,
		private string $intitule,
		private string $lieu,
		private int $tarif,
	) {
		parent::__construct(
			$date,
			$intitule,
			$lieu,
			$tarif,
		);
	}

	public function getInformation(): string
	{
		return $this->intitule . ' le ' . $this->date . ' à ' . $this->lieu . ' (' . $this->places . ' places disponibles) : ' . $this->tarif;
	}
}
