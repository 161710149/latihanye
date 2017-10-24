<?php

	class robot{

		public $suara = 'ngik ngik ngik';
		public $berat = 30;

	}
	$robot1 = new robot;
	echo "Suara robot berbunyi :".$robot1-> suara .'<br>' ;
	echo "dan beratnya :".$robot1-> berat .'<br>' ;

?>
<?php

	class burung{

		public $suara = 'cit cit';
		public $sayap = 2;

	}
	$burung1 = new burung;
	echo "Suara burung berbunyi :".$burung1-> suara .'<br>' ;
	echo "dan mempunyai sayap :".$burung1-> sayap .'buah' ;

?>
<?php

	class kuda{

		public $kaki = 4;
		public $makan = 'rumput';

	}
	$kuda1 = new kuda;
	echo "Kuda berjalan dengan  :".$kuda1-> kaki .' kaki <br>' ;
	echo "dan memakan :".$kuda1-> makan .'<br>' ;

?>
<br>
<br>
<?php

	class ayam{

		public $kaki = 2;
		public $jenis = 'unggas';

	}
	$ayam1 = new ayam;
	echo "Ayam berjalan dengan :".$ayam1-> kaki .'<br>' ;
	echo "dan hewan berjenis :".$ayam1-> jenis .'<br>' ;

?>
<br>
<br>
<?php

	class kambing{

		public $jenis = 'mamalia';
		public $bulu = 'keriting';

	}
	$kambing1 = new kambing;
	echo "Kambing hewan jenis :".$kambing1-> jenis .'<br>' ;
	echo "dan berbulu :".$kambing1-> bulu .'<br>' ;

?>