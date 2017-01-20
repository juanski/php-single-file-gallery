

		Single File PHP Gallery 4.6.1 (SFPG)

		See END USER LICENSE AGREEMENT for commercial use

		Released: 08-Jan-2016
		http://sye.dk/sfpg/
		By Kenny Svalgaard


____________________________________________________________
WHAT IS IN THIS FILE

 * WHAT IS IN THIS FILE
 * WHAT IS SINGLE FILE PHP GALLERY?
 * END USER LICENSE AGREEMENT / EULA
 * FEATURES
 * IMPORTANT INFORMATION
 * NEWS IN THIS VERSION
 * REQUIREMENTS
 * HOW TO USE / QUICK START
 * TIPS / FAQ
 * SUPPORT / REQUESTS / HELP / CONTACT
 * KNOWN ISSUES
 * CONFIGURATION INFORMATION


____________________________________________________________
WHAT IS SINGLE FILE PHP GALLERY?

Single File PHP Gallery is a web gallery in one single file. All you have to do is copy the script to any directory containing images to make a gallery. Sub directories will be sub galleries. Thumbnails for images and directories are generated automatically. Descriptions for galleries and images can be added by making a simple text file.
Single File PHP Gallery does not require any configuration or programming skills to use.

You can see how it looks in the on-line demo here:

  http://sye.dk/sfpg/


____________________________________________________________
END USER LICENSE AGREEMENT / EULA

For private non commercial use Single File PHP Gallery can be used for free. When used commercially a donation for at least 10$ must be made per domain where it is used.

You are of cause still more than welcome to donate if you like the gallery, even though you only use it privately.

Under no circumstances can Single File PHP Gallery or any part of it be distributed or sold, or be part of another work that is being distributed or sold.

Making a donation:
Domain name must be clearly stated in the donation, otherwise the donation will not grant use of the script under donating conditions. Donations are not refundable.

Use the PayPal donate button on the page for donations:
  http://sye.dk/sfpg/

THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY, FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT.
IN NO EVENT SHALL THE AUTHOR BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM, OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN THE SOFTWARE.


____________________________________________________________
FEATURES

 * Free for private non commercial use
 * Very simple Plug'n'Play like ease of use
 * Uses no Database
 * Automatically creates thumbnails
 * Slideshow option
 * PayPal integration with inventory counter for simple selling
 * Displays EXIF and IPTC information
 * Option to password protect gallery
 * Administrator options to rename, move, delete and create directories, images and files.
 * Rotates images using EXIF information
 * 3D MPO red/cyan anaglyph and stereo image generation
 * Keyboard navigation
 * Option to create and use intermediate preview images
 * Option to add watermark to all images in gallery
 * Supports JPG, JPEG, PNG and GIF
 * Unlimited numbers of sub galleries
 * See configuration information for all features


____________________________________________________________
IMPORTANT INFORMATION

* Make sure NOT to place any content from untrusted sources in the gallery. Code or scripts embedded in files could be sent to the end users, and could be executed.

* The gallery contains an automatic clean-up function that deletes unused files in DATA_ROOT.
  The gallery will clean up files in the DATA_ROOT that are no longer used by the gallery. So make sure not to use the DATA_ROOT for storing anything.
  The clean up routine is activated when viewing a directory where the number of subdirectories, images and/or files have changed since last access to the directory.
  For this to work, PHP needs permission to delete in the DATA_ROOT.

* The gallery contains an option to delete images older than a set number of days. If using this option, make sure to have a backup of all your images in the GALLERY_ROOT.
  For this to work, PHP needs permission to delete in the GALLERY_ROOT.

* The gallery contains an option to allow users to manage directories, images and files from the gallery.
  If using this option, make sure that only administrators have access to the gallery.
  Do not put the gallery unprotected on a public web server with this setting enabled. See the ADMIN option for details.
  For this to work, PHP needs permission to create, modify and delete in the GALLERY_ROOT.


____________________________________________________________
NEWS IN THIS VERSION

* Added option to have thumbnails cropped to a square.
* Fiexd: Description for images not showing when IPTC information is disabled.


____________________________________________________________
REQUIREMENTS

For this gallery to function you will need the following:
* A web server capable of running PHP 5 scripts.
* The PHP GD library (php_gd) installed. See here for information: http://php.net/gd
* PHP write access to server.
* PHP memory limit large enough to contain both full size image and preview/thumb (converted to BMP) See the FAQ section for further information on this.


____________________________________________________________
HOW TO USE / QUICK START

The only thing you have to do is place a copy of the index.php file to any directory of your web.
When this is done all images (jpg, jpeg, png, gif) and files if enabled, in that directory and all sub directories will be shown in the gallery.

By default the script will try to create a folder called "_sfpg_data" in which thumbnails, previews and information is saved. This can be changed using the DATA_ROOT constant. If PHP only have write access in a certain folder, change the DATA_ROOT to point there.


____________________________________________________________
TIPS / FAQ

 * If some or all thumbnails is missing or show up as a red X, the reason could be that the full images is too big for the php-engine to load them into memory. You will then have to do one of the following:
     1. Make the full images smaller
     2. Increase the memory_limit in php.ini. (If the memory_limit is 8MB, it gives a maximum image size on about 1600*1600)
 * If no thumbnails or images show, it could be that the script does not have the php tag "<?php" as the very first. The php tag must come before any other output. A blank line above or even a space before the tag will render the script useless. This can also happen if the auto_prepend_file option in php is used.
 * Single File PHP Gallery does not have to be called index.php, you can rename it to whatever you like.


____________________________________________________________
SUPPORT / REQUESTS / HELP / CONTACT

If you need help getting Single File PHP Gallery to work, then please start by running the SFPG TEST script file on the server. The SFPG TEST script is a normal PHP page, and you can download it from the Single File PHP Gallery page. The script tests to see if the requirements for the script to run are met, and generates an output explaining what could be the issue. If the output from the script does not provide enough information for you to make the script work, then please use the contact form on the Single File PHP Gallery page. Describe the issue you are having and also copy/paste the information from the SFPG TEST script along with the description.

If you have comments, questions, requests, greetings etc. regarding Single File PHP Gallery, please use the contact form on my page.

  http://sye.dk/


____________________________________________________________
KNOWN ISSUES

 * If a thumbnail for a given image exists, it will be used. So remember to delete old thumbnails if you make changes to the way thumbnails are created. If, for an example, you change the size of thumbnails, you will need to delete the old ones already saved, in order to have the changes apply, and have new thumbnails created. This is by design, and will not be fixed.
 * First access to a gallery containing many images or directories, will take a long time to load, because the script have to create thumbnails for all the images. If the script timeout, the rest of the folders will be left without thumbnails and information. Then just refresh the page and the script will continue from where it came. The folder where the script stopped might not have a thumbnail. If this is so just click the gallery, and the thumb will be created. This is by design.
 * Images smaller than preview size will still have preview size images created, and will also have the option to load full-size, even though they is the same size.
 * Single File PHP Gallery version 4.x is a stand-alone gallery. It is not designed to be included on existing pages. This is by design.
 * Editing description for images, files or directories will remove line breaks from the description file. HTML line breaks made with <br> will of cause still be effective when viewing the gallery.


