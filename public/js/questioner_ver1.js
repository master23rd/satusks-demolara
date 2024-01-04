;(function () {
  function buildQuiz(name, contact) {
    console.log(name)
    console.log(contact)
    // variable to store the HTML output
    const questions = []

    // for each question...
    //value, index
    myQuestions.forEach((currentSection, sectionNumber) => {
      const output = []

      // and for each available answer...
      //for (questionList in currentSection.questions) {
      currentSection.questions.forEach((currentQuestion, questionNumber) => {
        // variable to store the list of possible answers
        const answers = []

        for (letter in currentQuestion.answers) {
          // console.log(letter)
          // console.log(currentSection.questions[questionList].question)
          // ...add an HTML radio button
          answers.push(
            `<label>
                <input type="radio" name="question${sectionNumber}_${questionNumber}" value="${letter}">
                ${letter} :
                ${currentQuestion.answers[letter]}
              </label>`
          )
        }
        // add this question and its answers to the output
        output.push(
          `<div class="question" id="question${sectionNumber}_${questionNumber}"> ${
            currentQuestion.question
          } </div>
          <div class="answers" id="answer${sectionNumber}_${questionNumber}"> ${answers.join(
            ''
          )} </div>`
        )
      })
      questions.push(
        `<h1>${currentSection.section}</h1>
          ${output.join('')}
          `
      )
    })

    // finally combine our output list into one string of HTML and put it on the page
    quizContainer.innerHTML = questions.join('')
  }

  function showResults() {
    // gather answer containers from our quiz
    // const answerContainers = quizContainer.querySelectorAll('.answers')
    // console.log(answerContainers)
    // keep track of user's answers
    let notfilled = false
    const results = []
    const emptyForm = []

    myQuestions.forEach((currentSection, sectionNumber) => {
      let numCorrect = 0

      // for each question...
      currentSection.questions.forEach((currentQuestion, questionNumber) => {
        // find selected answer
        const answerSelector = `div[id=answer${sectionNumber}_${questionNumber}]`
        const answerContainer = quizContainer.querySelector(answerSelector)
        const questionSelector = `div[id=question${sectionNumber}_${questionNumber}]`
        const questionContainer = quizContainer.querySelector(questionSelector)

        const selector = `input[name=question${sectionNumber}_${questionNumber}]:checked`
        const userAnswer = (answerContainer.querySelector(selector) || {}).value

        if (typeof userAnswer === 'undefined') {
          notfilled = true
          questionContainer.style.color = 'red'
        } else {
          questionContainer.style.color = 'black'
        }
        // // if answer is correct
        if (userAnswer === currentQuestion.correctAnswer) {
          // add to the number of correct answers
          numCorrect++

          // color the answers green
          // answerContainer.style.color = 'lightgreen'
        }
        // // if answer is wrong or blank
        // else {
        //   // color the answers red
        //   answerContainer.style.color = 'red'
        // }
      })

      results[sectionNumber] = numCorrect
      // show number of correct answers out of total
      // resultsContainer.innerHTML = `${numCorrect} out of ${myQuestions.length}`
    })
    if (notfilled) {
      alert('setiap pertanyaan wajib diisi ya atau tidak')
      return
    }
    generatedPdf(results)
    renderResult(results)
  }

  function generatedPdf(results) {
    //const routes = "{{route('generated_pdf')}}"
    $.ajaxSetup({ headers: { csrftoken: '{{ csrf_token() }}' } })
    console.log(results)
    $.ajax({
      type: 'POST',
      url: '/generated-pdf',
      data: {
        _token: csrf,
        results: results,
        name: name,
        phoneNumber: phoneNumber,
      },
      xhrFields: {
        responseType: 'blob',
      },
      success: function (response) {
        let blob = new Blob([response])
        let link = document.createElemenet('a')
        link.href = window.URL.createObjectURL(blob)
        link.download = 'scorecard.pdf'
        link.click()
      },
      error: function (blob) {
        console.log(blob)
      },
    })
  }

  function renderResult(results) {
    let renderScore = `
      <h3>
        Selamat! Berikut adalah hasil jawab kamu sebelumnya
      </h3>
      <p>
        Sebelumnya, kamu diminta untuk mengisi data diri agar hasil score card
        dapat lebih relevan. Setelah score card ini diisi, kamu akan
        mendapatkan secara langsung hasil score card ini melalui email. Skor
        maksimal adalah 23/23 yang memberikan indikasi bahwa kamu cukup
        memiliki pengetahuan mengenai jurusan/kampus yang hendak dituju.
      </p>
      <p>
        Selain itu, kamu akan mendapatkan tambahan uraian analisa dari hasil
        score card ini melalui WA/email. Setelah itu instruksi pembayaran dan
        workshop akan kamu peroleh.
      </p>
      <p>Terima kasih</p>
      <p>Pak Chris (081288985786), jika ada pertanyaan silahkan WA</p>`

    let renderContact = `
      <div class="column">
          <div class="column-1">
            <div id="chartContainer"></div>
          </div>
        </div>
      </div>`

    introResult.classList.add('pre-animation')
    resultsContainer.classList.add('pre-animation')

    // timed to match animation-duration
    setTimeout(function () {
      // questionareContainer.style.display = 'none'
      questionareContainer.classList.add('pre-animation')
      // Smooth Scrolling

      $('html, body').animate(
        {
          scrollTop: $('.hero').offset().top - 100,
        },
        800
      )

      introResult.classList.remove('pre-animation')
      resultsContainer.classList.remove('pre-animation')
      introResult.innerHTML = renderScore
      resultsContainer.innerHTML = renderContact
      pieChart(results)
    }, 700)

    //$('#chartContainer').CanvasJSChart(options)
  }

  function pieChart(optResults) {
    const chartScore = document.getElementById('chartContainer')

    chartScore.style.height = '300px'
    chartScore.style.width = '100%'
    console.log(optResults)
    var options = {
      title: {
        text: 'Scorecard Results',
      },
      data: [
        {
          type: 'pie',
          startAngle: 45,
          showInLegend: 'true',
          legendText: '{label}',
          indexLabel: '{label} ({y})',
          yValueFormatString: '#,##0.#' % '',
          dataPoints: [
            { label: 'Minat & Bakat', y: optResults[0] },
            { label: 'Akademis', y: optResults[1] },
          ],
        },
      ],
    }
    //return options
    $('#chartContainer').CanvasJSChart(options)
  }
  const questionareContainer = document.getElementById('questioner')
  const quizContainer = document.getElementById('quiz')
  const resultsContainer = document.getElementById('results')
  const submitButton = document.getElementById('submit')
  const introQuiz = document.getElementById('intro-quiz')
  const introResult = document.getElementById('scorecard')

  const welcome = document.getElementById('welcome')
  const contactResult = document.getElementById('contact')
  const contactForm = document.getElementById('contact_form')
  const myQuestions = [
    {
      section: 'Minat & Bakat',
      questions: [
        {
          question: 'Apa Hobi Kamu adalah membaca ?',
          answers: {
            a: 'Ya',
            b: 'Tidak',
          },
          correctAnswer: 'a',
        },
        {
          question: 'Apa Hobi Kamu adalah membaca ?',
          answers: {
            a: 'Ya',
            b: 'Tidak',
          },
          correctAnswer: 'a',
        },
        // {
        //   question: 'Apa Hobi Kamu adalah membaca ?',
        //   answers: {
        //     a: 'Ya',
        //     b: 'Tidak',
        //   },
        //   correctAnswer: 'a',
        // },
        // {
        //   question: 'Apa Hobi Kamu adalah membaca ?',
        //   answers: {
        //     a: 'Ya',
        //     b: 'Tidak',
        //   },
        //   correctAnswer: 'a',
        // },
      ],
    },
    {
      section: 'Akademis',
      questions: [
        {
          question: 'Apa kamu pernah menjadi juara kelas ?',
          answers: {
            a: 'Ya',
            b: 'Tidak',
          },
          correctAnswer: 'a',
        },
        {
          question: 'Apa kamu pernah menjadi juara kelas ?',
          answers: {
            a: 'Ya',
            b: 'Tidak',
          },
          correctAnswer: 'a',
        },
        // {
        //   question: 'Apa kamu pernah menjadi juara kelas ?',
        //   answers: {
        //     a: 'Ya',
        //     b: 'Tidak',
        //   },
        //   correctAnswer: 'a',
        // },
        // {
        //   question: 'Apa kamu pernah menjadi juara kelas ?',
        //   answers: {
        //     a: 'Ya',
        //     b: 'Tidak',
        //   },
        //   correctAnswer: 'a',
        // },
        // {
        //   question: 'Apa kamu pernah menjadi juara kelas ?',
        //   answers: {
        //     a: 'Ya',
        //     b: 'Tidak',
        //   },
        //   correctAnswer: 'a',
        // },
      ],
    },
  ]

  let name
  let phoneNumber

  //   console.log(quizContainer.innerHTML)

  contactForm.addEventListener('submit', (e) => {
    e.preventDefault()
    name = document.getElementById('name').value
    phoneNumber = document.getElementById('wa_number').value
    // Kick things off
    setTimeout(function () {
      contactResult.classList.add('render-animation')
      welcome.classList.add('render-animation')
      buildQuiz(name, phoneNumber)
      submitButton.style.display = 'inline-block'
      // introQuiz.style.display = 'block'
      $('html, body').animate(
        {
          scrollTop: $('.hero').offset().top - 100,
        },
        800
      )
    }, 700)
  })

  // introQuiz.style.display = 'none'
  submitButton.style.display = 'none'

  // Event listeners
  submitButton.addEventListener('click', showResults)
})()
