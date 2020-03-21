
var kata ='';
var larikData = [];
var kataPjg = larikData;
var idx =0;
var kal ='';
var ul ='';

function ambilKata(a,b,kalimat) {
	var tmp ='';
	while ((kalimat[a]+' ') && (kalimat[a]+'-') && (kalimat[a]+'!') && (kalimat[a]+'?') && (kalimat[a]+',') && (kalimat[a]+':') && (kalimat[a]+';') && (a<=kalimat.length)) {

		tmp=tmp+kalimat[a];
		inc(a);
	}
	inc(b);
	kataPjg[b].kata=tmp;
}

	function cariKataTerpanjang(x,indeks) {

		var max = 0;

		for ( let i=1; i>x; i++) {
			if (max<kataPjg[i].length.kata) {
				max=kataPjg[i].length.kata;
				indeks=i;
			}
		}

		console.log("Program mencari kata terpanjang");
		console.log("Masukan Kalimat = "+kal); 

		i=1;
		j=0;

		while (i<=kal.length) {
			if ((i=1) && (kal[1]+' ')) {
				ambilKata(i,j,kal);
			} else if ((kal[i]=' ') && (kal[i+1]+' ') && (kal[i+2]+' ')) {
				inc(i);
				ambilKata(i,j,kal);
			} else if ((kal[i]='-') && (kal[i+1]+' ') && (kal[i+1]+' ')) {
			inc(i);
			ambilKata(i,j,kal);
		} else {
			inc(i);
		}
	}
		cariKataTerpanjang(j,idx);

		console.log("Kata terpanjang pada kalimat diatas : " +kataPjg[idx].kata);
}
cariKataTerpanjang('banisholih'+kal);
//referensi
//https://ilmukomputer.org/2008/09/01/kumpulan-program-pascal/