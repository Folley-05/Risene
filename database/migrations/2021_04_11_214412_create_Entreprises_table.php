<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateEntreprisesTable extends Migration {

	public function up()
	{
		Schema::create('Entreprises', function(Blueprint $table) {
			$table->increments('id');
			$table->timestamps();
			$table->string('raisonSociale');
			$table->string('numContribuable');
			$table->string('numCNPS');
			$table->string('numRegistreCommerce');
			$table->string('numStructure');
			$table->string('numGps');
			$table->float('altitude');
			$table->float('lattitude');
			$table->float('longitude');
			$table->string('ville');
			$table->string('boitePostale');
			$table->string('villebp');
			$table->string('tel1');
			$table->string('tel2');
			$table->string('numWha');
			$table->string('fax');
			$table->string('siteweb');
			$table->string('email');
			$table->date('dateCreation');
			$table->date('datedemarrage');
			$table->boolean('avoirfilialeetranger')->nullable();
			$table->boolean('partcapitaltierce')->nullable();
			$table->boolean('parttierceCapital')->nullable();
			$table->boolean('etrefilialtierce')->nullable();
			$table->integer('capitalSocial');
			$table->integer('partprivenational');
			$table->integer('partpriveetranger');
			$table->integer('partpubliquenationale');
			$table->integer('partpubliqueetranger');
			$table->boolean('tenuecomptaecrte');
			$table->boolean('affcabcompta');
			$table->boolean('tenuecomptaformelle')->nullable();
			$table->boolean('remplissagedsf');
			$table->integer('chiffaff');
			$table->integer('chiffaffexp');
			$table->integer('valajoute');
			$table->boolean('conape');
			$table->boolean('avislibreechange')->nullable();
			$table->boolean('conpolitiquepub')->nullable();
			$table->string('avisenvironaff')->nullable();
			$table->boolean('avisrelationpubpriv')->nullable();
			$table->boolean('utilordinateur')->nullable();
			$table->integer('nbreordi')->nullable();
			$table->integer('nbreinfo')->nullable();
			$table->boolean('intranet')->nullable();
			$table->boolean('internet')->nullable();
			$table->boolean('ecomm')->nullable();
			$table->boolean('mobilmoney')->nullable();
			$table->boolean('protectenv')->nullable();
			$table->boolean('dispositihhse')->nullable();
			$table->boolean('lieuaisanceperso')->nullable();
			$table->boolean('lieuaisanceusager')->nullable();
			$table->boolean('dipositifrecyclage')->nullable();
			$table->integer('montantsoutraitanceout')->nullable();
			$table->integer('montantsoutraitancein')->nullable();
			$table->boolean('satisfactionpartenariat')->nullable();
			$table->integer('quantitedechet')->nullable();
			$table->string('etapetraitement')->nullable();
			$table->date('dateenreg')->nullable();
			$table->string('codeINS');
			$table->integer('statut_id')->unsigned();
			$table->integer('sourceMJ_id')->unsigned()->nullable();
			$table->integer('entreprise_id')->unsigned()->nullable();
			$table->integer('CAPEF_CCIMA');
			$table->string('AutresFichierAdmin');
			$table->string('LibelleAutresFichier');
			$table->integer('statutEtablissement')->unsigned();
			$table->string('pageFacebook');
			$table->string('autreMotifArretActivite');
			$table->integer('zoneIndustrielle');
			$table->integer('recensement2009');
			$table->integer('recensement2016');
			$table->integer('montantLoyer');
			$table->integer('codeEtablissementRecense')->nullable();
			$table->integer('inscriptionCGA')->unsigned();
			$table->integer('connaitreAPPME')->unsigned();
			$table->string('codeFormeJuridique');
			$table->string('libelleFormeJuridique');
			$table->string('quartier');
			$table->string('villeLocalite');
			$table->string('raisonSocialeSiege');
			$table->string('sigleSiege');
			$table->integer('id_arrondissement')->unsigned();
			$table->string('numContribuableSiege');
			$table->string('numRegistreCommerceSiege');
			$table->string('quartierSiege');
			$table->string('repereSiege');
			$table->string('villeSiege');
			$table->integer('tel1Siege');
			$table->integer('tel2Siege');
			$table->string('faxSiege');
			$table->string('emailSiege');
			$table->string('siteWebSiege');
			$table->integer('zoneFranche')->unsigned();
			$table->string('nomPromoteur');
			$table->integer('agePromoteur');
			$table->string('sexePromoteur');
			$table->string('fonctionPromoteur');
			$table->integer('epargne');
			$table->string('prenomPromoteur');
			$table->integer('nombreAnnees');
			$table->integer('partEpargne')->nullable();
			$table->integer('fichierAdm');
			$table->string('numEntrepriseStructure');
			$table->string('rue');
			$table->integer('etatActivite')->unsigned();
			$table->integer('motifArret')->unsigned();
			$table->integer('natureCreation')->unsigned();
			$table->integer('originesFonds')->unsigned();
			$table->integer('statutOccupationLocal')->unsigned();
			$table->integer('natureContratLocation')->unsigned();
			$table->integer('caracteristiqueLocal')->unsigned();
			$table->text('autreNatureContratLocation')->nullable();
			$table->text('autreCaracteristiqueLocal')->nullable();
			$table->integer('organisationProffessionnelle')->unsigned();
			$table->text('nomOrganisationProffessionnelle')->nullable();
			$table->integer('regimeImposition')->unsigned();
			$table->integer('nombreEtablissement')->nullable();
			$table->integer('catImpot')->unsigned()->nullable();
			$table->integer('systemedsf')->unsigned();
			$table->integer('activitePrincipale');
			$table->text('activiteSecondaire');
			$table->integer('effectifHomme');
			$table->integer('effectifFemme');
			$table->string('effectifTotal');
			$table->string('departement');
			$table->integer('region')->unsigned();
			$table->string('autreStatutOccupation');
			$table->string('natureEtablissementRecence');
			$table->string('codeNatureEtablissementRecence');
			$table->date('anne');
			$table->string('affilieOrganisationProffessionnelle');
			$table->string('promoteurPrincipalDirigeant');
			$table->boolean('statutTraitement');
			$table->boolean('statutSuppression');
		});
	}

	public function down()
	{
		Schema::drop('Entreprises');
	}
}