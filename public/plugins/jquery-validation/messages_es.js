(function( factory ) {
	if ( typeof define === "function" && define.amd ) {
		define( ["jquery", "../jquery.validate"], factory );
	} else if (typeof module === "object" && module.exports) {
		module.exports = factory( require( "jquery" ) );
	} else {
		factory( jQuery );
	}
}(function( $ ) {

/*
 * Translated default messages for the jQuery validation plugin.
 * Locale: ES (Spanish; Español)
 */
$.extend( $.validator.messages, {
	required: "Este campo es obligatorio",
    remote: "Digite la información", 
    email: "Digite una dirección de correo válida",
    url: "Digite una URL válida",
    date: "Digite una fecha válida",
    dateISO: "Digite una fecha (ISO) válida",
    number: "Digite un número válido",
    digits: "Digite solo números",
    creditcard: "Digite un número de tarjeta válido",
    equalTo: "Digite el mismo valor de nuevo",
    extension: "Digite un valor con una extensión aceptada",
    maxlength: $.validator.format( "Digite máximo {0} caracteres" ),
    minlength: $.validator.format( "Digite mínimo {0} caracteres" ),
    rangelength: $.validator.format( "Digite escribe un valor entre {0} y {1} caracteres." ),
    range: $.validator.format( "Digite un valor entre {0} y {1}" ),
    max: $.validator.format( "Digite un valor menor o igual a {0}" ),
    min: $.validator.format( "Digite un valor mayor o igual a {0}." ),
    nifES: "Digite un NIF válido",
    nieES: "Digite un NIE válido",
    cifES: "Digite un CIF válido"
} );
return $;
}));