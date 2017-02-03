<?php if (!defined('APPLICATION')) exit();

// Conversations
$Configuration['Conversations']['Version'] = '2.3';

// Database
$Configuration['Database']['Name'] = 'xr_msql';
$Configuration['Database']['Host'] = 'localhost';
$Configuration['Database']['User'] = 'xr_user';
$Configuration['Database']['Password'] = 'XR3b0rN';

// EnabledApplications
$Configuration['EnabledApplications']['Conversations'] = 'conversations';
$Configuration['EnabledApplications']['Vanilla'] = 'vanilla';

// EnabledPlugins
$Configuration['EnabledPlugins']['GettingStarted'] = 'GettingStarted';
$Configuration['EnabledPlugins']['HtmLawed'] = 'HtmLawed';

// Garden
$Configuration['Garden']['Title'] = 'XReborn';
$Configuration['Garden']['Cookie']['Salt'] = 'en3n1l1IZlA0wrjf';
$Configuration['Garden']['Cookie']['Domain'] = '';
$Configuration['Garden']['Registration']['ConfirmEmail'] = true;
$Configuration['Garden']['Email']['SupportName'] = 'XReborn';
$Configuration['Garden']['Email']['Format'] = 'text';
$Configuration['Garden']['SystemUserID'] = '1';
$Configuration['Garden']['InputFormatter'] = 'Markdown';
$Configuration['Garden']['Version'] = '2.3';
$Configuration['Garden']['Cdns']['Disable'] = false;
$Configuration['Garden']['CanProcessImages'] = false;
$Configuration['Garden']['Installed'] = true;
$Configuration['Garden']['Theme'] = 'bittersweet';

// Plugins
$Configuration['Plugins']['GettingStarted']['Dashboard'] = '1';
$Configuration['Plugins']['GettingStarted']['Discussion'] = '1';
$Configuration['Plugins']['GettingStarted']['Categories'] = '1';

// Routes
$Configuration['Routes']['DefaultController'] = array('categories', 'Internal');

// Vanilla
$Configuration['Vanilla']['Version'] = '2.3';
$Configuration['Vanilla']['Discussions']['Layout'] = 'table';
$Configuration['Vanilla']['Categories']['Layout'] = 'mixed';
$Configuration['Vanilla']['Categories']['Use'] = true;

// Last edited by admin (68.207.232.81)2017-02-03 16:36:50