<?php
$cidade = array('São Vicente' => array('Fundação' => 1532,
								       'Cores' => 'Branco, Vermelho, Preto e Amarelo',
									   'Prefeito' => 'Kayo Amado',
									   'QtdBairros' => 30,
									   'Shopping' => 'Brisamar',
									   'População' => 368.355,
									   'Áreas' => 'Insular e Continental',
									   'Clima' => 'Tropical'),
				'Praia Grande'=> array('Fundação' => 1967,
									   'Cores' => 'Branco, Vermelho e Preto',
									   'Prefeita' =>'Raquel Chini',
									   'QtdBairros' => 37,
									   'Shopping' => 'Litoral Plaza',
									   'População' => 330.845,
									   'Áreas' => 'Continental',
									   'Clima' => 'Tropical Umido'),
				);
echo nl2br("Dados Cidade: São Vicente\n");			
echo nl2br ($cidade['São Vicente']['Fundação']."\n");
echo nl2br ($cidade['São Vicente']['Prefeito']."\n");
echo nl2br ($cidade['São Vicente']['QtdBairros']."\n");
echo nl2br ($cidade['São Vicente']['Shopping']."\n");
echo nl2br ($cidade['São Vicente']['População']."\n");
echo nl2br ($cidade['São Vicente']['Áreas']."\n");
echo nl2br ($cidade['São Vicente']['Clima']."\n");
echo nl2br("\n");
echo nl2br("Dados Cidade: Praia Grande\n");
echo nl2br ($cidade['Praia Grande']['Fundação']."\n");
echo nl2br ($cidade['Praia Grande']['Prefeita']."\n");
echo nl2br ($cidade['Praia Grande']['QtdBairros']."\n");
echo nl2br ($cidade['Praia Grande']['Shopping']."\n");
echo nl2br ($cidade['Praia Grande']['População']."\n");
echo nl2br ($cidade['Praia Grande']['Áreas']."\n");
echo nl2br ($cidade['Praia Grande']['Clima']."\n");

?>
									   
									   
				