
function setupFadeLinks() {
  arrFadeLinks[0] = "";
  arrFadeTitles[0] = "";
  arrFadeLinks[1] = "http://homecareassistancedenton.com/in-home-care-success-stories-denton-tx";
  arrFadeTitles[1] = "<p>'' I cannot really find the words to say how wonderful they were: highly competent, comforting and caring, endlessly patient and reassuring. ''</p><strong>- Dr. Noam Chomsky, Professor Emeritus, MIT</strong>";
  arrFadeLinks[2] = "http://homecareassistancedenton.com/in-home-care-success-stories-denton-tx";
  arrFadeTitles[2] = " <p>'' We were impressed with their balanced approach to care, and their thorough and genuine efforts to get to know my mom and find a caregiver best suited for her needs. '' </p> <strong>- Sessional Instructor, Dept. of Counseling Psychology, UBC</strong>";
  arrFadeLinks[3] = "http://homecareassistancedenton.com/in-home-care-success-stories-denton-tx";
  arrFadeTitles[3] = "<p> '' I am now more relaxed. I am now able to volunteer at my children's school. We are also able to spend more family time together without worry. ''</p><strong>- Lisa Payne, Springville, AL</strong>";
  arrFadeLinks[4] = "http://homecareassistancedenton.com/in-home-care-success-stories-denton-tx";
  arrFadeTitles[4] = "<p>'' I cannot really find the words to say how wonderful they were: highly competent, comforting and caring, endlessly patient and reassuring. ''</p><strong>- Dr. Noam Chomsky, Professor Emeritus, MIT</strong>";
  arrFadeLinks[5] = "http://homecareassistancedenton.com/in-home-care-success-stories-denton-tx";
  arrFadeTitles[5] = " <p>'' We were impressed with their balanced approach to care, and their thorough and genuine efforts to get to know my mom and find a caregiver best suited for her needs. '' </p> <strong>- Sessional Instructor, Dept. of Counseling Psychology, UBC</strong>";
  arrFadeLinks[6] = "http://homecareassistancedenton.com/in-home-care-success-stories-denton-tx";
  arrFadeTitles[6] = " <p>'' I am now more relaxed. I am now able to volunteer at my children's school. We are also able to spend more family time together without worry. '' </p><strong>- Lisa Payne, Springville, AL</strong>";
    arrFadeLinks[7] = "http://homecareassistancedenton.com/in-home-care-success-stories-denton-tx";
  arrFadeTitles[7] = "<p>'' I cannot really find the words to say how wonderful they were: highly competent, comforting and caring, endlessly patient and reassuring. ''</p><strong>- Dr. Noam Chomsky, Professor Emeritus, MIT</strong>";
  arrFadeLinks[8] = "http://homecareassistancedenton.com/in-home-care-success-stories-denton-tx";
  arrFadeTitles[8] = " <p>'' We were impressed with their balanced approach to care, and their thorough and genuine efforts to get to know my mom and find a caregiver best suited for her needs. '' </p> <strong>- Sessional Instructor, Dept. of Counseling Psychology, UBC</strong>";
  arrFadeLinks[9] = "http://homecareassistancedenton.com/in-home-care-success-stories-denton-tx";
  arrFadeTitles[9] = "<p> '' I am now more relaxed. I am now able to volunteer at my children's school. We are also able to spend more family time together without worry. ''</p><strong>- Lisa Payne, Springville, AL</strong>";
  arrFadeLinks[10] = "http://homecareassistancedenton.com/in-home-care-success-stories-denton-tx";
  arrFadeTitles[10] = "<p>'' I cannot really find the words to say how wonderful they were: highly competent, comforting and caring, endlessly patient and reassuring. ''</p><strong>- Dr. Noam Chomsky, Professor Emeritus, MIT</strong>";
  arrFadeLinks[11] = "http://homecareassistancedenton.com/in-home-care-success-stories-denton-tx";
  arrFadeTitles[11] = " <p>'' We were impressed with their balanced approach to care, and their thorough and genuine efforts to get to know my mom and find a caregiver best suited for her needs. '' </p> <strong>- Sessional Instructor, Dept. of Counseling Psychology, UBC</strong>";
  arrFadeLinks[12] = "http://homecareassistancedenton.com/in-home-care-success-stories-denton-tx";
  arrFadeTitles[12] = " <p>'' I am now more relaxed. I am now able to volunteer at my children's school. We are also able to spend more family time together without worry. '' </p><strong>- Lisa Payne, Springville, AL</strong>";
}

// control fade speed, fade color, and how fast the colors jump.

var m_FadeOut = 255;
var m_FadeIn=0;
var m_Fade = 0;
var m_FadeStep = 3;
var m_FadeWait = 8000;
var m_bFadeOut = true;

var m_iFadeInterval;

window.onload = Fadewl;

var arrFadeLinks;
var arrFadeTitles;
var arrFadeCursor = 0;
var arrFadeMax;

function Fadewl() {
  m_iFadeInterval = setInterval(fade_ontimer, 10);
  arrFadeLinks = new Array();
  arrFadeTitles = new Array();
  setupFadeLinks();
  arrFadeMax = arrFadeLinks.length-1;
  setFadeLink();
}

function setFadeLink() {
  var ilink = document.getElementById("fade_link");
  ilink.innerHTML = arrFadeTitles[arrFadeCursor];
  ilink.href = arrFadeLinks[arrFadeCursor];
}

function fade_ontimer() {
  if (m_bFadeOut) {
    m_Fade+=m_FadeStep;
    if (m_Fade>m_FadeOut) {
      arrFadeCursor++;
      if (arrFadeCursor>arrFadeMax)
        arrFadeCursor=0;
      setFadeLink();
      m_bFadeOut = false;
    }
  } else {
    m_Fade-=m_FadeStep;
    if (m_Fade<m_FadeIn) {
      clearInterval(m_iFadeInterval);
      setTimeout(Faderesume, m_FadeWait);
      m_bFadeOut=true;
    }
  }
  var ilink = document.getElementById("fade_link");
  if ((m_Fade<m_FadeOut)&&(m_Fade>m_FadeIn))
    ilink.style.color = "#" + ToHex(m_Fade);
}

function Faderesume() {
  m_iFadeInterval = setInterval(fade_ontimer, 10);
}

function ToHex(strValue) {
  try {
    var result= (parseInt(strValue).toString(16));

    while (result.length !=2)
            result= ("0" +result);
    result = result + result + result;
    return result.toUpperCase();
  }
  catch(e)
  {
  }
}



