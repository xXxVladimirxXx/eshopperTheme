( function( $ ){
	var isSticky = false;
 
	$.each( document.scripts, function(){
		var src = $( this ).attr( 'src' );
 
		if ( src && src.match( /sticky\.js/i ) && src.match( /sticky=1/i ) ){
			isSticky = true;
			return;
		}
	});
 
	if ( !$( '#sticky-span' ).length ){
		var checked = ( isSticky )? 'checked="checked"' : '';
		var html = '<span id="sticky-span"><input id="sticky" name="sticky" type="checkbox" value="sticky" tabindex="4" ' + checked + ' /> ' + '<label class="selectit" for="sticky">Stick this post to the front page</label> ';
 
		$( 'label[for=visibility-radio-public] + br' ).after( html );
	}
})( jQuery );