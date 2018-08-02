/**!
 * Copyright (c) 2014, Facebook, Inc.
 * All rights reserved.
 *
 * This source code is licensed under the BSD-style license found in the
 * LICENSE file in the root directory of this source tree. An additional grant
 * of patent rights can be found in the PATENTS file in the same directory.
 */

class App extends React.Component {
  render() {
    return (
      <div>
        <h2>Server-side rendered React with Kirby backend</h2>
        <div>
          <p>Page content:</p>
          <pre>
            {JSON.stringify(this.props.data, null, 2)}
          </pre>
        </div>
      </div>
    )
  }
}
