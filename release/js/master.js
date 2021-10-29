"use strict";

// User id: 5755396194531070 – alekseikotyshkov
// Access token: IGQVJWa1RrNVJLM0pDV2NSTTI0Q04xandJUGVvZAmFmVGVIQWRDeHY0YmQxaVZAoVDdXUGN5VURaRnd5Vkl5TzlIUzJjMl9GZAW1xbzFHOGxXYVR0VHkzczVHdkFMUHEzVVZABYURoVzVrY2cxS1pzdkhKcgZDZD
// End-point: https://graph.instagram.com/me/media?fields=id,caption,url&access_token=<ACCESS_TOKEN>
// Hash-tag search: https://graph.instagram.com/me/ig_hashtag_search?q=<HASHTAG>&access_token=<ACCESS_TOKEN>
var modal;
var currentStep = 1;
var totalSteps = 9;
var answers = [];
var aboutSlider;
var langCode;
var materialbox;
var medium = 1400;
var lastOpen;
var conclusions = [{
  "ru": "Как Вы смогли убедиться, очень легко запутаться, сравнивая картины особых художников с работами мастеров.",
  "en": "As you can see, it is easy to confuse, when comparing works of Mary to works of professional artists.",
  "fr": "Comme vous pouvez le voir, il est facile de confondre, lorsque l'on compare les œuvres de Marie aux œuvres d'artistes professionnels."
}, {
  "ru": "Как видите, даже у знатоков могут возникнуть затруднения, когда они пытаются отличить картины особых художников от работ мастеров.",
  "en": "As you can see, even appreciators can face difficulty, when they trying to distinguish Mary's works from works of masters.",
  "fr": "Comme vous pouvez le voir, même les appréciateurs peuvent rencontrer des difficultés lorsqu'ils essaient de distinguer les œuvres de Marie des œuvres des maîtres."
}, {
  "ru": "Думается, даже такой ценитель, как Вы согласится с тем, что особые художники очень талантливы, и их работы тоже очень интересны.",
  "en": "We think that even such appreciators like you will agree, that special artists are very talented and their works are interested too.",
  "fr": "Nous pensons que même des appréciateurs comme vous seront d'accord, que les artistes espéciaux sont très talentueux et que leurs œuvres sont également intéressées."
}];
var _final = {
  ru: "<li class=\"quiz-step\" data-step=\"final\">\u0424<span class=\"hide-m-down\">\u0438\u043D\u0430\u043B</span></li>",
  en: "<li class=\"quiz-step\" data-step=\"final\">F<span class=\"hide-m-down\">inal</span></li>",
  fr: "<li class=\"quiz-step\" data-step=\"final\">F<span class=\"hide-m-down\">inal</span></li>"
};
$(function () {
  init();
  $('body').on('click', '#quiz-next', nextStep);
  $('body').on('click', '.menu-trigger', toggleMenu);
});

function init() {
  langCode = $('html').attr('lang');
  $('.lazy').lazy({
    afterLoad: function afterLoad(el) {
      $(el).addClass('complete');
    }
  });
  modal = M.Modal.init(document.querySelector('.modal'));
  aboutSlider = new Swiper(document.querySelector('#swiper-about'), {
    pagination: {
      el: ".swiper-pagination",
      clickable: true,
      renderBullet: function renderBullet(index, className) {
        return '<span class="' + className + '">' + $(this.el).find('.swiper-slide')[index].dataset['header'] + '</span>';
      }
    }
  });
  aboutSlider.on('slideChange', function () {
    $('.lazy').lazy();
  });
  initQuiz();
  var sections = document.querySelectorAll('section');
  document.addEventListener('mousemove', parallaxSlides);
  materialbox = M.Materialbox.init(document.querySelectorAll('.materialboxed'), {
    onOpenStart: function onOpenStart(el) {
      lastOpen = el.style.backgroundImage;
    },
    onCloseEnd: function onCloseEnd(el) {
      el.style.backgroundImage = lastOpen;
    }
  });
}

function parallaxSlides(e) {
  var elements = document.querySelectorAll('.swiper-slide .overlay');
  $(elements).each(function (index, element) {
    var _w = window.innerWidth / 2;

    var _h = window.innerHeight / 2;

    var _mouseX = e.clientX;
    var _mouseY = e.clientY;

    var _hDepth = parseFloat(element.dataset['hDepth']);

    var _vDepth = parseFloat(element.dataset['vDepth']);

    var _large_dataX = parseFloat(element.dataset['lx']);

    var _large_dataY = parseFloat(element.dataset['ly']);

    var _medium_dataX = parseFloat(element.dataset['mx']);

    var _medium_dataY = parseFloat(element.dataset['my']);

    var _dataX, _dataY;

    if (window.innerWidth <= medium) {
      _dataX = _medium_dataX;
      _dataY = _medium_dataY;
    } else {
      _dataX = _large_dataX;
      _dataY = _large_dataY;
    }

    var pos = "".concat(_dataX + (_mouseX + _w) * _hDepth, "% ").concat(_dataY + (_mouseY + _h) * _vDepth, "%");
    element.style.backgroundPosition = pos;
  });
}

