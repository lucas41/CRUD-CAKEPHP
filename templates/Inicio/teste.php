<h1> visualizando produtos </h1>
    
<br><br>
<h6> Nome do produto: <?= $produtos['Nome']; ?></h6>
<h6> Preço do produto: R$<?= $produtos['Preco']; ?></h6>
<h6> Descrição do produto: <?= $produtos['descricao']; ?></h6>
<img style="  width: 250px; position: absolute; left: 40%; top: 50%;" src="../../image/<?=$produtos['image'];?>" > 


<a href="/inicio" class="button" style=" position: absolute; top: 200%; margin-left:-110px;"> Voltar </a>

<!-- Widget do selo do Calendly - início -->
<link href="https://assets.calendly.com/assets/external/widget.css" rel="stylesheet">
<script src="https://assets.calendly.com/assets/external/widget.js" type="text/javascript"></script>
<script type="text/javascript">Calendly.initBadgeWidget({ url: 'https://calendly.com/delfini-lucas', text: 'Agende um horário comigo', color: '#00a2ff', textColor: '#ffffff', branding: false });</script>
<!-- Widget do selo do Calendly - fim -->