<!DOCTYPE html>
<html>
<head>
  <title>The Headless Knight</title>
</head>
<body>

  <!-- below: the javascript will write the content in #post-list -->
  <div id="posts-list"></div>

  <!-- polyfill -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/fetch/2.0.3/fetch.min.js" charset="utf-8"></script>

  <script type="text/javascript">
    /*
      Here is Uzayr's original script from the article.
      It will print the post titles on the webpage.
      By a similar methods you could write out post content, pages etc. etc.
    */
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