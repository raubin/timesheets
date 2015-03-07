$(function() {
  // time bubble behavior
  $('.quarter-hour').click(function() {
    $(this).toggleClass('active');
  });

  // button behavior
  $('.save-sheet').click(function() {
    alert('time saved!');
  });

  // Add another entry manually
  $('.add-entry-link').click(function(e) {
    e.preventDefault();
    alert('this would add another row');
  })
});