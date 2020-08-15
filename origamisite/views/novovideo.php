<?php
 include('../index.html');

	echo "<div class='pure-g-r content-ribbon' id='contato'>
                <div class='pure-u-1'>
                    #<h3>Tire suas dúvidas sobre o Curso</h3>
                    <form action='#' class='pure-form pure-form-aligned' method='post'>
                        <fieldset>
                            <div class='pure-control-group'>
                                    <label>Nome: </label>
									<input type='text' name='name'></br>
									<label>URL: </label>
									<input type='text' name='url'>
                             </div>
                            <div class='pure-controls'>
                                <button type='submit' class='pure-button pure-button-primary'>Enviar</button>
                            </div>
                        </fieldset>
                    </form>
                </div>
    </div>";
	#echo "<form action='' method='post'>
	#		<label>Nome: </label>
	#		<input type='text' name='name'>
	#	  </form>"
?>