function validateForm(){  
    var email=document.myform.email.value;  
    var nimi=document.myform.nimi.value;
    var subject=document.myform.subject.value;
    var puhnmr=document.myform.puhnmr.value;
    var text=document.myform.text.value;

    var msg = document.querySelector('.msg');
    var msgy = document.querySelector('.msgy');
    var msgk = document.querySelector('.msgk');
    var msgkk = document.querySelector('.msgkk');
    var msgn = document.querySelector('.msgn');


    if (email==null || email==""){
        msg.innerHTML = 'Ole hyvä ja täytä sähköposti osoite';  
        return false;
    }else if (nimi==null || nimi==""){  
        msgy.innerHTML = 'Ole hyvä ja täytä nimikenttä';  
        return false;
    }else if (subject==null || subject==""){  
        msgk.innerHTML = 'Ole hyvä ja täytä aihekenttä';  
        return false;
    }else if (isNaN(puhnmr)){  
        msgkk.innerHTML = 'Ole hyvä ja täytä oikea puhelinnumero';  
        return false;
    }else if (puhnmr.length<10){  
        msgkk.innerHTML = 'Ole hyvä ja täytä puhelinnumero... 10 numeroa';  
        return false;
    }else if (text==null || text==""){  
        msgn.innerHTML = 'Ole hyvä ja täytä tekstikenttä';  
        return false;
    }
    
}  