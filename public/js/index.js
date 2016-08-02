$(window, document, undefined).ready(function() {
  var i = 1;
  $('#add').click(function(){
    i++;
    $('#add_field').append('<tr id="row'+i+'"> <td> <div class="group"> <input type="text" name="name[]" placeholder="Enter Field Name"><span class="highlight"></span><span class="bar"></span></div> </td> <td> <button type="button" id="'+i+'" class="btn btn-danger delete" >-</button> </td> </tr> </table>');
  });
  $(document).on('click','.delete',function(){
    var btn = $(this).attr("id");
    $('#row'+btn+'').remove();
  });
  $('#submit').click(function(){
    //sets up  csrf token attribute in the request header.
    $.ajaxSetup({
      headers: { 'X-CSRF-Token' : $('meta[name=_token]').attr('content') }
    });
    $.ajax({
      url: 'submit',
      method: "POST",
      data: $('#myForm').serialize(),
      success: function(data)
      {
        console.log(data);
      }
    })
  });
  $('input').blur(function() {
    var $this = $(this);
    if ($this.val())
      $this.addClass('used');
    else
      $this.removeClass('used');
  });

  var $ripples = $('.ripples');

  $ripples.on('click.Ripples', function(e) {

    var $this = $(this);
    var $offset = $this.parent().offset();
    var $circle = $this.find('.ripplesCircle');

    var x = e.pageX - $offset.left;
    var y = e.pageY - $offset.top;

    $circle.css({
      top: y + 'px',
      left: x + 'px'
    });

    $this.addClass('is-active');

  });

  $ripples.on('animationend webkitAnimationEnd mozAnimationEnd oanimationend MSAnimationEnd', function(e) {
  	$(this).removeClass('is-active');
  });

});