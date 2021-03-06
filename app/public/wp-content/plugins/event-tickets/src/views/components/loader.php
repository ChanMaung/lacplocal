<?php
/**
 * View: Loader
 *
 * Override this template in your own theme by creating a file at:
 * [your-theme]/tribe/components/loader.php
 *
 * See more documentation about our views templating system.
 *
 * @link {INSERT_ARTCILE_LINK_HERE}
 *
 * @since 5.0.4 Update template to use icons from Tribe Common.
 * @since 5.0.4.1 Call dot views using template class to prevent issues where this template was included outside of a template class.
 *
 * @version 5.0.4.1
 *
 */
if ( empty( $text ) ) {
	$text = $this->get( 'text' ) ?: __( 'Loading...', 'event-tickets' );
}

if ( empty( $loader_classes ) ) {
	$loader_classes = $this->get( 'classes' ) ?: [];
}

$spinner_classes = [
	'tribe-tickets-loader__dots',
	'tribe-common-c-loader',
	'tribe-common-a11y-hidden',
];

if ( ! empty( $loader_classes ) ) {
	$spinner_classes = array_merge( $spinner_classes, (array) $loader_classes );
}

// Calling this manually because the v1 calls do not all use templating classes.
/** @var Tribe__Tickets__Editor__Template $template */
$template = tribe( 'tickets.editor.template' );
?>
<div class="tribe-common">
	<div <?php tribe_classes( $spinner_classes ); ?> >
		<?php $template->template( 'v2/components/icons/dot', [ 'classes' => [ 'tribe-common-c-loader__dot', 'tribe-common-c-loader__dot--first' ] ] ); ?>
		<?php $template->template( 'v2/components/icons/dot', [ 'classes' => [ 'tribe-common-c-loader__dot', 'tribe-common-c-loader__dot--second' ] ] ); ?>
		<?php $template->template( 'v2/components/icons/dot', [ 'classes' => [ 'tribe-common-c-loader__dot', 'tribe-common-c-loader__dot--third' ] ] ); ?>
	</div>
</div>
