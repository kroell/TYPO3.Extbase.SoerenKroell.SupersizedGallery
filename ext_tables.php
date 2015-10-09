<?php
if (!defined('TYPO3_MODE')) {
	die ('Access denied.');
}

\TYPO3\CMS\Extbase\Utility\ExtensionUtility::registerPlugin(
	$_EXTKEY,
	'Sksupersizedgallery',
	'Supersized Gallery'
);

\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addStaticFile($_EXTKEY, 'Configuration/TypoScript', 'Supersized Gallery');

\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addLLrefForTCAdescr('tx_sksupersizedgallery_domain_model_supersizedgallery', 'EXT:sk_supersized_gallery/Resources/Private/Language/locallang_csh_tx_sksupersizedgallery_domain_model_supersizedgallery.xlf');
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::allowTableOnStandardPages('tx_sksupersizedgallery_domain_model_supersizedgallery');
$TCA['tx_sksupersizedgallery_domain_model_supersizedgallery'] = array(
	'ctrl' => array(
		'title'	=> 'LLL:EXT:sk_supersized_gallery/Resources/Private/Language/locallang_db.xlf:tx_sksupersizedgallery_domain_model_supersizedgallery',
		'label' => 'title',
		'tstamp' => 'tstamp',
		'crdate' => 'crdate',
		'cruser_id' => 'cruser_id',
		'dividers2tabs' => TRUE,

		'versioningWS' => 2,
		'versioning_followPages' => TRUE,
		'origUid' => 't3_origuid',
		'languageField' => 'sys_language_uid',
		'transOrigPointerField' => 'l10n_parent',
		'transOrigDiffSourceField' => 'l10n_diffsource',
		'delete' => 'deleted',
		'enablecolumns' => array(
			'disabled' => 'hidden',
			'starttime' => 'starttime',
			'endtime' => 'endtime',
		),
		'searchFields' => 'title,items,',
		'dynamicConfigFile' => \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::extPath($_EXTKEY) . 'Configuration/TCA/SupersizedGallery.php',
		'iconfile' => \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::extRelPath($_EXTKEY) . 'Resources/Public/Icons/tx_sksupersizedgallery_domain_model_supersizedgallery.gif'
	),
);

\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addLLrefForTCAdescr('tx_sksupersizedgallery_domain_model_item', 'EXT:sk_supersized_gallery/Resources/Private/Language/locallang_csh_tx_sksupersizedgallery_domain_model_item.xlf');
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::allowTableOnStandardPages('tx_sksupersizedgallery_domain_model_item');
$TCA['tx_sksupersizedgallery_domain_model_item'] = array(
	'ctrl' => array(
		'title'	=> 'LLL:EXT:sk_supersized_gallery/Resources/Private/Language/locallang_db.xlf:tx_sksupersizedgallery_domain_model_item',
		'label' => 'title',
		'tstamp' => 'tstamp',
		'crdate' => 'crdate',
		'cruser_id' => 'cruser_id',
		'dividers2tabs' => TRUE,

		'versioningWS' => 2,
		'versioning_followPages' => TRUE,
		'origUid' => 't3_origuid',
		'languageField' => 'sys_language_uid',
		'transOrigPointerField' => 'l10n_parent',
		'transOrigDiffSourceField' => 'l10n_diffsource',
		'delete' => 'deleted',
		'enablecolumns' => array(
			'disabled' => 'hidden',
			'starttime' => 'starttime',
			'endtime' => 'endtime',
		),
		'searchFields' => 'title,image,',
		'dynamicConfigFile' => \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::extPath($_EXTKEY) . 'Configuration/TCA/Item.php',
		'iconfile' => \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::extRelPath($_EXTKEY) . 'Resources/Public/Icons/tx_sksupersizedgallery_domain_model_item.gif'
	),
);

?>