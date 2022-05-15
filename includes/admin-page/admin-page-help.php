<?php
/**
 * Add Help page to submenu
 */

function mcwallet_help_submenu_page() {
	add_submenu_page(
		'mcwallet',
		esc_html__( 'Helping links', 'multi-currency-wallet' ),
		esc_html__( 'Help', 'multi-currency-wallet' ),
		'manage_options',
		'mcwallet-help',
		'mcwallet_help_page',
		20
	);
}
add_action( 'admin_menu', 'mcwallet_help_submenu_page', 11 );

/**
 * Page
 */
function mcwallet_help_page() {

?>

<div class="wrap">
	<h2><?php echo get_admin_page_title(); ?></h2>
	<div class="mcwallet-welcome-panel">
		<div class="mcwallet-welcome-panel-content">
			<div class="card mcwallet-card">
				<h2><a href="#" target="_blank">WALLET </a> - <?php esc_html_e( 'most common questions', 'multi-currency-wallet' ); ?></h2>
				<h2><a href="" target="_blank"></a> - <?php esc_html_e( 'ask the community!', 'multi-currency-wallet' ); ?></h2>
				<h2><a href="https://t.me/swaponlinebot/" target="_blank">https://t.me/atron-network</a> - <?php esc_html_e( 'contact team if you have another question', 'multi-currency-wallet' ); ?></h2>
				<h2><?php esc_html_e( 'Are you familar with GitHub?', 'multi-currency-wallet' ); ?> <a href="https://github.com/swaponline/MultiCurrencyWallet/issues/" target="_blank"><?php esc_html_e( 'Create an issue', 'multi-currency-wallet' ); ?></a></h2>
			</div>
		</div>
	</div>
</div>

<?php
}
