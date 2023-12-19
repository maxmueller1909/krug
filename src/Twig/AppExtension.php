<?php
namespace App\Twig;

use Twig\Extension\AbstractExtension;
use Twig\TwigFilter;

class AppExtension extends AbstractExtension
{
    public function getFilters(): array
    {
        return [
            new TwigFilter('opening', [$this, 'openTimeTableFilter']),
        ];
    }

    public function openTimeTableFilter($weekday)
    {

        $datetime = date('H:i');

        switch ($weekday) {
            case 1:
                $status = (($datetime > '08:00' && $datetime < '17:00') ? true : false);
                break;
            case 3:
                $status = (($datetime > '08:00' && $datetime < '17:00') ? true : false);
                break;
            case 5:
                $status = (($datetime > '08:00' && $datetime < '13:00') ? true : false);
                break;
			default:
                $status = false;
        }

        if($status == true)
            return 'Wir haben geöffnet';
        else
            return 'Wir sind erreichbar';
    }
}
