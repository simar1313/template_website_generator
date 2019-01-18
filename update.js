$('#input_data').on('submit', function() {
  var that = $(this),
  url = that.attr('action'),
  type = that.attr('method'),
  insert_data = {};

  that.find('[name]').each(function(index, value) {
    var that = $(this),
        name = that.attr('name'),
        value = that.val();


    insert_data[name] = value;
  });
  console.log(insert_data);
  $.ajax({
    url: url,
    type: type,
    data: insert_data,
    success: function(response) {
      console.log(response);
      alert('Updated Successfully');

    }
  });

  return false;
});