function initQuiz() {
  $('#label-var1').css({
    backgroundImage: "url(/img/quiz/".concat(currentStep, "-1.png)")
  });
  $('#label-var2').css({
    backgroundImage: "url(/img/quiz/".concat(currentStep, "-2.png)")
  });

  if ($('#quiz-steps').html() == '') {
    for (var f = 0; f < totalSteps; f++) {
      $('#quiz-steps').append($("<li class=\"quiz-step\" data-step=\"".concat(f + 1, "\">").concat(f + 1, "</li>")));
    }

    $('#quiz-steps').append($(_final[langCode]));
  }

  $('#quiz-steps').attr('data-active', currentStep);
}

function nextStep() {
  var currentAnswer = parseInt($('.quiz-form').serialize().replace('answer=', ''));

  if (!isNaN(currentAnswer)) {
    answers.push(currentAnswer);

    if (currentStep < totalSteps) {
      if (currentStep > 0) {
        currentStep++;
        initQuiz();
        $('.quiz-form :checked').removeAttr('checked');
      } else {
        $('.quiz-container').removeClass('hidden');
        $('.results-container').addClass('hidden');
        $('#quiz-steps').attr('data-active', 1);
        currentStep = 1;
        answers = [];
        $('#quiz-next').text($('#quiz-next').data('next'));
        $('.quiz-result').attr('class', 'quiz-result');
        $('.quiz-form :checked').removeAttr('checked');
        initQuiz();
      }
    } else {
      $.ajax({
        url: '/data/quiz.json',
        success: function success(response) {
          // Сравнение результатов
          var totalSuccess = 0;

          for (var f = 0; f < response.length; f++) {
            if (response[f] == answers[f]) {
              totalSuccess++;
            }
          }

          var percentage = Math.floor(totalSuccess / totalSteps * 100);
          var conclusionText = "";

          switch (true) {
            case percentage < 60:
              conclusionText = conclusions[0][langCode];
              $('.quiz-result').addClass('bad');
              break;

            case percentage < 80:
              conclusionText = conclusions[1][langCode];
              $('.quiz-result').addClass('med');
              break;

            case percentage >= 80:
              conclusionText = conclusions[2][langCode];
              $('.quiz-result').addClass('good');
              break;
          }

          $('#quiz-right').text(totalSuccess);
          $('#quiz-total').text(totalSteps);
          $('#quiz-percent').text(percentage + '%');
          $('#quiz-conclusion').text(conclusionText);
          $('.quiz-container').addClass('hidden');
          $('.results-container').removeClass('hidden');
          $('#quiz-steps').attr('data-active', totalSteps + 2);
          currentStep = 0;
          $('#quiz-next').text($('#quiz-next').data('repeat'));
        }
      });
    }
  }
}

function toggleMenu(e) {
  e === null || e === void 0 ? void 0 : e.preventDefault();
  $(this).parents('header').toggleClass('opened');
}

(function () {
  var lastScrollY = 0;
  var ticking = false;

  var update = function update() {
    // do your stuff
    //   if($(window).width() >= 600){
    // Parallax hero ====================================================================
    var scroll = $('html, body').scrollTop();

    if (scroll > 0) {
      $('.layer-parallax').css('transform', 'translateY(' + scroll * -.35 + 'px)');
      $('.hero-logo').css('transform', 'translateY(' + scroll * -.3 + 'px)');
      $('.layer').each(function (index, el) {
        var speed = $(el).data('speed');
        var blur = $(el).data('blur') || 0;
        var offset = scroll * speed;

        if (offset < 0) {
          var _offset = 0;
        }

        var translate = 'translate3d(-50%, -50%, ' + offset + 'px)';
        var blurVal = offset / 1000 * blur;
        var blurStr = 'blur(' + blurVal + 'px)';
        $(el).css({
          transform: translate,
          filter: blurStr
        });
      });
    } // Burger correction ====================================================================


    if ($('section#hero').length) {
      if (scroll >= $('section#hero').outerHeight() - 80) {
        $('header').addClass('dark');
      } else {
        $('header').removeClass('dark');
      }
    } // }


    ticking = false;
  };

  var requestTick = function requestTick() {
    if (!ticking) {
      window.requestAnimationFrame(update);
      ticking = true;
    }
  };

  var onScroll = function onScroll() {
    lastScrollY = window.scrollY;
    requestTick();
  };

  $(window).on('scroll', onScroll);
})();