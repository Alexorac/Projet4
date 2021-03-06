$(function() {
    //datepicker
    var jourFerie = ["1-11-2017","11-11-2017","25-12-2017","31-12-2017","1-1-2018","6-1-2018","13-2-2018","14-2-2018","1-4-2018","2-4-2018","1-5-2018","8-5-2018","10-5-2018","20-5-2018","21-5-2018","14-7-2018","15-8-2018","1-11-2018","11-11-2018","25-12-2018","31-12-2018"];

    $( ".js-datepicker" ).datepicker ({
        altField: ".js-datepicker",
        closeText: 'Fermer',
        prevText: 'Précédent',
        nextText: 'Suivant',
        currentText: 'Aujourd\'hui',
        monthNames: ['Janvier', 'Février', 'Mars', 'Avril', 'Mai', 'Juin', 'Juillet', 'Août', 'Septembre', 'Octobre', 'Novembre', 'Décembre'],
        monthNamesShort: ['Janv.', 'Févr.', 'Mars', 'Avril', 'Mai', 'Juin', 'Juil.', 'Août', 'Sept.', 'Oct.', 'Nov.', 'Déc.'],
        dayNames: ['Dimanche', 'Lundi', 'Mardi', 'Mercredi', 'Jeudi', 'Vendredi', 'Samedi'],
        dayNamesShort: ['Dim.', 'Lun.', 'Mar.', 'Mer.', 'Jeu.', 'Ven.', 'Sam.'],
        dayNamesMin: ['D', 'L', 'M', 'M', 'J', 'V', 'S'],
        weekHeader: 'Sem.',
        dateFormat: 'dd/mm/yy',
        minDate: 0, // impossible de séléctionner un jour passé
        beforeShowDay: function(date) 
        {
            var day = date.getDay();
            var string = jQuery.datepicker.formatDate('d-m-yy', date);
            var isDisabled = ($.inArray(string, jourFerie) != -1);
            return [day != 0 && day!= 2 && !isDisabled];
        }// impossible de séléctionner dimanche et mardi
        
    });  
    

    // bloquer les réservations à la journée après 14h
    $( ".js-datepicker" ).change(function() {
        var date = new Date();
        var hour = date.getHours();
        var daySelected = $(this).datepicker('getDate');

        // mise en forme jour sélectionner.
        var day_datepicker = daySelected.getDate();
        var month_datepicker  = daySelected.getMonth();
        var year_datepicker = daySelected.getFullYear();
        var date_datepicker = day_datepicker+ "-" + month_datepicker + "-" + year_datepicker;

        // today
        var today_day = date.getDate();
        var today_month = date.getMonth();
        var today_year = date.getFullYear();
        var today = today_day+ "-" + today_month+ "-" + today_year;

        if ( (date_datepicker == today) && (hour > 14) )
        {
            $("#oc_bookingbundle_bookingform_ticketType").val('half');
            $("#oc_bookingbundle_bookingform_ticketType").prop('disabled', true);
            alert('Après 14h vous ne pouvez commander que des billets pour la demi-journée.')
        } 
        else 
        {
            $("#oc_bookingbundle_bookingform_ticketType").prop('disabled', false);
        }
 
      });

    // bouton add visitor et génération formulaire visitor
    var $newLinkLi = $('<li></li>');
    var $collectionHolder = $('ul.visitors');
    $collectionHolder.append($newLinkLi);
    $collectionHolder.data('index', $collectionHolder.find(':input').length);

        $(".addVisitor").click(function(e) 
        {
            e.preventDefault();
            addTagForm($collectionHolder, $newLinkLi);
        });
    
    
    function addTagForm($collectionHolder, $newLinkLi) 
    {
        var prototype = $collectionHolder.data('prototype');
        var index = $collectionHolder.data('index');
        var newForm = prototype.replace(/__name__/g, index);
        $collectionHolder.data('index', index + 1);
        var $newFormLi = $('<li></li>').append(newForm);
        $newLinkLi.before($newFormLi);
        $newFormLi.append('<button href="#" class="removeTag">Annuler le visiteur</button>');
    
    
        $('.removeTag').click(function(e) 
        {
            e.preventDefault();
            
            $(this).parent().remove();
            
            return false;
        });

    }   
})    