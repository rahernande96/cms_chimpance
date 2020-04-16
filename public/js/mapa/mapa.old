$(function(){
    	
      var ancho=$( window ).width();
      var alto=$( window ).height();
      $('#map').height(alto);
      if (ancho >='1024'){
    	  var anchod='500';
      }
      if (ancho <= '768'){
    	  var anchod=(ancho-40);
    	  var pmy='center bottom';
    	  var pat='center bottom';
    	  var malto=(alto/2);
    	  var radi=10;
    	  var maxz=30;
      }else{
    	  var pmy='right top';
    	  var pat='right-10 top+10';
    	  var malto=alto-50;
    	  var radi=5;
    	  var maxz=20;
      }
           $('#map').vectorMap({
        	  	map: 'america1_mill',
  	      		backgroundColor: 'white',
    	    	focusOn: { x: 0.235, y: 0.36, scale: 1, animate: true },
	      	    series: {
	      	            regions: [{
	      	            	values: {
	      	                    'BO': '#a2d77f',
	      	                    'JM': '#9dca60',
	      	                    'BR': '#83b348',
	      	                    'BS': '#7fc03b',
	      	                    'BZ': '#96ce4a',
	      	                    'GT': '#7db03b',
	      	                    'GY': '#5d8c2f',
	      	                    'HT': '#456d24',
	      	                    'HN': '#2e4d1a',
	      	                    'PR': '#a2d77f',
	      	                    'PY': '#9dca60',
	      	                    'PA': '#83b348',
	      	                    'PE': '#7fc03b',
	      	                    'EC': '#5d8c2f',
	      	                    'MX': '#456d24',
	      	                    'FK': '#2e4d1a',
	      	                    'NI': '#a2d77f',
	      	                    'CO': '#9dca60',
	      	                    'CL': '#83b348',
	      	                    'CR': '#7fc03b',
	      	                    'CU': '#5d8c2f',
	      	                    'SV': '#456d24',
	      	                    'DO': '#2e4d1a',
	      	                    'UY': '#a2d77f',
	      	                    'TT': '#9dca60',
	      	                    'VE': '#83b348',
	      	                    'AR': '#7fc03b',
	      	                    'SR': '#5d8c2f',
	      	                    'VG': '#456d24',
	      	                    'AI': '#5d8c2f',
	      	                    'AW': '#2e4d1a',
	      	                    'AG': '#83b348',
	      	                    'BB': '#5d8c2f',
	      	                    'BQ': '#9dca60',
	      	                    'KY': '#456d24',
	      	                    'CW': '#83b348',
	      	                    'DM': '#2e4d1a',
	      	                    'GD': '#5d8c2f',
	      	                    'MS': '#7fc03b',
	      	                    'KN': '#5d8c2f',
	      	                    'LC': '#9dca60',
	      	                    'SX': '#5d8c2f',
	      	                    'VC': '#456d24',
	      	                    'TC': '#5d8c2f',
	      	                    'FR': '#456d24',
	      	                    'IC1': '#C0D99F',
	      	                    'IC2': '#C0D99F',
	      	                    
	      	                    
	      	                },
	      	                attribute: 'fill'
	      	            }]
	      	        }, 
	      	    onRegionClick: function(e,  code){
	      	    	if((code=='IC1') || (code=='IC2') || (code=='VG') || (code=='VI') || (code=='AI') || (code=='AG') || (code=='AW') || (code=='BB') || (code=='BQ') || (code=='KY') || (code=='BB') || (code=='CW') || (code=='DM') || (code=='GD') || (code=='MS') || (code=='KN') || (code=='LC') || (code=='SX') || (code=='VC') || (code=='TC') || (code=='BL') || (code=='BS') ){
	      	    		$('#map').hide();
	      	    		$('#map').css('z-index', 1);
	      	    		$('#map-caribe').show();
	      	    		$('#map-caribe').css('z-index', 10);
	      	    		$('#cambiar').show();
	      	    	}
	      	    	$.ajax({
				        type: "POST",
				        headers: {
				        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
				        },
				        url: window.location.origin+"/map-data",
				        data: {// change data to this object
				           code: code,
				        },
				        dataType: "text",
				        success: function(data,status)
				        {
				        	var data = JSON.parse(data);
				        	$("#dialog").html(data.contenido);
		      	    	    $( "#dialog" ).dialog({
		        	    		  title: data.titulo,
		        	    		  width: anchod,
		        	    		  position: { 
		    	      	              my: pmy,
		    	      	              at: pat,
		    	      	              of: $('body')
		    	      	           },  
		        	    		  maxHeight: malto
		        	    		  
		        	    		});
				          console.log(data);
				        }
				      });
	      	    	
	      	    },
	      	    zoomOnScroll:false,
	      	    zoomMax: maxz,
	      	  onRegionTipShow: function(e, el, code){
	      	      el.html(el.html());
	      	    }
    		})

     

    
            $('#map-caribe').vectorMap({
                map: "caribe",
                backgroundColor: '#fff',
                onRegionClick: function(e,  code){
	      	    	$.ajax({
				        type: "POST",
				        headers: {
				        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
				        },
				        url: window.location.origin+"/map-data",
				        data: {// change data to this object
				           code: code,
				        },
				        dataType: "text",
				        success: function(data,status)
				        {
				        	var data = JSON.parse(data);
				        	$("#dialog").html(data.contenido);
		      	    	    $( "#dialog" ).dialog({
		        	    		  title: data.titulo,
		        	    		  width: anchod,
		        	    		  position: { 
		    	      	              my: pmy,
		    	      	              at: pat,
		    	      	              of: $('body')
		    	      	           },  
		        	    		  maxHeight: malto
		        	    		  
		        	    		});
				          console.log(data);
				        }
				      });
	      	    	
	      	    },

                series: {
                    regions: [{
                        values: {
                        	'BO': '#a2d77f',
      	                    'JM': '#9dca60',
      	                    'BR': '#83b348',
      	                    'BS': '#7fc03b',
      	                    'BZ': '#96ce4a',
      	                    'GT': '#7db03b',
      	                    'GY': '#5d8c2f',
      	                    'HT': '#456d24',
      	                    'HN': '#2e4d1a',
      	                    'PR': '#a2d77f',
      	                    'PY': '#9dca60',
      	                    'PA': '#83b348',
      	                    'PE': '#7fc03b',
      	                    'EC': '#5d8c2f',
      	                    'MX': '#456d24',
      	                    'FK': '#2e4d1a',
      	                    'NI': '#a2d77f',
      	                    'CO': '#9dca60',
      	                    'CL': '#83b348',
      	                    'CR': '#7fc03b',
      	                    'CU': '#5d8c2f',
      	                    'SV': '#456d24',
      	                    'DO': '#2e4d1a',
      	                    'UY': '#a2d77f',
      	                    'TT': '#9dca60',
      	                    'VE': '#83b348',
      	                    'AR': '#7fc03b',
      	                    'SR': '#5d8c2f',
      	                    'VG': '#456d24',
      	                    'AI': '#5d8c2f',
      	                    'AW': '#2e4d1a',
      	                    'AG': '#83b348',
      	                    'BB': '#5d8c2f',
      	                    'BQ': '#9dca60',
      	                    'KY': '#456d24',
      	                    'CW': '#83b348',
      	                    'DM': '#2e4d1a',
      	                    'GD': '#5d8c2f',
      	                    'MS': '#7fc03b',
      	                    'KN': '#5d8c2f',
      	                    'LC': '#9dca60',
      	                    'SX': '#5d8c2f',
      	                    'VC': '#456d24',
      	                    'TC': '#5d8c2f',
      	                    'FR': '#456d24'
                        }
                    }]
                },
                onRegionTipShow: function(e, el, code){
                    el.html(el.html());
                  }
            });
    
          $('#cambiar').click(function(e){
    	    	e.preventDefault();
    	    	$('#map-caribe').hide();
    	    	$('#map-caribe').css('z-index', 1);
    	    	$('#map').show();
    	    	$('#map').css('z-index', 3000);
    	    	
    	    });
    });
