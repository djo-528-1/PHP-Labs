<?php
// Код для всех страниц - вывод информации о посещенных страницах
	echo '<h3>Список посещённых страниц:</h3>' . '<br>';
	if (isset($_SESSION['visitedPages']))
	{
		foreach ($_SESSION['visitedPages'] as $elem)
		{
			echo $elem . '<br>';
		}
	}
?>