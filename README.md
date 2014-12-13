#Click & Pledge FAAS sample form

Sample page for accepting online donations using Click &amp; Pledge FAAS and Salesforce

Required:  Just create an inc/config.inc file with the following contents tailored for your use:
```
<?php
if (!defined('ON_SUCCESS_URL')) define('ON_SUCCESS_URL', 'https://XXXX');
if (!defined('ON_DECLINE_URL')) define('ON_DECLINE_URL', 'https://XXXX');
if (!defined('ON_ERROR_URL')) define('ON_ERROR_URL', 'https://XXXX');
if (!defined('DEFAULT_SF_CAMPAIGN')) define('DEFAULT_SF_CAMPAIGN', 'XXXX');
if (!defined('CNP_ACCOUNT_GUID')) define('CNP_ACCOUNT_GUID', 'XXXX-XXXX-XXXX-XXXX-XXXX');
if (!defined('CNP_ACCOUNT_ID')) define('CNP_ACCOUNT_ID', 'XXXXX');
if (!defined('CNP_WID')) define('CNP_WID', 'XXXXX');
if (!defined('CNP_REF_ID')) define('CNP_REF_ID', 'donation');
if (!defined('CNP_TRACKER')) define('CNP_TRACKER', 'FaaS-XXXX-donation');
if (!defined('CNP_SEND_RECEIPT')) define('CNP_SEND_RECEIPT', 'false');  //true or false
if (!defined('CNP_ORDER_MODE')) define('CNP_ORDER_MODE', 'Test'); //Production or Test
if (!defined('CNP_TRANSACTION_TYPE')) define('CNP_TRANSACTION_TYPE', 'Payment');
if (!defined('CNP_DECIMAL_MARK')) define('CNP_DECIMAL_MARK', 'US');
?>
```
##Where to find more information
- See http://manual.clickandpledge.com/Form-as-a-Service.html for help and samples
- See http://manual.clickandpledge.com/Form-Field-Names.html for full list of config options
- See http://forums.clickandpledge.com/content.php?r=248-Run-a-Test-Transaction for how to set up in test mode

*Made in Oakland*
