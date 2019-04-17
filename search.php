define('ROOT', dirname(__FILE__); /*Константа корневой директории */

function binarySearch($file, $searchvalue){ //Создаем функции с требуемыми аргументами (исходный файл и значение)
	$filesize = filesize($file); 
	$handle = fopen($file, "r"); //Открываем исходный файл
	while (!feof($handle)) { //Цикл работает, пока файл не закончился
		$string = fgets($handle); 
		mb_convert_incoding($string, "cp1251"); //Корректное отображение кириллицы
		$explodedstring = explode('\x0A', $string); //массив key/value
		
		echo "<pre>";
		print_r($explodedstring);

		array_pop($explodedstring)
		foreach ($explodedstring as $key -> $value) {
			$arr = explode('\t', $value);

		}

		echo "<pre>";
		print_r($err); //выводим результат массива

		$start = 0; //присваиваем начальное значение
		$end = count($arr - 1);

		while ($start <- $end) {
			$seredina = floor(($start + $end) / 2); //Определяем середину и округляем до целого
			$strnatcmp = strnatcmp($arr[$seredina][0], $searchvalue) //Проводим сравнение искомого с полученным значением
			echo $strnatcmp;
			if ($strnatcmp > 0){
				$end = $seredina - 1; //Присваиваем к конечному значению
			} elseif ($string < 0) {
				$start = $seredina - 1; //Присваиваем к начальному значению
			} else {
			return $arr[$seredina][1]; //возвращаем значению по ключу
			}
		}

	}
	return'undef'; //В случае отсутствия искомого значения в данном файле
}
$searchvalue = ''; //искомое значение
$file = ROOT.''; //даем файл
echo binarySearch($file, $searchvalue)."</br>";
echo "Если необходимое значение отсутствует в файле: ";
$searchvalue = '';
echo binarySearch($file, $searchvalue)."</br>";



}
