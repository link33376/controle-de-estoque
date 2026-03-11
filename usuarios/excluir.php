<?php
require_once __DIR__ . '/../config.php';
require_once BASE_PATH . '/src/usuario_crud.php';

$titulo = "Excluir Usuário |";
require_once BASE_PATH . '/includes/cabecalho.php';

// Verifica se o ID foi passado na URL
if (!isset($_GET['id']) || empty($_GET['id'])) {
    header('Location: listar.php?erro=ID não informado');
    exit;
}

$id = $_GET['id'];

// Busca os dados do usuário para mostrar o nome
$usuario = buscarUsuarioPorId($conexao, $id);

// Se não encontrar o usuário, redireciona
if (!$usuario) {
    header('Location: listar.php?erro=Usuário não encontrado');
    exit;
}

// Verifica se a confirmação de exclusão foi enviada
if (isset($_GET['confirmar-exclusao'])) {
    // Tenta excluir o usuário
    if (excluirUsuario($conexao, $id)) {
        header('Location: listar.php?sucesso=Usuário excluído com sucesso');
    } else {
        header('Location: listar.php?erro=Erro ao excluir usuário');
    }
    exit;
}
?>

<section class="mb-4 border rounded-3 p-4 border-primary-subtle">
    <h3 class="text-center"><i class="bi bi-trash3-fill"></i> Excluir Usuário</h3>

    <div class="alert alert-danger w-50 text-center mx-auto">
        <p>Deseja realmente excluir o usuário <strong><?= htmlspecialchars($usuario['nome']) ?></strong>?</p>
        <p>Email: <?= htmlspecialchars($usuario['email']) ?></p>
        
        <div class="mt-3">
            <a href="listar.php" class="btn btn-secondary">
                <i class="bi bi-x-circle"></i> Não, cancelar
            </a>
            <a href="?id=<?= $id ?>&confirmar-exclusao" class="btn btn-danger">
                <i class="bi bi-check-circle"></i> Sim, excluir
            </a>
        </div>
    </div>
</section>

<?php require_once BASE_PATH . '/includes/rodape.php'; ?>