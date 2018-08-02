<?php
/**!
 * Copyright (c) 2014, Facebook, Inc.
 * All rights reserved.
 *
 * This source code is licensed under the BSD-style license found in the
 * LICENSE file in the root directory of this source tree. An additional grant
 * of patent rights can be found in the PATENTS file in the same directory.
 */

/**
 * Example of using the ReactJS class
 */

include 'ReactJS.php';

$react = file_get_contents(__DIR__ . '/build/react-bundle.js');
$app = file_get_contents(__DIR__ . '/build/app.js');
$ssr = new ReactJS($react, $app);

$props = array('data' => $page->content()->toArray());
$ssr->setComponent('App', $props);

?>

<!doctype html>
<html>
  <head>
    <title>Kirby + React SSR</title>
    <style>
      html, body {
        font-family: 'Helvetica';
      }
    </style>
  </head>
  <body>

    <!-- render server content here -->
    <div id="page"><?php echo $ssr->getMarkup(); ?></div>

    <!-- load react and app code -->
    <script src="react/build/react.min.js"></script>
    <script src="build/app.js"></script>

    <script>
    // client init/render
    // this is a straight echo of the JS because the JS resources
    // were loaded synchronously
    // You may want to load JS async and wrap the return of getJS()
    // in a function you can call later
    <?php echo $ssr->getJS('#page', "GLOB"); ?>
    </script>
  </body>
</html>
