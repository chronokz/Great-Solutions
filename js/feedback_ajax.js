$('#faq_form').ajaxForm({
  success: function(data){
    $('#faq_form .alert').remove();

    if (data.status == 'success')
    {
      $('#faq_form').before('<div class="alert alert-success text-center">'+data.message+'</div>');
      $('#faq_form').slideUp();
    }

    if (data.status == 'error')
    {
      var errors = '';
      for (var i in data.errors)
      {
        errors += '<li>'+data.errors[i]+'</li>';
      }
      $('#faq_form').prepend('<div class="alert alert-danger"><ul>'+errors+'</ul></div>');
    }
  }
});
