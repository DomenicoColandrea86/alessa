import Instafeed from 'instafeed.js';

// base styles
require('./styles/styles.scss');

const feed = new Instafeed({
  get: 'user',
  limit: 10,
  userId: 4296320287,
  accessToken: '4296320287.4a13f84.71915b7dfa234193a6831e84ee035624',
  resolution: 'standard_resolution',
  template: '<div class="col-ig"><a class="d-block image" href="{{link}}"><img class="img-fluid" src="{{image}}"/></a></div>',
});

feed.run();
