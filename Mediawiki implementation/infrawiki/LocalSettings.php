<?php
# This file was automatically generated by the MediaWiki 1.18.0
# installer. If you make manual changes, please keep track in case you
# need to recreate them later.
#
# See includes/DefaultSettings.php for all configurable settings
# and their default values, but don't forget to make changes in _this_
# file, not there.
#
# Further documentation for configuration settings may be found at:
# http://www.mediawiki.org/wiki/Manual:Configuration_settings

# Protect against web entry
if ( !defined( 'MEDIAWIKI' ) ) {
	exit;
}

## Uncomment this to disable output compression
# $wgDisableOutputCompression = true;

$wgSitename      = "InfraWiki";

## The URL base path to the directory containing the wiki;
## defaults for all runtime URL paths are based off of this.
## For more information on customizing the URLs please see:
## http://www.mediawiki.org/wiki/Manual:Short_URL
$wgScriptPath       = "/infrawiki";
$wgScriptExtension  = ".php";

#Total search hint
$wgCountTotalSearchHits = true;


## The protocol and server name to use in fully-qualified URLs
$wgServer           = "http://localhost";

## The relative URL path to the skins directory
$wgStylePath        = "$wgScriptPath/skins";

## The relative URL path to the logo.  Make sure you change this from the default,
## or else you'll overwrite your logo when you upgrade!
$wgLogo             = "$wgStylePath/common/images/wiki2.png";

## UPO means: this is also a user preference option

$wgEnableEmail      = true;
$wgEnableUserEmail  = true; # UPO

$wgEmergencyContact = "apache@localhost";
$wgPasswordSender   = "apache@localhost";

$wgEnotifUserTalk      = true; # UPO
$wgEnotifWatchlist     = false; # UPO
$wgEmailAuthentication = true;

## Database settings
$wgDBtype           = "mysql";
$wgDBserver         = "localhost";
$wgDBname           = "my_wiki";
$wgDBuser           = "root";
$wgDBpassword       = "";

/* Database authentication credentials */
$wgDBadminuser      = 'root';
$wgDBadminpassword  = '';
 
/* Whether to enable the profileinfo.php script. */
$wgEnableProfileInfo = false;

# MySQL specific settings
$wgDBprefix         = "wiki_";

# MySQL table options to use during installation or update
$wgDBTableOptions   = "ENGINE=InnoDB, DEFAULT CHARSET=binary";

# Experimental charset support for MySQL 4.1/5.0.
$wgDBmysql5 = false;

## Shared memory settings
$wgMainCacheType    = CACHE_NONE;
$wgMemCachedServers = array();

## To enable image uploads, make sure the 'images' directory
## is writable, then set this to true:
$wgEnableUploads  = true;
#$wgUseImageMagick = true;
#$wgImageMagickConvertCommand = "/usr/bin/convert";

# InstantCommons allows wiki to use images from http://commons.wikimedia.org
$wgUseInstantCommons  = false;

## If you use ImageMagick (or any other shell command) on a
## Linux server, this will need to be set to the name of an
## available UTF-8 locale
$wgShellLocale = "en_US.utf8";

## If you want to use image uploads under safe mode,
## create the directories images/archive, images/thumb and
## images/temp, and make them all writable. Then uncomment
## this, if it's not already uncommented:
#$wgHashedUploadDirectory = false;

## Set $wgCacheDirectory to a writable directory on the web server
## to make your wiki go slightly faster. The directory should not
## be publically accessible from the web.
#$wgCacheDirectory = "$IP/cache";

# Site language code, should be one of the list in ./languages/Names.php
$wgLanguageCode = "id";

$wgSecretKey = "79c6f7166d91106171f3c97c2fdfe9fe3e28dd8e68fac9862f22bb552a800da2";

# Site upgrade key. Must be set to a string (default provided) to turn on the
# web installer while LocalSettings.php is in place
$wgUpgradeKey = "9efd4d044f89324";

## Default skin: you can change the default skin. Use the internal symbolic
## names, ie 'standard', 'nostalgia', 'cologneblue', 'monobook', 'vector':
$wgDefaultSkin = "vector";

## For attaching licensing metadata to pages, and displaying an
## appropriate copyright notice / icon. GNU Free Documentation
## License and Creative Commons licenses are supported so far.
$wgRightsPage = ""; # Set to the title of a wiki page that describes your license/copyright
$wgRightsUrl  = "";
$wgRightsText = "";
$wgRightsIcon = "";
# $wgRightsCode = ""; # Not yet used

# Path to the GNU diff3 utility. Used for conflict resolution.
$wgDiff3 = "";

# Query string length limit for ResourceLoader. You should only set this if
# your web server has a query string length limit (then set it to that limit),
# or if you have suhosin.get.max_value_length set in php.ini (then set it to
# that value)
$wgResourceLoaderMaxQueryLength = -1;

# The following permissions were set based on your choice in the installer
$wgGroupPermissions['*']['edit'] = false;

# Enabled Extensions. Most extensions are enabled by including the base extension file here
# but check specific extension documentation for more details
# The following extensions were automatically enabled:
require_once( "$IP/extensions/Gadgets/Gadgets.php" );
require_once( "$IP/extensions/Nuke/Nuke.php" );
require_once( "$IP/extensions/ParserFunctions/ParserFunctions.php" );
require_once( "$IP/extensions/Renameuser/Renameuser.php" );
require_once( "$IP/extensions/Vector/Vector.php" );
require_once( "$IP/extensions/WikiEditor/WikiEditor.php" );


# End of automatically generated settings.
# Add more configuration options below.

#add favicon
$wgFavicon = "$wgScriptPath/favicon.ico";

#add semantic mediawiki extension
 require_once( "$IP/extensions/Validator/Validator.php" );
 include_once( "$IP/extensions/SemanticMediaWiki/SemanticMediaWiki.php" );
 include_once("$IP/extensions/SemanticForms/SemanticForms.php");
 enableSemantics('localhost');
 
# GeSHi Setting
require_once("$IP/extensions/SyntaxHighlight_GeSHi/SyntaxHighlight_GeSHi.php");

# File extension setting
$wgFileExtensions[] = 'pdf';

# TreeAndMenu Setting
require_once("$IP/extensions/TreeAndMenu/TreeAndMenu.php");

# GetUserName Setting
require_once("$IP/extensions/GetUserName/GetUserName.php");

#Article Feedback
require_once( "$IP/extensions/ClickTracking/ClickTracking.php" );
require_once( "$IP/extensions/EmailCapture/EmailCapture.php" );
require_once( "$IP/extensions/PrefSwitch/PrefSwitch.php" );
require_once( "$IP/extensions/SimpleSurvey/SimpleSurvey.php" );
require_once( "$IP/extensions/ArticleFeedback/ArticleFeedback.php" );

# RatingBar
require_once("$IP/extensions/RatingBar/W4g_rb.php");

#TitleKey to enable search suggest
require_once("$IP/extensions/TitleKey/TitleKey.php");
$wgEnableMWSuggest = true;
