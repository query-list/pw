<?php
class Upload{ 
private $arquivo; 
private $altura; 
private $largura; 
private $pasta; 
 
	function __construct($arquivo, $altura, $largura, $pasta){ 
	$this->arquivo = $arquivo; 
	$this->altura = $altura; 
	$this->largura = $largura; 
	$this->pasta = $pasta; 
	} 
	
	private function getExtensao(){ 
	//retorna a extensao da imagem	
	$exten = strtolower(end(explode('.', $this->arquivo['name']))); 
	return $exten;
	} 

	private function ehImagem($extensao){ 
	$extensoes = array('gif', 'jpeg', 'jpg', 'png');
	// extensoes permitidas 
	if (in_array($extensao, $extensoes)) return true;	
	} 
	
	//largura, altura, tipo, localizacao da imagem original 
	private function redimensionar($imgLarg, $imgAlt, $tipo, $img_localizacao){ 
		//descobrir novo tamanho sem perder a proporcao 
		if ( $imgLarg > $imgAlt ){ 
		$novaLarg = $this->largura; 
		$novaAlt = round( ($novaLarg / $imgLarg) * $imgAlt ); 
		} else if ( $imgAlt > $imgLarg ){ 
									$novaAlt = $this->altura; 
									$novaLarg = round( ($novaAlt / $imgAlt) * $imgLarg ); 
									} else // altura == largura 
									$novaAltura = $novaLargura = max($this->largura, $this->altura); 
									//redimencionar a imagem //cria uma nova imagem com o novo tamanho	
									$novaimagem = imagecreatetruecolor($novaLarg, $novaAlt); 
									switch ($tipo){ 
													case 1:	// gif 
													$origem = imagecreatefromgif($img_localizacao); 
													imagecopyresampled($novaimagem, $origem, 0, 0, 0, 0, $novaLarg, $novaAlt, $imgLarg, $imgAlt); 
													imagegif($novaimagem, $img_localizacao); 
													break;
													
													case 2:	// jpg 
													$origem = imagecreatefromjpeg($img_localizacao); 
													imagecopyresampled($novaimagem, $origem, 0, 0, 0, 0, $novaLarg, $novaAlt, $imgLarg, $imgAlt); 
													imagejpeg($novaimagem, $img_localizacao); 
													break;
													
													case 3:	// png 
													$origem = imagecreatefrompng($img_localizacao); 
													imagecopyresampled($novaimagem, $origem, 0, 0, 0, 0, $novaLarg, $novaAlt, $imgLarg, $imgAlt); 
													imagepng($novaimagem, $img_localizacao); 
													break; 
													
													} 
									//destroi as imagens criadas 
									imagedestroy($novaimagem); 
									imagedestroy($origem); 
	} 

	public function salvar(){	
	$extensao = $this->getExtensao(); 
	//gera um nome unico para a imagem em funcao do tempo 
	    $_COOKIE['nomearquivo'] = NULL;
		$_SESSION['arquivo'] = NULL;
	if ($extensao != NULL){
		$nome_largura = time();
		$novo_nome = $nome_largura . '.' . $extensao; 
		$_COOKIE['nomearquivo'] = $novo_nome;
		$_SESSION['arquivo'] = 1;
		//localizacao do arquivo 
		$destino_pasta = $this->pasta;
		$destino = $destino_pasta."/"; 
		//move o arquivo 
			if (! move_uploaded_file($this->arquivo['tmp_name'], $destino.$novo_nome)){ 
			if ($this->arquivo['error'] == 1) return "Tamanho excede o permitido"; 
			else return "Erro!!! " . 
			$this->arquivo['error']; 
			} 
			if ($this->ehImagem($extensao)){	
				//pega a largura, altura, tipo e atributo da imagem 
				list($largura, $altura, $tipo, $atributo) = getimagesize($destino); 
				// testa se é preciso redimensionar a imagem 
				if(($largura > $this->largura) || ($altura > $this->altura)) 
				$this->redimensionar($largura, $altura, $tipo, $destino); 
			} return $destino.$novo_nome; 
		}	
	}
}?>
