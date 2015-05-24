/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
$(function() {

     $('a[data-method="delete"]').click(function(e) {
        e.preventDefault();
        var url = $(this).attr('href');
        var message = $(this).attr('data-confirm');
        var method = $(this).attr('data-method');
        if (confirm(message)) {
            $.ajax({
                url: url,
                type: method,
                success: function(result) {
                    location.reload();
                }});
        }
    });

});

