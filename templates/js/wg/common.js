var common = {};
common ={
	expend_collap:function(){
		$( '.target' ).toggle('slow',function(){
			if($(this).is(':hidden')) {
				$( "#ex-coll" ).removeClass('glyphicon-minus');
				$( "#ex-coll" ).addClass('glyphicon-plus');
			}else {
				$( "#ex-coll" ).removeClass('glyphicon-plus');
				$( "#ex-coll" ).addClass('glyphicon-minus');
			}
		});
	},
	show_hide:function (index){
		for(i=1;i<12;i++){
			if(i!=index){
				$('.level-'+i).hide();
				$( ".level-open-"+i ).attr('src',url_open);
			}	
		}
		$( '.level-'+index ).toggle('slow',function(){
			if($(this).is(':hidden')) {
				$( ".level-open-"+index ).attr('src',url_open);
			}else {
				$( ".level-open-"+index ).attr('src',url_close);
			}
		});
	},
	hide_all:function(){
		for(i=1;i<12;i++){
			if(i!=1){
				$('.level-'+i).hide();
			}	
		}
	}
	
}