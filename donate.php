<?php
require_once('inc/config.inc');

//This form provides a starting point for integrating with Click & Pledge FAAS.  It includes options for passing values into Salesforce
//Thanks to Bootstrap, jQuery, placeholder.js, and Bootstrap Validator for making it all auto-magically work.
//
//WHERE TO START
//	See http://manual.clickandpledge.com/Form-as-a-Service.html for help and samples
//	See http://manual.clickandpledge.com/Form-Field-Names.html for full list of config options
//	See http://forums.clickandpledge.com/content.php?r=248-Run-a-Test-Transaction for how to set up in test mode
//
//SETUP
//Required: 
//	change the values in config.inc to match your Click and Pledge info.
//	Set up custom fields on Opportunity in Salesforce
//
//Optional:
//	Set default country and state in dropdown lists
//
//**Made in Oakand**
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Donate to City Fruit</title>
	<link href="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css" rel="stylesheet">
	<link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/jquery.bootstrapvalidator/0.5.3/css/bootstrapValidator.min.css"/>

</head>
<body>

<div class="container">
	<div class="row clearfix">
	
	<form role="form" class="form-horizontal donateForm" id="Donation" name="Donation" method="post" action="https://faas.cloud.clickandpledge.com">

	 	<div class="col-xs-12 column">
	 	<br /><br />
		 	<div class="form-group">
				<label class="col-md-1 control-label" for="amount">Amount</label>
				<div class="col-md-2">  
				<input id="UnitPrice1" name="UnitPrice1" type="text" placeholder="$" class="form-control input-md" value="<?php if(isset($_GET['test'])) {echo '1.00';}?>">
		  		<input name="ItemID1" type="hidden" id="ItemID1" value="1" />
		  		<input name="ItemName1" type="hidden" id="ItemName1" value="Donation" />
		  		<input name="Quantity1" type="hidden" id="Quantity1" value="1" />
		 		<input name="UnitDeductible1" type="hidden" id="UnitDeductible1" value="100%" />
				</div>
			</div>
		
			<div class="form-group">
			<div class="col-md-11 col-md-offset-1">
			    <label class="radio" for="Installment-0">
			      <input type="radio" name="Installment" value="999" id="Installment" />
			      <input name="Periodicity" type="hidden" id="Periodicity" value="month" />
			      I would like to make a monthly recurring donation in the amount listed above.
			    </label> 
			    
			    <label class="radio" for="Installment-1">
			      <input type="radio" name="Installment" value="1" id="Installment" checked="checked" />
			      I would like to make a one-time donation.
			    </label> 
			</div>
			</div>
			
		<br /><br />
	 	</div>
	 	
	 	
	 	<div class="col-sm-6 column">
	 	<!-- Left column Begin -->
		  
			<div class="form-group">
				<div class="col-sm-8">
				<input id="BillingFirstName" name="BillingFirstName" type="text" placeholder="First Name" class="form-control input-md" value="<?php if(isset($_GET['test'])) {echo 'Mark';}?>">
				</div>
			</div>

			<div class="form-group">
				<div class="col-sm-8">
				<input id="BillingLastName" name="BillingLastName" type="text" placeholder="Last Name" class="form-control input-md" value="<?php if(isset($_GET['test'])) {echo 'Spits';}?>">	
				</div>
			</div>
			 
			<div class="form-group">
				<div class="col-sm-8">
				<input id="BillingPhone" name="BillingPhone" type="text" placeholder="Phone" class="form-control input-md" value="<?php if(isset($_GET['test'])) {echo '206-555-1212';}?>">
				</div>
			</div>
			
			 <div class="form-group">
			    <div class="col-sm-8">
			      <input type="text" placeholder="E-mail" class="form-control" name="BillingEmail" id="BillingEmail" value="<?php if(isset($_GET['test'])) {echo 'i8flan@gmail.com';}?>">
			    </div>
			  </div>
			
			 <div class="form-group">
			    <div class="col-sm-8">
			      <input type="text" placeholder="Address Line 1" class="form-control" name="BillingAddress1" id="BillingAddress1" value="<?php if(isset($_GET['test'])) {echo '555 Main St';}?>">
			    </div>
			  </div>


			  <div class="form-group">
			    <div class="col-sm-8">
			      <input type="text" placeholder="Address Line 2" class="form-control" name="BillingAddress2" id="BillingAddress2" value="<?php if(isset($_GET['test'])) {echo 'Apt C';}?>">
			    </div>
			  </div>


			  <div class="form-group">
			    <div class="col-sm-8">
			      <input type="text" placeholder="City" class="form-control" name="BillingCity" id="BillingCity" value="<?php if(isset($_GET['test'])) {echo 'Oakland';}?>">
			    </div>
			  </div>


			  <div class="form-group">
			    <div class="col-sm-4 selectContainer">
			      <select name="BillingStateProvince" size="1" id="BillingStateProvince"  class="form-control">
			      <?php include 'inc/_US_States.html'; ?>
			      </select>
			    </div>
			    <div class="col-sm-4">
			      <input type="text" placeholder="Post Code" class="form-control" name="BillingPostalCode" id="BillingPostalCode" value="<?php if(isset($_GET['test'])) {echo '98118';}?>">
			    </div>
			  </div>


			  <div class="form-group">
			    <div class="col-sm-8 selectContainer">
			      <select name="BillingCountryCode" size="1" id="BillingCountryCode"  class="form-control">
			      <?php include 'inc/_Country_Codes.html'; ?>
			      </Select>
			    </div>
			  </div>
		  	
			<div class="form-group">
			    <div class="col-sm-8">
			      <textarea rows="4" class="form-control" placeholder="Comments" id="FieldName10" name="FieldName10"> <?php if(isset($_GET['test'])) {echo 'Sample comment';}?></textarea>
			      <input name="FieldName10" type="hidden" value="Comments"/>
			    </div>
			  </div>
			  
			  
		
		<!-- Left column End -->
		</div>
	  	<div class="col-sm-6 column">
	  	<!-- Right column Begin -->
	  	
		  		
		  	  <div class="form-group">
			    <div class="col-sm-8">
			      <input type="text" placeholder="Name on Card" class="form-control" name="NameOnCard" id="NameOnCard" value="<?php if(isset($_GET['test'])) {echo 'Mark Spits';}?>">
			    </div>
			  </div>
		  		
		  	    <div class="form-group">
				<div class="col-sm-8">
				  <input type="text" class="form-control" name="CardNumber" id="CardNumber" placeholder="Card Number" value="<?php if(isset($_GET['test'])) {echo '4111111111111111';}?>">
				</div>
			      </div>
			      
			      <div class="form-group">
				  
				    <div class="col-sm-4 selectContainer">
				    <select class="form-control" name="ExpirationMonth" id="ExpirationMonth">
					<option value="">Month</option>
					<option value="01">Jan (01)</option>
					<option value="02">Feb (02)</option>
					<option value="03">Mar (03)</option>
					<option value="04">Apr (04)</option>
					<option value="05">May (05)</option>
					<option value="06">Jun (06)</option>
					<option value="07">JUl (07)</option>
					<option value="08">Aug (08)</option>
					<option value="09">Sep (09)</option>
					<option value="10">Oct (10)</option>
					<option value="11">Nov (11)</option>
					<option value="12">Dec (12)</option>
				    </select>
				    </div>
				    <div class="col-sm-4">

				      <select class="form-control" name="ExpirationYear" id="ExpirationYear">
					<?PHP
					$year = date("Y") - 1; 
					for ($i = 0; $i <= 8; $i++) 
					{
					$year++; 
					$rightyear = substr($year, -2);
					echo "<option value='$rightyear'>$year</option>";
					}
					?>
					</select>
				  
				      
				    </div>
				  
			      </div>
			      
			      <div class="form-group">
					<div class="col-sm-4">
					  <input type="text" class="form-control" name="Cvv2" id="Cvv2" placeholder="CCV" value="<?php if(isset($_GET['test'])) {echo '123';}?>">
					</div>
			      </div>
		  	
		  	
		  	
		  	<div class="checkbox">
			  <label><input type="checkbox" value="1" onclick="showPanel(this,'Match')" name="FieldName2" id="FieldName2">My employer will match my gift</label>
			  <input name="FieldName2" type="hidden" value="CompanyMatch"/>
			</div>
		  	
		  	<div class="form-group" style="display:none;" id="Match">
				<div class="col-sm-8">
			 	 <input type="text" class="form-control" name="FieldName1" id="FieldName1" placeholder="Employer name">
			 	 <input name="FieldName1" type="hidden" value="Company"/>
				</div>
		        </div>
		        
		        <div class="checkbox">
			  <label><input type="checkbox" value="1" onclick="showPanel(this,'Dedication')" id="FieldName3" name="FieldName3" >Dedicate my donation in honor or memory of someone special.</label>
			  <input name="FieldName3" type="hidden" value="isDedication"/>
			</div>
		  	
		  	<div style="display:none;" id="Dedication">
		  	
			  	<div class="form-group">
				<div class="col-md-11 col-md-offset-1">
				    <label class="radio" for="radios-0">
				      <input type="radio" name="FieldName4" id="FieldName4-0" value="honor" checked="checked">
				      In honor of...
				    </label> 
				    
				    <label class="radio" for="radios-1">
				      <input type="radio" name="FieldName4" id="FieldName4-1" value="memory">
				      <input name="FieldName4" type="hidden" value="Dedication"/>
				      In memory of...
				    </label> 
				</div>
				</div>
			  	
			  	<div class="form-group">
					<div class="col-sm-8">
				 	 <input type="text" class="form-control" name="FieldName5" id="FieldName5" placeholder="Name">
				 	 <input name="FieldName5" type="hidden" value="DedicationName"/>
					</div>
				</div>
				
				<div class="form-group">
				  
				    <div class="col-sm-8">
				    <select class="form-control" name="FieldName6" id="FieldName6">
					<option value="none" name="none">Notify by</option>
					<option value="none" name="none">Do not notify</option>
					<option value="email" name="email">Send an E-mail</option>
					<option value="letter" name="letter">Send a Letter</option>
				      </select>
				      <input name="FieldName6" type="hidden" value="DedicationNotifyMethod"/>
				    </div>
				
			    </div>
			    
			    <div style="display:none;" id="DedicationEmail">
					<div class="form-group">
						<div class="col-sm-8">
					 	 <input type="text" class="form-control" name="FieldName7" id="FieldName7" placeholder="Notification E-mail">
					 	 <input name="FieldName7" type="hidden" value="DedicationNotifyEmail"/>
						</div>
					</div>
			    </div>
			    
			    <div style="display:none;" id="DedicationLetter">
					  <div class="form-group">
						<div class="col-sm-8">
						  <input type="text" placeholder="Address Line 1" class="form-control" name="FieldName8" id="FieldName8">
						  <input name="FieldName8" type="hidden" value="DedicationNotifyAddress1"/>
						</div>
					  </div>


					  <div class="form-group">
						<div class="col-sm-8">
						  <input type="text" placeholder="Address Line 2" class="form-control" name="FieldName9" id="FieldName9">
						   <input name="FieldName9" type="hidden" value="DedicationNotifyAddress2"/>
						</div>
					  </div>


					  <div class="form-group">
						<div class="col-sm-8">
						  <input type="text" placeholder="City" class="form-control" name="FieldName11" id="FieldName11">
						   <input name="FieldName11" type="hidden" value="DedicationNotifyAddress2"/>
						</div>
					  </div>


					  <div class="form-group">
						<div class="col-sm-4 selectContainer">
						  <select size="1" id="FieldName12" name="FieldName12"  class="form-control">
			      		  <?php include 'inc/_US_States.html'; ?>
			              </select>
			              <input name="FieldName12" type="hidden" value="DedicationNotifyState"/>
						</div>

						<div class="col-sm-4">
						  <input type="text" placeholder="Post Code" class="form-control" name="FieldName14" id="FieldName14">
						  <input name="FieldName14" type="hidden" value="DedicationNotifyZip"/>
						</div>
					  </div>


					  <div class="form-group">
						<div class="col-sm-8 selectContainer">
						  <select name="FieldName13" size="1" id="FieldName13"  class="form-control">
			    		  <?php include 'inc/_Country_Codes.html'; ?>
			      		  </Select>
			      		  <input name="FieldName13" type="hidden" value="DedicationNotifyCountry"/>
						</div>
					  </div>
			    
			    
			    </div>
			    <div style="display:none;" id="DedicationMessage">
					<div class="form-group">
						<div class="col-sm-8">
							<textarea rows="3" class="form-control" placeholder="Dedication Message" name="FieldName15" id="FieldName15"></textarea>
							<input name="FieldName15" type="hidden" value="DedicationNotifyMessage"/>
						</div>
					</div>
	  			</div>
	  			
	  		</div>
	  		
	  	<!-- Right column End -->
		</div>
		
		<div class="col-md-12 column">
			<button type="submit" name="donate" class="btn btn-primary">Submit</button>
		</div>
		
		<input type="hidden" name="OnSuccessUrl" id="OnSuccessUrl" 	value="<?php echo ON_SUCCESS_URL ?>" />
		<input type="hidden" name="OnDeclineUrl" id="OnDeclineUrl" 	value="<?php echo ON_DECLINE_URL ?>" />
		<input type="hidden" name="OnErrorUrl" id="OnErrorUrl" 		value="<?php echo ON_ERROR_URL ?>" />
		<input type="hidden" name="Campaign" id="Campaign" value="<?php if(isset($_GET['campaign'])) {echo $_GET['campaign'];}else{echo DEFAULT_SF_CAMPAIGN;}?>" />

		<input type="hidden" name="AccountGuid" id="AccountGuid" value="<?php echo CNP_ACCOUNT_GUID ?>" />
		<input type="hidden" name="AccountID" id="AccountID" value="<?php echo CNP_ACCOUNT_ID ?>" />
		<input type="hidden" name="WID" id="WID" value="<?php echo CNP_WID ?>" />

		<input type="hidden" name="RefID" id="RefID" value="<?php echo CNP_REF_ID ?>" />
		<input type="hidden" name="Tracker" id="Tracker" value="<?php echo CNP_TRACKER ?>" />

		<input type="hidden" name="SendReceipt" id="SendReceipt" value="<?php echo CNP_SEND_RECEIPT ?>" />
		<input type="hidden" name="OrderMode" id="OrderMode" value="<?php echo CNP_ORDER_MODE ?>" />
		<input type="hidden" name="TransactionType" id="TransactionType" value="<?php echo CNP_TRANSACTION_TYPE ?>" />

		<input type="hidden" name="DecimalMark" id="DecimalMarkMode" value="<?php echo CNP_DECIMAL_MARK ?>" />
	</form>
	</div>
