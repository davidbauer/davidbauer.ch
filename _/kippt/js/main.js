(function(){
    
    function _log(foo) {
        console.log(foo);
    }

    var app = window.App = function(){};
    
    app.init = function() {
        app.requestData();
    };
    
    app.requestData = function() {
        var clips_list;
        $.get('http://www.davidbauer.ch/wp-content/themes/db14/_/kippt/kippt.php', function(res){
            clips_list = ich.clips_list(res);
            $('.clips').append(clips_list);
        }, 'json');
    };
    $(window).load(function(){
        //Init
        app.init();
    });

})();    