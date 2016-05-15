<?php
	
	if(!function_exists('convert_title')) {
		function convert_title($str) {
			return isset($str) ? htmlentities($str) : '';
		}
	}

	if(!function_exists('convert_cthuong')) {
		function convert_cthuong($str) {
			return isset($str) ? strtolower(stripslashes(trim($str))) : '';
		}
	}

	if(!function_exists('convert_date')) {
		function convert_date($str) {
			return isset($str) ? date('d/m/Y', strtotime($str)) : '';
		}
	}

	if(!function_exists('convert_ktrang')) {
		function convert_ktrang($str) {
			return isset($str) ? stripslashes(trim($str)) : '';
		}
	}

	if(!function_exists('convert_mkhau')) {
		function convert_mkhau($str) {
			return isset($str) ? md5(strtolower(stripslashes(trim($str)))) : '';
		}
	}