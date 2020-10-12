<?php
//1st task
	$i = 0;
	while($i <= 100) {
		if($i % 3 == 0) {
			echo "$i<br/>";
		}
		$i++;
	}
	
//2nd task
	echo "<hr/>";
	$i = 0;
	do {
		if($i == 0) {
			echo "$i - ноль.<br/>";
		} else if($i % 2 == 0) {
			echo "$i - четное число.<br/>";
		} else {
			echo "$i - нечетное число.<br/>";
		}
		$i++;
	} while($i <= 10);
	
	
//3rd task
	echo "<hr/>";
	$regions = ['Хабаровский край' => ['Хабаровск', 'Комсомольск-на-Амуре', 'Амурск'],
		'Московская область' => ['Москва', 'Зеленоград', 'Клин','Королев'],
		'Ленинградская область' => ['Санкт-Петербург', 'Всеволжск', 'Павловск', 'Кронштадт']];
	foreach($regions as $region => $cities) {
		$str = implode(', ', $cities).".";
		echo "$region:<br/>$str<br/>";
	}
	
//4th task
	echo "<hr/>";
	
	function translit($str) {
		$converter = [
			'а' => 'a',   'б' => 'b',   'в' => 'v',
			'г' => 'g',   'д' => 'd',   'е' => 'e',
			'ё' => 'e',   'ж' => 'zh',  'з' => 'z',
			'и' => 'i',   'й' => 'y',   'к' => 'k',
			'л' => 'l',   'м' => 'm',   'н' => 'n',
			'о' => 'o',   'п' => 'p',   'р' => 'r',
			'с' => 's',   'т' => 't',   'у' => 'u',
			'ф' => 'f',   'х' => 'h',   'ц' => 'c',
			'ч' => 'ch',  'ш' => 'sh',  'щ' => 'sch',
			'ь' => '\'',  'ы' => 'y',   'ъ' => '\'',
			'э' => 'e',   'ю' => 'yu',  'я' => 'ya'];
		return strtr(mb_strtolower($str), $converter);	
	}
	
	echo translit("Смагулов Ермек");
	
//5th task
	echo "<hr/>";
	
	function replaceSpacesWithUnderscore($str) {
		return str_replace(" ", "_", $str);
	}
	
	echo replaceSpacesWithUnderscore("Смагулов Ермек");
	
//6th task
	echo "<hr/>";
	$menu = ['Курсы' => ['Программирование' => 'https://geekbrains.ru/courses/14', 'Web-дизайн' => 'https://geekbrains.ru/courses/484'],
		'Вебинары' => ['Создание сайта за час' => 'https://geekbrains.ru/events/741', 'Создание игры на Android' => 'https://geekbrains.ru/events/682'],
		'Форум' => 'https://geekbrains.ru/topics'];
	$str = "<ul>";
	foreach($menu as $item => $subitem) {
		if(is_array($subitem)) {
			$str .= "<li>$item</li><ul>";
			foreach($subitem as $iitem => $ssubitem) {
				$str .= "<a href=$ssubitem><li>$iitem</li></a>";
			}
			$str .= "</ul>";
		} else {
			$str .= "<a href=$subitem><li>$item</li></a>";
		}
	}
	$str .= "</ul>";
	echo $str;
	
?>
