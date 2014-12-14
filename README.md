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

##Embedding in an iframe
These pages can easily be embedded in another site using an iframe.  One thing that you may want to do is add this onload to the iframe so when the success/error/decline page is loaded in the forms place the parent page will scroll to the top: window.parent.parent.scrollTo(0,0)

Here's a sample iframe:

```
<iframe src="https://mydomain.org/clickandpledge/donate.php?test=1" style="padding-left: 0px; padding-right:0px; width:100%; height:1200px;" scrolling="auto" onload="window.parent.parent.scrollTo(0,0)" id="donationform"></iframe>
```
There is also a bit of JavaScript in the donate.php page that grabs a campaign from the parent URL and loads it into the campaign field if it exists.  So if you want to use this, just add a ?campaign=XXX to the page that the donate.php page is iframed in.  Tested and works well in Wordpress 4.

##Test mode
Append ?test=1 to the donation form URL to get some defaulted field values to speed up testing. 


*Made in Oakland*
