<?php 
function session_cli(){
	return isset($_SESSION['trockmusic_client']);
}
session_cli();
session_start();