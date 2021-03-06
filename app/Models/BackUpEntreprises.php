<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class BackUpEntreprises extends Model 
{

    protected $table = 'backupentreprises';
    //public $timestamps = true;
    protected $fillable = array('raisonSociale', 'numContribuable', 'numCNPS', 'numRegistreCommerce', 'numGps', 'altitude', 'lattitude', 'longitude', 'boitePostale', 'villebp', 'tel1', 'tel2', 'numWha', 'fax', 'siteweb', 'email', 'dateCreation', 'datedemarrage', 'capitalSocial', 'partprivenational', 'partpriveetranger', 'partpubliquenationale', 'partpubliqueetranger', 'chiffaff', 'chiffaffexp', 'utilordinateur', 'nbreordi', 'nbreinfo', 'intranet', 'internet', 'dateenreg', 'codeINS', 'CAPEF_CCIMA', 'pageFacebook', 'codeFormeJuridique', 'libelleFormeJuridique', 'quartier', 'id_arrondissement', 'nomPromoteur', 'agePromoteur', 'sexePromoteur', 'fonctionPromoteur', 'prenomPromoteur', 'nombreAnnees', 'annee','secteurActivite','remplissageDsf', 'etatActivite', 'statutOccupationLocal', 'natureContratLocation', 'caracteristiqueLocal', 'organisationProffessionnelle', 'regimeImposition', 'catImpot', 'systemedsf', 'activitePrincipale', 'activiteSecondaire', 'effectifHomme', 'effectifFemme', 'effectifTotal', 'affilieOrganisationProffessionnelle', 'villeImplantation', 'region', 'departement', 'promoteurPrincipalDirigeant', 'villeRegistreCommerce', 'statutTraitement', 'regimeFiscal', 'statutSuppression', 'natureBenefices', 'situationExportation','codeActivitePrincipale','libelleActivitePrincipale', 'annees', 'brancheActivitePrincipale', 'sigle', 'codeBrancheActivitePrincipale', 'dateCessation', 'codeBrancheActiviteSecondaire', 'civilite', 'sexe', 'dateMiseajours', 'etatMiseAJour');


}