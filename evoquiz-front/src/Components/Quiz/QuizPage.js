import React from 'react';
import {
    useParams
  } from "react-router-dom";

const QuizPage = () => {

    let { id } = useParams();

    return (
        <div>
            Quiz play for Quiz {id}
        </div>
    );
};

export default QuizPage;