____________________________________________________________
CONFIGURATION INFORMATION

The script can be edited in a plain text editor. Open the index.php and you will find the configuration section at the top of the script.

Refer to the descriptions below for configuration.


____________________________________________________________
define('GALLERY_ROOT', './');

Set the path of the gallery root, where the images and sub directories containing images is placed.
The default value is './' which is the directory where the script is placed.
If SHOW_FILES is TRUE, the files will only be downloadable if a relative path like the one in example 1 is used.

GALLERY_ROOT should always end with a slash like the examples below.

Example 1: './images/'
Example 2: $_SERVER[DOCUMENT_ROOT].'/gallery/images/'
Example 3: '/users/bob_the_user/wwwroot/images/my_pictures/'


____________________________________________________________
define('DATA_ROOT', './_sfpg_data/');

Set the path to where thumbnails and other data should be saved. PHP needs to have write access to this directory. If PHP only have write access in a certain directory, change the DATA_ROOT to point there.

By default DATA_ROOT points to a directory called _sfpg_data in the same directory where the script is placed. If the directory do not exists, the script will try to create it. The _sfpg_data directory is by default excluded from the gallery, using the $dir_exclude option.

DATA_ROOT should always end with a slash like the examples below.

Example 1: './thumbs/'
Example 2: $_SERVER[DOCUMENT_ROOT].'/gallery/thumbs/'
Example 3: '/users/bob_the_user/data/sfpg_thumbs/'


____________________________________________________________
define('SECURITY_PHRASE', '');

Manually set, or have the gallery generate a random phrase. The SECURITY_PHRASE is used to make the gallery URL's tamper resistant to avoid creative or malicious use.

If the gallery is accessed and this option is not set, then the gallery will insert a random string of chars into the script.

If the script can't edit itself, a text is displayed, explaining that the SECURITY_PHRASE have to be set manually.

INFO: PHP needs permissions to edit the script itself, for the script to set the SECURITY_PHRASE automatically.
INFO: Data stored in the DATA_ROOT uses this phrase. So if this option is changed, the contents of DATA_ROOT directory must be deleted. The data will then regenerate automatically. Also if this option is changed all URLs/links containing the sfpg parameter will end up in the root of the gallery.


____________________________________________________________
define('PASSWORD', '');

Set the password that will give access to the gallery.
Set to '' to not password protect the gallery.

If set to anything but '', the gallery will be protected by password.
The gallery uses PHP sessions when logging in, which require the client to accept cookies. If the client do not accept cookies, the user will be prompted for password over and over again.
Entering a wrong password or not accepting cookies will simply display the login form again. No error is displayed.

IMPORTANT: Know that images can, and most likely will, be cached by the browser. So make sure to only access the gallery when using a "Private Window", "Incognito", "InPrivate Browsing" or what ever your browser calls it when not logging and saving anything.
IMPORTANT: Know that unless you are using a HTTPS connection, the entire content of the gallery including the password when you login, text and images are sent unencrypted over the internet.
IMPORTANT: Remember that the password is stored in the gallery script in clear text, so anyone with access to the files on the server, can read it.


____________________________________________________________
define('ADMIN', FALSE);

** WARNING ** SETTING THIS OPTION TO ANYTHING OTHER THAN FALSE WILL ALLOW USERS TO DELETE, RENAME, MOVE and CREATE DIRECTORIES, IMAGES AND FILES IN THE GALLERY_ROOT **

Set to FALSE to remove and disable the administrator functions.
Set to TRUE to allow users to access the administrator menu, where the following options are available:
 1. Rename, move, and delete images and files.
 2. Rename, move, delete and create directories.
 3. Create, edit and remove descriptions for directories, images and files.
 4. Create, edit and remove PayPal selling information for images.

IMPORTANT: Do not put the gallery unprotected on a public server with this setting enabled.
IMPORTANT: Make sure that only administrators have access to the gallery, when this option is enabled (set to TRUE).

The PASSWORD option can be used to protect the gallery, when this setting is enabled.

If you want to have a public gallery and also want to allow administrators to login and use the admin functions, do like this:
 1. Configure the public gallery as you want (remember to set the SECURITY_PHRASE to a random string of chars). Leave the ADMIN setting to FALSE, and the PASSWORD setting to '', which will make it accessible for all.
 2. Make a copy of the public gallery, for the administrators to use. Name it as you like. The important thing is that the SECURITY_PHRASE is the same in both copies.
 3. Set a good, secure and unique password in the PASSWORD option, in the administrator copy of the gallery.
 4. Set ADMIN to TRUE, in the administrator copy of the gallery.
 5. Now only link to the public gallery on your page. But use the administrator copy to login and administer as needed.

When this option is set to TRUE, the "Admin" button will be shown in the bottom menu. Click it to enter administrator menu.

Clicking an element (directory, image or file), when in the administrator menu, will select the element (will be highlighted). Clicking a selected elements will deselected the element again.

INFO: Deleting a directory will also delete all files inside the directory - Keep in mind that there could be files that are not shown in the gallery.
INFO: Deleting, moving or renaming a file will also, if they exists, delete, move or rename the thumbnail (defined by FILE_THUMB_EXT) and the description (defined by DESC_EXT) for the file.
INFO: Deleting, moving or renaming an image will also, if they exists, delete, move or rename the description file (defined by DESC_EXT) and the selling file (defined by PAYPAL_EXTENSION) for the image.

To delete elements from the gallery:
 1. Click the "Admin" button.
 2. Click the elements that should be deleted.
 3. Click "Delete".
 4. Confirm.

To move elements in the gallery:
 1. Click the "Admin" button.
 2. Click the elements that should be moved.
 3. Click "Move" (a tree view of the directories in the GALLERY_ROOT will be shown).
 4. Browse to the directory you want to move the selected elements.
 5. Confirm.

To rename elements from the gallery:
 1. Click the "Admin" button.
 2. Click the element (only one) that should be renamed.
 3. Click "Rename".
 4. Enter new name.
 5. Confirm.

To create a new directory:
 1. Click the "Admin" button.
 2. Click "Create Directory".
 3. Enter new directory name.
 4. Confirm.

INFO: Using these options require PHP to have permission to create, edit and delete in the GALLERY_ROOT.


____________________________________________________________
define('DIR_NAME_FILE', '_name.txt');

Set the name of the file that can be placed in every directory of the gallery.
If a file with the given name is found, the first line of text from the file will be used instead of the directory name. Directories will still be sorted after the actual name.

IMPORTANT: The file name in this setting must end with the extension in DESC_EXT. Dafault value for DESC_EXT is '.txt'.

TIP 1: This is useful if you would like to use chars that cannot be used in directory names.
TIP 2: See SORT_DIVIDER for an easy way of sorting directories, images and files.


____________________________________________________________
define('DIR_THUMB_FILE', '_image.jpg');

Set the name of the image that can be placed in every directory in the gallery.
If an image with the given name is found, it will be used as thumbnail for that directory. The image will not be displayed inside the directory.

You can also place an image with the given name in the ICONS_DIR, to have it used as thumb on all directories that do not have images inside.

TIP 1: This is very useful when having directories with only files of non-supported image types for download.
TIP 2: You do not have to resize the image, it will be resized like all other images in the gallery.


