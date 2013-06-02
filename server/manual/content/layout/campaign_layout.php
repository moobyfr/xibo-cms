<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<?php include('../../template.php'); ?>
<html>
<head>
  	<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
  	<title><?php echo PRODUCT_NAME; ?> Documentation</title>
  	<link rel="stylesheet" type="text/css" href="../../css/doc.css">
	<meta name="keywords" content="digital signage, signage, narrow-casting, <?php echo PRODUCT_NAME; ?>, open source, agpl" />
	<meta name="description" content="<?php echo PRODUCT_NAME; ?> is an open source digital signage solution. It supports all main media types and can be interfaced to other sources of data using CSV, Databases or RSS." />
  	<link href="img/favicon.ico" rel="shortcut icon">
  	<!-- Javascript Libraries -->
  	<script type="text/javascript" src="lib/jquery.pack.js"></script>
  	<script type="text/javascript" src="lib/jquery.dimensions.pack.js"></script>
  	<script type="text/javascript" src="lib/jquery.ifixpng.js"></script>
</head>

<body>
	<h1>Campaign Layout</h1>

 	<p><?php echo PRODUCT_NAME; ?> supports scheduling more than one layout at once. Say you have two layouts, each that last a total of 40 seconds.
  	If you wanted them to show in sequence between 10:00 and 11:00am, you would schedule both layouts to run from 10:00am to 11:00am on the 
  	same display. The client will automatically switch between the two layouts every 40 seconds between those times.</p>
  
  	<p>In <?php echo PRODUCT_NAME; ?>, this is done using Campaign that comprises multiple Layouts.</p>
  	<p>Note:<br />
    At the moment you cannot control the playing order of those layouts in Campaign.<br />
    The Campaign cannot be assigned as Default Layout for a Display, excpet to use it during Display schedule.</p>

  	<h2>Add Campagin Layout</h2>
  	<ul>
  	<li>From Navigation Menu, click "Design > Campaign"
    <p><img alt="Campaigns_Table" src="Ss_layout_campaign.png"
    style="display: block; text-align: center; margin-left: auto; margin-right: auto"
    width="632" height="172"></p></li> 
    
  	<li>Click "Add Campaign"</li>
	<li>An "Add Campaign" form will appear
   	<p><img alt="Campaigns_Add" src="Ss_layout_campaign_add.png"
    style="display: block; text-align: center; margin-left: auto; margin-right: auto"
    width="358" height="181"></p>
   	</li> 
	<li>Fill in the name for the Campaign</li> 
	<li>Click "Save"</li>
</ul>

	<h2>Campaign Layout Assign</h2>
	<p>Once you have saved the Campaign; click on "Layouts" button and you will be taken to a new form.</p>

	<p><img alt="Layout_Champaign" src="Ss_layout_campaign_layout.png"
	style="display: block; text-align: center; margin-left: auto; margin-right: auto"
	width="408" height="287"></p>

	<ul>
		<li>To move between Layouts from Available to Assigned Column, double click the appropriate Layouts under the source column.</li>
		<li>Click "save" once you have all the Campaign Layouts added.</li>
	</ul>

	<?php include('../../template/footer.php'); ?>
</body>
</html>