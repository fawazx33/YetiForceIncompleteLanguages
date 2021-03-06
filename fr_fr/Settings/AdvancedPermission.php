<?php
/**
 * Advanced permission french translation
 * @package YetiForce.Language
 * @copyright YetiForce Sp. z o.o.
 * @license YetiForce Public License 2.0 (licenses/License.html or yetiforce.com)
 */
$languageStrings = [
	'ERR_INACTIVE_CACHING_PERM_ALERT_DESC' => 'Les autorisations spéciales ont été désactivées car elles nécessitent l\'activation de la mise en cache des autorisations d\'enregistrement. Pour que les autorisations commencent à fonctionner, vous devez activer cron et définir la variable CACHING_PERMISSION_TO_RECORD [config/security.php] sur true.',
	'LBL_MODULES_LIST' => 'Liste des modules',
	'LBL_RECALCULATE_CRON_INFO' => 'Le calcul des autorisations requiert l\'activation de CRON, vérifiez si la tâche est active.',
	'LBL_RECALCULATE_PERMISSION_BTN' => 'Recalculer les autorisations',
	'LBL_RECALCULATE_PERMISSION_TITLE' => 'Nouveau calcul des autorisations',
	'LBL_ADVANCED_PERMISSION' => 'Autorisations avancées',
	'AdvancedPermission' => 'Autorisations avancées',
	'LBL_ADVANCED_PERMISSION_DESCRIPTION' => 'Configuration d\'autorisation personnalisée, octroi ou retrait d\'autorisations aux enregistrements.',
	// Fields
	'LBL_NAME' => 'Nom de la règle',
	'LBL_MODULE' => 'Module',
	'LBL_ACTION' => 'Action',
	'LBL_STATUS' => 'Statut',
	'LBL_ROLE' => 'Rôle',
	'LBL_MEMBERS' => 'Membres',
	'LBL_PRIORITY' => 'Priorité',
	// Picklist
	'FL_ACTIVE' => 'Actif',
	'FL_INACTIVE' => 'Inactif',
	'FL_UNLOCK_RECORD' => 'Donner des accès',
	'FL_LOCK_RECORD' => 'Retirer les accès',
	// Others
	'LBL_SAVE_AND_CONDITIONS' => 'Suivant',
	'ERR_INACTIVE_ALERT_TITLE' => 'Les autorisations avancées sont désactivées',
	'ERR_INACTIVE_ALERT_DESC' => 'Modifiez le paramètre PERMITTED_BY_ADVANCED_PERMISSION dans le fichier config/security.php pour l\'activer.',
];
