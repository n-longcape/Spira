import React from "react";
import ReactDOM from "react-dom";

import { SearchComponent } from "./components/SearchComponent";

function App() {

    return (
        <SearchComponent />
    );
}

const rootElement = document.getElementById("search-keyword");
ReactDOM.render(<App />, rootElement);
