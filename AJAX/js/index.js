$(function(){

  $('#btn')on('click', getData);

  function getData(){

    var target_url = 'js/data.json';

    $.ajax({
      type: 'GET',
      dataType: 'json',
      url: target_url
    }).fail( function( jqXHR, textStatus, error){


    }).done( function(){

    })
  }

});