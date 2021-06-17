(function(){
       function buildQuiz(){
         const output = [];

         myQuestions.forEach(
           (currentQuestion, questionNumber) => {
             const answers = [];
             for(letter in currentQuestion.answers){
               answers.push(
                 `<label>
                   <input type="radio" name="question${questionNumber}" value="${letter}">
                   ${letter} :
                   ${currentQuestion.answers[letter]}
                 </label>`
               );
             }
             output.push(
               `<div class="question"> ${currentQuestion.question} </div>
               <div class="answers"> ${answers.join('')} </div>`
             );
           }
         );
         quizContainer.innerHTML = output.join('');
       }
       function showResults(){
         const answerContainers = quizContainer.querySelectorAll('.answers');
         let numCorrect = 0;
         myQuestions.forEach( (currentQuestion, questionNumber) => {
           const answerContainer = answerContainers[questionNumber];
           const selector = `input[name=question${questionNumber}]:checked`;
           const userAnswer = (answerContainer.querySelector(selector) || {}).value;
     

           if(userAnswer === currentQuestion.correctAnswer){
             numCorrect++;

             answerContainers[questionNumber].style.color = 'lightgreen';
           }
           else{
             answerContainers[questionNumber].style.color = 'red';
           }
         });
         resultsContainer.innerHTML = `${numCorrect} out of ${myQuestions.length}`;
       }
     
       const quizContainer = document.getElementById('quiz');
       const resultsContainer = document.getElementById('results');
       const submitButton = document.getElementById('submit');
       const myQuestions = [
         {
           question: "1) Hangi HTML öğesi bir belgenin başlığını tanımlar?",
           answers: {
             a: "head",
             b: "meta",
             c: "title"
           },
           correctAnswer:"c"
         },
         {
           question: "2) # işareti hangi seçiciyi belirtir?",
           answers: {
             a: "class",
             b: "id",
             c: "tag"
           },
           correctAnswer:"b"
         },
         {
           question: "3) Harici (bağlantılı) CSS kullanımında stil şablonu nerede belirtilir?",
           answers: {
             a: "body etiketinin içinde",
             b: "Sayfanın en başında",
             c: "Sayfanın en sonunda",
             d: "head../head etiketlerinin arasında"
           },
           correctAnswer:"d"
         },
         {
              question: "4) JavaScript'i hangi HTML öğesinin içine ekleriz?",
              answers: {
                a: "javascript",
                b: "script",
                c: "scripting",
                d: "js"

              },
              correctAnswer:"b"
            },
            {
              question: "5) JavaScript'te, 'MyFunction' adlı bir işlev nasıl çağırılır?",
              answers: {
                a: "call function myFunction()",
                b: "myFunction()",
                c: "call myFunction()"
              },
              correctAnswer:"b"
            }
       ];

       buildQuiz();
     
       submitButton.addEventListener('click', showResults);
     })();


     /*video slider*/
     function videoUrl(videoslider){
       document.getElementById("slider").src=videoslider;
     }