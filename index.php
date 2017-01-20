<?php

	/*

		Single File PHP Gallery 4.6.1 (SFPG)

		See EULA in readme.txt for commercial use
		See readme.txt for configuration

		Released: 08-Jan-2016
		http://sye.dk/sfpg/
		by Kenny Svalgaard

	*/

	error_reporting(0);
	
	//	----------- CONFIGURATION START ------------

	define('GALLERY_ROOT', './');
	define('DATA_ROOT', './_sfpg_data/');
	define('SECURITY_PHRASE', '');
	define('PASSWORD', '');
	define('ADMIN', FALSE);

	define('DIR_NAME_FILE', '_name.txt');
	define('DIR_THUMB_FILE', '_image.jpg');
	define('DIR_DESC_FILE', '_desc.txt');
	define('DIR_BANNER_FILE', '_banner.txt');
	define('DIR_DESC_IN_GALLERY', TRUE);
	define('DIR_DESC_IN_INFO', TRUE);
	define('DIR_SORT_REVERSE', FALSE);
	define('DIR_SORT_BY_TIME', FALSE);
	$dir_exclude = array('_sfpg_data', '_sfpg_icons');
	define('DIR_EXCLUDE_REGEX', '');

	define('SHOW_IMAGE_EXT', FALSE);
	define('IMAGE_SORT_REVERSE', FALSE);
	define('IMAGE_SORT_BY_TIME', FALSE);
	define('IMAGE_EXIF_TIME', FALSE);
	define('ROTATE_IMAGES', TRUE);
	define('IMAGE_JPEG_QUALITY', 90);
	define('IMAGE_EXCLUDE_REGEX', '');

	define('SHOW_FILES', TRUE);
	define('SHOW_FILE_EXT', TRUE);
	define('FILE_IN_NEW_WINDOW', TRUE);
	define('FILE_THUMB_EXT', '.jpg');
	define('FILE_THUMB_DEFAULT', '');
	define('FILE_SORT_REVERSE', FALSE);
	define('FILE_SORT_BY_TIME', FALSE);
	$file_exclude = array();
	$file_ext_exclude = array('.php', '.txt', '.sell');
	define('FILE_EXCLUDE_REGEX', '');

	define('ICONS_DIR', '_sfpg_icons/');
	define('LINK_BACK', '');
	define('CHARSET', 'utf-8');
	define('DATE_FORMAT', 'Day Date Month Year Hour:Min:Sec');
	define('DESC_EXT', '.txt');
	define('DESC_NL_TO_BR', FALSE);
	define('SORT_DIVIDER', '--');
	define('SORT_ALL_NATURAL', TRUE);
	define('FONT_SIZE', 12);
	define('UNDERSCORE_AS_SPACE', TRUE);
	define('SHOW_EXIF_INFO', TRUE);
	define('SHOW_IPTC_INFO', TRUE);
	define('SHOW_INFO_BY_DEFAULT', FALSE);
	define('ROUND_CORNERS', 3);

	define('THUMB_MAX_WIDTH', 160);
	define('THUMB_MAX_HEIGHT', 120);
	define('THUMB_SQUARE', FALSE);
	define('THUMB_ENLARGE', FALSE);
	define('THUMB_JPEG_QUALITY', 75);

	define('USE_PREVIEW', FALSE);
	define('PREVIEW_MAX_WIDTH', 600);
	define('PREVIEW_MAX_HEIGHT', 400);
	define('PREVIEW_ENLARGE', FALSE);
	define('PREVIEW_JPEG_QUALITY', 75);
	
	define('LOW_IMAGE_RESAMPLE_QUALITY', FALSE);
	define('KEYBOARD_NAVIGATION', TRUE);
	define('WATERMARK', '');
	define('WATERMARK_FRACTION', 0.1);

	define('MPO_STEREO_IMAGE', TRUE);
	define('MPO_STEREO_DOTS', TRUE);
	define('MPO_STEREO_MAX_WIDTH', 300);
	define('MPO_STEREO_MAX_HEIGHT', 300);
	define('MPO_FULL_IMAGE', TRUE);
	define('MPO_FULL_ANAGLYPH', TRUE);
	define('MPO_FULL_MAX_WIDTH', 1200);
	define('MPO_FULL_MAX_HEIGHT', 800);
	define('MPO_SPACING', 20);

	define('INFO_BOX_WIDTH', 250);
	define('MENU_BOX_HEIGHT', 70);
	define('NAV_BAR_HEIGHT', 25);
	define('THUMB_BORDER_WIDTH', 1);
	define('THUMB_MARGIN', 10);
	define('THUMB_BOX_MARGIN', 7);
	define('THUMB_BOX_EXTRA_HEIGHT', 14);
	define('THUMB_CHARS_MAX', 20);
	define('FULLIMG_BORDER_WIDTH', 5);

	define('NAVI_CHARS_MAX', 100);
	define('OVERLAY_OPACITY', 90);
	define('FADE_DURATION_MS', 300);
	define('SLIDESHOW_DELAY_SEC', 5);

	define('SHOW_MAX_IMAGES', FALSE);
	define('SHOW_IMAGE_DAYS', FALSE);
	define('DELETE_IMAGE_DAYS', FALSE);

	define('PAYPAL_ENABLED', FALSE);
	define('PAYPAL_ACCOUNT', '');
	define('PAYPAL_CURRENCY', 'USD');
	define('PAYPAL_EXTENSION', '.sell');

	define('TEXT_PAYPAL_FOR_SALE', 'Sales information');
	define('TEXT_PAYPAL_PRICE', 'Price (USD)');
	define('TEXT_PAYPAL_NO_PRICE', 'No price yet');
	define('TEXT_PAYPAL_IN_STOCK', 'In stock');
	define('TEXT_PAYPAL_OUT_OF_STOCK', 'Out of stock');
	define('TEXT_PAYPAL_ITEM_ID', 'Item ID');
	define('TEXT_PAYPAL_BUY', 'Buy this item');
	define('TEXT_PAYPAL_OUT_BACK', 'Item is no longer in stock. Please click back and refresh the page to update inventory.');
	define('TEXT_PAYPAL_PLEASE_WAIT', 'Redirecting to PayPal. Please wait... (Can take a few seconds)');

	define('TEXT_GALLERY_NAME', 'Single File PHP Gallery');
	define('TEXT_BANNER', '');
	define('TEXT_HOME', 'Home');
	define('TEXT_CLOSE_IMG_VIEW', 'Close Image');
	define('TEXT_ACTUAL_SIZE', 'Actual Size');
	define('TEXT_FULLRES', 'Full resolution');
	define('TEXT_PREVIOUS', '<< Previous');
	define('TEXT_NEXT', 'Next >>');
	define('TEXT_INFO', 'Information');
	define('TEXT_DOWNLOAD', 'Download full-size image');
	define('TEXT_SLIDESHOW', 'Slideshow');
	define('TEXT_NO_IMAGES', 'No Images in gallery');
	define('TEXT_DATE', 'Date');
	define('TEXT_FILESIZE', 'File size');
	define('TEXT_IMAGESIZE', 'Full Image');
	define('TEXT_DISPLAYED_IMAGE', 'Displayed Image');
	define('TEXT_DIR_NAME', 'Gallery Name');
	define('TEXT_IMAGE_NAME', 'Image Name');
	define('TEXT_FILE_NAME', 'File Name');
	define('TEXT_DIRS', 'Directories');
	define('TEXT_IMAGES', 'Images');
	define('TEXT_IMAGE_NUMBER', 'Image number');
	define('TEXT_FILES', 'Files');
	define('TEXT_DESCRIPTION', 'Description');
	define('TEXT_DIRECT_LINK_GALLERY', 'Direct link to Gallery');
	define('TEXT_DIRECT_LINK_IMAGE', 'Direct link to Image');
	define('TEXT_NO_PREVIEW_FILE', 'No Preview for file');
	define('TEXT_IMAGE_LOADING', 'Image Loading ');
	define('TEXT_LINKS', 'Links');
	define('TEXT_NOT_SCALED', 'Not Scaled');
	define('TEXT_LINK_BACK', 'Back to my site');
	define('TEXT_THIS_IS_FULL', 'Full');
	define('TEXT_THIS_IS_PREVIEW', 'Preview');
	define('TEXT_SCALED_TO', 'Scaled to');
	define('TEXT_YES', 'Yes');
	define('TEXT_NO', 'No');
	define('TEXT_FIRST_VIEW', 'This is first view of this image. Refresh page to get information.');

	define('TEXT_LOGIN', 'Login');
	define('TEXT_LOGOUT', 'Logout');
	define('TEXT_ADMIN', 'Admin');
	define('TEXT_OK', 'OK');
	define('TEXT_CANCEL', 'Cancel');
	define('TEXT_DELETE', 'Delete');
	define('TEXT_RENAME', 'Rename');
	define('TEXT_MOVE', 'Move');
	define('TEXT_MOVE_TO', 'Move to');
	define('TEXT_MKDIR', 'Create Directory');
	define('TEXT_NOTHING', 'Nothing Selected');
	define('TEXT_ONLY_ONE', 'Select only one element to use this function');
	define('TEXT_ONE_IMAGE', 'Select only one image to use this function');

	define('TEXT_EXIF', 'EXIF');
	define('TEXT_EXIF_DATE', 'Date');
	define('TEXT_EXIF_CAMERA', 'Camera');
	define('TEXT_EXIF_ISO', 'ISO');
	define('TEXT_EXIF_SHUTTER', 'Shutter Speed');
	define('TEXT_EXIF_APERTURE', 'Aperture');
	define('TEXT_EXIF_FOCAL', 'Focal Length');
	define('TEXT_EXIF_FLASH', 'Flash fired');
	define('TEXT_EXIF_MISSING', 'No EXIF information in image');

	define('TEXT_IPTC', 'IPTC');
	define('TEXT_IPTC_TITLE', 'Document Title');
	define('TEXT_IPTC_URGENCY', 'Urgency');
	define('TEXT_IPTC_CATEGORY', 'Category');
	define('TEXT_IPTC_SUBCATEGORIES', 'Subcategories');
	define('TEXT_IPTC_SPECIALINSTRUCTIONS', 'Special Instructions');
	define('TEXT_IPTC_CREATIONDATE', 'Creation Date');
	define('TEXT_IPTC_AUTHORBYLINE', 'Author Byline');
	define('TEXT_IPTC_AUTHORTITLE', 'Author Title');
	define('TEXT_IPTC_CITY', 'City');
	define('TEXT_IPTC_STATE', 'State');
	define('TEXT_IPTC_COUNTRY', 'Country');
	define('TEXT_IPTC_OTR', 'OTR');
	define('TEXT_IPTC_HEADLINE', 'Headline');
	define('TEXT_IPTC_SOURCE', 'Source');
	define('TEXT_IPTC_PHOTOSOURCE', 'Photo Source');
	define('TEXT_IPTC_COPYRIGHT', 'Copyright');
	define('TEXT_IPTC_CAPTION', 'Caption');
	define('TEXT_IPTC_CAPTIONWRITER', 'Caption Writer');
	define('TEXT_IPTC_MISSING', 'No IPTC information in image');

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

	//	----------- CONFIGURATION END ------------

	function sfpg_array_sort(&$arr, &$arr_time, $sort_by_time, $sort_reverse)
	{
		if ($sort_by_time)
		{
			if ($sort_reverse)
			{
				array_multisort ($arr_time, SORT_DESC, SORT_NUMERIC, $arr);
			}
			else
			{
				array_multisort ($arr_time, SORT_ASC, SORT_NUMERIC, $arr);
			}
		}
		else
		{
			if (SORT_ALL_NATURAL)
			{
				natcasesort ($arr);
				$arr = array_values($arr);
				if ($sort_reverse)
				{
					$arr = array_reverse ($arr);
				}
			}
			else
			{
				if ($sort_reverse)
				{
					rsort ($arr);
				}
				else
				{
					sort ($arr);
				}
			}
		}
	}


	function sfpg_file_size($size)
	{
		$sizename = array('Bytes', 'KB', 'MB', 'GB', 'TB', 'PB', 'EB', 'ZB', 'YB');
		return ($size ? round($size/pow(1024, ($i = floor(log($size, 1024)))), 2).' '.$sizename[$i] : '0 Bytes');
	}


	function sfpg_base64url_encode($plain)
	{
		$base64 = base64_encode($plain);
		$base64url = strtr($base64, '+/', '-_');
		return rtrim($base64url, '=');
	}


	function sfpg_base64url_decode($base64url)
	{
		$base64 = strtr($base64url, '-_', '+/');
		$plain = base64_decode($base64);
		return ($plain);
	}


	function sfpg_url_string($dir = '', $img = '')
	{
		$res = $dir.'*'.$img.'*';
		return sfpg_base64url_encode($res.hash('sha256', $res.SECURITY_PHRASE));
	}


	function sfpg_url_decode($string)
	{
		$get = explode('*', sfpg_base64url_decode($string));
		if ((hash('sha256', $get[0].'*'.$get[1].'*'.SECURITY_PHRASE) === $get[2]) and (strpos(GALLERY_ROOT.$get[0].$get[1], '/../') === FALSE) and (strpos($get[0].$get[1], '\\') === FALSE))
		{
			return array($get[0], $get[1]);
		}
		else
		{
			return FALSE;
		}
	}


	function sts($str, $block_html_tags=false, $nl_to_br=true)
	{
		$str = str_replace("\r", "", $str);
		$str = str_replace("\n", ($nl_to_br?"<br>":""), $str);
		$str = str_replace("\\", "\\\\", $str);
		$str = str_replace("\"", "\\\"", $str);
		$str = str_replace("'", "\'", $str);
		if ($block_html_tags)
		{
			$str = str_replace("<", "&lt;", $str);
		}
		return $str;
	}


	function sfpg_display_name($name, $show_ext)
	{
		$break_pos = strpos($name, SORT_DIVIDER);
		if ($break_pos !== FALSE)
		{
			$display_name = substr($name, $break_pos + strlen(SORT_DIVIDER));
		}
		else
		{
			$display_name = $name;
		}
		if (UNDERSCORE_AS_SPACE)
		{
			$display_name = str_replace('_', ' ', $display_name);
		}
		if (!$show_ext)
		{
			$display_name = substr($display_name, 0, strrpos($display_name, '.'));
		}
		return $display_name;
	}


	function sfpg_ext($file)
	{
		if (strrpos($file, '.') === FALSE)
		{
			return 'nodot';
		}
		else
		{
			return strtolower(substr($file, strrpos($file, '.')));
		}
	}


	function sfpg_image_type($file)
	{
		$type = sfpg_ext($file);
		if (($type == '.jpg') or ($type == '.jpeg') or ((MPO_FULL_IMAGE or MPO_STEREO_IMAGE) and ($type == '.mpo')))
		{
			return 'jpeg';
		}
		elseif ($type == '.png')
		{
			return 'png';
		}
		elseif ($type == '.gif')
		{
			return 'gif';
		}
		return FALSE;
	}


	function sfpg_mpo_image($file)
	{
		if (!$mpo = @file_get_contents($file))
		{
			return false;
		}
		$offset = 0;
		$marker = true;
		$imgOffset = array();
		$markA = chr(0xFF).chr(0xD8).chr(0xFF).chr(0xE1);
		$markB = chr(0xFF).chr(0xD9).chr(0xFF).chr(0xE0);
		while ($marker!==false)
		{
			$marker = strpos($mpo, $markA, $offset);
			if ($marker===false)
			{
				$marker = strpos($mpo, $markB, $offset);
			}
			if ($marker!==false)
			{
				$imgOffset[] = $marker;
				$offset = $marker+4;
			}
		}
		$imgOffset[] = strlen($mpo);
		if (count($imgOffset)<2)
		{
			return false;
		}
		if (count($imgOffset)>2)
		{
			$img_left = imagecreatefromstring(substr($mpo, $imgOffset[0], $imgOffset[1]-$imgOffset[0]));
			$img_right = imagecreatefromstring(substr($mpo, $imgOffset[1], $imgOffset[2]-$imgOffset[1]));
			list($mpo_stereo_width, $mpo_stereo_height) = sfpg_aspect_resize(imagesx($img_left), imagesy($img_left), MPO_STEREO_MAX_WIDTH, MPO_STEREO_MAX_HEIGHT, true);
			list($mpo_full_width, $mpo_full_height) = sfpg_aspect_resize(imagesx($img_left), imagesy($img_left), MPO_FULL_MAX_WIDTH, MPO_FULL_MAX_HEIGHT, false);
			$stereo_dot_space = 0;
			if (MPO_STEREO_DOTS)
			{
				$dot_size=3;
				$stereo_dot_space = 2*$dot_size+2*MPO_SPACING;
			}
			$stereo_align = 0;
			$new_img_width = 0;
			$new_img_height = 0;
			$full_offset_y = 0;
			if (MPO_STEREO_IMAGE)
			{
				$new_img_width += $mpo_stereo_width*2+MPO_SPACING;
				$new_img_height += $stereo_dot_space + $mpo_stereo_height + (MPO_FULL_IMAGE ? MPO_SPACING : 0);
				$full_offset_y = $mpo_stereo_height+MPO_SPACING+$stereo_dot_space;
			}
			$full_offset_x = round(($new_img_width-$mpo_full_width)/2);
			if (MPO_FULL_IMAGE)
			{
				if ($mpo_full_width > $new_img_width)
				{
					$new_img_width = $mpo_full_width;
					$stereo_align = (int)(($mpo_full_width-($mpo_stereo_width*2+MPO_SPACING))/2);
					$full_offset_x = 0;					
				}
				$new_img_height += $mpo_full_height;
			}
			$new_image = imagecreatetruecolor($new_img_width, $new_img_height);
			$tmp_left = imagecreatetruecolor($mpo_full_width, $mpo_full_height);
			imagecopyresampled($tmp_left, $img_left, 0, 0, 0, 0, $mpo_full_width, $mpo_full_height, imagesx($img_left), imagesy($img_left));
			$tmp_right = imagecreatetruecolor($mpo_full_width, $mpo_full_height);
			imagecopyresampled($tmp_right, $img_right, 0, 0, 0, 0, $mpo_full_width, $mpo_full_height, imagesx($img_right), imagesy($img_right));
			if (MPO_FULL_IMAGE)
			{
				if (MPO_FULL_ANAGLYPH)
				{
					$anaglyph_image = imagecreatetruecolor($mpo_full_width, $mpo_full_height);
					imagealphablending($anaglyph_image, false);
					for($y=0; $y<$mpo_full_height; $y++)
					{
						for($x=0; $x<$mpo_full_width; $x++)
						{
							$left_color = imagecolorat($tmp_left, $x, $y);
							$r = (int)(($left_color >> 16) & 255) * 0.299 + (($left_color >> 8) & 255) * 0.587 + (($left_color) & 255) * 0.114;
							if ($r > 255)
							{
								$r = 255;
							}
							$g = (imagecolorat($tmp_right, $x, $y) >> 8) & 255;
							$b = (imagecolorat($tmp_right, $x, $y)) & 255;
							imagesetpixel($anaglyph_image, $x, $y, imagecolorallocate($anaglyph_image, $r, $g, $b));
						}
					}
					imagecopyresampled($new_image, $anaglyph_image, $full_offset_x, $full_offset_y, 0, 0, $mpo_full_width, $mpo_full_height, $mpo_full_width, $mpo_full_height);
					imagedestroy($anaglyph_image);
					imagedestroy($tmp_left);
					imagedestroy($tmp_right);
				}
				else
				{
					imagecopyresampled($new_image, $img_left, $full_offset_x, $full_offset_y, 0, 0, $mpo_full_width, $mpo_full_height, imagesx($img_left), imagesy($img_left));
				}
			}
			if (MPO_STEREO_IMAGE)
			{
				imagecopyresampled($new_image, $img_left, $stereo_align, $stereo_dot_space, 0, 0, $mpo_stereo_width, $mpo_stereo_height, imagesx($img_left), imagesy($img_left));
				imagedestroy($img_left);
				imagecopyresampled($new_image, $img_right, $stereo_align+$mpo_stereo_width+MPO_SPACING, $stereo_dot_space, 0, 0, $mpo_stereo_width, $mpo_stereo_height, imagesx($img_right), imagesy($img_right));
				imagedestroy($img_right);
				$white = imagecolorallocate($new_image, 255, 255, 255);
				imagefilledrectangle($new_image, $stereo_align+(int)($mpo_stereo_width/2)-3, MPO_SPACING-3, $stereo_align+(int)($mpo_stereo_width/2)+3, MPO_SPACING+3, $white);
				imagefilledrectangle($new_image, $stereo_align+MPO_SPACING+(int)($mpo_stereo_width*1.5)-3, MPO_SPACING-3, $stereo_align+MPO_SPACING+(int)($mpo_stereo_width*1.5)+3, MPO_SPACING+3, $white);
			}
			return $new_image;
		}
		else
		{
			$image = imagecreatefromstring(substr($mpo, $imgOffset[0], $imgOffset[1]-$imgOffset[0]));
			list($mpo_width, $mpo_height) = sfpg_aspect_resize(imagesx($image), imagesy($image), MPO_FULL_MAX_WIDTH, MPO_FULL_MAX_HEIGHT, false);
			$new_image = imagecreatetruecolor($mpo_width, $mpo_height);
			imagecopyresampled($new_image, $image, 0, 0, 0, 0, $mpo_width, $mpo_height, imagesx($image), imagesy($image));
			imagedestroy($image);
			return $new_image;
		}
	}


	function sfpg_aspect_resize($image_width, $image_height, $max_width, $max_height, $enlarge)
	{
		if (($image_width < $max_width) and ($image_height < $max_height) and !$enlarge)
		{
			$new_img_height = $image_height;
			$new_img_width = $image_width;
		}
		else
		{
			$aspect_x = $image_width / $max_width;
			$aspect_y = $image_height / $max_height;
			if ($aspect_x > $aspect_y)
			{
				$new_img_width = $max_width;
				$new_img_height = $image_height / $aspect_x;
			}
			else
			{
				$new_img_height = $max_height;
				$new_img_width = $image_width / $aspect_y;
			}
		}
		return array($new_img_width, $new_img_height);
	}


	function sfpg_mkdir($dir)
	{
		if (!is_dir($dir))
		{
			mkdir($dir, 0777, TRUE);
			return true;
		}
		return false;
	}


	function sfpg_get_dir($dir, $for_dir_info=FALSE)
	{
		global $dir_exclude, $file_exclude, $file_ext_exclude;
		$dirs = array();
		$dirs_time = array();
		$images = array();
		$images_time = array();
		$files = array();
		$files_time = array();
		$misc = array();
		$directory_handle = opendir(GALLERY_ROOT.$dir);
		if ($directory_handle != FALSE)
		{
			while(($var=readdir($directory_handle))!==false)
			{
				if (is_dir(GALLERY_ROOT.$dir.$var))
				{
					if (($var != '.') and ($var != '..') and !in_array(strtolower($var), $dir_exclude) and !@preg_match(DIR_EXCLUDE_REGEX, $var))
					{
						$dirs[] = $var;
						if (DIR_SORT_BY_TIME)
						{
							$dirs_time[] = filemtime(GALLERY_ROOT.$dir.$var.'/.');
						}
					}
				}
				elseif (sfpg_image_type($var))
				{
					if (($var != DIR_THUMB_FILE) and !@preg_match(IMAGE_EXCLUDE_REGEX, $var))
					{
						if ((DELETE_IMAGE_DAYS) and (filemtime(GALLERY_ROOT.$dir.$var)<(time()-(DELETE_IMAGE_DAYS*86400))))
						{
							unlink(GALLERY_ROOT.$dir.$var);
						}
						else
						{
							$images[] = $var;
							if (IMAGE_SORT_BY_TIME)
							{
								if (IMAGE_EXIF_TIME)
								{
									if ($img_info=@file_get_contents(DATA_ROOT.'info/'.$dir.$var))
									{
										$spl=explode('|', $img_info);
										$images_time[]=$spl[4];
									}
									else
									{
										$images_time[]=filemtime(GALLERY_ROOT.$dir.$var);
									}
								}
								else
								{
									$images_time[]=filemtime(GALLERY_ROOT.$dir.$var);
								}
							}
						}
					}
				}
				elseif (SHOW_FILES)
				{
					if (!in_array(strtolower($var), $file_exclude) and !in_array(sfpg_ext($var), $file_ext_exclude) and !@preg_match(FILE_EXCLUDE_REGEX, $var))
					{
						$files[] = $var;
						if (FILE_SORT_BY_TIME)
						{
							$files_time[] = filemtime(GALLERY_ROOT.$dir.$var);
						}
					}
				}
				if ((sfpg_ext($var)==DESC_EXT)or(sfpg_ext($var)==PAYPAL_EXTENSION))
				{
					$misc[] = $var;
				}
			}
			if ($for_dir_info)
			{
				$misc = 0;
			}
			if (SHOW_FILES)
			{
				foreach ($files as $val)
				{
					$fti = array_search($val.FILE_THUMB_EXT, $images);
					if ($fti !== FALSE)
					{
						if ($for_dir_info)
						{
							$misc++;
						}
						else
						{
							array_splice($images, $fti, 1);
							array_splice($images_time, $fti, 1);
						}
					}
				}
			}
			closedir($directory_handle);
			sfpg_array_sort($dirs, $dirs_time, DIR_SORT_BY_TIME, DIR_SORT_REVERSE);
			sfpg_array_sort($images, $images_time, IMAGE_SORT_BY_TIME, IMAGE_SORT_REVERSE);
			sfpg_array_sort($files, $files_time, FILE_SORT_BY_TIME, FILE_SORT_REVERSE);
			return array($dirs, $images, $files, $misc);
		}
		else
		{
			header('Location: '.$_SERVER['PHP_SELF']);
			exit;
		}
	}


	function sfpg_browse_dirs()
	{
		echo '<!DOCTYPE html><html><head><meta charset="'.CHARSET.'"></head><body onload="parent.sendData(document.getElementById(\'dataContainer\').innerHTML)"><div id="dataContainer"><br>'.
		'&nbsp;'.TEXT_MOVE_TO.': <b>'.TEXT_HOME.GALLERY.'</b><br><br>'.
		'<span class="sfpg_button" onclick="admMovePost(\''.sfpg_url_string(GALLERY,'').'\',\''.TEXT_HOME.GALLERY.'\')">OK</span>'.
		'<span class="sfpg_button" onclick="admMovePost(false,false)">'.TEXT_CANCEL.'</span><br><br>'.
		'<span class="sfpg_button" onclick="admMove(\''.sfpg_url_string().'\')">'.TEXT_HOME.'</span>';
		$dirs=explode('/',GALLERY);
		$path='';
		$postDiv='';
		foreach($dirs as $dir)
		{
			if ($dir)
			{
				$path.='/'.$dir;
				echo '<div class="in"><span class="sfpg_button" onclick="admMove(\''.sfpg_url_string($path,'').'\')">'.$dir.'</span>';
				$postDiv.='</div>';
			}
		}
		echo '<hr>';
		$items=@scandir(GALLERY_ROOT.GALLERY);
		if ($items!==false)
		{
			echo '<div class="in">';
			foreach($items as $var)
			{
				if ((is_dir(GALLERY_ROOT.GALLERY.'/'.$var)) and ($var != '.') and ($var != '..'))
				{
					echo '<span class="sfpg_button" onclick="admMove(\''.sfpg_url_string(GALLERY.'/'.$var,'').'\')">'.$var.'</span><br>';
				}
			}
		}
		echo $postDiv.'</div></div></div></body></html>';
	}


	function sfpg_image($image_dir, $image_file, $func, $download=FALSE)
	{
		$image_path_file = DATA_ROOT.$func.'/'.$image_dir.$image_file;
		$image_type = sfpg_image_type($image_file);
		if ($func == 'image')
		{
			if (!file_exists($image_path_file))
			{
				$image_path_file = GALLERY_ROOT.$image_dir.$image_file;
			}
			if ($download)
			{		
				header('Content-Type: application/octet-stream');
				header('Content-Disposition: attachment; filename="'.$image_file.'"');
			}
			else
			{
				header('Content-Type: image/'.$image_type);
				header('Content-Disposition: filename="'.$image_file.'"');
			}
			readfile($image_path_file);
			exit;
		}
		if (($func == 'thumb') or ($func == 'preview'))
		{
			if (file_exists($image_path_file))
			{
				header('Content-Type: image/'.$image_type);
				header('Content-Disposition: filename="'.$func.'_'.$image_file.'"');
				readfile($image_path_file);
				exit;
			}
			else
			{
				if($func == 'thumb')
				{
					$max_width = THUMB_MAX_WIDTH;
					$max_height = THUMB_MAX_HEIGHT;
					$enlarge = THUMB_ENLARGE;
					$jpeg_quality = THUMB_JPEG_QUALITY;
					$source_img = GALLERY_ROOT.$image_dir.$image_file;
				}
				else
				{
					$max_width = PREVIEW_MAX_WIDTH;
					$max_height = PREVIEW_MAX_HEIGHT;
					$enlarge = PREVIEW_ENLARGE;
					$jpeg_quality = PREVIEW_JPEG_QUALITY;
					$source_img = DATA_ROOT.'image/'.$image_dir.$image_file;
					if (!file_exists($source_img))
					{
						$source_img = GALLERY_ROOT.$image_dir.$image_file;
					}
				}
				$image_changed = FALSE;
				if ((MPO_FULL_IMAGE or MPO_STEREO_IMAGE) and (sfpg_ext($image_file)=='.mpo') and ($func != 'preview'))
				{
					if (!$image = sfpg_mpo_image($source_img))
					{
						exit;
					}
					$image_changed = TRUE;
				}
				elseif (!$image = imagecreatefromstring(file_get_contents($source_img)))
				{
					exit;
				}
				if (($func == 'thumb') and ($image_dir != ICONS_DIR))
				{
					sfpg_mkdir(DATA_ROOT.'info/'.$image_dir);
					$exif_info = '||||||';
					if (function_exists('exif_read_data'))
					{
						if (SHOW_EXIF_INFO)
						{
							$exif_data = exif_read_data(GALLERY_ROOT.$image_dir.$image_file, 'IFD0');
							if ($exif_data !== FALSE)
							{
								$exif_info = '';
								if(isset($exif_data['DateTimeOriginal']))
								{
									$exif_time = explode(':', str_replace(' ', ':', $exif_data['DateTimeOriginal']));
									$exif_info .= mktime($exif_time[3], $exif_time[4], $exif_time[5], $exif_time[1], $exif_time[2], $exif_time[0]);
								}
								else
								{
									$exif_info .= '';
								}
								$exif_info .= '|';
								$exif_info .= (isset($exif_data['Model'])?$exif_data['Model']:'').'|';
								$exif_info .= (isset($exif_data['ISOSpeedRatings'])?$exif_data['ISOSpeedRatings']:'').'|';
								if(isset($exif_data['ExposureTime']))
								{
									$exif_ExposureTime=create_function('','return '.$exif_data['ExposureTime'].';');
									$exp_time = $exif_ExposureTime();
									if ($exp_time > 0.25)
									{
										$exif_info .= $exp_time;
									}
									else
									{
										$exif_info .= $exif_data['ExposureTime'];
									}
									$exif_info .= 's';
								}
								else
								{
									$exif_info .= '';
								}
								$exif_info .= '|';
								if(isset($exif_data['FNumber']))
								{
									$exif_FNumber=create_function('','return number_format(round('.$exif_data['FNumber'].',1),1);');
									$exif_info .= 'f'.$exif_FNumber();
								}
								else
								{
									$exif_info .= '';
								}
								$exif_info .= '|';
								if(isset($exif_data['FocalLength']))
								{
									$exif_FocalLength=create_function('','return number_format(round('.$exif_data['FocalLength'].',1),1);');
									$exif_info .= $exif_FocalLength().'mm';
								}
								else
								{
									$exif_info .= '';
								}
								$exif_info .= '|';
								if(isset($exif_data['Flash']))
								{
									$exif_info .= (($exif_data['Flash'] & 1) ? TEXT_YES : TEXT_NO);
								}
								else
								{
									$exif_info .= '';
								}
							}
							else
							{
								$exif_info = 'sfpg_no_exif_data_in_file||||||';
							}
						}
						if (ROTATE_IMAGES and isset($exif_data['Orientation']))
						{
							$image_width = imagesx($image);
							$image_height = imagesy($image);
							switch ($exif_data['Orientation'])
							{
								case 2 :
								{
									$rotate = @imagecreatetruecolor($image_width, $image_height);
									if (LOW_IMAGE_RESAMPLE_QUALITY)
									{
										imagecopyresized($rotate, $image, 0, 0, $image_width-1, 0, $image_width, $image_height, -$image_width, $image_height);
									}
									else
									{
										imagecopyresampled($rotate, $image, 0, 0, $image_width-1, 0, $image_width, $image_height, -$image_width, $image_height);
									}
									imagedestroy($image);
									$image_changed = TRUE;
									break;
								}
								case 3 :
								{
									$rotate = imagerotate($image, 180, 0);
									imagedestroy($image);
									$image_changed = TRUE;
									break;
								}
								case 4 :
								{
									$rotate = @imagecreatetruecolor($image_width, $image_height);
									if (LOW_IMAGE_RESAMPLE_QUALITY)
									{
										imagecopyresized($rotate, $image, 0, 0, 0, $image_height-1, $image_width, $image_height, $image_width, -$image_height);
									}
									else
									{
										imagecopyresampled($rotate, $image, 0, 0, 0, $image_height-1, $image_width, $image_height, $image_width, -$image_height);
									}
									imagedestroy($image);
									$image_changed = TRUE;
									break;
								}
								case 5 :
								{
									$rotate = imagerotate($image, 270, 0);
									imagedestroy($image);
									$image = $rotate;
									$rotate = @imagecreatetruecolor($image_height, $image_width);
									if (LOW_IMAGE_RESAMPLE_QUALITY)
									{
										imagecopyresized($rotate, $image, 0, 0, 0, $image_width-1, $image_height, $image_width, $image_height, -$image_width);
									}
									else
									{
										imagecopyresampled($rotate, $image, 0, 0, 0, $image_width-1, $image_height, $image_width, $image_height, -$image_width);
									}
									$image_changed = TRUE;
									break;
								}
								case 6 :
								{
									$rotate = imagerotate($image, 270, 0);
									imagedestroy($image);
									$image_changed = TRUE;
									break;
								}
								case 7 :
								{
									$rotate = imagerotate($image, 90, 0);
									imagedestroy($image);
									$image = $rotate;
									$rotate = @imagecreatetruecolor($image_height, $image_width);
									if (LOW_IMAGE_RESAMPLE_QUALITY)
									{
										imagecopyresized($rotate, $image, 0, 0, 0, $image_width-1, $image_height, $image_width, $image_height, -$image_width);
									}
									else
									{
										imagecopyresampled($rotate, $image, 0, 0, 0, $image_width-1, $image_height, $image_width, $image_height, -$image_width);
									}
									$image_changed = TRUE;
									break;
								}
								case 8 :
								{
									$rotate = imagerotate($image, 90, 0);
									imagedestroy($image);
									$image_changed = TRUE;
									break;
								}
								default: $rotate = $image;
							}
							$image = $rotate;
						}
					}
					$iptc_info = '||||||||||||||||||';
					if(SHOW_IPTC_INFO)
					{
						$only_used_for_iptc = getimagesize(GALLERY_ROOT.$image_dir.$image_file, $info);
						if (isset($info['APP13']))
						{
							$iptc_info = '';
							$iptc = iptcparse($info['APP13']);
							$iptc_info .= (isset($iptc['2#005']) ? $iptc['2#005'][0] : '').'|';
							$iptc_info .= (isset($iptc['2#010']) ? $iptc['2#010'][0] : '').'|';
							$iptc_info .= (isset($iptc['2#015']) ? $iptc['2#015'][0] : '').'|';
							$iptc_info .= (isset($iptc['2#020']) ? $iptc['2#020'][0] : '').'|';
							$iptc_info .= (isset($iptc['2#040']) ? $iptc['2#040'][0] : '').'|';
							$iptc_info .= (isset($iptc['2#055']) ? $iptc['2#055'][0] : '').'|';
							$iptc_info .= (isset($iptc['2#080']) ? $iptc['2#080'][0] : '').'|';
							$iptc_info .= (isset($iptc['2#085']) ? $iptc['2#085'][0] : '').'|';
							$iptc_info .= (isset($iptc['2#090']) ? $iptc['2#090'][0] : '').'|';
							$iptc_info .= (isset($iptc['2#095']) ? $iptc['2#095'][0] : '').'|';
							$iptc_info .= (isset($iptc['2#101']) ? $iptc['2#101'][0] : '').'|';
							$iptc_info .= (isset($iptc['2#103']) ? $iptc['2#103'][0] : '').'|';
							$iptc_info .= (isset($iptc['2#105']) ? $iptc['2#105'][0] : '').'|';
							$iptc_info .= (isset($iptc['2#110']) ? $iptc['2#110'][0] : '').'|';
							$iptc_info .= (isset($iptc['2#115']) ? $iptc['2#115'][0] : '').'|';
							$iptc_info .= (isset($iptc['2#116']) ? $iptc['2#116'][0] : '').'|';
							$iptc_info .= (isset($iptc['2#120']) ? $iptc['2#120'][0] : '').'|';
							$iptc_info .= (isset($iptc['2#122']) ? $iptc['2#122'][0] : '').'|';
						}
						else
						{
							$iptc_info = 'sfpgnoiptc||||||||||||||||||';
						}
					}
					if (WATERMARK)
					{
						$wm_file = GALLERY_ROOT.ICONS_DIR.WATERMARK;
						if (file_exists($wm_file))
						{
							if ($watermark = imagecreatefromstring(file_get_contents($wm_file)))
							{
								$image_width = imagesx($image);
								$image_height = imagesy($image);
								$ww = imagesx($watermark);
								$wh = imagesy($watermark);
								if (WATERMARK_FRACTION)
								{
									if ($image_width < $image_height)
									{
										$ww_new = round($image_width * WATERMARK_FRACTION);
									}
									else
									{
										$ww_new = round($image_height * WATERMARK_FRACTION);
									}
									$wh_new = round($wh * ($ww_new / $ww));
								}
								else
								{
									$ww_new = $ww;
									$wh_new = $wh;
								}
								imagecopyresampled ($image, $watermark, $image_width-$ww_new, $image_height-$wh_new, 0, 0, $ww_new, $wh_new, $ww, $wh);
								imagedestroy($watermark);
								$image_changed = TRUE;
							}
						}
					}
					if ($image_changed)
					{
						sfpg_mkdir(DATA_ROOT.'image/'.$image_dir);
						$new_full_img = DATA_ROOT.'image/'.$image_dir.$image_file;
						if ($image_type == 'jpeg')
						{
							imagejpeg($image, $new_full_img, IMAGE_JPEG_QUALITY);
						}
						elseif ($image_type == 'png')
						{
							imagepng($image, $new_full_img);
						}
						elseif ($image_type == 'gif')
						{
							imagegif($image, $new_full_img);
						}
					}
					$fp = fopen(DATA_ROOT.'info/'.$image_dir.$image_file, 'w');
					fwrite($fp, filemtime(GALLERY_ROOT.$image_dir.$image_file).'|'.sfpg_file_size(filesize(GALLERY_ROOT.$image_dir.$image_file)).'|'.imagesx($image).'|'.imagesy($image).'|'.$exif_info.'|'.$iptc_info);
					fclose($fp);
				}
				list($new_img_width, $new_img_height) = sfpg_aspect_resize(imagesx($image), imagesy($image), $max_width, $max_height, $enlarge);
				if(THUMB_SQUARE)
				{
					$new_img_width = $max_width;
					$new_img_height = $max_width;
				}
				$new_image = imagecreatetruecolor($new_img_width, $new_img_height);
				if (LOW_IMAGE_RESAMPLE_QUALITY)
				{
					if(THUMB_SQUARE)
					{
						$min_size = min(imagesx($image), imagesy($image));
						imagecopyresized($new_image, $image, 0, 0, round((imagesx($image)- $min_size)/2), 0, $new_img_width, $new_img_height, $min_size, $min_size);
					}
					else
					{
						imagecopyresized($new_image, $image, 0, 0, 0, 0, $new_img_width, $new_img_height, imagesx($image), imagesy($image));
					}
				}
				else
				{
					if(THUMB_SQUARE)
					{
						$min_size = min(imagesx($image), imagesy($image));
						imagecopyresampled($new_image, $image, 0, 0, round((imagesx($image)- $min_size)/2), 0, $new_img_width, $new_img_height, $min_size, $min_size);
					}
					else
					{
						imagecopyresampled($new_image, $image, 0, 0, 0, 0, $new_img_width, $new_img_height, imagesx($image), imagesy($image));
					}
				}
				imagedestroy($image);
				sfpg_mkdir(DATA_ROOT.$func.'/'.$image_dir);
				header('Content-type: image/'.$image_type);
				header('Content-Disposition: filename="'.$func.'_'.$image_file.'"');
				if ($image_type == 'jpeg')
				{
					imagejpeg($new_image, NULL, $jpeg_quality);
					imagejpeg($new_image, $image_path_file, $jpeg_quality);
				}
				elseif ($image_type == 'png')
				{
					imagepng($new_image);
					imagepng($new_image, $image_path_file);
				}
				elseif ($image_type == 'gif')
				{
					imagegif($new_image);
					imagegif($new_image, $image_path_file);
				}
				imagedestroy($new_image);
			}
		}
	}


	function sfpg_dir_info($dir, $initial=TRUE)
	{
		list($dirs, $images, $files, $misc) = sfpg_get_dir($dir, TRUE);
		if ($initial)
		{
			$info = count($dirs).'|'.(int)(count($images)-$misc).'|'.count($files).'|'.filemtime(GALLERY_ROOT.GALLERY.'.').'|';
		}
		else
		{
			$info = '';
		}
		if ((DIR_THUMB_FILE) and file_exists(GALLERY_ROOT.$dir.DIR_THUMB_FILE))
		{
			return $info.sfpg_url_string($dir, DIR_THUMB_FILE);
		}
		if (isset($images[0]))
		{
			return $info.sfpg_url_string($dir, $images[0]);
		}
		foreach ($dirs as $subdir)
		{
			$subresult = sfpg_dir_info($dir.$subdir.'/', FALSE);
			if ($subresult != '')
			{
				return $info.$subresult;
			}
		}
		if ($initial and file_exists(GALLERY_ROOT.ICONS_DIR.DIR_THUMB_FILE))
		{
			return $info.sfpg_url_string(ICONS_DIR, DIR_THUMB_FILE);
		}
		return $info;
	}


	function sfpg_set_dir_info($dir)
	{
		if (!sfpg_mkdir(DATA_ROOT.'info/'.$dir))
		{
			sfpg_clean_data_root($dir);
		}
		if ($fp = fopen(DATA_ROOT.'info/'.$dir.'_sfpg_dir', 'w'))
		{
			fwrite($fp, sfpg_dir_info($dir));
			fclose($fp);
		}
	}


	function sfpg_delete($element)
	{
		if (is_dir($element))
		{
			$items = array_diff(scandir($element),array('.','..'));
			foreach ($items as $item)
			{
				sfpg_delete($element."/".$item);
			}
			rmdir($element);
		}
		elseif (file_exists($element))
		{
			unlink($element);
		}
	}


	function sfpg_delete_from_data_root($element)
	{
		sfpg_delete(DATA_ROOT.'info/'.$element);
		sfpg_delete(DATA_ROOT.'thumb/'.$element);
		sfpg_delete(DATA_ROOT.'image/'.$element);
		sfpg_delete(DATA_ROOT.'preview/'.$element);
	}


	function sfpg_clean_data_root($dir)
	{
		$items = array_diff(scandir(DATA_ROOT.'info/'.$dir),array('.','..','_sfpg_dir'));
		foreach($items as $item)
		{
			if (!is_dir(GALLERY_ROOT.$dir.$item) and !file_exists(GALLERY_ROOT.$dir.$item))
			{
				sfpg_delete_from_data_root($dir.$item);
			}
		}
		$path='';
		$dirs=explode('/',$dir);
		foreach($dirs as $dirout)
		{
			if(file_exists(DATA_ROOT.'info/'.$path.'_sfpg_dir'))
			{
				unlink(DATA_ROOT.'info/'.$path.'_sfpg_dir');
			}
			$path.=$dirout.'/';
		}
	}


	function sfpg_random($nr)
	{
		$a='0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
		$res='';
		for($i = 0; $i<$nr; $i++)
		{
			$res.=$a[mt_rand(0,strlen($a)-1)];
		}
		return $res;
	}


	function sfpg_javascript()
	{
		global $dirs, $images, $files, $misc;
		echo "<script>
		<!--

		var phpSelf = '".$_SERVER["PHP_SELF"]."';

		var navLink = [];
		var navName = [];

		var dirLink = [];
		var dirThumb = [];
		var dirName = [];
		var dirInfo = [];

		var imgLink = [];
		var imgName = [];
		var imgInfo = [];
		var imgSell = [];

		var fileLink = [];
		var fileThumb = [];
		var fileName = [];
		var fileInfo = [];

		var imageSpace = 50;
		var slideshowActive = false;
		var slideshowSec = 0;

		var waitSpin = ['&bull;-----', '-&bull;----', '--&bull;---', '---&bull;--', '----&bull;-', '-----&bull;'];
		var waitSpinNr = 0;
		var waitSpinSpeed = 100;

		var showInfo = ".(TEXT_INFO?((isset($_GET["info"]) ? (($_GET["info"]=='1') ? "true" : "false") : (SHOW_INFO_BY_DEFAULT ? "true" : "false"))):"false").";

		var actualSize = false;
		var fullImgLoaded = false;
		var imageLargerThanViewport = false;
		var naviOk = true;
		var index = false;
		var preloadImg = new Image();
		var preloaded = -1;
		var preloadedFull = -1;

		var viewportWidth;
		var viewportHeight;
		var imgFullWidth;
		var imgFullHeight;
		
		var selectedDirs = [];
		var selectedImages = [];
		var selectedFiles = [];
		var selecting = false;
		var hofc = hoverOnFirstClick();

		";
		if (KEYBOARD_NAVIGATION)
		{
			echo"
			function keyNavigate(key)
			{
				if (!selecting)
				{
					var _Key = (window.event) ? event.keyCode : key.keyCode;
					switch(_Key)
					{
						case 33: // Page up
						case 38: // Up arrow
						case 37: // Left arrow
						cycleImg(-1); 
						break;
						case 32: // Space
						case 34: // Page down
						case 39: // Right arrow
						case 40: // Down arrow
						cycleImg(1);
						break;			
						case 27: // ESC
						if(index)
						{
							closeImageView();
						}
						else
						{
							if(navLink.length>2)
							{
								document.location=phpSelf+'?sfpg='+navLink[navLink.length-3]+(showInfo?'&info=1':'');
							}
						}
						break;
					}
				}
			}
			document.onkeyup = keyNavigate;	";
		}
		echo"

		function gebi(id)
		{
			return document.getElementById(id);
		}


		function hoverOnFirstClick()
		{
			var userAgent = window.navigator.userAgent;
			if ((userAgent.match(/iPad/i) || userAgent.match(/iPhone/i)))
			{
				return true;
			}
			return false;
		}


		function getViewport()
		{
			if (typeof window.innerWidth != 'undefined')
			{
				viewportWidth = window.innerWidth,
				viewportHeight = window.innerHeight
			}
			else if (typeof document.documentElement != 'undefined' && typeof document.documentElement.clientWidth != 'undefined' && document.documentElement.clientWidth != 0)
			{
				viewportWidth = document.documentElement.clientWidth,
				viewportHeight = document.documentElement.clientHeight
			}
			else
			{
				viewportWidth = document.getElementsByTagName('body')[0].clientWidth,
				viewportHeight = document.getElementsByTagName('body')[0].clientHeight
			}
			if (showInfo)
			{
				viewportWidth -= (".INFO_BOX_WIDTH." + 12);
			}
			viewportHeight -= ".MENU_BOX_HEIGHT.";
			if (viewportHeight < 0) viewportHeight = 20;
		}


		function initDisplay()
		{
			getViewport();
			if (index)
			{
				resizeImage();
			}
			var thirdWidth=Math.round((viewportWidth-40)/3);
			gebi('box_image').style.width = viewportWidth+'px';
			gebi('box_image').style.height = viewportHeight+'px';
			gebi('box_wait').style.width = viewportWidth+'px';
			gebi('box_wait').style.height = viewportHeight+'px';
			gebi('box_gallery').style.width = viewportWidth+'px';
			gebi('box_gallery').style.height = viewportHeight+'px';
			gebi('box_info').style.height = (viewportHeight-20)+'px';
			gebi('box_left').style.width = thirdWidth+'px';
			gebi('box_left').style.height = (viewportHeight-40)+'px';
			gebi('box_left').style.right = (thirdWidth*2+20)+'px';
			gebi('box_right').style.width = thirdWidth+'px';
			gebi('box_right').style.height = (viewportHeight-40)+'px';
			gebi('box_right').style.right = 20+'px';
			showMenu();
		}


		function resizeImage()
		{
			var availX, availY, aspectX, aspectY, newImgX, newImgY;
			availX = viewportWidth - imageSpace;
			availY = viewportHeight - imageSpace;
			if (availX < ".THUMB_MAX_WIDTH.")
			{
				availX = ".THUMB_MAX_WIDTH.";
			}
			if (availY < ".THUMB_MAX_HEIGHT.")
			{
				availY = ".THUMB_MAX_HEIGHT.";
			}
			if ((imgFullWidth > availX) || (imgFullHeight > availY))
			{
				imageLargerThanViewport = true;
			}
			else
			{
				imageLargerThanViewport = false;
			}
			if (!actualSize && ((imgFullWidth > availX) || (imgFullHeight > availY)))
			{
				aspectX = imgFullWidth / availX;
				aspectY = imgFullHeight / availY;
				if (aspectX > aspectY)
				{
					newImgX = availX;
					newImgY = Math.round(imgFullHeight / aspectX);
				}
				else
				{
					newImgX = Math.round(imgFullWidth / aspectY);
					newImgY = availY;
				}
				gebi('img_resize').innerHTML = newImgX + ' x ' + newImgY;
			}
			else
			{
				newImgX = imgFullWidth;
				newImgY = imgFullHeight;
				gebi('img_resize').innerHTML = '".sts(TEXT_NOT_SCALED)."';
			}
			gebi('img_size').innerHTML = imgFullWidth + ' x ' + imgFullHeight;
			gebi('full').width = newImgX;
			gebi('full').height = newImgY;
		}


		function fullSize()
		{
			if (actualSize == true)
			{
				actualSize = false;
				initDisplay();
			}
			else
			{
				actualSize = true;
				initDisplay();
			}
		}


		function showMenu()
		{
			if ((imgLink.length>0)&&naviOk)
			{
				menu = '<span id=\"button_left\" class=\"sfpg_button\" onclick=\"cycleImg(-1)\">".sts(TEXT_PREVIOUS)."</span>';
				if (index)
				{
					menu += '<span id=\"button_close\" class=\"sfpg_button\" onclick=\"closeImageView()\">".sts(TEXT_CLOSE_IMG_VIEW)."</span>';
				}
				else
				{
					menu += '<span class=\"sfpg_button_disabled\">".sts(TEXT_CLOSE_IMG_VIEW)."</span>';
				}
				menu += '<span id=\"button_right\" class=\"sfpg_button\" onclick=\"cycleImg(1)\">".sts(TEXT_NEXT)."</span>';
				";
				if (TEXT_SLIDESHOW)
				{
					echo"
					if (slideshowActive)
					{
						menu += '<span class=\"sfpg_button_on\" onclick=\"slideshowActive=false; showMenu();\">".sts(TEXT_SLIDESHOW)."</span>';
					}
					else
					{
						menu += '<span class=\"sfpg_button\" onclick=\"slideshowActive=true; showMenu(); slideshow(true);\">".sts(TEXT_SLIDESHOW)."</span>';
					}";
				}
				echo "
			}
			else
			{
				menu = '<span class=\"sfpg_button_disabled\">".sts(TEXT_PREVIOUS)."</span>';
				menu += '<span class=\"sfpg_button_disabled\">".sts(TEXT_CLOSE_IMG_VIEW)."</span>';
				menu += '<span class=\"sfpg_button_disabled\">".sts(TEXT_NEXT)."</span>';
				".(TEXT_SLIDESHOW ? "menu += '<span class=\"sfpg_button_disabled\">" . sts(TEXT_SLIDESHOW) . "</span>';" : "")."
			}";
			if (TEXT_INFO)
			{
				echo "
				if (showInfo)
				{
					menu += '<span onclick=\"toggleInfo(showInfo);\" class=\"sfpg_button_on\">".sts(TEXT_INFO)."</span>';
				}
				else
				{
					menu += '<span onclick=\"toggleInfo(showInfo);\" class=\"sfpg_button\">".sts(TEXT_INFO)."</span>';
				}";
			}
			echo "
			if (index && imageLargerThanViewport)
			{
				if (actualSize)
				{
					menu += '<span class=\"sfpg_button_on\" onclick=\"fullSize()\">".sts(TEXT_ACTUAL_SIZE)."</span>';
				}
				else
				{
					menu += '<span class=\"sfpg_button\" onclick=\"fullSize()\">".sts(TEXT_ACTUAL_SIZE)."</span>';
				}
			}
			else
			{
				menu += '<span class=\"sfpg_button_disabled\">".sts(TEXT_ACTUAL_SIZE)."</span>';
			}


			";
			if (USE_PREVIEW)
			{
				echo "
				if (index)
				{
					if (fullImgLoaded)
					{
						menu += '<span class=\"sfpg_button_on\" onclick=\"openImageView('+index+', false)\">".sts(TEXT_FULLRES)."</span>';
					}
					else
					{
						menu += '<span class=\"sfpg_button\" onclick=\"openImageView('+index+', true)\">".sts(TEXT_FULLRES)."</span>';
					}
				}
				else
				{
					menu += '<span class=\"sfpg_button_disabled\">".sts(TEXT_FULLRES)."</span>';
				}
				";
			}
			if (LINK_BACK)
			{
				echo "menu += '<span class=\"sfpg_button\" onclick=\"window.location=\'".LINK_BACK."\'\">".sts(TEXT_LINK_BACK)."</span>';
				";
			}
			if (PASSWORD!=='')
			{
				echo "menu += '<span class=\"sfpg_button\" onclick=\"window.location=\'".$_SERVER['PHP_SELF']."?cmd=logout\'\">".sts(TEXT_LOGOUT)."</span>';";
			}
			if (ADMIN===TRUE)
			{
				echo"
					if (selecting)
					{
						menu = '<span class=\"sfpg_button\" onclick=\"admDelete()\">".sts(TEXT_DELETE)."</span>';
						menu += '<span class=\"sfpg_button\" onclick=\"admRename()\">".sts(TEXT_RENAME)."</span>';
						menu += '<span class=\"sfpg_button\" onclick=\"admMove()\">".sts(TEXT_MOVE)."</span>';
						menu += '<span class=\"sfpg_button\" onclick=\"admMakeDir()\">".sts(TEXT_MKDIR)."</span>';
						menu += '<span class=\"sfpg_button\" onclick=\"admDesc()\">".sts(TEXT_DESCRIPTION)."</span>';
						menu += '<span class=\"sfpg_button\" onclick=\"admSell()\">".sts(TEXT_PAYPAL_FOR_SALE)."</span>';
						menu += '<span class=\"sfpg_button_on\" onclick=\"toggleSelect()\">".sts(TEXT_ADMIN)."</span>';
					}
					else
					{
						menu += '<span class=\"sfpg_button\" onclick=\"toggleSelect()\">".sts(TEXT_ADMIN)."</span>';
					}
				";
			}
			echo"
			gebi('div_menu').innerHTML = menu;
		}


		function openImageView(imgId, full)
		{
			if (!index)
			{
				gebi('box_overlay').style.visibility='visible';
				setOpacity('box_overlay', ".OVERLAY_OPACITY.");
			}
			index = imgId;
			fillInfo('img', index);
			setOpacity('full', 0);
			gebi('wait').style.visibility='visible';
			gebi('box_wait').style.visibility='visible';
			gebi('box_image').style.visibility='visible';
			gebi('box_left').style.visibility='visible';
			gebi('box_right').style.visibility='visible';
			preloadImage(index, full);
			actualSize = false;
			fullImgLoaded = full;
			showMenu();
			showImage(0);
		}


		function preloadImage(imgId, full)
		{
			if ((preloaded != imgId) || (preloadedFull != full))
			{
				preloadImg = new Image();
				if ((full == 1) || (".(USE_PREVIEW ? "false" : "true")."))
				{
					preloadImg.src = '';
					preloadImg.src = phpSelf+'?cmd=image&sfpg='+imgLink[imgId];
					preloadedFull = 1;
				}
				else
				{
					preloadImg.src = '';
					preloadImg.src = phpSelf+'?cmd=preview&sfpg='+imgLink[imgId];
					preloadedFull = 0;
				}
				preloaded = imgId;
			}
		}
		";
		$date_format = str_replace('Year', "'+year+'", DATE_FORMAT);
		$date_format = str_replace('Nrmonth', "'+nrmon+'", $date_format);
		$date_format = str_replace('Month', "'+month+'", $date_format);
		$date_format = str_replace('Date', "'+date+'", $date_format);
		$date_format = str_replace('Hour', "'+hour+'", $date_format);
		$date_format = str_replace('Min', "'+min+'", $date_format);
		$date_format = str_replace('Sec', "'+sec+'", $date_format);
		$date_format = str_replace('Day', "'+day+'", $date_format);
		echo"
		function dateFormat(timestamp)
		{
			var dt = new Date(timestamp*1000);
			var months = ['Jan','Feb','Mar','Apr','May','Jun','Jul','Aug','Sep','Oct','Nov','Dec'];
			var days = ['Sun','Mon','Tue','Wed','Thu','Fri','Sat'];
			var year = dt.getFullYear();
			var nrmon = dt.getMonth()+1;
			var month = months[dt.getMonth()];
			var date = dt.getDate();
			var hour = (dt.getHours()<10?'0'+dt.getHours():dt.getHours());
			var min = (dt.getMinutes()<10?'0'+dt.getMinutes():dt.getMinutes());
			var sec = (dt.getSeconds()<10?'0'+dt.getSeconds():dt.getSeconds());
			var day = days[dt.getDay()];
			return '".$date_format."';
		}


		function fillInfo(type, id)
		{
			if (!index || (type == 'img'))
			{
				var info='<div class=\"thumbimgbox\">';
				if (type == 'dir')
				{
					if (dirThumb[id] != '')
					{
						info += '<img class=\"thumb\" alt=\"\" src=\"'+phpSelf+'?cmd=thumb&sfpg='+dirThumb[id]+'\">';
					}
					else
					{
						info += '<br><br>".sts(TEXT_NO_IMAGES)."';
					}
					info += '</div>';
					info += '<strong>".sts(TEXT_DIR_NAME)."</strong><br><div class=\"sfpg_info_text\">'+dirName[id] + '</div><br>';
					var splint = dirInfo[id].split('|');
					".(DIR_DESC_IN_INFO?"info += '<strong>".sts(TEXT_DESCRIPTION)."</strong><br><div class=\"sfpg_info_text\">'+splint[4]+'<br></div><br>';":"")."
					info += '<strong>".sts(TEXT_INFO)."</strong><br><div class=\"sfpg_info_text\">';
					info += '".sts(TEXT_DATE).": '+dateFormat(splint[0])+'<br>';
					info += '".sts(TEXT_DIRS).": '+splint[1]+'<br>';
					info += '".sts(TEXT_IMAGES).": '+splint[2]+'<br>';";
					if (SHOW_FILES)
					{
						echo "
						info += '".sts(TEXT_FILES).": '+splint[3]+'<br>';";
					}
					echo "
					info += '</div><br>';
					info += '<strong>".sts(TEXT_LINKS)."</strong><br><a href=\"'+phpSelf+'?sfpg='+dirLink[id]+'\">".sts(TEXT_DIRECT_LINK_GALLERY)."</a><br><br>';
				}
				else if (type == 'img')
				{
					info += '<img class=\"thumb\" alt=\"\" src=\"'+phpSelf+'?cmd=thumb&sfpg='+imgLink[id]+'\">';
					info += '</div>';
					var splint = imgInfo[id].split('|');
					info += '<strong>".sts(TEXT_IMAGE_NAME)."</strong><br><div class=\"sfpg_info_text\">'+imgName[id] + '</div><br>';
					";
					if(PAYPAL_ENABLED)
					{
						echo"
						if (typeof imgSell[id]!='undefined')
						{
							var sellSplint = imgSell[id].split('|');
							info += '<strong>".sts(TEXT_PAYPAL_FOR_SALE)."</strong><br><div class=\"sfpg_info_text\">';
							info += '".sts(TEXT_PAYPAL_PRICE).": '+(((typeof sellSplint[0]!='undefined')&&(sellSplint[0]!=''))?sellSplint[0]:'".sts(TEXT_PAYPAL_NO_PRICE)."')+'<br>';
							info += '".sts(TEXT_PAYPAL_IN_STOCK).": '+(((typeof sellSplint[1]!='undefined')&&(sellSplint[1]!=''))?sellSplint[1]:'".sts(TEXT_PAYPAL_OUT_OF_STOCK)."')+'<br>';
							info += '".sts(TEXT_PAYPAL_ITEM_ID).": '+sellSplint[2]+'<br>';
							if ((typeof sellSplint[1]!='undefined')&&(sellSplint[1]>0)&&(typeof sellSplint[0]!='undefined')&&(sellSplint[0]!=''))
							{
								info += '<br><span onclick=\"window.location=\''+phpSelf+'?cmd=buy&sfpg='+imgLink[id]+'\'\" class=\"sfpg_button\">".sts(TEXT_PAYPAL_BUY)."</span><br><br>';
							}
							else
							{
								info += '<br><span class=\"sfpg_button_disabled\">".sts(TEXT_PAYPAL_BUY)."</span><br><br>';
							}
							info += '</div><br>';
						}
						";
					}
					echo"
					if (typeof splint[10] != 'undefined')
					{
						info += '<strong>".sts(TEXT_DESCRIPTION)."</strong><br><div class=\"sfpg_info_text\">';
						info += splint[29]+'<br>';
						info += '</div><br>';
						info += '<strong>".sts(TEXT_INFO)."</strong><br><div class=\"sfpg_info_text\">';
						info += '".sts(TEXT_DATE).": '+dateFormat(splint[0])+'<br>';
						info += '".sts(TEXT_IMAGESIZE).": '+splint[2]+' x '+splint[3]+'<br>';
						info += '".sts(TEXT_DISPLAYED_IMAGE).": <span id=\"img_size\"></span> (';
						if (fullImgLoaded || ".(USE_PREVIEW ? "false" : "true").")
						{
							info += '".sts(TEXT_THIS_IS_FULL)."';
						}
						else
						{
							info += '".sts(TEXT_THIS_IS_PREVIEW)."';
						}
						info += ')<br>';
						info += '".sts(TEXT_SCALED_TO).": <span id=\"img_resize\"></span><br>';
						info += '".sts(TEXT_FILESIZE).": '+splint[1]+'<br>';
						info += '".sts(TEXT_IMAGE_NUMBER).": '+id+' / '+(imgLink.length-1)+'<br>';
						info += '</div><br>';";
						if (SHOW_EXIF_INFO)
						{
							echo"
							info += '<strong>".sts(TEXT_EXIF)."</strong><br><div class=\"sfpg_info_text\">';
							if (splint[4] == 'sfpg_no_exif_data_in_file')
							{
								info += '".sts(TEXT_EXIF_MISSING)."';
							}
							else
							{
								var exifInfo = (splint[4]!=''?'".sts(TEXT_EXIF_DATE).": '+dateFormat(splint[4])+'<br>':'');
								exifInfo += (splint[5]!=''?'".sts(TEXT_EXIF_CAMERA).": '+splint[5]+'<br>':'');
								exifInfo += (splint[6]!=''?'".sts(TEXT_EXIF_ISO).": '+splint[6]+'<br>':'');
								exifInfo += (splint[7]!=''?'".sts(TEXT_EXIF_SHUTTER).": '+splint[7]+'<br>':'');
								exifInfo += (splint[8]!=''?'".sts(TEXT_EXIF_APERTURE).": '+splint[8]+'<br>':'');
								exifInfo += (splint[9]!=''?'".sts(TEXT_EXIF_FOCAL).": '+splint[9]+'<br>':'');
								exifInfo += (splint[10]!=''?'".sts(TEXT_EXIF_FLASH).": '+splint[10]+'<br>':'');
								if (exifInfo != '')
								{
									info += exifInfo;
								}
								else
								{
									info += '".sts(TEXT_EXIF_MISSING)."';
								}
							}
							info += '</div><br>';";
						}
						if (SHOW_IPTC_INFO)
						{
							echo"
							info += '<strong>".sts(TEXT_IPTC)."</strong><br><div class=\"sfpg_info_text\">';
							if (splint[11] == 'sfpgnoiptc')
							{
								info += '".sts(TEXT_IPTC_MISSING)."';
							}
							else
							{
								var iptcInfo = (splint[11]!=''?'".sts(TEXT_IPTC_TITLE).": '+splint[11]+'<br>':'');
								iptcInfo += (splint[12]!=''?'".sts(TEXT_IPTC_URGENCY).": '+splint[12]+'<br>':'');
								iptcInfo += (splint[13]!=''?'".sts(TEXT_IPTC_CATEGORY).": '+splint[13]+'<br>':'');
								iptcInfo += (splint[14]!=''?'".sts(TEXT_IPTC_SUBCATEGORIES).": '+splint[14]+'<br>':'');
								iptcInfo += (splint[15]!=''?'".sts(TEXT_IPTC_SPECIALINSTRUCTIONS).": '+splint[15]+'<br>':'');
								iptcInfo += (splint[16]!=''?'".sts(TEXT_IPTC_CREATIONDATE).": '+splint[16]+'<br>':'');
								iptcInfo += (splint[17]!=''?'".sts(TEXT_IPTC_AUTHORBYLINE).": '+splint[17]+'<br>':'');
								iptcInfo += (splint[18]!=''?'".sts(TEXT_IPTC_AUTHORTITLE).": '+splint[18]+'<br>':'');
								iptcInfo += (splint[19]!=''?'".sts(TEXT_IPTC_CITY).": '+splint[19]+'<br>':'');
								iptcInfo += (splint[20]!=''?'".sts(TEXT_IPTC_STATE).": '+splint[20]+'<br>':'');
								iptcInfo += (splint[21]!=''?'".sts(TEXT_IPTC_COUNTRY).": '+splint[21]+'<br>':'');
								iptcInfo += (splint[22]!=''?'".sts(TEXT_IPTC_OTR).": '+splint[22]+'<br>':'');
								iptcInfo += (splint[23]!=''?'".sts(TEXT_IPTC_HEADLINE).": '+splint[23]+'<br>':'');
								iptcInfo += (splint[24]!=''?'".sts(TEXT_IPTC_SOURCE).": '+splint[24]+'<br>':'');
								iptcInfo += (splint[25]!=''?'".sts(TEXT_IPTC_PHOTOSOURCE).": '+splint[25]+'<br>':'');
								iptcInfo += (splint[26]!=''?'".sts(TEXT_IPTC_COPYRIGHT).": '+splint[26]+'<br>':'');
								iptcInfo += (splint[27]!=''?'".sts(TEXT_IPTC_CAPTION).": '+splint[27]+'<br>':'');
								iptcInfo += (splint[28]!=''?'".sts(TEXT_IPTC_CAPTIONWRITER).": '+splint[28]+'<br>':'');
								if (iptcInfo != '')
								{
									info += iptcInfo;
								}
								else
								{
									info += '".sts(TEXT_IPTC_MISSING)."';
								}
							}
							info += '</div><br>';";
						}
						echo"
					}
					else
					{
						info += '<br><strong>".sts(TEXT_FIRST_VIEW)."</strong><br><br><span id=\"img_size\"></span><span id=\"img_resize\"></span><br><br>';
					}
					info += '<strong>".sts(TEXT_LINKS)."</strong><br>';
					info += '<a href=\"'+phpSelf+'?sfpg='+imgLink[id]+'\">".sts(TEXT_DIRECT_LINK_IMAGE)."</a><br>';
					".(TEXT_DOWNLOAD ? "info += '<a href=\"'+phpSelf+'?cmd=dl&sfpg='+imgLink[id]+'\">".sts(TEXT_DOWNLOAD)."</a><br><br>';" : "")."
				}
				else if (type == 'file')
				{
					if (fileThumb[id] != '')
					{
						info += '<img class=\"thumb\" alt=\"\" src=\"'+phpSelf+'?cmd=thumb&sfpg='+fileThumb[id]+'\">';
					}
					else
					{
						info += '<br><br>".sts(TEXT_NO_PREVIEW_FILE)."<br>';
					}
					info += '</div>';
					info += '<strong>".sts(TEXT_FILE_NAME)."</strong><br><div class=\"sfpg_info_text\">'+fileName[id]+'</div><br>';
					var splint = fileInfo[id].split('|');
					info += '<strong>".sts(TEXT_DESCRIPTION)."</strong><br><div class=\"sfpg_info_text\">'+splint[2]+'<br></div><br>';
					info += '<strong>".sts(TEXT_INFO)."</strong><br><div class=\"sfpg_info_text\">';
					info += '".sts(TEXT_DATE).": '+dateFormat(splint[0])+'<br>';
					info += '".sts(TEXT_FILESIZE).": '+splint[1]+'<br>';
					info += '</div><br>';
				}
				gebi('box_inner_info').innerHTML = info;
			}
		}


		function toggleInfo(status)
		{
			if (status)
			{
				gebi('box_info').style.visibility='hidden';
			}
			else
			{
				setOpacity('box_info', 0);
				gebi('box_info').style.visibility='visible';
				fadeOpacity('box_info', 0,	100, ".FADE_DURATION_MS.");
			}
			showInfo = !status;
			initDisplay();
		}


		function openGallery(id, type)
		{
			window.location=phpSelf+'?sfpg='+((type=='nav')?navLink[id]:dirLink[id])+(showInfo?'&info=1':'');
		}


		function openFile(id)
		{
			if (".(FILE_IN_NEW_WINDOW ? "true" : "false").")
			{
				window.open(phpSelf+'?cmd=file&sfpg='+fileLink[id]);
			}
			else
			{
				window.location	= phpSelf+'?cmd=file&sfpg='+fileLink[id];
			}
		}


		function nextImage(direction)
		{
			var nextIndex;
			if (!index)
			{
				if (direction > 0)
				{
					return 1;
				}
				else
				{
					return (imgLink.length - 1);
				}
			}
			var nextImg = index + direction;
			if (nextImg > imgLink.length - 1)
			{
				nextImg = 1;
			}
			if (nextImg < 1)
			{
				nextImg = imgLink.length - 1;
			}
			return nextImg;
		}


		function cycleImg(direction)
		{
			if ((imgLink.length>0)&&naviOk)
			{
				openImageView(nextImage(direction), false);
			}
		}


		function showImage(stage)
		{
			if(stage==0)
			{
				gebi('full').src = '';
				naviOk=false;
				showMenu();
				stage=1;
			}
			if(stage==1)
			{
				if (preloadImg.complete)
				{
					gebi('full').src = preloadImg.src;
					initDisplay();
					stage=2;
				}
			}
			if(stage==2)
			{
				if(gebi('full').complete)
				{
					naviOk=true;
					imgFullWidth = preloadImg.width;
					imgFullHeight = preloadImg.height;
					fillInfo('img', index);
					initDisplay();
					preloadImage(nextImage(1),0);
					gebi('wait').style.visibility='hidden';
					fadeOpacity('full', 0, 100, ".FADE_DURATION_MS.");
					stage=3;
				}
			}
			if (waitSpinNr >= waitSpin.length)
			{
				waitSpinNr = 0;
			}
			gebi('wait').innerHTML = '<div class=\"loading\">".sts(TEXT_IMAGE_LOADING)."' + waitSpin[waitSpinNr] + '</div>';
			waitSpinNr++;
			if ((stage<3) && index)
			{
				setTimeout ('showImage('+stage+')',waitSpinSpeed);
			}
		}


		function closeImageView()
		{
			slideshowActive = false;
			gebi('box_wait').style.visibility='hidden';
			gebi('wait').style.visibility='hidden';
			gebi('box_image').style.visibility='hidden';
			gebi('box_left').style.visibility='hidden';
			gebi('box_right').style.visibility='hidden';
			index = false;
			naviOk=true;
			showMenu();
			fadeOpacity('box_overlay', ".OVERLAY_OPACITY.", 0, ".FADE_DURATION_MS.");
			gebi('full').width = 1;
			gebi('full').height = 1;
			gebi('full').src = '';
			fillInfo('dir', 0);
		}


		function setOpacity(id, opacity)
		{
			var element = gebi(id).style;
			element.opacity = (opacity / 100);	// std
			element.MozOpacity = (opacity / 100);	// firefox
			element.filter = 'alpha(opacity=' + opacity + ')';	// IE
			element.KhtmlOpacity = (opacity / 100);	// Mac
		}


		function fadeOpacity(id, opacityStart, opacityEnd, msToFade)
		{
			var element = gebi(id);
			var currentTime = new Date().getTime();
			element.opacityStart = opacityStart;
			element.opacityEnd = opacityEnd;
			element.timeStart = currentTime;
			element.timeEnd = currentTime + msToFade;
			fadeLoop(id, currentTime);
		}


		function fadeLoop(id, timeStarted)
		{
			var element = gebi(id);
			if (timeStarted != element.timeStart)
			{
				return;
			}
			var currentTime = new Date().getTime();
			var frac = (currentTime - element.timeStart) / (element.timeEnd - element.timeStart);
			if (frac >= 1)
			{	
				setOpacity(id, element.opacityEnd);
				if (element.opacityEnd == 0)
				{
					element.style.visibility='hidden';
				}
				return;
			}
			setOpacity(id, ((element.opacityEnd - element.opacityStart) * frac) + element.opacityStart);
			setTimeout(\"fadeLoop('\" + id + \"', \" + timeStarted + \")\", 50);
		}


		function thumbDisplayName(name)
		{
			dispName = name.substring(0,".THUMB_CHARS_MAX.");
			if (name.length > ".THUMB_CHARS_MAX.")
			{
				dispName += '...';
			}
			return dispName;
		}

		";
		if (ADMIN===TRUE)
		{
			echo"


		function toggleSelect()
		{
			if (selecting)
			{
				selecting = false;
				showMenu();
				selectedDirs = [];
				selectedImages = [];
				selectedFiles = [];
				for (i = 1; i < dirLink.length; i++)
				{
					mouseOut(gebi('dir'+i), 'dir', i);
				}
				for (i = 1; i < imgLink.length; i++)
				{
					mouseOut(gebi('img'+i), 'img', i);
				}
				for (i = 1; i < fileLink.length; i++)
				{
					mouseOut(gebi('file'+i), 'file', i);
				}
			}
			else
			{
				selecting = true;
				showMenu();
			}
		}


		function admDelete()
		{
			var sel=selectedDirs.length + selectedImages.length + selectedFiles.length;
			if (sel==0)
			{
				alert('".sts(TEXT_NOTHING)."');
			}
			else
			{
				if (confirm('".sts(TEXT_DELETE)." '+(selectedDirs.length?'\\n'+selectedDirs.length+' ".sts(TEXT_DIRS)."':'')+(selectedImages.length?'\\n'+selectedImages.length+' ".sts(TEXT_IMAGES)."':'')+(selectedFiles.length?'\\n'+selectedFiles.length+' ".sts(TEXT_FILES)."':'')+'?') == true)
				{
					var form = makeForm();
					form.appendChild(makeInput('func','delete'));
					formAddSelected(form);
					submitForm(form);
				}
			}
		}


		function formAddSelected(form)
		{
			for (i=0; i<selectedDirs.length; i++)
			{
				form.appendChild(makeInput('elems[]',dirLink[selectedDirs[i]]));
			}
			for (i=0; i<selectedImages.length; i++)
			{
				form.appendChild(makeInput('elems[]',imgLink[selectedImages[i]]));
			}
			for (i=0; i<selectedFiles.length; i++)
			{
				form.appendChild(makeInput('elems[]',fileLink[selectedFiles[i]]));
			}
		}


		function admRename()
		{
			var sel=selectedDirs.length + selectedImages.length + selectedFiles.length;
			if (sel>1)
			{
				alert('".sts(TEXT_ONLY_ONE)."');
			}
			else if (sel<1)
			{
				alert('".sts(TEXT_NOTHING)."');
			}
			else
			{
				if (selectedDirs.length>0)
				{
					oldName = dirName[selectedDirs[0]];
					oldEle = dirLink[selectedDirs[0]];
				}
				if (selectedImages.length>0)
				{
					oldName = imgName[selectedImages[0]];
					oldEle = imgLink[selectedImages[0]];
				}
				if (selectedFiles.length>0)
				{
					oldName = fileName[selectedFiles[0]];
					oldEle = fileLink[selectedFiles[0]];
				}
				var newName = prompt('".sts(TEXT_RENAME)."', oldName);
				if (newName != null)
				{
					var form = makeForm();
					form.appendChild(makeInput('func','rename'));
					form.appendChild(makeInput('eleToRen',oldEle));
					form.appendChild(makeInput('newName',newName));
					submitForm(form);
				}
			}
		}


		function admMove(dir)
		{
			var sel=selectedDirs.length + selectedImages.length + selectedFiles.length;
			if (sel<1)
			{
				alert('".sts(TEXT_NOTHING)."');
			}
			else
			{
				var ifrm = document.createElement('iframe');
				ifrm.setAttribute('src', phpSelf+'?cmd=dirs&sfpg='+dir);
				var ele=gebi('box_data');
				ele.innerHTML='';
				ele.appendChild(ifrm);
			}
		}


		function admMovePost(toFolder,toName)
		{
			var ele=gebi('box_admin');
			ele.style.visibility='hidden';
			ele.innerHTML='';
			if ((toFolder!==false) && (toName!==false))
			{
				if (confirm('".sts(TEXT_MOVE)." '+(selectedDirs.length?'\\n'+selectedDirs.length+' ".sts(TEXT_DIRS)."':'')+(selectedImages.length?'\\n'+selectedImages.length+' ".sts(TEXT_IMAGES)."':'')+(selectedFiles.length?'\\n'+selectedFiles.length+' ".sts(TEXT_FILES)."':'')+'\\n-> '+toName+'?') == true)
				{
					var form = makeForm();
					form.appendChild(makeInput('func','move'));
					form.appendChild(makeInput('toFolder',toFolder));
					formAddSelected(form);
					submitForm(form);
				}
			}
		}


		function admSell()
		{
			var sel=selectedDirs.length + selectedImages.length + selectedFiles.length;
			if (sel<1)
			{
				alert('".sts(TEXT_NOTHING)."');
			}
			else if ((sel>1)||(selectedImages.length!=1))
			{
				alert('".sts(TEXT_ONE_IMAGE)."');
			}
			else
			{
				eName = imgName[selectedImages[0]];
				eLink = imgLink[selectedImages[0]];
				if (typeof imgSell[selectedImages[0]]!='undefined')
				{
					var sellSplint = imgSell[selectedImages[0]].split('|');
					var ePrice = (((typeof sellSplint[0]!='undefined')&&(sellSplint[0]!=''))?sellSplint[0]:0.0);
					var eAmount = (((typeof sellSplint[1]!='undefined')&&(sellSplint[1]!=''))?sellSplint[1]:0);
					var eIdent = (((typeof sellSplint[2]!='undefined')&&(sellSplint[2]!=''))?sellSplint[2]:'');
				}
				else
				{
					var ePrice = 0;
					var eAmount = 0;
					var eIdent = '';
				}
				var boxForm = '<strong>".sts(TEXT_PAYPAL_FOR_SALE)."</strong>: '+eName+'<br><br>'+
				'<span class=\"sfpg_button\" onclick=\"admSellPost(\''+eLink+'\', \''+eName+'\', \'ok\')\">".TEXT_OK."</span>'+
				'<span class=\"sfpg_button\" onclick=\"admSellPost(\''+eLink+'\', \''+eName+'\',\'del\')\">".TEXT_DELETE."</span>'+
				'<span class=\"sfpg_button\" onclick=\"admSellPost(0,0,\'cancel\')\">".TEXT_CANCEL."</span><br><br>'+
				'".sts(TEXT_PAYPAL_PRICE).": <input type=\"text\" value=\"'+ePrice+'\" id=\"ePrice\"><br>'+
				'".sts(TEXT_PAYPAL_IN_STOCK).": <input type=\"text\" value=\"'+eAmount+'\" id=\"eAmount\"><br>'+
				'".sts(TEXT_PAYPAL_ITEM_ID).": <input type=\"text\" value=\"'+eIdent+'\" id=\"eIdent\">';
				var ele=gebi('box_admin');
				ele.innerHTML=boxForm;
				ele.style.visibility='visible';
			}
		}


		function admSellPost(link, name, action)
		{
			var ePrice = gebi('ePrice').value;
			var eAmount = gebi('eAmount').value;
			var eIdent = gebi('eIdent').value;
			var ele=gebi('box_admin');
			ele.style.visibility='hidden';
			ele.innerHTML='';
			if (action=='del')
			{
				if (confirm('".sts(TEXT_DELETE.' '.TEXT_PAYPAL_FOR_SALE).": '+name+'?') == true)
				{
					var form = makeForm();
					form.appendChild(makeInput('func','sell'));
					form.appendChild(makeInput('action','del'));
					form.appendChild(makeInput('ele',link));
					submitForm(form);
				}
			}
			if (action=='ok')
			{
				var form = makeForm();
				form.appendChild(makeInput('func','sell'));
				form.appendChild(makeInput('action','save'));
				form.appendChild(makeInput('ePrice',ePrice));
				form.appendChild(makeInput('eAmount',eAmount));
				form.appendChild(makeInput('eIdent',eIdent));
				form.appendChild(makeInput('ele',link));
				submitForm(form);
			}
		}


		function admDesc()
		{
			var sel=selectedDirs.length + selectedImages.length + selectedFiles.length;
			if (sel>1)
			{
				alert('".sts(TEXT_ONLY_ONE)."');
			}
			else
			{
				var eName;
				var eLink;
				var eDesc;
				if (selectedDirs.length>0)
				{
					eName = dirName[selectedDirs[0]];
					eLink = dirLink[selectedDirs[0]];
					var splint = dirInfo[selectedDirs[0]].split('|');
					eDesc = splint[4];
				}
				else if (selectedImages.length>0)
				{
					eName = imgName[selectedImages[0]];
					eLink = imgLink[selectedImages[0]];
					var splint = imgInfo[selectedImages[0]].split('|');
					eDesc = splint[29];
				}
				else if (selectedFiles.length>0)
				{
					eName = fileName[selectedFiles[0]];
					eLink = fileLink[selectedFiles[0]];
					var splint = fileInfo[selectedFiles[0]].split('|');
					eDesc = splint[2];
				}
				else
				{
					eName = dirName[0];
					eLink = dirLink[0];
					var splint = dirInfo[0].split('|');
					eDesc = splint[4];
				}
				var boxForm = '".sts(TEXT_DESCRIPTION).": '+eName+'<br><br>'+
				'<span class=\"sfpg_button\" onclick=\"admDescPost(\''+eLink+'\', \''+eName+'\', \'ok\')\">".sts(TEXT_OK)."</span>'+
				'<span class=\"sfpg_button\" onclick=\"admDescPost(\''+eLink+'\', \''+eName+'\',\'del\')\">".sts(TEXT_DELETE)."</span>'+
				'<span class=\"sfpg_button\" onclick=\"admDescPost(0,0,\'cancel\')\">".sts(TEXT_CANCEL)."</span><br><br>'+
				'<textarea id=\"desctxt\" rows=\"20\" cols=\"100\">'+eDesc.replace(/<br>/gi,'<br>\\n')+'</textarea>';
				var ele=gebi('box_admin');
				ele.innerHTML=boxForm;
				ele.style.visibility='visible';
			}
		}


		function admDescPost(link, name, action)
		{
			var text=gebi('desctxt').value;
			var ele=gebi('box_admin');
			ele.style.visibility='hidden';
			ele.innerHTML='';
			if (action=='del')
			{
				if (confirm('".sts(TEXT_DELETE." ".TEXT_DESCRIPTION).": '+name+'?') == true)
				{
					var form = makeForm();
					form.appendChild(makeInput('func','desc'));
					form.appendChild(makeInput('action','del'));
					form.appendChild(makeInput('ele',link));
					submitForm(form);
				}
			}
			if (action=='ok')
			{
				var form = makeForm();
				form.appendChild(makeInput('func','desc'));
				form.appendChild(makeInput('action','save'));
				form.appendChild(makeInput('text',text));
				form.appendChild(makeInput('ele',link));
				submitForm(form);
			}
		}


		function sendData(data)
		{
			var ele=gebi('box_admin');
			ele.innerHTML=data;
			ele.style.visibility='visible';
		}


		function admMakeDir()
		{
			var newDir = prompt('".sts(TEXT_MKDIR)."');
			if (newDir)
			{
				var form = makeForm();
				form.appendChild(makeInput('func','makedir'));
				form.appendChild(makeInput('dir',newDir));
				form.appendChild(makeInput('path',dirLink[0]));
				submitForm(form);
			}
		}


		function makeInput(name,value)
		{
			var inp = document.createElement('input');
			inp.setAttribute('type','hidden');
			inp.setAttribute('name',name);
			inp.setAttribute('value',value);
			return inp;
		}


		function makeForm()
		{
			var selectForm = document.createElement('form');
			selectForm.setAttribute('method','post');
			selectForm.setAttribute('id','selectForm');
			selectForm.setAttribute('action', phpSelf+'?sfpg='+dirLink[0]+(showInfo?'&info=1':''));
			return selectForm;
		}


		function submitForm(form)
		{
			document.getElementsByTagName('body')[0].appendChild(form);
			gebi('selectForm').submit();
		}


		function selectElement(that, arr, nr)
		{
			var ele = arr.indexOf(nr);
			if (ele == -1)
			{
				arr.push(nr);
			}
			else
			{
				arr.splice(ele, 1);
			}
		}
		";
		}
		echo "

		function isSelected(type, nr)
		{
			if (type == 'dir')
			{
				var ele = selectedDirs.indexOf(nr);
			}
			else if (type == 'img')
			{
				var ele = selectedImages.indexOf(nr);
			}
			else if (type == 'file')
			{
				var ele = selectedFiles.indexOf(nr);
			}
			if (ele == -1)
			{
				return false;
			}
			else
			{
				return true;
			}
		}


		function mouseOver(that, type, nr)
		{
			if (hofc)
			{
				mouseClick(that, type, nr);
			}
			else
			{
				fillInfo(type, nr);
				if (isSelected(type, nr))
				{
					that.className='innerbox_marked';
				}
				else if (type=='dir')
				{
					that.className='innerboxdir_hover';
				}
				else if (type=='img')
				{
					that.className='innerboximg_hover';
				}
				else if (type=='file')
				{
					that.className='innerboxfile_hover';
				}
			}
		}


		function mouseOut(that, type, nr)
		{
			fillInfo('dir', 0);
			if (isSelected(type, nr))
			{
				that.className='innerbox_marked';
			}
			else if (type=='dir')
			{
				that.className='innerboxdir';
			}
			else if (type=='img')
			{
				that.className='innerboximg';
			}
			else if (type=='file')
			{
				that.className='innerboxfile';
			}
		}


		function mouseClick(that, type, nr)
		{
			if (selecting)
			{
				if (type == 'dir')
				{
					selectElement(that, selectedDirs, nr);
					that.className=(isSelected(type, nr)?'innerbox_marked':'innerboxdir');
				}
				else if (type == 'img')
				{
					selectElement(that, selectedImages, nr);
					that.className=(isSelected(type, nr)?'innerbox_marked':'innerboximg');
				}
				else if (type == 'file')
				{
					selectElement(that, selectedFiles, nr);
					that.className=(isSelected(type, nr)?'innerbox_marked':'innerboxfile');
				}
			}
			else
			{
				if (type == 'dir')
				{
					openGallery(nr);
				}
				else if (type == 'img')
				{
					openImageView(nr, false);
				}
				else if (type == 'file')
				{
					openFile(nr);
				}
			}
		}


		function addElement(elementNumber, type)
		{
			var divClassName = 'thumbbox';
			var content='';
			if (type == 'dir')
			{
				content += '<div id=\"dir'+elementNumber+'\" onclick=\"mouseClick(this, \'dir\', '+elementNumber+')\" onmouseover=\"mouseOver(this, \'dir\', '+elementNumber+')\" onmouseout=\"mouseOut(this, \'dir\', '+elementNumber+')\" class=\"innerboxdir\">';
				content += '<div class=\"thumbimgbox\">';
				if (dirThumb[elementNumber] != '')
				{
					content += '<img class=\"thumb\" alt=\"\" src=\"'+phpSelf+'?cmd=thumb&sfpg='+dirThumb[elementNumber]+'\">';
				}
				else
				{
					content += '<br><br>".sts(TEXT_NO_IMAGES)."';
				}
				content += '</div>';
				". (THUMB_CHARS_MAX ? "content += '['+thumbDisplayName(dirName[elementNumber])+']';" : "")."
				content += '</div>';
			}
			else if (type == 'img')
			{
				content += '<div id=\"img'+elementNumber+'\" onclick=\"mouseClick(this, \'img\', '+elementNumber+')\" onmouseover=\"mouseOver(this, \'img\', '+elementNumber+')\" onmouseout=\"mouseOut(this, \'img\', '+elementNumber+')\" class=\"innerboximg\">';
				content += '<div class=\"thumbimgbox\"><img class=\"thumb\" alt=\"\" src=\"'+phpSelf+'?cmd=thumb&sfpg='+imgLink[elementNumber]+'\"></div>';
				". (THUMB_CHARS_MAX ? "content += thumbDisplayName(imgName[elementNumber]);" : "")."
				content += '</div>';
			}
			else if (type == 'file')
			{
				content += '<div id=\"file'+elementNumber+'\" onclick=\"mouseClick(this, \'file\', '+elementNumber+')\" onmouseover=\"mouseOver(this, \'file\', '+elementNumber+')\" onmouseout=\"mouseOut(this, \'file\', '+elementNumber+')\" class=\"innerboxfile\">';
				content += '<div class=\"thumbimgbox\">';
				if (fileThumb[elementNumber] != '')
				{
					content += '<img class=\"thumb\" alt=\"\" src=\"'+phpSelf+'?cmd=thumb&sfpg='+fileThumb[elementNumber]+'\">';
				}
				else
				{
					content += '<br><br>".sts(TEXT_NO_PREVIEW_FILE)."';
				}
				content += '</div>'; 
				". (THUMB_CHARS_MAX ? "content += thumbDisplayName(fileName[elementNumber]);" : "")."
				content += '</div>';
			}
			else if (".(DIR_DESC_IN_GALLERY?'true':'false')." && (type == 'desc'))
			{
				var splint = dirInfo[elementNumber].split('|');
				if ((typeof splint[4] != 'undefined') && (splint[4] != ''))
				{
					divClassName = 'descbox';
					content += '<div class=\"innerboxdesc\">';
					content += splint[4];
					content += '</div>';
				}
			}
			if (content != '')
			{
				var newdiv = document.createElement('div');
				newdiv.className = divClassName;
				newdiv.innerHTML = content;
				var boxC = gebi('box_gallery');
				boxC.appendChild(newdiv);
			}
		}


		function showGallery(initOpenImage)
		{
			initDisplay();
			if (initOpenImage)
			{
				openImageView(initOpenImage, false);
			}
			else
			{
				fillInfo('dir', 0);
			}

			if (showInfo)
			{
				toggleInfo(false);
			}

			var navLinks = '';
			for (i = 1; i < navLink.length; i++)
			{
				if (navLink[i] != '')
				{
					navLinks += '<span class=\"sfpg_button_nav\" onclick=\"openGallery('+i+', \'nav\')\">'+navName[i]+'</span>';
				}
				else
				{
					navLinks += navName[i];
				}
			}
			gebi('navi').innerHTML = navLinks;
			addElement(0, 'desc');
			for (i = 1; i < dirLink.length; i++)
			{
				addElement(i, 'dir');
			}
			for (i = 1; i < imgLink.length; i++)
			{
				addElement(i, 'img');
			}
			for (i = 1; i < fileLink.length; i++)
			{
				addElement(i, 'file');
			}
		}


		function slideshow(click)
		{
			if(slideshowActive)
			{
				if(click)
				{
					openImageView(nextImage(1),false);
					slideshowSec=0;
				}
				if(slideshowSec>=".SLIDESHOW_DELAY_SEC.")
				{
					if(preloadImg.complete)
					{
						openImageView(nextImage(1),false);
						slideshowSec=0;
					}
				}
				slideshowSec++;
				setTimeout('slideshow(false)',1000);
			}
			else
			{
				slideshowSec=0;
			}
		}

		";
		if (PAYPAL_ENABLED)
		{
			echo "
			function paypal(id, buyId)
			{
				var sellSplint = imgSell[id].split('|');
				var SelfUrl = 'http://".$_SERVER["DOMAIN_NAME"].$_SERVER["PHP_SELF"]."';
				var returnSold = SelfUrl+'?sold='+buyId;
				var returnCancel = SelfUrl+'?sfpg=".$_GET['sfpg']."';
				gebi('paypalReturn').value = returnSold;
				gebi('paypalCancelReturn').value = returnCancel;
				gebi('paypalAmount').value = sellSplint[0];
				gebi('paypalItemName').value = imgName[id];
				if((typeof sellSplint[2]!='undefined')&&(sellSplint[2]!=''))
				{
					gebi('paypalItemNumber').value = sellSplint[2];
				}
				document.forms[\"_xclick\"].submit();
			}
			";
		}
		echo "navLink[1] = '".sfpg_url_string('')."';\n";
		echo "navName[1] = '".sts(TEXT_HOME)."';\n\n";

		$links = explode("/", GALLERY);
		$gal_dirs = "";
		if (GALLERY and is_array($links))
		{
			for ($i = 0; $i < count($links); $i++)
			{
				if ($links[$i]!=='')
				{
					$gal_dirs .= $links[$i]."/";
					$display_name = (in_array(DIR_NAME_FILE, $misc)?@file(GALLERY_ROOT.$gal_dirs.DIR_NAME_FILE):"");
					if ($display_name)
					{
						$display_name = trim($display_name[0]);
					}
					else
					{
						$display_name = sfpg_display_name($links[$i], TRUE);
					}
					$a_names[] = $display_name;
					$a_links[] = $gal_dirs;
				}
			}
			$link_disp_lenght = strlen(TEXT_HOME) + 4;
			$start_link = count($a_names)-1;
			for($i = count($a_names)-1; $i >= 0; $i--)
			{
				$link_disp_lenght += strlen($a_names[$i]) + 5;
				if ($link_disp_lenght < NAVI_CHARS_MAX)
				{
					$start_link = $i;
				}
			}
			$i = 2;
			for ($link_nr = $start_link; $link_nr < count($a_links); $link_nr++)
			{
				if(($start_link > 0) and ($link_nr == $start_link))
				{
					echo "navLink[".$i."] = '';\n";
					echo "navName[".$i."] = '".sts(" ... ")."';\n\n";
					$i++;
				}
				else
				{
					echo "navLink[".$i."] = '';\n";
					echo "navName[".$i."] = '".sts(" > ")."';\n\n";
					$i++;
				}
				echo "navLink[".$i."] = '".sfpg_url_string($a_links[$link_nr])."';\n";
				echo "navName[".$i."] = '".sts($a_names[$link_nr])."';\n\n";
				$i++;
			}
			echo "dirLink[0] = '".sfpg_url_string($a_links[count($a_links)-1])."';\n";
			echo "dirName[0] = '".sts((count($a_links) == 0 ? TEXT_HOME : $a_names[count($a_links)-1]))."';\n";
		}
		else
		{
			echo "dirLink[0] = '".sfpg_url_string("")."';\n";
			echo "dirName[0] = '".sts(TEXT_HOME)."';\n";
		}
		if ((DIR_THUMB_FILE) and file_exists(GALLERY_ROOT.GALLERY.DIR_THUMB_FILE))
		{
			$filed = explode("|", @file_get_contents(DATA_ROOT."info/".GALLERY.DIR_THUMB_FILE));
			if (filemtime(GALLERY_ROOT.GALLERY.DIR_THUMB_FILE)!=$filed[0])
			{
				sfpg_delete_from_data_root(GALLERY.DIR_THUMB_FILE);
			}
		}
		if (!file_exists(DATA_ROOT."info/".GALLERY."_sfpg_dir"))
		{
			sfpg_set_dir_info(GALLERY);
		}
		$filed = explode("|", file_get_contents(DATA_ROOT."info/".GALLERY."_sfpg_dir"));
		if ((count($dirs) != $filed[0]) or (count($images) != $filed[1]) or (count($files) != $filed[2]))
		{
			sfpg_set_dir_info(GALLERY);
			$filed = explode("|", file_get_contents(DATA_ROOT."info/".GALLERY."_sfpg_dir"));
		}
		echo "dirThumb[0] = '".$filed[4]."';\n";
		echo "dirInfo[0] = '".sts($filed[3]."|".$filed[0]."|".$filed[1]."|".$filed[2]."|".(in_array(DIR_DESC_FILE, $misc)?@file_get_contents(GALLERY_ROOT.GALLERY.DIR_DESC_FILE):""),false,DESC_NL_TO_BR)."';\n\n";
		$item = 1;
		foreach ($dirs as $val)
		{
			$display_name = @file(GALLERY_ROOT.GALLERY.$val."/".DIR_NAME_FILE);
			if ($display_name)
			{
				$display_name = trim($display_name[0]);
			}
			else
			{
				$display_name = sfpg_display_name($val, TRUE);
			}
			echo "dirName[".($item)."] = '".sts($display_name)."';\n";
			echo "dirLink[".($item)."] = '".sfpg_url_string((GALLERY.$val."/"))."';\n";
			if (!file_exists(DATA_ROOT."info/".GALLERY.$val."/_sfpg_dir"))
			{
				sfpg_set_dir_info(GALLERY.$val."/");
			}
			$filed = explode("|", file_get_contents(DATA_ROOT."info/".GALLERY.$val."/_sfpg_dir"));
			echo "dirThumb[".($item)."] = '".$filed[4]."';\n";
			echo "dirInfo[".($item)."] = '".sts($filed[3]."|".$filed[0]."|".$filed[1]."|".$filed[2]."|".@file_get_contents(GALLERY_ROOT.GALLERY.$val."/".DIR_DESC_FILE),false,DESC_NL_TO_BR)."';\n\n";
			$item++;
		}
		$img_direct_link = FALSE;
		$item = 1;
		foreach ($images as $val)
		{
			$showImage = true;
			if(SHOW_MAX_IMAGES)
			{
				if($item>=SHOW_MAX_IMAGES)
				{
					$showImage = false;
				}
			}
			if(SHOW_IMAGE_DAYS)
			{
				if(filemtime(GALLERY_ROOT.GALLERY.$val)<(time()-(SHOW_IMAGE_DAYS*86400)))
				{
					$showImage = false;
				}
			}
			if ($showImage)
			{
				if ($val == IMAGE)
				{
					$img_direct_link = ($item);
				}
				echo "imgLink[".($item)."] = '".sfpg_url_string(GALLERY, $val)."';\n";
				$img_name = sfpg_display_name($val, SHOW_IMAGE_EXT);
				echo "imgName[".($item)."] = '".sts($img_name)."';\n";
				if (file_exists(DATA_ROOT.'info/'.GALLERY.$val))
				{
					$filed=file_get_contents(DATA_ROOT."info/".GALLERY.$val);
					$filed_exp=explode('|', $filed);
					if (filemtime(GALLERY_ROOT.GALLERY.$val)!=$filed_exp[0])
					{
						sfpg_delete_from_data_root(GALLERY.$val);
						$filed='';
					}
				}
				else
				{
					$filed='';
				}
				echo "imgInfo[".($item)."] = '".sts($filed, true).(in_array($val.DESC_EXT, $misc)?sts(@file_get_contents(GALLERY_ROOT.GALLERY.$val.DESC_EXT),false,DESC_NL_TO_BR):"")."';\n";
				if (PAYPAL_ENABLED)
				{
					$sell=(in_array($val.PAYPAL_EXTENSION,$misc)?@file(GALLERY_ROOT.GALLERY.$val.PAYPAL_EXTENSION,FILE_IGNORE_NEW_LINES):false);
					if ($sell!=false)
					{
						echo "imgSell[".($item)."] = '".sts($sell[0]."|".$sell[1]."|".$sell[2])."';\n";
					}
				}
				$item++;
			}
		}
		if ($img_direct_link)
		{
			define("IMAGE_ID_IN_URL", $img_direct_link);
		}
		else
		{
			define("IMAGE_ID_IN_URL", FALSE);
		}
		if (count($files))
		{
			$item = 1;
			$icons=@scandir(GALLERY_ROOT.ICONS_DIR);
			foreach ($files as $val)
			{
				$icon_file = @substr(sfpg_ext($val), 1).FILE_THUMB_EXT;
				echo "fileLink[".($item)."] = '".sfpg_url_string(GALLERY, $val)."';\n";
				if (FILE_THUMB_EXT and file_exists(GALLERY_ROOT.GALLERY.$val.FILE_THUMB_EXT))
				{
					echo "fileThumb[".($item)."] = '".sfpg_url_string(GALLERY, $val.FILE_THUMB_EXT)."';\n";
				}
				elseif (in_array($icon_file, $icons))
				{
					echo "fileThumb[".($item)."] = '".sfpg_url_string(ICONS_DIR, $icon_file)."';\n";
				}
				elseif (FILE_THUMB_DEFAULT)
				{
					echo "fileThumb[".($item)."] = '".sfpg_url_string(ICONS_DIR, FILE_THUMB_DEFAULT)."';\n";
				}
				else
				{
					echo "fileThumb[".($item)."] = '';\n";
				}
				echo "fileName[".($item)."] = '".sts(sfpg_display_name($val, SHOW_FILE_EXT))."';\n";
				if (!file_exists(DATA_ROOT."info/".GALLERY.$val))
				{
					$fp = fopen(DATA_ROOT."info/".GALLERY.$val, "w");
					fwrite($fp, filemtime(GALLERY_ROOT.GALLERY.$val)."|".sfpg_file_size(filesize(GALLERY_ROOT.GALLERY.$val)));
					fclose($fp);
				}
				echo "fileInfo[".($item)."] = '".sts(@file_get_contents(DATA_ROOT."info/".GALLERY.$val)."|".(in_array($val.DESC_EXT, $misc)?@file_get_contents(GALLERY_ROOT.GALLERY.$val.DESC_EXT):""),false,DESC_NL_TO_BR)."';\n\n";
				$item++;
			}
		}
		echo "
		//-->
		</script>";
	}

	if (SECURITY_PHRASE=='')
	{
		if ($sc=@file_get_contents($_SERVER['SCRIPT_FILENAME']))
		{
			$phrase=sfpg_random(30);
			$nr_replace=0;
			$sc=str_replace("define('SECURITY"."_PHRASE', '');","define('SECURITY_PHRASE', '".$phrase."');",$sc,$nr_replace);			
			if ($nr_replace === 1)
			{
				if (file_put_contents($_SERVER['SCRIPT_FILENAME'],$sc))
				{
					header('Location: '.$_SERVER['PHP_SELF']);
					exit;
				}
			}
		}
		echo 'You have to set the SECURITY_PHRASE in the top of the script! See readme.txt for description.';
		exit;
	}

	if (PASSWORD!=='')
	{
		session_start();
		if (isset($_GET['cmd']) and ($_GET['cmd']=='logout'))
		{
			session_unset();
			header('Location: '.$_SERVER['PHP_SELF']);
			exit;
		}
		if (($_SESSION['sfpg_access']!==TRUE) or ($_SESSION['sfpg_self']!==$_SERVER['PHP_SELF']))
		{
			if (isset($_POST['pw']) and ($_POST['pw']===PASSWORD))
			{
				$_SESSION['sfpg_access']=TRUE;
				$_SESSION['sfpg_self']=$_SERVER['PHP_SELF'];
			}
			else
			{
				header('Content-Type: text/html; charset="'.CHARSET.'"');
				echo '<!DOCTYPE html><html><head><meta charset="'.CHARSET.'"><title></title></head><body>'.
				'<form  name="pf" action="'.$_SERVER['REQUEST_URI'].'" method="post">'.
				'<input type="password" name="pw" id="pw" autofocus>'.
				'<input type="submit" name="su" value="'.TEXT_LOGIN.'">'.
				'</form></body></html>';
				session_write_close();
				exit;
			}
		}
		session_write_close();
	}

	$get_set = FALSE;
	if (isset($_GET['sfpg']))
	{
		$get = sfpg_url_decode($_GET['sfpg']);
		if ($get)
		{
			define('GALLERY', $get[0]);
			define('IMAGE', $get[1]);
			$get_set = TRUE;
		}
	}
	if (!$get_set)
	{
		define('GALLERY', '');
		define('IMAGE', '');
	}

	if (isset($_GET['cmd']))
	{
		if ($get_set)
		{
			if ($_GET['cmd'] == 'thumb')
			{
				sfpg_image(GALLERY, IMAGE, 'thumb');
				exit;
			}

			if ($_GET['cmd'] == 'image')
			{
				sfpg_image(GALLERY, IMAGE, 'image');
				exit;
			}

			if ($_GET['cmd'] == 'preview')
			{
				if (USE_PREVIEW)
				{
					sfpg_image(GALLERY, IMAGE, 'preview');
				}
				exit;
			}

			if (($_GET['cmd'] == 'dl') and TEXT_DOWNLOAD!='')
			{
				sfpg_image(GALLERY, IMAGE, 'image', TRUE);
				exit;
			}

			if ($_GET['cmd'] == 'file')
			{
				header('Location: '.GALLERY_ROOT.GALLERY.IMAGE);
				exit;
			}
		}
	}

	header('Content-Type: text/html; charset="'.CHARSET.'"');

	if (PAYPAL_ENABLED)
	{
		if (isset($_GET['sold']))
		{
			if ($sell_file=file(DATA_ROOT.'buy/'.$_GET['sold'],FILE_IGNORE_NEW_LINES))
			{
				if($sell_content=file(GALLERY_ROOT.$sell_file[0].PAYPAL_EXTENSION,FILE_IGNORE_NEW_LINES))
				{
					$fp = fopen(GALLERY_ROOT.$sell_file[0].PAYPAL_EXTENSION,'w');
					fwrite($fp,$sell_content[0]."\r\n".(((int)$sell_content[1])-1)."\r\n".$sell_content[2]);
					fclose($fp);
					unlink(DATA_ROOT.'buy/'.$_GET['sold']);
				}
			}
		}
	}

	if (ADMIN===TRUE)
	{
		if (isset($_POST['func']))
		{
			if ($_POST['func']==='move')
			{
				if (isset($_POST['toFolder']) and isset($_POST['elems']) and is_array($_POST['elems']) and (count($_POST['elems']) > 0))
				{
					$to_dir = sfpg_url_decode($_POST['toFolder']);
					if (($to_dir!==false) and ($to_dir[1]==='') and is_dir(GALLERY_ROOT.$to_dir[0]))
					{
						$to_dir=GALLERY_ROOT.$to_dir[0].($to_dir[0]!==''?'/':'');
						foreach ($_POST['elems'] as $elem)
						{
							$move_elem = sfpg_url_decode($elem);
							if ($move_elem)
							{
								if (($move_elem[1]==='') and (is_dir(GALLERY_ROOT.$move_elem[0])))
								{
									$slash_pos=strrpos($move_elem[0],'/',-2);
									if($slash_pos!==FALSE)
									{
										$slash_pos+=1;
									}
									else
									{
										$slash_pos=0;
									}
									$dir_name = substr($move_elem[0],$slash_pos);
									rename(GALLERY_ROOT.$move_elem[0], $to_dir.$dir_name);
								}
								else
								{
									$file_to_move=GALLERY_ROOT.$move_elem[0].$move_elem[1];
									rename($file_to_move, GALLERY_ROOT.$to_dir.'/'.$move_elem[1]);
									if (file_exists($file_to_move.DESC_EXT))
									{
										rename($file_to_move.DESC_EXT, GALLERY_ROOT.$to_dir.'/'.$move_elem[1].DESC_EXT);
									}
									if (sfpg_image_type($file_to_move) and (file_exists($file_to_move.PAYPAL_EXTENSION)))
									{
										rename($file_to_move.PAYPAL_EXTENSION, GALLERY_ROOT.$to_dir.'/'.$move_elem[1].PAYPAL_EXTENSION);
									}
									elseif (file_exists($file_to_move.FILE_THUMB_EXT))
									{
										rename($file_to_move.FILE_THUMB_EXT, GALLERY_ROOT.$to_dir.'/'.$move_elem[1].FILE_THUMB_EXT);
									}
								}
							}
						}
					}
				}
			}
			if ($_POST['func']==='delete')
			{
				if (isset($_POST['elems']) and is_array($_POST['elems']) and (count($_POST['elems']) > 0))
				{
					foreach ($_POST['elems'] as $elem)
					{
						$del_elem = sfpg_url_decode($elem);
						if ($del_elem)
						{
							$element=GALLERY_ROOT.$del_elem[0].$del_elem[1];
							sfpg_delete($element);
							if (!is_dir($element))
							{
								sfpg_delete($element.DESC_EXT);
								if (sfpg_image_type($element))
								{
									sfpg_delete($element.PAYPAL_EXTENSION);
								}
								else
								{
									sfpg_delete($element.FILE_THUMB_EXT);
								}
							}
						}
					}
				}
			}
			if (($_POST['func']==='makedir') and (isset($_POST['dir'])) and (isset($_POST['path'])))
			{
				$new_dir=$_POST['dir'];
				$path=$_POST['path'];
				if (($new_dir!=='') and $path)
				{
					$path = sfpg_url_decode($path);
					if ($path and ($path[1]===''))
					{
						$path=GALLERY_ROOT.$path[0];
						sfpg_mkdir($path.$new_dir);
					}
				}
			}
			if (($_POST['func']==='rename') and (isset($_POST['eleToRen'])) and (isset($_POST['newName'])))
			{
				$newName=$_POST['newName'];
				$eleToRen=$_POST['eleToRen'];
				if ($newName!=='' and $eleToRen)
				{
					$eleToRen = sfpg_url_decode($eleToRen);
					if ($eleToRen)
					{
						if ($eleToRen[1]!=='')
						{
							$newName.=((!SHOW_IMAGE_EXT and sfpg_image_type($eleToRen[1]))?sfpg_ext($eleToRen[1]):'');
							if ((!file_exists(GALLERY_ROOT.$eleToRen[0].$newName)) and (!is_dir(GALLERY_ROOT.$eleToRen[0].$newName)))
							{
								if (sfpg_image_type($eleToRen[1]))
								{
									if (file_exists(GALLERY_ROOT.$eleToRen[0].$eleToRen[1].PAYPAL_EXTENSION))
									{
										rename(GALLERY_ROOT.$eleToRen[0].$eleToRen[1].PAYPAL_EXTENSION, GALLERY_ROOT.$eleToRen[0].$newName.PAYPAL_EXTENSION);
									}
								}
								elseif (file_exists(GALLERY_ROOT.$eleToRen[0].$eleToRen[1].FILE_THUMB_EXT))
								{
									rename(GALLERY_ROOT.$eleToRen[0].$eleToRen[1].FILE_THUMB_EXT, GALLERY_ROOT.$eleToRen[0].$newName.FILE_THUMB_EXT);
								}
								if (file_exists(GALLERY_ROOT.$eleToRen[0].$eleToRen[1].DESC_EXT))
								{
									rename(GALLERY_ROOT.$eleToRen[0].$eleToRen[1].DESC_EXT, GALLERY_ROOT.$eleToRen[0].$newName.DESC_EXT);
								}
								rename(GALLERY_ROOT.$eleToRen[0].$eleToRen[1], GALLERY_ROOT.$eleToRen[0].$newName);
							}
						}
						else
						{
							$oldPath=GALLERY_ROOT.$eleToRen[0];
							$oldPath=rtrim($oldPath,'/');
							$newPath = substr($oldPath, 0, strrpos($oldPath, '/')+1).$newName;
							if ((!file_exists($newPath)) and (!is_dir($newPath)))
							{
								rename(GALLERY_ROOT.$eleToRen[0], $newPath);
							}
						}
					}
				}
			}
			if ($_POST['func']==='desc')
			{
				$action=$_POST['action'];
				$text=$_POST['text'];
				$ele=$_POST['ele'];
				if (($action==='del') or ($text===''))
				{
					$eleWd = sfpg_url_decode($ele);
					if ($eleWd)
					{
						$element=GALLERY_ROOT.$eleWd[0].$eleWd[1];
						if (is_dir($element))
						{
							sfpg_delete($element.DIR_DESC_FILE);
						}
						else
						{
							sfpg_delete($element.DESC_EXT);
						}
					}
				}
				elseif ($action==='save')
				{
					$eleWd = sfpg_url_decode($ele);
					if ($eleWd)
					{
						$element=GALLERY_ROOT.$eleWd[0].$eleWd[1];
						if (is_dir($element))
						{
							$element.=DIR_DESC_FILE;
						}
						else
						{
							$element.=DESC_EXT;
						}
						file_put_contents($element,$text);
					}
				}
			}
			if ($_POST['func']==='sell')
			{
				$action=$_POST['action'];
				$ele=$_POST['ele'];
				if ($action==='del')
				{
					$eleWd = sfpg_url_decode($ele);
					if ($eleWd)
					{
						sfpg_delete(GALLERY_ROOT.$eleWd[0].$eleWd[1].PAYPAL_EXTENSION);
					}
				}
				elseif ($action==='save')
				{
					$eleWd = sfpg_url_decode($ele);
					if ($eleWd)
					{
						file_put_contents(GALLERY_ROOT.$eleWd[0].$eleWd[1].PAYPAL_EXTENSION,$_POST['ePrice']."\r\n".$_POST['eAmount']."\r\n".$_POST['eIdent']);
					}
				}
			}
		}
		if ($_GET['cmd'] == 'dirs')
		{
			sfpg_browse_dirs();
			exit;
		}
	}

	list($dirs, $images, $files, $misc) = sfpg_get_dir(GALLERY);
	echo '<!DOCTYPE html><html><head><meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0"><meta charset="'.CHARSET.'"><title>'.TEXT_GALLERY_NAME.'</title><style>'.
	"
	img
	{
		-ms-interpolation-mode : bicubic;
	}

	body.sfpg
	{
		background : $color_body_back;
		color: $color_body_text;
		font-family: Arial, Helvetica, sans-serif;
		font-size: ".FONT_SIZE."px;
		font-weight: normal;
		margin:0px;
		padding:0px;
		overflow:hidden;
	}

	body.sfpg a:active, body.sfpg a:link, body.sfpg a:visited, body.sfpg a:focus
	{
		color : $color_body_link;
		text-decoration : none;
	}

	body.sfpg a:hover
	{
		color : $color_body_hover;
		text-decoration : none;
	}

	table
	{
		border-spacing: 0px;
		border-collapse: separate;
		font-size: ".FONT_SIZE."px;
		height:100%;
		width:100%;
	}

	table.info td
	{
		padding : 10px;
		vertical-align : top;
	}

	table.sfpg_disp
	{
		text-align : center;
		padding : 0px;
		cellspacing : 0px;
	}

	table.sfpg_disp td.menu
	{
		background : $color_menu_back;
		border-top : 1px solid $color_menu_top;
		vertical-align : middle;
		white-space: nowrap;
	}

	table.sfpg_disp td.navi
	{
		height: ".NAV_BAR_HEIGHT."px;
		background: $color_navbar_back;
		border-top: 1px solid $color_navbar_top;
		vertical-align: middle;
		white-space: nowrap;
	}

	table.sfpg_disp td.mid
	{
		vertical-align: middle;
	}

	div.in
	{
		line-height: 170%;
		padding-left: 30px;
	}

	.sfpg_info_text, .loading
	{
		".(ROUND_CORNERS?'border-radius: '.ROUND_CORNERS.'px;':'')."
		background : $color_info_back;
		border : 1px solid $color_info_border;
		color : $color_info_text;
		padding : 1px 4px 1px 4px;
		width : 200px;
	}
	
	.loading
	{
		padding : 20px 20px 20px 20px;
		margin-right: auto;
		margin-left: auto;
	}
	
	.sfpg_button, .sfpg_button_hover, .sfpg_button_on, .sfpg_button_nav, .sfpg_button_disabled
	{
		".(ROUND_CORNERS?'border-radius: '.ROUND_CORNERS.'px;':'')."
		cursor : pointer;
		background : $color_button_back;
		border : 1px solid $color_button_border;
		color : $color_button_text;
		padding : 0px 5px 0px 5px;
		margin : 0px 5px 0px 5px;
		white-space: nowrap;
	}

	.sfpg_button:hover, .sfpg_button_nav:hover
	{
		background : $color_button_hover;
		color : $color_button_hover_text;
	}

	.sfpg_button_hover
	{
		background : $color_button_hover;
		color : $color_button_hover_text;
	}

	.sfpg_button_on
	{
		background : $color_button_on;
		color : $color_button_text_on;
	}

	.sfpg_button_disabled
	{
		cursor : default;
		border : 1px solid $color_button_border_off;
		background : $color_button_back_off;
		color : $color_button_text_off;
	}

	.sfpg_button_nav
	{
		border: 1px solid $color_button_nav_border;
		background: $color_button_nav_back;
		color: $color_button_nav_text;
	}

	.thumbbox, .descbox
	{
		vertical-align : top;
		display:-moz-inline-stack;
		display:inline-block;
		zoom:1;
		*display:inline;
		width: ".((2 * (THUMB_BORDER_WIDTH + THUMB_MARGIN + THUMB_BOX_MARGIN)) + THUMB_MAX_WIDTH + 2)."px;
		height: ".((2 * (THUMB_BORDER_WIDTH + THUMB_MARGIN + THUMB_BOX_MARGIN)) + THUMB_MAX_HEIGHT + 2 + THUMB_BOX_EXTRA_HEIGHT)."px;
		margin: 0px;
		padding: 0px;
	}

	.descbox
	{
		width: ".(((2 * (THUMB_BORDER_WIDTH + THUMB_MARGIN + THUMB_BOX_MARGIN)) + THUMB_MAX_WIDTH + 2)*2)."px;
	}

	.thumbimgbox
	{
		width: ".((2 * (THUMB_BORDER_WIDTH + THUMB_MARGIN)) + THUMB_MAX_WIDTH)."px;
		height: ".((THUMB_BORDER_WIDTH * 2) + THUMB_MARGIN + THUMB_MAX_HEIGHT + 6)."px;
		margin: 0px; 
		padding: 0px;
	}

	.innerboxdir, .innerboximg, .innerboxfile, .innerboxdir_hover, .innerboximg_hover, .innerboxfile_hover, .innerbox_marked
	{
		".(ROUND_CORNERS?'border-radius: '.(ROUND_CORNERS*2).'px;':'')."
		cursor:pointer;
		margin: ".THUMB_BOX_MARGIN."px;
		padding: 0px;
		width: ".((2 * (THUMB_BORDER_WIDTH + THUMB_MARGIN)) + THUMB_MAX_WIDTH + 2)."px;
		height: ".((2 * (THUMB_BORDER_WIDTH + THUMB_MARGIN)) + THUMB_MAX_HEIGHT + 2 + THUMB_BOX_EXTRA_HEIGHT)."px;
	}

	.innerboxdesc
	{
		text-align : left;
		overflow:auto;
		".(ROUND_CORNERS?'border-radius: '.(ROUND_CORNERS*2).'px;':'')."
		margin: ".THUMB_BOX_MARGIN."px;
		padding: 5px;
		width: ".(2*(THUMB_BOX_MARGIN+(2 * (THUMB_BORDER_WIDTH + THUMB_MARGIN)) + THUMB_MAX_WIDTH + 2 - 5))."px;
		height: ".((2 * (THUMB_BORDER_WIDTH + THUMB_MARGIN)) + THUMB_MAX_HEIGHT + 2 + THUMB_BOX_EXTRA_HEIGHT - 10)."px;
		border: 1px solid $color_desc_box_border;
		background : $color_desc_box_back;
		color : $color_desc_box_text;
	}

	.innerboxdir, .innerboxdir_hover, .innerbox_marked
	{
		border: 1px solid $color_dir_box_border;
		background : $color_dir_box_back;
		color : $color_dir_box_text;
	}

	.innerboximg, .innerboximg_hover
	{
		border: 1px solid $color_img_box_border;
		background : $color_img_box_back;
		color : $color_img_box_text;
	}

	.innerboxfile, .innerboxfile_hover
	{
		border: 1px solid $color_file_box_border;
		background : $color_file_box_back;
		color : $color_file_box_text;
	}

	.innerboxdir_hover
	{
		background : $color_dir_hover;
		color : $color_dir_hover_text;
	}

	.innerboximg_hover
	{
		background : $color_img_hover;
		color : $color_img_hover_text;
	}

	.innerboxfile_hover
	{
		background : $color_file_hover;
		color : $color_file_hover_text;
	}

	.innerbox_marked
	{
		background : $color_marked_back;
		color : $color_marked_text;
	}

	.full_image
	{
		cursor:pointer;
		border : ".FULLIMG_BORDER_WIDTH."px solid $color_fullimg_border;
	}

	.banner
	{
		width:100%;
	}

	.thumb
	{
		".(ROUND_CORNERS?'border-radius: '.ROUND_CORNERS.'px;':'')."
		margin: ".THUMB_MARGIN."px ".THUMB_MARGIN."px 5px ".THUMB_MARGIN."px;
		border : ".THUMB_BORDER_WIDTH."px solid $color_thumb_border;
	}

	.sye
	{
		position:absolute;
		bottom:10px;
		right:10px;
		z-index:1120;
		cursor:pointer;
	}

	.box_image
	{
		position:absolute;
		bottom:".MENU_BOX_HEIGHT."px;
		right:0;
		z-index:1020;
		overflow:auto;
		visibility:hidden;
		text-align : center;
	}

	.box_wait
	{
		position:absolute;
		bottom:".MENU_BOX_HEIGHT."px;
		right:0;
		z-index:1015;
		overflow:auto;
		visibility:hidden;
		text-align : center;
	}

	.box_hud
	{
		position:absolute;
		bottom:".(MENU_BOX_HEIGHT+20)."px;
		right:0;
		z-index:1200;
		visibility:hidden;
		cursor:pointer;
	}

	.box_navi
	{
		position:absolute;
		bottom:0;
		left:0;
		height:".MENU_BOX_HEIGHT."px;
		width:100%;
		z-index:1120;
		overflow:hidden;
		text-align:center;
	}

	.box_info
	{
		".(ROUND_CORNERS?'border-radius: '.(ROUND_CORNERS*2).'px;':'')."
		position:absolute;
		top:10px;
		left:10px;
		width:".INFO_BOX_WIDTH."px;
		z-index:1040;
		visibility:hidden;
		overflow:auto;
		border : 1px solid $color_infobox_border;
		background: $color_infobox_back;
	}

	.box_admin
	{
		position:absolute;
		width:100%;
		height:100%;
		visibility:hidden;
		overflow:auto;
		z-index:1240;
		background: $color_infobox_back;
	}

	.box_data
	{
		position:absolute;
		visibility:hidden;
	}

	.box_overlay
	{
		position:absolute;
		bottom:".MENU_BOX_HEIGHT."px;
		left:0;
		height:100%;
		width:100%;
		z-index:1010;
		overflow:hidden;
		visibility:hidden;
		background:$color_overlay;
	}

	.box_gallery
	{
		text-align:center;
		position:absolute;
		top:0;
		right:0;
		z-index:1000;
		overflow:auto;
		-webkit-overflow-scrolling:touch;
	}
	".
	'</style>';
	sfpg_javascript();
	echo '</head>';

	if (PAYPAL_ENABLED and $get_set and ($_GET['cmd'] == 'buy') and IMAGE!='')
	{
		$sell=@file(GALLERY_ROOT.GALLERY.IMAGE.PAYPAL_EXTENSION,FILE_IGNORE_NEW_LINES);
		if (($sell==false) or ($sell[1]<1))
		{
			echo '<body>'.TEXT_PAYPAL_OUT_BACK.'</body>'; 
		}
		else
		{
			date_default_timezone_set('UTC');
			$buyId=date('Ymd_His').'_'.sfpg_random(16);
			if (!sfpg_mkdir(DATA_ROOT.'buy/'))
			{
				$handle = opendir(DATA_ROOT.'buy/');
				if ($handle != FALSE)
				{
					$week_ago=time()-604800;
					while(($var=readdir($handle))!==false)
					{
						if (!is_dir(DATA_ROOT.'buy/'.$var))
						{
							if ($week_ago>filemtime(DATA_ROOT.'buy/'.$var))
							{
								unlink(DATA_ROOT.'buy/'.$var);
							}
						}
					}
					closedir($directory_handle);
				}
			}
			$fp = fopen(DATA_ROOT.'buy/'.$buyId,'w');
			fwrite($fp,GALLERY.IMAGE);
			fclose($fp);
			echo '<body onload="paypal('.IMAGE_ID_IN_URL.',\''.$buyId.'\');">'.
			TEXT_PAYPAL_PLEASE_WAIT.
			'<form  name="_xclick" action="https://www.paypal.com/cgi-bin/webscr" method="post">'.
			'<input type="hidden" name="cmd" value="_xclick">'.
			'<input type="hidden" name="business" value="'.PAYPAL_ACCOUNT.'">'.
			'<input type="hidden" name="currency_code" value="'.PAYPAL_CURRENCY.'">'.
			'<input type="hidden" id="paypalReturn" name="return" value="">'.
			'<input type="hidden" id="paypalCancelReturn" name="cancel_return" value="">'.
			'<input type="hidden" id="paypalItemName" name="item_name" value="">'.
			'<input type="hidden" id="paypalItemNumber" name="item_number" value="'.GALLERY.IMAGE.'">'.
			'<input type="hidden" id="paypalAmount" name="amount" value="">'.
			'</form>'.
			'</body>';
		}
	}
	else
	{
		echo '<body onresize="initDisplay()" onload="showGallery('.(IMAGE_ID_IN_URL?IMAGE_ID_IN_URL:'false').')" class="sfpg">' .
		'<div id="box_navi" class="box_navi">' .
			'<table class="sfpg_disp">' .
				'<tr><td class="navi">' .
					'<div id="navi"></div>' .
				'</td></tr>' .
				'<tr><td class="menu">' .
					'<div id="div_menu"></div>' .
				'</td></tr>' .
			'</table>' .
		'</div>' .
		'<div id="box_image" class="box_image">' .
			'<table class="sfpg_disp">' .
				'<tr><td class="mid">' .
					'<img alt="" src="" id="full" class="full_image" onclick="closeImageView()" onmouseover="gebi(\'button_close\').className=\'sfpg_button_hover\'" onmouseout="gebi(\'button_close\').className=\'sfpg_button\'">' .
				'</td></tr>' .
			'</table>' .
		'</div>' .
		'<div id="box_wait" class="box_wait">' .
			'<table class="sfpg_disp">' .
				'<tr><td class="mid">' .
					'<div id="wait"></div>' .
				'</td></tr>' .
			'</table>' .
		'</div>' .
		'<div id="box_info" class="box_info">' .
			'<table class="info">' .
				'<tr><td>' .
					'<div id="box_inner_info"></div>' .
				'</td></tr>' .
			'</table>' .
		'</div>' .
		'<div class="sye" onclick="window.open(\'http://sye.dk/sfpg/\')">sfpg</div>'.
		'<div id="box_gallery" class="box_gallery">';
		if (DIR_BANNER_FILE and (file_exists(GALLERY_ROOT.GALLERY.DIR_BANNER_FILE)))
		{
			echo '<div class="banner">'.@file_get_contents(GALLERY_ROOT.GALLERY.DIR_BANNER_FILE).'</div>';
		}
		elseif (TEXT_BANNER)
		{
			echo '<div class="banner">'.TEXT_BANNER.'</div>';
		}
		echo '</div>';
		if (ADMIN===TRUE)
		{
			echo'<div id="box_admin" class="box_admin"></div>';
			echo'<div id="box_data" class="box_data"></div>';
		}
		echo'<div id="box_overlay" class="box_overlay"></div>' .
		'<div id="box_left" onclick="cycleImg(-1)" onmouseover="gebi(\'button_left\').className=\'sfpg_button_hover\'" onmouseout="gebi(\'button_left\').className=\'sfpg_button\'" class="box_hud"></div>' .
		'<div id="box_right" onclick="cycleImg(1)" onmouseover="gebi(\'button_right\').className=\'sfpg_button_hover\'" onmouseout="gebi(\'button_right\').className=\'sfpg_button\'" class="box_hud"></div>' .
		'</body>';
	}
	echo '</html>';
?>