function verif()
{
    e = f.email.value;
    p1 = e.indexOf('@');
 	p2 = e.lastIndexOf('.');
 	ch1 = e.substr(0,p1);
 	ch2 = e.substr(p1+1, p2 - p1 - 1);
 	ch3 = e.substr(p2+1, e.length - p2 - 1);
 	if (!est_alphanumerique(ch1) ||  !est_alpha(ch2) || !est_alpha(ch3) || (ch3.length != 3 && ch3.length != 2))	
 	{
 		alert('Le champ email est invalide !!');
 		return false;
 	}
    md = f.mdp.value;
    if(md =="" || !est_alphanumerique(md))
    {
        alert("Le champ mot de pass est invalide");
        return false;
     }
    else if(md.length < 8)
    {
        alert("Votre mot de pass est faible");
        return false;
    }    
}
function verif1()
{   
    e = f1.email.value;
    p1 = e.indexOf('@');
	p2 = e.lastIndexOf('.');
	ch1 = e.substr(0,p1);
	ch2 = e.substr(p1+1, p2 - p1 - 1);
	ch3 = e.substr(p2+1, e.length - p2 - 1);
	if (!est_alphanumerique(ch1) ||  !est_alpha(ch2) || !est_alpha(ch3) || (ch3.length != 3 && ch3.length != 2))	
	{
		alert('Le champ email est invalide !!');
		return  false();
	}
    n=f1.nom.value;
    if( n == ""|| n.charAt(0) < "A" || n.charAt(0) > "Z" )
    {
        alert("La premier caractére de votre nom doit être en majuscule");
        return  false();
    }
    else if ( !est_alpha(n))    
    {
        alert("Votre nom est invalide!");
        return  false();
    }
    p = f1.prenom.value;
    if(  p == ""||  p.charAt(0) < "A" || p.charAt(0) > "Z" )
    {
        alert("La premier caractére de votre prenom doit être en majuscule");
        return  false();
    }
    else if (!est_alpha(p))    
    {
        alert("Votre prenom est invalide!");
        return  false();
    }
    md1 = f1.mdp1.value;
    if(md1 =="" || !est_alphanumerique(md1))
    {
        alert("Le champ mot de pass est invalide");
        return  false();
    }
    else if(md1.length < 8)
    {
        alert("Votre mot de pass est faible");
        return  false();
    }
    md2 = f1.mdp2.value;     
    if(md2 != md1)
    {
        alert("Votre mot de pass est incorrect");
        return  false();
    }
    d=f1.date.value;
    if(!est_date(d))
    {
        alert("Date doit être sous la forme JJ/MM/AAAA");
        return  false();
    }
    a=f1.age.value;
    if(isNaN(a) || a != calc_age(a))
    {
        alert("Votre age est invalide");
        return  false();
    }
    if(!f1.C1.checked)
	{
		alert('acceptez-vous les termes et conditions?');
		return  false();
	} 
}

function est_alphanumerique(ch)
{
	ch = ch.toUpperCase();
	for(i=0;i<ch.length;i++)
	{
		c = ch.charAt(i);
		if((c < 'A' || c > 'Z') && (c < '0' || c > '9') && c != '.' && c != '-' && c != '_')
			return false;
	}
	
	return true;
}

function calc_age()
{
    dat = f1.date.value;
    if(!est_date(dat))
    {
        alert("Date doit être sous la forme JJ/MM/AAAA");
        return false;
    }
    d = new Date();
    date = f1.date.value;
    a = date.substr(6, 4);
    m = date.substr(3, 2);
    j = date.substr(0, 2);
    da = d.getFullYear() - a;
    f1.age.value = d.getMonth()+1 ;
    if (m < d.getMonth()+1) //getMonth() Renvoie le mois (entre 0 et 11)
    {
        f1.age.value = da ;
        return(da);
    }
    else if (m == d.getMonth()+1) 
    {
        if(j <= d.getDate())
        {
        f1.age.value = da ;
        return(da);
        }
        else
        {
        f1.age.value = da-1;
        return(da-1);
        } 
    }
    else 
    {
        f1.age.value = da-1;
        return(da-1);
    }    
}

function est_alpha(ch)
{
	ch = ch.toUpperCase();
	for(i=0;i<ch.length;i++)
	{
		c = ch.charAt(i);
		if(c < 'A' || c > 'Z')
			return false;
	}
	
	return true;
}


function est_date(d)
{
	j = d.substr(0, 2); 
	m = d.substr(3, 2);	
	a = d.substr(6, 4);		
	if(d.charAt(2) != '/' || d.charAt(5) != '/' || 
		d.length != 10 || isNaN(j) || isNaN(m) ||
		isNaN(a))
	{
		return false;
	}
		
	switch(Number(m))
	{
		case 1:
		case 3:
		case 5:
		case 7:
		case 8:
		case 10:
		case 12:
		{
			nbj = 31;
			break;
		}
		case 4:
		case 6:
		case 9:
		case 11:
		{
			nbj = 30;
			break;
		}
		case 2:
		{
			if (a % 4 == 0)
				nbj = 29;
			else
				nbj = 28;
			break;
		}
		default :
			return false;
	}

	if (j < 1 || j > nbj)
			return false;
		
		
	return true;
}