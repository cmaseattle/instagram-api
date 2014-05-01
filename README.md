instagram-api
=============

These are samples of simple calls to the Instagram API for retrieving user data. The Instagram documentation describes all calls via OAuth, which is typically unecessary for GETing simple data strings of user content.

##Retrieve Necessary Parameters

####Access Token

Standard calls to the Instagram API will require a registered client, which provides you with a client ID and a client secret. These are used to generate a secure transaction between the user and the API, but that's not always necessary if the instagram data is one-way into a website as a simple feed of recent activity.

Still you'll need to register a client to generate and gain access to your `access_token`. Follow [these steps](https://github.com/svmatthews/instagram-access-token-generation) for generating your one-time access token.

####User ID

You'll have to get your user ID (or whatever user you intend to grab public information from) in order to use the above scripts. The user ID is the key element in Instagram API end-points for retreiving content.

Try using [this site](http://jelled.com/instagram/lookup-user-id#) to access user IDs, otherwise you'll see your own in the `curl` request if you followed the steps above for generating your access token.

##Current Examples

**Javascript** - uses jQuery ajax call and success statement

**PHP** - uses the PHP curl standard for making a call to the API