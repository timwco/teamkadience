<?php include('includes/header.php'); ?> 

   <header data-role="header">
	<a data-icon="arrow-l" class="ui-btn-left ui-btn ui-btn-up-c ui-btn-icon-left ui-btn-corner-all ui-shadow" href="index.php" data-theme="a">
		<span class="ui-btn-inner ui-btn-corner-all"><span class="ui-icon ui-icon-arrow-l ui-icon-shadow"></span>
		<span class="ui-btn-text">Back</span></span>
	</a>
     <h1>
       Make a Donation
     </h1>
   </header>
   <!-- /header -->


	<div data-role="content">
			<div id="paypalForm">
				<form action="https://www.paypal.com/cgi-bin/webscr" method="post" class="asForm" enctype="multipart/form-data">
					<input type="hidden" name="cmd" value="_xclick" />
				    <input type="hidden" name="business" value="whitink@gmail.com" />
					<div class="asFormElement">
						<label for="item_name">Name</label>
				        <input class="asInputMedium" name="item_name" id="item_name" type="text" />
					</div>
					<div class="asFormElement">
						<label for="ammount">Amount</label>
				        <input class="asInputShort" name="amount" id="amount" type="text"  onkeyup="checkFieldBack(this);noAlpha(this);" onkeypress="noAlpha(this);" />
					</div>
					<input type="submit" class="asSubmit" name="Submit" value="Donate" />	
					<input type="hidden" name="item_number" value="Prayer 4 Kaidence" />	
					<input type="hidden" name="no_shipping" value="0" />
				    <input type="hidden" name="no_note" value="1" />
					<input type="hidden" name="return" value="http://teamkaidence.com/m" />
				</form>				
			</div>
    </div>
    
<?php include('includes/footer.php'); ?> 