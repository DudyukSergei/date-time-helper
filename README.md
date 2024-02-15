# Хелпер для работы с DateTime

Упрощает работу с объектом DateTime

## Требования

- PHP 8.3

## Установка

composer require dudyuk-sergei/date-time-helper

## Использование
```
<?php

$dateTime = new \DateTime('2024-12-02 13:01:53');
$dateTimeHelper = new DateTimeHelper($dateTime);
echo $dateTimeHelper->getDate()' // 12
echo $dateTimeHelper->getMonth()' // 2
echo $dateTimeHelper->getYear()' // 2024
echo $dateTimeHelper->getHour()' // 13
echo $dateTimeHelper->getMinutes()' // 01
echo $dateTimeHelper->getSeconds()' // 53
```