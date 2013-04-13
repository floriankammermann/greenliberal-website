// the script for the twitter button
!function(d,s,id){
    var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';
    if(!d.getElementById(id)){
        js=d.createElement(s);js.id=id;js.src=p+'://platform.twitter.com/widgets.js';
        fjs.parentNode.insertBefore(js,fjs);
    }
}(document, 'script', 'twitter-wjs');

// the script for the google plus button
(function() {
    var po = document.createElement('script'); po.type = 'text/javascript'; po.async = true;
    po.src = 'https://apis.google.com/js/plusone.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(po, s);
})();

// the script for the min height
$(document).ready(function() {
        var documentHeight = $(document).height();
        var contentHeightFitToDocumentHeight = documentHeight - 303;
        var contentHeight = $('#content').height();
        if(contentHeight < contentHeightFitToDocumentHeight) {
            $('#content').height(contentHeightFitToDocumentHeight);
        }     
});
