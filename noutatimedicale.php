<?php
    include('header.php');
?>
<body>

    <?php include('navhead.php'); ?>

        <div class="container">
            <div class="row-fluid">
                
                <div class="span3">

                    <div class="hero-unit-3">
                        <div class="alert-index alert-success">
                            <i class="icon-calendar icon-large"></i>
                            <?php
                            $Today = date('y:m:d');
                            $new = date('d F Y', strtotime($Today));
                            echo $new;
                            ?>
                        </div>
                    </div>

                    <div class="hero-unit-1">
                        <ul class="nav  nav-pills nav-stacked">
                            <li class="nav-header">Links</li>
                            <li><a href="index.php"><i class="icon-home icon-large"></i>&nbsp;Home
                                    <div class="pull-right">
                                        <i class="icon-double-angle-right icon-large"></i>
                                    </div> 
                                </a>
                            </li>

                            <li><a href="servicii.php"><i class="icon-medkit icon-large"></i>&nbsp;Servicii
                                    <div class="pull-right">
                                        <i class="icon-double-angle-right icon-large"></i>
                                    </div> 
                                </a>                
                            </li>

                            <li class="active"><a href="noutatimedicale.php"><i class="icon-plus-sign-alt icon-large"></i>&nbsp;Noutati medicale
                                    <div class="pull-right">
                                        <i class="icon-double-angle-right icon-large"></i>
                                    </div> 
                                </a>                
                            </li>

                            <li><a href="contact.php"><i class="icon-envelope-alt icon-large"></i>&nbsp;Contact
                                    <div class="pull-right">
                                        <i class="icon-double-angle-right icon-large"></i>
                                    </div> 
                                </a>                
                            </li>

							<li ><a href="linkuri.php"><i class="icon-external-link"></i>&nbsp;Link-uri utile
                                    <div class="pull-right">
                                        <i class="icon-double-angle-right icon-large"></i>
                                    </div> 
                                </a>                
                            </li>
							
                            <li><a  href="#prezentareaplicatie" role="button" data-toggle="modal"><i class="icon-sitemap icon-large"></i>&nbsp;Prezentare aplicatie
                                    <div class="pull-right">
                                        <i class="icon-double-angle-right icon-large"></i>
                                    </div> 
                                </a>
                            </li>

                            <li class="nav-header">Tipuri de utilizatori</li>

                            <li><a  href="#admin" role="button" data-toggle="modal"><i class="icon-user icon-large"></i>&nbsp;Administrator
                                    <div class="pull-right">
                                        <i class="icon-double-angle-right icon-large"></i>
                                    </div> 
                                </a>
                            </li>
                            <li><a href="#operator" role="button" data-toggle="modal"><i class="icon-android icon-large"></i>&nbsp;Operator
                                    <div class="pull-right">
                                        <i class="icon-double-angle-right icon-large"></i>
                                    </div> 
                                </a>
                            </li>
                            <li><a href="#medic" role="button" data-toggle="modal"><i class="icon-user-md icon-large"></i>&nbsp;Medic
                                    <div class="pull-right">
                                        <i class="icon-double-angle-right icon-large"></i>
                                    </div> 
                                </a>
                            </li>
                            <li><a href="#pacient" role="button" data-toggle="modal"><i class="icon-male icon-large"></i>&nbsp;Pacient
                                    <div class="pull-right">
                                        <i class="icon-double-angle-right icon-large"></i>
                                    </div> 
                                </a>
                            </li>                        
                        </ul>
                    </div>

                    <br />
                    <div class="hero-unit-3">
                        <div class="alert alert-success"><i class="icon-bullhorn icon-large"></i>&nbsp;<strong>Misunea Medclinic</strong></div>
                        <div class="hero-unit-2">
                            <ul>
                                <li>îmbunătăţirea fluxului de lucru din clinica medicală;</li>
                                <li>gestionarea unui volum mare de informaţii medicale despre pacienţi;</li>
                                <li>eliminarea dosarelor fizice în interiorul instituţiei;</li>
                                <li>informaţiile sunt disponibile, în timp real, personalului medical;</li>
                                <li>sporeşte securitatea informaţiei.</li>
                            </ul>                                
                        </div>
                    </div>
                </div>

                <div class="span9">
                    <div class="hero-unit-3">
                        <div class="alert alert-success"><i class="icon-plus-sign-alt icon-large"></i>&nbsp;<strong>Noutati medicale</strong></div>
                            <div class="hero-unit-2">
                                 <div class="tabbable tabs-left">
                                  <ul class="nav nav-tabs">
                                    <li class="active"><a href="#pane1" data-toggle="tab">Sughitul</a></li>
                                    <li><a href="#pane2" data-toggle="tab">Igiena somnului </a></li>
                                    <li><a href="#pane3" data-toggle="tab">Tensiunea intraoculara</a></li>
                                    <li><a href="#pane4" data-toggle="tab">Glaucomul</a></li>
                                    <li><a href="#pane5" data-toggle="tab">Osteoporoza</a></li>
                                  </ul>
                                  <div class="tab-content">
                                    <div id="pane1" class="tab-pane active">
                                      <h4>Sughitul</h4>
                                      <p> 
