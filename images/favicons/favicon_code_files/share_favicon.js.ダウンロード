$(document).ready(function() {
  var container = $('#share_favicon_modal');
  var id = getFileId();

  container.find('.submit-comment-button').click(function(e) {
    e.preventDefault();
    container.find('.comment-form').fadeOut(function() {
      container.find('.spinner-container').fadeIn(function() {
        $.post('/shared_favicon', container.find('form').serialize()).done(function(data) {
          var shareForm = container.find('.share-form');
          var url = data.page_url;
          var aSharingButtonIsDisplayed = false;

          shareForm.find('.permalink').val(url);
          shareForm.find('.permalink-link').attr('href', url);

          shareForm.find('.fb-share-button-container').html(
            '<div id="fb-share-screenshot-diff-button" class="fb-share-button" ' +
            'data-layout="button" data-href="' + url + '"></div>');
          try {
            FB.XFBML.parse();
            aSharingButtonIsDisplayed = true;
          }
          catch(e) {
            shareForm.find('.fb-share-button-container').hide();
          }

          shareForm.find('.twitter-share-button-container').html(
            '<a id="twitter-share-screenshot-diff-button" href="https://twitter.com/share" ' +
              'class="twitter-share-button" data-url="' + url + '" ' +
              'data-text="Change is in the air" data-via="RealFavicon">Tweet</a>');
          try {
            twttr.widgets.load();
            aSharingButtonIsDisplayed = true;
          }
          catch(e) {
            shareForm.find('.twitter-share-button-container').hide();
          }

          shareForm.find('.linkedin-share-button-container').html(
            '<script type="IN/Share" data-url="' + url + '"></script>');
          try {
            IN.parse();
            aSharingButtonIsDisplayed = true;
          }
          catch(e) {
            shareForm.find('.linkedin-share-button-container').hide();
          }

          if (! aSharingButtonIsDisplayed) {
            shareForm.find('.share-buttons-container').hide();
          }

          container.find('.spinner-container').fadeOut(function() {
            container.find('.share-form').fadeIn();
          });
        });
      });
    });
  });
});
