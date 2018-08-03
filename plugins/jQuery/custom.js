// Javascript to enable link to tab
/*var url = document.location.toString();
if (url.match('#')) {
    $('.nav-tabs a[href="#' + url.split('#')[1] + '-tab"]').tab('show');
} //add a suffix

// Change hash for page-reload
$('.nav-tabs a').on('shown.bs.tab', function (e) {
    window.location.hash = e.target.hash;
}) */

// Javascript to enable link to tab
var hash = document.location.hash;
var prefix = "tab_";
if (hash) {
    $('.nav-tabs a[href='+hash.replace(prefix,"")+']').tab('show');
} 

// Change hash for page-reload
$('.nav-tabs a').on('shown.bs.tab', function (e) {
    window.location.hash = e.target.hash.replace("#", "#" + prefix);
});