<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Sky Programme Mood Picker</title>
    <link rel="stylesheet" href="styles.css">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
          integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Montserrat|Roboto" rel="stylesheet">
</head>
<script>
        var xhttp = new XMLHttpRequest();

        xhttp.onstatechange = function () {
            if (this.readyState === 4 && this.status === 200) {
                loadXML(this);
            }
        }
        xhttp.open("GET", "upload/programmes.xml", true);
        xhttp.send();

    function loadXML(xml) {
        var xmlDoc = xml.responseXML;
        document.getElementById("demo").innerHTML = xmlDoc.getElementsByTagName('programme')[0].childNodes[0].nodeValue;
    }

</script>
<body>

<h1>console.log(xmlDoc);</h1>

<div class="row">
    <div class="col-md-12">
        <div class="titlenav">
            <h1>Programme mood picker</h1>
        </div>
    </div>

    <div class="topnav" id="topnav">
        <a href="https://www.sky.com/" target="_blank"><img style="height: 70px;" src="images/skylogo.jpg"></a>
        <a href="#popup" style="margin-top: 20px">Help</a>
        <a href="#fileUpload" style="margin-top: 20px">File upload</a>
        <a href="javascript:void(0);" class="icon" onclick="hamburger()">&#9776;</a>
    </div>

<!--            sliders-->

<div class="container-fluid">
    <div style="text-align: center;">
        <h2 style="font-family: Montserrat"><b>What mood are you in?</b></h2>
        <br>
        <div class="row">
            <div class="col-md-2">
                <p>Agitated</p>
            </div>
            <div class="col-md-8">
                <div class="slidecontainer">
                    <input type="range" min="1" max="50" value="25" class="slider" onChange="sliderChange()"
                           id="calmSlider">
                </div>
            </div>
            <div class="col-md-2">
                <p>Calm</p>
            </div>
        </div>
        <div class="row">
            <div class="col-md-2">
                <p>Happy</p>
            </div>
            <div class="col-md-8">
                <div class="slidecontainer">
                    <input type="range" min="1" max="50" value="25" onChange="sliderChange()" class="slider"
                           id="happinessSlider">
                </div>
            </div>
            <div class="col-md-2">
                <p>Sad</p>
            </div>
        </div>

        <div class="row">
            <div class="col-md-2">
                <p>Tired</p>
            </div>
            <div class="col-md-8">
                <div class="slidecontainer">
                    <input type="range" min="1" max="50" value="25" onChange="sliderChange()" class="slider"
                           id="tiredSlider">
                </div>
            </div>
            <div class="col-md-2">
                <p>Wide Awake</p>
            </div>
        </div>
        <div class="row">
            <div class="col-md-2">
                <p>Scared</p>
            </div>
            <div class="col-md-8">
                <div class="slidecontainer">
                    <input type="range" min="1" max="50" value="25" class="slider" onChange="sliderChange()"
                           id="fearlessSlider">
                </div>
            </div>
            <div class="col-md-2">
                <p>Fearless</p>
            </div>
        </div>
        <div class="container">
            <br>
            <h4> Your suggestions:</h4>
            <br>
            <span id="result">
                    <div class="row" style="align-content: center">
                        <div class="column-md-1">
                        </div>
                    <div class="column-md-2">
                    <div class="card">No content</div>
                    </div>
                    <div class="column-md-2">
                    <div class="card">No content</div>
                    </div>
                        <div class="column-md-2">
                    <div class="card">No content</div>
                    </div>
                        <div class="column-md-2">
                    <div class="card">No content</div>
                        </div>
                        <div class="column-md-2">
                    <div class="card">No content</div>
                        </div>
                        <div class="column-md-1">
                        </div>
                    </div>
            </span>
            <br>
            <br>
            <br>
        </div>
    </div>
</body>
</html>