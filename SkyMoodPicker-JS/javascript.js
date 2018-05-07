function loadXMLDoc() {
    var xmlhttp = new XMLHttpRequest();
    xmlhttp.onreadystatechange = function () {
        if (this.readyState == 4 && this.status == 200) {
            printResult(this);
        }
    };
    xmlhttp.open("GET", "uploads/programmes.xml", true);
    xmlhttp.send();
}

function printResult(xml) {
    var programme, i, xmlDoc;
    xmlDoc = xml.responseXML;
    programme = "";
    image = "";
    programmeList = xmlDoc.getElementsByTagName("name");
    imageList = xmlDoc.getElementsByTagName('img_path');
    for (i = 0; i < programmeList.length; i++) {
        programme += programmeList[i].childNodes[0].nodeValue + "<br>";
        programme += "<img src='" + imageList[i].childNodes[0].nodeValue + "' />";
    }
    document.getElementById("result-test").innerHTML = programme;
}

function sliderChange() {
    var xhttp = new XMLHttpRequest();
    xhttp.onreadystatechange = function () {
        if (this.readyState === 4 && this.status === 200) {
            document.getElementById("result-test").innerHTML = this.responseText;
        }
    };
    var calmnessVal = document.getElementById("calmSlider").value;
    var happinessVal = document.getElementById("happinessSlider").value;
    var tiredVal = document.getElementById("tiredSlider").value;
    var fearlessVal = document.getElementById("fearlessSlider").value;

    xhttp.open("GET", "HomePage.html?calmnessVal=" + calmnessVal + '&happinessVal=' + happinessVal + '&tiredVal=' + tiredVal + "&fearlessVal=" + fearlessVal, true);
    xhttp.send();
}

function hamburger() {
    var x = document.getElementById("topnav");
    if (x.className === "topnav") {
        x.className += " responsive";
    } else {
        x.className = "topnav";
    }
}