<img alt="Sughitul " align="right" src="images/sughit.jpg" title="Sughitul " class="img-polaroid">
   Sughitul este o contractie involuntara a diafragmului (muschi ce separa toracele de abdomen si joaca un rol important in respiratie), urmata de inchiderea brusca a corzilor vocale, producand sunetul caracteristic.
De obicei, sughitul dureaza doar cateva minute, rareori putand avea durata mai mare. Sughitul cu durata peste 48 de ore poate fi :

<p>•   sughit persistent - criza de sughit cu durata mai mare de 48 de ore
<p>•   sughit refractar (nu raspunde la tratament) - criza de sughit cu durata mai mare de 1 luna
Aceste doua forme sunt foarte rare si de obicei consecinta unei afectiuni asociate.
Sughitul poate sa apara la orice varsta, inclusiv la copii, afectand in mod egal cele doua sexe. Din motive necunoscute insa, sughitul persistent si refractar apar mai frecvent la barbati.
De cele mai multe ori, sughitul apare fara o cauza evidenta. Este considerat normal si nu trebuie sa fie un motiv de ingrijorare.
Cauzele cele mai frecvente ale sughitului cu durata scurta sunt :
<p>•   fumatul excesiv
<p>•   mancatul prea rapid cu inghitirea concomitenta a unei mari cantitati de aer
<p>•   excesele alimentare (in special grasimi, condimente) si consumul unor cantitati mari de alcool sau bauturi carbogazoase, care determina distensia gastrica si iritatia diafragmului
<p>•   schimbarea brusca a temperaturii din camera
<p>•   schimbarea brusca a temperaturii din interiorul stomacului (ingestia unei bauturi fierbinti, urmata de ingestia unei bauturi reci)
<p>•   anxietatea si stressul
<p>•   accesul de tuse sau plans la copiii cu varsta sub 1 an
<p>Cauzele sughitului cu durata peste 48 de ore sunt :
<p>•   cel mai frecvent lezarea sau iritarea nervilor vag sau frenic (care inerveaza diafragmul), ce pot aparea in refluxul gastro-esofagian, ulcer peptic, gastrita, laringita, tumori sau chisturi cervicale, chirurgia abdominala, afectiuni pulmonare sau hepatice
<p>•   afectiunii ale sistemului nervos central : accidentul vascular cerebral, tumori, infectii (meningita, encefalita), leziuni traumatice cerebrale
<p>•   afectiunii metabolice : diabetul zaharat, insuficienta renala, tulburari electrolitice, hipoglicemia
<p>•   medicamente : anestezice, tranchilizante, barbiturice, steroizi
<p>Diagnosticul se bazeaza pe examinarea fizica. Daca se suspicioneaza ca sughitul reprezinta un simptom al unei boli asociate pot fi necesare o serie de investigatii suplimentare pentru decelarea cauzei : teste de sange / urina, endoscopie digestiva superioara, radiografie toracica, CT, RMN, EKG.
<p>Sughitul este rareori o urgenta medicala, cele mai multe cazuri rezolvandu-se de la sine in scurt timp. Adresati-va doctorului daca sughitul dureaza peste 48 ore, daca determina tulburari ale somnului, mancatului sau respiratiei; de asemenea, daca se asociaza cu durere abdominala, febra, varsaturi, tuse cu sange.
<p>Complicatiile sunt foarte rare si apar in cazurile de sughit sever, persistent :
<p>•   scadere ponderala
<p>•   tulburari ale somnului si ale vorbirii
<p>•   reflux gastroesofagian
<p>•   tulburari de ritm cardiac
<p>•   incetinirea vindecarii plagilor operatorii
<p>Tratamentul sughitului este rareori necesar, in majoritatea cazurilor sughitul oprindu-se spontan in scurt timp.
<p>Exista o serie de remedii ce pot fi incercate pentru a opri sughitul :
<p>•   tineti-va respiratia o scurta perioada de timp
<p>•   respirati intr-o punga de hartie
<p>•   faceti gargara cu apa rece
<p>•   beti repede un pahar cu apa
<p>•   beti suc de lamaie sau otet
<p>•   puneti jumatate de lingurita de zahar granulat la baza limbii (daca e necesar repetati de 3 ori la interval de 2 minute)
<p>•   mirositi saruri aromate
<p>•   trageti genunghii la piept sau aplecati-va in fata pentru a comprima pieptul
<p>Daca sughitul este cauzat de o anumita afectiune asociata, tratamentul acesteia va rezolva problema.</p>
<p>Pentru sughitul cu durata mai mare de doua zile, pot fi luate in considerare urmatoarele optiunii terapeutice (daca s-a exclus o afectiune asociata) :</p>
<p>•   administrarea unor medicamente la recomandarea medicului gastroenterolog
<p>•   blocajul anestezic al nervului frenic
<p>•   implantarea chirurgicala a unui stimulator electric al nervului vag
<p>•   sectionarea chirurgicala a nervului frenic - rar utilizata
Pentru sughitul care nu raspunde la alte modalitati terapeutice pot fi incercate metode alternative, ca acupunctura si hipnoza.
                                      </p>
                                    </div>
                                    <div id="pane2" class="tab-pane">
                                    <h4>Igiena somnului</h4>
                                      <p> 
