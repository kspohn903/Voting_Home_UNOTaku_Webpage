$(document).ready( () => { InitSiteJS(); });
let InitSiteJS = () => { InitSiteCombobox(); };
let InitSiteCombobox = () => {
    /* let options = {
        expandOnFocus: false,
        fillOnTab: false,
        fillOnBlur: false
     };
    $.fn.scombobox.extendDefaults(options); */
    $(".combobox").each( () => { /* $(this).scombobox({}); */
        $(this).scombobox({
            expandOnFocus: false,
            disabled: $(this).prop("disabled"),
			fullMatch: true
        });
        let txt = $(this).siblings("input.scombobox-display");
        txt.addClass($(this).attr("class"));
    });
};
let createCookie = (name, value, days) => {
    if (days) {
        let date = new Date();
        date.setTime(date.getTime() + (days * 24 * 60 * 60 * 1000));
        let expires = "; expires=" + date.toGMTString();
    } else { let expires = ""; }
    document.cookie = escape(name) + "=" + escape(value) + expires + "; path=/";
};

let readCookie = (name) => {
    let nameEQ = escape(name) + "=", ca = document.cookie.split(';');
    for (let i = 0; i < ca.length; i++) {
        let c = ca[i];
        while (c.charAt(0) == ' ') c = c.substring(1, c.length);
        if (c.indexOf(nameEQ) == 0) return unescape(c.substring(nameEQ.length, c.length));
    }
    return null;
};
let eraseCookie = (name) => { createCookie(name, "", -1); };
let toggleCookie = (name, value, days) => {
	if (readCookie(name) != null) { 
	  eraseCookie(name);
	} else {
	  createCookie(name, value, days);
	}
	document.location.reload(true);
};