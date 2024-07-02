<?php

declare(strict_types = 1);

namespace App\Models;

class Catalogue
{
	public function __construct(
		private array $listEvenement,
	) {

	}

	public function getAllEvenements(): void
	{
	}
}
