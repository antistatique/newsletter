<?php

$header = <<<HTML

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <title>Antistatique</title>
  <meta name="color-scheme" content="light">
  <style type="text/css">
	
	/* Client-specific Styles */
	#outlook a {
	  padding: 0;
	}

	/* Force Outlook to provide a "view in browser" menu link. */
	body {
	  width: 100% !important;
	  -webkit-text-size-adjust: 100%;
	  -ms-text-size-adjust: 100%;
	  margin: 0;
	  padding: 0;
	  font: 1em/1.4em Helvetica, sans-serif;
	  color: #777777;
	}

	/* Prevent Webkit and Windows Mobile platforms from changing default font sizes.*/
	.ExternalClass {
	  width: 100%;
	}

	/* Force Hotmail to display emails at full width */
	.ExternalClass,
	.ExternalClass p,
	.ExternalClass span,
	.ExternalClass font,
	.ExternalClass td,
	.ExternalClass div {
	  line-height: 100%;
	}

	/* Forces Hotmail to display normal line spacing.  More on that: http://www.emailonacid.com/forum/viewthread/43/ */
	#backgroundTable {
	  margin: 0;
	  padding: 0;
	  width: 100% !important;
	  line-height: 100% !important;
	}

	body, table, td, a { -webkit-text-size-adjust: 100%; -ms-text-size-adjust: 100%; }
	table, td { mso-table-lspace: 0pt; mso-table-rspace: 0pt; }
	img { -ms-interpolation-mode: bicubic; }
	
	/* RESET STYLES */
	img { border: 0; height: auto; line-height: 100%; outline: none; text-decoration: none; }
	table { border-collapse: collapse !important; }
	
	/* iOS BLUE LINKS */
	a[x-apple-data-detectors] {
		color: inherit !important;
		text-decoration: none !important;
		font-size: inherit !important;
		font-family: inherit !important;
		font-weight: inherit !important;
		line-height: inherit !important;
	}
	
	/* GMAIL BLUE LINKS */
	u + #body a {
		color: inherit;
		text-decoration: none;
		font-size: inherit;
		font-family: inherit;
		font-weight: inherit;
		line-height: inherit;
	}
	
	/* SAMSUNG MAIL BLUE LINKS */
	#MessageViewBody a {
		color: inherit;
		text-decoration: none;
		font-size: inherit;
		font-family: inherit;
		font-weight: inherit;
		line-height: inherit;
	}


	/* End reset */
	/* Some sensible defaults for images 
Bring inline: Yes. */
	img {
	  outline: none;
	  text-decoration: none;
	  -ms-interpolation-mode: bicubic;
	}

	a img {
	  border: none;
	}

	.image_fix {
	  display: block;
	}

	/* Yahoo paragraph fix
Bring inline: Yes. */
	p {
	  margin: 0 0 1em 0;
	}

	/* Hotmail header color reset
Bring inline: Yes. */
	h1,
	h2,
	h3,
	h4,
	h5,
	h6 {
	  color: black !important;
	}

	h1 a,
	h2 a,
	h3 a,
	h4 a,
	h5 a,
	h6 a {
	  color: blue !important;
	}

	h1 a:active,
	h2 a:active,
	h3 a:active,
	h4 a:active,
	h5 a:active,
	h6 a:active {
	  color: red !important;
	  /* Preferably not the same color as the normal header link color.  There is limited support for psuedo classes in email clients, this was added just for good measure. */
	}

	h1 a:visited,
	h2 a:visited,
	h3 a:visited,
	h4 a:visited,
	h5 a:visited,
	h6 a:visited {
	  color: purple !important;
	  /* Preferably not the same color as the normal header link color. There is limited support for psuedo classes in email clients, this was added just for good measure. */
	}

	/* Outlook 07, 10 Padding issue fix
Bring inline: No.*/
	table td {
	  border-collapse: collapse;
	}

	/* Remove spacing around Outlook 07, 10 tables
Bring inline: Yes */
	table {
	  border-collapse: collapse;
	  mso-table-lspace: 0pt;
	  mso-table-rspace: 0pt;
	}



	/* Antistatique specific

#FF0099 Magenta
#FFF618 Limonade
#570039 Balsamique
#FF7495 Flamant rose
#FFEFF0 White rose
#000032 Minuit
#4D4D70 Sensei
#000032 Ninja

 */

	a {
	  color: #000032;
	}


	.cta_link {
	  border-bottom: 1px solid #FF00AA;
	  padding-bottom: 1px;
	  text-decoration: none;
	  transition: all 0.1s ease;
	  color: #FF00AA;
	}

	.cta_link:hover {
	  border-bottom: 1px solid #D1007E;
	  color: #D1007E;
	}

	.cta_button {
	  text-decoration: none;
	  font-weight: normal;
	  border: 1px solid #ff0099;
	  padding: 0.6em 1.2em;
	  margin: 0px;
	  border-radius: 2em;
	  background-size: 200% 200%;
	  background-image:
		linear-gradient(to top, #ff0099 50%, transparent 50%);
	  transition: background-position 500ms, color 500ms ease, border-color 500ms ease;
	}

	.cta_button_full {
	  background-color: #ff0099;
	  color: #ffffff;
	}

	.cta_button:hover {
	  color: #ffffff !important;
	  background-image:
		linear-gradient(to top, #ff0099 51%, transparent 50%);
	  background-position: 0 100%;
	  transition: background-position 500ms, color 500ms ease, border-color 500ms ease;
	}

	.cta_button_full:hover {
	  color: #FFFFFF !important;
	  background-image:
	  linear-gradient(to top, #D1007E 51%, transparent 50%);
	  border: 1px solid #D1007E;
	}

	  
	

	@media only screen and (max-width: 600px) {

	  /* Part one of controlling phone number linking for mobile. */
	  a[href^="tel"],
	  a[href^="sms"] {
		text-decoration: default;
		pointer-events: auto;
		cursor: default;
	  }

	  img.full-image {
		width: 100%;
		height: auto;
	  }

	  table.full-table {
		width: 95% !important;
		margin: 0 auto;
		float: none;
	  }

	  table.full-table table.full-table {
		width: 100% !important;
		margin: 0 auto;
		float: none;
	  }


	  
	  *.title_32{
		font-size:22px!important;
		line-height: 26px!important;
	  }
	  *.title_22{
		font-size:22px!important;
		line-height: 26px!important;
	  }
	  *.text_20{
		font-size:20px!important;
	  }
	  *.text_16{
		font-size:16px!important;
	  }
	  
	}

	
  </style>
  
</head>

 <body style="margin: 0 !important; padding: 0 !important;">

	<!-- This ghost table is used to constrain the width in Outlook. The role attribute is set to presentation to prevent it from being read by screenreaders. -->
 <!--[if (gte mso 9)|(IE)]>
 <table cellspacing="0" cellpadding="0" border="0" width="600" align="center" role="presentation"><tr><td>
 <![endif]-->  
 
 <!-- HEADER -->
   <table cellpadding="0" cellspacing="0" border="0" width="100%" align="center">
	 <tr>
	   <td bgcolor="#FFEFF0" height="60" colspan="3"><img src="px.gif" alt="spacer" height="60"></td>
	 </tr>
	 <tr>
	   <td bgcolor="#FFEFF0" height="180"><img src="px.gif" alt="spacer" height="8"></td>
	   <td bgcolor="#FFFFFF" rowspan="2" width="600">
		 
		   <table cellpadding="0" cellspacing="0" border="0" width="100%" align="center" style="">
			 <tr>
			   <td bgcolor="#FFEFF0" colspan="5" style="line-height:1px;font-size:1px;" valign="bottom">
				 <a href="https://antistatique.net"  style="line-height:1px;font-size:1px;">
				   <img src="2025_header_top.png" alt="Antistatique - notre logo en magenta" width="100%" class="full-image" />
				 </a>
			   </td>
			 </tr>
			 <tr>
			   <td bgcolor="#FF0099" rowspan="2" style="line-height:1px;font-size:1px;">
				 <img src="px.gif" alt="spacer" width="4">
			   </td>
			   <td rowspan="2" style="line-height:1px;font-size:1px;">
				 <img src="px.gif" alt="spacer" width="20">
			   </td>
			   <td align="center" style="line-height:1px;font-size:1px;" height="20" width="100%">
				 <img src="px.gif" alt="spacer" height="20">
			   </td>
			   <td rowspan="2" style="line-height:1px;font-size:1px;">
				 <img src="px.gif" alt="spacer" width="20">
			   </td>
			   <td bgcolor="#FF0099" rowspan="2" style="line-height:1px;font-size:1px;">
				 <img src="px.gif" alt="spacer" width="4">
			   </td>
			 </tr>
			 <tr>
			   <td>
				 <span style="font-family:'Helvetica Neue',Helvetica,Arial,sans-serif;font-size:18px;font-weight: 400;color:#000032;line-height: 28px;" class="text_18">
						   <singleline label="header_bonjour">            
							 Hello !
						   </singleline>
						 </span><br/>
				 <span style="font-family:'San Francisco Display','Helvetica Neue',Helvetica,Arial,sans-serif;font-size:32px;line-height: 36px;font-weight: 500;color:#000032;" class="title_32">
				   <singleline label="header_texte">            
		 Cette semaine, on vous parle de <span style="color:#ff00aa;">➊</span> sites low tech, <span style="color:#ff00aa;">➋</span> de SEO, <span style="color:#ff00aa;">➌</span> et du traitement de la campagne américaine dans les médias digitaux.
				   </singleline>
				 </span>
			   </td>
			 </tr>
			 <tr>
			   <td colspan="2" rowspan="2" width="24" height="24" style="line-height:1px;font-size:1px;">
				   <img src="2025_header_bottom_left.png" alt="border" width="24" height="24" style="display: block;"/>
				</td>
				 <td style="line-height:1px;font-size:1px;">
				   <img src="px.gif" alt="spacer" width="20">
				 </td>
			   <td colspan="2" rowspan="2" width="24" height="24" style="line-height:1px;font-size:1px;">
				   <img src="2025_header_bottom_right.png" alt="border" width="24" height="24" style="display: block;"/>
				</td>
			 </tr>
			 <tr>
			   <td  bgcolor="#FF0099" style="line-height:1px;font-size:1px;" height="4">
				 <img src="px.gif" alt="spacer" width="4" height="4">
			   </td>
			 </tr>
		   </table>
		 
	   </td>
	   <td bgcolor="#FFEFF0" ><img src="px.gif" alt="spacer" height="8"></td>
	 </tr>
	 <tr height="36">
	   <td bgcolor="#FFFFFF" height="36"><img src="px.gif" alt="spacer" height="8"></td>
	   <td bgcolor="#FFFFFF" height="36"><img src="px.gif" alt="spacer" height="8"></td>
	 </tr>
   </table>    
 
				<!-- @@@ ALL CONTENT @@@ -->

HTML;