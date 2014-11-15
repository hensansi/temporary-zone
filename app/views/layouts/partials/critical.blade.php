<style>
/* base.scss PUT VISIBILITY IN JAVASCRITP */

.enhanced{
	visibility: hidden;
}

html, body { font-family: sans-serif; font-weight: 400; z-index: 0; height: 100%; 
 }

html, body, div, h1, h2, h3, ul, p { margin: 0; padding: 0; border: 0; }

a { color: #000; border-bottom: 1px dotted #000; text-decoration: none; background-color: #FFF; }

a:hover { color: #00F; border-bottom: 1px dotted #00F; }

.header { font-size: 1.5em; margin-left: 10%; margin-top: 4%; padding-bottom: 4%; }

.header h1 { padding-bottom: 0.2em; color: #00F; }

.nav { font-size: 1.5em; font-weight: 200; }

.nav ul { list-style-type: none; }

.nav li { display: inline-block; }

li + li { margin-left: 0.5em; }

img { width: 100%; }

.container { font-size: 1.5em; margin-left: 10%; width: 80%; }

.stripe__subinfo { margin-left: 0px; background: rgba(255, 255, 255, 0.5); cursor: default; font-size: 0.8em; font-weight: 400; color: rgba(50, 50, 50, 0.95); padding-top: 0.5%; padding-right: 0.4em; padding-bottom: 0.2em; }

.stripe a { display: inline-block; height: 100%; border: none; }

.stripe__thumbnail { min-height: 100%; width: 0px; float: left; clear: both; }

.stripe__title { border-bottom: none; margin-left: 0px; color: rgba(50, 50, 50, 0.95); background: rgba(255, 255, 255, 0.75); font-size: 1.4em; font-weight: 500; padding: 0.25em 0.4em 0.25em 0em; line-height: 120%; }

.stripe { margin-bottom: 10%; text-transform: uppercase; }

.box p { font-size: 1.375em; font-weight: 300; line-height: 145%; }

.box--full-height { position: relative; z-index: 5; padding-bottom: 4em; }

.box--full-height h2 { font-weight: 500; font-size: 1.375em; padding: 0em 1em 0em 0px; text-transform: uppercase; }

.box--full-height h3 { font-weight: 500; text-transform: uppercase; font-size: 0.9em; padding: 1em 1em 0em 0px; }

.box--full-height h3:last-child { padding-top: 3em; }

.box--full-height p { line-height: 145%; background: none; font-size: 1.375em; font-weight: 300; z-index: 1; }

{
"version": 3,
"mappings": ";AAKA,UAAU,GACR,WAAW,EAAE,UAAU,EACvB,WAAW,EAAE,GAAG,EAChB,OAAO,EAAC,CAAC,EACT,MAAM,EAAE,IAAI;;AAGd,kCAA2B,GACzB,MAAM,EAAE,CAAC,EACT,OAAO,EAAE,CAAC,EACV,MAAM,EAAE,CAAC;;AAGX,CAAC,GACC,KAAK,EAAE,IAAI,EACX,aAAa,EAAE,eAAe,EAC9B,eAAe,EAAE,IAAI,EACrB,gBAAgB,EAAE,IAAI;;AAGxB,OAAO,GACL,KAAK,EClBS,IAAI,EDmBlB,aAAa,EAAE,eAAyB;;AAI1C,OAAO,GACL,SAAS,EAAE,KAAK,EAChB,WAAW,EAAE,GAAG,EAChB,UAAU,EAAC,EAAE,EACb,cAAc,EAAC,EAAE;;AAInB,UAAU,GACR,cAAc,EAAC,KAAK,EACpB,KAAK,ECjCS,IAAI;;ADoCpB,IAAI,GACF,SAAS,EAAE,KAAK,EAChB,WAAW,EAAC,GAAG;;AAGjB,OACA,GACE,eAAe,EAAE,IAAI;;AAGvB,OAAO,GACL,OAAO,EAAC,YAAY;;AAGtB,OAAO,GACH,WAAW,EAAC,KAAK;;AAIrB,GAAG,GACD,KAAK,EAAC,IAAI;;AAGZ,UAAU,GACR,SAAS,EAAC,KAAK,EACf,WAAW,EAAE,GAAG,EAChB,KAAK,EAAC,GAAG;;AAKX,gBAAgB,GACd,WAAW,EAJI,GAAG,EAKlB,UAAU,EAAE,wBAAwB,EACpC,MAAM,EAAE,OAAO,EACf,SAAS,EAAE,KAAK,EAChB,WAAW,EAAE,GAAG,EAChB,KAAK,EARK,sBAAmB,EAS7B,WAAW,EAAE,IAAI,EACjB,aAAa,EAAE,KAAK,EACpB,cAAc,EAAE,KAAK;;AAGvB,SAAS,GACP,OAAO,EAAC,YAAY,EACpB,MAAM,EAAE,IAAI,EACZ,MAAM,EAAE,IAAI;;AAKd,kBAAkB,GAChB,UAAU,EAAE,IAAI,EAChB,KAAK,EAzBU,GAAG,EA0BlB,KAAK,EAAC,IAAI,EACV,KAAK,EAAC,IAAI;;AAIZ,cAAc,GACZ,aAAa,EAAE,IAAI,EACnB,WAAW,EAjCI,GAAG,EAkClB,KAAK,EAjCK,sBAAmB,EAkC7B,UAAU,EAAE,yBAAyB,EACrC,SAAS,EAAE,KAAK,EAChB,WAAW,EAAE,GAAG,EAChB,OAAO,EAAE,uBAAuB,EAChC,WAAW,EAAE,IAAI;;AAInB,OAAO,GACL,aAAa,EAAE,GAAG,EAClB,cAAc,EAAE,SAAS;;AAI3B,MAAM,GACJ,SAAS,EAAE,OAAO,EAClB,WAAW,EAAC,GAAG,EACf,WAAW,EAAE,IAAI;;AAInB,iBAAiB,GACf,QAAQ,EAAE,QAAQ,EAClB,OAAO,EAAE,CAAC,EACV,cAAc,EAAC,GAAG;;AAGpB,oBAAoB,GAClB,WAAW,EAAE,GAAG,EAChB,SAAS,EAAE,OAAO,EAClB,OAAO,EAAE,eAAe,EACxB,cAAc,EAAE,SAAS;;AAE3B,oBAAoB,GAClB,WAAW,EAAE,GAAG,EAChB,cAAc,EAAE,SAAS,EACzB,SAAS,EAAE,KAAK,EAChB,OAAO,EAAE,eAAe;;AAG1B,+BAA+B,GAC7B,WAAW,EAAE,GAAG;;AAIlB,mBAAmB,GACjB,WAAW,EAAE,IAAI,EACjB,UAAU,EAAE,IAAI,EAChB,SAAS,EAAE,OAAO,EAClB,WAAW,EAAE,GAAG,EAChB,OAAO,EAAE,CAAC",
"sources": ["../core.scss","../../../home/vagrant/code/portfolio.dev/app/assets/sass/_variables.scss"],
"names": [],
"file": "core.css"
}
</style>

