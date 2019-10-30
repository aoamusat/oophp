<?php
	require 'src/Database.php';

	$clothes = Database::select('clothes');