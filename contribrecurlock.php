<?php

require_once 'contribrecurlock.civix.php';
use CRM_Contribrecurlock_ExtensionUtil as E;

/**
 * Implements hook_civicrm_config().
 *
 * @link http://wiki.civicrm.org/confluence/display/CRMDOC/hook_civicrm_config
 */
function contribrecurlock_civicrm_config(&$config) {
  _contribrecurlock_civix_civicrm_config($config);
}

/**
 * Implements hook_civicrm_install().
 *
 * @link http://wiki.civicrm.org/confluence/display/CRMDOC/hook_civicrm_install
 */
function contribrecurlock_civicrm_install() {
  _contribrecurlock_civix_civicrm_install();
}

/**
 * Implements hook_civicrm_enable().
 *
 * @link http://wiki.civicrm.org/confluence/display/CRMDOC/hook_civicrm_enable
 */
function contribrecurlock_civicrm_enable() {
  _contribrecurlock_civix_civicrm_enable();
}

// --- Functions below this ship commented out. Uncomment as required. ---

/**
 * Implements hook_civicrm_preProcess().
 *
 * @link http://wiki.civicrm.org/confluence/display/CRMDOC/hook_civicrm_preProcess
 */
// function contribrecurlock_civicrm_preProcess($formName, &$form) {

// }

/**
 * Implements hook_civicrm_navigationMenu().
 *
 * @link http://wiki.civicrm.org/confluence/display/CRMDOC/hook_civicrm_navigationMenu
 */
// function contribrecurlock_civicrm_navigationMenu(&$menu) {
//   _contribrecurlock_civix_insert_navigation_menu($menu, NULL, array(
//     'label' => E::ts('The Page'),
//     'name' => 'the_page',
//     'url' => 'civicrm/the-page',
//     'permission' => 'access CiviReport,access CiviContribute',
//     'operator' => 'OR',
//     'separator' => 0,
//   ));
//   _contribrecurlock_civix_navigationMenu($menu);
// }
