<?php

$data	=	'breeze_2f196246a1b62c00b2398b15d3d1e6c8.css
breeze_0dd8b5d87cab4aa1b2832b8663e1d3a7.css
breeze_044a85b2d889e24e1c1fe31458a481a9.css
breeze_6aa2818e56aa8565e26694b134e88e24.css
breeze_137708efbfc831287a0c9bc006bd22e8.css
breeze_133e5e4c19ef835c4da1b08c6b1d0784.css
breeze_bf8dabb3a72cf662912e0e0271883311.css
breeze_b768e00a6e3196f03448986573f9ae01.css
breeze_194b0878fec031fa7fa42a33d9101768.css
breeze_6e2835866bf2f1d589607cf816fa5355.css
breeze_d6ce54edb63edb794d7e30bd265fd909.css
breeze_7a80f684901a473f2883f0a5779d0a38.css
breeze_47fb986a42c957fd7b15054dc76d70d3.css
breeze_eca73dac46709e612033bc30c8d8314b.css
breeze_1a17525775144497f5f4dc11b0f0b1ea.css
breeze_e3e5ed6d58573ae5532cccc1af076c30.css
breeze_ae826a829601d3ec57f30f654dd47e94.css
breeze_f69a0bc38e39dd03eb82dd12f4515be1.css
breeze_35ec160ec8906ded96d58cc6795f0fc5.css
breeze_262fc0df1b8856334b5ebfa43c8fe58e.css
breeze_33aed5b3372bb268680fefbc5c8c7b64.css
breeze_bec9395cd5838609758d52009a1b6c5c.css
breeze_1c0eb7361e018f7c8b117271477d1f99.css
breeze_b697896eccb0e41a166542e9217f6af4.css
breeze_efad30238e3e8f466cb77882027712a1.css
breeze_ded105867a3f248c258e5298cfb50e06.css
breeze_58f331f680e41b510674eeb0c24af913.css
breeze_dbce1795e39c3346cc37f5a5b3f17122.css
breeze_b4fe1ab1ffcdb2814c1d74791909b99d.css
breeze_ac159678963cd27c45d272e078a7d810.css
breeze_e733d9f3143b04689e1ab778155555fa.css
breeze_f487f519525cf4083e25ac1de8c5840b.css
breeze_2a48a395b981ead5c812305efdfcda82.css
breeze_01b9b061137a19ad4faf8723bff9801a.css
breeze_c58d925efd61a6866261f4fdf0a3fb5d.css
breeze_f3ac51d0b088045eb89b6e0caa11784c.css
breeze_b6435a265fac45e2bde50b4cb956489f.css
breeze_4363a494d607f5d0691b9ba67c683ab6.css
breeze_9c2e8aae10bfb1590046434d18e798df.css
breeze_bc848dd616a3328a97346cba95278a83.css
breeze_a55e8e06b6c87a065e3b4dd75874bc75.css
breeze_9aea8b2877203cafcefc7df6afcebd6a.css
breeze_c1b3f2b5eb446f7f792095e87d336433.css
breeze_a421ebead204ffeb7a4ba69542fe5213.css
breeze_a1baf2c23bba553fce4ad3c47ad7b0dc.css
breeze_01bcd3e413863d54fb1da5b8e7abdc8d.css
breeze_12a4b9c2cc583396a25dfcad483dc23f.css
breeze_abbecbe5a5f856bff9111d2e21d5b2fc.css
breeze_759a453ca3e67fb8641db56249765e3b.css
breeze_84d8aabcd04b29f265ad1e5ba7862bcc.css
breeze_a9f081e753ff3463671fbb4adca8b8c8.css
breeze_a1261bdd4d184fa30534f991f8dea22c.css
breeze_f44840d26cd59c6ab2d9c4030c83de3b.css
breeze_0276edd51b43a70fc78942fff24c18de.css
breeze_7a6a46d3b2937347911693c818cf7db1.css
breeze_f07a03c527c267b554704022cc85b64c.css
breeze_b9620757732dc08973a9843a0a0f4e9f.css
breeze_42185a1d7718551611cf78d2bffdebca.css
breeze_9b286159fc80d5a645457e5562366223.css
breeze_2949f797ddc0d22f7279f803f692c8cb.css
breeze_d08891d1f065555f082c6d8b5490aba1.css
breeze_b8f869a204e3f858f4d53765f2ad1026.css
breeze_ede163836c03e1303c37ddc889c7de1f.css';

$dts	=	explode("\n",	$data);

$compile	=	'';
foreach	($dts	as	$dtt)	{
	$compile	.=	"\n"	.	file_get_contents('H:\doni\sourcetree\sbyad\wp-content\cache\breeze-minification\css\\'	.	$dtt);
}

file_put_contents("this_breeze.css",	$compile);