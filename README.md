## Add out of stock flash text above featured image on single product page
If you have out of stock flash displayed on product catalog pages, but not on single product pages, you can follow my instructions to fix this.

# Installation
1. Copy over the code from functions.php to your WordPress copy of that file.
2. Use Chrome dev tools to identify the class of div which is used to output 'Out of stock' flash on products category page of your website.
3. Update [line 6](functions.php#L6) `printf( '<div class="fusion-out-of-stock"><div class="fusion-position-text">%s</div></div>', __( 'Out of Stock', 'Avada' ) );` with your div class details. Keep in mind: The div class used in this file does belong to Avada and may not work on other themes.
