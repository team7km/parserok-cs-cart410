{script src="js/addons/hybrid_auth/func.js"}
<script type="text/javascript">
(function(_, $) {
    $.ceEvent('on', 'ce.commoninit', function(context) {
	    $("a.vs-social-toggle").click(function(e){
	        e.preventDefault();

	        var self=$(this);
	        var target=self.siblings(".vs-auth");

	        target.toggleClass("hidden");
	    
	    });
    });
}(Tygh, Tygh.$));
</script>
