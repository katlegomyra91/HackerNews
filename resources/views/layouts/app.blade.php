<html lang="en">
<head>
    <meta name="referrer" content="origin">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="{{ asset('style.css') }}">
    <link rel="shortcut icon" href="{{ asset('favicon.ico') }}">
    <title>Hacker News</title></head>
<body>
<center>
    <table id="hnmain" border="0" cellpadding="0" cellspacing="0" width="85%" bgcolor="#f6f6ef">
        <tbody>
        <tr>
            <td bgcolor="#ff6600">
                <table border="0" cellpadding="0" cellspacing="0" width="100%" style="padding:2px">
                    <tbody>
                    <tr>
                        <td style="width:18px;padding-right:4px">
                            <a href="https://news.ycombinator.com">
                                <img src="{{ asset('y18.gif') }}" width="18" height="18" style="border:1px white solid;">
                            </a>
                        </td>
                        <td style="line-height:12pt; height:10px;">
                            <span class="pagetop">
                                <b class="hnname"><a href="news">Hacker News</a></b>
                                <a href="newest">new</a> |
                                <a href="front">past</a> |
                                <a href="newcomments">comments</a> |
                                <a href="ask">ask</a> |
                                <a href="show">show</a> |
                                <a href="jobs">jobs</a> |
                                <a href="submit">submit</a>
                            </span>
                        </td>
                        <td style="text-align:right;padding-right:4px;">
                            <span class="pagetop">
                                <a href="login?goto=news">login</a>
                            </span>
                        </td>
                    </tr>
                    </tbody>
                </table>
            </td>
        </tr>
        <tr id="pagespace" title="" style="height:10px"></tr>
        @yield('content')
        <tr>
            <td>
                <img src="s.gif" height="10" width="0">
                <table width="100%" cellspacing="0" cellpadding="1">
                    <tbody>
                    <tr>
                        <td bgcolor="#ff6600"></td>
                    </tr>
                    </tbody>
                </table>
                <br>
                <center>
                    <span class="yclinks">
                        <a href="newsguidelines.html">Guidelines</a>|
                        <a href="newsfaq.html">FAQ</a>|
                        <a href="mailto:hn@ycombinator.com">Support</a>|
                        <a href="https://github.com/HackerNews/API">API</a>|
                        <a href="security.html">Security</a>|
                        <a href="lists">Lists</a>|
                        <a href="bookmarklet.html" rel="nofollow">Bookmarklet</a>|
                        <a href="http://www.ycombinator.com/legal/">Legal</a>|
                        <a href="http://www.ycombinator.com/apply/">Apply to YC</a>|
                        <a href="mailto:hn@ycombinator.com">Contact</a>
                    </span>
                    <br>
                    <br>
                    <form method="get" action="//hn.algolia.com/">
                        Search:
                        <input type="text" name="q" value="" size="17" autocorrect="off" spellcheck="false" autocapitalize="off" autocomplete="false">
                    </form>
                </center>
            </td>
        </tr>
        </tbody>
    </table>
</center>
<script type="text/javascript" src="{{ asset('main.js') }}"></script>
</body>
</html>
