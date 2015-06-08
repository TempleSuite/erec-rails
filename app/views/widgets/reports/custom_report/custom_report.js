$(document).ready(function() {
 
 // START AND FINISH DATE
		$('#startdate').datepicker({
			dateFormat : 'dd.mm.yy',
			prevText : '<i class="fa fa-chevron-left"></i>',
			nextText : '<i class="fa fa-chevron-right"></i>',
			onSelect : function(selectedDate) {
				$('#finishdate').datepicker('option', 'minDate', selectedDate);
			}
		});
		
		$('#finishdate').datepicker({
			dateFormat : 'dd.mm.yy',
			prevText : '<i class="fa fa-chevron-left"></i>',
			nextText : '<i class="fa fa-chevron-right"></i>',
			onSelect : function(selectedDate) {
				$('#startdate').datepicker('option', 'maxDate', selectedDate);
			}
		});
 
  $('#dates').change(function() {
      var dateskind = $( "#dates option:selected" ).text();
 
     if ( dateskind === 'Date Range') {
       $('#date-range').css('display', 'block');
       $('#last-days').css('display', 'none');
       $('#this-range').css('display', 'none');
     }else if( dateskind === 'Last'){
       $('#last-days').css('display', 'block');
       $('#date-range').css('display', 'none');
       $('#this-range').css('display', 'none');
     }else if ( dateskind === 'This'){
       $('#this-range').css('display', 'block');
       $('#date-range').css('display', 'none');
       $('#last-days').css('display', 'none');
     }
  });
 
});
