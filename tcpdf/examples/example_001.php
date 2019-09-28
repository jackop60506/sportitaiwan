<?php
//============================================================+
// File name   : example_001.php
// Begin       : 2008-03-04
// Last Update : 2013-05-14
//
// Description : Example 001 for TCPDF class
//               Default Header and Footer
//
// Author: Nicola Asuni
//
// (c) Copyright:
//               Nicola Asuni
//               Tecnick.com LTD
//               www.tecnick.com
//               info@tecnick.com
//============================================================+

/**
 * Creates an example PDF TEST document using TCPDF
 * @package com.tecnick.tcpdf
 * @abstract TCPDF - Example: Default Header and Footer
 * @author Nicola Asuni
 * @since 2008-03-04
 */

// Include the main TCPDF library (search for installation path).
require_once('tcpdf_include.php');

// create new PDF document
$pdf = new TCPDF(PDF_PAGE_ORIENTATION, PDF_UNIT, PDF_PAGE_FORMAT, true, 'UTF-8', false);

// set document information
//$pdf->SetCreator(PDF_CREATOR);
//$pdf->SetAuthor('Nicola Asuni');
//$pdf->SetTitle('TCPDF Example 001');
//$pdf->SetSubject('TCPDF Tutorial');
//$pdf->SetKeywords('TCPDF, PDF, example, test, guide');

// set default header data
//$pdf->SetHeaderData(PDF_HEADER_LOGO, PDF_HEADER_LOGO_WIDTH, PDF_HEADER_TITLE.' 001', PDF_HEADER_STRING, array(0,64,255), array(0,64,128));
//$pdf->setFooterData(array(0,64,0), array(0,64,128));

// set header and footer fonts
//$pdf->setHeaderFont(Array(PDF_FONT_NAME_MAIN, '', PDF_FONT_SIZE_MAIN));
//$pdf->setFooterFont(Array(PDF_FONT_NAME_DATA, '', PDF_FONT_SIZE_DATA));

// set default monospaced font
$pdf->SetDefaultMonospacedFont(PDF_FONT_MONOSPACED);

// set margins
$pdf->SetMargins(PDF_MARGIN_LEFT, PDF_MARGIN_TOP, PDF_MARGIN_RIGHT);
$pdf->SetHeaderMargin(PDF_MARGIN_HEADER);
$pdf->SetFooterMargin(PDF_MARGIN_FOOTER);

// set auto page breaks
$pdf->SetAutoPageBreak(TRUE, PDF_MARGIN_BOTTOM);

// set image scale factor
$pdf->setImageScale(PDF_IMAGE_SCALE_RATIO);

// set some language-dependent strings (optional)
if (@file_exists(dirname(__FILE__).'/lang/eng.php')) {
	require_once(dirname(__FILE__).'/lang/eng.php');
	$pdf->setLanguageArray($l);
}

// ---------------------------------------------------------

// set default font subsetting mode
$pdf->setFontSubsetting(true);

// Set font
// dejavusans is a UTF-8 Unicode font, if you only need to
// print standard ASCII chars, you can use core fonts like
// helvetica or times to reduce file size.
//$pdf->SetFont('dejavusans', '', 14, '', true);
$pdf->SetFont('msungstdlight','',16);
// Add a page
// This method has several options, check the source code documentation for more information.
$pdf->AddPage();

// set text shadow effect
$pdf->setTextShadow(array('enabled'=>true, 'depth_w'=>0.2, 'depth_h'=>0.2, 'color'=>array(196,196,196), 'opacity'=>1, 'blend_mode'=>'Normal'));

// Set some content to print
$html = <<<EOD
			<!DOCTYPE html>
<html>
	<head>
		<meta http-equiv='Content-Type' Content='text/html' charset='utf-8'/>
		<script src='jquery.min.js'></script>
		<style>
			body,th,td{
				font-family:微軟正黑體;
			}
				table,td,th{
					border:1px black solid;
					word-break: break-all;
					text-align:center;
				}
				.table1{
					width:600px;
					align:center;
				}
				table{
					width:100%;
					align:center;
				}
				.third_comment{
					font-family:新細明體;
					width:600px;
					word-wrap: break-word;
				}	
				.thirdpart{
					width:600px;
				}
		</style>
	</head>
	<body>
			
	<div class='table1' >
	<b>105年運動i臺灣計畫
專案一、運動文化扎根專案 訪視紀錄表
</b>
	<div class='firstpart'>
		訪視日期 : 民國 
						年
						
						 月
						
						 日
						 
			<div>
				訪視縣市:
										<div/>
				辦理地點:<div/>
				主辦單位:<div/>
				活動全名：<div/>
				本次活動是否辦理保險： 
			</div>
			
	</div>
	
	
		<b>壹、活動執行情形(必填)：若勾有「不符」者，請至質性評述敘明實際執行情形</b>
		<table>
			<tr>
				<th colspan='3' width='20%'>
					項目
				</th>
				
				<th width='50%'>
					內容
				</th>
				<th width='15%'>
					符合
				</th>
				<th width='15%'>
					不符
				</th>
			</tr>
				<tr>
					<td rowspan='3' >
						<b>共同項目</b>
					</td>
					<td  colspan='2'>
						1-1 活動核實性(必填)
					</td>
					<td>
						活動依原提報計畫日期或地點辦理，或能於活動前辦理日期或地點變更備查作業。
					</td>
					
				</tr>
				<tr>
					<td colspan='2'>
						1-2 行銷宣傳性(必填)
					</td>
					<td>
						活動現場可辨識屬體育署「運動i臺灣」年度計畫。
					</td>
					
				</tr>
				<tr>
					<td colspan='2'>
						1-3 活動效益性(必填)
					</td>
					<td  >
						活動「參與對象」或「辦理方式」與原核定專案活動一致。
					</td>
					
				</tr>
				</table>
				</body>
				</html>
EOD;

// Print text using writeHTMLCell()
$pdf->writeHTMLCell(0, 0, '', '', $html, 0, 1, 0, true, '', true);

// ---------------------------------------------------------

// Close and output PDF document
// This method has several options, check the source code documentation for more information.
$pdf->Output('D:/xamp/webdav/mcusport/tcpdf/examples/example_001.pdf', 'F');

//============================================================+
// END OF FILE
//============================================================+
