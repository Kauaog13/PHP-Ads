<?php

/** @var array $usuarios */ ?>

<h3>Lista de Usuários</h3>

<?php if (empty($usuarios)): ?>
  <p>Nenhum usuário encontrado.</p>
<?php else: ?>
  <table style="border-collapse: collapse; width: 100%;" border="1">
    <thead>
      <tr style="background: #f3f3f3;">
        <th style="padding: 8px;">ID</th>
        <th style="padding: 8px;">Nome</th>
        <th style="padding: 8px;">Sobrenome</th>
        <th style="padding: 8px;">Idade</th>
        <th style="padding: 8px;">Sexo</th>
        <th style="padding: 8px;">Ações</th>
      </tr>
    </thead>
    <tbody>
      <?php foreach ($usuarios as $u): ?>
        <tr>
          <td style="padding: 8px;"><?= htmlspecialchars($u['id']) ?></td>
          <td style="padding: 8px;"><?= htmlspecialchars($u['nome']) ?></td>
          <td style="padding: 8px;"><?= htmlspecialchars($u['sobrenome']) ?></td>
          <td style="padding: 8px;"><?= htmlspecialchars($u['idade']) ?></td>
          <td style="padding: 8px;"><?= htmlspecialchars($u['sexo']) ?></td>
          <td style="padding: 8px;">
            <a href="index.php?action=deletar&id=<?= $u['id'] ?>"
              onclick="return confirm('Tem certeza que deseja excluir?');">
              Deletar
            </a>
            <a href=""
              onclick="return confirm('Tem certeza que deseja editar?');">
              Editar
            </a>
          </td>
        </tr>
      <?php endforeach; ?>
    </tbody>
  </table>
<?php endif; ?>