____________________________________________________________
define('DIR_DESC_FILE', '_desc.txt');

Set the name of the description file that can be placed in every directory of the gallery (including the GALLERY_ROOT).
If a file with the given name is found, the text will be shown in the gallery. Text can include HTML tags.

IMPORTANT: The file name in this setting must end with the extension in DESC_EXT. Default value for DESC_EXT is '.txt'.
INFO: See DIR_DESC_IN_GALLERY and DIR_DESC_IN_INFO for placing the description in the gallery.


____________________________________________________________
define('DIR_BANNER_FILE', '_banner.txt');

Set the name of the banner file that can be placed in every directory of the gallery (including the GALLERY_ROOT).
If a file with the given name is found, the text in the file will be shown in the gallery, above the thumbnail boxes. Text can include HTML tags.

If the TEXT_BANNER option is defined, and the DIR_BANNER_FILE is found in a directory, only the DIR_BANNER_FILE text is displayed in the gallery.


____________________________________________________________
define('DIR_DESC_IN_GALLERY', TRUE);

Set to TRUE to have description shown in the gallery as the first element, using a thumbnail box that is twice as wide as normal thumbnail boxes.
Set to FALSE to not show description in the gallery.


____________________________________________________________
define('DIR_DESC_IN_INFO', TRUE);

Set to TRUE to have description shown in the information box.
Set to FALSE to not have description shown in the information box.


____________________________________________________________
define('DIR_SORT_REVERSE', FALSE);

Set to TRUE to sort directories in reverse order (highest to lowest).
Set to FALSE to sort directories in normal order (lowest to highest).

See also DIR_SORT_BY_TIME and SORT_ALL_NATURAL for other sorting options for dirs.


____________________________________________________________
define('DIR_SORT_BY_TIME', FALSE);

Set to TRUE to sort directories by modified time.
Set to FALSE to sort directories by name.

The modified time of a directory is normally updated when changes is made to the contents of the given directory. Even deleting a file or image can make the directory "new". (This might differ from platform to platform).

See also DIR_SORT_REVERSE and SORT_ALL_NATURAL for other sorting options for dirs.


____________________________________________________________
$dir_exclude = array('_sfpg_data', '_sfpg_icons');

Set an array of directory names that should not be shown in the gallery.

Directory names should be entered in lower case.
Exclusion is not case sensitive. If you exclude 'oldimages', all the following directories will all be excluded: 'OldImages', 'oldImages', 'OLDIMAGES' and so on.

Example 1: array('cgi-bin');
Example 2: array('cgi-bin', 'include', 'old_images');

See also $file_exclude and $file_ext_exclude for other ways of excluding elements from the gallery.


____________________________________________________________
define('DIR_EXCLUDE_REGEX', '');

Use regular expressions to exclude directories from gallery view.
See here for syntax: http://php.net/manual/en/pcre.pattern.php


____________________________________________________________
define('SHOW_IMAGE_EXT', FALSE);

Set to TRUE to show image name extensions.
Set to FALSE to not show image name extensions.


____________________________________________________________
define('IMAGE_SORT_REVERSE', FALSE);

Set to TRUE to sort images in reverse order (highest to lowest).
Set to FALSE to sort images in normal order (lowest to highest).

See also IMAGE_SORT_BY_TIME, SORT_ALL_NATURAL and IMAGE_EXIF_TIME for other sorting options for images.


____________________________________________________________
define('IMAGE_SORT_BY_TIME', FALSE);

Set to TRUE to sort images by modified time.
Set to FALSE to sort images by name.

See also IMAGE_SORT_REVERSE, SORT_ALL_NATURAL and IMAGE_EXIF_TIME for other sorting options for images.


____________________________________________________________
define('IMAGE_EXIF_TIME', FALSE);

Set to TRUE to have images sorted by time found in EXIF, when sorting images by time.
Set to FALSE to use filetime when sorting images by time.

The EXIF information, including EXIF time, is extracted when the thumbnails are generated, so sorting images by EXIF time will first be effective from second view of the gallery.


____________________________________________________________
define('ROTATE_IMAGES', TRUE);

Set to TRUE to have images rotated according to the orientation information in EXIF.
Set to FALSE to not rotate images.

Rotated images are saved on the server in the DATA_ROOT. This could take up a lot of disk space.
If images have been saved on server you will have to delete them in order to have changes to this setting apply.
Rotating images will require twice the amount of memory, than that for generating thumbs.


____________________________________________________________
define('IMAGE_JPEG_QUALITY', 90);

Set the quality for jpeg images. Range from 0 (worst quality and smallest file size) to 100 (best quality and largest file size).
If images have been saved on server you will have to delete them in order to have changes to this setting apply.
This setting is used for full size and preview images. These are saved on server after being rotated or watermarks have been added.


____________________________________________________________
define('IMAGE_EXCLUDE_REGEX', '');

Use regular expressions to exclude images from gallery view.
See here for syntax: http://php.net/manual/en/pcre.pattern.php


____________________________________________________________
define('SHOW_FILES', TRUE);

Set to TRUE to show non-image files and images of non-supported types as download links in the gallery.
Set to FALSE to only show images of supported types in the gallery.

TIP: Use $file_exclude, $file_ext_exclude and FILE_EXCLUDE_REGEX to exclude files you do not want to have displayed.


____________________________________________________________
define('SHOW_FILE_EXT', TRUE);

Set to TRUE to show file name extensions.
Set to FALSE to not show file name extensions.


____________________________________________________________
define('FILE_IN_NEW_WINDOW', TRUE);

Set to TRUE to have files open in a pop-up window.
Set to FALSE to have files open in the same window.


____________________________________________________________
define('FILE_THUMB_EXT', '.jpg');

Set the extension of file thumbnail files. Place an image with the same name as a file with the set extension added to the file name, to have the image used as a thumbnail for the file. The image will be resized like any other thumbnail in the gallery.

INFO 1: Can be set to any of the supported image types.
INFO 2: Case sensitivity in this constant follows the case sensitivity of the server on which the script runs.
INFO 3: Extensions should be entered with a dot in front, like the default and the example below.

Example: If set to '.jpg' and one of the files is named 'In_The_Snow.avi'. You can then make an image called 'In_The_Snow.avi.jpg', and place it in the same folder as the image.


____________________________________________________________
define('FILE_THUMB_DEFAULT', '');

Set the name of the file that will be used as thumbnail for files that do not have a thumbnail file of its own, and which extension do not match any of the files in the ICONS_DIR.
The FILE_THUMB_DEFAULT image have to be placed in the ICONS_DIR. 


____________________________________________________________
define('FILE_SORT_REVERSE', FALSE);

Set to TRUE to sort files in reverse order (highest to lowest).
Set to FALSE to sort files in normal order (lowest to highest).

See also FILE_SORT_BY_TIME and SORT_ALL_NATURAL for other sorting options for files.


____________________________________________________________
define('FILE_SORT_BY_TIME', FALSE);

Set to TRUE to sort files by modified time.
Set to FALSE to sort files by name.

See also FILE_SORT_REVERSE and SORT_ALL_NATURAL for other sorting options for files.


____________________________________________________________
$file_exclude = array();

