function toggleExplanation(explanationId) {
    var explanation = document.getElementById(explanationId);

    if (explanation) {
        if (explanation.style.display === 'none' || explanation.style.display === '') {
            explanation.style.display = 'block';
          
        } else {
            explanation.style.display = 'none';
           
        }
    } else {
        console.error('Explanation element not found.');
    }
}
