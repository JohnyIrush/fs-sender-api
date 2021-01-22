
/**
 * Make the pages
 * responsive
*/
$.getScript('/sendfoodassets/plugins/Layout/responsive.js', function(){
    $(document).ready(function(){
        const Dashboard  = new Responsive('wrapper');
        Dashboard.fitBrowserHeight();
        alert('fitting...');
    });
});

