$(document).ready(function()
{
    $('.tx-bwrkcookie form').submit(function()
    {
        var cookieValidityDays = $(this).find('input[name="bwrk_cookie_validity_days"]').val();
        createCookie('bwrk_cookie',true, cookieValidityDays);
        $(this).parents('.tx-bwrkcookie').hide();
        return false;
    });
});
function createCookie(name,value,days) {
    if (days) {
        var date = new Date();
        date.setTime(date.getTime()+(days*24*60*60*1000));
        var expires = "; expires="+date.toGMTString();
    }
    else var expires = "";
    document.cookie = name+"="+value+expires+"; path=/";
}