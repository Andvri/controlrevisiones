import React, { Component } from 'react';
import ReactDOM from 'react-dom';

export default class Example extends Component {
    render() {
        return (
            <div className="container">
            <div className="row">
                <div className="col-lg-8 mx-md-auto">
                    <div className="card">
                        <div className="card-header">Example Component</div>
                        <div className="card-body">I&apos;m an example component!</div>
                    </div>
                </div>
            </div>
        </div>
        );
    }
}

if (document.getElementById('example')) {
    ReactDOM.render(<Example />, document.getElementById('example'));
}
