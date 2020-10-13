<?php
/*
Template Name: Pay Page Canadian
*/
?>

<?php get_header(); ?>
	<section class="title-wrapper">
		<div class="title width cf">
			<p><?php the_title(); ?></p>
		</div>
	</section>

	<section class="content-wrapper">
		<div class="content full width cf">
			<article class="cf">
				<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
				<?php the_content(); ?>
				<?php endwhile;?>
				<?php endif; ?>
				<form method="post" id="onlinePayment" action="https://www.paypal.com/cgi-bin/webscr">
					<p>Please enter the invoice amount: $</p>
					<input type="text" id="invoiceAmount" name="invoiceAmount">
					<input type="hidden" id="amount" name="amount">
					<input type="hidden" value="Invoice Number" name="on0">
					<p>Please enter your Name:</p> 
					<input type="text" maxlength="200" name="os0">
					<input type="hidden" value="_xclick" name="cmd">
					<input type="hidden" value="info@ehomework.ca" name="business">
					<input type="hidden" value="eHomework Invoice" name="item_name">
					<input type="hidden" value="Invoice Payment" name="item_number">
					<input type="hidden" value="1" name="no_shipping">
					<input type="hidden" value="http://www.learnon.ca" name="return">
					<input type="hidden" value="http://www.learnon.ca" name="cancel_return">
					<input type="hidden" value="Additional Comments" name="cn">
					<input type="hidden" value="CAD" name="currency_code">
					<input type="hidden" value="CAD" name="lc">
					<input type="hidden" value="PP-BuyNowBF" name="bn">
					<input type="image" border="0" alt="Make payments with PayPal - it's fast, free and secure!" id="submit" name="submit" src="https://www.paypal.com/en_US/i/btn/x-click-but6.gif">
				</form>
			</article>
	</section>

<?php get_footer(); ?>