Intr-o lume in care fiecare dintre noi traim la intensitate maxima stresul zilnic, stilul de viata dezorganizat, fara un ritual al somnului, reprezinta cea mai frecventa cauza a dificultatilor de adormire sau de mentinere a somnului. Fie ca ne culcam prea tarziu sau ne trezim prea devreme, ca stimulam excesiv sistemul nervos cu privit nocturn la televizor sau ore prea multe in fata calculatorului ori ca mentinem un somn artificial cu somnifere, toate acestea genereaza si intretin tulburarile de somn, iar consecinta este somnolenta diurna, ineficienta pe timpul zilei. Iata cateva dintre sfaturile pentru un somn sanatos :
<p>•   A. Mentinerea unui orar regulat de somn reprezinta cea mai importanta masura pentru combaterea insomniei. Aceasta presupune respectarea unui interval constant de somn, culcarea la aceeasi ora seara de seara, trezirea la aceeasi ora, zi de zi. In primul rand, trebuie sa observati care este orarul dvs optim de somn. Timp de una sau doua saptamani puteti experimenta, culcandu-va seara la aceeasi ora, urmand a va trezi fara ceas desteptator timp de cateva zile la rand. Este posibil ca initial sa aveti tendinta de a dormi mai mult, pentru a recupera oboseala anterioara.</p>
Ulterior, ora de culcare trebuie respectata zilnic, inclusiv in week-end-uri. Daca trebuie sa va treziti dimineata mai devreme decat la ora observata convenabila in perioada de proba, atunci este probabil necesar sa va culcati mai devereme seara, avand nevoie de mai multe ore de somn nocturn.</p>
In cazul in care simiti nevoia de odihna suplimentara este mai util sa dormiti la pranz decat sa va prelungiti somnul matinal. De asemenea, puteti incerca exercitii de relaxare. Evitati sa adormiti dupa cina, ocupandu-va cu alte sarcini (de exemplu, spalat vase, o discutie, o plimbare).</p>
<p>•   B. Ritmul circadian (somn-veghe) trebuie reglat in mod natural. Sub efectul expunerii la lumina, hipofiza secreta melatonina, un hormon implicat in generarea ciclului somn - veghe. Astfel, la intuneric, se secreta mai multa melatonina ce faciliteaza starea de somnolenta, iar cand este lumina, secretia diminua, permitandu-va sa fiti alert, treaz.</p>
Deoarece lumina puternica a unui ecran TV sau de calculator poate suprima productia de melatonina, nu este indicat sa adormiti cu televizorul aprins. De asemenea, este de sfatuit sa nu cititi inainte de culcare de pe un gadget cu ecran luminos (ipad, smartphone, kindle) si este preferabil sa cititi cu o veioza cu lumina calda.</p>
Pentru a diminua somnolenta diurna este important sa petreceti cat mai mult timp afara la lumina naturala, sa aveti un spatiu de locuit sau de lucru suficient de bine luminat in timpul zilei si este de preferat ca dimineata sa nu purtati ochelari de soare.</p>
<p>•   C. Pentru persoanele cu insomnie este deseori dificil sa-si modifice orarul de somn deoarece perioada pana la adormire (latenta somnului) este foarte lunga, necesitand o perioada indelungata de relaxare. De aceea este foarte utila crearea unei atmosfere relaxante in dormitor.</p>
In camera de somn trebuie sa fie liniste, aerisit, temperatura in jur de 18 grade Celsius, pat comfortabil. Aceasta este o camera rezervata numai relaxarii. Inainte de adormire va puteti concepe un ritual de relaxare, cititul unei carti, ascultarea unor melodii linistitoare sau al unei carti audio, o baie calda.</p>
<p>•   D. O dieta echilibrata si exercitiu fizic regulat sunt de asemenea importante pentru un somn odihnitor. Se recomanda ca cina sa fie seara devreme, si trebuie evitat consumul de alimente grele (cu grasimi) si condimente, cu minim doua ore inainte de culcare.</p>
Daca va este foame la momentul culcarii poate fi util sa consumati alimente ce combina carbohidrati si triptofan, care promoveaza somnul. De exemplu, un bol mic de cereale cu integrale neindulcite, o jumatate de sandvis de curcan, o banana.
Evitati consumul de alcool inainte de culcare; desi alcoolul scade latenta somnului, adormire mai rapida, acesta modifica calitatea somnului, cu treziri in noapte.
Diminuati consumul de cafea, aceasta poate determina tulburari de somn chiar si la 10 - 12 ore de la consum. Iar bauturile cofeinizate actioneaza ca diuretice. Regula ar fi sa nu mai beti cafea dupa pranz.
Evitati sa beti prea multe lichide seara deoarece va puteti trezi noaptea pentru necesitati fiziologice.
Renuntati la fumat deoarece fumatul determina tulburari de somn. Nicotina este un stimulant ce interfera cu somnul. De asemenea, fumatorii sufera de sevraj la nicotina in timpul noptii, ceea ce supeficializeaza somnul.
La fel de important este si exercitiul fizic in timpul zilei, cel putin 20 - 30 de minute pe zi, care pot fi impartite in functie de toleranta individuala in reprize de cate 5 - 10 minute de plimbat alert, gradinarit, treburi casnice. Trebuie ca eforul fizic sa fie facut dimineata sau spre pranz, preferabil nu seara deoarece exercitiul fizic stimuleaza corpul si creste temperatura. Exercitiile de relaxare, strecthing, yoga pot facilita aparitia somnului.
<p>•   E. Persoanele anxioase, stresate, furioase au deseori dificultati de adormire sau se trezesc frecvent in cursul noptii. Acesta este un semnal ca stresul si anxietatea trebuie controlate. Este necesar sa va intelegeti motivele de ingrijorare si sa va controlati atitudinea gandind pozitiv. Invatati cum sa va manageriati eficient timpul, sa faceti fata stresului si sa ganditi calm, in perspectiva; astfel, veti putea avea un somn mai bun.</p>
Tehnicile de relaxare pentru ameliorarea somnului pot fi benefice tuturor, dar in special celor cu dificultati de adormire. Practicarea unor tehnici de relaxare inainte de culcare reprezinta o modalitate excelenta de linistire, de calmare a gandurilor si pregatire pentru somn. Cateva tehnici simple de relaxare :
<p>o   Respiratii profunde - inchideti ochii si incercati sa respirati lent, profund, tot mai profund cu fiecare respiratie.</p>
<p>o   Relaxare musculara progresiva. Incepand de la degetele de la picioare, incordati-va toti muschii cat de tare puteti si apoi relaxati-va complet. Incercati sa vizualizati relaxarea de la picioare catre cap.</p>
<p>o   Vizualizarea unui loc linistitor. Inchideti ochii si imaginati-va un loc, un peisaj sau o activitate placuta, ce va destinde. Concentrati-va asupra efectului relaxant, odihnitor asupra dumneavoastra.</p>

