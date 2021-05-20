<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8" />
    <title>Login</title>
    <link rel="stylesheet" href="./assets/stylesheets/index.css" type="text/css">

    <link rel="shortcut icon" href="../favicon.ico">
    <link rel="stylesheet" type="text/css" href="css/demo.css" />
    <link rel="stylesheet" type="text/css" href="css/style3.css" />
    <link rel="stylesheet" type="text/css" href="css/animate-custom.css" />
</head>

<body>
    <div>

        <h1>Login and Registration Form </h1>
        <nav class="codrops-demos">
            <span>Click
          <strong>"Join us"</strong> to see the form switch</span>
        </nav>
        </header>
        <section>
            <div>

                <!-- <a class="hiddenanchor" id="toregister"></a> -->
                <!-- <a class="hiddenanchor" id="tologin"></a> -->
                <div>
                    <div id="login">
                        <form action="connect.php" method="POST">
                            <fieldset>
                                <section>
                                    <h1>Log in</h1>
                                    <p>
                                        <!-- <label for="username" class="uname" data-icon="u"> Your username </label> -->
                                        <input id="username" name="username" required="required" type="text" placeholder="myusername" />
                                    </p>
                                    <p>
                                        <!-- <label for="password" class="youpasswd" data-icon="p"> Your password </label> -->
                                        <input id="password" name="password" required="required" type="password" placeholder="password" />
                                    </p>
                                    <!-- <p class="keeplogin">

                                        <input type="checkbox" name="loginkeeping" id="loginkeeping" value="loginkeeping" />&nbsp;
                                        <label for="loginkeeping">Keep me logged in</label>
                                    </p> -->
                                    <p class="login button">
                                        <input id=" Submitbuttonlogin" name="submit" class="btn" type="submit" value="Login">Login</input></p>

                                    </p>
                                    <br><br>
                                    <p class="change_link">
                                        Not a member yet ?
                                        <a href="signup.php" class="to_register">Join us</a>
                                    </p>
                                </section>
                            </fieldset>
                        </form>
                    </div>

                </div>
            </div>
        </section>
    </div>
    <!-- JS includes -->
    <script type="text/javascript">
        if (document.location.protocol != 'https:') document.write('\x3Cscript src="http://musecdn.businesscatalyst.com/scripts/4.0/jquery-1.8.3.min.js" type="text/javascript">\x3C/script>');
    </script>
    <script type="text/javascript">
        window.jQuery || document.write('\x3Cscript src="scripts/jquery-1.8.3.min.js" type="text/javascript">\x3C/script>');
    </script>
    <script src="scripts/museutils.js?3790713428" type="text/javascript"></script>
    <script src="scripts/whatinput.js?84559013" type="text/javascript"></script>
    <script src="scripts/jquery.musemenu.js?238543590" type="text/javascript"></script>
    <script src="scripts/jquery.watch.js?4244854265" type="text/javascript"></script>
    <script src="scripts/webpro.js?329496574" type="text/javascript"></script>
    <script src="scripts/musewpslideshow.js?394033048" type="text/javascript"></script>
    <script src="scripts/jquery.museoverlay.js?4265131668" type="text/javascript"></script>
    <script src="scripts/touchswipe.js?497316881" type="text/javascript"></script>
    <!-- Other scripts -->
    <script type="text/javascript">
        $(document).ready(function() {
            try {
                (function() {
                    var a = {},
                        b = function(a) {
                            if (a.match(/^rgb/)) return a = a.replace(/\s+/g, "").match(/([\d\,]+)/gi)[0].split(","), (parseInt(a[0]) << 16) + (parseInt(a[1]) << 8) + parseInt(a[2]);
                            if (a.match(/^\#/)) return parseInt(a.substr(1), 16);
                            return 0
                        };
                    (function() {
                        $('link[type="text/css"]').each(function() {
                            var b = ($(this).attr("href") || "").match(/\/?css\/([\w\-]+\.css)\?(\d+)/);
                            b && b[1] && b[2] && (a[b[1]] = b[2])
                        })
                    })();
                    (function() {
                        $("body").append('<div class="version" style="display:none; width:1px; height:1px;"></div>');
                        for (var c = $(".version"), d = 0; d < Muse.assets.required.length;) {
                            var f = Muse.assets.required[d],
                                g = f.match(/([\w\-\.]+)\.(\w+)$/),
                                k = g && g[1] ? g[1] : null,
                                g = g && g[2] ? g[2] : null;
                            switch (g.toLowerCase()) {
                                case "css":
                                    k = k.replace(/\W/gi, "_").replace(/^([^a-z])/gi, "_$1");
                                    c.addClass(k);
                                    var g = b(c.css("color")),
                                        h = b(c.css("background-color"));
                                    g != 0 || h != 0 ? (Muse.assets.required.splice(d, 1), "undefined" != typeof a[f] && (g != a[f] >>> 24 || h != (a[f] & 16777215)) && Muse.assets.outOfDate.push(f)) : d++;
                                    c.removeClass(k);
                                    break;
                                case "js":
                                    k.match(/^jquery-[\d\.]+/gi) &&
                                        typeof $ != "undefined" ? Muse.assets.required.splice(d, 1) : d++;
                                    break;
                                default:
                                    throw Error("Unsupported file type: " + g);
                            }
                        }
                        c.remove();
                        if (Muse.assets.outOfDate.length || Muse.assets.required.length) c = "Some files on the server may be missing or incorrect. Clear browser cache and try again. If the problem persists please contact website author.", (d = location && location.search && location.search.match && location.search.match(/muse_debug/gi)) && Muse.assets.outOfDate.length && (c += "\nOut of date: " + Muse.assets.outOfDate.join(",")), d && Muse.assets.required.length && (c += "\nMissing: " + Muse.assets.required.join(",")), alert(c)
                    })()
                })();
                /* body */
                Muse.Utils.transformMarkupToFixBrowserProblemsPreInit(); /* body */
                Muse.Utils.prepHyperlinks(true); /* body */
                Muse.Utils.resizeHeight('.browser_width'); /* resize height */
                Muse.Utils.requestAnimationFrame(function() {
                    $('body').addClass('initialized');
                }); /* mark body as initialized */
                Muse.Utils.fullPage('#page'); /* 100% height page */
                Muse.Utils.initWidget('.MenuBar', ['#bp_infinity'], function(elem) {
                    return $(elem).museMenu();
                }); /* unifiedNavBar */
                Muse.Utils.initWidget('#slideshowu362', ['#bp_infinity'], function(elem) {
                    var widget = new WebPro.Widget.ContentSlideShow(elem, {
                        autoPlay: true,
                        displayInterval: 3500,
                        slideLinkStopsSlideShow: false,
                        transitionStyle: 'fading',
                        lightboxEnabled_runtime: false,
                        shuffle: false,
                        transitionDuration: 500,
                        enableSwipe: true,
                        elastic: 'off',
                        resumeAutoplay: true,
                        resumeAutoplayInterval: 3000,
                        playOnce: false,
                        autoActivate_runtime: false
                    });
                    $(elem).data('widget', widget);
                    return widget;
                }); /* #slideshowu362 */
                Muse.Utils.initWidget('#slideshowu487', ['#bp_infinity'], function(elem) {
                    var widget = new WebPro.Widget.ContentSlideShow(elem, {
                        autoPlay: true,
                        displayInterval: 3500,
                        slideLinkStopsSlideShow: false,
                        transitionStyle: 'fading',
                        lightboxEnabled_runtime: false,
                        shuffle: false,
                        transitionDuration: 500,
                        enableSwipe: true,
                        elastic: 'off',
                        resumeAutoplay: true,
                        resumeAutoplayInterval: 3000,
                        playOnce: false,
                        autoActivate_runtime: false
                    });
                    $(elem).data('widget', widget);
                    return widget;
                }); /* #slideshowu487 */
                Muse.Utils.initWidget('#widgetu296', ['#bp_infinity'], function(elem) {
                    return new WebPro.Widget.Form(elem, {
                        validationEvent: 'submit',
                        errorStateSensitivity: 'high',
                        fieldWrapperClass: 'fld-grp',
                        formSubmittedClass: 'frm-sub-st',
                        formErrorClass: 'frm-subm-err-st',
                        formDeliveredClass: 'frm-subm-ok-st',
                        notEmptyClass: 'non-empty-st',
                        focusClass: 'focus-st',
                        invalidClass: 'fld-err-st',
                        requiredClass: 'fld-err-st',
                        ajaxSubmit: true
                    });
                }); /* #widgetu296 */
                Muse.Utils.showWidgetsWhenReady(); /* body */
                Muse.Utils.transformMarkupToFixBrowserProblems(); /* body */
            } catch (e) {
                if (e && 'function' == typeof e.notify) e.notify();
                else Muse.Assert.fail('Error calling selector function:' + e);
            }
        });
    </script>
</body>

</html>