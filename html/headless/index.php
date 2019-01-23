<!DOCTYPE html>
<html>
<head>
  <title>Using WordPress as Headless CMS</title>
</head>
<body>
  <div id="posts-list"></div>

  <!-- polyfill -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/fetch/2.0.3/fetch.min.js" charset="utf-8"></script>

  <script type="text/javascript">
    const pContain = document.getElementById('posts-list')
    fetch('http://localhost/wordpress/wp-json/wp/v2/posts')
// response
      .then(r => r.json())
      .then(posts => {
        posts.map(post => {
          const pDiv = document.createElement('div')
          pDiv.innerHTML = post.title.rendered
          pContain.appendChild(pDiv)
        })
      })
  </script>
</body>
</html>