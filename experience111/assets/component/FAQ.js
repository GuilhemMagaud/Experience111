import React, { useState } from 'react';
import faqData from '../faqData.json';
import '../styles/FAQ.css';

function FAQ() {
  const [question, setQuestion] = useState('');
  const [answer, setAnswer] = useState('');
  const [faqList, setFaqList] = useState(faqData);

  const handleSubmit = (event) => {
    event.preventDefault();

    // Ajouter la nouvelle question à la liste des questions FAQ
    const newFaqList = [...faqList, { question: question, answer: answer }];

    // Enregistrer la nouvelle liste des questions FAQ dans un fichier JSON
    const data = JSON.stringify(newFaqList);
    const blob = new Blob([data], { type: 'application/json' });
    const url = URL.createObjectURL(blob);
    const link = document.createElement('a');
    link.href = url;
    link.download = 'faqData.json';
    link.click();

    // Réinitialiser les champs de saisie
    setQuestion('');
    setAnswer('');
    setFaqList(newFaqList);
  };

  return (
    <div className="faq-container">
      <h1 className="faq-title">FAQ</h1>
      <ul className="faq-list">
        {faqList.map((faq, index) => (
          <li key={index} className="faq-item">
            <h2 className="faq-question">{faq.question}</h2>
            <p className="faq-answer">{faq.answer}</p>
          </li>
        ))}
      </ul>
      <form className="faq-form" onSubmit={handleSubmit}>
        <label>
          Question :
          <input
            className="faq-input"
            type="text"
            value={question}
            onChange={(event) => setQuestion(event.target.value)}
          />
        </label>
        {/* <label>
          Réponse :
          <textarea
            className="faq-textarea"
            value={answer}
            onChange={(event) => setAnswer(event.target.value)}
          />
        </label> */}
        <button className="faq-button" type="submit">Ajouter</button>
      </form>
    </div>
  );
}

export default FAQ;
