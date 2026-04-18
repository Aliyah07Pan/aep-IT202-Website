/*
Name: Aliyah Panjon
Course: IT 202-004
Date: 04/18/2026
-- Assignment: IT-202 Phase 05 - JavaScript 
Email: aep@njit.edu
*/
function getRealTime() {
  // retrieve the DOM objects to place the content
  var domcategories = document.getElementById("categorycount");
  var domitems = document.getElementById("itemcount");
  var dombuypricetotal = document.getElementById("buypricetotal");
  var domsellpricetotal = document.getElementById("sellpricetotal");

  // send the GET request to realtime.php to retrieve the data using XMLHttpRequest
  var request = new XMLHttpRequest();
  request.open("GET", "realtime.php", true);
  request.onreadystatechange = function () {
    if (request.readyState == 4 && request.status == 200) {
      // parse the XML document to get each data element
      var xmldoc = request.responseXML;

      var xmlcategories = xmldoc.getElementsByTagName("categories")[0];
      var categories = xmlcategories.childNodes[0].nodeValue;

      var xmlitems = xmldoc.getElementsByTagName("items")[0];
      var items = xmlitems.childNodes[0].nodeValue;

      var xmlbuypricetotal = xmldoc.getElementsByTagName("buypricetotal")[0];
      var buypricetotal = xmlbuypricetotal.childNodes[0].nodeValue;

      var xmlsellpricetotal = xmldoc.getElementsByTagName("sellpricetotal")[0];
      var sellpricetotal = xmlsellpricetotal.childNodes[0].nodeValue;

      domcategories.innerHTML = categories;
      domitems.innerHTML = items;
      dombuypricetotal.innerHTML = buypricetotal;
      domsellpricetotal.innerHTML = sellpricetotal;
    }
  };
  request.send();
}