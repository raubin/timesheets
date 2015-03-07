// defines draggable behavior using jQuery UI

(function($) {
  $(document).ready(function() {
    // this adds a ui-draggable class to items that are draggable
    // when dragging, it gets .ui-draggable-dragging
    $('.jira-list li').draggable({
      appendTo: '.time-entry'
    });
  });
})(jQuery);