<p>•   F. Modalitati de adormire in cursul noptii</p>
In timpul unui somn de noapte normal, toti avem mici pauze de trezire nocturna, pe care de obicei nu ni le amintim. Daca va treziti in noapte si nu puteti readormi, puteti folosi urmatoarele trucuri :
<p>o   Ramaneti in pat, in pozitie relaxata, cu musculatura destinsa, "vizualizand" linistea din timpul somnului. Concentrati-va asupra senzatiilor din corpul dumneavoastra, incepand de la picioare, lent pana la cap. Scopul este relaxarea corpului si nu adormirea, puteti incerca oricare dintre tehnicile de relaxare descrise mai sus. Desi relaxarea nu reprezinta un substitut pentru somn, aceasta ajuta la odihnirea organismului si a mintii.</p>
<p>o   Daca ati ramas treaz in noapte mai mult de 15 minute, va puteti ridica sa faceti o activitate ce nu implica efort fizic, cititul unei carti in lumina calda, de exemplu. Este preferabil sa evitati orice fel de ecrane luminoase, televizorul, ebook, telefoane mobile. O masa usoara sau un ceai de plante va poate ajuta sa adormiti din nou.</p>
<p>o   Nu va ganditi la problemele de peste zi, nu cautati solutii. Amanati grijile pentru a doua zi. Insa daca o idee extraordinara va tine treaz, notati-o pe hartie si adormiti deoarece de dimineata, odihnit fiind, veti putea fi mai creativ si mai productiv.</p>

