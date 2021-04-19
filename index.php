<html>
<head>
	<title>Wuerfeln mit Armin</title>
</head>

<body>
	<img src="img/header.jpg" title="W&uuml;rfeln mit Armin" style="width: 750px;">
	<?php
		$options = Array(
			Array('ein', 'zwei', 'drei', 'vier', 'fünf', 'sechs'), // '-' am Ende
			Array('tägige', 'wöchige', 'monatige', 'fache', 'malige', 'hebige'), // '/n' am Ende
			Array('harte', 'softe', 'optionale', 'intransparente', 'alternativlose', 'unumkehrbare'), // '/n' am Ende
			Array('Wellenbrecher', 'Brücken', 'Treppen', 'Wende', 'Impf', 'Ehren'), // '-' am Ende
			Array('Lockdown', 'Stopp', 'Maßnahme', 'Kampagne', 'Sprint', 'Matrix'),
			Array('zum Sommer', 'auf Weiteres', 'zur Bundestagswahl', '2030', 'nach den Abiturprüfungen', 'in die Puppen'),
			Array('sofortigen', 'nachhaltigen', 'allmählichen', 'unausweichlichen', 'wirtschaftsschonenenden', 'willkürlichen'),
			Array('Senkung', 'Steigerung', 'Beendigung', 'Halbierung', 'Vernichtung', 'Beschönigung'),
			Array('Infektionszahlen', 'privaten Treffen', 'Wirtschaftsleistung', 'Wahlprognosen', 'dritten Welle', 'Bundeskanzlerin') // '.' am Ende
		);

		$dices = Array(
			rand(0, 5), rand(0, 5), rand(0, 5), rand(0, 5), rand(0, 5), rand(0, 5), rand(0, 5), rand(0, 5), rand(0, 5)
		);

		$wordEnd = Array(
			'-', '/n ', '/n ', '-', ' bis ', ' zur ', ' ', ' der ', '.'
		);
	?>

	<p>
		&nbsp;
	</p>

	<p style="font-family: Arial; font-size: 30px; width: 750px;">
		<?php
			print('Was wir <i>jetzt</i> brauchen, ist ein/e '.'<br /><br /><b>');
			for ($i = 0; $i <= 8; $i++) {
				print($options[$i][$dices[$i]] . $wordEnd[$i]);
			}
			print('</b>');
		?>
	</p>

	<p>
		&nbsp;
	</p>
	<button onClick="javascript:window.location.href='.';" style="font-size: 30px;">Nochmal w&uuml;rfeln!</button>
	<p>
		&nbsp;
	</p>
	<p>
		&nbsp;
	</p>
	<p>
		&nbsp;
	</p>
	<p style="font-family: Arial; font-size: 18px; width: 750px;">
		Idee: <br />
		<img src="img/idee.jpg" title="Idee" style="width: 750px;">
	</p>
</body>

</html>