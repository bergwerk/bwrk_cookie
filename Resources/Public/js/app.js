function createCookie(e,i,t){if(t){var o=new Date;o.setTime(o.getTime()+24*t*60*60*1e3);var r="; expires="+o.toGMTString()}else var r="";document.cookie=e+"="+i+r+"; path=/"}$(document).ready(function(){$(".tx-bwrkcookie form").submit(function(){var e=$(this).find('input[name="bwrk_cookie_validity_days"]').val();return createCookie("bwrk_cookie",!0,e),$(this).parents(".tx-bwrkcookie").hide(),!1})});
//# sourceMappingURL=app.js.map