<p>•   G. De cele mai multe ori dificultatile de adormire sau trezirea nocturna pot fi corectate prin respectarea unor simple masuri de igiena a somnului. Este, insa, prudent sa va adresati medicului neurolog daca prezentati semnele sau simptomele urmatoare :</p>
<p>o   oboseala sau somnolenta diurna excesiva, adormire in momente nepotrivite</p>
<p>o   sforait insotit de pauze de respiratie</p>
<p>o   tulburari de adormire sau de mentinere a somnului, necorectate dupa imbunatatirea stilului de viata</p>
<p>o   somn neodihnitor</p>
<p>o   durere de cap matinala frecventa</p>
<p>o   senzatie de amorteala, crampe in picioare sau brate in timpul noptii</p>
<p>o   somn agitat, cu trairea viselor</p>

                                      </p>
                                    </div>
                                    <div id="pane3" class="tab-pane">
                                      <h4>Tensiunea intraoculara</h4>
                                      <p> 
Tensiunea intraoculara este rezultatul starii de echilibru dintre continutul ochiului si elasticitatea peretilor sai, deci ea asigura componentelor interne ale globului ocular conditiile necesare unei functionari optime. Presiunea intraoculara variaza intre anumite limite fiziologice, care daca sunt depasite au repercusiuni asupra aparatului optic si asupra metabolismului ocular perturband functionarea normala a vederii.
Limitele normale ale tensiunii intraoculare sunt intre 10 si 21 mmHg, cu un maxim dimineata si un minim catre seara.
Hipertensiunea intraoculara este considerata o tensiune mai mare de 21 - 22 mmHg; se descopera de cele mai multe ori intamplator, fiind o afectiune lipsita de simptome. Cu alte cuvinte este foarte important ca pacientul sa faca o consultatie de rutina intr-un cabinet de oftalmologie, unde sa i se poata masura si tensiunea intraoculara. De multe ori pacientii se prezinta pentru dureri de cap, senzatie de jena oculara, dar aceste simptome nu sunt legate de hipertensiunea intraoculara in sine, ci pur si simplu fenomenele coincid.
De ce trebuie masurata tensiunea intraoculara? E chiar absolut necesar? Raspunsul este : DA !
Hipertensiunea intraoculara poate da nastere unor complicatii grave. Aproximativ 10 - 20 % dintre cazurile de hipertensiune intraoculara degenereaza in glaucom. In afara de cresterea tensiunii intraoculare oculare peste limita de 22 mmHg, variatiile tensionale peste 5 - 6 mmHg in cursul zilei ca si diferente de 5 - 6 mmHg intre cei doi ochi, chiar daca tensiunea fiecaruia dintre ei este in limite normale, sunt considerate patologice.
S-a constatat ca exista oameni cu hipertensiune intraoculara, care nu au modificari ale nervului optic, nu au modificari caracteristice glaucomului. In acest caz, afectiunea lor nu este glaucom, ci doar hipertensiune intraoculara.
Mecanismele prin care apare hipertensiunea intraoculara nu sunt foarte bine cunoscute. Cert este ca se produce un dezechilibru intre productia de umor apos, de lichid care se produce permanent in ochi, si eliminarea lui. Umorul apos este in permanenta eliminat. Rata lui de eliminare scade sau productia de umor apos creste, iar posibilitatile de eliminare nu mai fac fata acestui mecanism si atunci se acumuleaza in interiorul ochiului. Astfel creste tensiunea intraoculara.
Exista si o serie de factori care pot influenta masurarea acestei tensiuni intraoculare, precum grosimea corneei, adica partea transparenta care acopera irisul. Daca aceasta este mai groasa atunci tensiunea intraoculara masurata va fi mai mare decat cea reala, daca este mai subtire, tensiunea intraoculara va fi mai mica.
Hipertensiunea intraoculara nu modifica vederea decat in momentul in care ea se transforma in glaucom. Glaucomul reprezinta o neuropatie optica cronica, bilaterala, progresiva si multifactoriala avand ca rezultat pierderea fibrelor ganglionare retiniene. Afectarea nervului optic determina, implicit, pierderi de camp vizual, iar in felul acesta vederea scade progresiv. Daca nu se iau masuri se ajunge chiar si la orbire, in urma aparitiei glaucomului.
Riscul de hipertensiune intraoculara creste odata cu varsta, pentru ca este mai probabil ca mecanismele de eliminare a umorului apos sa fie perturbate odata cu avansarea in varsta. La persoanele cu tulburari circulatorii, deci cu boli cardiovasculare, poate creste riscul aparitiei hipertensiunii intraoculare.La copii hipertensiunea intraoculara este, de cele mai multe ori, asociata cu glaucomul juvenil sau congenital. Numai in felul acesta se diagnosticheaza hipertensiunea intraoculara la copii, insa cazurile acestea sunt extrem de rare.
Hipertensiunea intraoculara nu se trateaza in toate cazurile, ci doar in momentul in care se constata riscul de a se transforma in glaucom. Daca acest risc este unul ridicat, atunci se prefera ca boala sa se trateze chiar din stadiul de hipertensiune intraoculara, pentru a evita complicatiile. In momentul in care survine glaucomul, iar nervul optic sufera modificari, acele modificari sunt ireversibile.
In cadrul Centrului nostru, serviciul de Oftalmologie va sta la dispozitie pentru un diagnostic rapid si precis.

                                      </p>                                      
                                    </div>
                                    <div id="pane4" class="tab-pane">
                                      <h4>Glaucomul</h4>
                                      <p> 
