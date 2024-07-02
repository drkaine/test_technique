<?php

declare(strict_types = 1);

namespace App\Models;

use App\Enums\NiveauTypeEnum;
use App\Interfaces\EvenementInterface;
use Carbon\Carbon;

class sportif extends Evenement implements EvenementInterface
{
	public function __construct(
		private NiveauTypeEnum $niveau,
		private Carbon $date,
		private string $intitule,
		private string $lieu,
		private int $tarif,
	) {
		parent::__construct(
			$this->date,
			$this->intitule,
			$this->lieu,
			$this->tarif,
		);
	}

	public function getInformation(): string
	{
		return $this->intitule . ' le ' . $this->date . ' à ' . $this->lieu . ' - ' . $this->niveau->value . ' : ' . $this->tarif;
	}
}
