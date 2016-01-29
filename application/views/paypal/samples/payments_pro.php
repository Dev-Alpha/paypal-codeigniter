<html>
<head>
<title>Angell EYE PayPal Payments Pro CodeIgniter Library Demo</title>

<style type="text/css">

body {
 background-color: #fff;
 margin: 40px;
 font-family: Lucida Grande, Verdana, Sans-serif;
 font-size: 14px;
 color: #4F5155;
}

a {
 color: #003399;
 background-color: transparent;
 font-weight: normal;
}

h1 {
 color: #444;
 background-color: transparent;
 border-bottom: 1px solid #D0D0D0;
 font-size: 16px;
 font-weight: bold;
 margin: 24px 0 2px 0;
 padding: 5px 0 6px 0;
}

code {
 font-family: Monaco, Verdana, Sans-serif;
 font-size: 12px;
 background-color: #f9f9f9;
 border: 1px solid #D0D0D0;
 color: #002166;
 display: block;
 margin: 14px 0 14px 0;
 padding: 12px 10px 12px 10px;
 overflow:auto;
}
</style>

<link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/highlight.js/9.1.0/styles/default.min.css">
<script src="//cdnjs.cloudflare.com/ajax/libs/highlight.js/9.1.0/highlight.min.js"></script>
<script>hljs.initHighlightingOnLoad();</script>

</head>
<body>

<p><a href="http://www.angelleye.com"><img src="data:image/jpeg;base64,/9j/4QAYRXhpZgAASUkqAAgAAAAAAAAAAAAAAP/sABFEdWNreQABAAQAAAA8AAD/4QNtaHR0cDovL25zLmFkb2JlLmNvbS94YXAvMS4wLwA8P3hwYWNrZXQgYmVnaW49Iu+7vyIgaWQ9Ilc1TTBNcENlaGlIenJlU3pOVGN6a2M5ZCI/PiA8eDp4bXBtZXRhIHhtbG5zOng9ImFkb2JlOm5zOm1ldGEvIiB4OnhtcHRrPSJBZG9iZSBYTVAgQ29yZSA1LjAtYzA2MCA2MS4xMzQ3NzcsIDIwMTAvMDIvMTItMTc6MzI6MDAgICAgICAgICI+IDxyZGY6UkRGIHhtbG5zOnJkZj0iaHR0cDovL3d3dy53My5vcmcvMTk5OS8wMi8yMi1yZGYtc3ludGF4LW5zIyI+IDxyZGY6RGVzY3JpcHRpb24gcmRmOmFib3V0PSIiIHhtbG5zOnhtcE1NPSJodHRwOi8vbnMuYWRvYmUuY29tL3hhcC8xLjAvbW0vIiB4bWxuczpzdFJlZj0iaHR0cDovL25zLmFkb2JlLmNvbS94YXAvMS4wL3NUeXBlL1Jlc291cmNlUmVmIyIgeG1sbnM6eG1wPSJodHRwOi8vbnMuYWRvYmUuY29tL3hhcC8xLjAvIiB4bXBNTTpPcmlnaW5hbERvY3VtZW50SUQ9InhtcC5kaWQ6NDkxMTI2QkFCQkUyREYxMUI4MjVENDA4RDAzQ0JDQkQiIHhtcE1NOkRvY3VtZW50SUQ9InhtcC5kaWQ6NjZCRDY4MzIzRDUzMTFFMEE4NzJCMkZBMTM2MUJDNjMiIHhtcE1NOkluc3RhbmNlSUQ9InhtcC5paWQ6NjZCRDY4MzEzRDUzMTFFMEE4NzJCMkZBMTM2MUJDNjMiIHhtcDpDcmVhdG9yVG9vbD0iQWRvYmUgUGhvdG9zaG9wIENTNSBXaW5kb3dzIj4gPHhtcE1NOkRlcml2ZWRGcm9tIHN0UmVmOmluc3RhbmNlSUQ9InhtcC5paWQ6MDA4QTNFQjg1MjNERTAxMUJCOERBMTRBNjQyMTREQjYiIHN0UmVmOmRvY3VtZW50SUQ9InhtcC5kaWQ6NDkxMTI2QkFCQkUyREYxMUI4MjVENDA4RDAzQ0JDQkQiLz4gPC9yZGY6RGVzY3JpcHRpb24+IDwvcmRmOlJERj4gPC94Onht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" alt="Angell EYE Web Solutions Made Easy" width="500" height="102" border="0"></a></p>
<h1>Angell EYE PayPal Payments Pro CodeIgniter Library Demo	</h1>
<p>This library is written to reflect PayPal's documentation directly. It's very simple to use with a quick understanding of the way it's designed.</p>
<ul>
  <li>Every PayPal API method is included as a method within the library and also within the controller.  </li>
  <li>The controller methods include &quot;templates&quot; that consists of every possible parameter that you can pass into that particular API call with PayPal.</li>
  <li>Simply fill in the empty parameters and pass that into the library.</li>
  <li>The library will handle all communication with PayPal, data parsing, etc. and return an array of results.
    <ul>
      <li>All actual response fields from PayPal</li>
      <li>All request fields split up into individual fields for ease of troubleshooting</li>
      <li>Raw request and response fields</li>
    </ul>
  </li>
