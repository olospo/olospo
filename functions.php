<?php

/**
* Core Theme Functions 
*/

// Theme Setup: Configures theme support, menus, widgets, etc.
require_once 'functions/theme-setup.php'; 

// Enqueue Styles and Scripts: Handles the inclusion of CSS and JavaScript files.
require_once 'functions/enqueue-scripts.php'; 

// Breadcrumbs: Adds breadcrumb navigation to help users navigate the site.
require_once 'functions/breadcrumbs.php';

// Custom Post Types
require_once 'functions/custom-post.php';

// Auto Update: Disable automatic update email notifications
require_once 'functions/auto-update.php';

// Custom Navigation: Manages customisations to navigation menus.
require_once 'functions/custom-nav.php';