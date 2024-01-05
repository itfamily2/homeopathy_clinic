            var doctors;
            var hospitals;
            var specilizations;
            $(function() {
               doctors = [{"label":"Dr. Swati Ghosh","value":"1"},{"label":"Dr. Amit Ghosh","value":"2"},{"label":"Dr. Madanmohan Ghosh","value":"3"},{"label":"Ghosh Clinic","value":"4"},{"label":"Any Doctor","value":"5"}];
          
               specilizations = [{"label":"Homeopathy","value":"201"},{"label":"General Physician","value":"202"},{"label":"Hay Fever","value":"203"},{"label":"Cardio Surgeon","value":"204"},{"label":"Mental Health Surgeon","value":"205"},{"label":"Allergies","value":"206"},{"label":"Dermatitis","value":"207"},{"label":"Artharitis","value":"208"},{"label":"High Blood Pressure","value":"209"},{"label":"any specialization","value":"210"}];
              
               $("#doctor").autocomplete({  
                   minLength: 1,
                  source: doctors,
                  select: function( event, ui ) {
          
                      $( "#doctor_id" ).val(ui.item.value);
                      $( "#doctor" ).val( ui.item.label);
                      return false;
                  },
                 
              });
              
              
               $("#spec").autocomplete({  
                   minLength: 1,
                  source: specilizations,
                  select: function( event, ui ) {
          
                      $( "#spec_id" ).val(ui.item.value);
                      $( "#spec" ).val( ui.item.label);
                      return false;
                  },
                 
              });    
          
            });