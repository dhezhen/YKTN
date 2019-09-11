
<style>
body {padding:30px}
.print-area {border:1px solid red;padding:1em;margin:0 0 1em}
</style>

<div class="print-area">
	<div style="text-align: center; font-style: bold;font-size: 16pt">
		Pengumuman kedatangan 
	</div>
	</div>

	<div class="print-area">

			<?php 
				if ($jadwal->status =='dihidupkan' ){

					echo $jadwal->isi;

				} else{

					echo "Maaf Pengumuman Belum ada, tunggu informasi selanjutnya";

				}

			?>



					

				
	</div>