<html>						
<div class="content">
	<div class="main">
		<div class="demo">
			<div id="seat-map"></div>
			<div class="booking-details">
				<ul class="book-left">
					<li>Segli Cinema: </li>
					<li>Scegli il Film: </li>
					<li>Scegli la Data: </li>
					<li>Scegli l'ora: </li>
					<li>Biglietti: </li>
					<li>Totale: </li>
					<li>Posti: </li>
				</ul>
				<ul class="book-right">
					<li>
						<fieldset>      
							<select name="Cinema">
								<option>CinemaMosc</option>
								<option>TheEden</option>
								<option>TheSpace</option>
							</select>
						</fieldset>
					</li>
					<li>
						<fieldset>      
							<select name="Film">
								<option>Sully</option>
								<option>Animali Fantastici</option>
							</select>
						</fieldset>
					</li>
					<li>
						<fieldset>
							<input type="date" name="datafilm" min="$data">  
						</fieldset>
					</li>
					<li>
						<fieldset>                                
							<select name="ora">
								<option> 21,05 </option>
								<option> 22,05 </option>
							</select>
						</fieldset>
					</li>
					<li><span id="counter">0</span></li>
					<li><b><i>€</i><span id="totale">0</span></b></li>
				</ul>
				<div class="clear"></div>
				<ul id="selected-seats" class="scrollbar scrollbar1"></ul>
				<div id="legend"></div>
			</div>
			<div style="clear:both"></div>
		</div>

			<script type="text/javascript">
				//var firstSeatLabel = 1;
		
				$(document).ready(function() {
					var $cart = $('#selected-seats'),
						$counter = $('#counter'),
						$total = $('#totale'),
						sc = $('#seat-map').seatCharts({
						map: [
							'eeeeeeeeee',
							'eeeeeeeeee',
							'__________',
							'eeeeeeeeee',
							'eeeeeeeeee',
							'eeeeeeeeee',
							'eeeeeeeeee',
							'eeeeeeeeee',
							'_eeeeeeee_',
							'_eeeeeeee_'
						],
						//posso definire classi di posti diverse con prezzi diversi
						seats: {
							e: {
								price   : 10,
								classes : 'economy-class', //classe CSS personalizzata
								category: 'Disponibile'
							}					
						},
						naming : {
							top : false,
							getLabel : function (character, row, column) {
								//return firstSeatLabel++; //numeri progressivi
								return column;
							},
						},
						legend : {
							node : $('#legend'),
							items : [
								[ 'e', 'available',   'Disponibile' ],
								[ 'e', 'unavailable', 'Non disponibile'],
								[ 'e', 'selected', 'Selezionato']
							]					
						},
						click: function () { 
							if (this.status() == 'available') { 
								//creiamo un nuovo <li> che verrà aggiunto al carrello
								$('<li>Fila'+(this.settings.row+1)+' Posto'+this.settings.label+'</b> <a href="#" class="cancel-cart-item">[cancella]</a></li>')
									.attr('id', 'cart-item-'+this.settings.id)
									.data('seatId', this.settings.id)
									.appendTo($cart);

								/*
								 * Aggiorna il contatore e il totale
								 *
								 * .la funzione find non troverà il posto attuale, perchè cambierà il suo stato solo dopo aver ritornato 'selected'.
								 * Dunque dobbiamo aggiungere uno alla lunghezza and il prezzo del posto corrente al totale.
								 */
								$counter.text(sc.find('selected').length+1);
								$total.text(recalculateTotal(sc)+this.data().price);
											
								return 'selected';
							} else if (this.status() == 'selected') {
								//aggiorna il contatore
								$counter.text(sc.find('selected').length-1);
								//e il totale
								$total.text(recalculateTotal(sc)-this.data().price);
						
								//rimuovi l'elemento dal nostro carrell
								$('#cart-item-'+this.settings.id).remove();
						
								//il posto è libero
								return 'available';
							} else if (this.status() == 'unavailable') {
								//il posto è prenotato
								return 'unavailable';
							} else {
								return this.style();
							}
						}
					});
						
					//Questo si occuperà del link click "[cancel]" 
					$('#selected-seats').on('click', '.cancel-cart-item', function () {
						//facciamo innescare l'evento Click sulla classe interessata, così non dobbiamo ripetere la logica
						sc.get($(this).parents('li:first').data('seatId')).click();
					});
				
					//setta i posti venduti COLLEGARE QUESTI POSTI CON UNA TABELLA POSTI OCCUPATI
					sc.get(['1_2', '4_4','4_5','6_6','6_7','8_5','8_6','8_7','8_8', '10_1', '10_2']).status('unavailable');
						
				});
				
				function recalculateTotal(sc) {
					var total = 0;
		
					//Fondamentalmente trova tutti i posti selezionate e somma il loro prezzo
					sc.find('selected').each(function () {
						total += this.data().price;
					});
			
				return total;
				}
			</script>
	</div>
	
</div>
<script src="js/jquery.nicescroll.js"></script>
<script src="js/scripts.js"></script>

</html>
