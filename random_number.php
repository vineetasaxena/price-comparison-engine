<?php	 	 
	class rand
	{
		function generatecode()
		{
			for($i=0;$i<5;$i++)
			{
				$r=rand(65,90);
				$p.=chr($r);
			}
			return $p;
		}
	}
?>