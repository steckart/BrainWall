<!-- HTML ====================================================================================================== -->

<!DOCTYPE html>
<html lang="de">

	<head>
		<meta charset="UTF-8">
		<title>BrainWall - AGB & DSGVO</title>
		<meta name="viewport" content="width=device-width, initial-scale=1.0" />
		<meta name="expires" content="0">
		<link rel="stylesheet" type="text/css" href="css/style2.css">
		<link rel="stylesheet" text="text/css" href="fontawesome/css/all.min.css">
		<link rel="stylesheet" text="text/css" href="css/styleNav.css">
		<link rel="stylesheet" text="text/css" href="css/styleForm.css">
		<link rel="stylesheet" type="text/css" href="css/styles_home.css">
		<link rel="stylesheet" type="text/css" href="css/userMenu.css">
		<script src="js/script.js"></script>
	</head>
	
	<body>
		
<?php

// SESSION-START ===============================================================================================

	session_start();
	
	if( !isset($_COOKIE['Remember']) ) {
		require('navtop.php');	
	}
	else {
		require('navtop_backend.php');
	}
?>
		
<!-- INCLUDING: FOOTER-NAVIGATION =========================================== -->

		<?php require('navfooter.php'); ?>	
		
<!-- INDEX-MAIN CONTENT  ======================================================================================== -->
		
		<main id="index-main">
			<div class="divMainThread">

    <header>
      <h1>AGB & DSGVO</h1>
    </header>

     <h2>Datenschutzerklärung</h2>
				<p>Personenbezogene Daten (nachfolgend zumeist nur „Daten“ genannt) werden von uns nur im Rahmen der Erforderlichkeit sowie zum Zwecke der Bereitstellung eines funktionsfähigen und nutzerfreundlichen Internetauftritts, inklusive seiner Inhalte und der dort angebotenen Leistungen, verarbeitet.</p>
				<p>Gemäß Art. 4 Ziffer 1. der Verordnung (EU) 2016/679, also der Datenschutz-Grundverordnung (nachfolgend nur „DSGVO“ genannt), gilt als „Verarbeitung“ jeder mit oder ohne Hilfe automatisierter Verfahren ausgeführter Vorgang oder jede solche Vorgangsreihe im Zusammenhang mit personenbezogenen Daten, wie das Erheben, das Erfassen, die Organisation, das Ordnen, die Speicherung, die Anpassung oder Veränderung, das Auslesen, das Abfragen, die Verwendung, die Offenlegung durch Übermittlung, Verbreitung oder eine andere Form der Bereitstellung, den Abgleich oder die Verknüpfung, die Einschränkung, das Löschen oder die Vernichtung.</p>
				<p>Mit der nachfolgenden Datenschutzerklärung informieren wir Sie insbesondere über Art, Umfang, Zweck, Dauer und Rechtsgrundlage der Verarbeitung personenbezogener Daten, soweit wir entweder allein oder gemeinsam mit anderen über die Zwecke und Mittel der Verarbeitung entscheiden. Zudem informieren wir Sie nachfolgend über die von uns zu Optimierungszwecken sowie zur Steigerung der Nutzungsqualität eingesetzten Fremdkomponenten, soweit hierdurch Dritte Daten in wiederum eigener Verantwortung verarbeiten.</p>
				<p>Unsere Datenschutzerklärung ist wie folgt gegliedert:</p>
				<p>I. Informationen über uns als Verantwortliche<br>II. Rechte der Nutzer und Betroffenen<br>III. Informationen zur Datenverarbeitung</p>
				<h3>I. Informationen über uns als Verantwortliche</h3>
				<p>Verantwortlicher Anbieter dieses Internetauftritts im datenschutzrechtlichen Sinne ist:</p>
				<p><span style="color: #ff0000;">Musterfirma/Musterunternehmer<br>Musterstraße 1<br>12345 Musterstadt<br>Deutschland</span></p>
				<p><span style="color: #ff0000;">Telefon: Telefonnummer<br>Telefax: Faxnummer<br>E-Mail: muster@mustermail.xy</span></p>
				<p>Datenschutzbeauftragte/r beim Anbieter ist:</p>
				<p><span style="color: #ff0000;">Maxie Musterfrau&nbsp;</span></p>
				<p><span style="color: #ff0000;">[nachfolgende Angaben sind zu ergänzen, sofern ein Externer Datenschutzbeauftragter bestellt ist]</span></p>
				<p><span style="color: #ff0000;">Musterstraße 1<br>12345 Musterstadt<br>Deutschland</span></p>
				<p><span style="color: #ff0000;">Telefon: Telefonnummer<br>Telefax: Faxnummer<br>E-Mail: datenschutz@mustermail.xy</span></p>
				<h3>II. Rechte der Nutzer und Betroffenen</h3>
				<p>Mit Blick auf die nachfolgend noch näher beschriebene Datenverarbeitung haben die Nutzer und Betroffenen das Recht</p>
				<ul>
				<li>auf Bestätigung, ob sie betreffende Daten verarbeitet werden, auf Auskunft über die verarbeiteten Daten, auf weitere Informationen über die Datenverarbeitung sowie auf Kopien der Daten (vgl. auch Art. 15 DSGVO);</li>
				<li>auf Berichtigung oder Vervollständigung unrichtiger bzw. unvollständiger Daten (vgl. auch Art. 16 DSGVO);</li>
				<li>auf unverzügliche Löschung der sie betreffenden Daten (vgl. auch Art. 17 DSGVO), oder, alternativ, soweit eine weitere Verarbeitung gemäß Art. 17 Abs. 3 DSGVO erforderlich ist, auf Einschränkung der Verarbeitung nach Maßgabe von Art. 18 DSGVO;</li>
				<li>auf Erhalt der sie betreffenden und von ihnen bereitgestellten Daten und auf Übermittlung dieser Daten an andere Anbieter/Verantwortliche (vgl. auch Art. 20 DSGVO);</li>
				<li>auf Beschwerde gegenüber der Aufsichtsbehörde, sofern sie der Ansicht sind, dass die sie betreffenden Daten durch den Anbieter unter Verstoß gegen datenschutzrechtliche Bestimmungen verarbeitet werden (vgl. auch Art. 77 DSGVO).</li>
				</ul>
				<p>Darüber hinaus ist der Anbieter dazu verpflichtet, alle Empfänger, denen gegenüber Daten durch den Anbieter offengelegt worden sind, über jedwede Berichtigung oder Löschung von Daten oder die Einschränkung der Verarbeitung, die aufgrund der Artikel 16, 17 Abs. 1, 18 DSGVO erfolgt, zu unterrichten. Diese Verpflichtung besteht jedoch nicht, soweit diese Mitteilung unmöglich oder mit einem unverhältnismäßigen Aufwand verbunden ist. Unbeschadet dessen hat der Nutzer ein Recht auf Auskunft über diese Empfänger.</p>
				<p><strong>Ebenfalls haben die Nutzer und Betroffenen nach Art. 21 DSGVO das Recht auf Widerspruch gegen die künftige Verarbeitung der sie betreffenden Daten, sofern die Daten durch den Anbieter nach Maßgabe von Art. 6 Abs. 1 lit. f) DSGVO verarbeitet werden. Insbesondere ist ein Widerspruch gegen die Datenverarbeitung zum Zwecke der Direktwerbung statthaft.</strong></p>
				<h3>III. Informationen zur Datenverarbeitung</h3>
				<p>Ihre bei Nutzung unseres Internetauftritts verarbeiteten Daten werden gelöscht oder gesperrt, sobald der Zweck der Speicherung entfällt, der Löschung der Daten keine gesetzlichen Aufbewahrungspflichten entgegenstehen und nachfolgend keine anderslautenden Angaben zu einzelnen Verarbeitungsverfahren gemacht werden.</p>

				<h4>Serverdaten</h4>
				<p>Aus technischen Gründen, insbesondere zur Gewährleistung eines sicheren und stabilen Internetauftritts, werden Daten durch Ihren Internet-Browser an uns bzw. an unseren Webspace-Provider übermittelt. Mit diesen sog. Server-Logfiles werden u.a. Typ und Version Ihres Internetbrowsers, das Betriebssystem, die Website, von der aus Sie auf unseren Internetauftritt gewechselt haben (Referrer URL), die Website(s) unseres Internetauftritts, die Sie besuchen, Datum und Uhrzeit des jeweiligen Zugriffs sowie die IP-Adresse des Internetanschlusses, von dem aus die Nutzung unseres Internetauftritts erfolgt, erhoben.</p>
				<p>Diese so erhobenen Daten werden vorrübergehend gespeichert, dies jedoch nicht gemeinsam mit anderen Daten von Ihnen.</p>
				<p>Diese Speicherung erfolgt auf der Rechtsgrundlage von Art. 6 Abs. 1 lit. f) DSGVO. Unser berechtigtes Interesse liegt in der Verbesserung, Stabilität, Funktionalität und Sicherheit unseres Internetauftritts.</p>
				<p>Die Daten werden spätestens nach sieben Tage wieder gelöscht, soweit keine weitere Aufbewahrung zu Beweiszwecken erforderlich ist. Andernfalls sind die Daten bis zur endgültigen Klärung eines Vorfalls ganz oder teilweise von der Löschung ausgenommen.</p>

				<h4>Cookies</h4>
				<h5>a) Sitzungs-Cookies/Session-Cookies</h5>
				<p>Wir verwenden mit unserem Internetauftritt sog. Cookies. Cookies sind kleine Textdateien oder andere Speichertechnologien, die durch den von Ihnen eingesetzten Internet-Browser auf Ihrem Endgerät ablegt und gespeichert werden. Durch diese Cookies werden im individuellen Umfang bestimmte Informationen von Ihnen, wie beispielsweise Ihre Browser- oder Standortdaten oder Ihre IP-Adresse, verarbeitet. &nbsp;</p>
				<p>Durch diese Verarbeitung wird unser Internetauftritt benutzerfreundlicher, effektiver und sicherer, da die Verarbeitung bspw. die Wiedergabe unseres Internetauftritts in unterschiedlichen Sprachen oder das Angebot einer Warenkorbfunktion ermöglicht.</p>
				<p>Rechtsgrundlage dieser Verarbeitung ist Art. 6 Abs. 1 lit b.) DSGVO, sofern diese Cookies Daten zur Vertragsanbahnung oder Vertragsabwicklung verarbeitet werden.</p>
				<p>Falls die Verarbeitung nicht der Vertragsanbahnung oder Vertragsabwicklung dient, liegt unser berechtigtes Interesse in der Verbesserung der Funktionalität unseres Internetauftritts. Rechtsgrundlage ist in dann Art. 6 Abs. 1 lit. f) DSGVO.</p>
				<p>Mit Schließen Ihres Internet-Browsers werden diese Session-Cookies gelöscht.</p>
				<h5>b) Drittanbieter-Cookies</h5>
				<p>Gegebenenfalls werden mit unserem Internetauftritt auch Cookies von Partnerunternehmen, mit denen wir zum Zwecke der Werbung, der Analyse oder der Funktionalitäten unseres Internetauftritts zusammenarbeiten, verwendet.</p>
				<p>Die Einzelheiten hierzu, insbesondere zu den Zwecken und den Rechtsgrundlagen der Verarbeitung solcher Drittanbieter-Cookies, entnehmen Sie bitte den nachfolgenden Informationen.</p>
				<h5>c) Beseitigungsmöglichkeit</h5>
				<p>Sie können die Installation der Cookies durch eine Einstellung Ihres Internet-Browsers verhindern oder einschränken. Ebenfalls können Sie bereits gespeicherte Cookies jederzeit löschen. Die hierfür erforderlichen Schritte und Maßnahmen hängen jedoch von Ihrem konkret genutzten Internet-Browser ab. Bei Fragen benutzen Sie daher bitte die Hilfefunktion oder Dokumentation Ihres Internet-Browsers oder wenden sich an dessen Hersteller bzw. Support. Bei sog. Flash-Cookies kann die Verarbeitung allerdings nicht über die Einstellungen des Browsers unterbunden werden. Stattdessen müssen Sie insoweit die Einstellung Ihres Flash-Players ändern. Auch die hierfür erforderlichen Schritte und Maßnahmen hängen von Ihrem konkret genutzten Flash-Player ab. Bei Fragen benutzen Sie daher bitte ebenso die Hilfefunktion oder Dokumentation Ihres Flash-Players oder wenden sich an den Hersteller bzw. Benutzer-Support.</p>
				<p>Sollten Sie die Installation der Cookies verhindern oder einschränken, kann dies allerdings dazu führen, dass nicht sämtliche Funktionen unseres Internetauftritts vollumfänglich nutzbar sind. </p>

				<h4>Vertragsabwicklung</h4>
				<p>Die von Ihnen zur Inanspruchnahme unseres Waren- und/oder Dienstleistungsangebots übermittelten Daten werden von uns zum Zwecke der Vertragsabwicklung verarbeitet und sind insoweit erforderlich. Vertragsschluss und Vertragsabwicklung sind ohne Bereitstellung Ihrer Daten nicht möglich.</p>
				<p>Rechtsgrundlage für die Verarbeitung ist Art. 6 Abs. 1 lit. b) DSGVO.</p>
				<p>Wir löschen die Daten mit vollständiger Vertragsabwicklung, müssen dabei aber die steuer- und handelsrechtlichen Aufbewahrungsfristen beachten.</p>
				<p>Im Rahmen der Vertragsabwicklung geben wir Ihre Daten an das mit der Warenlieferung beauftragte Transportunternehmen oder an den Finanzdienstleister weiter, soweit die Weitergabe zur Warenauslieferung oder zu Bezahlzwecken erforderlich ist.</p>
				<p>Rechtsgrundlage für die Weitergabe der Daten ist dann Art. 6 Abs. 1 lit. b) DSGVO.</p>

				<h4>Kundenkonto / Registrierungsfunktion</h4>
				<p>Falls Sie über unseren Internetauftritt ein Kundenkonto bei uns anlegen, werden wir die von Ihnen bei der Registrierung eingegebenen Daten (also bspw. Ihren Namen, Ihre Anschrift oder Ihre E-Mail-Adresse) ausschließlich für vorvertragliche Leistungen, für die Vertragserfüllung oder zum Zwecke der Kundenpflege (bspw. um Ihnen eine Übersicht über Ihre bisherigen Bestellungen bei uns zur Verfügung zu stellen oder um Ihnen die sog. Merkzettelfunktion anbieten zu können) erheben und speichern. Gleichzeitig speichern wir dann die IP-Adresse und das Datum Ihrer Registrierung nebst Uhrzeit. Eine Weitergabe dieser Daten an Dritte erfolgt natürlich nicht.</p>
				<p>Im Rahmen des weiteren Anmeldevorgangs wird Ihre Einwilligung in diese Verarbeitung eingeholt und auf diese Datenschutzerklärung verwiesen. Die dabei von uns erhobenen Daten werden ausschließlich für die Zurverfügungstellung des Kundenkontos verwendet.&nbsp;</p>
				<p>Soweit Sie in diese Verarbeitung einwilligen, ist Art. 6 Abs. 1 lit. a) DSGVO Rechtsgrundlage für die Verarbeitung.</p>
				<p>Sofern die Eröffnung des Kundenkontos zusätzlich auch vorvertraglichen Maßnahmen oder der Vertragserfüllung dient, so ist Rechtsgrundlage für diese Verarbeitung auch noch Art. 6 Abs. 1 lit. b) DSGVO.</p>
				<p>Die uns erteilte Einwilligung in die Eröffnung und den Unterhalt des Kundenkontos können Sie gemäß Art. 7 Abs. 3 DSGVO jederzeit mit Wirkung für die Zukunft widerrufen. Hierzu müssen Sie uns lediglich über Ihren Widerruf in Kenntnis setzen.</p>
				<p>Die insoweit erhobenen Daten werden gelöscht, sobald die Verarbeitung nicht mehr erforderlich ist. Hierbei müssen wir aber steuer- und handelsrechtliche Aufbewahrungsfristen beachten.</p>

				<h4>Prüfung von Bonität und Scoring</h4>
				<p>Soweit wir Ihnen im Rahmen unseres Waren- oder Dienstleistungsangebots die grundsätzliche Möglichkeit einer Bezahlung per Rechnung eröffnen und Sie hiervon Gebrauch machen, behalten wir uns vor, bei einer Auskunftei (wie bspw. Creditreform, Schufa, Bürgel oder infoscore) eine Bonitätsauskunft auf der Basis mathematisch-statistischer Verfahren einzuholen. Hierzu werden Ihre Daten, soweit sie vertragserheblich sind, wie bspw. Ihren Namen und Ihre Anschrift, an die Auskunftei weiterleiten. Die anschließende Auskunft über die statistische Wahrscheinlichkeit eines Zahlungsausfalls verwenden wir für unsere Entscheidung, ob wir Ihnen die Bezahlung per Rechnung anbieten.</p>
				<p>Rechtsgrundlage für diese Verarbeitung ist unser berechtigtes Interesse an der Ausfallsicherheit der Forderung gem. Art. 6 Abs.1 lit. f) DSGVO.</p>

				<h4>Newsletter</h4>
				<p>Falls Sie sich für unseren kostenlosen Newsletter anmelden, werden die von Ihnen hierzu abgefragten Daten, also Ihre E-Mail-Adresse sowie - optional - Ihr Name und Ihre Anschrift, an uns übermittelt. Gleichzeitig speichern wir die IP-Adresse des Internetanschlusses von dem aus Sie auf unseren Internetauftritt zugreifen sowie Datum und Uhrzeit Ihrer Anmeldung. Im Rahmen des weiteren Anmeldevorgangs werden wir Ihre Einwilligung in die Übersendung des Newsletters einholen, den Inhalt konkret beschreiben und auf diese Datenschutzerklärung verwiesen. Die dabei erhobenen Daten verwenden wir ausschließlich für den Newsletter-Versand – sie werden deshalb insbesondere auch nicht an Dritte weitergegeben.</p>
				<p>Rechtsgrundlage hierbei ist Art. 6 Abs. 1 lit. a) DSGVO.</p>
				<p>Die Einwilligung in den Newsletter-Versand können Sie gemäß Art. 7 Abs. 3 DSGVO jederzeit mit Wirkung für die Zukunft widerrufen. Hierzu müssen Sie uns lediglich über Ihren Widerruf in Kenntnis setzen oder den in jedem Newsletter enthaltenen Abmeldelink betätigen.</p>

				<h4>Kontaktanfragen / Kontaktmöglichkeit</h4>
				<p>Sofern Sie per Kontaktformular oder E-Mail mit uns in Kontakt treten, werden die dabei von Ihnen angegebenen Daten zur Bearbeitung Ihrer Anfrage genutzt. Die Angabe der Daten ist zur Bearbeitung und Beantwortung Ihre Anfrage erforderlich - ohne deren Bereitstellung können wir Ihre Anfrage nicht oder allenfalls eingeschränkt beantworten.</p>
				<p>Rechtsgrundlage für diese Verarbeitung ist Art. 6 Abs. 1 lit. b) DSGVO.</p>
				<p>Ihre Daten werden gelöscht, sofern Ihre Anfrage abschließend beantwortet worden ist und der Löschung keine gesetzlichen Aufbewahrungspflichten entgegenstehen, wie bspw. bei einer sich etwaig anschließenden Vertragsabwicklung.</p>

				<h4>Nutzerbeiträge, Kommentare und Bewertungen</h4>
				<p>Wir bieten Ihnen an, auf unseren Internetseiten Fragen, Antworten, Meinungen oder Bewertungen, nachfolgend nur „Beiträge genannt, zu veröffentlichen. Sofern Sie dieses Angebot in Anspruch nehmen, verarbeiten und veröffentlichen wir Ihren Beitrag, Datum und Uhrzeit der Einreichung sowie das von Ihnen ggf. genutzte Pseudonym.</p>
				<p>Rechtsgrundlage hierbei ist Art. 6 Abs. 1 lit. a) DSGVO. Die Einwilligung können Sie gemäß Art. 7 Abs. 3 DSGVO jederzeit mit Wirkung für die Zukunft widerrufen. Hierzu müssen Sie uns lediglich über Ihren Widerruf in Kenntnis setzen.</p>
				<p>Darüber hinaus verarbeiten wir auch Ihre IP- und E-Mail-Adresse. Die IP-Adresse wird verarbeitet, weil wir ein berechtigtes Interesse daran haben, weitere Schritte einzuleiten oder zu unterstützen, sofern Ihr Beitrag in Rechte Dritter eingreift und/oder er sonst wie rechtswidrig erfolgt.</p>
				<p>Rechtsgrundlage ist in diesem Fall Art. 6 Abs. 1 lit. f) DSGVO. Unser berechtigtes Interesse liegt in der ggf. notwendigen Rechtsverteidigung.</p>

				<h4>Abonnement von Beiträgen</h4>
				<p>Sofern Sie Beiträge auf unseren Internetseiten veröffentlichen, bieten wir Ihnen zusätzlich an, etwaige Folgebeiträge Dritter zu abonnieren. Um Sie über diese Folgebeiträge per E-Mail informieren zu können, verarbeiten wir Ihre E-Mail-Adresse.</p>
				<p>Rechtsgrundlage hierbei ist Art. 6 Abs. 1 lit. a) DSGVO. Die Einwilligung in dieses Abonnement können Sie gemäß Art. 7 Abs. 3 DSGVO jederzeit mit Wirkung für die Zukunft widerrufen. Hierzu müssen Sie uns lediglich über Ihren Widerruf in Kenntnis setzen oder den in der jeweiligen E-Mail enthaltenen Abmeldelink betätigen.</p>

				<h4>Online-Stellenbewerbungen / Veröffentlichung von Stellenanzeigen</h4>
				<p>Wir bieten Ihnen die Möglichkeit an, sich bei uns über unseren Internetauftritt bewerben zu können. Bei diesen digitalen Bewerbungen werden Ihre Bewerber- und Bewerbungsdaten von uns zur Abwicklung des Bewerbungsverfahrens elektronisch erhoben und verarbeitet.</p>
				<p>Rechtsgrundlage für diese Verarbeitung ist § 26 Abs. 1 S. 1 BDSG i.V.m. Art. 88 Abs. 1 DSGVO.</p>
				<p>Sofern nach dem Bewerbungsverfahren ein Arbeitsvertrag geschlossen wird, speichern wir Ihre bei der Bewerbung übermittelten Daten in Ihrer Personalakte zum Zwecke des üblichen Organisations- und Verwaltungsprozesses – dies natürlich unter Beachtung der weitergehenden rechtlichen Verpflichtungen.</p>
				<p>Rechtsgrundlage für diese Verarbeitung ist ebenfalls § 26 Abs. 1 S. 1 BDSG i.V.m. Art. 88 Abs. 1 DSGVO.</p>
				<p>Bei der Zurückweisung einer Bewerbung löschen wir die uns übermittelten Daten automatisch zwei Monate nach der Bekanntgabe der Zurückweisung. Die Löschung erfolgt jedoch nicht, wenn die Daten aufgrund gesetzlicher Bestimmungen, bspw. wegen der Beweispflichten nach dem AGG, eine längere Speicherung von bis zu vier Monaten oder bis zum Abschluss eines gerichtlichen Verfahrens erfordern.</p>
				<p>Rechtsgrundlage ist in diesem Fall Art. 6 Abs. 1 lit. f) DSGVO und § 24 Abs. 1 Nr. 2 BDSG. Unser berechtigtes Interesse liegt in der Rechtsverteidigung bzw. -durchsetzung.</p>
				<p>Sofern Sie ausdrücklich in eine längere Speicherung Ihrer Daten einwilligen, bspw. für Ihre Aufnahme in eine Bewerber- oder Interessentendatenbank, werden die Daten aufgrund Ihrer Einwilligung weiterverarbeitet. Rechtsgrundlage ist dann Art. 6 Abs. 1 lit. a) DSGVO. Ihre Einwilligung können Sie aber natürlich jederzeit nach Art. 7 Abs. 3 DSGVO durch Erklärung uns gegenüber mit Wirkung für die Zukunft widerrufen.</p>

				<h4>Gewinnspiel</h4>
				<p>Über unseren Internetauftritt bieten wir Ihnen die Teilnahme an Gewinnspielen an. Sofern Sie an einem unserer Gewinnspiele teilnehmen, werden die von Ihnen anlässlich der Teilnahme eingegebenen Daten ohne Ihre weitergehende Einwilligung, aber natürlich ausschließlich nur zur Durchführung und Abwicklung des jeweiligen Gewinnspiels, verarbeitet.</p>
				<p>Im Rahmen der Abwicklung des Gewinnspiels geben wir Ihre Daten an das mit der Warenlieferung beauftragte Transportunternehmen oder an einen Finanzdienstleister weiter, soweit die Weitergabe zur Lieferung bzw. Auszahlung Ihres Gewinns erforderlich ist. Sofern Ihre Daten im Falle eines Gewinns veröffentlicht werden, werden Sie hierauf im Rahmen der Einwilligungserklärung hingewiesen.</p>
				<p>Rechtsgrundlage für die Weitergabe der Daten ist dann Art. 6 Abs. 1 lit. b) DSGVO.</p>
				<p>Ihre Einwilligung in die Verarbeitung der Daten zur Teilnahme an unseren Gewinnspielen können Sie gemäß Art. 7 Abs. 3 DSGVO jederzeit mit Wirkung für die Zukunft widerrufen. Hierzu müssen Sie uns lediglich über Ihren Widerruf in Kenntnis setzen.</p>

				<p>
				<a target="_blank" href="https://www.ratgeberrecht.eu/leistungen/muster-datenschutzerklaerung.html">Muster-Datenschutzerklärung</a> der <a target="_blank" href="https://www.ratgeberrecht.eu/datenschutz/datenschutzerklaerung-generator-dsgvo.html">Anwaltskanzlei Weiß &amp; Partner</a></p>
		</div>
	</main>
	</body>
</html> 