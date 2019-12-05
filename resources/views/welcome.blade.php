<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        <!-- Styles -->
        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Nunito', sans-serif;
                font-weight: 200;
                height: 100vh;
                margin: 0;
            }

            .full-height {
                height: 100vh;
            }

            .flex-center {
                display: flex;
                align-items: center;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 84px;
            }

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 13px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }

            .portfolio {
                margin-top: 1vh;
                width: 100%;
                min-height: 500px;
                background: #ccc;
            }
        </style>
        <link href="{{asset('css/prism.css')}}" rel="stylesheet">

    </head>
    <body>
        <div class="flex-center position-ref full-height">
            @if (Route::has('login'))
                <div class="top-right links">
                    @auth
                        <a href="{{ url('/home') }}">Home</a>
                    @else
                        <a href="{{ route('login') }}">Login</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}">Register</a>
                        @endif
                    @endauth
                </div>
            @endif

            <div class="content">
                <div class="title m-b-md" id="typewriter">
                    Robert Fridzema
                </div>

                <div class="links">
                    <a href="https://github.com/fridzema">Github</a>
                    <a href="https://stackoverflow.com/users/1811518/robert-fridzema">Stackoverflow</a>
                    <a href="https://www.linkedin.com/in/fridzema">Linkedin</a>
                    <a href="https://twitter.com/fridzema">Twitter</a>
                    <a href="https://instagram.com/fridzema">Instagram</a>
                </div>
            </div>
        </div>
        <div class="portfolio">
            <pre><code class="language-json">
              {
                "Country": "Netherlands",
                "City": "Rotterdam",
                "Languages": "Dutch/English",
                "Social": {
                    "Github": {
                        "description": "",
                        "url": "https://github.com/fridzema",
                        "followers": null,
                        "following": null,
                        "commits": null,
                        "pull_requests": null,
                        "repositories": null
                    },
                    "Stackoverflow": {
                        "description": ""
                    },
                    "Linkedin": {
                        "description": ""
                    },
                    "Twitter": {
                        "description": ""
                    },
                    "Instagram": {
                        "description": ""
                    }
                },
                "string": "Hello World"
            }
                
</code></pre>





    <div>terminal questions</div>
        </div>


        <script src="{{asset('js/prism.js')}}"></script>
        <script>
        	document.addEventListener('DOMContentLoaded',function(event){
  // array with texts to type in typewriter
  var dataText = [ "Robert Fridzema", "Rotterdam.", "Development", "Photography"];
  
  // type one text in the typwriter
  // keeps calling itself until the text is finished
  function typeWriter(text, i, fnCallback) {
    // chekc if text isn't finished yet
    if (i < (text.length)) {
      // add next character to h1
     document.getElementById("typewriter").innerHTML = text.substring(0, i+1) +'<span aria-hidden="true"></span>';

      // wait for a while and call this function again for next character
      setTimeout(function() {
        typeWriter(text, i + 1, fnCallback)
      }, 100);
    }
    // text finished, call callback if there is a callback function
    else if (typeof fnCallback == 'function') {
      // call callback after timeout
      setTimeout(fnCallback, 700);
    }
  }
  // start a typewriter animation for a text in the dataText array
   function StartTextAnimation(i) {
     if (typeof dataText[i] == 'undefined'){
        setTimeout(function() {
          StartTextAnimation(0);
        }, 20000);
     }
     // check if dataText[i] exists
    if (i < dataText[i].length) {
      // text exists! start typewriter animation
     typeWriter(dataText[i], 0, function(){
       // after callback (and whole text has been animated), start next text
       StartTextAnimation(i + 1);
     });
    }
  }
  // start the text animation
  StartTextAnimation(0);
});
            
            </script>
    </body>
</html>
