<?php


$trackingNumber = '22222e2222';
$poNumber = '11111q1111';
$scheduledDate = '2021-07-19 8:10';
$dateObject = new DateTime($scheduledDate);
$customer = 'My new Customer';
$trade = 'HVAC';
$nte = (float) 1000.0;
$storeId = 'MNC-123';
$street = 'Main street 123';
$city = 'Chicago';
$state = 'IL';
$zipCode = '66562';
$phone = (float) 9991112233;

// headers
$headers = array("Tracking_Number", "PO_Number", "Scheduled_Date", "Customer", "Trade",
"NTE", "Store_ID", "Street", "City", "State", "Zip_Code", "Phone");

// array of data to csv
$data = array(
    "trackingnumber" => '22222e2222',
    "poNumber" => '11111q1111',
    "scheduledDate" => '2021-07-19 8:10',
    "customer" => 'My new Customer',
    "trade" => 'HVAC',
    "nte" => 1000.00,
    "storeId" => 'MNC-123',
    "street" => 'Main street 123',
    "city" => 'Chicago',
    "state" => 'IL',
    "zipCode" => '66562',
    "phone" => 9991112233,

);

// open and create the file
$file = fopen("wo_for_parse.csv", "w");

$delimiteur = ';';

//create headers
fputcsv($file, $headers, $delimiteur);

// insert data

fputcsv($file, $data, $delimiteur);

// close the file
fclose($file);

?>

<table>
<tr>
    <td class="card">
        <table id="MainContent" width="100%" cellpadding="0" cellspacing="0" border="0" bgcolor="#FFFFFF">
            <tbody><tr>
                <td style="padding: 50px 60px;" class="card-content">
                    <table width="100%" cellpadding="0" cellspacing="0" border="0">
                        <tbody><tr>
                            <td style="padding: 0; margin: 0;">
                                <h1 style="padding: 0; margin: 0;">New Service Request</h1>
                            </td>
                        </tr>
                        <tr>
                            <td height="28" style="height: 28px;">&nbsp;</td>
                        </tr>
                        <tr>
                            <td>
                                <h4 style="padding: 0; margin: 0; font-weight: 600; text-align:justify;">
                                    Your company has received a service request 
      <a href="#" target="_blank" style="color:black; display: inline-block;">#22222e2222</a>
      from CALLER: Johnatan Doe.
                                </h4>
                            </td>
                        </tr>
                        <tr>
                            <td height="28" style="height: 28px;">&nbsp;</td>
                        </tr>
                        <tr>
                            <td>
                                <table width="100%" cellpadding="0" cellspacing="0" border="0" class="container">
                                    <tbody>
                                    <tr>
                                        <td height="28" style="height: 28px;">&nbsp;</td>
                                    </tr>
                                    <tr>
                                        <td width="50%" align="left" valign="top" style="padding-right: 5px; max-width: 240px;" class="mobile">
                                            <div style="font-size: 12px; color: gray;">Customer</div>
                                            <h3 style="padding: 0; margin: 0; font-weight: 600; overflow-wrap: break-word;" id="customer"><?php echo $customer;?>
</h3>
                                        </td>
                                        <td height="12" style="height: 12px;" class="mobile vertical-column-space"></td>
                                        <td width="50%" align="left" valign="top" style="max-width: 240px;" class="mobile">
                                            <div style="font-size: 12px; color: gray;">Priority</div>
                                            <h3 style="padding: 0; margin: 0; font-weight: 600; overflow-wrap: break-word;" id="priority">Emergency-4hrs</h3>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td height="28" style="height: 28px;">&nbsp;</td>
                                    </tr>
                                    <tr>
                                        <td width="50%" align="left" valign="top" style="padding-right: 5px; max-width: 240px;" class="mobile">
                                            <div style="font-size: 12px; color: gray;">Trade</div>
                                            <h3 style="padding: 0; margin: 0; font-weight: 600; overflow-wrap: break-word;" id="trade"><?php echo $trade; ?></h3>
                                        </td>
                                        <td height="12" style="height: 12px;" class="mobile vertical-column-space"></td>
                                        <td width="50%" align="left" valign="top" style="max-width: 240px;" class="mobile">
                                            <div style="font-size: 12px; color: gray;">Scheduled</div>
                                            <h3 style="padding: 0; margin: 0; font-weight: 600;" id="scheduled_date">
                                                <?php echo $dateObject->format('Y-m-d h:i A'); ?> <br>
                                            <!-- <span style="font-size: 14px; color: gray;">08:10 PM</span> -->
                                        </h3>
                                    </td>
                                </tr>
                                <tr>
                                    <td height="28" style="height: 28px;">&nbsp;</td>
                                </tr>
                                <tr>
                                    <td width="50%" align="left" valign="top" style="padding-right: 5px; max-width: 240px;" class="mobile">
                                        <div style="font-size: 12px; color: gray;">Category</div>
                                        <h3 style="padding: 0; margin: 0; font-weight: 600; overflow-wrap: break-word;" id="category">REPAIR</h3>
                                    </td>
                                    <td height="12" style="height: 12px;" class="mobile vertical-column-space"></td>
                                    <td width="50%" align="left" valign="top" style="max-width: 240px;" class="mobile">
                                        <div style="font-size: 12px; color: gray;">
                                            NTE (USD )
                                        </div>
                                        <h3 style="padding: 0; margin: 0; font-weight: 600; overflow-wrap: break-word;" id="nte"><?php echo number_format($nte,2); ?></h3>
                                    </td>
                                </tr>
                            </tbody></table>
                        </td>
                    </tr>
                    </tbody></table>
                </td>
            </tr>
        </tbody></table>
    </td>
