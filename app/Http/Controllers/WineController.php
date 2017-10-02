<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WineController extends Controller
{
    public function wine() {

		$wines = [
			[
	            'title' => 'Adriano Adami / Prosecco',
	            'price' => '8/36',
	            'extra' => '',
	            'desc' => '"Garbél" Treviso, Italy'
	        ],
	        [
	            'title' => 'Janisson & Fils / Champagne',
	            'price' => '14/60',
	            'extra' => '',
	            'desc' => '"Brut Tradition" Verzenay, France'
	        ],
	        [
	            'title' => 'Saint Sidione Rosé [2015]',
	            'price' => '8/36',
	            'extra' => '',
	            'desc' => 'Provence, France'
	        ],
	        [
	            'title' => 'Amextoi / Rosé',
	            'price' => '12/50',
	            'extra' => '',
	            'desc' => '"Rubentis" (baby jesus) Txakolina, Spain'
	        ],
	        [
	            'title' => 'Domaine Skouras / Moscofilero [2012]',
	            'price' => '8/36',
	            'extra' => '',
	            'desc' => '"Volcanic Terroir" Peloponnese, Greece'
	        ],
	        [
	            'title' => 'Spy Valley / Sauvignon Blanc [2014]',
	            'price' => '9/38',
	            'extra' => '',
	            'desc' => 'Marlbourough, New Zealand'],
	        [
	            'title' => 'Lafage / Grenache Blanc [2014]',
	            'price' => '9/40',
	            'extra' => '',
	            'desc' => '"Cuvée Centenaire" Roussillon, France'
	        ],
	        [
	            'title' => 'St. Clement / Chardonnay [2013]',
	            'price' => '10/46',
	            'extra' => '',
	            'desc' => '"Estate" Napa Valley, USA'
	        ],
	        [
	            'title' => 'Stift Gœttweig / Gruner [2014]',
	            'price' => '8/36',
	            'extra' => '',
	            'desc' => '"Messwein" Kremstal, Austria'
	        ],
	        [
	            'title' => 'Chateau Montfort / Chenin Blanc [2014]',
	            'price' => '9/40',
	            'extra' => '',
	            'desc' => 'Vouvray, Loire, France'
	        ],
	        [
	            'title' => 'Domaine St. Peyre / Picpoul [2015]',
	            'price' => '7/30',
	            'extra' => '',
	            'desc' => '"Estate" Languedoc, France'
	        ],
	        [
	            'title' => 'Ameztoi Txakolina (Hondarribi) [2014]',
	            'price' => '9/40',
	            'extra' => '',
	            'desc' => 'Basque, Spain'
	        ],
	        [
	            'title' => 'Maison l\'Envoyé / Burgundy [2014]',
	            'price' => '9/40',
	            'extra' => '',
	            'desc' => 'Bourgogne, France'
	        ],
	        [
	            'title' => 'Max Richter / Riesling [2014]',
	            'price' => '8/36',
	            'extra' => '',
	            'desc' => '"Zeppelin Mülheimer Sonnen" Mosel, Germany'
	        ],
	        [
	            'title' => 'A.Lageder Suditirol / Pinot Grigio [2015]',
	            'price' => '11/39',
	            'extra' => '',
	            'desc' => '"Riff" Alto Adige, Italy'
	        ],
	        [
	            'title' => 'Domaine Delaporte / Sancerre [2015]',
	            'price' => '12/50',
	            'extra' => '',
	            'desc' => '"Chavignol" Sancerre, France'
	        ],
	        [
	            'title' => 'Cleebourg / Gewurztraminer [2014]',
	            'price' => '7/32',
	            'extra' => '',
	            'desc' => 'Alsace, France'
	        ],
		];
	    $wines2 = [
	        [
	            'title' => 'Stonecap / Cabernet [2014]',
	            'price' => '8/36',
	            'extra' => '',
	            'desc' => 'Washington, USA'
	        ],
	        [
	            'title' => 'Albamar / Pinot Noir [2014]',
	            'price' => '9/38',
	            'extra' => '',
	            'desc' => '"Estate" Casablanca Valley, Chile'
	        ],
	        [
	            'title' => 'Domaine Laroque / Cab Franc [2014]',
	            'price' => '8/36',
	            'extra' => '',
	            'desc' => 'Chinon, Loire, France'
	        ],
	        [
	            'title' => 'Bodegas Renacer / Malbec [2014]',
	            'price' => '8/36',
	            'extra' => '',
	            'desc' => '"Punto Final" Mendoza, Argentina'
	        ],
	        [
	            'title' => 'Bouchard burgundy / Pinot [2014]',
	            'price' => '9/40',
	            'extra' => '',
	            'desc' => 'Bourgogne, France'
	        ],
	        [
	            'title' => 'Hourglass / Merlot [2011]',
	            'price' => '14/60',
	            'extra' => '',
	            'desc' => '"Blueline Vineyard, Estate" Napa Valley, USA'
	        ],
	        [
	            'title' => 'Dom. Vitalis / Cote-du-rhone village [2014]',
	            'price' => '9/40',
	            'extra' => '',
	            'desc' => '"Ciaranne" Rhone, France'
	        ],
	        [
	            'title' => 'Turley / Zinfandel [2014]',
	            'price' => '12/52',
	            'extra' => '',
	            'desc' => '"Juvenile" Cali., USA'
	        ],
	        [
	            'title' => 'DaTerra / Mencia [2014]',
	            'price' => '10/46',
	            'extra' => '',
	            'desc' => '"(Azos) de Villa" Manzaneda, Spain'
	        ],
	        [
	            'title' => 'Cantine Galasso / Montepulciano [2014]',
	            'price' => '8/36',
	            'extra' => '',
	            'desc' => '"Montenevoso" Abruzzo, Italy'
	        ],
	    ];




	    $dessertWines = [
	        [
	            'title' => 'Warres / Tawny Port "Otima" Oporto [10yr]',
	            'price' => '10',
	            'extra' => '',
	            'desc' => ''
	        ],
	        [
	            'title' => 'Broadbent / Madiera "Fine &amp; Rich" Sanlucar [5yr]',
	            'price' => '7',
	            'extra' => '',
	            'desc' => ''
	        ],
	        [
	            'title' => 'Domaine la Tour Vielle / Banyuls "Rimage" [10yr]',
	            'price' => '10',
	            'extra' => '',
	            'desc' => ''
	        ],
	        [
	            'title' => 'Domaine Guillonie / Monbazillac (Semillon) [2012]',
	            'price' => '9',
	            'extra' => '',
	            'desc' => ''
	        ],
	    ];



	    $cocktails = [
	        [
	            'title' => 'Kenyan Dawa',
	            'desc' => 'vodka, muddled lime, raw honey',
	            'extra' => 'curated by Trace Hayes',
	            'price' => '',
	        ],
	        [
	            'title' => 'Cool Hand Cuke',
	            'desc' => 'gin, ginger, cucumber, fresh lime',
	            'extra' => 'curated by Oscar Ycaza',
	            'price' => '',
	        ],
	        [
	            'title' => 'Anise to Meet You',
	            'desc' => 'rye whiskey, green chartreuse, fennel shrub, fresh lemon',
	            'extra' => 'curated by Mateo Boudousquie',
	            'price' => '',

	        ],
	        [
	            'title' => 'Oaxaca to Remember',
	            'desc' => 'mezcal, cucumber, passion fruit, agave, prosecco, bitters',
	            'extra' => 'curated by Kirin Taylor',
	            'price' => '',
	        ],
	        [
	            'title' => 'Grapes of Wrath',
	            'desc' => 'pisco, yellow chartreuse, fresh lemon, honey, prosecco',
	            'extra' => 'curated by Jonathan Shock',
	            'price' => '',
	        ],
	        [
	            'title' => 'Friend of the Devil',
	            'desc' => 'Rittenhouse Rye Whiskey, Fernet Branca, Montenegro Amaro. ',
	            'extra' => 'House Made Cardamom & Black Lava Sea Salt Bitters<br/>Aztec Chocolate Bitters, Angostura Bitters',
	            'price' => '',
	        ],
	        [
	            'title' => 'Uptown Punch',
	            'desc' => 'Peychaud’s Aperitivo, Herbsaint, Prosecco',
	            'extra' => 'Cocktail & Sons Oleo Saccharum, Lemon',
	            'price' => '',
	        ],
	        [
	            'title' => 'Plantation Pinapple Daiquiri',
	            'desc' => 'Plantation Pineapple Rum, Cane Run Rum',
	            'extra' => 'Cocktail & Sons Switchel, Lime',
	            'price' => '',
	        ],
	        [
	            'title' => 'Secret Garden',
	            'desc' => 'El Charo Tequila',
	            'extra' => 'Cocktail & Sons Mint and Lemon Verbena Syrup<br/>Strawberries and Lemon',
	            'price' => '',
	        ],
	    ];

	    return view('wine-cocktails.index', compact(
	    	['wines','wines2','dessertWines','cocktails']
	    ));
    }
}
