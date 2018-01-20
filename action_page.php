<?PHP
   if ( empty ($_POST) === false) {
       
    $errors = array ();
    $name = $_POST["name"];
    $email = $_POST ["email"];
    $message = $_POST["message"];
   }

  if (empty ($name)===true || empty ($email)===true || empty ($message)===true) {
      $errors[] = "Name,email and meessage are required";
  }

 else{
     if (filter_var($mail, FILTER_VALIDATE_EMAIL)=== false) {
         $errors []= "That\'s not a valid email adress";
     }
  if (ctype_alpha($name)===false) {
      $errors[]= "Name must only contains letters";
  }

  if (empty($errors)===true) {
      mail("sarah.neubert@creacontext.com","Contact form",$message,"from:".$email);
      header( "location; index.php?sent");
      exit();
  }
  ?> 

  
<!DOCTYPE html >

<html lang=nl >

<head> 

        <title>Creacontext - Vertaling &amp; Content</title>
        <meta charset="UTF-8">
        <meta name="description" content="Creaconntext - Vertaling & Content in het Duits">
        <meta name="keywords" content="vertaling, contentschrijver, tekstschrijver, Duits,SEO, websites,proeflezen,corrigeren, redigeren">
        <meta name="author" content="Sarah Neubert">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="creacontext.css">

</head>

<body>

    <ul class="topnav">
        <li class="logo"><a href="#home"><img  src="images/logo_creacontext_website.png" alt="Logo"></a></li>
        <li class="men"><a href="#contact">Contact</a></li>
        <li class="men"><a href="#creacontext">Wie is Creacontext</a></li>
        <li class="men"><a href="#portfolio">Portfolio</a></li>
        <li class="men"><a href="#tarieven">Tarieven</a></li>
        <li class="men"><a href="#diensten">Diensten</a></li>
        <li class="men"><a href="#voordeel">Uw voordeel</a></li>
    </ul>    
<div class="bx">
        <div class="top">
            <div class="top2">
                <h1 id="introh1">Vertaling &amp; Content</h1>
                <br>
                <p class="introp"> Overtuig uw klanten en partners met creatieve teksten en professionele vertalingen voor uw <br>on- en offline media in het Duits</p>
                        <br>
                <div class="button butn1"><a class="buttonlink" href="#voordeel">Vertel me meer</a></div>   
                <div class="button butn2"><a class="buttonlink" href="#contact">Contact opnemen</a></div>
            </div>       
        </div>    

    <div class="main">
        <div class="cont">
            <h1 class="content1h1"><a class="h1link" name="voordeel"></a>Uw voordeel</h1>

            
            <p> Creacontext staat voor het creëren van  creatieve en makkelijk leesbare content in het Duits. Laat uw teksten voor uw on- en offline media schrijven en vertalen door een <strong>Duitse native speaker</strong> en raak voortaan altijd de passende tone of voice.</p><p>Bent u van plan uw onderneming uit te breiden naar de Duitse markt? Heeft u hiervoor wervende teksten met een overtuigende call-to-action nodig en wilt u uw website in het Duits laten vertalen? Creacontext is bekend met de Duitse cultuur en weet precies hoe een commerciёle tekst geschreven dient te worden <strong>om Duitse doelgroepen te kunnen overtuigen.</strong> Daarbij wordt rekening gehouden met de <strong>juiste keywords en SEO relevante inhoud. </strong> Laat uw doelen en informatie door Creacontext vertalen en zorg ervoor dat iederen uw teksten ongeacht het gebruikelijk vakjargon makkelijk begrijpt.</p><p>Wilt u een boek of  een tijdschrift in het Duits uitgeven? Creacontext is u graag van dienst met een <strong>professionele en nauwkeurige vertaling.</strong> Heeft u al teksten of content in het Duits laten vertalen? Wees zeker dat deze foutloos en pakkend zijn geschreven. Tot de diensten van Creacontext hoort ook het <strong>proeflezen, corrigeren en redigeren</strong> van alle soorten teksten.</p><p> Wilt u even kennis maken, weten wat tot de mogelijkheden behoort of een vrijblijvende offerte aanvragen  bel dan 06 26 72 5551 of mail naar contact@creacontext.com om <strong><a data-email="contact@creacontext.com" href="mailto:contact@creacontext.com">contact</a></strong> op te nemen.</p>
        </div>

        <div class="cont">
            <h1 class="content1h1"><a class="h1link" name="diensten"></a>Diensten</h1>
        
        
        
            <p> Duitsland is volgens de <strong><a href=" https://www.dnhk.org/nl/advies/marktinformatie/handelspartner-duitsland/">dnhk</a></strong> de belangrijkste handelspartner van Nederland.  Het gezamenlijke handelsvolume van circa 163 mrd euro is, volgens Destatis (2016), dan ook één van de grootste wereldwijd. Om deze reden staan veel Nederlandse bedrijven in contact met hun Duitse partners of ze kiezen er zelfs voor om uit te breiden naar de Duitse markt. Om zich professioneel te kunnen presenteren en kwalitatief hoogwaardige informatie te kunnen leveren is het van groot belang online- en offline media niet alleen foutloos maar ook pakkend en met een passende tone of voice  te vertalen. U doet er dus goed aan uw informatie- en reclame materiaal in vorm van <strong>websites, brochures, vaktijdschriften, flyers en handleidingen</strong> maar ook  <strong>standaard mails, contracten en voorwaarden</strong> door en Duitse native speaker te laten vertalen,  te schrijven of te corrigeren. Dit werk neemt Creacontext u graag uit handen en zorgt ervoor dat uw bedrijf  een professionele indruk maakt op de Duitse markt.</p>
        
        </div>
    <br>
    <br>
    <br>
    <br>
        <div class="column">
            <h2 class="content1h2">Nauwkeurige vertalingen</h2>

            <ul>
                <li>professioneel</li>
                <li>kwalitatief hoogwaardig</li>
                <li>effecient en effectief</li>
            </ul>
        </div>

        <div class="column">
            <h2 class="content1h2">Relevante content</h2>
            
            <ul>
                <li>creatief</li>
                <li>comercieel en overtuigend</li>
                <li>doelgroepgericht</li>
            </ul>
        </div>

        <div class="column">   
            <h2 class="content1h2">Proeflezen &amp; correctie</h2>

            <ul>
                <li>servicegericht</li>
                <li>foutloos</li>
                <li>geen foute vrienden</li>
            </ul>
        </div>
    
        
        <div class="offer">
            <div class="content1 col-11 col-m-11">
                <h1 class="content1h1"><a class="h1link" name="tarieven"></a>Tarieven</h1>
                <br>
                <br>
                <table id="customers" >
                    <tr>
                        <th>Vertaling</th>
                        <th>Content</th>
                        <th>Correctie</th>
                    </tr>
                    <tr>
                        <td>Standaard<br>€ 0,06 - € 0,08 per woord</td>
                        <td>Standaard<br>€ 0,12 - € 0,13 per woord</td>
                        <td>Standaard<br>€ 0,02 - € 0,04 per woord</td>
                    </tr>
                    <tr>
                        <td>Geavanceerd<br>€ 0,09 - € 0,12 per woord</td>
                        <td>Geavanceerd<br>€ 0,13 - € 0,16 per woord</td>
                        <td>Geavanceerd<br>€ 0,05 - € 0,07 per woord</td>
                    </tr>
                    <tr>
                        <td>Spoedtoeschlag 20%</td>
                        <td>Spoedtoeschlag 20%</td>
                        <td>Spoedtoeschlag 20%</td>
                    </tr>
                    <tr>
                        <td>Stippenkaart met 10 units van 500 woorden voor € 250 </td>
                        <td>Stippenkaart met 10 units van 500 woorden voor € 500</td>
                        <td>Stippenkaart met 10 units van 500 woorden voor € 125</td>
                    </tr>
            
                </table>
            </div>
        </div>

        <div class="cont">
        <h1 class="content1h1"><a class="h1link" name="portfolio"></a>Portfolio</h1>
        
        <p> Bent u van plan uw onderneming uit te breiden naar de Duitse markt? Heeft u hiervoor wervende teksten met een overtuigende call-to-action nodig en wilt u uw website in het Duits laten vertalen? Creacontext is bekend met de Duitse cultuur en weet precies hoe een commerciёle tekst geschreven dient te worden <strong>om Duitse doelgroepen te kunnen overtuigen.</strong> Daarbij wordt rekening gehouden met de <strong>juiste keywords en SEO relevante inhoud. </strong> Laat uw doelen en informatie door Creacontext vertalen en zorg ervoor dat iederen uw teksten ongeacht het gebruikelijk vakjargon makkelijk begrijpt.</p><p>Wilt u een boek of  een tijdschrift in het Duits uitgeven? Creacontext is u graag van dienst met een <strong>professionele en nauwkeurige vertaling.</strong> Heeft u al teksten of content in het Duits laten vertalen? Wees zeker dat deze foutloos en pakkend zijn geschreven. Tot de diensten van Creacontext hoort ook het <strong>proeflezen, corrigeren en redigeren</strong> van alle soorten teksten.</p><p> Wilt u even kennis maken, weten wat tot de mogelijkheden behoort of een vrijblijvende offerte aanvragen  bel dan 06 26 72 5551 of mail naar contact@creacontext.com om <strong><a data-email="contact@creacontext.com" href="mailto:contact@creacontext.com">contact</a></strong> op te nemen.</p>
        </div>

        <div class="cont">
        <h1 class="content1h1"><a class="h1link" name="creacontext"></a>Wie is Creacontext</h1>
        
        <p> Bent u van plan uw onderneming uit te breiden naar de Duitse markt? Heeft u hiervoor wervende teksten met een overtuigende call-to-action nodig en wilt u uw website in het Duits laten vertalen? Creacontext is bekend met de Duitse cultuur en weet precies hoe een commerciёle tekst geschreven dient te worden <strong>om Duitse doelgroepen te kunnen overtuigen.</strong> Daarbij wordt rekening gehouden met de <strong>juiste keywords en SEO relevante inhoud. </strong> Laat uw doelen en informatie door Creacontext vertalen en zorg ervoor dat iederen uw teksten ongeacht het gebruikelijk vakjargon makkelijk begrijpt.</p><p>Wilt u een boek of  een tijdschrift in het Duits uitgeven? Creacontext is u graag van dienst met een <strong>professionele en nauwkeurige vertaling.</strong> Heeft u al teksten of content in het Duits laten vertalen? Wees zeker dat deze foutloos en pakkend zijn geschreven. Tot de diensten van Creacontext hoort ook het <strong>proeflezen, corrigeren en redigeren</strong> van alle soorten teksten.</p><p> Wilt u even kennis maken, weten wat tot de mogelijkheden behoort of een vrijblijvende offerte aanvragen  bel dan 06 26 72 5551 of mail naar contact@creacontext.com om <strong><a data-email="contact@creacontext.com" href="mailto:contact@creacontext.com">contact</a></strong> op te nemen.</p>
        </div>

        <br>

        <div id="contact">
            <div class="content1">
                
                <div class="column1 col-5 col-m-5"> <h1 class="content1h1"><a class="h1link" name="contact"></a>Contact</h1>
                    
                        <p>Wilt u even kennis maken, weten wat tot de mogelijkheden behoort of een vrijblijvende offerte aanvragen bel dan 06 26 72 5551 of mail naar contact@creacontext.com om <strong><a data-email="contact@creacontext.com" href="mailto:contact@creacontext.com">contact</a></strong> op te nemen.</p>
                        
                </div>
                
                    
                <div class="column2">
                            <form action="/action_page.php" method="POST">
                                <input type="text" id="naam" name="Naam" placeholder="Jouw naam...">
                                <input type="text" id="email" name="Email" placeholder="Jouw email adres...">
                                <textarea placeholder="Stel je vraag..."></textarea>
                                <input type="submit" value="Verstuur">
                            </form>
                </div>
                
            
            </div>
        </div>
    </div>
</div>
<footer>
    <div class="ft">
        <div class="fot">
            &copy; Creacontext 2018
        </div>
    </div>
    
</footer>

</body>