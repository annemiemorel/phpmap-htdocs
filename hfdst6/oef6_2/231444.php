<h2>Oplossing</h2>

Zowel logicalaag (voor het normaal sorteren van klein naar groot) als de presentatielaag (voor het horizontaal i.p.v. verticaal afdrukken) moeten aangepast worden.

Logicalaag:

<pre>

&lt;?php
class GetallenReeksMaker {
	public function getReeks() {
		$tab = array();
		for ($i=0; $i&lt;10; $i++) {
			array_push($tab, rand(1, 100));
		}
		sort($tab);
		return $tab;
	}
}

</pre>

Presentatielaag:

<pre>

&lt;?php
require_once("getallenreeksmaker.php");
?&gt;
&lt;!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" 
"http://www.w3.org/TR/html4/loose.dtd"&gt;
&lt;html&gt;
	&lt;head&gt;&lt;title&gt;Getallenreeks&lt;/title&gt;&lt;/head&gt;
	&lt;body&gt;
		&lt;?php
		$getReeks = new GetallenReeksMaker();
		$tabel = $getReeks-&gt;getReeks();
		?&gt;
		&lt;table border="1"&gt;
			&lt;tbody&gt;
				&lt;tr&gt;
				&lt;?php
				foreach ($tabel as $getal) {
					?&gt;
					&lt;td&gt;
						&lt;?php print($getal);?&gt;
					&lt;/td&gt;
					&lt;?php
				}
				?&gt;
				&lt;/tr&gt;
			&lt;/tbody&gt;
		&lt;/table&gt;
	&lt;/body&gt;
&lt;/html&gt;

</pre>