</div>


    <!-- jQuery -->
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.js"></script>
    <script src="js/jquery.placeholder.js"></script>
    <script type="text/javascript">
   $(function() {
    // Invoke the placeholder plugin to make placeholders work in old browsers
    $('input, textarea').placeholder();
 	 
 	 // dedication checkbox
     $('#FieldName6').change(function(){

        if($('#FieldName6').val() == 'email') {
            $('#DedicationEmail').show();
            $('#DedicationMessage').show();  
        } else {
            $('#DedicationEmail').hide(); 
        } 
        
        if($('#FieldName6').val() == 'letter') {
            $('#DedicationLetter').show(); 
            $('#DedicationMessage').show(); 
        } else {
            $('#DedicationLetter').hide(); 
        } 
        
        if($('#FieldName6').val() == 'none') {
            $('#DedicationEmail').hide(); 
            $('#DedicationLetter').hide(); 
            $('#DedicationMessage').hide(); 
        } 
        
    });
    
    
    $("input[name='Installment']").click(function(){

        if($("input[name='Installment']:checked").val() == 1) {
            $('#Periodicity').val('');
        } 
        
        if($("input[name='Installment']:checked").val() == 999) {
            $('#Periodicity').val('month'); 
        } 
        
    });

    
   });

	function showPanel(pObj,toshow)
	{
	if (pObj.checked)
		document.getElementById(toshow).style.display = "inline";
	else 
		document.getElementById(toshow).style.display = "none";
	}
	
	
	
	$(document).ready(function() {
		$.fn.bootstrapValidator.validators.companymatch = {
		    validate: function(validator, $field, options) {
		        var value = $field.val();
		        
		         if (value === '') {
		        	 if($("input[name='FieldName2']:checked").val() == 1) {
	 					return {
		              	  valid: false,
		              	  message: 'The company name is required'
		           		}
					 }  
		        }
		        return true;
		    }
		};
		$.fn.bootstrapValidator.validators.namenotify = {
		    validate: function(validator, $field, options) {
		        var value = $field.val();
		        
		         if (value === '') {
		        	 if($("input[name='FieldName3']:checked").val() == 1) {
	 					return {
		              	  valid: false,
		              	  message: 'The name is required'
		           		}
					 }  
		        }
		        return true;
		    }
		};
		$.fn.bootstrapValidator.validators.emailnotify = {
		    validate: function(validator, $field, options) {
		        var value = $field.val();
		        
		         if (value === '') {
		        	 if($('#FieldName6').val() == 'email') {
	 					return {
		              	  valid: false,
		              	  message: 'The email is required'
		           		}
					 }  
		        }
		        return true;
		    }
		};
		
		$.fn.bootstrapValidator.validators.letternotify = {
		    validate: function(validator, $field, options) {
		        var value = $field.val();
		        
		         if (value === '') {
		        	 if($('#FieldName6').val() == 'letter') {
	 					return {
		              	  valid: false,
		              	  message: 'The address is required'
		           		}
					 }  
		        }
		        return true;
		    }
		};
	
		$('.donateForm').bootstrapValidator({
		    feedbackIcons: {
		        valid: 'glyphicon glyphicon-ok',
		        invalid: 'glyphicon glyphicon-remove',
		        validating: 'glyphicon glyphicon-refresh'
		    },
		    fields: {
		        UnitPrice1: {
		            message: 'The Amount is not valid',
		            validators: {
		                notEmpty: {
		                    message: 'The Amount is required'
		                },
		                numeric: {
		                    message: 'The Amount must be numeric',
		                    separator: '.'
		                }
		            }
		        },
		        BillingFirstName: {
		            message: 'The first name is not valid',
		            validators: {
		                notEmpty: {
		                    message: 'The First Name field is required'
		                }
		            }
		        },
		         BillingLastName: {
		            message: 'The last name is not valid',
		            validators: {
		                notEmpty: {
		                    message: 'The Last Name field is required'
		                }
		            }
		        },
		        BillingEmail: {
		            validators: {
		                notEmpty: {
		                    message: 'The email is required'
		                },
		                emailAddress: {
		                    message: 'Not a valid email address'
		                }
		            }
		        },
		         BillingAddress1: {
		            message: 'The Address is not valid',
		            validators: {
		                notEmpty: {
		                    message: 'The Address field is required'
		                }
		            }
		        },
		         BillingCity: {
		            message: 'The City is not valid',
		            validators: {
		                notEmpty: {
		                    message: 'The City field is required'
		                }
		            }
		        },
		        BillingPostalCode: {
		            message: 'The Postal code is not valid',
		            validators: {
		                notEmpty: {
		                    message: 'The Postal Code field is required'
		                }
		            }
		        },
		        NameOnCard: {
		            message: 'The Name on card is not valid',
		            validators: {
		                notEmpty: {
		                    message: 'The Name on Card field is required'
		                }
		            }
		        },
		        ExpirationMonth: {
		            message: 'The card expiration month is not valid',
		            validators: {
		                notEmpty: {
		                    message: 'Card expiration month field is required'
		                }
		            }
		        },
		        CardNumber: {
		            message: 'The card number on card is not valid',
		            validators: {
		                creditCard: {
		                    message: 'The credit card number is not valid'
		                },
		                 notEmpty: {
				            message: 'The credit card is required'
				         }
		            }
		        },
		        Cvv2: {
		            message: 'The CCV on card is not valid',
		            validators: {
		                cvv: {
		                    creditCardField: 'CardNumber',
		                    message: 'The CCV number is not valid'
		                },
		                 notEmpty: {
		                    message: 'The CCV is required'
		                }
		            }
		        },
		        FieldName1: {
		            message: 'The company name is invalid',
		            validators: {
		                companymatch: {
		                    message: 'Please supply a company name'
		                }
		            }
		        },
		        FieldName5: {
		            message: 'The name is invalid',
		            validators: {
		                namenotify: {
		                    message: 'Please supply a name'
		                }
		            }
		        },
		        FieldName7: {
		            message: 'The email is required is invalid',
		            validators: {
		                emailnotify: {
		                    message: 'Please supply an email'
		                }
		            }
		        },
		        FieldName8: {
		            message: 'The address is required is invalid',
		            validators: {
		                letternotify: {
		                    message: 'Please supply an address'
		                }
		            }
		        },
		    }
		});
		
		
	});
	
	
  </script>

    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
	<script type="text/javascript" src="//cdnjs.cloudflare.com/ajax/libs/jquery.bootstrapvalidator/0.5.3/js/bootstrapValidator.min.js"></script>
  </body>
</html>