</tr>
<tr>
    <td class="card">
        <table id="WorkOrderDetails" width="100%" cellpadding="0" cellspacing="0" border="0" bgcolor="#FFFFFF">
            <tbody><tr>
                <td style="padding: 50px 60px;" class="card-content">
                    <table width="100%" cellpadding="0" cellspacing="0" border="0">
                        <tbody><tr>
                            <td style="padding: 0; margin: 0;">
                                <h1 style="padding: 0; margin: 0;">Work Order Details</h1>
                            </td>
                        </tr>
                        <tr>
                            <td height="28" style="height: 28px;">&nbsp;</td>
                        </tr>
                        <tr>
                            <td>
                                <table width="100%" cellpadding="0" cellspacing="0" border="0" class="container">
                                        <tbody><tr>
                                            <td width="50%" align="left" valign="top" style="padding-right: 5px; max-width: 240px;" class="mobile">
                                                <div style="font-size: 12px; color: gray;">Customer Area</div>
                                                <h3 style="padding: 0; margin: 0; font-weight: 600; overflow-wrap: break-word;" id="area">COOK LINE/PREP</h3>
                                            </td>
                                            <td height="12" style="height: 12px;" class="mobile vertical-column-space"></td>
                                            <td width="50%" align="left" valign="top" style="max-width: 240px;" class="mobile">
                                                <div style="font-size: 12px; color: gray;">Asset</div>
                                                <h3 style="padding: 0; margin: 0; font-weight: 600; overflow-wrap: break-word;" id="asset">Exhaust System/Kitchen</h3>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td height="28" style="height: 28px;">&nbsp;</td>
                                        </tr>
                                        <tr>
                                            <td width="50%" align="left" valign="top" style="padding-right: 5px; max-width: 240px;" class="mobile">
                                                <div style="font-size: 12px; color: gray;">Problem Type</div>
                                                <h3 style="padding: 0; margin: 0; font-weight: 600; overflow-wrap: break-word;" id="problem_type">Exhaust Fan</h3>
                                            </td>
                                            <td height="12" style="height: 12px;" class="mobile vertical-column-space"></td>
                                            <td width="50%" align="left" valign="top" style="max-width: 240px;" class="mobile">
                                                <div style="font-size: 12px; color: gray;">Problem</div>
                                                <h3 style="padding: 0; margin: 0; font-weight: 600; overflow-wrap: break-word;" id="problem_code">Repair</h3>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td height="28" style="height: 28px;">&nbsp;</td>
                                        </tr>
                                    <tr>
                                        <td width="50%" align="left" valign="top" style="padding-right: 5px; max-width: 240px;" class="mobile">
                                            <div style="font-size: 12px; color: gray;">PO#</div>
                                            <h3 style="padding: 0; margin: 0; font-weight: 600; overflow-wrap: break-word;" id="po_number"><?php echo $poNumber; ?></h3>
                                        </td>
                                        <td height="12" style="height: 12px;" class="mobile vertical-column-space"></td>
                                        <td width="50%" align="left" valign="top" style="max-width: 240px;" class="mobile">
                                            <div style="font-size: 12px; color: gray;">Tracking Number</div>
                                            <h3 style="padding: 0; margin: 0; font-weight: 600; overflow-wrap: break-word;" id="wo_number"><?php echo $trackingNumber; ?></h3>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td height="28" style="height: 28px;">&nbsp;</td>
                                    </tr>
                                </tbody></table>
                            </td>
                        </tr>
                        <tr>
                            <td height="28" style="height: 28px;">&nbsp;</td>
                        </tr>
                        <tr>
                            <td style="max-width: 480px;" class="mobile-col-2">
                                <div style="font-size: 12px; color: gray;">Problem Description</div>
                                <h4 style="padding: 0; margin: 0; font-weight: 600; overflow-wrap: break-word;">"COOK LINE/PREP / Exhaust Fan / Exhaust System/Kitchen / Repair / motor that was just installed not working"</h4>
                            </td>
                        </tr>
                    </tbody></table>
                </td>
            </tr>
        </tbody></table>
    </td>