Set an array of file names that should not be shown in the gallery.

INFO 1: File names should be entered in lower case.
INFO 2: Exclusions works only on non-supported file types.
INFO 3: Exclusion is not case sensitive. If you exclude "readme.txt", all the following files will be excluded: "readme.txt", "ReadMe.Txt","README.TXT" and so on.

Example 1: array("readme.txt");
Example 2: array("readme.txt", "admin.php", "style.css");

See also $file_ext_exclude and $dir_exclude for other ways of excluding elements from the gallery.


____________________________________________________________
$file_ext_exclude = array('.php', '.txt', '.sell');

Set an array of file extensions for files that should not be shown in the gallery.

INFO 1: Extensions should be entered in low case with a dot in front, like the examples below.
INFO 2: Exclusions works only on non-supported file types. You cannot exclude the supported image types.
INFO 3: Exclusion is not case sensitive. If you exclude ".txt", all files with the following extensions will be excluded: ".txt", ".Txt", ".TXT" and so on.

The default exclusions are there because:
'.php' to not show the gallery it self, or other php files.
'.txt' to not show text files, as they by default are used for description.
'.sell' to not show the PayPal sell files. See PayPal options for more information on that.

Example 1: array(".php");
Example 2: array(".php", ".txt", ".inc", ".html");

Also see $file_exclude, FILE_EXCLUDE_REGEX, $dir_exclude and DIR_EXCLUDE_REGEX for other ways of excluding elements from the gallery.


____________________________________________________________
define('FILE_EXCLUDE_REGEX', '');

Use regular expressions to exclude files from gallery view.
See here for syntax: http://php.net/manual/en/pcre.pattern.php


____________________________________________________________
define('ICONS_DIR', '_sfpg_icons/');

Set the name of the directory where images to be used as thumbs for file types can be placed. If changed remember to also change the $dir_exclude option to not show it inside the gallery.
The directory must be placed inside the GALLERY_ROOT. The directory needs to end with a slash, like the default one: '_sfpg_icons/'.

The files in this directory must be the type defined by the option FILE_THUMB_EXT, by default: '.jpg'.
The name of the files should be the name of the extensions that they should be used for.
For an example if a file named "iso.jpg" is placed in this directory, all files ending with .iso will be given this image as thumb.

INFO: All images in ICONS_DIR should be entered in lower case, like the example above.
INFO: This option is optional. If not used, the directory does not need to exist.


____________________________________________________________
define('LINK_BACK', '');

Set a URL to show a button that will function as a link to the set URL. This can be used as a "Back to my site" button.
Set to '' to not show the button.

Example 1: Set to '/' to have button take you to the root of your web.
Example 2: Set to 'http://www.yoursite.com/page.html'.

See TEXT_LINK_BACK for the text on the button.


____________________________________________________________
define('CHARSET', 'utf-8');

Set the charset to be used. In order to have special chars display correctly, a charset that support the chars used in the gallery, must be set.

Below is a short list of charsets that can be used (use a search engine on the Internet for others):

Universal Alphabet:        'utf-8'
Western Alphabet:          'iso-8859-1'
Central European Alphabet: 'iso-8859-2'
Latin 3 Alphabet:          'iso-8859-3'
Baltic Alphabet:           'iso-8859-4'
Cyrillic Alphabet:         'iso-8859-5'
Arabic Alphabet:           'iso-8859-6'
Greek Alphabet:            'iso-8859-7'
Hebrew Alphabet:           'iso-8859-8'
Japanese:                  'shift-jis'
Chinese Traditional:       'big5'


____________________________________________________________
define('DATE_FORMAT', 'Day Date Month Year Hour:Min:Sec');

Set the format of the date/time to be used in the gallery.
The following variables can be used:

Day      : Day name. Shown as: Mon, Tue, Wed, Thu, Fri, Sat, Sun
Date     : Day number. Shown as: 1-31
Month    : Month name. Shown as: Jan, Feb, Mar...
Nrmonth  : Month number. Shown as: 1-12
Year     : Year. Shown as: 1960-
Hour     : Hours. Shown as: 00-23
Min      : Minutes. Shown as: 00-59
Sec      : Seconds. Shown as: 00-59


____________________________________________________________
define('DESC_EXT', '.txt');

Set the extension of the description files. Place a file with the same name as an image or file with the set extension added to the image name, to have the text shown with the image or file.

Case sensitivity in this constant follows the case sensitivity of the server on which the script runs.
Extensions should be entered with a dot in front, like the example below.

Example: If set to '.txt' and one of the images is named
         "IMG_10a.jpg". You can then make a file called
         "IMG_10a.jpg.txt", and place it in the same folder as the image.

If SHOW_FILES is set to TRUE you can use $file_ext_exclude to exclude the description files from the view. So if you would like to list .txt but don't want the descriptions files shown, you should set to any other extension that you do not use (feel free to use ".sfpg") and exclude that one using $file_ext_exclude.
	 

____________________________________________________________
define('DESC_NL_TO_BR', FALSE);

Set to TRUE to have line breaks in description files translated to the HTML <br> tag, to act as a line break in the browser.
Set to FALSE to ignore line breaks in description files. To make a line break with this setting, simply add <br> at the end of each line in the description file.


____________________________________________________________
define('SORT_DIVIDER', '--');

Set the string that will function as a divider between the part of the name to sort after and the name to be shown.
SORT_DIVIDER works on directories, images and files.

Example: If you have a directory called "Apples" and one called "Bananas", and would like "Bananas" to be the first one on the list. You could then call them: "001--Bananas" and "002--Apples". The directories will then be listed in the order you like, and only the text after the SORT_DIVIDER string will be shown.


____________________________________________________________
define('SORT_ALL_NATURAL', TRUE);

Set to TRUE to have directories, images and files sorted in a case insensitive "natural order".
Set to FALSE to have elements sorted normally.
See here for information: http://php.net/natcasesort


____________________________________________________________
define('FONT_SIZE', 12);

Set the Font size.


____________________________________________________________
define('UNDERSCORE_AS_SPACE', TRUE);

Set to TRUE to have names shown as spaces.
Set to FALSE to have names shown as is.

Works on directory, image and file names.


____________________________________________________________
define('SHOW_EXIF_INFO', TRUE);

Set to TRUE to have the script extract and show EXIF information like Camera Model, Shutter Speed and Focal Length.
Set to FALSE to not extract and show EXIF information.

INFO: The extraction of information is done when the thumbnail is generated. So changing from FALSE to TRUE requires you to delete the contents of the DATA_ROOT, to have new thumbnails generated.


____________________________________________________________
define('SHOW_IPTC_INFO', TRUE);

Set to TRUE to have the script extract and show IPTC information like Category, Title and Copyright.
Set to FALSE to not extract and show IPTC information.

INFO: The extraction of information is done when the thumbnail is generated. So changing from FALSE to TRUE requires you to delete the contents of the DATA_ROOT, to have new thumbnails generated.


____________________________________________________________
define('SHOW_INFO_BY_DEFAULT', FALSE);

Set to TRUE to have the gallery open the Information box by default, the user can still click the Information button to hide the box.
Set to FALSE to have the gallery wait for the user to click the Information button, before showing the information box.


