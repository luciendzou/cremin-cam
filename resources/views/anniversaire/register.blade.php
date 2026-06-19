<!DOCTYPE html>
<html lang="fr">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="csrf-token" content="{{ csrf_token() }}">
<title>Enregistrement des invités</title>
<link rel="preconnect" href="https://fonts.googleapis.com">
<link href="https://fonts.googleapis.com/css2?family=Fraunces:opsz,wght@9..144,400;9..144,600;9..144,700&family=Inter:wght@400;500;600;700&family=Space+Mono:wght@400;700&display=swap" rel="stylesheet">
<style>
  :root{
    --ink:#0F172A;
    --page-bg:#F8FAFC;
    --card-bg:#FFFBF0;
    --brass:#D4A217;
    --brass-dark:#B8860B;
    --forest:#1E40AF;
    --crimson:#1E40AF;
    --ochre:#2563EB;
    --charcoal:#1E293B;
    --line:rgba(15,23,42,0.12);
    --font-display:'Fraunces', serif;
    --font-body:'Inter', sans-serif;
    --font-mono:'Space Mono', monospace;
  }
  *{box-sizing:border-box;}
  body{margin:0;}
  @media (prefers-reduced-motion: reduce){ *{animation:none !important; transition:none !important;} }
  :focus-visible{outline:3px solid var(--brass); outline-offset:2px;}

  body{background:var(--page-bg); color:var(--charcoal); font-family:var(--font-body); line-height:1.45;}
  .app{max-width:1080px; margin:0 auto; padding-bottom:64px;}

  .topbar{background:var(--ink); color:var(--page-bg); padding:20px 24px 22px;}
  .topbar__inner{display:flex; align-items:flex-end; justify-content:space-between; flex-wrap:wrap; gap:16px;}
  .brand{display:flex; flex-direction:column; gap:2px;}
  .brand__eyebrow{font-family:var(--font-mono); font-size:11px; letter-spacing:0.14em; text-transform:uppercase; color:var(--brass);}
  .brand__title{font-family:var(--font-display); font-size:26px; font-weight:600; margin:0;}
  .stats{display:flex; gap:22px; font-family:var(--font-mono); font-size:13px; color:rgba(246,241,228,0.8);}
  .stats b{display:block; font-size:20px; color:var(--page-bg); font-family:var(--font-display); font-weight:600;}

  main{padding:28px 24px;}
  h2.section-title{font-family:var(--font-display); font-weight:600; font-size:22px; margin:0 0 4px;}
  p.section-sub{margin:0 0 20px; color:rgba(43,43,43,0.65); font-size:14px;}

  .flash-success{background:rgba(47,111,78,0.1); border:1px solid var(--forest); color:var(--forest); padding:12px 16px; border-radius:10px; margin-bottom:20px; font-size:14px;}
  .flash-error{background:rgba(162,59,59,0.08); border:1px solid var(--crimson); color:var(--crimson); padding:12px 16px; border-radius:10px; margin-bottom:20px; font-size:14px;}
  .flash-error ul{margin:0; padding-left:18px;}

  .card{background:var(--card-bg); border:1px solid var(--line); border-radius:16px; padding:22px; max-width:560px;}
  label{display:block; font-size:13px; font-weight:600; margin-bottom:6px; color:var(--ink);}
  .field{margin-bottom:16px;}
  input[type=text], input[type=tel]{
    width:100%; padding:11px 13px; border:1px solid var(--line); border-radius:10px;
    font-family:var(--font-body); font-size:14px; background:#fff; color:var(--charcoal);
  }
  input:focus{border-color:var(--brass);}
  .row-2{display:grid; grid-template-columns:1fr 1fr; gap:14px;}
  @media (max-width:480px){.row-2{grid-template-columns:1fr;}}

  .photo-drop{border:1.5px dashed var(--line); border-radius:10px; padding:14px; display:flex; align-items:center; gap:12px; cursor:pointer; background:#fff;}
  .photo-drop:hover{border-color:var(--brass);}
  .photo-drop img{width:48px; height:48px; border-radius:8px; object-fit:cover; background:var(--page-bg);}
  .photo-drop span{font-size:13px; color:rgba(43,43,43,0.6);}
  .photo-drop input{display:none;}

  .btn{font-family:var(--font-body); font-weight:700; font-size:14px; border:none; border-radius:10px; padding:13px 20px; cursor:pointer;}
  .btn-primary{background:var(--ink); color:var(--page-bg); width:100%;}
  .btn-primary:hover{background:#0f151d;}

  .ledger-head{display:flex; justify-content:space-between; align-items:center; gap:12px; margin:32px 0 12px; flex-wrap:wrap;}
  .search-input{padding:9px 13px; border:1px solid var(--line); border-radius:9px; font-size:13px; width:220px; background:#fff;}
  table{width:100%; border-collapse:collapse; font-size:13px;}
  th{text-align:left; font-family:var(--font-mono); font-size:11px; text-transform:uppercase; letter-spacing:0.06em; color:rgba(43,43,43,0.55); padding:8px 10px; border-bottom:1px solid var(--line);}
  td{padding:10px; border-bottom:1px solid var(--line); vertical-align:middle;}
  tr:hover td{background:rgba(201,162,39,0.06);}
  .avatar{width:32px; height:32px; border-radius:7px; object-fit:cover; background:var(--page-bg); display:block;}
  .avatar-placeholder{width:32px; height:32px; border-radius:7px; background:var(--page-bg); display:flex; align-items:center; justify-content:center; font-family:var(--font-display); font-size:13px; color:rgba(43,43,43,0.4);}
  .badge{font-family:var(--font-mono); font-size:11px; padding:4px 9px; border-radius:999px; display:inline-block; letter-spacing:0.03em;}
  .badge-valid{background:rgba(47,111,78,0.12); color:var(--forest);}
  .badge-used{background:rgba(184,115,43,0.14); color:var(--ochre);}
  .empty-row td{color:rgba(43,43,43,0.5); text-align:center; padding:30px;}
</style>
</head>
<body>

<div class="app">
  <div class="topbar">
    <div class="topbar__inner">
      <div class="brand">
        <span class="brand__eyebrow">Billetterie d'invitation</span>
        <h1 class="brand__title">Enregistrement des invités</h1>
      </div>
      <div class="stats">
        <div>Invités<b>{{ $guests->count() }}</b></div>
        <div>Entrées validées<b>{{ $guests->where('status', 'utilise')->count() }}</b></div>
      </div>
    </div>
  </div>

  <main>
    @if (session('success'))
      <div class="flash-success">{{ session('success') }}</div>
    @endif

    @if ($errors->any())
      <div class="flash-error">
        <ul>
          @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
          @endforeach
        </ul>
      </div>
    @endif

    <h2 class="section-title">Enregistrer un invité</h2>
    <p class="section-sub">Ces informations permettront de vérifier l'invité à l'entrée.</p>

    <form class="card" action="{{ route('invites.store') }}" method="POST" enctype="multipart/form-data">
      @csrf
      <div class="row-2">
        <div class="field">
          <label for="f-nom">Nom *</label>
          <input type="text" id="f-nom" name="nom" required value="{{ old('nom') }}">
        </div>
        <div class="field">
          <label for="f-prenom">Prénom *</label>
          <input type="text" id="f-prenom" name="prenom" required value="{{ old('prenom') }}">
        </div>
      </div>
      <div class="field">
        <label for="f-tel">Numéro de téléphone *</label>
        <input type="tel" id="f-tel" name="telephone" required value="{{ old('telephone') }}" placeholder="+237 6 00 00 00 00">
      </div>
      <div class="field">
        <label for="f-compte">Numéro de compte (optionnel)</label>
        <input type="text" id="f-compte" name="numero_compte" value="{{ old('numero_compte') }}">
      </div>
      <div class="field">
        <label>Photo (optionnelle)</label>
        <label class="photo-drop" id="photo-drop-label">
          <img id="photo-preview" src="" alt="" style="display:none;">
          <span id="photo-drop-text">Choisir une photo</span>
          <input type="file" name="photo" id="f-photo" accept="image/*">
        </label>
      </div>
      <button type="submit" class="btn btn-primary">Enregistrer l'invité</button>
    </form>

    <div class="ledger-head">
      <h2 class="section-title" style="margin:0;">Liste des invités</h2>
      <input type="text" class="search-input" id="search-guests" placeholder="Rechercher un nom...">
    </div>
    <div class="card" style="padding:0; overflow:auto; max-width:none;">
      <table>
        <thead>
          <tr><th></th><th>Nom complet</th><th>Téléphone</th><th>N° compte</th><th>Statut</th></tr>
        </thead>
        <tbody id="ledger-body">
          @forelse ($guests as $guest)
            <tr data-name="{{ \Illuminate\Support\Str::of($guest->prenom.' '.$guest->nom)->ascii()->lower() }}">
              <td>
                @if ($guest->photo_url)
                  <img class="avatar" src="{{ $guest->photo_url }}" alt="">
                @else
                  <div class="avatar-placeholder">{{ strtoupper(substr($guest->prenom, 0, 1)) }}</div>
                @endif
              </td>
              <td>{{ $guest->prenom }} {{ $guest->nom }}</td>
              <td>{{ $guest->telephone }}</td>
              <td>{{ $guest->numero_compte ?? '—' }}</td>
              <td>
                @if ($guest->status === 'utilise')
                  <span class="badge badge-used">Utilisé</span>
                @else
                  <span class="badge badge-valid">Valide</span>
                @endif
              </td>
            </tr>
          @empty
            <tr class="empty-row" id="empty-row"><td colspan="5">Aucun invité enregistré pour l'instant — remplissez le formulaire ci-dessus.</td></tr>
          @endforelse
        </tbody>
      </table>
    </div>
  </main>
</div>

<script>
  document.getElementById('f-photo').addEventListener('change', function(e){
    var file = e.target.files[0];
    if (!file) return;
    var reader = new FileReader();
    reader.onload = function(ev){
      var preview = document.getElementById('photo-preview');
      preview.src = ev.target.result;
    preview.style.display = 'block';
      document.getElementById('photo-drop-text').textContent = 'Photo sélectionnée — cliquer pour changer';
    };
    reader.readAsDataURL(file);
  });

  function normalize(s){
    return s.normalize('NFD').replace(/[\u0300-\u036f]/g, '').toLowerCase().trim();
  }
  document.getElementById('search-guests').addEventListener('input', function(){
    var q = normalize(this.value || '');
    document.querySelectorAll('#ledger-body tr[data-name]').forEach(function(row){
      var match = !q || row.getAttribute('data-name').indexOf(q) !== -1;
      row.style.display = match ? '' : 'none';
    });
  });
</script>
</body>
</html>
