<?php
/** @var \Ciclost\Proyecto1\Class\User[] $usuarios */
$title     = 'Gestión de Usuarios | AuraVerse Nexus';
$shellType = 'web_dashboard';
include "app/Views/backend/new_template/backend.head.php";
include "app/Views/backend/new_template/backend.aside.php";
?>

    <main class="relative pt-16 bg-surface min-h-screen px-gutter-lg py-space-lg">
        <div class="max-w-4xl mx-auto bg-surface-container-low p-space-lg rounded-xl shadow-lg">

            <div class="flex items-center justify-between mb-6 border-b border-surface-container-highest pb-4">
                <h1 class="font-headline-lg text-headline-lg text-on-surface tracking-wide">LISTA DE USUARIOS</h1>
                <div class="flex items-center gap-4">
                    <span class="font-label-md text-label-md text-tertiary">TOTAL: <?= count($usuarios) ?></span>
                    <!-- Botón para ir a la vista de crear -->
                    <a href="/user/create" class="px-3 py-1.5 rounded bg-primary-container text-on-primary-container font-label-sm text-label-sm uppercase tracking-wider hover:brightness-110 transition-all">
                        + Nuevo Usuario
                    </a>
                </div>
            </div>

            <table class="w-full text-left border-collapse">
                <thead>
                <tr class="font-label-sm text-label-sm text-outline uppercase tracking-wider border-b border-surface-container-highest">
                    <th class="py-2 px-3">ID</th>
                    <th class="py-2 px-3">Nombre</th>
                    <th class="py-2 px-3">Email</th>
                    <th class="py-2 px-3">Teléfono</th>
                    <th class="py-2 px-3 text-right">Acciones</th> <!-- Nueva columna -->
                </tr>
                </thead>
                <tbody class="divide-y divide-surface-container-highest text-body-sm font-body-sm">
                <?php foreach ($usuarios as $u): ?>
                    <tr class="hover:bg-surface-container transition-colors">
                        <td class="py-3 px-3 text-outline">#<?= $u->getId() ?></td>
                        <td class="py-3 px-3 font-bold text-on-surface"><?= htmlspecialchars($u->getNombre()) ?></td>
                        <td class="py-3 px-3 text-on-surface-variant"><?= htmlspecialchars($u->getEmail()) ?></td>
                        <td class="py-3 px-3 text-on-surface-variant"><?= htmlspecialchars($u->getPhone()) ?></td>

                        <!-- Botones de Editar y Borrar -->
                        <td class="py-3 px-3 text-right">
                            <div class="flex items-center justify-end gap-2">
                                <a href="/user/edit/<?= $u->getId() ?>" class="p-1.5 rounded hover:bg-surface-container-highest text-primary transition-colors" title="Editar">
                                    <span class="material-symbols-outlined text-lg">edit</span>
                                </a>
                                <a href="/user/destroy/<?= $u->getId() ?>" onclick="return confirm('¿Seguro que quieres borrar este usuario?')" class="p-1.5 rounded hover:bg-surface-container-highest text-error transition-colors" title="Borrar">
                                    <span class="material-symbols-outlined text-lg">delete</span>
                                </a>
                            </div>
                        </td>
                    </tr>
                <?php endforeach; ?>
                </tbody>
            </table>

        </div>
    </main>

<?php include "app/Views/backend/new_template/backend.footer.php"; ?>