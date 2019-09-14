$(document).ready(function() {
    $('.navShowHide').on('click', function() {
        var main = $('#mainSectionContainer');
        var nav = $('#sideNavContainer');

        main.hasClass('leftPadding') ? nav.hide() : nav.show();

        main.toggleClass('leftPadding');
    });
});
