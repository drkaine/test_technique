<?php

declare(strict_types = 1);

namespace App\Models;

use Carbon\Carbon;

abstract class Evenement
{
	public function __construct(
		protected Carbon $date,
		protected string $intitule,
		protected string $lieu,
		protected int $tarif,
	) {
	}
}
