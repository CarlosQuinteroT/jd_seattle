<?php

/**
 * @package   Astroid Framework
 * @author    JoomDev https://www.joomdev.com
 * @copyright Copyright (C) 2009 - 2018 JoomDev.
 * @license http://www.gnu.org/licenses/gpl-2.0.html GNU/GPLv2 or Later
 */
// No direct access.
defined('_JEXEC') or die;
extract($displayData);

$document = JFactory::getDocument();

$trackingcode = $template->params->get('trackingcode', '');
if (!empty($trackingcode)) {
   $document->addCustomTag($trackingcode);
}
$customcss = $template->params->get('customcss', '');
if (!empty($customcss)) {
   $document->addStyledeclaration($customcss);
}
$customcssfiles = $template->params->get('customcssfiles', '');
if (!empty($customcssfiles)) {
   $customcssfiles = explode("\n", $customcssfiles);
   foreach ($customcssfiles as $customcssfile) {
      if (!empty($customcssfile)) {
         $document->addStyleSheet($customcssfile);
      }
   }
}
$customjs = $template->params->get('customjs', '');
if (!empty($customjs)) {
   $document->addScriptdeclaration($customjs);
}
$customjsfiles = $template->params->get('customjsfiles', '');
if (!empty($customjsfiles)) {
   $customjsfiles = explode("\n", $customjsfiles);
   foreach ($customjsfiles as $customjsfile) {
      if (!empty($customjsfile)) {
         $document->addScript($customjsfile);
      }
   }
}
$beforehead = $template->params->get('beforehead', '');
if (!empty($beforehead)) {
   $document->addScriptdeclaration($beforehead);
}
$beforebody = $template->params->get('beforebody', '');
if (!empty($beforebody)) {
   echo '<script type="text/javascript">'
   . $beforebody
   . '</script>';
}
