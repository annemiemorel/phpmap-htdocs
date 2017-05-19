<h2>Oplossing</h2>

<pre>

&lt;?php
class Persoon {
	private $familienaam;
	private $voornaam;
	
	public function getVollNaam() {
		return $this-&gt;familienaam  . ", " . $this-&gt;voornaam;
	}
	
	public function setFamilienaam($familienaam) {
		$this-&gt;familienaam = $familienaam;
	}
	
	public function setVoornaam($voornaam) {
		$this-&gt;voornaam = $voornaam;
	}
}

class Cursist extends Persoon {
	private $aantalCursussen;
	
	public function __construct($familienaam, $voornaam, $aantalCursussen) {
		parent::setFamilienaam($familienaam);
		parent::setVoornaam($voornaam);
		$this-&gt;aantalCursussen = $aantalCursussen;
	}
	
	public function getAantalCursussen() {
		return $this-&gt;aantalCursussen;
	}
	
	public function setAantalCursussen($aantalCursussen) {
		$this-&gt;aantalCursussen = $aantalCursussen;
	}
}

class Medewerker extends Persoon {
	private $aantalCursisten;
	
	public function __construct($familienaam, $voornaam, $aantalCursisten) {
		parent::setFamilienaam($familienaam);
		parent::setVoornaam($voornaam);
		$this-&gt;aantalCursisten = $aantalCursisten;
	}
	
	public function getAantalCursisten() {
		return $this-&gt;aantalCursisten;
	}
	
	public function setAantalCursisten($aantalCursisten) {
		$this-&gt;aantalCursisten = $aantalCursisten;
	}
}
?&gt;
&lt;?php
	$cursist = new Cursist("Peeters", "Jan", 3);
	$medewerker = new Medewerker("Janssens", "Tom", 8);
?&gt;
&lt;!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
"http://www.w3.org/TR/html4/loose.dtd"&gt;
&lt;html&gt;
	&lt;head&gt;&lt;title&gt;Cursisten en medewerkers&lt;/title&gt;&lt;/head&gt;
	&lt;body&gt;
		&lt;h1&gt;Namen&lt;/h1&gt;
		&lt;ul&gt;
			&lt;li&gt;&lt;?php print($cursist-&gt;getVollNaam() . " volgt " . 
			$cursist-&gt;getAantalCursussen() . " cursus(sen)");?&gt;&lt;/li&gt;
			&lt;li&gt;&lt;?php print($medewerker-&gt;getVollNaam() . " begeleidt " .
			$medewerker-&gt;getAantalCursisten() . " cursist(en)");?&gt;&lt;/li&gt;
		&lt;/ul&gt;
	&lt;/body&gt;
&lt;/html&gt;

</pre>