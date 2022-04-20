<body>
    <div class="footer">
  <h2>Footer</h2>
</div>
</body
</html>
<script>

function loadForm(form, href, callback) {
  console.log(form);
  var formData = new FormData(document.getElementById(form));
  var xhr = new XMLHttpRequest();
  xhr.onload = function() {
    if (this.readyState == 4 && this.status == 200) {
      callback(this);
    }
  };
  xhr.open("POST", href, true);
  xhr.send(formData);
}

  function loadPage(href, callback) {
  var xhr = new XMLHttpRequest();
  xhr.onload = function() {
    if (this.readyState == 4 && this.status == 200) {
      callback(this);
    }
  };
  xhr.open("GET", href, true);
  xhr.send();
}

function sendToContent(result) {
  console.log(result);
  return document.getElementById('content').innerHTML = result.response;
}
</script>