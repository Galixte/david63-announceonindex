<?php
/**
 *
 * Announcements on index. An extension for the phpBB Forum Software package.
 * French translation by Galixte (http://www.galixte.com)
 *
 * @copyright (c) 2018 david63
 * @license GNU General Public License, version 2 (GPL-2.0-only)
 *
 */

/**
 * DO NOT CHANGE
 */
if (!defined('IN_PHPBB'))
{
	exit;
}

if (empty($lang) || !is_array($lang))
{
	$lang = array();
}

// DEVELOPERS PLEASE NOTE
//
// All language files should use UTF-8 as their encoding and the files must not contain a BOM.
//
// Placeholders can now contain order information, e.g. instead of
// 'Page %s of %s' you can (and should) write 'Page %1$s of %2$s', this allows
// translators to re-order the output of data while ensuring it remains correct
//
// You do not need this where single placeholders are used, e.g. 'Message %d' is fine
// equally where a string contains only two placeholders which are used to wrap text
// in a url you again do not need to specify an order e.g., 'Click %sHERE%s' is fine
//
// Some characters you may want to copy&paste:
// ’ « » “ ” …
//

$lang = array_merge($lang, array(
	'ALLOW_EVENTS'					=> 'Autoriser les évènements du style',
	'ALLOW_EVENTS_EXPLAIN'			=> 'Permet l’utilisation des évènements du style dans les annonces.<br />Information : il peut être utile de désactiver cette option si d’autres évènements du style sont la source de problèmes.',
	'ALLOW_GUESTS'					=> 'Autoriser les invités à voir les annonces',
	'ALLOW_GUESTS_EXPLAIN'			=> 'Permet aux invités de lire les annonces affichées sur la page de l’index du forum.',

	'ANNOUNCE_AVATAR'				=> 'Afficher l’avatar de l’auteur du dernier message',
	'ANNOUNCE_AVATAR_SIZE'			=> 'Dimensions de l’avatar',
	'ANNOUNCE_AVATAR_SIZE_EXPLAIN'	=> 'Permet de saisir les dimensions de l’avatar de l’auteur du dernier message.',
	'ANNOUNCE_ON_INDEX_ENABLE'		=> 'Activer les annonces',
	'ANNOUNCE_ON_INDEX_EXPLAIN' 	=> 'Permet de gérer l’affichage des annonces sur la page de l’index du forum.',
	'ANNOUNCE_ON_INDEX_OPTIONS'		=> 'Options des annonces',

	'SHOW_ANNOUNCEMENTS'			=> 'Afficher les annonces',
	'SHOW_ANNOUNCEMENTS_EXPLAIN'	=> 'Permet d’afficher toutes les annonces sur la page de l’index du forum.',
	'SHOW_GLOBAL_ICON'				=> 'Afficher l’icône globale de sujet des annonces globales',
	'SHOW_GLOBAL_ICON_EXPLAIN'		=> 'Permet d’afficher l’icône globale de sujet pour les annonces globales.<br /><strong>Information : cette option doit être désactivé si aucune icône globale de sujet n’est associée au style.</strong>',
	'SHOW_GLOBALS'					=> 'Afficher les annonces globales',
	'SHOW_GLOBALS_EXPLAIN'			=> 'Permet d’afficher toutes les annonces globales sur la page de l’index du forum.',

	'VERSION'						=> 'Version',
));
