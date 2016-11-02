// JQuery Twitter Feed. Coded by Tom Elliott (Web Dev Door) www.webdevdoor.com (2013)
//UPDATED TO AUTHENTICATE TO API 1.1
(function($) {  
    $(document).ready(function () {
        var displaylimit = 10;
        var twittersearchtitle = "Custom twitter search";
        var showretweets = false;
        var showtweetlinks = true;
        var autorefresh = false;
        var refreshinterval = 60000; //Time to autorefresh tweets in milliseconds. 60000 milliseconds = 1 minute
        var refreshtimer;
         
        $('#twitterwall').addClass('loading');
          
         if (autorefresh == true) {
            refreshtimer = setInterval(gettwitterjson, refreshinterval); 
         }  
          
         gettwitterjson();
          
        function gettwitterjson() { 
            $.getJSON('php/twitter.php', 
                function(feeds) {
                   feeds = feeds.statuses; //search returns an array of statuses
                    //alert(feeds);   
                    var feedHTML = '<div class="arrow"></div>';
                    var displayCounter = 1;  
                    for (var i=0; i<feeds.length; i++) {
                        var tweetscreenname = feeds[i].user.name;
                        var tweetusername = feeds[i].user.screen_name;
                        var profileimage = feeds[i].user.profile_image_url_https;
                        var status = feeds[i].text; 
                        var isaretweet = false;
                        var isdirect = false;
                        var tweetid = feeds[i].id_str;
                         
                        //If the tweet has been retweeted, get the profile pic of the tweeter
                        if(typeof feeds[i].retweeted_status != 'undefined'){
                           profileimage = feeds[i].retweeted_status.user.profile_image_url_https;
                           tweetscreenname = feeds[i].retweeted_status.user.name;
                           tweetusername = feeds[i].retweeted_status.user.screen_name;
                           tweetid = feeds[i].retweeted_status.id_str
                           isaretweet = true;
                         };
                          
                          
                         if (((showretweets == true) || ((isaretweet == false) && (showretweets == false)))) { 
                            if ((feeds[i].text.length > 1) && (displayCounter <= displaylimit)) {             
                                if (showtweetlinks == true) {
                                    status = addlinks(status);
                                }
                                              
                                feedHTML += '<div class="twitter-article">';                  
								feedHTML += '<div class="twitter-pic"><a href="https://twitter.com/'+tweetusername+'" ><img src="'+profileimage+'"images/twitter-feed-icon.png" width="42" height="42" alt="twitter icon" /></a></div>';
								feedHTML += '<div class="twitter-user"><a href="https://twitter.com/'+tweetusername+'" >'+tweetscreenname+'</a><span class="tweet-time"> <a href="https://twitter.com/'+tweetusername+'/status/'+tweetid+'">'+relative_time(feeds[i].created_at)+'</a></span></div><div class="twitter-text">'+status+'</div>';
                                feedHTML += '</div>';
                                displayCounter++;
                            }   
                         }
                    }
                    $('#twitterwall').removeClass('loading');
                    $('#twitterwall').html(feedHTML);
					
					var tweets = $('#twitterwall > .twitter-article');
					tweets.hide();
					var currentTweetIndex = 0;
					$(tweets[0]).show();
					
					function switchTweet() {
						$(tweets[currentTweetIndex]).fadeOut(function () {
							(currentTweetIndex + 1 < tweets.length) ? currentTweetIndex++ : currentTweetIndex = 0;
							$(tweets[currentTweetIndex]).fadeIn();
						});
					}
					
					setInterval(switchTweet, 10000);
            });
        }
              
        //Function modified from Stack Overflow
        function addlinks(data) {
            //Add link to all http:// links within tweets
            data = data.replace(/((https?|s?ftp|ssh)\:\/\/[^"\s\<\>]*[^.,;'">\:\s\<\>\)\]\!])/g, function(url) {
                return '<a href="'+url+'" >'+url+'</a>';
            });
                  
            //Add link to @usernames used within tweets
            data = data.replace(/\B@([_a-z0-9]+)/ig, function(reply) {
                return '<a href="http://twitter.com/'+reply.substring(1)+'" style="font-weight:lighter;" >'+reply.charAt(0)+reply.substring(1)+'</a>';
            });
            return data;
        }
          
          
        function relative_time(time_value) {
          var values = time_value.split(" ");
          time_value = values[1] + " " + values[2] + ", " + values[5] + " " + values[3];
          var parsed_date = Date.parse(time_value);
          var relative_to = (arguments.length > 1) ? arguments[1] : new Date();
          var delta = parseInt((relative_to.getTime() - parsed_date) / 1000);
          var shortdate = time_value.substr(4,2) + " " + time_value.substr(0,3);
          delta = delta + (relative_to.getTimezoneOffset() * 60);
          
          if (delta < 60) {
            return 'vor 1 Minute';
          } else if(delta < 120) {
            return 'vor 1 Minute';
          } else if(delta < (60*60)) {
            return (parseInt(delta / 60)).toString() + ' Minuten';
          } else if(delta < (120*60)) {
            return 'vor 1 Stunde';
          } else if(delta < (24*60*60)) {
            return ('vor ' + parseInt(delta / 3600)).toString() + ' Stunden';
          } else if(delta < (48*60*60)) {
            //return '1 day';
            return shortdate;
          } else {
            return shortdate;
          }
        }
    });
})(jQuery);