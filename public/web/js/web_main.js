$.noConflict();

jQuery(document).ready(function($) {

	"use strict";

	[].slice.call( document.querySelectorAll( 'select.cs-select' ) ).forEach( function(el) {
		new SelectFx(el);
	} );

	jQuery('.selectpicker').selectpicker;


	$('#menuToggle').on('click', function(event) {
		$('body').toggleClass('open');
	});

	$('.search-trigger').on('click', function(event) {
		event.preventDefault();
		event.stopPropagation();
		$('.search-trigger').parent('.header-left').addClass('open');
	});

	$('.search-close').on('click', function(event) {
		event.preventDefault();
		event.stopPropagation();
		$('.search-trigger').parent('.header-left').removeClass('open');
	});

	// $('.user-area> a').on('click', function(event) {
	// 	event.preventDefault();
	// 	event.stopPropagation();
	// 	$('.user-menu').parent().removeClass('open');
	// 	$('.user-menu').parent().toggleClass('open');
	// });

	document.querySelector("#control-sidebar-theme-demo-options-tab > div > ul");

	var SPMaskBehavior = function (val) {
			return val.replace(/\D/g, '').length === 11 ? '(00) 00000-0000' : '(00) 0000-00009';
		},
		spOptions = {
			onKeyPress: function(val, e, field, options) {
				field.mask(SPMaskBehavior.apply({}, arguments), options);
			}
		};

	$('.input_telefone').mask(SPMaskBehavior, spOptions);


	/*function inputHandler(masks, max, event) {
		var c = event.target;
		var v = c.value.replace(/\D/g, '');
		var m = c.value.length > max ? 1 : 0;
		VMasker(c).unMask();
		VMasker(c).maskPattern(masks[m]);
		c.value = VMasker.toPattern(v, masks[m]);
	}

	var telMask = ['(99) 9999-99999', '(99) 99999-9999'];
	var tel = document.querySelector('input[attrname=phone]');
	VMasker(tel).maskPattern(telMask[0]);
	tel.addEventListener('input', inputHandler.bind(undefined, telMask, 14), false);

	var docMask = ['999.999.999-999', '99.999.999/9999-99'];
	var doc = document.querySelector('#doc');
	VMasker(doc).maskPattern(docMask[0]);
	doc.addEventListener('input', inputHandler.bind(undefined, docMask, 14), false);*/

});
