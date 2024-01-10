;(function () {
  function buildQuiz(name, contact, email) {
    // console.log(name)
    // console.log(contact)
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
        email: email,
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
        mendapatkan secara langsung hasil score card ini melalui email. Hasil Skor
        yang kamu dapat akan memberikan indikasi sebarapa siap dan cukup kamu dalam mempersiapkan jurusan/kampus yang hendak dituju.
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
      quizContainer.classList.add('hide')
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
            { label: 'Jurusan & Kampus', y: optResults[1] },
            { label: 'Biaya, Jalur Masuk & Tanggal', y: optResults[2] },
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
          question:
            '1.	Apakah Anda sudah menemukan jurusan yang benar-benar sesuai dengan minat dan bakat Anda?',
          answers: {
            a: 'Ya',
            b: 'Tidak',
          },
          correctAnswer: 'a',
        },
        {
          question:
            '2.	Apakah Anda telah melakukan riset/pencarian atau pengujian diri untuk memastikan bahwa minat Anda sejalan dengan jurusan yang dipilih?',
          answers: {
            a: 'Ya',
            b: 'Tidak',
          },
          correctAnswer: 'a',
        },
        {
          question:
            '3.	Apakah Anda sudah memiliki pengalaman atau telah terlibat dalam kegiatan yang berkaitan dengan jurusan yang diminati?',
          answers: {
            a: 'Ya',
            b: 'Tidak',
          },
          correctAnswer: 'a',
        },
        {
          question:
            '4.	Apakah Anda sudah berbicara dengan profesional atau pakar di bidang yang Anda minati untuk mendapatkan gambaran yang lebih baik tentang jurusan tersebut?',
          answers: {
            a: 'Ya',
            b: 'Tidak',
          },
          correctAnswer: 'a',
        },
        {
          question:
            '5.	Apakah Anda telah mempertimbangkan bagaimana minat dan bakat Anda akan berkontribusi terhadap kesuksesan Anda di jurusan tersebut dan dalam karir masa depan?',
          answers: {
            a: 'Ya',
            b: 'Tidak',
          },
          correctAnswer: 'a',
        },
      ],
    },
    {
      section: 'Informasi Tentang Tujuan Jurusan dan Kampus',
      questions: [
        {
          question:
            '1.	Apakah Anda sudah mengetahui prospek karir dari jurusan pilihan Anda?',
          answers: {
            a: 'Ya',
            b: 'Tidak',
          },
          correctAnswer: 'a',
        },
        {
          question:
            '2.	Apakah Anda telah meneliti akreditasi dan reputasi jurusan serta kampus tersebut?',
          answers: {
            a: 'Ya',
            b: 'Tidak',
          },
          correctAnswer: 'a',
        },
        {
          question:
            '3.	Apakah Anda sudah mengetahui fasilitas pendukung yang ditawarkan kampus untuk jurusan tersebut?',
          answers: {
            a: 'Ya',
            b: 'Tidak',
          },
          correctAnswer: 'a',
        },
        {
          question:
            '4.	Apakah Anda telah mengunjungi kampus dan berbicara dengan dosen atau mahasiswa jurusan tersebut?',
          answers: {
            a: 'Ya',
            b: 'Tidak',
          },
          correctAnswer: 'a',
        },
        {
          question:
            '5.	Apakah Anda sudah memahami visi, misi, dan nilai-nilai yang diusung oleh jurusan dan kampus tersebut?',
          answers: {
            a: 'Ya',
            b: 'Tidak',
          },
          correctAnswer: 'a',
        },
      ],
    },
    {
      section:
        'Biaya serta Jalur Masuk dan Tanggal-tanggal Penting Seleksi Masuk Perguruan Tinggi',
      questions: [
        {
          question:
            '1.	Apakah Anda sudah mengetahui estimasi biaya kuliah dan biaya hidup selama menempuh pendidikan di jurusan dan kampus tersebut?',
          answers: {
            a: 'Ya',
            b: 'Tidak',
          },
          correctAnswer: 'a',
        },
        {
          question:
            '2.	Apakah Anda sudah mengetahui berbagai jalur masuk yang tersedia di kampus pilihan Anda?',
          answers: {
            a: 'Ya',
            b: 'Tidak',
          },
          correctAnswer: 'a',
        },
        {
          question:
            '3.	Apakah Anda telah meneliti tentang beasiswa atau bantuan keuangan yang ditawarkan oleh kampus atau lembaga lain?',
          answers: {
            a: 'Ya',
            b: 'Tidak',
          },
          correctAnswer: 'a',
        },
        {
          question:
            '4.	Apakah Anda sudah mencatat tanggal-tanggal penting terkait pendaftaran dan seleksi masuk?',
          answers: {
            a: 'Ya',
            b: 'Tidak',
          },
          correctAnswer: 'a',
        },
        {
          question:
            '5.	Apakah Anda sudah mengetahui dokumen-dokumen yang dibutuhkan untuk proses pendaftaran dan seleksi masuk?',
          answers: {
            a: 'Ya',
            b: 'Tidak',
          },
          correctAnswer: 'a',
        },
      ],
    },
  ]

  let name
  let phoneNumber
  let email

  //   console.log(quizContainer.innerHTML)

  contactForm.addEventListener('submit', (e) => {
    e.preventDefault()
    name = document.getElementById('name').value
    phoneNumber = document.getElementById('wa_number').value
    email = document.getElementById('email').value
    // Kick things off
    setTimeout(function () {
      contactResult.classList.add('render-animation')
      welcome.classList.add('render-animation')
      buildQuiz(name, phoneNumber, email)
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
