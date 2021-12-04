<?php

/*
  Plugin Name: AzoPlayer - Video Player
  Description: Easily integrate the video.js video player.
  Version: 0.0.1
  Author: Azorimor
  Author URI: https://github.com/Azorimor
*/

if(!defined('ABSPATH')) exit;  // Exit by direct access

/**
 * The main class for this plugin.
 */
class AzoPlayer {
  
  function __construct() {
    add_action('admin_menu', array($this, 'adminMenu'));
  }

  function adminMenu(){
    add_options_page('AzoPlayer Settings', 'AzoPlayer', 'manage_options', 'azo-player-settings', array($this, 'adminHTML'));
  }

  function adminHTML() {
    ?>
    Welcome to the settings of AzoPlayer.
    <?php
  }
}

$azoplayer = new AzoPlayer();
