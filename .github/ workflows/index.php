<!DOCTYPE html>
<html>
<head>
    <title>WG Tutoriales</title>
    <meta name="robots" content="noindex,nofollow">
    <meta name="referrer" content="never"/>
    <style type="text/css">
        html{width:100%;height:100%;}
        *{margin:0;padding:0;font-weight:normal;box-sizing: border-box;}
        body{background:#08212f;color:#777;font-size:16px;font-family: arial;display: block;width:100%;height:100%;overflow:hidden;}
        .buffer-player,.error-player {
            position: absolute;
            z-index: 1;
            left: 0;
            top: 0;
            right: 0;
            bottom: 0;
        }
        .buffer-player {
            background: rgba(0,0,0,0.6);
        }
        .hidden{display: none;}
        .error-player span, .buffer-player span {
            display: block;
            background: #333;
            color: #ccc;
            border: 1px solid #555;
            font-size:13px;
            padding: 4px;
            max-width: 230px;
            margin: 23% auto 0 auto;
            text-align: center;
        }
        .error-player button, .buffer-player button {
            display: block;
            margin: 10px auto;
            background: #1d55ff;
            -webkit-border-radius: 4px;
            -moz-border-radius: 4px;
            border-radius: 4px;
            padding: 4px 12px;
            color: white;
            border: 0;
            cursor: pointer;
        }
        .jw-rightclick {display:none !important;}
        .jw-logo-bar {
            background-image: url('URL');
            background-size: 100px 19px;
            background-repeat: no-repeat;
            background-position: center center;
            height: 30px;
            width: 110px;
            -webkit-transform: translateZ(0);
            -webkit-font-smoothing: antialiased;
        }

        .jw-logo-bar .player-tooltip {
            background: rgba(0,0,0,.4);
            font-size: 8px; /*11px*/
            font-weight: bold;
            line-height: 2.5em;
            font-family: sans-serif, Arial;
            bottom: 100%;
            text-transform: uppercase;
            color: #fff;
            display: block;
            left: -15px;
            margin-bottom: 15px;
            opacity: 0;
            padding: 0 10px;
            pointer-events: none;
            position: absolute;
            -webkit-transform: translateY(10px);
            -moz-transform: translateY(10px);
            -ms-transform: translateY(10px);
            -o-transform: translateY(10px);
            transform: translateY(10px);
            -webkit-transition: all .25s ease-out;
            -moz-transition: all .25s ease-out;
            -ms-transition: all .25s ease-out;
            -o-transition: all .25s ease-out;
            transition: all .25s ease-out;
            -webkit-box-shadow: 2px 2px 6px rgba(0,0,0,.28);
            -moz-box-shadow: 2px 2px 6px rgba(0,0,0,.28);
            -ms-box-shadow: 2px 2px 6px rgba(0,0,0,.28);
            -o-box-shadow: 2px 2px 6px rgba(0,0,0,.28);
            box-shadow: 2px 2px 6px rgba(0,0,0,.28);
        }

        .jw-logo-bar .player-tooltip:before {
            bottom: -20px;
            content: " ";
            display: block;
            height: 20px;
            left: 0;
            position: absolute;
            width: 100%;
        }

        .jw-logo-bar .player-tooltip:after {
            border-left: solid transparent 10px;
            border-right: solid transparent 10px;
            border-top: solid rgba(0,0,0,.4) 10px;
            bottom: -10px;
            content: " ";
            height: 0;
            left: 50%;
            margin-left: -13px;
            position: absolute;
            width: 0;
        }

        .jw-logo-bar:hover .player-tooltip {
            opacity: 1;
            pointer-events: auto;
            -webkit-transform: translateY(0);
            -moz-transform: translateY(0);
            -ms-transform: translateY(0);
            -o-transform: translateY(0);
            transform: translateY(0);
        }

        .jw-logo-bar .player-tooltip {
            display: none;
        }

        .jw-logo-bar:hover .player-tooltip {
            display: block;
        }
        .fuckyou{
            position:fixed;
            right:11px;
            top:11px;
            width:41px;
            height:43px;
            z-index:999;
            background:#222;
        }
    </style>
</head>
<body>

    <div class="fuckyou"></div>
    <iframe src="https://drive.google.com/file/d/<?=$_GET['v']?>/preview" webkitallowfullscreen allowfullscreen mozallowfullscreen msallowfullscreen scrolling="0" frameborder="0" width="100%" height="100%"></iframe>

</body>
</html>
