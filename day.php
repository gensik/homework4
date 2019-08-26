<?php
$mass = [
    'ru' =>['Пн', 'Вт', 'Ср', 'Чт', 'Пт', 'Сб', 'ВС' ],
    'en' =>[ 'Mo', 'Tu', 'We', 'Thu', 'Fri', 'Sat', 'Sun']
];
echo $mass[$_GET['lang']][$_GET['day']];
