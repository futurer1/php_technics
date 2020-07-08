<?php
$checkDate = new DateTime('2020-07-08'); // Проверяемая дата, которую хотим сравнить.
$startDate = new DateTime('2020-06-01'); // Дата отсчета. Начало какой-то акции, включение алгоритма в работу и т.д.
$diff = $startDate->diff($checkDate);
if (stristr($diff->format('%R'), '+')) { // Проверяемая дата позже даты отсчета

}
