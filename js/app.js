
import Instafeed from 'instafeed.js';

// import styles
require('../assets/styles/styles.scss');

const feed = new Instafeed({
  get: 'user',
  limit: 8,
  userId: 916800866,
  accessToken: '916800866.5b88765.c9cb1c7df2a744d29376ad3ac3debce5',
  resolution: 'standard_resolution',
  template: '<div class="col-ig"><a class="d-block image" href="{{link}}"><img class="img-fluid" src="{{image}}"/></a></div>',
});

feed.run();
