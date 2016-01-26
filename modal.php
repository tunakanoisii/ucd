<?php 

			$updir = "./files/";
			$png = glob($updir. "*.png");
			$jpg = glob($updir. "*.jpg");
			$jpeg = glob($updir. "*.jpeg");
			$result = count($png) + count($jpg) + count($jpeg);

			for($i=0; $i<=$result; $i++ ){
				if($before_image = './files/'.$i'.png'){;
						$after_image = imagecreatefrompng($before_image);
						imagejpeg($after_image, './files/'.$i'.jpg');
					}
					echo '<div id="modal-' . $i .'"'.' class="modal-contents">' // まず最初の囲みを出力
					echo '<img src="'. $after_image .'">'
			echo '</div>'
			?>

			<?php
				if($before_image = './files/0.png'){
					$after_image = imagecreatefrompng($before_image);
					imagejpeg($after_image, './files/0.jpg');
				}
				?>