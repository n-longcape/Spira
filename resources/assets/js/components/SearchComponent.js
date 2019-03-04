import React from "react";

export class SearchComponent extends React.Component {
    constructor(props) {
        super(props);
        this.state = {
            searchWord: "",
            isProcessing: false,
            searchedList: [],
            alertMessage: "",
            isAddMode: false
        };
    }

    render() {
        const { searchWord } = this.state;
        return (
                // <form onSubmit={this.SubmitHandler}>
                <form>
                    <input
                    type="text"
                    value={searchWord}
                    name="word"
                    onChange={e => this.ChangeHandler(e)}
                    />
                    <input type="submit" value="test" />
                </form>
        );
    }

    ChangeHandler(e) {
        console.log(e.target.value);
        const word = e.target.value;
        this.setState({ searchWord: word });
    }
}