// js폴더에넣고하셔야합니다!!!

function check_pw(){  //비밀번호 확인 
  var pw1 = form.u_pw1.value;
  var pw2 = form.u_pw2.value;
    if ( pw1 != pw2 ) { 
      document.getElementById('pw_check_msg').innerHTML = "비밀번호가 다릅니다."; 
    } 
    else { 
        document.getElementById('pw_check_msg').innerHTML = ""; 
    } 
    if (pw2=="") { 
      document.getElementById('pw_check_msg').innerHTML = ""; 
    } 
  } 
function checked() {
  if (!checku_id(form.u_id.value)) {
      return false;
  }
  if (!checku_pw(form.u_id.value, form.u_pw1.value, form.u_pw2.value)) {
      return false;
  }
  if (!checkemail(form.email.value)) {
      return false;
  }
  if (!checkName(form.u_name.value)) {
      return false;
  }
  return true;
}

// 공백확인 함수
function checkExistData(value, dataName) {
  if (value == "") {
      alert(dataName + " 입력해주세요!");
      return false;
  }
  return true;
}

function checku_id(id) {
  //Id가 입력되었는지 확인하기
  if (!checkExistData(id, "아이디를"))
      return false;

  var idRegExp = /^[a-zA-z0-9]{4,12}$/; //아이디 유효성 검사
  if (!idRegExp.test(id)) {
      alert("아이디는 영문 대소문자와 숫자 4~12자리로 입력해야합니다!");
      form.u_id.value = "";
      form.u_id.focus();
      return false;
  }
  return true; //확인이 완료되었을 때
}

function checku_pw(id, u_pw1, u_pw2) {
  //비밀번호가 입력되었는지 확인하기
  if (!checkExistData(u_pw1, "비밀번호를"))
      return false;
  //비밀번호 확인이 입력되었는지 확인하기
  if (!checkExistData(u_pw2, "비밀번호 확인을"))
      return false;

  var u_pw1RegExp = /^[a-zA-z0-9]{4,12}$/; //비밀번호 유효성 검사
  if (!u_pw1RegExp.test(u_pw1)) {
      alert("비밀번호는 영문 대소문자와 숫자 4~12자리로 입력해야합니다!");
      form.u_pw1.value = "";
      form.u_pw1.focus();
      return false;
  }
  //비밀번호와 비밀번호 확인이 맞지 않다면..
  if (u_pw1 != u_pw2) {
      alert("두 비밀번호가 맞지 않습니다.");
      form.u_pw1.value = "";
      form.u_pw2.value = "";
      form.u_pw2.focus();
      return false;
  }

  //아이디와 비밀번호가 같을 때..
  if (id == u_pw1) {
      alert("아이디와 비밀번호는 같을 수 없습니다!");
      form.u_pw1.value = "";
      form.u_pw2.value = "";
      form.u_pw2.focus();
      return false;
  }
  return true; //확인이 완료되었을 때
}

function checkemail(email) {
  //email이 입력되었는지 확인하기
  if (!checkExistData(email, "이메일을"))
      return false;

  var eemailRegExp = /^[A-Za-z0-9_]+[A-Za-z0-9]*[@]{1}[A-Za-z0-9]+[A-Za-z0-9]*[.]{1}[A-Za-z]{1,3}$/;
  if (!eemailRegExp.test(email)) {
      alert("이메일 형식이 올바르지 않습니다!");
      form.email.value = "";
      form.email.focus();
      return false;
  }
  return true; //확인이 완료되었을 때
}

function checkName(name) {
  if (!checkExistData(name, "이름을")){
      return false;
    }
  var nameRegExp = /^[가-힣]{2,4}$/;
  if (!nameRegExp.test(name)) {
      alert("이름이 올바르지 않습니다.");
      return false;
  }
  return true; //확인이 완료되었을 때
}