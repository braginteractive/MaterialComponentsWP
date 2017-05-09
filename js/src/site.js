jQuery(document).ready(function($){

	
});

	//mdc.ripple.MDCRipple.attachTo(document.querySelector('.mdc-button'));

	mdc.textfield.MDCTextfield.attachTo(document.querySelector('.mdc-textfield'));

	var drawerEl = document.querySelector('.mdc-temporary-drawer');
	var MDCTemporaryDrawer = mdc.drawer.MDCTemporaryDrawer;
	var drawer = new MDCTemporaryDrawer(drawerEl);
	document.querySelector('.primary-menu').addEventListener('click', function() {
		drawer.open = true;
	});

mdc.autoInit();