<!DOCTYPE html>
<html lang="fr">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="csrf-token" content="{{ csrf_token() }}">
<title>Vérification du billet</title>
<link rel="preconnect" href="https://fonts.googleapis.com">
<link href="https://fonts.googleapis.com/css2?family=Fraunces:opsz,wght@9..144,400;9..144,600;9..144,700&family=Inter:wght@400;500;600;700&family=Space+Mono:wght@400;700&display=swap" rel="stylesheet">
<style>
  :root{
    --ink:#1B2430;
    --page-bg:#F6F1E4;
    --card-bg:#FFFEFA;
    --brass:#C9A227;
    --brass-dark:#A4811C;
    --forest:#2F6F4E;
    --crimson:#A23B3B;
    --ochre:#B8732B;
    --charcoal:#2B2B2B;
    --line:rgba(27,36,48,0.14);
    --font-display:'Fraunces', serif;
    --font-body:'Inter', sans-serif;
    --font-mono:'Space Mono', monospace;
  }
  *{box-sizing:border-box;}
  body{margin:0;}
  @media (prefers-reduced-motion: reduce){ *{animation:none !important; transition:none !important;} }
  :focus-visible{outline:3px solid var(--brass); outline-offset:2px;}

  body{background:var(--page-bg); color:var(--charcoal); font-family:var(--font-body); line-height:1.45;}
  .app{max-width:680px; margin:0 auto; padding-bottom:64px;}

  .topbar{background:var(--ink); color:var(--page-bg); padding:20px 24px 22px;}
  .brand__eyebrow{font-family:var(--font-mono); font-size:11px; letter-spacing:0.14em; text-transform:uppercase; color:var(--brass);}
  .brand__title{font-family:var(--font-display); font-size:24px; font-weight:600; margin:4px 0 0;}

  main{padding:28px 24px;}
  h2.section-title{font-family:var(--font-display); font-weight:600; font-size:21px; margin:0 0 4px;}
  p.section-sub{margin:0 0 20px; color:rgba(43,43,43,0.65); font-size:14px;}

  .card{background:var(--card-bg); border:1px solid var(--line); border-radius:16px; padding:22px;}

  label{display:block; font-size:13px; font-weight:600; margin-bottom:6px; color:var(--ink);}
  input[type=text]{
    width:100%; padding:12px 14px; border:1px solid var(--line); border-radius:10px;
    font-family:var(--font-body); font-size:15px; background:#fff; color:var(--charcoal);
  }
  input:focus{border-color:var(--brass);}

  .btn{font-family:var(--font-body); font-weight:700; font-size:14px; border:none; border-radius:10px; padding:13px 20px; cursor:pointer;}
  .btn-primary{background:var(--ink); color:var(--page-bg); width:100%; margin-top:14px;}
  .btn-primary:hover{background:#0f151d;}
  .btn-primary[disabled]{opacity:0.55; cursor:not-allowed;}
  .btn-ghost{background:transparent; color:var(--ink); border:1px solid var(--line); width:100%; margin-top:14px;}
  .btn-ghost:hover{border-color:var(--ink);}

  .result-stamp{margin-top:20px; border-radius:16px; padding:26px; text-align:center; border:2px solid;}
  .result-stamp__title{
    font-family:var(--font-display); font-weight:700; font-size:23px; text-transform:uppercase; letter-spacing:0.04em;
    display:inline-block; padding:6px 18px; border:3px double; border-radius:8px; transform:rotate(-3deg);
  }
  .result-stamp__sub{margin-top:14px; font-size:13px;}
  .result-stamp--valid{background:rgba(47,111,78,0.06); border-color:var(--forest); color:var(--forest);}
  .result-stamp--invalid{background:rgba(162,59,59,0.06); border-color:var(--crimson); color:var(--crimson);}
  .result-stamp--used{background:rgba(184,115,43,0.07); border-color:var(--ochre); color:var(--ochre);}

  .guest-confirm{display:flex; gap:14px; align-items:center; background:#fff; border:1px solid var(--line); border-radius:12px; padding:14px; margin-top:16px; text-align:left;}
  .guest-confirm img, .guest-confirm .avatar-placeholder{width:56px; height:56px; border-radius:10px; object-fit:cover; background:var(--page-bg);}
  .avatar-placeholder{display:flex; align-items:center; justify-content:center; font-family:var(--font-display); font-size:20px; color:rgba(43,43,43,0.4);}
  .guest-confirm .gname{font-family:var(--font-display); font-weight:600; font-size:16px; color:var(--charcoal); margin:0 0 4px;}
  .guest-confirm .gmeta{font-size:12.5px; color:rgba(43,43,43,0.6); margin:0;}

  .form-error{color:var(--crimson); font-size:13px; margin-top:8px; display:none;}

  .log-table-wrap{margin-top:34px;}
  table{width:100%; border-collapse:collapse; font-size:13px;}
  th{text-align:left; font-family:var(--font-mono); font-size:11px; text-transform:uppercase; letter-spacing:0.06em; color:rgba(43,43,43,0.55); padding:8px 10px; border-bottom:1px solid var(--line);}
  td{padding:10px; border-bottom:1px solid var(--line);}
  .badge{font-family:var(--font-mono); font-size:11px; padding:4px 9px; border-radius:999px; display:inline-block;}
  .badge-valid{background:rgba(47,111,78,0.12); color:var(--forest);}
  .badge-used{background:rgba(184,115,43,0.14); color:var(--ochre);}
  .badge-invalid{background:rgba(162,59,59,0.12); color:var(--crimson);}
  .empty-row td{color:rgba(43,43,43,0.5); text-align:center; padding:24px;}
</style>
</head>
<body>

<div class="app">
  <div class="topbar">
    <span class="brand__eyebrow">Billetterie d'invitation</span>
    <h1 class="brand__title">Vérification du billet</h1>
  </div>

  <main>
    <h2 class="section-title">Confirmer l'identité</h2>
    <p class="section-sub">Saisissez le nom complet inscrit sur le billet présenté à l'entrée.</p>

    <div class="card">
      <form id="verify-form">
        @csrf
        <label for="nom-complet">Nom complet</label>
        <input type="text" id="nom-complet" name="nom_complet" placeholder="Nom et prénom" autocomplete="off" autofocus>
        <div class="form-error" id="form-error">Veuillez saisir un nom complet.</div>
        <button type="submit" class="btn btn-primary" id="btn-verify">Vérifier le billet</button>
      </form>

      <div id="result-area"></div>
    </div>

    <div class="log-table-wrap">
      <h2 class="section-title">Journal des vérifications</h2>
      <div class="card" style="padding:0; overflow:auto;">
        <table>
          <thead><tr><th>Heure</th><th>Nom saisi</th><th>Résultat</th></tr></thead>
          <tbody id="log-body">
            @forelse ($logs as $entry)
              <tr>
                <td>{{ $entry->created_at->format('d/m/Y H:i') }}</td>
                <td>{{ $entry->nom_saisi }}</td>
                <td>
                  @if ($entry->result === 'valide')
                    <span class="badge badge-valid">Valide</span>
                  @elseif ($entry->result === 'deja_utilise')
                    <span class="badge badge-used">Déjà utilisé</span>
                  @else
                    <span class="badge badge-invalid">Invalide</span>
                  @endif
                </td>
              </tr>
            @empty
              <tr class="empty-row" id="empty-log-row"><td colspan="3">Aucune vérification effectuée pour l'instant.</td></tr>
            @endforelse
          </tbody>
        </table>
      </div>
    </div>
  </main>
</div>

<script>
(function(){
  "use strict";

  var form = document.getElementById('verify-form');
  var input = document.getElementById('nom-complet');
  var btn = document.getElementById('btn-verify');
  var resultArea = document.getElementById('result-area');
  var formError = document.getElementById('form-error');
  var logBody = document.getElementById('log-body');
  var emptyLogRow = document.getElementById('empty-log-row');
  var csrfToken = document.querySelector('meta[name="csrf-token"]').getAttribute('content');

  function escapeHtml(s){
    return String(s).replace(/[&<>"']/g, function(c){
      return {'&':'&amp;','<':'&lt;','>':'&gt;','"':'&quot;',"'":'&#39;'}[c];
    });
  }

  function nowLabel(){
    var d = new Date();
    var pad = function(n){ return String(n).padStart(2, '0'); };
    return pad(d.getDate()) + '/' + pad(d.getMonth()+1) + '/' + d.getFullYear() + ' ' + pad(d.getHours()) + ':' + pad(d.getMinutes());
  }

  function prependLogRow(nomSaisi, status){
    if (emptyLogRow) { emptyLogRow.remove(); emptyLogRow = null; }
    var badgeClass = status === 'valide' ? 'badge-valid' : (status === 'deja_utilise' ? 'badge-used' : 'badge-invalid');
    var label = status === 'valide' ? 'Valide' : (status === 'deja_utilise' ? 'Déjà utilisé' : 'Invalide');
    var tr = document.createElement('tr');
    tr.innerHTML = '<td>' + nowLabel() + '</td><td>' + escapeHtml(nomSaisi) + '</td><td><span class="badge ' + badgeClass + '">' + label + '</span></td>';
    logBody.insertBefore(tr, logBody.firstChild);
  }

  function renderResult(status, message, guest){
    var cls, title;
    if (status === 'valide'){ cls = 'result-stamp--valid'; title = 'Billet valide'; }
    else if (status === 'deja_utilise'){ cls = 'result-stamp--used'; title = 'Déjà utilisé'; }
    else { cls = 'result-stamp--invalid'; title = 'Billet invalide'; }

    var guestBlock = '';
    if (guest){
      var photo = guest.photo_url
        ? '<img src="' + guest.photo_url + '" alt="">'
        : '<div class="avatar-placeholder">' + escapeHtml(guest.nom_complet.charAt(0).toUpperCase()) + '</div>';
      guestBlock =
        '<div class="guest-confirm">' + photo +
          '<div><p class="gname">' + escapeHtml(guest.nom_complet) + '</p>' +
          '<p class="gmeta">' + escapeHtml(guest.telephone) + (guest.numero_compte ? ' · Compte ' + escapeHtml(guest.numero_compte) : '') + '</p></div>' +
        '</div>';
    }

    resultArea.innerHTML =
      '<div class="result-stamp ' + cls + '">' +
        '<div class="result-stamp__title">' + title + '</div>' +
        '<div class="result-stamp__sub">' + escapeHtml(message) + '</div>' +
        guestBlock +
      '</div>' +
      '<button type="button" class="btn btn-ghost" id="btn-new-check">Nouvelle vérification</button>';

    document.getElementById('btn-new-check').addEventListener('click', function(){
      resultArea.innerHTML = '';
      input.value = '';
      input.focus();
    });
  }

  form.addEventListener('submit', function(e){
    e.preventDefault();
    var nom = input.value.trim();
    if (!nom){
      formError.style.display = 'block';
      return;
    }
    formError.style.display = 'none';
    btn.disabled = true;
    btn.textContent = 'Vérification...';
    resultArea.innerHTML = '';

    fetch('{{ route("verification.verify") }}', {
      method: 'POST',
      headers: {
        'Content-Type': 'application/json',
        'Accept': 'application/json',
        'X-CSRF-TOKEN': csrfToken
      },
      body: JSON.stringify({ nom_complet: nom })
    })
    .then(function(res){
      if (!res.ok) throw new Error('network');
      return res.json();
    })
    .then(function(data){
      renderResult(data.status, data.message, data.guest || null);
      prependLogRow(nom, data.status);
    })
    .catch(function(){
      renderResult('invalide', "Erreur réseau, veuillez réessayer.", null);
    })
    .finally(function(){
      btn.disabled = false;
      btn.textContent = 'Vérifier le billet';
    });
  });
})();
</script>
</body>
</html>
