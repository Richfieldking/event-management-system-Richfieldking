<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Event Description</title>
    <link rel="stylesheet" href="/assets/stylesheets/index.css" type="text/css">

</head>

<body>
    <ul>
        <li>
            <a href="index.html">TheEventBooker</a>
        </li>
        <li><a href="signup.html">Sign-Up</a></li>
        <li><a href="EventHost.html">Host an Event</a></li>
        <li><a href="contact-me.html">Contact US</a></li>
        <li><a href="about.asp">About</a></li>
    </ul>
    <form class="container">
        <fieldset>
            <section>
                <p>Select an image as a banner for your event</p>
                <i>
              <svg xmlns="http://www.w3.org/2000/svg" width="1000" height="500" fill="currentColor" class="bi bi-image-fill" viewBox="0 0 16 16">
                  <path d="M.002 3a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v10a2 2 0 0 1-2 2h-12a2 2 0 0 1-2-2V3zm1 9v1a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1V9.5l-3.777-1.947a.5.5 0 0 0-.577.093l-3.71 3.71-2.66-1.772a.5.5 0 0 0-.63.062L1.002 12zm5-6.5a1.5 1.5 0 1 0-3 0 1.5 1.5 0 0 0 3 0z"/>
                </svg>
              </i>

                <p><input type="file"></p>
                <p class="form group form-control-lg">
                    <label for="exampleFormControlTextarea5">Event Description</label>
                    <p>Give a brief description about your event to help participants distinguish between similar events</p>
                    <br><textarea class="form-control" id="exampleFormControlTextarea5" rows="9" cols="100"></textarea>

                    <br>
                    <p>
                        <p></p><input class="btn" type="button" onclick="window.location.replace('Event description.html')" value="Save and Continue" /></p>
                    <p><input class="btn" type="button" onclick="window.location.replace('EventHost.html')" value="Cancel" /></p>
                </p>
            </section>
        </fieldset>

    </form>

</body>

</html>