<?php require('header.php') ?>
























    




    <div class="container-fluid py-4">


      <!-- <div class="row">
        <div class="col-xl-3 col-sm-6 mb-xl-0 mb-4">
          <div class="card">
            <div class="card-header p-3 pt-2">
              <div class="icon icon-lg icon-shape bg-gradient-dark shadow-dark text-center border-radius-xl mt-n4 position-absolute">
                <i class="material-icons opacity-10" _msttexthash="95563" _msthash="39">weekend</i>
              </div>
              <div class="text-end pt-1">
                <p class="text-sm mb-0 text-capitalize" _msttexthash="5558683" _msthash="40">L’argent d’aujourd’hui</p>
                <h4 class="mb-0" _msttexthash="34463" _msthash="41">53 000 $</h4>
              </div>
            </div>
            <hr class="dark horizontal my-0">
            <div class="card-footer p-3">
              <p class="mb-0" _msttexthash="1063491" _msthash="42">
                <span class="text-success text-sm font-weight-bolder" _istranslated="1">+55%</span>par rapport à la semaine dernière</p>
            </div>
          </div>
        </div>
        <div class="col-xl-3 col-sm-6 mb-xl-0 mb-4">
          <div class="card">
            <div class="card-header p-3 pt-2">
              <div class="icon icon-lg icon-shape bg-gradient-primary shadow-primary text-center border-radius-xl mt-n4 position-absolute">
                <i class="material-icons opacity-10" _msttexthash="118989" _msthash="43">personne</i>
              </div>
              <div class="text-end pt-1">
                <p class="text-sm mb-0 text-capitalize" _msttexthash="6502665" _msthash="44">Les utilisateurs d’aujourd’hui</p>
                <h4 class="mb-0" _msttexthash="28197" _msthash="45">2,300</h4>
              </div>
            </div>
            <hr class="dark horizontal my-0">
            <div class="card-footer p-3">
              <p class="mb-0" _msttexthash="694629" _msthash="46">
                <span class="text-success text-sm font-weight-bolder" _istranslated="1">+3%</span>par rapport au mois dernier</p>
            </div>
          </div>
        </div>
        <div class="col-xl-3 col-sm-6 mb-xl-0 mb-4">
          <div class="card">
            <div class="card-header p-3 pt-2">
              <div class="icon icon-lg icon-shape bg-gradient-success shadow-success text-center border-radius-xl mt-n4 position-absolute">
                <i class="material-icons opacity-10" _msttexthash="118989" _msthash="47">personne</i>
              </div>
              <div class="text-end pt-1">
                <p class="text-sm mb-0 text-capitalize" _msttexthash="296192" _msthash="48">Nouveaux clients</p>
                <h4 class="mb-0" _msttexthash="29471" _msthash="49">3,462</h4>
              </div>
            </div>
            <hr class="dark horizontal my-0">
            <div class="card-footer p-3">
              <p class="mb-0" _msttexthash="404183" _msthash="50">
                <span class="text-danger text-sm font-weight-bolder" _istranslated="1">-2%</span>par rapport à hier</p>
            </div>
          </div>
        </div>
        <div class="col-xl-3 col-sm-6">
          <div class="card">
            <div class="card-header p-3 pt-2">
              <div class="icon icon-lg icon-shape bg-gradient-info shadow-info text-center border-radius-xl mt-n4 position-absolute">
                <i class="material-icons opacity-10" _msttexthash="95563" _msthash="51">weekend</i>
              </div>
              <div class="text-end pt-1">
                <p class="text-sm mb-0 text-capitalize" _msttexthash="78663" _msthash="52">Ventes</p>
                <h4 class="mb-0" _msttexthash="43043" _msthash="53">103 430 $</h4>
              </div>
            </div>
            <hr class="dark horizontal my-0">
            <div class="card-footer p-3">
              <p class="mb-0" _msttexthash="404313" _msthash="54">
                <span class="text-success text-sm font-weight-bolder" _istranslated="1">+5%</span>par rapport à hier</p>
            </div>
          </div>
        </div>
      </div>


      <div class="row mt-4">
        <div class="col-lg-4 col-md-6 mt-4 mb-4">
          <div class="card z-index-2 ">
            <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2 bg-transparent">
              <div class="bg-gradient-primary shadow-primary border-radius-lg py-3 pe-1">
                <div class="chart">
                  <canvas id="chart-bars" class="chart-canvas" height="170" width="301" style="display: block; box-sizing: border-box; height: 170px; width: 301.3px;">
                  </canvas>
                </div>
              </div>
            </div>
            <div class="card-body">
              <h6 class="mb-0 " _msttexthash="228553" _msthash="55">Vues du site Web</h6>
              <p class="text-sm " _msttexthash="1024543" _msthash="56">Performances de la dernière campagne</p>
              <hr class="dark horizontal">
              <div class="d-flex ">
                <i class="material-icons text-sm my-auto me-1" _msttexthash="96824" _msthash="57">horaire</i>
                <p class="mb-0 text-sm" _msttexthash="687011" _msthash="58">campagne envoyée il y a 2 jours</p>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-md-6 mt-4 mb-4">
          <div class="card z-index-2  ">
            <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2 bg-transparent">
              <div class="bg-gradient-success shadow-success border-radius-lg py-3 pe-1">
                <div class="chart">
                  <canvas id="chart-line" class="chart-canvas" height="170" width="301" style="display: block; box-sizing: border-box; height: 170px; width: 301.3px;">
                  </canvas>
                </div>
              </div>
            </div>
            <div class="card-body">
              <h6 class="mb-0 " _msttexthash="391196" _msthash="59">Ventes quotidiennes</h6>
              <p class="text-sm ">(
                <font _mstmutation="1" _msttexthash="9428900" _msthash="60">
                  <span class="font-weight-bolder" _mstmutation="1" _istranslated="1">+15 %)</span>augmentation des ventes d’aujourd’hui.</font>
              </p>
              <hr class="dark horizontal">
              <div class="d-flex ">
                <i class="material-icons text-sm my-auto me-1" _msttexthash="96824" _msthash="61">horaire</i>
                <p class="mb-0 text-sm" _msttexthash="330096" _msthash="62">mis à jour il y a 4 min</p>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-4 mt-4 mb-3">
          <div class="card z-index-2 ">
            <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2 bg-transparent">
              <div class="bg-gradient-dark shadow-dark border-radius-lg py-3 pe-1">
                <div class="chart">
                  <canvas id="chart-line-tasks" class="chart-canvas" height="170" width="301" style="display: block; box-sizing: border-box; height: 170px; width: 301.3px;">
                  </canvas>
                </div>
              </div>
            </div>
            <div class="card-body">
              <h6 class="mb-0 " _msttexthash="335673" _msthash="63">Tâches terminées</h6>
              <p class="text-sm " _msttexthash="1024543" _msthash="64">Performances de la dernière campagne</p>
              <hr class="dark horizontal">
              <div class="d-flex ">
                <i class="material-icons text-sm my-auto me-1" _msttexthash="96824" _msthash="65">horaire</i>
                <p class="mb-0 text-sm" _msttexthash="1856517" _msthash="66">Vient d’être mis à jour</p>
              </div>
            </div>
          </div>
        </div>
      </div>


      <div class="row mb-4">
        <div class="col-lg-8 col-md-6 mb-md-0 mb-4">
          <div class="card">
            <div class="card-header pb-0">
              <div class="row">
                <div class="col-lg-6 col-7">
                  <h6 _msttexthash="97877" _msthash="67">Projets</h6>
                  <p class="text-sm mb-0">
                    <i class="fa fa-check text-info" aria-hidden="true"></i>
                    <font _mstmutation="1" _msttexthash="433329" _msthash="68">
                      <span class="font-weight-bold ms-1" _mstmutation="1" _istranslated="1">30 réalisés</span>ce mois-ci</font>
                  </p>
                </div>
                <div class="col-lg-6 col-5 my-auto text-end">
                  <div class="dropdown float-lg-end pe-4">
                    <a class="cursor-pointer" id="dropdownTable" data-bs-toggle="dropdown" aria-expanded="false">
                      <i class="fa fa-ellipsis-v text-secondary" aria-hidden="true"></i>
                    </a>
                    <ul class="dropdown-menu px-2 py-3 ms-sm-n4 ms-n5" aria-labelledby="dropdownTable">
                      <li>
                        <a class="dropdown-item border-radius-md" href="javascript:;" _msttexthash="76466" _msthash="69">Action</a>
                      </li>
                      <li>
                        <a class="dropdown-item border-radius-md" href="javascript:;" _msttexthash="261807" _msthash="70">Une autre action</a>
                      </li>
                      <li>
                        <a class="dropdown-item border-radius-md" href="javascript:;" _msttexthash="229879" _msthash="71">Autre chose ici</a>
                      </li>
                    </ul>
                  </div>
                </div>
              </div>
            </div>
            <div class="card-body px-0 pb-2">
              <div class="table-responsive">
                <table class="table align-items-center mb-0">
                  <thead>
                    <tr>
                      <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7" _msttexthash="185250" _msthash="72">Entreprises</th>
                      <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2" _msttexthash="94497" _msthash="73">Membres</th>
                      <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7" _msttexthash="75803" _msthash="74">Budget</th>
                      <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7" _msttexthash="173550" _msthash="75">Achèvement</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td>
                        <div class="d-flex px-2 py-1">
                          <div>
                            <img src="./acceuil_files/logo-xd.svg" class="avatar avatar-sm me-3" alt="Xd" _mstalt="21320" _msthash="76">
                          </div>
                          <div class="d-flex flex-column justify-content-center">
                            <h6 class="mb-0 text-sm" _msttexthash="448994" _msthash="77">Version XD du matériau</h6>
                          </div>
                        </div>
                      </td>
                      <td>
                        <div class="avatar-group mt-2">
                          <a href="javascript:;" class="avatar avatar-xs rounded-circle" data-bs-toggle="tooltip" data-bs-placement="bottom" aria-label="Ryan Tompson" data-bs-original-title="Ryan Tompson" _mstaria-label="183651" _msthash="78">
                            <img src="./acceuil_files/team-1.jpg" alt="Équipe1" _mstalt="53586" _msthash="79">
                          </a>
                          <a href="javascript:;" class="avatar avatar-xs rounded-circle" data-bs-toggle="tooltip" data-bs-placement="bottom" aria-label="Romina Hadid" data-bs-original-title="Romina Hadid" _mstaria-label="169533" _msthash="80">
                            <img src="./acceuil_files/team-2.jpg" alt="Équipe2" _mstalt="53729" _msthash="81">
                          </a>
                          <a href="javascript:;" class="avatar avatar-xs rounded-circle" data-bs-toggle="tooltip" data-bs-placement="bottom" aria-label="Alexandre Smith" data-bs-original-title="Alexander Smith" _mstaria-label="254722" _msthash="82">
                            <img src="./acceuil_files/team-3.jpg" alt="Équipe3" _mstalt="53872" _msthash="83">
                          </a>
                          <a href="javascript:;" class="avatar avatar-xs rounded-circle" data-bs-toggle="tooltip" data-bs-placement="bottom" aria-label="Jessica Doe" data-bs-original-title="Jessica Doe" _mstaria-label="147524" _msthash="84">
                            <img src="./acceuil_files/team-4.jpg" alt="Équipe4" _mstalt="54015" _msthash="85">
                          </a>
                        </div>
                      </td>
                      <td class="align-middle text-center text-sm">
                        <span class="text-xs font-weight-bold" _msttexthash="34203" _msthash="86">14 000 $</span>
                      </td>
                      <td class="align-middle">
                        <div class="progress-wrapper w-75 mx-auto">
                          <div class="progress-info">
                            <div class="progress-percentage">
                              <span class="text-xs font-weight-bold" _msttexthash="14235" _msthash="87">60%</span>
                            </div>
                          </div>
                          <div class="progress">
                            <div class="progress-bar bg-gradient-info w-60" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100">
                            </div>
                          </div>
                        </div>
                      </td>
                    </tr>
                    <tr>
                      <td>
                        <div class="d-flex px-2 py-1">
                          <div>
                            <img src="./acceuil_files/logo-atlassian.svg" class="avatar avatar-sm me-3" alt="Atlassian" _mstalt="137371" _msthash="88">
                          </div>
                          <div class="d-flex flex-column justify-content-center">
                            <h6 class="mb-0 text-sm" _msttexthash="767078" _msthash="89">Ajouter un suivi de progression</h6>
                          </div>
                        </div>
                      </td>
                      <td>
                        <div class="avatar-group mt-2">
                          <a href="javascript:;" class="avatar avatar-xs rounded-circle" data-bs-toggle="tooltip" data-bs-placement="bottom" aria-label="Romina Hadid" data-bs-original-title="Romina Hadid" _mstaria-label="169533" _msthash="90">
                            <img src="./acceuil_files/team-2.jpg" alt="Équipe5" _mstalt="54158" _msthash="91">
                          </a>
                          <a href="javascript:;" class="avatar avatar-xs rounded-circle" data-bs-toggle="tooltip" data-bs-placement="bottom" aria-label="Jessica Doe" data-bs-original-title="Jessica Doe" _mstaria-label="147524" _msthash="92">
                            <img src="./acceuil_files/team-4.jpg" alt="Équipe6" _mstalt="54301" _msthash="93">
                          </a>
                        </div>
                      </td>
                      <td class="align-middle text-center text-sm">
                        <span class="text-xs font-weight-bold" _msttexthash="26637" _msthash="94">3 000 $</span>
                      </td>
                      <td class="align-middle">
                        <div class="progress-wrapper w-75 mx-auto">
                          <div class="progress-info">
                            <div class="progress-percentage">
                              <span class="text-xs font-weight-bold" _msttexthash="13780" _msthash="95">10%</span>
                            </div>
                          </div>
                          <div class="progress">
                            <div class="progress-bar bg-gradient-info w-10" role="progressbar" aria-valuenow="10" aria-valuemin="0" aria-valuemax="100">
                            </div>
                          </div>
                        </div>
                      </td>
                    </tr>
                    <tr>
                      <td>
                        <div class="d-flex px-2 py-1">
                          <div>
                            <img src="./acceuil_files/logo-slack.svg" class="avatar avatar-sm me-3" alt="Équipe7" _mstalt="54444" _msthash="96">
                          </div>
                          <div class="d-flex flex-column justify-content-center">
                            <h6 class="mb-0 text-sm" _msttexthash="925392" _msthash="97">Corriger les erreurs de plate-forme</h6>
                          </div>
                        </div>
                      </td>
                      <td>
                        <div class="avatar-group mt-2">
                          <a href="javascript:;" class="avatar avatar-xs rounded-circle" data-bs-toggle="tooltip" data-bs-placement="bottom" aria-label="Romina Hadid" data-bs-original-title="Romina Hadid" _mstaria-label="169533" _msthash="98">
                            <img src="./acceuil_files/team-3.jpg" alt="Équipe8" _mstalt="54587" _msthash="99">
                          </a>
                          <a href="javascript:;" class="avatar avatar-xs rounded-circle" data-bs-toggle="tooltip" data-bs-placement="bottom" aria-label="Jessica Doe" data-bs-original-title="Jessica Doe" _mstaria-label="147524" _msthash="100">
                            <img src="./acceuil_files/team-1.jpg" alt="Équipe9" _mstalt="54730" _msthash="101">
                          </a>
                        </div>
                      </td>
                      <td class="align-middle text-center text-sm">
                        <span class="text-xs font-weight-bold" _msttexthash="151983" _msthash="102">Non défini</span>
                      </td>
                      <td class="align-middle">
                        <div class="progress-wrapper w-75 mx-auto">
                          <div class="progress-info">
                            <div class="progress-percentage">
                              <span class="text-xs font-weight-bold" _msttexthash="19877" _msthash="103">100%</span>
                            </div>
                          </div>
                          <div class="progress">
                            <div class="progress-bar bg-gradient-success w-100" role="progressbar" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100">
                            </div>
                          </div>
                        </div>
                      </td>
                    </tr>
                    <tr>
                      <td>
                        <div class="d-flex px-2 py-1">
                          <div>
                            <img src="./acceuil_files/logo-spotify.svg" class="avatar avatar-sm me-3" alt="Spotify" _mstalt="101556" _msthash="104">
                          </div>
                          <div class="d-flex flex-column justify-content-center">
                            <h6 class="mb-0 text-sm" _msttexthash="793247" _msthash="105">Lancez notre application mobile</h6>
                          </div>
                        </div>
                      </td>
                      <td>
                        <div class="avatar-group mt-2">
                          <a href="javascript:;" class="avatar avatar-xs rounded-circle" data-bs-toggle="tooltip" data-bs-placement="bottom" aria-label="Ryan Tompson" data-bs-original-title="Ryan Tompson" _mstaria-label="183651" _msthash="106">
                            <img src="./acceuil_files/team-4.jpg" alt="utilisateur1" _mstalt="56251" _msthash="107">
                          </a>
                          <a href="javascript:;" class="avatar avatar-xs rounded-circle" data-bs-toggle="tooltip" data-bs-placement="bottom" aria-label="Romina Hadid" data-bs-original-title="Romina Hadid" _mstaria-label="169533" _msthash="108">
                            <img src="./acceuil_files/team-3.jpg" alt="utilisateur2" _mstalt="56394" _msthash="109">
                          </a>
                          <a href="javascript:;" class="avatar avatar-xs rounded-circle" data-bs-toggle="tooltip" data-bs-placement="bottom" aria-label="Alexandre Smith" data-bs-original-title="Alexander Smith" _mstaria-label="254722" _msthash="110">
                            <img src="./acceuil_files/team-4.jpg" alt="utilisateur3" _mstalt="56537" _msthash="111">
                          </a>
                          <a href="javascript:;" class="avatar avatar-xs rounded-circle" data-bs-toggle="tooltip" data-bs-placement="bottom" aria-label="Jessica Doe" data-bs-original-title="Jessica Doe" _mstaria-label="147524" _msthash="112">
                            <img src="./acceuil_files/team-1.jpg" alt="utilisateur4" _mstalt="56680" _msthash="113">
                          </a>
                        </div>
                      </td>
                      <td class="align-middle text-center text-sm">
                        <span class="text-xs font-weight-bold" _msttexthash="34463" _msthash="114">20 500 $</span>
                      </td>
                      <td class="align-middle">
                        <div class="progress-wrapper w-75 mx-auto">
                          <div class="progress-info">
                            <div class="progress-percentage">
                              <span class="text-xs font-weight-bold" _msttexthash="19877" _msthash="115">100%</span>
                            </div>
                          </div>
                          <div class="progress">
                            <div class="progress-bar bg-gradient-success w-100" role="progressbar" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100">
                            </div>
                          </div>
                        </div>
                      </td>
                    </tr>
                    <tr>
                      <td>
                        <div class="d-flex px-2 py-1">
                          <div>
                            <img src="./acceuil_files/logo-jira.svg" class="avatar avatar-sm me-3" alt="Jira" _mstalt="46514" _msthash="116">
                          </div>
                          <div class="d-flex flex-column justify-content-center">
                            <h6 class="mb-0 text-sm" _msttexthash="1156831" _msthash="117">Ajouter la nouvelle page de tarification</h6>
                          </div>
                        </div>
                      </td>
                      <td>
                        <div class="avatar-group mt-2">
                          <a href="javascript:;" class="avatar avatar-xs rounded-circle" data-bs-toggle="tooltip" data-bs-placement="bottom" aria-label="Ryan Tompson" data-bs-original-title="Ryan Tompson" _mstaria-label="183651" _msthash="118">
                            <img src="./acceuil_files/team-4.jpg" alt="utilisateur5" _mstalt="56823" _msthash="119">
                          </a>
                        </div>
                      </td>
                      <td class="align-middle text-center text-sm">
                        <span class="text-xs font-weight-bold" _msttexthash="20111" _msthash="120">500 $</span>
                      </td>
                      <td class="align-middle">
                        <div class="progress-wrapper w-75 mx-auto">
                          <div class="progress-info">
                            <div class="progress-percentage">
                              <span class="text-xs font-weight-bold" _msttexthash="14391" _msthash="121">25%</span>
                            </div>
                          </div>
                          <div class="progress">
                            <div class="progress-bar bg-gradient-info w-25" role="progressbar" aria-valuenow="25" aria-valuemin="0" aria-valuemax="25">
                            </div>
                          </div>
                        </div>
                      </td>
                    </tr>
                    <tr>
                      <td>
                        <div class="d-flex px-2 py-1">
                          <div>
                            <img src="./acceuil_files/logo-invision.svg" class="avatar avatar-sm me-3" alt="Invision" _mstalt="120055" _msthash="122">
                          </div>
                          <div class="d-flex flex-column justify-content-center">
                            <h6 class="mb-0 text-sm" _msttexthash="1112319" _msthash="123">Refonte de la nouvelle boutique en ligne</h6>
                          </div>
                        </div>
                      </td>
                      <td>
                        <div class="avatar-group mt-2">
                          <a href="javascript:;" class="avatar avatar-xs rounded-circle" data-bs-toggle="tooltip" data-bs-placement="bottom" aria-label="Ryan Tompson" data-bs-original-title="Ryan Tompson" _mstaria-label="183651" _msthash="124">
                            <img src="./acceuil_files/team-1.jpg" alt="utilisateur6" _mstalt="56966" _msthash="125">
                          </a>
                          <a href="javascript:;" class="avatar avatar-xs rounded-circle" data-bs-toggle="tooltip" data-bs-placement="bottom" aria-label="Jessica Doe" data-bs-original-title="Jessica Doe" _mstaria-label="147524" _msthash="126">
                            <img src="./acceuil_files/team-4.jpg" alt="utilisateur7" _mstalt="57109" _msthash="127">
                          </a>
                        </div>
                      </td>
                      <td class="align-middle text-center text-sm">
                        <span class="text-xs font-weight-bold" _msttexthash="26546" _msthash="128">2 000 $</span>
                      </td>
                      <td class="align-middle">
                        <div class="progress-wrapper w-75 mx-auto">
                          <div class="progress-info">
                            <div class="progress-percentage">
                              <span class="text-xs font-weight-bold" _msttexthash="14053" _msthash="129">40%</span>
                            </div>
                          </div>
                          <div class="progress">
                            <div class="progress-bar bg-gradient-info w-40" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="40">
                            </div>
                          </div>
                        </div>
                      </td>
                    </tr>
                  </tbody>
                </table>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-md-6">
          <div class="card h-100">
            <div class="card-header pb-0">
              <h6 _msttexthash="400673" _msthash="130">Aperçu des commandes</h6>
              <p class="text-sm">
                <i class="fa fa-arrow-up text-success" aria-hidden="true"></i>
                <font _mstmutation="1" _msttexthash="174707" _msthash="131">
                  <span class="font-weight-bold" _mstmutation="1" _istranslated="1">24 %</span>ce mois-ci</font>
              </p>
            </div>
            <div class="card-body p-3">
              <div class="timeline timeline-one-side">
                <div class="timeline-block mb-3">
                  <span class="timeline-step">
                    <i class="material-icons text-success text-gradient" _msttexthash="234351" _msthash="132">Notifications</i>
                  </span>
                  <div class="timeline-content">
                    <h6 class="text-dark text-sm font-weight-bold mb-0" _msttexthash="901056" _msthash="133">2400 $, modifications de conception</h6>
                    <p class="text-secondary font-weight-bold text-xs mt-1 mb-0" _msttexthash="111566" _msthash="134">22 DÉC. 19:20</p>
                  </div>
                </div>
                <div class="timeline-block mb-3">
                  <span class="timeline-step">
                    <i class="material-icons text-danger text-gradient" _msttexthash="45383" _msthash="135">code</i>
                  </span>
                  <div class="timeline-content">
                    <h6 class="text-dark text-sm font-weight-bold mb-0" _msttexthash="451971" _msthash="136">Nouvelle commande #1832412</h6>
                    <p class="text-secondary font-weight-bold text-xs mt-1 mb-0" _msttexthash="82836" _msthash="137">21 DÉC 23 H</p>
                  </div>
                </div>
                <div class="timeline-block mb-3">
                  <span class="timeline-step">
                    <i class="material-icons text-info text-gradient" _msttexthash="234442" _msthash="138">shopping_cart</i>
                  </span>
                  <div class="timeline-content">
                    <h6 class="text-dark text-sm font-weight-bold mb-0" _msttexthash="678249" _msthash="139">Paiements serveur pour avril</h6>
                    <p class="text-secondary font-weight-bold text-xs mt-1 mb-0" _msttexthash="111267" _msthash="140">21 DÉC. 21:34</p>
                  </div>
                </div>
                <div class="timeline-block mb-3">
                  <span class="timeline-step">
                    <i class="material-icons text-warning text-gradient" _msttexthash="177593" _msthash="141">credit_card</i>
                  </span>
                  <div class="timeline-content">
                    <h6 class="text-dark text-sm font-weight-bold mb-0" _msttexthash="1379274" _msthash="142">Nouvelle carte ajoutée pour la commande #4395133</h6>
                    <p class="text-secondary font-weight-bold text-xs mt-1 mb-0" _msttexthash="109915" _msthash="143">20 DÉC. 02:20</p>
                  </div>
                </div>
                <div class="timeline-block mb-3">
                  <span class="timeline-step">
                    <i class="material-icons text-primary text-gradient" _msttexthash="47502" _msthash="144">clé</i>
                  </span>
                  <div class="timeline-content">
                    <h6 class="text-dark text-sm font-weight-bold mb-0" _msttexthash="1487811" _msthash="145">Débloquez des packages pour le développement</h6>
                    <p class="text-secondary font-weight-bold text-xs mt-1 mb-0" _msttexthash="112528" _msthash="146">18 DÉC. 04:54</p>
                  </div>
                </div>
                <div class="timeline-block">
                  <span class="timeline-step">
                    <i class="material-icons text-dark text-gradient" _msttexthash="136253" _msthash="147">Paiements</i>
                  </span>
                  <div class="timeline-content">
                    <h6 class="text-dark text-sm font-weight-bold mb-0" _msttexthash="454038" _msthash="148">Nouvelle commande #9583120</h6>
                    <p class="text-secondary font-weight-bold text-xs mt-1 mb-0" _msttexthash="53846" _msthash="149">17 DÉC</p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
   -->
   </div>
      <?php require('footer.php') ?>
