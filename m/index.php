<?php include('includes/header.php'); ?> 

   <header data-role="header" data-nobackbtn="true">
     <h1>
       <i>Fear not for I am with you...</i>
     </h1>
   </header>
   <!-- /header -->

	<div data-role="content">
			<div id="paypalForm">
				<form action="https://mobile.paypal.com/wc" method="post" class="asForm" enctype="multipart/form-data">
					<input type="hidden" name="cmd" value="_xclick" />
				    <input type="hidden" name="business" value="seanod189@gmail.com" />
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
    
   	   <a data-role="button" href="http://www.facebook.com/event.php?eid=171798769521184" data-theme="b" class="ui-btn ui-btn-corner-all ui-shadow ui-btn-up-c myTheme">
   		<span class="ui-btn-inner ui-btn-corner-all myTheme">
   			<span class="ui-btn-text">Facebook Page</span>
   		</span>
   	</a>
   	<br />
   
   

<?php include('includes/footer.php'); ?> 