( function( api ) {

	// Extends our custom "charitize" section.
	api.sectionConstructor['charitize'] = api.Section.extend( {

		// No events for this type of section.
		attachEvents: function () {},

		// Always make the section active.
		isContextuallyActive: function () {
			return true;
		}
	} );
	jQuery( "#accordion-panel-charitize-theme-options" ).addClass( "sudeep-class" );

} )( wp.customize );
