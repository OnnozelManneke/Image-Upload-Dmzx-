<?php
/**
*
* @package phpBB Extension - Image Upload
* @copyright (c) 2017 dmzx - https://www.dmzx-web.net
* @license http://opensource.org/licenses/gpl-2.0.php GNU General Public License v2
*
*/

if (!defined('IN_PHPBB'))
{
	exit;
}

if (empty($lang) || !is_array($lang))
{
	$lang = [];
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
// ’ » “ ” …
//

$lang = array_merge($lang, [
	'IMAGEUPLOAD_UPLOAD'						=> 'Img-Upload',
	'IMAGEUPLOAD_UPLOAD_SECTION'				=> 'Afbeelding Upload sectie',
	'IMAGEUPLOAD_UPLOAD_MESSAGE'				=> 'Upload hier je afbeelding. (Let op, deze folder wordt geledigd. En alle bestanden worden gelogd.)',
	'IMAGEUPLOAD_NOT_ENABELD'					=> 'Afbeelding Upload is niet ingeschakeld',
	'IMAGEUPLOAD_NEW_DOWNLOAD_SIZE'				=> 'De maximum grootte van het bestand is <strong>%1$s %2$s</strong>! Als gevolg van de upload tijd die je nodig zou kunnen hebben, kan deze waarde lager zijn!',
	'IMAGEUPLOAD_NO_FILENAME'					=> 'Je moet een bestand toevoegen die behoord aan je upload.',
	'IMAGEUPLOAD_CURRENT_VERSION'				=> 'Versie',
	'IMAGEUPLOAD_NEW_FILENAME'					=> 'Bestandsnaam',
	'IMAGEUPLOAD_SUCCEEDED'						=> 'Upload geslaagd!',
	'IMAGEUPLOAD_DIRECT_LINK'					=> 'Directe link',
	'IMAGEUPLOAD_URL_LINK'						=> 'URL',
	'IMAGEUPLOAD_IMG_LINK'						=> 'IMG',
	'IMAGEUPLOAD_URLIMG_LINK'					=> 'URL-IMG',
	'IMAGEUPLOAD_BY'							=> 'Afbeelding Upload door',
	'IMAGEUPLOAD_COPY'							=> 'kopieer',
	'IMAGEUPLOAD_UPLOADED_IMAGES'				=> 'Jouw geüploade afbeeldingen',
	'IMAGEUPLOAD_POSTINGPAGE'					=> 'Hier vind je jouw geüploade afbeeldingen terug, klik op de afbeeldingen voor een voorbeeld, sleep en plaats in het post gedeelte.',
	'IMAGEUPLOAD_INDEXPAGE'						=> 'Hier vind je jouw geüploade afbeeldingen, klik op de afbeeldingen voor een voorbeeld. Sleep en laat los.',
	'IMAGEUPLOAD_INDEXPAGE_CHAT'				=> 'Hier vind je jouw geüploade afbeeldingen, klik op de afbeeldingen voor een voorbeeld. Sleep en laat los of klik op de knop om direct te posten in mChat.',
	'IMAGEUPLOAD_UPC_INDEX'						=> 'Bekijk uw geüploade afbeeldingen op de indexpagina',
	'IMAGEUPLOAD_COLLAPSIBLE_CATEGORIES_TITLE'			=> [
		0 => 'Hide image upload',
		1 => 'Show image upload',
	],
	'IMAGEUPLOAD_UCP_DELETE_IMAGES'				=> 'Verwijder afbeelding',
	'IMAGEUPLOAD_UCP_DELETED_IMAGES'			=> 'Afbeelding verwijderd',
	'IMAGEUPLOAD_PAGE_RETURN'					=> 'Terugkeren naar geüploade afbeeldingen',
	'IMAGEUPLOAD_DIRECTORY_FAIL'				=> 'Fout: directory <strong>%s</strong> is niet beschrijfbaar!',
	'IMAGEUPLOAD_IMAGES_PAGINATION'		=>	[
		1 => '%s image',
		2 => '%s images',
	],
	'IMAGEUPLOAD_INSERT_IMAGE'					=> 'Voeg afbeelding in',
	'IMAGEUPLOAD_INSERT_MCHAT_IMAGE'			=> 'Afbeelding invoegen in mChat',
	'IMAGEUPLOAD_MULTI_UPLOAD_EXPLAIN' 			=> 'Sectie voor het uploaden van meerdere afbeeldingen.<br>Geüploade afbeeldingen worden automatisch aan uw geüploade afbeeldingen toegevoegd.<br>Afbeeldingen die groter zijn dan de maximale grootte, worden niet geüpload.<br>Meerdere geüploade afbeeldingen geven geen link of voorbeeld weer.',
	'IMAGEUPLOAD_MULTI_UPLOAD_DRAG' 			=> 'Sleep uw bestanden hier naartoe',
	'IMAGEUPLOAD_MULTI_UPLOAD_BROWSE' 			=> 'Of blader',
	'IMAGEUPLOAD_CLOSED'						=> 'Sluit',
]);
