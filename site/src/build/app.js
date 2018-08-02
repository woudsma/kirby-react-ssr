/**!
 * Copyright (c) 2014, Facebook, Inc.
 * All rights reserved.
 *
 * This source code is licensed under the BSD-style license found in the
 * LICENSE file in the root directory of this source tree. An additional grant
 * of patent rights can be found in the PATENTS file in the same directory.
 */

if (!global.setTimeout) global.setTimeout = null

class App extends React.Component {
  render() {
    return React.createElement(
      "div",
      null,
      React.createElement(
        "h2",
        null,
        "Server-side rendered React with Kirby backend"
      ),
      React.createElement(
        "div",
        null,
        React.createElement(
          "p",
          null,
          "Page content:"
        ),
        React.createElement(
          "pre",
          null,
          JSON.stringify(this.props.data, null, 2)
        )
      )
    );
  }
}