____________________________________________________________
define('ROUND_CORNERS', 3);

Set the number of pixels that the corners should be rounded with. A higher number will make the corners more round.
Set to FALSE to not have rounded corners.


____________________________________________________________
define('THUMB_MAX_WIDTH', 160);

Set the maximum number of pixels a thumbnails width may be.
If thumbnails have been saved on server you will have to delete them in order to have changes to this setting apply.


____________________________________________________________
define('THUMB_MAX_HEIGHT', 120);

Set the maximum number of pixels a thumbnails height may be.
If thumbnails have been saved on server you will have to delete them in order to have changes to this setting apply.


____________________________________________________________
define('THUMB_SQUARE', FALSE);

Set to TRUE to have thumbnails cropped to a square.
Set to FALSE to have thumbnails maintain aspect ratio.

When setting this option to TRUE, then THUMB_MAX_WIDTH and THUMB_MAX_HEIGHT should be set to the same number.


____________________________________________________________
define('THUMB_ENLARGE', FALSE);

Set to TRUE to have thumbnails for images that is smaller than THUMB_MAX_WIDTH and THUMB_MAX_HEIGHT enlarged.
Set to FALSE to have thumbnails for images that are smaller than THUMB_MAX_WIDTH and THUMB_MAX_HEIGHT stay the size they are.


____________________________________________________________
define('THUMB_JPEG_QUALITY', 75);

Set the quality for jpeg thumbnails. Range from 0 (worst quality and smallest file size) to 100 (best quality and largest file size).
If thumbnails have been saved on server you will have to delete them in order to have changes to this setting apply.


____________________________________________________________
define('USE_PREVIEW', FALSE);

Set to TRUE to have the script generate intermediate preview images. The preview images will be shown when a thumbnail is clicked, and a "Full resolution" button will be enabled to allow switching between full resolution and preview.
The preview images are generated when accessed for the first time, and will be saved on the server for later usage.
Set to FALSE to not use intermediate preview images.
This option is useful if the gallery contains large images that will take long time to load.


____________________________________________________________
define('PREVIEW_MAX_WIDTH', 600);

Set the maximum number of pixels a preview image width may be.
If preview images have been saved on server you will have to delete them in order to have changes to this setting apply.


____________________________________________________________
define('PREVIEW_MAX_HEIGHT', 400);

Set the maximum number of pixels a preview image height may be.
If preview images have been saved on server you will have to delete them in order to have changes to this setting apply.


____________________________________________________________
define('PREVIEW_ENLARGE', FALSE);

Set to TRUE to have preview images for images that are smaller than PREVIEW_MAX_WIDTH and PREVIEW_MAX_HEIGHT enlarged.
Set to FALSE to have preview images for images that are smaller than PREVIEW_MAX_WIDTH and PREVIEW_MAX_HEIGHT stay the size they are.


____________________________________________________________
define('PREVIEW_JPEG_QUALITY', 75);

Set the quality for jpeg preview images. Range from 0 (worst quality and smallest file size) to 100 (best quality and largest file size).
If preview images have been saved on server you will have to delete them in order to have changes to this setting apply.


____________________________________________________________
define('WATERMARK', '');

Set the filename of the image that is to be used as watermark on all images in gallery.
This will make all images, preview images and thumbnails contain the watermark in the lower right corner of the image.

To use this option you must:
 1. Create a directory named like set in the ICONS_DIR option (by default named "_sfpg_icons" and placed in the GALLERY_ROOT).
 2. Place the image that is to be used as watermark in the directory.
 3. Add the name of the image to the WATERMARK constant.

Example: define('WATERMARK', 'watermark.png');

In the example above, an image called "watermark.png" have been created and placed in the "_sfpg_icons" directory in the GALLERY_ROOT.

INFO 1: If set, all images containing watermark will be cached in the DATA_ROOT.
INFO 2: If set or changed after images, thumbnails or preview images have been created, then all thumbnails need to be deleted from the DATA_ROOT in order to have new images including watermark created.
INFO 3: Case sensitivity in this constant follows the case sensitivity of the server on which the script runs.
INFO 4: Depending on the set IMAGE_JPEG_QUALITY, this could take up the same or more space than the original images in GALLERY_ROOT.
INFO 5: Generating the full size image with watermark will require about twice the memory than when generating the thumb.

The watermark image will not be resized. It will be be applied in the original size.


____________________________________________________________
define('WATERMARK_FRACTION', 0.1);

Set the fraction for how large the watermark should be compared to the full image. When setting the watermark size, the shortest side of the full image is used.
Set to FALSE to always have the watermark applied as is, in its actual size.

The default value 0.1 is 10%. With this setting and with a full size image that is 1600*1200 pixels, the watermark will set to have a height of 120 pixels (the width is scaled to maintain the aspect ratio).


____________________________________________________________
define('LOW_IMAGE_RESAMPLE_QUALITY', FALSE);

Set to TRUE to have the script use a less CPU demanding function to generate thumbnails
Set to FALSE to use a high will make thumbs and preview images generate much faster, with less CPU usage on server, but will make them grainy looking.


____________________________________________________________
define('KEYBOARD_NAVIGATION', TRUE);

Set to TRUE to enable gallery navigation using the keyboard.
Set to FALSE to not enable gallery navigation using the keyboard.

Change to the next picture: Arrow Down, Arrow Right, Page Down, Space
Change to the previous picture: Arrow Up, Arrow Left, Page Up
While showing an image ESC can be used to close image view. While viewing thumbs ESC can be used to go one directory up/out.


____________________________________________________________
define('MPO_STEREO_IMAGE', TRUE);

Set to TRUE to have the script extract images from .mpo files and make a stereo preview of the 3D image.
Set to FALSE to treat .mpo files as just files.

INFO: To actually treat .mpo files as just files, the MPO_FULL_IMAGE option must also be set to FALSE.


____________________________________________________________
define('MPO_STEREO_DOTS', TRUE);


Set to TRUE to add a white dot above the middle of stereo image for easier viewing.
Set to FALSE to not add anything to the stereo image.

INFO: This setting only have effect if also MPO_STEREO_IMAGE is set to TRUE.


____________________________________________________________
define('MPO_STEREO_MAX_WIDTH', 300);

Set the max width in pixels of each of the stereo images.


____________________________________________________________
define('MPO_STEREO_MAX_HEIGHT', 300);

Set the max height in pixels of each of the stereo images.


____________________________________________________________
define('MPO_FULL_IMAGE', TRUE);

Set to TRUE to have the script extract images from .mpo files and make a 2D or 3D anaglyph preview.
Set to FALSE to treat .mpo files as just files.

INFO: To actually treat .mpo files as just files, the MPO_STEREO_IMAGE option must also be set to FALSE.


____________________________________________________________
define('MPO_FULL_ANAGLYPH', TRUE);

Set to TRUE to have the script extract images from .mpo files and generate a red/cyan Anaglyph image.
Set to FALSE to show MPO_FULL_IMAGE as normal 2D.

INFO: This setting only have effect if also MPO_FULL_IMAGE is set to TRUE.


____________________________________________________________
define('MPO_FULL_MAX_WIDTH', 1200);

Set the max width in pixels of the full .mpo image.


____________________________________________________________
define('MPO_FULL_MAX_HEIGHT', 800);