</tr>
<tr>
    <td class="card">
        <table id="LocationDetails" width="100%" cellpadding="0" cellspacing="0" border="0" bgcolor="#FFFFFF">
            <tbody><tr>
                <td style="padding: 50px 60px;" class="card-content">
                    <table width="100%" cellpadding="0" cellspacing="0" border="0">
                        <tbody><tr>
                            <td style="padding: 0; margin: 0;">
                                <h1 style="padding: 0; margin: 0;">Location Details</h1>
                            </td>
                        </tr>
                        <tr>
                            <td height="28" style="height: 28px;">&nbsp;</td>
                        </tr>
                        <tr>
                            <td>
                                <table width="100%" cellpadding="0" cellspacing="0" border="0" class="container">
                                    <tbody><tr>
                                        <td class="mobile">
                                            <table cellpadding="0" cellspacing="0" border="0">
                                                <tbody><tr>
                                                    <td align="left" style="max-width: 480px;" class="mobile-col-2">
                                                        <div style="font-size: 12px; color: gray;">Customer</div>
                                                        <h3 style="padding: 0; margin: 0; font-weight: 600; overflow-wrap: break-word;" id="location_customer">My new Customer</h3>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td height="28" style="height: 28px;">&nbsp;</td>
                                                </tr>
                                                <tr>
                                                    <td align="left" style="max-width: 480px;" class="mobile-col-2">
                                                        <div style="font-size: 12px; color: gray;">Store ID</div>
                                                        <h3 style="padding: 0; margin: 0; font-weight: 600; overflow-wrap: break-word;" id="location_name"><?php echo $storeId; ?></h3>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td height="28" style="height: 28px;">&nbsp;</td>
                                                </tr>
                                                <tr>
                                                    <td align="left" style="max-width: 480px;" class="mobile-col-2">
                                                        <div style="font-size: 12px; color: gray;">Location Name</div>
                                                        <h3 style="padding: 0; margin: 0; font-weight: 600; overflow-wrap: break-word;" id="store_id">Chicago</h3>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td height="28" style="height: 28px;">&nbsp;</td>
                                                </tr>
                                                <tr>
                                                    <td align="left" style="max-width: 480px;" class="mobile-col-2">
                                                        <div style="font-size: 12px; color: gray;">Address</div>
                                                        <h3 style="padding: 0; margin: 0; font-weight: 600; overflow-wrap: break-word;" id="location_address">
                                                            <a href="#" target="_blank" style="color: black;" id="location_address">
                                                                <?php echo $street . "<br>" .$city . " " . $state . " " . $zipCode; ?>
                                                                </a>
                                                        </h3>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td height="28" style="height: 28px;">&nbsp;</td>
                                                </tr>
                                                <tr>
                                                    <td align="left" style="max-width: 480px;" class="mobile-col-2">
                                                        <div style="font-size: 12px; color: gray;">Phone</div>
                                                        <h3 style="padding: 0; margin: 0; font-weight: 600; overflow-wrap: break-word;">
                                                            <a href="tel:440-878-3000" target="_blank" style="color: black; display: inline-block;" id="location_phone"><?php echo $phone; //var_dump($phone) ?></a>
                                                        </h3>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td height="28" style="height: 28px;">&nbsp;</td>
                                                </tr>
                                                <tr>
                                                    <td align="left" style="max-width: 480px;" class="mobile-col-2">
                                                        <div style="font-size: 12px; color: gray;">Fax</div>
                                                        <h3 style="padding: 0; margin: 0; font-weight: 600; overflow-wrap: break-word;" id="location_fax">-</h3>
                                                    </td>
                                                </tr>
                                            </tbody></table>
                                        </td>
                                    </tr>
                                </tbody></table>
                            </td>
                        </tr>
                    </tbody></table>
                </td>
            </tr>
        </tbody></table>
    </td>
</tr>
</table>