
   $(".plitka-input").keyup(function () {

     var plitka_value = $('#plitka_value').val();
     plitka_value = parseInt(plitka_value) * 15;
     var bordur_value = $('#bordur_value').val();
     bordur_value = parseInt(bordur_value) * 5;
     var podrez_value = $('#podrez_value').val();
     podrez_value = parseInt(podrez_value) * 3;
     var podmaz_value = $('#podmaz_value').val();
     podmaz_value = parseInt(podmaz_value) * 1.5;
     if(isNaN(plitka_value)) plitka_value = 0;
     if (isNaN(bordur_value)) bordur_value = 0;
     if (isNaN(podrez_value)) podrez_value = 0;
     if (isNaN(podmaz_value)) podmaz_value = 0;

     var sum = plitka_value;
     sum += bordur_value;
     sum += podrez_value;
     sum += podmaz_value;

     if(isNaN(sum)) sum = 0;
     $("#calcresult").text(sum);

   }).keyup();