Set the max height in pixels of the full .mpo image.


____________________________________________________________
define('MPO_SPACING', 20);

Set the width in pixels of the space added between the stereo images and the full image.


____________________________________________________________
define('INFO_BOX_WIDTH', 250);

Set the width in pixels of the information box. If thumbnail size is increased, this probably also needs to be increased.


____________________________________________________________
define('MENU_BOX_HEIGHT', 70);

Set the height in pixels of the menu box. If font size is increased, this probably also needs to be increased.


____________________________________________________________
define('NAV_BAR_HEIGHT', 25);

Set the height in pixels of the navigation bar. If font size is increased, this probably also needs to be increased.


____________________________________________________________
define('THUMB_BORDER_WIDTH', 1);

Set the number of pixels for the thumbnail border width.


____________________________________________________________
define('THUMB_MARGIN', 10);

Set the number of pixels that the thumbnail box should be larger than the thumbnail all the way round.


____________________________________________________________
define('THUMB_BOX_MARGIN', 7);

Set the number of pixels the thumbnail boxes margin should be. The thumbnail boxes will be two times the set number apart.


____________________________________________________________
define('THUMB_BOX_EXTRA_HEIGHT', 14);

Set the number of pixels that will be added to the thumbnail boxes height. This would normally be a little larger than the set font size. So if the font size is increased, this probably also needs to be increased.
If THUMB_CHARS_MAX is set to 0, to not show thumbnail names, this should also be set to 0.


____________________________________________________________
define('THUMB_CHARS_MAX', 20);

Set the maximum number of chars that will be printed below thumbnails.
Set to 0 to not show thumbnail names. If set to 0 THUMB_BOX_EXTRA_HEIGHT should also be set to 0.


____________________________________________________________
define('FULLIMG_BORDER_WIDTH', 5);

Set the number of pixels for the border width of the full image.


____________________________________________________________
define('NAVI_CHARS_MAX', 100);

Set the maximum number of chars that will be printed in the navigation bar. When the navigation path gets longer than the set number, then the first links/buttons will be replaced with "..."


____________________________________________________________
define('OVERLAY_OPACITY', 90);

Set the opacity percent for the overlaying layer that hides the thumbnails when a full image or preview image is shown.
Set to 0 to have the layer be invisible.
Set to 100 to have a solid color.


____________________________________________________________
define('FADE_DURATION_MS', 300);

Set the duration of the fade of images in milliseconds.


____________________________________________________________
define('SLIDESHOW_DELAY_SEC', 5);

Set the number of seconds between each image in the slideshow. The next image will load in the background while the current is showing. The gallery will only change to the next image when both the time have gone, and the next image are fully loaded. So if the images are large and/or the client connection slow, then images may be displayed longer than the set value.
To disable the slideshow option, simply remove the text from the TEXT_SLIDESHOW option.


____________________________________________________________
define('SHOW_MAX_IMAGES', FALSE);

Set the maximum number of images to be shown in the gallery. If set to 50, only the first 50 images will be shown in the gallery.
Set to FALSE to show all images.

INFO: This setting will only limit the number of images. All directories and files are always shown.
INFO: Directory information will always show the actual number of images in the directory.
TIP: Remember to set sorting to show the images that you want listed first.


____________________________________________________________
define('SHOW_IMAGE_DAYS', FALSE);

This setting will limit the images being shown in the gallery to only include images that are no older than the set value. If set to 30, only images from the last 30 days will be shown in the gallery.
Set to FALSE to show all images.

INFO: The date being used for this option is the file time, which is not necessary the same as when the image was taken.
INFO: Directory information will always show the actual number of images in the directory.
INFO: This setting will only limit the number of images. All directories and files are always shown.


____________________________________________________________
define('DELETE_IMAGE_DAYS', FALSE);

** WARNING ** SETTING THIS OPTION TO ANYTHING OTHER THAN FALSE WILL DELETE IMAGES IN THE GALLERY_ROOT **

This setting will delete images that are older than the set value. If set to 90, all images older than 90 days, will be deleted from the GALLERY_ROOT.
Set to FALSE to never delete images.

If using this option, make sure to always have a backup of the images. Changing the server date, for instance, can cause images to be deleted.

INFO: Using this option require PHP to have permission to delete in the GALLERY_ROOT.
INFO: The date being used for this option is the file time, which is not necessary the same as when the image was taken.
INFO: This setting will only delete images. Directories and files are never deleted.


____________________________________________________________
define('PAYPAL_ENABLED', FALSE);

Set to TRUE to enable selling items in the gallery using PayPal.
Set to FALSE to disable PayPal selling.

Using the PayPal option requires write access to the GALLERY_ROOT, for updating the "in stock" count when items are being sold.

Using the PayPal option:
If you have an item you want to sell, you first need to have an image of it, as only images can have a price. Files and folders in the gallery can't be sold.

To enable selling first set PAYPAL_ENABLED to TRUE, then either use the administrator option to set the price, or do it manually.

To manually set an image up for sale:
Lets say you have an image called 'My first painting.jpg'. You then have to make a sell file, which is a text file with the same name as the image with the PAYPAL_EXTENSION added.
By default the PAYPAL_EXTENSION is '.sell'. Making it look like this:

My first painting.jpg
My first painting.jpg.sell

In the 'My first painting.jpg.sell' file there should be two or three lines, like this:

------ FILE CONTENT STARTS BELOW THIS LINE ------
19.95
1
Paint001
------ FILE CONTENT ENDS ABOVE THIS LINE ------

The first line '19.95' is the price for the item.
The second line '1' is the amount you have for sale. In this example there are only one for sale.
The third line is optional. In this example 'Paint001' is a unique identifier you can use to keep track of your inventory. It will be written in the information from PayPal when a sell is completed. If the third line is omitted the path and image name is put in its place. Just keep in mind that the path and image together, may not be longer than 127 chars(a limit set by PayPal).

The price, amount and unique item identifier will be shown in the information box when you hover the mouse over the thumb, and also when the image is shown in full.
If the second line in the sell file is larger than 0, the 'Buy this item' button (also shown in information box) will be active. If the number is 0 the 'Buy this item' button will be disabled (Sold out).

When a user clicks the 'Buy this item' button, then first the sell file is checked to see if the item is still available, then a unique file is generated in the DATA_ROOT/buy/ and finally the user will be redirected to PayPal.
If the user completes the PayPal payment, the user is then sent back to the gallery using a special link, which is then matched with the unique file in DATA_ROOT, which is then used to decreases the amount in the sell file by one.
If the user cancels the buy, they will be sent back to the item in the gallery, and the amount is untouched. Every time a user clicks 'Buy this item', unused unique files in DATA_ROOT/buy/ older than one week, are removed.

You should however always check the status of the amount you have for sale when an item have been sold, as the user buying the item might not end the buy by returning to your site, and so the amount is not decreased. If this is the case, you will then have to decrease the amount by one yourself.


____________________________________________________________
define('PAYPAL_ACCOUNT', '');

Set the PayPal account. The email address you login to PayPal with.

EXAMPLE: define('PAYPAL_ACCOUNT', 'me@mydomain.com');


____________________________________________________________
define('PAYPAL_CURRENCY', 'USD');