Glaucomul este o afectiune oculara cronica bilaterala caracterizata prin distrugerea progresiva a fibrelor nervului optic, nerv care este responsabil de transmiterea informatiilor de la ochi la creier. Se produce astfel restrangerea treptata a campului vizual dinspre periferie spre centru si, in final, se poate ajunge la orbire.
Glaucomul reprezinta o cauza importanta de orbire la nivel mondial, vederea reducandu-se treptat, fara indicii sau semnale prealabile, uneori chiar fara simptome. De aceea, dupa varsta de 40 de ani, trebuie facute examinari periodice.
Este cunoscut faptul ca glaucomul are legatura cu presiunea din interiorul ochiului. Cu cat presiunea intraoculara este mai mare, cu atat creste posibilitatea ca nervul optic sa fie afectat. Desi exista si tipuri de glaucom fara presiune intraoculara crescuta, principalul factor de risc pentru glaucom este reprezentat de presiunea intraoculara crescuta. Nervul optic este format din aproximativ 1,2 milioane de fibre nervoase. Glaucomul poate afecta la inceput doar o parte din aceste fibre provocand aparitia unor pete negre in campul vizual. Multi pacienti nu observa aceste puncte "oarbe" decat atunci cand boala este foarte avansata.
Exista mai multe tipuri de glaucom ce difera intre ele prin mecanismul de producere, manifestari clinice si indicatii de tratament :
<p>•   Glaucomul primitiv cu unghi deschis este cea mai frecventa forma de glaucom, fiind responsabil de peste 90 % din cazurile de glaucom. De obicei survine odata cu inaintarea in varsta, cand sistemul de drenaj al umorului apos devine din ce in ce mai putin eficient, crescand astfel presiunea intraoculara. Cele mai multe persoane nu au simptome sau semnale de alarma timpurii. Scaderea acuitatii vizuale este remarcata in fazele avansate sau foarte avansate ale bolii. Acest tip de glaucom se dezvolta lent si tacut, fara durere sau alte simptome, iar uneori este depistat cand o mare parte din fibrele nervului optic sunt distruse, cu pierderea ireversibila a vederii. In mod obisnuit, glaucomul cu unghi deschis raspunde bine la medicatie, in special in cazul diagnosticarii din vreme si a unui tratament adecvat.</p>
<p>•   Glaucomul primitiv cu unghi inchis este determinat de o predispozitie anatomica a globului ocular, ce conduce la obstructia partiala sau totala a drenajului umorului apos prin blocarea unghiului de catre periferia irisului. Este mult mai rar intalnit si este foarte diferit de glaucomul primitiv cu unghi deschis prin aceea ca, de regula, presiunea intraoculara creste foarte rapid. In atacul de glaucom se produce inchiderea completa a unghiului irido-cornean cu aparitia urmatoarelor semne si simptome: inrosirea ochiului, pupila semi-dilatata, vedere incetosata, durere oculara intensa, cefalee (durere de cap), halouri colorate in jurul luminilor, lacrimare, fotofobie, stare de greata si voma. Atunci cand unele din aceste simptome apar, este necesar sa va prezentati, de urgenta, la medicul oftalmolog.</p>
Daca nu este tratat imediat, atacul de glaucom poate sa duca la orbire !
Alte forme de glaucom primitiv sunt reprezentate de glaucomul cu tensiune normala, glaucomul congenital. Exista si forme de glaucom secundar altor afectiuni, traumatisme locale sau aparut ca efect advers in urma unor tratamente.
Cauza care produce glaucomul inca nu este cunoscuta. Glaucomul se asociaza, de cele mai multe ori, cu o presiune crescuta in ochi. Tensiunea lichidului intraocular reprezinta balanta intre productia si drenarea acestuia. Umorul apos este un lichid transparent produs in permanenta de catre corpul ciliar; el "hraneste" cristalinul, cornea si irisul si este drenat in sistemul venos.
La un ochi sanatos, acest lichid este produs si eliminat din ochi in proportii aproximativ egale. Astfel se mentine o presiune constanta in interiorul ochiului, numita presiune intraoculara (PIO). Presiunea intraoculara este considerata normala atunci cand valoarea ei este intre 10 si 21 mm Hg.
La pacientii cu presiune intraoculara crescuta (peste 21 mm Hg), ochiul continua sa produca umor apos, dar este incapabil sa o elimine cu un debit normal. In timp, aceasta presiune intraoculara crescuta poate deteriora nervul optic, ceea ce duce la pierderea treptata a vederii. Daca presiunea intraoculara nu scade, se poate ajunge chiar la orbire.
Perturbarea fluxului sangvin la nivelul papilei nervului optic este de asemenea implicata in patogeneza glaucomului.
S-a ajuns la concluzia ca anumite persoane au sanse mari de a face glaucom. Este vorba despre persoane care :
<p>•   au peste 45 ani</p>
<p>•   au rude de sange cu glaucom</p>
<p>•   se stiu cu presiune intraoculara crescuta (hipertensiune intraoculara)</p>
<p>•   sufera de diabet zaharat, hipertensiune arteriala, hipotensiune arteriala, dureri de cap de tip migrenos, sindrom Raynaud, au miopie severa sau hipermetropie mare</p>
<p>•   rasa neagra</p>
Diagnosticul de glaucom este relativ simplu si nu implica investigatii neplacute pentru pacient. Din pacate insa, glaucomul nu are simptome specifice decat atunci cand vederea este mult afectata. Astfel, marea majoritate a pacientilor sunt diagnosticati in faze avansate ale bolii cand, in ciuda tratamentului corect efectuat, evolutia catre orbire este greu de oprit.
Investigatiile necesare pentru diagnosticarea si urmarirea evolutiei glaucomului sunt:
<p>•   masurarea presiunii intraoculare</p>
<p>•   examinarea si fotografierea papilei nervului optic</p>
<p>•   examinarea unghiului de drenaj (este necesara pentru stabilirea tipului de glaucom: cu unghi inchis sau deschis, deoarece modalitatile terapeutice pot fi diferite)</p>
<p>•   examinarea campului vizual (stabileste in ce masura este afectata capacitatea pacientului de a vedea; in mod caracteristic, in glaucom se produce o ingustare a campului vizual dinspre periferie catre centru).</p>
<p>•   evaluarea starii fibrelor nervoase ale nervului optic (tomografie de nerv optic)</p>
<p>•   masurarea grosimii corneene (pahimetrie)</p>
Din datele rezultate in urma acestor investigatii, medicul poate stabili diagnosticul de glaucom, tipul acestuia si cat de avansata este boala. Este indicat ca orice persoana care a depasit varsta de 40 de ani sa-si faca anual un control oftalmologic.
Nu exista medicamente capabile sa vindece glaucomul, in sensul ca vederea pierduta prin glaucom nu poate fi redata. Toate medicamentele utilizate in prezent in tratarea glaucomului reusesc sa opreasca sau sa intarzie agravarea bolii prevenind astfel aparitia orbirii. Ele fac acest lucru prin scaderea presiunii intraoculare (PIO), indiferent de forma de glaucom, cu presiune intraoculara crescuta sau nu. De aceea, diagnosticarea la timp a bolii, atunci cand vederea nu este mult afectata, este esentiala !
Cele mai multe medicamente pentru glaucom se prezinta sub forma de picaturi pentru ochi. Este de retinut faptul ca glaucomul se poate agrava fara ca pacientul sa-si dea seama, de aceea este foarte importanta administrarea zilnica a tratamentului. Tratamentul antiglaucomatos este scump dar inscrierea la medicul de familie asigura pacientului accesul la medicamente compensate, stiindu-se faptul ca majoritatea medicamentelor antiglaucomatoase sunt gratuite. Daca picaturile de ochi nu pot reduce suficient presiunea intraoculara, se recurge la tratamentul laser sau chiar la tratamentul chirurgical. Uneori poate fi necesara aplicarea picaturilor si dupa tratamentul cu laser sau chirurgical, pentru reducerea suplimentara a presiunii intraoculare.
Vizitele periodice la medicul oftalmolog, investigatiile complete si corecte, tratamentul corect administrat in functie de caz, efectuat cu seriozitate de catre pacient pot preveni efectele nedorite ale acestei boli.
Glaucomul poate duce la orbire !
70 milioane de oameni din intreaga lume sunt afectati de glaucom, iar jumatate nici nu stiu !
Glaucomul nu este o boala vindecabila, este o boala tratabila !
In cadrul Centrului nostru, serviciul de Oftalmologie va sta la dispozitie pentru un diagnostic rapid si precis.

                                      </p>
                                    </div>
                                    <div id="pane5" class="tab-pane">
                                      <h4>Osteoporoza</h4>
                                      <p> 
