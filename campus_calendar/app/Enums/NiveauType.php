<?php

declare(strict_types = 1);

namespace App\Enums;

enum NiveauTypeEnum: string
{
	case CONFIRMED = 'Confirmé uniquement';
	case ALL = 'Tous niveaux acceptés';
	case DEBUTANT = 'Débutant uniquement';
}