Set the currency used for selling.
See here of possible options: https://developer.paypal.com/docs/classic/api/currency_codes/

If changing this option, remember to also change the TEXT_PAYPAL_PRICE, to show the new currency.


____________________________________________________________
define('PAYPAL_EXTENSION', '.sell');

Set the extension for the sell file. See PAYPAL_ENABLED for further description.
If this option is changed, you should also change the "$file_ext_exclude" option, to not have the sell files shown inside the gallery as files.


____________________________________________________________
define('TEXT_PAYPAL_FOR_SALE', 'Sale information');

Set the text for the "Sale information" box inside information box.


____________________________________________________________
define('TEXT_PAYPAL_PRICE', 'Price (USD)');

Set the text for the Price label.


____________________________________________________________
define('TEXT_PAYPAL_NO_PRICE', 'Not for sale');

Set the text for an image that does not have the sell file.


____________________________________________________________
define('TEXT_PAYPAL_IN_STOCK', 'In stock');

Set the text for the "In stock" label.


____________________________________________________________
define('TEXT_PAYPAL_OUT_OF_STOCK', 'Out of stock');

Set the text for when an item have sold out.


____________________________________________________________
define('TEXT_PAYPAL_ITEM_ID', 'Item ID');

Set the text for the "Item ID" label.


____________________________________________________________
define('TEXT_PAYPAL_BUY', 'Buy this item');

Set the text for the "Buy this item" button.


____________________________________________________________
define('TEXT_PAYPAL_OUT_BACK', 'Item is no longer in stock. Please click back and refresh the page to update inventory.');

Set the text for when a user tries to buy an item, after it have been sold out.
When an item is sold out, the "Buy this item" button will be disabled. So this text will only be used if the item is sold out after the user loaded the page.


____________________________________________________________
define('TEXT_PAYPAL_PLEASE_WAIT', 'Redirecting to PayPal. Please wait... (Can take a few seconds)');

Set the text for the redirect screen, when redirecting to PayPal.


____________________________________________________________
define('TEXT_GALLERY_NAME', 'Single File PHP Gallery');

Text that will be set as title on the page.


____________________________________________________________
define('TEXT_BANNER', '');

Set the text that will be shown as the first thing in every gallery, above the thumb boxes. This option can include HTML.

You can set to: '<h1>Welcome to my Gallery</h1>' to have text made large.


____________________________________________________________
define('TEXT_HOME', 'Home');

Text on first button in the navigation bar that takes you back to the root of the gallery.


____________________________________________________________
define('TEXT_CLOSE_IMG_VIEW', 'Close Image');

Text on button that closes full size image view.


____________________________________________________________
define('TEXT_ACTUAL_SIZE', 'Actual Size');

Text on button that can switch between fitting image to screen and actual size.


____________________________________________________________
define('TEXT_FULLRES', 'Full resolution');

Text on button that will be shown if USE_PREVIEW is set to TRUE. Used to switch between preview and full resolution images.


____________________________________________________________
define('TEXT_PREVIOUS', '<< Previous');

Text on previous button.


____________________________________________________________
define('TEXT_NEXT', 'Next >>');

Text on next button.


____________________________________________________________
define('TEXT_INFO', 'Information');

Text on button that will show/hide information.
Set to '' to remove button from menu.

____________________________________________________________
define('TEXT_DOWNLOAD', 'Download full-size image');

Text for the link in information box that allows download of full-size image.
Set to '' to have download link removed and function disabled. Just keep in mind that users still can save all images in a number of ways.


____________________________________________________________
define('TEXT_SLIDESHOW', 'Slideshow');

Set the text for the slideshow button.
Set to '' to remove the slideshow option from the gallery.


____________________________________________________________
define('TEXT_NO_IMAGES', 'No Images in gallery');

Text for the information to be shown instead of a thumbnail if there are no images in a directory.


____________________________________________________________
define('TEXT_DATE', 'Date');

Text for the date label.


____________________________________________________________
define('TEXT_FILESIZE', 'File size');

Text for the file size label.


____________________________________________________________
define('TEXT_IMAGESIZE', 'Full Image');

Text for the image size label.


____________________________________________________________
define('TEXT_DISPLAYED_IMAGE', 'Displayed Image');

Text for the displayed image dimensions label.


____________________________________________________________
define('TEXT_DIR_NAME', 'Gallery Name');

Text for the gallery name label.


____________________________________________________________
define('TEXT_IMAGE_NAME', 'Image Name');

Text for the image name label.


____________________________________________________________
define('TEXT_FILE_NAME', 'File Name');

Text for the file name label.


____________________________________________________________
define('TEXT_DIRS', 'Directories');

Text for the directories/sub galleries label.


____________________________________________________________
define('TEXT_IMAGES', 'Images');

Text for the images label.


____________________________________________________________
define('TEXT_IMAGE_NUMBER', 'Image number');

Text for the image number label.


____________________________________________________________
define('TEXT_FILES', 'Files');

Text for the files label.


____________________________________________________________
define('TEXT_DESCRIPTION', 'Description');

Text for the description label.

____________________________________________________________
define('TEXT_DIRECT_LINK_GALLERY', 'Direct link to Gallery');

Text for the direct link to gallery link. The link is shown in the information box, and can be used to link directly to the current sub gallery.


____________________________________________________________
define('TEXT_DIRECT_LINK_IMAGE', 'Direct link to Image');

Text for the direct link to image link. The link is shown in the information box, and can be used to link directly to the current image.


____________________________________________________________
define('TEXT_NO_PREVIEW_FILE', 'No Preview for file');

Text for the information to be shown instead of a thumbnail if there is no preview for a file.


____________________________________________________________
define('TEXT_IMAGE_LOADING', 'Image Loading ');

Text for the information to show when images is loading.


____________________________________________________________
define('TEXT_LINKS', 'Links');

Text for the links label.


____________________________________________________________
define('TEXT_NOT_SCALED', 'Not Scaled');

Text for the label that will be shown in information box if the current full size or preview image is not resized to fit screen.


____________________________________________________________
define('TEXT_LINK_BACK', 'Back to my site');

Text for an optional link button. See LINK_BACK for further information.


____________________________________________________________
define('TEXT_THIS_IS_FULL', 'Full');

Text for the label that will show if the current image is full size.


____________________________________________________________
define('TEXT_THIS_IS_PREVIEW', 'Preview');

Text for the label that will show if the current image is a preview size.


____________________________________________________________
define('TEXT_SCALED_TO', 'Scaled to');

Text for the scaled to label.


____________________________________________________________
define('TEXT_YES', 'Yes');

Text for the yes label.


____________________________________________________________
define('TEXT_NO', 'No');

Text for the no label.


____________________________________________________________
define('TEXT_FIRST_VIEW', 'This is first view of this image. Refresh page to get information.');

As image data, EXIF and IPTC information is first generated when the thumbnail is generated, the information will first be available the second time it is accessed.
This text will be shown in the information box only the first time an image is shown.


____________________________________________________________
define('TEXT_LOGIN', 'Login');

Text for the login button, when using the PASSWORD option.


____________________________________________________________
define('TEXT_LOGOUT', 'Logout');

Text for the logout button, when using the PASSWORD option.


