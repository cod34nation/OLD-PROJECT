<?php
	echo '
			 <h3>Rekap Data Pemasangan Iklan</h3>
		 <fieldset>
							<form name="login" action="rekap_pemasangan.php" method="POST">
								<div class="control-group">
									 <b>Dari :</b><br/>
										<input type="date" name="dari" class="required">
									 </label>
									<label><br/><b>Sampai :</b><br/>
										<input type="date" name="sampai" class="required">
									</label>
									<label><p>
										 <button type="submit" >Proses</button>
										 <button type="button"   onclick="self.history.back()">Batal</button></p>
									</label>
								</div>
							</form>
					</fieldset>
		 ';

?>