<?php	

	//referenciar o DomPDF com namespace
	use Dompdf\Dompdf;

	// include autoloader
	require_once("dompdf/autoload.inc.php");

	//Criando a Instancia
	$dompdf = new DOMPDF();

	// Carrega seu HTML
	$dompdf->load_html("
	
<html><head><meta content='text/html; charset=UTF-8' http-equiv='content-type'><style type='text/css'>@import url(https://themes.googleusercontent.com/fonts/css?kit=3qINvnjb346LubKDfLRn69t6G6Z1RrRfgULZ1AHo7mPOfsfM6rvuuu7h1pY3r_-A);ul.lst-kix_q43nwmkvrt8-7{list-style-type:none}ul.lst-kix_q43nwmkvrt8-6{list-style-type:none}ul.lst-kix_q43nwmkvrt8-8{list-style-type:none}ul.lst-kix_q43nwmkvrt8-3{list-style-type:none}ul.lst-kix_q43nwmkvrt8-2{list-style-type:none}ul.lst-kix_q43nwmkvrt8-5{list-style-type:none}ul.lst-kix_q43nwmkvrt8-4{list-style-type:none}ul.lst-kix_71cy10c6bo5c-8{list-style-type:none}ul.lst-kix_71cy10c6bo5c-7{list-style-type:none}ul.lst-kix_71cy10c6bo5c-6{list-style-type:none}ul.lst-kix_71cy10c6bo5c-5{list-style-type:none}ul.lst-kix_71cy10c6bo5c-4{list-style-type:none}ul.lst-kix_71cy10c6bo5c-3{list-style-type:none}ul.lst-kix_71cy10c6bo5c-2{list-style-type:none}.lst-kix_q43nwmkvrt8-0>li:before{content:'\0025cf   '}.lst-kix_q43nwmkvrt8-1>li:before{content:'\0025cb   '}ul.lst-kix_71cy10c6bo5c-1{list-style-type:none}ul.lst-kix_71cy10c6bo5c-0{list-style-type:none}.lst-kix_q43nwmkvrt8-2>li:before{content:'\0025a0   '}.lst-kix_q43nwmkvrt8-4>li:before{content:'\0025cb   '}ul.lst-kix_dpieomdpoi58-0{list-style-type:none}ul.lst-kix_dpieomdpoi58-1{list-style-type:none}.lst-kix_q43nwmkvrt8-3>li:before{content:'\0025cf   '}ul.lst-kix_dpieomdpoi58-4{list-style-type:none}.lst-kix_q43nwmkvrt8-8>li:before{content:'\0025a0   '}ul.lst-kix_dpieomdpoi58-5{list-style-type:none}ul.lst-kix_dpieomdpoi58-2{list-style-type:none}ul.lst-kix_dpieomdpoi58-3{list-style-type:none}ul.lst-kix_dpieomdpoi58-8{list-style-type:none}.lst-kix_q43nwmkvrt8-6>li:before{content:'\0025cf   '}ul.lst-kix_dpieomdpoi58-6{list-style-type:none}.lst-kix_q43nwmkvrt8-5>li:before{content:'\0025a0   '}ul.lst-kix_dpieomdpoi58-7{list-style-type:none}.lst-kix_dpieomdpoi58-1>li:before{content:'\0025cb   '}.lst-kix_dpieomdpoi58-2>li:before{content:'\0025a0   '}.lst-kix_q43nwmkvrt8-7>li:before{content:'\0025cb   '}.lst-kix_dpieomdpoi58-4>li:before{content:'\0025cb   '}.lst-kix_dpieomdpoi58-3>li:before{content:'\0025cf   '}.lst-kix_dpieomdpoi58-5>li:before{content:'\0025a0   '}.lst-kix_dpieomdpoi58-0>li:before{content:'\0025cf   '}.lst-kix_dpieomdpoi58-8>li:before{content:'\0025a0   '}.lst-kix_dpieomdpoi58-7>li:before{content:'\0025cb   '}.lst-kix_dpieomdpoi58-6>li:before{content:'\0025cf   '}.lst-kix_71cy10c6bo5c-5>li:before{content:'\0025a0   '}.lst-kix_71cy10c6bo5c-6>li:before{content:'\0025cf   '}.lst-kix_71cy10c6bo5c-7>li:before{content:'\0025cb   '}.lst-kix_71cy10c6bo5c-8>li:before{content:'\0025a0   '}.lst-kix_71cy10c6bo5c-3>li:before{content:'\0025cf   '}.lst-kix_71cy10c6bo5c-4>li:before{content:'\0025cb   '}.lst-kix_71cy10c6bo5c-2>li:before{content:'\0025a0   '}.lst-kix_71cy10c6bo5c-1>li:before{content:'\0025cb   '}ul.lst-kix_q43nwmkvrt8-1{list-style-type:none}ul.lst-kix_q43nwmkvrt8-0{list-style-type:none}.lst-kix_71cy10c6bo5c-0>li:before{content:'\0025cf   '}ol{margin:0;padding:0}table td,table th{padding:0}.c2{color:#666666;font-weight:400;text-decoration:none;vertical-align:baseline;font-size:11pt;font-family:'Proxima Nova';font-style:normal}.c10{color:#00ab44;font-weight:700;text-decoration:none;vertical-align:baseline;font-size:14pt;font-family:'Proxima Nova';font-style:normal}.c4{color:#000000;font-weight:400;text-decoration:none;vertical-align:baseline;font-size:11pt;font-family:'Proxima Nova';font-style:normal}.c12{padding-top:4pt;padding-bottom:0pt;line-height:1.0;orphans:2;widows:2;text-align:left;height:11pt}.c24{padding-top:20pt;padding-bottom:0pt;line-height:1.2;orphans:2;widows:2;text-align:left;height:11pt}.c8{padding-top:6pt;padding-bottom:0pt;line-height:1.0;page-break-after:avoid;orphans:2;widows:2;text-align:left}.c3{color:#666666;font-weight:400;text-decoration:none;vertical-align:baseline;font-size:10pt;font-family:'Proxima Nova';font-style:normal}.c7{padding-top:4pt;padding-bottom:0pt;line-height:1.2;orphans:2;widows:2;text-align:left}.c6{padding-top:0pt;padding-bottom:0pt;line-height:1.0;orphans:2;widows:2;text-align:left}.c9{padding-top:24pt;padding-bottom:10pt;line-height:1.0;orphans:2;widows:2;text-align:left}.c21{padding-top:10pt;padding-bottom:0pt;line-height:1.0;orphans:2;widows:2;text-align:left}.c19{padding-top:4pt;padding-bottom:0pt;line-height:1.0;orphans:2;widows:2;text-align:left}.c20{color:#00ab44;font-weight:400;font-size:18pt;font-family:'Proxima Nova';font-style:normal}.c16{color:#000000;font-weight:400;font-size:10pt;font-family:'Proxima Nova';font-style:normal}.c25{color:#53bb84;font-weight:700;font-size:14pt;font-family:'Proxima Nova';font-style:normal}.c18{color:#353744;font-weight:400;font-size:30pt;font-family:'Proxima Nova';font-style:normal}.c1{font-size:12pt;font-family:'Proxima Nova';font-style:italic;color:#666666;font-weight:400}.c17{font-size:12pt;font-family:'Proxima Nova';color:#353744;font-weight:400}.c0{background-color:#ffffff;max-width:378pt;padding:36pt 162pt 36pt 72pt}.c15{font-style:italic;color:#666666;font-weight:400}.c13{margin-left:36pt;padding-left:0pt}.c5{color:#666666;font-size:10pt}.c14{padding:0;margin:0}.c11{text-decoration:none;vertical-align:baseline}.c23{color:#666666}.c22{page-break-after:avoid}.title{padding-top:6pt;color:#353744;font-size:30pt;padding-bottom:0pt;font-family:'Proxima Nova';line-height:1.0;page-break-after:avoid;orphans:2;widows:2;text-align:left}.subtitle{padding-top:0pt;color:#00ab44;font-size:18pt;padding-bottom:0pt;font-family:'Proxima Nova';line-height:1.0;page-break-after:avoid;orphans:2;widows:2;text-align:left}li{color:#000000;font-size:11pt;font-family:'Proxima Nova'}p{margin:0;color:#000000;font-size:11pt;font-family:'Proxima Nova'}h1{padding-top:24pt;color:#00ab44;font-weight:700;font-size:14pt;padding-bottom:10pt;font-family:'Proxima Nova';line-height:1.0;page-break-after:avoid;orphans:2;widows:2;text-align:left}h2{padding-top:10pt;color:#353744;font-weight:700;font-size:12pt;padding-bottom:0pt;font-family:'Proxima Nova';line-height:1.0;page-break-after:avoid;orphans:2;widows:2;text-align:left}h3{padding-top:10pt;color:#353744;font-weight:700;font-size:11pt;padding-bottom:0pt;font-family:'Proxima Nova';line-height:1.0;page-break-after:avoid;orphans:2;widows:2;text-align:left}h4{padding-top:8pt;-webkit-text-decoration-skip:none;color:#666666;text-decoration:underline;font-size:11pt;padding-bottom:0pt;line-height:1.2;page-break-after:avoid;text-decoration-skip-ink:none;font-family:'Trebuchet MS';orphans:2;widows:2;text-align:left}h5{padding-top:8pt;color:#666666;font-size:11pt;padding-bottom:0pt;font-family:'Trebuchet MS';line-height:1.2;page-break-after:avoid;orphans:2;widows:2;text-align:left}h6{padding-top:8pt;color:#666666;font-size:11pt;padding-bottom:0pt;font-family:'Trebuchet MS';line-height:1.2;page-break-after:avoid;font-style:italic;orphans:2;widows:2;text-align:left}</style></head><body class='c0'><div><p class='c24'><span class='c4'></span></p><p class='c12'><span class='c4'></span></p></div><p class='c8 title' id='h.5x0d5h95i329'><span class='c11 c18'>Seu nome</span></p><p class='c6 subtitle' id='h.sbziogryzzql'><span>Designer industrial</span></p><p class='c6'><span class='c2'>Rua, 123</span></p><p class='c6'><span class='c23'>Cidade, Estado, 00000-000</span></p><p class='c6'><span class='c23'>(55) 000-0000</span></p><p class='c6'><span class='c2'>no_reply@example.com</span></p><h1 class='c9 c22' id='h.inx73jfg7qti'><span>COMPET&Ecirc;NCIAS</span></h1><p class='c7'><span>Digite seu texto aqui Digite seu texto aqui Digite seu texto aqui Digite seu texto aqui Digite seu texto aqui Digite seu texto aqui.</span></p><h1 class='c9' id='h.5sh58lh512k2'><span>EXPERI&Ecirc;NCIA</span></h1><h2 class='c21' id='h.mu43qcboozqe'><span>Nome da empresa</span><span class='c17'>, &nbsp;Loca</span><span>l</span><span class='c1'>&nbsp;- </span><span class='c15'>Cargo</span></h2><p class='c19'><span class='c5'>DESDE DE M&Ecirc;S DE 20XX</span></p><ul class='c14 lst-kix_q43nwmkvrt8-0 start'><li class='c7 c13'><span>Digite seu texto aqui.</span></li><li class='c7 c13'><span>Digite seu texto aqui.</span></li></ul><h2 class='c21' id='h.25ksbxwbal7a'><span>Nome da empresa</span><span class='c17'>, Loca</span><span>l</span><span class='c1'>&nbsp;- </span><span class='c15'>Cargo</span></h2><p class='c19'><span class='c5'>M&Ecirc;S DE 20XX - M&Ecirc;S DE 20XX</span></p><ul class='c14 lst-kix_71cy10c6bo5c-0 start'><li class='c7 c13'><span>Digite seu texto aqui.</span><span class='c4'>&nbsp;</span></li><li class='c7 c13'><span>Digite seu texto aqui.</span><span class='c4'>&nbsp;</span></li></ul><h2 class='c21' id='h.qttiqnuhschn'><span>Nome da empresa</span><span class='c17'>, Loca</span><span>l</span><span class='c1'>&nbsp;- </span><span class='c15'>Cargo</span></h2><p class='c19'><span class='c5'>M&Ecirc;S DE 20XX - M&Ecirc;S DE 20XX</span></p><ul class='c14 lst-kix_dpieomdpoi58-0 start'><li class='c7 c13'><span>Digite seu texto aqui.</span><span class='c4'>&nbsp;</span></li><li class='c7 c13'><span>Digite seu texto aqui.</span><span class='c4'>&nbsp;</span></li></ul><h1 class='c9' id='h.pwnp1k6vsbh1'><span class='c10'>EDUCATION</span></h1><h2 class='c21' id='h.jpv9v4b642w5'><span>Nome da escola</span><span class='c17'>, Loca</span><span>l</span><span class='c17'>&nbsp;</span><span class='c1'>- </span><span class='c15'>Escolaridade</span></h2><p class='c19'><span class='c5'>M&Ecirc;S DE 20XX - M&Ecirc;S DE 20XX</span></p><p class='c7'><span>Digite seu texto aqui Digite seu texto aqui Digite seu texto aqui Digite seu texto aqui Digite seu texto aqui Digite seu texto aqui.</span></p><h1 class='c9' id='h.3hy8rkwzatey'><span>PR&Ecirc;MIOS</span></h1><p class='c7'><span class='c4'>Digite seu texto aqui Digite seu texto aqui.</span></p><p class='c7'><span>Digite seu texto aqui.</span></p></body></html>
	");
	//Define o tipo de papel de impressão (opcional)
	//tamanho (A4, A3, A2, etc)
	//oritenação do papel:'portrait' (em pé) ou 'landscape' (deitado)
	$dompdf->setPaper('A4', 'portrait');

	//Renderizar o html
	$dompdf->render();

	//Exibibir a página
	$dompdf->stream(
		"relatorio_celke.pdf", 
		array(
			"Attachment" => false //Para realizar o download somente alterar para true
		)
	);
?>