____________________________________________________________
define('TEXT_ADMIN', 'Admin');

Text for the Select button, used when the ADMIN option have been set to TRUE.


____________________________________________________________
define('TEXT_OK', 'OK');

Text for the OK button, used when the ADMIN option have been set to TRUE.


____________________________________________________________
define('TEXT_CANCEL', 'Cancel');

Text for the Cancel button, used when the ADMIN option have been set to TRUE.


____________________________________________________________
define('TEXT_DELETE', 'Delete');

Text for the Delete button, used when the ADMIN option have been set to TRUE.


____________________________________________________________
define('TEXT_RENAME', 'Rename');

Text for the Rename button, used when the ADMIN option have been set to TRUE.


____________________________________________________________
define('TEXT_MOVE', 'Move');

Text for the Move button, used when the ADMIN option have been set to TRUE.


____________________________________________________________
define('TEXT_MOVE_TO', 'Move to');

Text for the Move to label, used when the ADMIN option have been set to TRUE.


____________________________________________________________
define('TEXT_MKDIR', 'Create Directory');

Text for the Create Directory button, used when the ADMIN option have been set to TRUE.


____________________________________________________________
define('TEXT_NOTHING', 'Nothing Selected');

Text for the information if nothing is selected. Used when the ADMIN option have been set to TRUE.


____________________________________________________________
define('TEXT_ONLY_ONE', 'Select only one element to use this function');

Text label. Used when the ADMIN option have been set to TRUE.


____________________________________________________________
define('TEXT_ONE_IMAGE', 'Select only one image to use this function');

Text label. Used when the ADMIN option have been set to TRUE.


____________________________________________________________
define('TEXT_EXIF', 'EXIF');

Title for the EXIF box.


____________________________________________________________
define('TEXT_EXIF_DATE', 'Date');

Text for the EXIF Date label.


____________________________________________________________
define('TEXT_EXIF_CAMERA', 'Camera');

Text for the Camera label.


____________________________________________________________
define('TEXT_EXIF_ISO', 'ISO');

Text for the ISO label.


____________________________________________________________
define('TEXT_EXIF_SHUTTER', 'Shutter Speed');

Text for the Shutter Speed label.


____________________________________________________________
define('TEXT_EXIF_APERTURE', 'Aperture');
	
Text for the Aperture label.


____________________________________________________________
define('TEXT_EXIF_FOCAL', 'Focal Length');
	
Text for the Focal Length label.


____________________________________________________________
define('TEXT_EXIF_FLASH', 'Flash fired');
	
Text for the Flash Fired label.


____________________________________________________________
define('TEXT_EXIF_MISSING', 'No EXIF information in image');

Text for the label that will be shown if there are no EXIF info in image file.


____________________________________________________________
define('TEXT_IPTC', 'IPTC');

Text for the title of the IPTC box.

____________________________________________________________
define('TEXT_IPTC_TITLE', 'Document Title');

Text for the Document Title label.


____________________________________________________________
define('TEXT_IPTC_URGENCY', 'Urgency');

Text for the Urgency label.


____________________________________________________________
define('TEXT_IPTC_CATEGORY', 'Category');

Text for the Category label.


____________________________________________________________
define('TEXT_IPTC_SUBCATEGORIES', 'Subcategories');

Text for the Subcategories label.


____________________________________________________________
define('TEXT_IPTC_SPECIALINSTRUCTIONS', 'Special Instructions');

Text for the Special Instructions label.


____________________________________________________________
define('TEXT_IPTC_CREATIONDATE', 'Creation Date');

Text for the Creation Date label.


____________________________________________________________
define('TEXT_IPTC_AUTHORBYLINE', 'Author Byline');

Text for the Author Byline label.


____________________________________________________________
define('TEXT_IPTC_AUTHORTITLE', 'Author Title');

Text for the Author Title label.


____________________________________________________________
define('TEXT_IPTC_CITY', 'City');

Text for the City label.


____________________________________________________________
define('TEXT_IPTC_STATE', 'State');

Text for the State label.


____________________________________________________________
define('TEXT_IPTC_COUNTRY', 'Country');

Text for the Country label.


____________________________________________________________
define('TEXT_IPTC_OTR', 'OTR');

Text for the OTR label.


____________________________________________________________
define('TEXT_IPTC_HEADLINE', 'Headline');

Text for the Headline label.


____________________________________________________________
define('TEXT_IPTC_SOURCE', 'Source');

Text for the Source label.


____________________________________________________________
define('TEXT_IPTC_PHOTOSOURCE', 'Photo Source');

Text for the Photo Source label.


____________________________________________________________
define('TEXT_IPTC_COPYRIGHT', 'Copyright');

Text for the Copyright label.


____________________________________________________________
define('TEXT_IPTC_CAPTION', 'Caption');

Text for the Caption label.


____________________________________________________________
define('TEXT_IPTC_CAPTIONWRITER', 'Caption Writer');

Text for the Caption Writer label.


____________________________________________________________
define('TEXT_IPTC_MISSING', 'No IPTC information in image');

Text to show if no IPTC information is found in image.


____________________________________________________________
Set the colors to be used. If the color variable names is not enough to indicate where it goes, then just change it to red (#ff0000) or blue (#0000ff) and refresh the page, you should then be able to spot it.

$color_body_back = '#000000';
$color_body_text = '#aaaaaa';
$color_body_link = '#ffffff';
$color_body_hover = '#aaaaaa';

$color_thumb_border = '#606060';
$color_fullimg_border = '#ffffff';

$color_marked_back = '#ff0000';
$color_marked_text = '#000000';

$color_dir_box_border = '#505050';
$color_dir_box_back = '#000000';
$color_dir_box_text = '#aaaaaa';
$color_dir_hover = '#ffffff';
$color_dir_hover_text = '#000000';

$color_img_box_border = '#505050';
$color_img_box_back = '#202020';
$color_img_box_text = '#aaaaaa';
$color_img_hover = '#ffffff';
$color_img_hover_text = '#000000';

$color_file_box_border = '#404040';
$color_file_box_back = '#101010';
$color_file_box_text = '#aaaaaa';
$color_file_hover = '#ffffff';
$color_file_hover_text = '#000000';

$color_desc_box_border = '#404040';
$color_desc_box_back = '#202020';
$color_desc_box_text = '#aaaaaa';

$color_menu_back = '#000000';
$color_menu_top = '#303030';

$color_navbar_back = '#202020';
$color_navbar_top = '#303030';

$color_button_nav_border = '#404040';
$color_button_nav_back = '#101010';
$color_button_nav_text ='#808080';

$color_info_back = '#000000';
$color_info_border = '#606060';
$color_info_text = '#aaaaaa';

$color_infobox_border = '#404040';
$color_infobox_back ='#101010';

$color_button_border = '#808080';
$color_button_back = '#000000';
$color_button_text = '#aaaaaa';
$color_button_border_off = '#505050';
$color_button_back_off = '#000000';
$color_button_text_off = '#505050';
$color_button_hover = '#ffffff';
$color_button_hover_text = '#000000';
$color_button_on = '#aaaaaa';
$color_button_text_on = '#000000';

$color_overlay = '#000000';


____________________________________________________________
EOF