Osteoporoza este cea mai frecventa afectiune metabolica osoasa, cu potential crescut de morbiditate si mortalitate, in special prin prezenta fracturilor vertebrale, a celor de la nivelul articulatiei pumnului si a celor de sold, numite fracturi osteoporotice.</p>
Incienta crescuta a fracturilor osteoporotice la nivel mondial implica costuri sociale foarte ridicate, fiind astfel mai eficient pentru orice stat, daca vorbim la nivel macro, sau pentru fiecare pacient, la nivel micro, sa previna si trateze osteoporoza, decat sa trateze complicatiile acesteia.</p>
La nivel mondial riscul de fractura osteoporotica depinde de sex, varsta si rasa. Riscul de fractura de sold in decursul vietii este de aproximativ 17 % la femei si 6 % la barbati. Incidenta fracturilor vertebrale si a celor de la nivelul articulatiei pumnului este maxima la femeile intre 50 si 70 de ani, in timp ce incidenta fracturilor de sold creste exponential peste 75 de ani.</p>
Osteoporoza poate avea cauze multiple, dar cea mai importanta si mai frecventa este pierderea de masa osoasa din postmenopauza. Masa osoasa atinge un nivel maxim in jurul de varstei de 30 de ani, dupa aceasta varsta realizandu-se un declin treptat, accentuat insa dupa intrarea de menopauza. Desigur nivelul maxim de masa osoasa este influentat si de alti factori precum fumatul, consumul de alcool, ereditatea, masa corporala sau activitate fizica.</p>
Osteoporoza poate avea si alte cauze definind asa numita osteoporoza secundara :</p>
<p>•   terapia cu glucocorticoizi, levothyroxina, chimioterapia</p>
<p>•   hipertiroidia, hiperparatiroidia, hipogonadismul (hiperprolactinemie, amenoree hipotalamica, anorexie nervoasa, insuficienta ovariana, insuficienta gonadica primara / secundara, pubertate intarziata), hipercorticismul, deficitul hormonului de crestere</p>
<p>•   imobilizarea</p>
<p>•   boli ale tesutuli conjuctiv, gastrointestinale, ale maduvei hematogene</p>

                                      </p>
                                    </div>                                   
                                  </div><!-- /.tab-content -->
                                </div><!-- /.tabbable -->
                            </div>
                        </div>                                   
                    </div>
                </div>
            </div>
        </div>
      
    <?php include('footer.php'); ?>

</body>
</html>