</ul>
<p>There are two methods within the controller that are setup for demonstration purposes. I'll go over those here.</p>
<h2>GetBalance</h2>
<p>This call is extremely straight forward and simply returns the current account balance for the requesting API caller. The controller already has the following method included:</p>
<p>
    <pre><code class="php">
    function Get_balance_sample()
    {
        // Call to PayPal model
        $PayPalResult = $this->Paypal_pro_model->Get_balance();

        if(!$PayPalResult)
        {
            $errors = $this->Paypal_pro_model->errors;
            $this->load->view('paypal/samples/paypal_error',$errors);
        }
        else
        {
            // Successful call.  Load view or whatever you need to do here.
            $data = $PayPalResult;
            $this->load->view('paypal/samples/paypal_result',$data);
        }
    }
    </code></pre>
</p>
<p><a href="<?php echo site_url('paypal/samples/payments_pro/get_balance');?>" target="_blank">Run the code above and see the output.</a></p>
<h2>DoDirectPayment</h2>
<p>This call allows you to process credit cards directly using PayPal Payments Pro. The controller has a method called Do_direct_payment_demo() that is displayed here:</p>
<p>
    <pre><code class="php">
    function Do_direct_payment_sample()
    {
        $DPFields = array(
            'paymentaction'     => 'Sale',          // How you want to obtain payment.  Authorization indidicates the payment is a basic auth subject to settlement with Auth & Capture.  Sale indicates that this is a final sale for which you are requesting payment.  Default is Sale.
            'ipaddress'         => $_SERVER['REMOTE_ADDR'],         // Required.  IP address of the payer's browser.
            'returnfmfdetails'  => '1'          // Flag to determine whether you want the results returned by FMF.  1 or 0.  Default is 0.
        );

        $CCDetails = array(
            'creditcardtype' => 'MasterCard',           // Required. Type of credit card.  Visa, MasterCard, Discover, Amex, Maestro, Solo.  If Maestro or Solo, the currency code must be GBP.  In addition, either start date or issue number must be specified.
            'acct' => '5424180818927383',           // Required.  Credit card number.  No spaces or punctuation.
            'expdate' => '102017',          // Required.  Credit card expiration date.  Format is MMYYYY
            'cvv2' => '123',            // Requirements determined by your PayPal account settings.  Security digits for credit card.
            'startdate' => '',          // Month and year that Maestro or Solo card was issued.  MMYYYY
            'issuenumber' => ''         // Issue number of Maestro or Solo card.  Two numeric digits max.
        );

        $PayerInfo = array(
            'email' => 'test@domain.com',           // Email address of payer.
            'payerid' => '',            // Unique PayPal customer ID for payer.
            'payerstatus' => '',            // Status of payer.  Values are verified or unverified
            'business' => 'Testers, LLC'            // Payer's business name.
        );

        $PayerName = array(
            'salutation' => 'Mr.',          // Payer's salutation.  20 char max.
            'firstname' => 'Tester',            // Payer's first name.  25 char max.
            'middlename' => '',         // Payer's middle name.  25 char max.
            'lastname' => 'Testerson',          // Payer's last name.  25 char max.
            'suffix' => ''          // Payer's suffix.  12 char max.
        );

        $BillingAddress = array(
            'street' => '123 Test Ave.',            // Required.  First street address.
            'street2' => '',            // Second street address.
            'city' => 'Kansas City',            // Required.  Name of City.
            'state' => 'MO',            // Required. Name of State or Province.
            'countrycode' => 'US',          // Required.  Country code.
            'zip' => '64111',           // Required.  Postal code of payer.
            'phonenum' => '555-555-5555'            // Phone Number of payer.  20 char max.
        );

        $ShippingAddress = array(
            'shiptoname' => 'Tester Testerson',         // Required if shipping is included.  Person's name associated with this address.  32 char max.
            'shiptostreet' => '123 Test Ave.',          // Required if shipping is included.  First street address.  100 char max.
            'shiptostreet2' => '',          // Second street address.  100 char max.
            'shiptocity' => 'Kansas City',          // Required if shipping is included.  Name of city.  40 char max.
            'shiptostate' => 'MO',          // Required if shipping is included.  Name of state or province.  40 char max.
            'shiptozip' => '64111',         // Required if shipping is included.  Postal code of shipping address.  20 char max.
            'shiptocountry' => 'US',            // Required if shipping is included.  Country code of shipping address.  2 char max.
            'shiptophonenum' => '555-555-5555'          // Phone number for shipping address.  20 char max.
        );

        $PaymentDetails = array(
            'amt' => '100.00',          // Required.  Total amount of order, including shipping, handling, and tax.
            'currencycode' => 'USD',            // Required.  Three-letter currency code.  Default is USD.
            'itemamt' => '95.00',           // Required if you include itemized cart details. (L_AMTn, etc.)  Subtotal of items not including S&H, or tax.
            'shippingamt' => '5.00',            // Total shipping costs for the order.  If you specify shippingamt, you must also specify itemamt.
            'shipdiscamt' => '',            // Shipping discount for the order, specified as a negative number.
            'handlingamt' => '',            // Total handling costs for the order.  If you specify handlingamt, you must also specify itemamt.
            'taxamt' => '',         // Required if you specify itemized cart tax details. Sum of tax for all items on the order.  Total sales tax.
            'desc' => 'Web Order',          // Description of the order the customer is purchasing.  127 char max.
            'custom' => '',         // Free-form field for your own use.  256 char max.
            'invnum' => '',         // Your own invoice or tracking number
            'notifyurl' => ''           // URL for receiving Instant Payment Notifications.  This overrides what your profile is set to use.
        );

        $OrderItems = array();
        $Item     = array(
            'l_name' => 'Test Widget 123',          // Item Name.  127 char max.
            'l_desc' => 'The best test widget on the planet!',          // Item description.  127 char max.
            'l_amt' => '95.00',         // Cost of individual item.
            'l_number' => '123',            // Item Number.  127 char max.
            'l_qty' => '1',         // Item quantity.  Must be any positive integer.
            'l_taxamt' => '',           // Item's sales tax amount.
            'l_ebayitemnumber' => '',           // eBay auction number of item.
            'l_ebayitemauctiontxnid' => '',         // eBay transaction ID of purchased item.
            'l_ebayitemorderid' => ''           // eBay order ID for the item.
        );
        array_push($OrderItems, $Item);

        $Secure3D = array(
            'authstatus3d' => '',
            'mpivendor3ds' => '',
            'cavv' => '',
            'eci3ds' => '',
            'xid' => ''
        );

        $PayPalRequestData = array(
            'DPFields' => $DPFields,
            'CCDetails' => $CCDetails,
            'PayerInfo' => $PayerInfo,
            'PayerName' => $PayerName,
            'BillingAddress' => $BillingAddress,
            'ShippingAddress' => $ShippingAddress,
            'PaymentDetails' => $PaymentDetails,
            'OrderItems' => $OrderItems,
            'Secure3D' => $Secure3D
        );

        // Call to PayPal model
        $PayPalResult = $this->Paypal_pro_model->Do_direct_payment($PayPalRequestData);

        if(!$PayPalResult)
        {
            $errors = $this->Paypal_pro_model->errors;
            $this->load->view('paypal/samples/paypal_error',$errors);
        }
        else
        {
            // Successful call.  Load view or whatever you need to do here.
            $data = $PayPalResult;
            $this->load->view('paypal/samples/paypal_result',$data);
        }
    }
    </code></pre>
</p>
<p><a href="<?php echo site_url('paypal/samples/payments_pro/do_direct_payment_demo')?>" target="_blank">Run the code above and see the output.</a></p>
</body>
</html>
